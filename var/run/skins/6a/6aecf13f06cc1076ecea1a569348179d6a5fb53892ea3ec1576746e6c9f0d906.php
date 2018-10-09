<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/CDev/Coupons/coupons_minilist.twig */
class __TwigTemplate_10c53dbbb49d871f168d855a16aa3c6025df7e888df03db8798412ae759418c0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDiscountCouponSubpanelVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "surcharge", array())), "method")) {
            // line 8
            echo "  <ul class=\"discount-coupons-panel\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDiscountCoupons", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["usedCoupon"]) {
                // line 10
                echo "      <li>
        <span>";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getPublicName", array(), "method"), "html", null, true);
                echo "</span>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usedCoupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/CDev/Coupons/coupons_minilist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Discount coupon subpanel*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals.modifier.name")*/
/*  #}*/
/* */
/* {% if this.isDiscountCouponSubpanelVisible(this.surcharge) %}*/
/*   <ul class="discount-coupons-panel">*/
/*     {% for usedCoupon in this.getDiscountCoupons() %}*/
/*       <li>*/
/*         <span>{{ usedCoupon.getPublicName() }}</span>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
