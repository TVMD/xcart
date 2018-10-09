<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MultiCurrency\Core\RateProvider;

/**
 * Currency converter (https://www.currencyconverterapi.com/)
 */
class FreeCurrencyConverterAPI extends \XLite\Module\XC\MultiCurrency\Core\RateProvider\ARateProvider
{
    /**
     * URL to post request for rate
     *
     * @var string
     */
    protected $url = 'https://free.currencyconverterapi.com/api/v5/';

    /**
     * Get currency conversion rate
     *
     * @param string $from Source currency code (alpha-3)
     * @param string $to   Destination currency code (alpha-3)
     *
     * @return float
     */
    public function getRate($from, $to)
    {
        $result = null;

        $response = $this->sendRequest([
            'q' => $from . '_' . $to,
            'compact' => 'ultra',
        ]);

        if (!is_null($response)) {
            $rate = $this->parseResponse($from, $to, $response);

            if ($rate) {
                $result = (float) $rate;
            }
        }

        return $result;
    }

    /**
     * @param array $data
     *
     * @return null|string
     */
    protected function sendRequest(array $data)
    {
        $request = new \XLite\Core\HTTP\Request($this->url . 'convert?' . http_build_query($data));

        $request->verb = 'GET';

        $response = $request->sendRequest();

        return $response
        && $response->code === 200
        && !empty($response->body)
            ? $response->body
            : null;
    }


    /**
     * Parse server response
     *
     * @param string $from     Source currency code (alpha-3)
     * @param string $to       Destination currency code (alpha-3)
     * @param string $response Server response
     *
     * @return string
     */
    protected function parseResponse($from, $to, $response)
    {
        $q = $from . '_' . $to;
        $response = @json_decode($response, true);

        $result = isset($response[$q]) ? $response[$q] : null;

        return $result;
    }
}
