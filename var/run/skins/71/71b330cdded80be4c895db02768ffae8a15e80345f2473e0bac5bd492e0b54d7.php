<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/footer.twig */
class __TwigTemplate_f286f4cff52ac5df95d61dd5fbe3614a2dbd7050c56b3df1b3fc4b6739a907dc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPopupFooter", array(), "method")) {
            // line 7
            echo "  <div class=\"hot-addons-footer\">
    <a href=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildURL", array(0 => "addons_list_marketplace"), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View more addons in Marketplace")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="700")*/
/*  #}*/
/* {% if this.isPopupFooter() %}*/
/*   <div class="hot-addons-footer">*/
/*     <a href="{{ this.buildURL('addons_list_marketplace') }}">{{ t('View more addons in Marketplace') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
