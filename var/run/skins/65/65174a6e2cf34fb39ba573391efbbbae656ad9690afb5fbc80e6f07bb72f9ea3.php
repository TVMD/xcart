<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/price.twig */
class __TwigTemplate_ba16e8621042fe0e95289d60cf9ade48cfec334f1c0b261eed3f706832843558 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"price\">
    ";
            // line 9
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFree", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                // line 10
                echo "      <div class=\"paid\">
        <span class=\"currency\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getPrice", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "</span>
        ";
                // line 12
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPurchased", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                    // line 13
                    echo "          <span class=\"purchased\">(";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Purchased")), "html", null, true);
                    echo ")</span>
        ";
                }
                // line 15
                echo "      </div>
    ";
            }
            // line 17
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  41 => 15,  35 => 13,  33 => 12,  29 => 11,  26 => 10,  24 => 9,  21 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Module price*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.icon", weight="210")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.icon", weight="210")*/
/*  #}*/
/* {% if this.showPrice(this.module) %}*/
/*   <div class="price">*/
/*     {% if not this.isFree(this.module) %}*/
/*       <div class="paid">*/
/*         <span class="currency">{{ this.formatPrice(this.module.getPrice(), this.module.getCurrency()) }}</span>*/
/*         {% if this.isPurchased(this.module) %}*/
/*           <span class="purchased">({{ t('Purchased') }})</span>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
