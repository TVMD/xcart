<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info.twig */
class __TwigTemplate_e4e41fe54f8f32d86ad485c8fa275ed96827d010d26116ff88f8da70c0ea3124 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"module-info\">
  <ul>
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "itemsList.module.install.columns.module-description-section.info-element", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 10,  19 => 8,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="15")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="15")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="15")*/
/*  #}*/
/* <div class="module-info">*/
/*   <ul>*/
/*   {{ widget_list('itemsList.module.install.columns.module-description-section.info-element', module=this.module) }}*/
/*   </ul>*/
/* </div>*/
/* */
