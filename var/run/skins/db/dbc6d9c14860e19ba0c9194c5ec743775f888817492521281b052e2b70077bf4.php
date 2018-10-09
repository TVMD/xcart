<?php

/* /var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/more.twig */
class __TwigTemplate_d0e78a8e56f95f2c20080190cf2b42d965406f264fe01b7a011c2e492be98309 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreLink", array(), "method")) {
            // line 8
            echo "  <div class=\"more-link-button\" onclick=\"self.location='";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreLink", array(), "method"), "html", null, true);
            echo "';\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreLinkTitle", array(), "method"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/more.twig";
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
/*  # Last page*/
/*  #*/
/*  # @ListChild (list="pager.admin.model.table.left", weight="300")*/
/*  #}*/
/* */
/* {% if this.getMoreLink() %}*/
/*   <div class="more-link-button" onclick="self.location='{{ this.getMoreLink() }}';">{{ this.getMoreLinkTitle() }}</div>*/
/* {% endif %}*/
/* */
