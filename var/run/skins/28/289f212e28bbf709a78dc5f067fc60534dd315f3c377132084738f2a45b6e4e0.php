<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/list_mutual.twig */
class __TwigTemplate_13d358c9bc461e58ce09f718eebe03812fbdc675a9a116583275f287f395ff0f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEnabledMutualModules", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <ul>
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEnabledMutualModules", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["depend"]) {
                // line 12
                echo "      <li>
        ";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "details", "type" => "nested", "depend" => $context["depend"]))), "html", null, true);
                echo "
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/list_mutual.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  31 => 13,  28 => 12,  24 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Dependencies list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.dependencies", weight="400")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.dependencies", weight="400")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.dependencies", weight="400")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.dependencies", weight="400")*/
/*  #}*/
/* {% if this.getEnabledMutualModules(this.module) %}*/
/*   <ul>*/
/*     {% for depend in this.getEnabledMutualModules(this.module) %}*/
/*       <li>*/
/*         {{ widget_list('details', type='nested', depend=depend) }}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
