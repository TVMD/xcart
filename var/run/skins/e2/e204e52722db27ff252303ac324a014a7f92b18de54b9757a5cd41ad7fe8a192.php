<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/messages.twig */
class __TwigTemplate_49947e07490767797198e9443cf7c6a7124f0a336a30e29bdf2d4ad62eef506d extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"moduleMessages";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"), "html", null, true);
        echo "\" class=\"messages\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "messages", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module messages block*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section", weight="30")*/
/*  #}*/
/* <div id="moduleMessages{{ this.module.getModuleId() }}" class="messages">*/
/*   {{ widget_list('messages', type='nested', module=this.module) }}*/
/* </div>*/
/* */
