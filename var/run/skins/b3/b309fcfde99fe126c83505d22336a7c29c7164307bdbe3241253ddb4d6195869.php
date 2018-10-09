<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/purchased/parts/columns/info/price.twig */
class __TwigTemplate_861fc2ad5860e734024f522f0b4fcc2a89ae7e1a62040a572833870c116a29e6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 7
            echo "  <div class=\"price\">
    ";
            // line 8
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFree", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                // line 9
                echo "      <div class=\"paid\">
        <span class=\"currency\">";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getPrice", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 13
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/purchased/parts/columns/info/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  29 => 10,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module price*/
/*  #*/
/*  # @ListChild (list="itemsList.module.purchased.columns.icon", weight="210")*/
/*  #}*/
/* {% if this.showPrice(this.module) %}*/
/*   <div class="price">*/
/*     {% if not this.isFree(this.module) %}*/
/*       <div class="paid">*/
/*         <span class="currency">{{ this.formatPrice(this.module.getPrice(), this.module.getCurrency()) }}</span>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
