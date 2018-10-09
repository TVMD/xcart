<?php

/* /var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/modules_settings.twig */
class __TwigTemplate_be7efc37fa4988027f29a9b1f7698c98d6533a7dc4d8ba14b156669996655cb5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModule", array(), "method")) {
            // line 8
            echo "
  ";
            // line 9
            $context["moduleName"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModule", array(), "method"), "getActualName", array(), "method");
            // line 10
            echo "
  ";
            // line 11
            if (((isset($context["moduleName"]) ? $context["moduleName"] : null) == "CDev\\GoogleAnalytics")) {
                // line 12
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "seo-promo-1"))), "html", null, true);
                echo "
  ";
            }
            // line 14
            echo "
  ";
            // line 15
            if (((isset($context["moduleName"]) ? $context["moduleName"] : null) == "CDev\\Egoods")) {
                // line 16
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "g2a-egoods-1"))), "html", null, true);
                echo "
  ";
            }
            // line 18
            echo "
  ";
            // line 19
            if (((isset($context["moduleName"]) ? $context["moduleName"] : null) == "CDev\\ContactUs")) {
                // line 20
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "advanced-contact-us-1"))), "html", null, true);
                echo "
  ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/modules_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  56 => 20,  54 => 19,  51 => 18,  45 => 16,  43 => 15,  40 => 14,  34 => 12,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Promo block*/
/*  #*/
/*  # @ListChild (list="crud.modulesettings.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {% if this.getModule() %}*/
/* */
/*   {% set moduleName = this.getModule().getActualName() %}*/
/* */
/*   {% if moduleName == 'CDev\\GoogleAnalytics' %}*/
/*     {{ widget('XLite\\View\\SimplePromoBlock', promoId="seo-promo-1") }}*/
/*   {% endif %}*/
/* */
/*   {% if moduleName == 'CDev\\Egoods' %}*/
/*     {{ widget('XLite\\View\\SimplePromoBlock', promoId="g2a-egoods-1") }}*/
/*   {% endif %}*/
/* */
/*   {% if moduleName == 'CDev\\ContactUs' %}*/
/*     {{ widget('XLite\\View\\SimplePromoBlock', promoId="advanced-contact-us-1") }}*/
/*   {% endif %}*/
/* */
/* {% endif %}*/
/* */
