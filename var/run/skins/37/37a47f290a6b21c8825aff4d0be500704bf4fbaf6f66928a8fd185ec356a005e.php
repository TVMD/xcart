<?php

/* /var/www/next/output/xcart/src/skins/admin/dashboard/parts/body_markup.twig */
class __TwigTemplate_ca50b46e90746c2a60614751d62a65ff08e996f77fa1a6b4394f07b8d149a29b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"center-block\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-center"))), "html", null, true);
        echo "
</div>

<div class=\"sidebar\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-sidebar"))), "html", null, true);
        echo "
</div>

<div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/dashboard/parts/body_markup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Dashboard page markup template*/
/*  #*/
/*  # @ListChild (list="dashboard", weight="100")*/
/*  #}*/
/* */
/* <div class="center-block">*/
/*     {{ widget_list('dashboard-center') }}*/
/* </div>*/
/* */
/* <div class="sidebar">*/
/*   {{ widget_list('dashboard-sidebar') }}*/
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* */
/* */
