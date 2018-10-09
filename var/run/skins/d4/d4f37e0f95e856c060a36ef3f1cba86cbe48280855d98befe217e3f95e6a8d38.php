<?php

/* top_message/body.twig */
class __TwigTemplate_0d78ad6994dcd54452970f08a01e6717f10cac9bbd92452181cba941a53d2f01 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"status-messages\" ";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHidden", array(), "method")) {
            echo " style=\"display: none;\"";
        }
        echo ">

  <a href=\"#\" class=\"close-message\" title=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Close")), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPath", array(), "method"), "html", null, true);
        echo "/spacer3.gif\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Close")), "html", null, true);
        echo "\" /></a>

  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasTopMessages", array(), "method")) {
            // line 10
            echo "    <ul>
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopMessages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 12
                echo "        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getType", array(0 => $context["data"]), "method"), "html", null, true);
                echo "\">
          ";
                // line 13
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPrefix", array(0 => $context["data"]), "method")) {
                    // line 14
                    echo "            <em>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPrefix", array(0 => $context["data"]), "method"), "html", null, true);
                    echo "</em>
          ";
                }
                // line 15
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getText", array(0 => $context["data"]), "method");
                echo "
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
  ";
        }
        // line 20
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "top_message/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 18,  60 => 15,  54 => 14,  52 => 13,  47 => 12,  43 => 11,  40 => 10,  38 => 9,  29 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Top messages*/
/*  #}*/
/* */
/* <div id="status-messages" {% if this.isHidden() %} style="display: none;"{% endif %}>*/
/* */
/*   <a href="#" class="close-message" title="{{ t('Close') }}"><img src="{{ this.getPath() }}/spacer3.gif" alt="{{ t('Close') }}" /></a>*/
/* */
/*   {% if this.hasTopMessages() %}*/
/*     <ul>*/
/*       {% for data in this.getTopMessages() %}*/
/*         <li class="{{ this.getType(data) }}">*/
/*           {% if this.getPrefix(data) %}*/
/*             <em>{{ this.getPrefix(data) }}</em>*/
/*           {% endif %}{{ this.getText(data)|raw }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
