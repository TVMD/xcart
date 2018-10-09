<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/USPS/refresh.twig */
class __TwigTemplate_52e19cf6ac941ed4d3b3ceb9e5f3fde4e0e36bccb001d000519946c66039b42d extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProcessorId", array(), "method") == "usps")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", "label" => "Refresh list of available methods", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "usps", "refresh")), "style" => "refresh-link"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/USPS/refresh.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Refresh shipping methods list (USPS) button template*/
/*  #*/
/*  # @ListChild (list="itemsList.shipping-methods.header", weight="20")*/
/*  #}*/
/* */
/* {% if this.getProcessorId() == 'usps' %}*/
/*   {{ widget('XLite\\View\\Button\\SimpleLink', label='Refresh list of available methods', location=url('usps', 'refresh'), style='refresh-link' ) }}*/
/* {% endif %}*/
/* */
