<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/tags.twig */
class __TwigTemplate_5bbe434c4023faf7c37dc4b7b3c3a54c6892358914281e61f6b7605a54f2d1ed extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getTags", array(), "method")) {
            // line 9
            echo "  <div class=\"module-tags\">
    <ul class=\"module-tags-list\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getTags", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 12
                echo "        <li>
          <a href=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagURL", array(0 => $context["value"]), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagName", array(0 => $context["value"]), "method"), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/tags.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  32 => 13,  29 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Tags*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section", weight="40")*/
/*  #}*/
/* {% if this.module.getTags() %}*/
/*   <div class="module-tags">*/
/*     <ul class="module-tags-list">*/
/*       {% for value in this.module.getTags() %}*/
/*         <li>*/
/*           <a href="{{ this.getTagURL(value) }}">{{ this.getTagName(value) }}</a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
