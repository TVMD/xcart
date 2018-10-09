<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/order/cell.actions.twig */
class __TwigTemplate_3992e7c093ac86660554d3e4d9f508a198e02242c8007ecc088786f20ba6ab8e extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderActions", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 8
            echo "  <div>
    ";
            // line 9
            echo $this->getAttribute($context["action"], "display", array(), "method");
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/order/cell.actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Cell actions*/
/*  #*/
/*  # @ListChild (list="itemsList.orders.search.cell.status")*/
/*  #}*/
/* */
/* {% for action in this.getOrderActions(this.entity) %}*/
/*   <div>*/
/*     {{ action.display()|raw }}*/
/*   </div>*/
/* {% endfor %}*/
/* */
