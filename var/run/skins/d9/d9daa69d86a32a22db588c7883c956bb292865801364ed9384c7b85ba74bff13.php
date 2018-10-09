<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.name.twig */
class __TwigTemplate_7dcadde1b26b0191e730c3301348aca7056318e9aaa37da61c622f9049841dd0 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isDeleted", array(), "method")) {
            // line 8
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
            echo "</a>
";
        }
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isDeleted", array(), "method")) {
            // line 11
            echo "  <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form :: products :: column :: name*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="20")*/
/*  #}*/
/* */
/* {% if not this.item.isDeleted() %}*/
/*   <a href="{{ this.item.getURL() }}">{{ this.item.getName() }}</a>*/
/* {% endif %}*/
/* {% if this.item.isDeleted() %}*/
/*   <span>{{ this.item.getName() }}</span>*/
/* {% endif %}*/
/* */
