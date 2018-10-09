<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/content/main.location.twig */
class __TwigTemplate_b84eaab846d5b8172ead10b7982470e78cca264c7ce5353977e1e029cb61e3f3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"breadcrumb\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.breadcrumb"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/content/main.location.twig";
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
/*  # Location (breadcrumbs)*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="300")*/
/*  #}*/
/* <div id="breadcrumb">*/
/*   {{ widget_list('layout.main.breadcrumb') }}*/
/* </div>*/
/* */
