<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/actions.twig */
class __TwigTemplate_2010d83107ff73fa3955f984aaf96fa8cca6a9d5a650faa10cd7134e4d131281 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"actions\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "actions", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "canEnable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canEnable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), 1 => 1), "method"), "canDisable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), 1 => 1), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Actions*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="30")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="30")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="30")*/
/*  #}*/
/* <div class="actions">*/
/*   {{ widget_list('actions', type='nested', module=this.module, canEnable=this.canEnable(this.module, 1), canDisable=this.canDisable(this.module, 1)) }}*/
/* </div>*/
/* */
