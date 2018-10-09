<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/content.twig */
class __TwigTemplate_66688ec1758084e37b4fc2c48f70bfd8c5f7aa5bed937ed97938287b0c06e9b9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-panel--content\" data-panel-content>
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "themetweaker-panel--content"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/content.twig";
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
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--body", weight="100")*/
/*  #}*/
/* */
/* <div class="themetweaker-panel--content" data-panel-content>*/
/*   {{ widget_list('themetweaker-panel--content') }}*/
/* </div>*/
