<?php

/* /var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_comment.twig */
class __TwigTemplate_88b41d811cc8c281610a482e5a72cc4b743f2351345c67a60e95d9a65f42086d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComment", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method")) {
            // line 7
            echo "  <div id=\"event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "\" class=\"order-event-details event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "eventId", array()), "html", null, true);
            echo "\">
    <div class=\"details\">";
            // line 8
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComment", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())), "method");
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_comment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event date*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details.info", weight="20")*/
/*  #}*/
/* {% if this.getComment(this.event) %}*/
/*   <div id="event-{{ this.event.eventId }}" class="order-event-details event-{{ this.event.eventId }}">*/
/*     <div class="details">{{ this.getComment(this.event)|raw }}</div>*/
/*   </div>*/
/* {% endif %}*/
/* */
