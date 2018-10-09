<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/note.twig */
class __TwigTemplate_0626b06d95034665938f4e53e854429022faaef02930df7a0384e30f88cc3609 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getNotes", array(), "method")) {
            // line 7
            echo "  <div class=\"customer-note\">
    <h3>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer note")), "html", null, true);
            echo ":</h3>
    <div>";
            // line 9
            echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getNotes", array(), "method"), "html", null, true));
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order customer note*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="40")*/
/*  #}*/
/* {% if this.order.getNotes() %}*/
/*   <div class="customer-note">*/
/*     <h3>{{ t('Customer note') }}:</h3>*/
/*     <div>{{ this.order.getNotes()|nl2br }}</div>*/
/*   </div>*/
/* {% endif %}*/
/* */
