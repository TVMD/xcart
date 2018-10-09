<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/promo.twig */
class __TwigTemplate_af97a25f48aed44bf60c0d42076154e6fae56a9957b3a7f8f45fcce69ef090d0 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "shopper-approved-1"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 8,  22 => 7,  19 => 1,);
    }
}
/* */
/* {##*/
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.review.footer", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\SimplePromoBlock', promoId="shopper-approved-1") }}*/
