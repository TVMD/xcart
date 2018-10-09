<?php

/* /var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/wholesale.twig */
class __TwigTemplate_b9e23a4b5f2ab17ec52b6a96e204ff97fb4cd409b3a9030eacb80ee382a9254b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "wholesale-prices-1", "promoClasses" => array(0 => "inventory-wholesale")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/wholesale.twig";
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
/*  # @ListChild (list="form_model.product.inventory.before", zone="admin", weight="5")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\SimplePromoBlock', promoId="wholesale-prices-1", promoClasses=["inventory-wholesale"]) }}*/
/* */
