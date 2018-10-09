<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module/status.twig */
class __TwigTemplate_f8de2073904d582de637a6b11819b5380b1145445942f8bf0e481000738347b0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isEnabled", array(), "method")) {
            // line 8
            echo "  <li class=\"enabled\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("enabled")), "html", null, true);
            echo "</li>
";
        }
        // line 10
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isEnabled", array(), "method")) {
            // line 11
            echo "  <li class=\"disabled\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("now disabled")), "html", null, true);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module status*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info.module", weight="200")*/
/*  #}*/
/* */
/* {% if this.entry.isEnabled() %}*/
/*   <li class="enabled">{{ t('enabled') }}</li>*/
/* {% endif %}*/
/* {% if not this.entry.isEnabled() %}*/
/*   <li class="disabled">{{ t('now disabled') }}</li>*/
/* {% endif %}*/
/* */
