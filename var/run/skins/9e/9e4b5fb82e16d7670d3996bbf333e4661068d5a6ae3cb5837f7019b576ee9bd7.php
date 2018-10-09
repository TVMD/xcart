<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/details.twig */
class __TwigTemplate_8616143a5a9f6d6b16f17f9255ea6b373084daef3bca9a474bd8400f8b8513d8 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"zone-details\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "zones.zone.details"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/details.twig";
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
/*  # Zone details template*/
/*  #*/
/*  # @ListChild (list="zones.zone", weight="200")*/
/*  #}*/
/* */
/* <ul class="zone-details">*/
/*   {{ widget_list('zones.zone.details') }}*/
/* </ul>*/
/* */
