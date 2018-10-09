<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/banner.twig */
class __TwigTemplate_d767f401e44e2a0e9317ac65dd9533c317aafcc521c6e3ae496af6d168ed61a7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBannerVisible", array(), "method")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ModulesManager\\Banner"))), "html", null, true);
            echo "
";
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "promoBanner", array())) {
            // line 11
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "promoBanner", array()), "module_banner_url", array()), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "promoBanner", array()), "is_external_link", array())) {
                echo " target=\"_blank\"";
            }
            echo ">
    <img src=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "promoBanner", array()), "banner_url", array()), "html", null, true);
            echo "\" class=\"promo-banner\" />
  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/items_list/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  32 => 11,  30 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Marketplace banner*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="200")*/
/*  #}*/
/* {% if this.isBannerVisible() %}*/
/*   {{ widget('XLite\\View\\ModulesManager\\Banner') }}*/
/* {% endif %}*/
/* */
/* {% if this.promoBanner %}*/
/*   <a href="{{ this.promoBanner.module_banner_url }}" {% if this.promoBanner.is_external_link %} target="_blank"{% endif %}>*/
/*     <img src="{{ this.promoBanner.banner_url }}" class="promo-banner" />*/
/*   </a>*/
/* {% endif %}*/
/* */
