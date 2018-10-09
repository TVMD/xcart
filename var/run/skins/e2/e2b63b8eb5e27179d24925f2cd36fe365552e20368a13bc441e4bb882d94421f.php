<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/name.twig */
class __TwigTemplate_3c36f741cdb95c4671fa434bf8c296248bbe2d782daf022b072f559391a3d7af extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"name\">
      ";
            // line 11
            ob_start();
            // line 12
            echo "        <a class=\"module-name\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getName", array(), "method"), "html", null, true);
            echo "\" target=\"blank\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "</a>
        <a href=\"";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\" target=\"blank\" class=\"fa fa-external-link\"></a>
      ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 15
            echo "  </div>
";
        } else {
            // line 17
            echo "  <div class=\"name\"><a class=\"module-name no-link\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getName", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleName", array(), "method"), "html", null, true);
            echo "</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 17,  40 => 15,  35 => 13,  26 => 12,  24 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Module name*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="10")*/
/*  #}*/
/* {% if this.getPageURL(this.module) %}*/
/*   <div class="name">*/
/*       {% spaceless %}*/
/*         <a class="module-name" name="{{ this.module.getName() }}" target="blank" href="{{ this.getPageURL(this.module) }}">{{ this.module.getModuleName() }}</a>*/
/*         <a href="{{ this.getPageURL(this.module) }}" target="blank" class="fa fa-external-link"></a>*/
/*       {% endspaceless %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="name"><a class="module-name no-link" name="{{ this.module.getName() }}">{{ this.module.getModuleName() }}</a></div>*/
/* {% endif %}*/
/* */
