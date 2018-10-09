<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons_minilist.twig */
class __TwigTemplate_499bb8386a35a4510d19113b253c5e2043d187bf3489352b24159c87f5e3c2db extends \XLite\Core\Templating\Twig\Template
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
                echo "      <li title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($context["usedCoupon"], "getValue", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "\">
        ";
                // line 11
                if ($this->getAttribute($context["usedCoupon"], "isDeleted", array(), "method")) {
                    // line 12
                    echo "          ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getCode", array(), "method"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 14
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "coupon", 1 => "", 2 => array("id" => $this->getAttribute($this->getAttribute($context["usedCoupon"], "coupon", array()), "getId", array(), "method"))), "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getPublicName", array(), "method"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 16
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usedCoupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons_minilist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  52 => 16,  44 => 14,  38 => 12,  36 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
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
/*       <li title="{{ this.formatPrice(usedCoupon.getValue(), this.order.getCurrency()) }}">*/
/*         {% if usedCoupon.isDeleted() %}*/
/*           {{ usedCoupon.getCode() }}*/
/*         {% else %}*/
/*           <a href="{{ this.buildUrl('coupon', '', {'id': usedCoupon.coupon.getId()}) }}">{{ usedCoupon.getPublicName() }}</a>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
