<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/promo_settings.twig */
class __TwigTemplate_53a14c462a2316e134991e1a10072ad18b9ed7efc2f4337404b18aa8bb99ca2f extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModule", array(), "method")) {
            // line 9
            echo "
  ";
            // line 10
            $context["moduleName"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModule", array(), "method"), "getActualName", array(), "method");
            // line 11
            echo "
  ";
            // line 12
            if (((isset($context["moduleName"]) ? $context["moduleName"] : null) == "XC\\Reviews")) {
                // line 13
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Promo\\ShopperApproved"))), "html", null, true);
                echo "
  ";
            }
            // line 15
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/review/promo_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  37 => 13,  35 => 12,  32 => 11,  30 => 10,  27 => 9,  25 => 8,  22 => 7,  19 => 1,);
    }
}
/* */
/* {##*/
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.modulesettings.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {% if this.getModule() %}*/
/* */
/*   {% set moduleName = this.getModule().getActualName() %}*/
/* */
/*   {% if moduleName == 'XC\\Reviews' %}*/
/*     {{ widget('XLite\\Module\\XC\\Reviews\\View\\Promo\\ShopperApproved') }}*/
/*   {% endif %}*/
/* */
/* {% endif %}*/
/* */
