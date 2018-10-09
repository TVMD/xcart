<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/antifraud_ad.twig */
class __TwigTemplate_6517aaacbd709e78f6f0c055b66aa401ce551cbf5411a62c74656fdc0b293068 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAntiFraudAd", array(), "method")) {
            // line 8
            echo "  <div class=\"antifraud-ad\">
  
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This order was not checked by the AntiFraud service!")), "html", null, true);
            echo "
  
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You can purchase AntiFraud Service subscription")), "html", null, true);
            echo "
  
    <a href=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAntiFraudAdLink", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("here")), "html", null, true);
            echo "</a>.
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/antifraud_ad.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order : antifraud line*/
/*  #*/
/*  # @ListChild (list="order", weight="1000")*/
/*  #}*/
/* */
/* {% if this.isDisplayAntiFraudAd() %}*/
/*   <div class="antifraud-ad">*/
/*   */
/*     {{ t('This order was not checked by the AntiFraud service!') }}*/
/*   */
/*     {{ t('You can purchase AntiFraud Service subscription') }}*/
/*   */
/*     <a href="{{ this.getAntiFraudAdLink() }}" target="_blank">{{ t('here') }}</a>.*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
