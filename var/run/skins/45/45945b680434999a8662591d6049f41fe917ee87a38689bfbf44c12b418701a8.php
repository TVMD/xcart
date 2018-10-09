<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/actions.twig */
class __TwigTemplate_7ce012ad1d6edb0751d8353d82c9ea1f10de92bbe71001402ec349f499ef8118 extends \XLite\Core\Templating\Twig\Template
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
        $context["list"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNestedViewList", array(0 => "actions", 1 => array("module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "canEnable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canEnable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), 1 => 1), "method"), "canDisable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), 1 => 1), "method"))), "method");
        // line 7
        echo "
";
        // line 8
        if ( !twig_test_empty((isset($context["list"]) ? $context["list"] : null))) {
            // line 9
            echo "  <ul class=\"actions\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
            foreach ($context['_seq'] as $context["i"] => $context["action"]) {
                // line 11
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["action"], "getName", array(), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["action"], "display", array(), "method"), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  33 => 11,  29 => 10,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="30")*/
/*  #}*/
/* {% set list = this.getNestedViewList('actions', {'module': this.module, 'canEnable': this.canEnable(this.module, 1), 'canDisable': this.canDisable(this.module, 1)}) %}*/
/* */
/* {% if list is not empty %}*/
/*   <ul class="actions">*/
/*     {% for i, action in list %}*/
/*       <li class="{{ action.getName() }}">{{ action.display() }}</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
