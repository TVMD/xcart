<?php

/* items_list/body.twig */
class __TwigTemplate_d84c45ccc248fef0822cb46459e852d90a7b18b1656a22143db1cacb4e3efeb3 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getJSData", array(), "method")), "method");
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeadVisible", array(), "method")) {
            // line 9
            echo "    <div class=\"head-h2 ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListHeadClass", array(), "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListHead", array(), "method");
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagerVisible", array(), "method")) {
            // line 12
            echo "    <div class=\"list-pager\">";
            $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method");
            echo "</div>
  ";
        }
        // line 14
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeaderVisible", array(), "method")) {
            // line 15
            echo "    <div class=\"list-header\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header", "type" => "inherited"))), "html", null, true);
            echo "</div>
  ";
        }
        // line 17
        echo "
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 18
(isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"), "items_list/body.twig", 18)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 19
        echo "
  ";
        // line 20
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagerVisible", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "isPagesListVisible", array(), "method"))) {
            // line 21
            echo "    <div class=\"list-pager list-pager-bottom\">";
            $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method");
            echo "</div>
  ";
        }
        // line 23
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFooterVisible", array(), "method")) {
            // line 24
            echo "    <div class=\"list-footer\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer", "type" => "inherited"))), "html", null, true);
            echo "</div>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyListTemplateVisible", array(), "method")) {
            // line 28
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"), "items_list/body.twig", 28)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  108 => 29,  97 => 28,  95 => 27,  92 => 26,  86 => 24,  83 => 23,  77 => 21,  75 => 20,  72 => 19,  62 => 18,  59 => 17,  53 => 15,  50 => 14,  44 => 12,  41 => 11,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # List main template*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getWidgetTagAttributes())|raw }}>*/
/*   {% do this.displayCommentedData(this.getJSData()) %}*/
/* */
/*   {% if this.isHeadVisible() %}*/
/*     <div class="head-h2 {{ this.getListHeadClass() }}">{{ this.getListHead()|raw }}</div>*/
/*   {% endif %}*/
/*   {% if this.isPagerVisible() %}*/
/*     <div class="list-pager">{% do this.pager.display() %}</div>*/
/*   {% endif %}*/
/*   {% if this.isHeaderVisible() %}*/
/*     <div class="list-header">{{ widget_list('header', type='inherited') }}</div>*/
/*   {% endif %}*/
/* */
/*   {% include this.getPageBodyTemplate() %}*/
/* */
/*   {% if this.isPagerVisible() and this.pager.isPagesListVisible() %}*/
/*     <div class="list-pager list-pager-bottom">{% do this.pager.display() %}</div>*/
/*   {% endif %}*/
/*   {% if this.isFooterVisible() %}*/
/*     <div class="list-footer">{{ widget_list('footer', type='inherited') }}</div>*/
/*   {% endif %}*/
/* */
/*   {% if this.isEmptyListTemplateVisible() %}*/
/*     {% include this.getEmptyListTemplate() %}*/
/*   {% endif %}*/
/* </div>*/
/* */
