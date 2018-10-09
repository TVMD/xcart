<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module/author.twig */
class __TwigTemplate_ef2a1d10c3cee76b917c5b83b92837b72ff5aaa48f1adad211a691ee3d8117b0 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"author\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info.module", weight="100")*/
/*  #}*/
/* */
/* <li class="author">{{ t('by') }} {{ this.entry.getAuthor() }}</li>*/
/* */
