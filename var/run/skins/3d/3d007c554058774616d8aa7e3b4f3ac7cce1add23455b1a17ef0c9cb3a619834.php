<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.switcher.twig */
class __TwigTemplate_e63f94107d431037f6cb2282b80c5894695aba7c05397e324f0624dea850bd0e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"switcher\">
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canSwitch", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
            // line 9
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getWarningNote", array(), "method")) {
                // line 10
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "isEnabled", array(), "method")) {
                    // line 11
                    echo "        ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "enabled", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enabled")), "url" => ""))), "html", null, true);
                    echo "
      ";
                } else {
                    // line 13
                    echo "        ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "disabled", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("This payment method cannot be enabled until you configure it")), "url" => ""))), "html", null, true);
                    echo "
      ";
                }
                // line 15
                echo "
    ";
            } else {
                // line 17
                echo "
      ";
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "isEnabled", array(), "method")) {
                    // line 19
                    echo "        ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "enabled", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disable")), "url" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "payment_settings", "disable", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getMethodId", array(), "method"))))))), "html", null, true);
                    echo "
      ";
                } else {
                    // line 21
                    echo "        ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "disabled", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enable")), "url" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "payment_settings", "enable", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getMethodId", array(), "method"))))))), "html", null, true);
                    echo "
      ";
                }
                // line 23
                echo "
    ";
            }
            // line 25
            echo "
  ";
        } else {
            // line 27
            echo "
    ";
            // line 28
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canEnable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                // line 29
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "enabled", "title" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getForcedEnabledNote", array(), "method"), "url" => ""))), "html", null, true);
                echo "
    ";
            } else {
                // line 31
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/payment/methods/parts/header.switcher.button.twig", "style" => "disabled", "title" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getForcedEnabledNote", array(), "method"), "url" => ""))), "html", null, true);
                echo "
    ";
            }
            // line 33
            echo "
  ";
        }
        // line 35
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  89 => 33,  83 => 31,  77 => 29,  75 => 28,  72 => 27,  68 => 25,  64 => 23,  58 => 21,  52 => 19,  50 => 18,  47 => 17,  43 => 15,  37 => 13,  31 => 11,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Payment methods list : line : header : switcher*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=300)*/
/*  #}*/
/* */
/* <div class="switcher">*/
/*   {% if this.canSwitch(this.method) %}*/
/*     {% if this.method.getWarningNote() %}*/
/*       {% if this.method.isEnabled() %}*/
/*         {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='enabled', title=t('Enabled'), url='') }}*/
/*       {% else %}*/
/*         {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='disabled', title=t('This payment method cannot be enabled until you configure it'), url='') }}*/
/*       {% endif %}*/
/* */
/*     {% else %}*/
/* */
/*       {% if this.method.isEnabled() %}*/
/*         {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='enabled', title=t('Disable'), url=url('payment_settings', 'disable', {'id': this.method.getMethodId()})) }}*/
/*       {% else %}*/
/*         {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='disabled', title=t('Enable'), url=url('payment_settings', 'enable', {'id': this.method.getMethodId()})) }}*/
/*       {% endif %}*/
/* */
/*     {% endif %}*/
/* */
/*   {% else %}*/
/* */
/*     {% if this.canEnable(this.method) %}*/
/*       {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='enabled', title=this.method.getForcedEnabledNote(), url='') }}*/
/*     {% else %}*/
/*       {{ widget(template='items_list/payment/methods/parts/header.switcher.button.twig', style='disabled', title=this.method.getForcedEnabledNote(), url='') }}*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/* </div>*/
/* */
