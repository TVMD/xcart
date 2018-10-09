<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/staff_note.twig */
class __TwigTemplate_d9e3135dc04d2ce079120eaa14230bb04fb8569aab925f520ca439be8a4c905e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-note staff-note\">
  <div class=\"order-note-box\">
    <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Staff note")), "html", null, true);
        echo "</h2>
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "staffNote"), "method"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/staff_note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Order: Staff note*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="50")*/
/*  #}*/
/* */
/* <div class="order-note staff-note">*/
/*   <div class="order-note-box">*/
/*     <h2>{{ t('Staff note') }}</h2>*/
/*     {{ this.orderForm.displayComplexField('staffNote') }}*/
/*   </div>*/
/* </div>*/
/* */
