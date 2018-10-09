<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/changelog.twig */
class __TwigTemplate_1b9a6d267537dc353c7aabe0795f762b42e6299e8f2b3f19b4c690028610b462 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"changelog\" colspan=\"4\">
  <div class=\"changelog-block\">
    <div class=\"changelog-record\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getUpgradeChangelogs", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["changelog"]) {
            // line 11
            echo "        <div class=\"description\">
          ";
            // line 12
            echo $context["changelog"];
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changelog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </div>
  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/changelog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  32 => 12,  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry changelog*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns.changelog", weight="350")*/
/*  #}*/
/* */
/* <td class="changelog" colspan="4">*/
/*   <div class="changelog-block">*/
/*     <div class="changelog-record">*/
/*       {% for changelog in this.entry.getUpgradeChangelogs() %}*/
/*         <div class="description">*/
/*           {{ changelog|raw }}*/
/*         </div>*/
/*       {% endfor %}*/
/*       </div>*/
/*   </div>*/
/* </td>*/
/* */
