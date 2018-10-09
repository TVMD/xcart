<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/description.twig */
class __TwigTemplate_de44b31cb15589ad2ce80e253f1790e473350c99787016e43468607644511a0c extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"module-description-section\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "module-description-section", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns", weight="70")*/
/*  # @ListChild (list="itemsList.module.install.columns", weight="70")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns", weight="70")*/
/*  # @ListChild (list="itemsList.module.purchased.columns", weight="70")*/
/*  #}*/
/* <td class="module-description-section">*/
/*   {{ widget_list('module-description-section', type='nested', module=this.module) }}*/
/* </td>*/
/* */
