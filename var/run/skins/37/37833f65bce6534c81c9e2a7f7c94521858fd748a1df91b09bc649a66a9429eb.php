<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/footer/main.footer.twig */
class __TwigTemplate_210dd39b0439c81d14f065ff6bae96a5f736bd115b3231138697709a24dc60af extends \XLite\Core\Templating\Twig\Template
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
<div id=\"footer-area\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.footer.before"))), "html", null, true);
        echo "
    <div class=\"container\">
        ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.footer"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/footer/main.footer.twig";
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
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="layout.footer", weight="500")*/
/*  #}*/
/* */
/* <div id="footer-area">*/
/*     {{ widget_list('layout.main.footer.before') }}*/
/*     <div class="container">*/
/*         {{ widget_list('layout.main.footer') }}*/
/*     </div>*/
/* </div>*/
/* */
