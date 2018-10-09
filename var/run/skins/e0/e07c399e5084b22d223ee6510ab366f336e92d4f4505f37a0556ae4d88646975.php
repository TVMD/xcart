<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/VendorMessages/order/list/parts/spec.messages.twig */
class __TwigTemplate_8604e622e4f34137945bdaeac9ec7fd4f985335b5a6eddbd322765e453d11cc1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"messages-link ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "countUnreadMessages", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())), "method")) {
            echo "unread";
        } else {
            echo "read";
        }
        echo "\">
    <a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order_messages", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "order_number", array())))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displaySVGImage", array(0 => "modules/XC/VendorMessages/images/mail.svg"), "method"), "html", null, true);
        echo "<span>";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "countUnreadMessages", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())), "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X unread messages", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "countUnreadMessages", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())), "method")))), "html", null, true);
        } else {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Contact seller")), "html", null, true);
        }
        echo "</span></a>
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/VendorMessages/order/list/parts/spec.messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders list item : spec : date*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="350")*/
/*  #}*/
/* <li class="messages-link {% if this.countUnreadMessages(this.order) %}unread{% else %}read{% endif %}">*/
/*     <a href="{{ url('order_messages', '', {'order_number': this.order.order_number}) }}">{{ this.displaySVGImage('modules/XC/VendorMessages/images/mail.svg') }}<span>{% if this.countUnreadMessages(this.order) %}{{ t('X unread messages', {'count': this.countUnreadMessages(this.order)}) }}{% else %}{{ t('Contact seller') }}{% endif %}</span></a>*/
/* </li>*/
