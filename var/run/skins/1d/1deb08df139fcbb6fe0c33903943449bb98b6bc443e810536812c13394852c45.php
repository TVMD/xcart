<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/my_purchases.twig */
class __TwigTemplate_3ddbd924920546eb07f607d0254efb3342dcbf8a10f0ff14e67c2326452d7263 extends \XLite\Core\Templating\Twig\Template
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
        $context["purchasesCount"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPurchasedModulesCount", array(), "method");
        // line 7
        if ((isset($context["purchasesCount"]) ? $context["purchasesCount"] : null)) {
            // line 8
            echo "<div class=\"addons-my-purchases\">
  <a href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_purchased")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("My purchases")), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["purchasesCount"]) ? $context["purchasesCount"] : null), "html", null, true);
            echo ")</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/my_purchases.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 9,  23 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.addons-filters", weight="250")*/
/*  #}*/
/* {% set purchasesCount = this.getPurchasedModulesCount() %}*/
/* {% if purchasesCount %}*/
/* <div class="addons-my-purchases">*/
/*   <a href="{{ url('addons_list_purchased') }}">{{ t('My purchases') }} ({{ purchasesCount }})</a>*/
/* </div>*/
/* {% endif %}*/
/* */
