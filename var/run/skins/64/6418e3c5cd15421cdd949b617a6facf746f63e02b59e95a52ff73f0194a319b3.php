<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/success/parts/buttons.twig */
class __TwigTemplate_38d46670109fa3f538c47bee87f4afa3fe9e6c188cf50a6515a979ea213a2659 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons-row\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.success.panel.buttons"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/success/parts/buttons.twig";
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
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel", weight="200")*/
/*  #}*/
/* */
/* <div class="buttons-row">*/
/*   {{ widget_list('checkout.success.panel.buttons') }}*/
/* </div>*/
/* */
