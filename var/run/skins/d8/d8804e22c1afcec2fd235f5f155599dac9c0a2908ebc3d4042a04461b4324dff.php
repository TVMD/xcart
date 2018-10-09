<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/completed.messages.twig */
class __TwigTemplate_3da933a76fabb2ef0a5f3e00da0f820b70afb38655ff3c10683ccf410d6c6902 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessages", array(), "method")) {
            // line 8
            echo "  <ul class=\"messages\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "      <li>
        <i class=\"icon-ok\"></i> ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "text", array()), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["message"], "comment", array())) {
                    echo "<span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "comment", array()), "html", null, true);
                    echo "</span>";
                }
                // line 12
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
";
        }
        // line 16
        if ( !($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessages", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrorMessages", array(), "method"))) {
            // line 17
            echo "  <div class=\"empty\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrorMessages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "      <div class=\"message\">
        <i class=\"icon-ok\"></i> ";
                // line 20
                echo $this->getAttribute($context["message"], "text", array());
                echo " ";
                if ($this->getAttribute($context["message"], "comment", array())) {
                    echo "<div class=\"comment\">";
                    echo $this->getAttribute($context["message"], "comment", array());
                    echo "</div>";
                }
                // line 21
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/completed.messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  73 => 21,  65 => 20,  62 => 19,  58 => 18,  55 => 17,  53 => 16,  49 => 14,  42 => 12,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import completed section : errors */
/*  #*/
/*  # @ListChild (list="import.completed.content", weight="100")*/
/*  #}*/
/* */
/* {% if this.getMessages() %}*/
/*   <ul class="messages">*/
/*     {% for message in this.getMessages() %}*/
/*       <li>*/
/*         <i class="icon-ok"></i> {{ message.text }} {% if message.comment %}<span>{{ message.comment }}</span>{% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* {% if not (this.getMessages() and this.getErrorMessages()) %}*/
/*   <div class="empty">*/
/*     {% for message in this.getErrorMessages() %}*/
/*       <div class="message">*/
/*         <i class="icon-ok"></i> {{ message.text|raw }} {% if message.comment %}<div class="comment">{{ message.comment|raw }}</div>{% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
