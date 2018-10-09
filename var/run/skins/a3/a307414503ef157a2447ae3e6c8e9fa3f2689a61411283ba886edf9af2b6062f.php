<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.header.twig */
class __TwigTemplate_e464a15548afe9cd3ec99d9774cfbf9aa7c568991065e866ae0ec2e4a45ad778 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAmount", array(), "method")) {
            // line 9
            echo "  <div class=\"alert alert-warning add-new-card-header\" role=\"alert\">
    <strong class=\"important-label\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Important!")), "html", null, true);
            echo "</strong>
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("We will authorize")), "html", null, true);
            echo "
    <strong class=\"highlight-label\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAmount", array(), "method")))), "html", null, true);
            echo "</strong>
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("on your credit card in order to attach this credit card to your account. The amount will be released back to your card after a while.")), "html", null, true);
            echo "
    ";
            // line 14
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method")) {
                // line 15
                echo "      <span>
        ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The transaction will be marked as")), "html", null, true);
                echo "
        <strong class=\"highlight-label\">&ldquo;";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method"), "html", null, true);
                echo "&rdquo;</strong>.
      </span>
    ";
            }
            // line 20
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  52 => 17,  48 => 16,  45 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Message about zero-auth (card setup) amount */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.add_new_card.before", weight="200")*/
/*  #}*/
/* */
/* {% if this.getAmount() %}*/
/*   <div class="alert alert-warning add-new-card-header" role="alert">*/
/*     <strong class="important-label">{{ t('Important!') }}</strong>*/
/*     {{ t('We will authorize') }}*/
/*     <strong class="highlight-label">{{ widget('XLite\\View\\Surcharge', surcharge=this.getAmount()) }}</strong>*/
/*     {{ t('on your credit card in order to attach this credit card to your account. The amount will be released back to your card after a while.') }}*/
/*     {% if this.getDescription() %}*/
/*       <span>*/
/*         {{ t('The transaction will be marked as') }}*/
/*         <strong class="highlight-label">&ldquo;{{ this.getDescription() }}&rdquo;</strong>.*/
/*       </span>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
