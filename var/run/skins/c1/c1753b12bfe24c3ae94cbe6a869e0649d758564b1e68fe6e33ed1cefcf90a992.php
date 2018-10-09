<?php

/* top_message/body.twig */
class __TwigTemplate_8092c0540a0600276ecd26cdd5f6e5d6c2e5965eafe7ba7fd22952e2ad866680 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status-messages-wrapper\">
  <div class=\"status-messages-wrapper2\">

    <div id=\"status-messages\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHidden", array(), "method")) {
            echo " style=\"display: none;\"";
        }
        echo ">

      <a href=\"#\" class=\"close\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Close")), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Close")), "html", null, true);
        echo "\" /></a>

      ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasTopMessages", array(), "method")) {
            // line 13
            echo "        <ul>
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopMessages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "            <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getType", array(0 => $context["data"]), "method"), "html", null, true);
                echo "\">
              ";
                // line 16
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPrefix", array(0 => $context["data"]), "method")) {
                    // line 17
                    echo "                <em>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPrefix", array(0 => $context["data"]), "method"), "html", null, true);
                    echo "</em>
              ";
                }
                // line 18
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getText", array(0 => $context["data"]), "method");
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
      ";
        }
        // line 23
        echo "
    </div>

  </div>
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
        return array (  76 => 23,  72 => 21,  63 => 18,  57 => 17,  55 => 16,  50 => 15,  46 => 14,  43 => 13,  41 => 12,  32 => 10,  25 => 8,  19 => 4,);
    }
}
/* {##*/
/*  # Top messages*/
/*  #}*/
/* */
/* <div class="status-messages-wrapper">*/
/*   <div class="status-messages-wrapper2">*/
/* */
/*     <div id="status-messages" {% if this.isHidden() %} style="display: none;"{% endif %}>*/
/* */
/*       <a href="#" class="close" title="{{ t('Close') }}"><img src="{{ asset('images/spacer.gif') }}" alt="{{ t('Close') }}" /></a>*/
/* */
/*       {% if this.hasTopMessages() %}*/
/*         <ul>*/
/*           {% for data in this.getTopMessages() %}*/
/*             <li class="{{ this.getType(data) }}">*/
/*               {% if this.getPrefix(data) %}*/
/*                 <em>{{ this.getPrefix(data) }}</em>*/
/*               {% endif %}{{ this.getText(data)|raw }}*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
