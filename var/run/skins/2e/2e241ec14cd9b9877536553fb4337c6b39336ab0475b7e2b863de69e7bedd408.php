<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons/list/code.twig */
class __TwigTemplate_229c5f0dac1a5a4b02e4e25d62eeac1d662d0aa950e12f2056265db2804f16c4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "isExpired", array(), "method")) {
            // line 8
            echo "  <span class=\"expired-mark\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("expired")), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons/list/code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Code*/
/*  #*/
/*  # @ListChild (list="itemsList.coupons.cell.code")*/
/*  #}*/
/* */
/* {% if this.entity.isExpired() %}*/
/*   <span class="expired-mark">{{ t('expired') }}</span>*/
/* {% endif %}*/
/* */
