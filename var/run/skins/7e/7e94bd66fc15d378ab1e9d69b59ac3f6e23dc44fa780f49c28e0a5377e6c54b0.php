<?php

/* body.twig */
class __TwigTemplate_0a59d3773313c554bd6e77b2adacc64ce7c80c875a720ea14a6303210f58a2b6 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "code", array()), "html", null, true);
        echo "\" dir=\"";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "r2l", array())) {
            echo "rtl";
        } else {
            echo "ltr";
        }
        echo "\"
  ";
        // line 6
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
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Header"))), "html", null, true);
        echo "
<body class=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBodyClass", array(), "method"), "html", null, true);
        echo "\">
<!--email_off-->
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "body"))), "html", null, true);
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
        return array (  56 => 10,  51 => 8,  47 => 7,  32 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ this.currentLanguage.code }}" dir="{% if this.currentLanguage.r2l %}rtl{% else %}ltr{% endif %}"*/
/*   {% for k, v in this.getHTMLAttributes() %} {{ k }}="{{ v }}"{% endfor %}>*/
/* {{ widget('\\XLite\\View\\Header') }}*/
/* <body class="{{ this.getBodyClass() }}">*/
/* <!--email_off-->*/
/* {{ widget_list('body') }}*/
/* <!--/email_off-->*/
/* </body>*/
/* </html>*/
/* */
