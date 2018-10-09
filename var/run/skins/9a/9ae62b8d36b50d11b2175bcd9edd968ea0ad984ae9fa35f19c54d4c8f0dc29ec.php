<?php

/* /var/www/next/output/xcart/src/skins/customer/product_box/parts/photo.twig */
class __TwigTemplate_9e8354136c853aad30a1368d38ebf71b15336d9b5280f8ec8c7a08a5869a0677 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"product-photo\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "photo", "type" => "nested", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product_box/parts/photo.twig";
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
/*  # Products list (list variant)*/
/*  #*/
/*  # @ListChild (list="productBlock.info", weight="100")*/
/*  #}*/
/* <div class="product-photo">*/
/*   {{ widget_list('photo', type='nested', product=this.product) }}*/
/* </div>*/
/* */
