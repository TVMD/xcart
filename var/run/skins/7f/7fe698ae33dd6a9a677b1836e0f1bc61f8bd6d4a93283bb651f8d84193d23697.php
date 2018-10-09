<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase_state.twig */
class __TwigTemplate_91ed1199bb3cc63ce640ce13e04a092b6f5841ab3132770550d0286b47da93e5 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRecentlyPurchased", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPurchaseComplete", array(), "method"))) {
            // line 8
            echo "    <div class=\"note alert alert-success\">
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your payment has been processed; now the addon can be installed.")), "html", null, true);
            echo "
    </div>
";
        }
        // line 12
        echo "
";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPurchaseInProgress", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 14
            echo "<div class=\"note alert alert-warning\">
  ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your payment is being processed. The addon license key will be sent to your email address as soon as the processing has been completed. You will be able to use this key to install the addon at any time.")), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/purchase_state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 15,  35 => 14,  33 => 13,  30 => 12,  24 => 9,  21 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Marketplace banner*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="400")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section", weight="400")*/
/*  #}*/
/* {% if this.isRecentlyPurchased() and this.isPurchaseComplete() %}*/
/*     <div class="note alert alert-success">*/
/*       {{ t('Your payment has been processed; now the addon can be installed.') }}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* {% if this.isPurchaseInProgress(this.module) %}*/
/* <div class="note alert alert-warning">*/
/*   {{ t('Your payment is being processed. The addon license key will be sent to your email address as soon as the processing has been completed. You will be able to use this key to install the addon at any time.') }}*/
/* </div>*/
/* {% endif %}*/
/* */
