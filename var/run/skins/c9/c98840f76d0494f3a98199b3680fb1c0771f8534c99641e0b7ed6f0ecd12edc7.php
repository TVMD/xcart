<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/panel.box.twig */
class __TwigTemplate_ccd4bf2de212c8c508cfe1d93fef8fbaa16f1ecd6b64304c0736aa1a29528056 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"box\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.panel.box"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/panel.box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart panel box*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="20")*/
/*  #}*/
/* */
/* <div class="box">*/
/*   {{ widget_list('cart.panel.box') }}*/
/* </div>*/
/* */
