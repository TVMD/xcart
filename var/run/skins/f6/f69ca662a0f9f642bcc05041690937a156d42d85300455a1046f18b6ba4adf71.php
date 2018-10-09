<?php

/* /var/www/next/output/xcart/src/skins/admin/address/order/parts/buttons.twig */
class __TwigTemplate_9a3a4ab9933dee28f4e1c77c73a42650c73c513e749d0cad430d0a789cd27081 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save changes")), "style" => "action"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/address/order/parts/buttons.twig";
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
/*  # Order address : buttons*/
/*  #*/
/*  # @ListChild (list="address.order.main", weight="400")*/
/*  #}*/
/* */
/* <div class="buttons">*/
/*   {{ widget('XLite\\View\\Button\\Submit', label=t('Save changes'), style='action') }}*/
/* </div>*/
/* */
