<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.icon.twig */
class __TwigTemplate_875bdd9b15f8da0a8c9d79415fb14d1d927eba3e5047b493dd7c216e6dc1ce6b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAdminIconURL", array(), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAltAdminIconURL", array(), "method"))) {
            // line 8
            echo "  <div class=\"icon\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getAdminIconURL", array(), "method"), "html", null, true);
            echo "\" alt=\"\" /></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.icon.twig";
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
/*  # Payment methods list : line : header : icon*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=100)*/
/*  #}*/
/* */
/* {% if this.method.getAdminIconURL() and not this.method.getAltAdminIconURL() %}*/
/*   <div class="icon"><img src="{{ this.method.getAdminIconURL() }}" alt="" /></div>*/
/* {% endif %}*/
/* */
