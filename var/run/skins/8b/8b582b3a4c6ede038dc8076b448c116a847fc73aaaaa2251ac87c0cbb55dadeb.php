<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/VendorMessages/order/parts/link.messages.twig */
class __TwigTemplate_4900ae921aa12deefc603c26c5d68785bb01c8859ecad423323a0a5e3e56f18e extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"messages\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\VendorMessages\\View\\Button\\Messages"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/VendorMessages/order/parts/link.messages.twig";
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
/*  # Messages button wrapper*/
/*  #*/
/*  # @ListChild (list="order.links", weight="10")*/
/*  #}*/
/* <li class="messages">*/
/*   {{ widget('XLite\\Module\\XC\\VendorMessages\\View\\Button\\Messages') }}*/
/* </li>*/
/* */
