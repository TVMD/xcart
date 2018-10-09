<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/author.twig */
class __TwigTemplate_a181afdb21cfb4edb3ea6d4971d7a4d3105d5ffacc211f031fd334aeda88852e extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAuthorURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"author\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAuthorURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getAuthorName", array(), "method"), "html", null, true);
            echo "</a></div>
";
        } else {
            // line 12
            echo "  <div class=\"author\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getAuthorName", array(), "method"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 12,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="20")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="20")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="20")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="20")*/
/*  #}*/
/* {% if this.getAuthorURL(this.module) %}*/
/*   <div class="author"><a href="{{ this.getAuthorURL(this.module) }}">{{ this.module.getAuthorName() }}</a></div>*/
/* {% else %}*/
/*   <div class="author">{{ this.module.getAuthorName() }}</div>*/
/* {% endif%}*/
/* */
