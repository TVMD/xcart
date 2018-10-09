<?php

/* /var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/banner_system.twig */
class __TwigTemplate_ce76805a518e5e3ee26401fa3b4bc570b4ce9b17f28e7a2bdc79db28d37a1b2f extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "banner-system-1"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/banner_system.twig";
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
/*  # @ListChild (list="crud.bannerrotation.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\SimplePromoBlock', promoId="banner-system-1") }}*/
/* */
