<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies.twig */
class __TwigTemplate_a372f19399a25614d5669ab5d7d87561da12a5223ac7e8d9ff29d938c2e974e5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasWrongDependencies", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"note dependencies\">
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dependencies", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Module wrong dependencies*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable", weight="100")*/
/*  #}*/
/* {% if this.hasWrongDependencies(this.module) %}*/
/*   <div class="note dependencies">*/
/*     {{ widget_list('dependencies', type='nested', module=this.module) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
