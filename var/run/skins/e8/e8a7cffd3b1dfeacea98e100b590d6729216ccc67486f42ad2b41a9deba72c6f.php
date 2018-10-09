<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.description.twig */
class __TwigTemplate_995a3eee757bff58d82356d8fc8bdd2a0ff502beebd073a0c911ebe4e7ebcf43 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminDescription", array(), "method")) {
            // line 8
            echo "  <div class=\"description\">";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment methods list : line : header : description*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=400)*/
/*  #}*/
/* */
/* {% if this.method.getAltAdminDescription() %}*/
/*   <div class="description">{{ this.method.getAltAdminDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
