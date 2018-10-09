<?php

/* body.twig */
class __TwigTemplate_be06e178340c14db1db91c0bf354d3bd39919bf6eb1ed6cd7dd7eda2bb7a969c extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "getCode", array(), "method"), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHTMLAttributes", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["v"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Header"))), "html", null, true);
        echo "
<body ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyClass", array(), "method")) {
            echo "class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyClass", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
<!--email_off-->
";
        // line 9
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommonJSData", array(), "method")), "method");
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "body"))), "html", null, true);
        echo "
";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Footer"))), "html", null, true);
        echo "
<!--/email_off-->
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 10,  52 => 9,  43 => 7,  39 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common layout*/
/*  #}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ this.currentLanguage.getCode() }}"{% for k, v in this.getHTMLAttributes() %} {{ k }}="{{ v }}"{% endfor %}>*/
/*   {{ widget('\\XLite\\View\\Header') }}*/
/* <body {% if this.getBodyClass() %}class="{{ this.getBodyClass() }}"{% endif %}>*/
/* <!--email_off-->*/
/* {% do this.displayCommentedData(this.getCommonJSData()) %}*/
/* {{ widget_list('body') }}*/
/* {##*/
/*  # Please note that any custom list child of 'body' will NOT have its CSS/JS resources loaded because the resources block is being 'body' child itself. Use 'layout.main' or 'layout.footer' instead.*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Footer') }}*/
/* <!--/email_off-->*/
/* </body>*/
/* </html>*/
/* */
