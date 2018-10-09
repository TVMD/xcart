<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/begin.options.twig */
class __TwigTemplate_c647378a4011e94190ac7b176cc6020e450aa86e3a21c161241343de606420a0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"options\">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Export settings")), "html", null, true);
        echo "</h3>
  <ul class=\"small-input\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "export.begin.options"))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/begin.options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Export begin section : settings*/
/*  #*/
/*  # @ListChild (list="export.begin.content", weight="200")*/
/*  #}*/
/* */
/* <div class="options">*/
/*   <h3>{{ t('Export settings') }}</h3>*/
/*   <ul class="small-input">*/
/*     {{ widget_list('export.begin.options') }}*/
/*   </ul>*/
/* </div>*/
/* */
