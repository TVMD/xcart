<?php

/* /var/www/next/output/xcart/src/skins/admin/layout_settings/settings/parts/settings.layout_type.twig */
class __TwigTemplate_b7d0b6a1afd4e3efdf5a21578fe99f200b06d897069a030fa6416caec557cd2a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"layout-type-selector\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\LayoutSettings\\LayoutTypeSelector", "availableTypes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLayoutTypes", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/layout_settings/settings/parts/settings.layout_type.twig";
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
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="30")*/
/*  #}*/
/* <div class="layout-type-selector">*/
/*   {{ widget('XLite\\View\\LayoutSettings\\LayoutTypeSelector', availableTypes=this.getLayoutTypes()) }}*/
/* </div>*/
/* */
