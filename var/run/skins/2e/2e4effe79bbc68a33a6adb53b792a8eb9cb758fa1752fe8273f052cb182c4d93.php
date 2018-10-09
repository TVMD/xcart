<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/popularity.twig */
class __TwigTemplate_6b0f4561aad636db861aa50339f475fa609f17effcd9baf05421c6aa75cc8be8 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDownloads", array(), "method") > 0)) {
            // line 9
            echo "  <span class=\"popularity\">
    ";
            // line 10
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/downloads.svg"), "method");
            echo "
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDownloads", array(), "method"), "html", null, true);
            echo "
  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/popularity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 10,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Popularity*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="25")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="25")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="25")*/
/*  #}*/
/* {% if this.module.getDownloads() > 0 %}*/
/*   <span class="popularity">*/
/*     {{ this.getSVGImage('images/downloads.svg')|raw }}*/
/*     {{ this.module.getDownloads() }}*/
/*   </span>*/
/* {% endif %}*/
/* */
