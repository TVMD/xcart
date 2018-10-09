<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/placed.twig */
class __TwigTemplate_412d9f199e3c63284fe913c86ab130d23eae14a3cc8fd8d0dc469de49f56d417 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title\">
  <div class=\"placed-date\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Placed on DATE", array("date" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderDate", array(), "method"))));
        echo "</div>
  <div class=\"placed-customer\">
  ";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasProfilePage", array(), "method")) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Placed by _NAME_", array("name" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileName", array(), "method"), "url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileURL", array(), "method"))));
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Placed by NAME", array("name" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileName", array(), "method"))));
            echo "
  ";
        }
        // line 15
        echo "
  ";
        // line 16
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileEmail", array(), "method")) {
            // line 17
            echo "  <div class=\"profile-login\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "login"), "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 19
        echo "
  ";
        // line 20
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMembership", array(), "method")) {
            // line 21
            echo "    <span class=\"membership\">(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "membership", array()), "getName", array(), "method"), "html", null, true);
            echo ")</span>
  ";
        }
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/placed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  58 => 21,  56 => 20,  53 => 19,  47 => 17,  45 => 16,  42 => 15,  36 => 13,  30 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Order : placed box*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="30")*/
/*  #}*/
/* */
/* <div class="title">*/
/*   <div class="placed-date">{{ t('Placed on DATE', {'date': this.getOrderDate()})|raw }}</div>*/
/*   <div class="placed-customer">*/
/*   {% if this.hasProfilePage() %}*/
/*     {{ t('Placed by _NAME_', {'name': this.getProfileName(), 'url': this.getProfileURL()})|raw }}*/
/*   {% else %}*/
/*     {{ t('Placed by NAME', {'name': this.getProfileName()})|raw }}*/
/*   {% endif %}*/
/* */
/*   {% if this.getProfileEmail() %}*/
/*   <div class="profile-login">{{ this.orderForm.displayComplexField('login') }}</div>*/
/*   {% endif %}*/
/* */
/*   {% if this.getMembership() %}*/
/*     <span class="membership">({{ this.membership.getName() }})</span>*/
/*   {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
