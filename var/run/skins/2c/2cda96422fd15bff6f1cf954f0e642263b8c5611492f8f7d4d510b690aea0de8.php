<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/body.note.twig */
class __TwigTemplate_0e4c526defcc8041ba7468e9395da87343466907d0ea1e49944d109379b8bbfd extends \XLite\Core\Templating\Twig\Template
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
      ";
            // line 9
            echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getNotes", array(), "method"), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/body.note.twig";
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
/*  # @ListChild (list="packing_slip.base", weight="25")*/
/*  #}*/
/* {% if this.order.getNotes() %}*/
/*   <div class="customer-note">*/
/*       <h3>{{ t('Customer note') }}:</h3>*/
/*       {{ this.order.getNotes()|nl2br }}*/
/*   </div>*/
/* {% endif %}*/
/* */
