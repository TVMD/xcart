<?php

/* /var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details.twig */
class __TwigTemplate_a6b9424767f8087233c7b3c29a2d8309b9bf363d79e8bf8047205ea30337fd93 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"event-details\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.history.base.events.details", "event" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array())))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event details*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details.info", weight="10")*/
/*  #}*/
/* <ul class="event-details">*/
/*   {{ widget_list('order.history.base.events.details', event=this.event) }}*/
/* </ul>*/
/* */
