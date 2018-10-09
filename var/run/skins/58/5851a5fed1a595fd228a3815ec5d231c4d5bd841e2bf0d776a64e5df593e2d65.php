<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/description.twig */
class __TwigTemplate_5e8910a84e87772a3ac0671fb7d56eb83bb7c95a41a2d68cc6904dd6c979b476 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"description\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDescription", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 9,);
    }
}
/* {##*/
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section", weight="10")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section", weight="10")*/
/*  #}*/
/* <div class="description">{{ this.module.getDescription() }}</div>*/
/* */
