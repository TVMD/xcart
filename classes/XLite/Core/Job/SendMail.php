<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Job;


class SendMail extends JobAbstract
{
    use SerializeModels;

    protected $name;
    protected $arguments;

    public function __construct($name, $arguments)
    {
        parent::__construct();

        $this->name = $name;
        $this->arguments = $arguments;
    }

    public function getName()
    {
        return 'Mail #' . $this->id;
    }

    public function handle()
    {
        $this->markAsStarted();
        $function = array('\XLite\Core\Mailer', $this->name);

        // This is hack to avoid recursive scheduling
        \XLite\Core\Mailer::setSchedule(false);
        \XLite\Core\Mailer::setScheduledJob(null);
        call_user_func_array($function, $this->arguments);
        \XLite\Core\Mailer::setSchedule(true);
        $this->markAsFinished();
    }
}
