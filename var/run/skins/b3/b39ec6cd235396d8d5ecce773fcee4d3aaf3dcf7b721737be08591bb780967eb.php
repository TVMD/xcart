<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/link.twig */
class __TwigTemplate_1d8f625fac454b80a85a85e6688031e0f0a32008d28f4da211c2d4804e6cf32c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"archive-link\">
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreviousURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array())), "method")) {
            // line 9
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreviousURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Previous news")), "html", null, true);
            echo "</a>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNextURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array())), "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNextURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Next news")), "html", null, true);
            echo "</a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  36 => 12,  33 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # News message page template*/
/*  #*/
/*  # @ListChild (list="newsMessage.details", weight="400")*/
/*  #}*/
/* */
/* <div class="archive-link">*/
/*   {% if this.getPreviousURL(this.newsMessage) %}*/
/*     <a href="{{ this.getPreviousURL(this.newsMessage) }}">{{ t('Previous news') }}</a>*/
/*   {% endif %}*/
/*   {% if this.getNextURL(this.newsMessage) %}*/
/*     <a href="{{ this.getNextURL(this.newsMessage) }}">{{ t('Next news') }}</a>*/
/*   {% endif %}*/
/* </div>*/
/* */
