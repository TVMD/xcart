<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase.twig */
class __TwigTemplate_d6315a5dfeb77dda611d65fe93543b744280a434861f796ba384c3d967214b53 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canPurchase", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\Purchase", "moduleObj" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "style" => "main-button"))), "html", null, true);
            echo "

  <div class=\"or-activate\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ActivateKey", "label" => "Activate key", "isModule" => "true"))), "html", null, true);
            echo "
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => "Activate key", "isModule" => "true"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  31 => 12,  27 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Purchase action*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.actions", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section.actions", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section.actions", weight="100")*/
/*  #}*/
/* {% if this.canPurchase(this.module) %}*/
/*   {{ widget('XLite\\View\\Button\\Addon\\Purchase', moduleObj=this.module, style='main-button') }}*/
/* */
/*   <div class="or-activate">{{ t('or') }}*/
/*     {{ widget('XLite\\View\\Button\\ActivateKey', label='Activate key', isModule='true') }}*/
/*     {{ widget('XLite\\View\\Button\\Addon\\EnterLicenseKey', label='Activate key', isModule='true') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
