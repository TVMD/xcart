<?php

/* /var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/multicurrency.twig */
class __TwigTemplate_d5e8cdc44497b59991e9272c7e78f22ead93ded3f7b1870cfea6c50887b91d25 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "multi-currency-1"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/multicurrency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Banner promo block*/
/*  #*/
/*  # @ListChild (list="crud.currency.currency.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\SimplePromoBlock', promoId="multi-currency-1") }}*/
/* */
