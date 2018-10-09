<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/details/link.twig */
class __TwigTemplate_49ac274aef62641cd2aa040c981d8bea3f493492154803e240499408f94ced26 extends \XLite\Core\Templating\Twig\Template
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
        echo "<a";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method")) {
            echo " href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyHRef", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array())), "method"), "html", null, true);
            echo "\"";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getModuleName", array(), "method"), "html", null, true);
        echo " (";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "depend", array()), "getAuthorName", array(), "method"), "html", null, true);
        echo ")</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/details/link.twig";
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
/*  # Link to the module*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.dependencies.details", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.dependencies.details", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.dependencies.details", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.dependencies.details", weight="100")*/
/*  #}*/
/* <a{% if this.getDependencyHRef(this.depend) %} href="{{ this.getDependencyHRef(this.depend) }}"{% endif %}>{{ this.depend.getModuleName() }} ({{ t('by') }} {{ this.depend.getAuthorName() }})</a>*/
/* */
