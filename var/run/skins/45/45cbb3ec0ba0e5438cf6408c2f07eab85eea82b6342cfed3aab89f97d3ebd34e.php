<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome_block/paypal/block.twig */
class __TwigTemplate_247b953c19bc3c6208806e6dd6b5f30777c2d3c52b05cdf7c9ca5c62372e2e93 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"block-content\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome-block.paypal.content"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/welcome_block/paypal/block.twig";
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
/*  # Block content*/
/*  #*/
/*  # @ListChild (list="welcome-block.paypal", weight="100")*/
/*  #}*/
/* */
/* <div class="block-content">*/
/*   {{ widget_list('welcome-block.paypal.content') }}*/
/* </div>*/
/* */
