<?php

/* /var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_data.twig */
class __TwigTemplate_09804b3d142d2d8b89eedc873cfbf8ac600695f7edf719837ba10f336d03f6a0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDetails", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method")) {
            // line 7
            echo "  <div id=\"event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "\" class=\"order-event-details event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "\">
    <div class=\"details\">
      <ul>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDetails", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method"));
            foreach ($context['_seq'] as $context["columnId"] => $context["columnData"]) {
                // line 11
                echo "          <li class=\"order-history-object-detail-column\">
            <ul>
              ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["columnData"]);
                foreach ($context['_seq'] as $context["cell_id"] => $context["cell"]) {
                    // line 14
                    echo "                <li>
                  <span class=\"event-details-label\">";
                    // line 15
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getName", array(), "method"), "html", null, true);
                    echo ":</span> <span class=\"value\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array(), "method"), "html", null, true);
                    echo "</span>
                </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['cell_id'], $context['cell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            </ul>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['columnData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  56 => 18,  45 => 15,  42 => 14,  38 => 13,  34 => 11,  30 => 10,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event date*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details.info", weight="30")*/
/*  #}*/
/* {% if this.getDetails(this.event) %}*/
/*   <div id="event-{{ this.event.eventId }}" class="order-event-details event-{{ this.event.eventId }}">*/
/*     <div class="details">*/
/*       <ul>*/
/*         {% for columnId, columnData in this.getDetails(this.event) %}*/
/*           <li class="order-history-object-detail-column">*/
/*             <ul>*/
/*               {% for cell_id, cell in columnData %}*/
/*                 <li>*/
/*                   <span class="event-details-label">{{ cell.getName() }}:</span> <span class="value">{{ cell.getValue() }}</span>*/
/*                 </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
