<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/action.right.twig */
class __TwigTemplate_f049bb062febf2b3d861ab3a11843df7e4efd164ef5bc526928a75615dede79b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasRightActions", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
            // line 7
            echo "  <div class=\"action right-action\">
  
    ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canRemoveMethod", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                // line 10
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
      ";
                // line 11
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canRemoveMethod", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                    // line 12
                    echo "        <div class=\"remove\"><a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "payment_settings", "remove", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getMethodId", array(), "method")))), "html", null, true);
                    echo "\" class=\"fa fa-trash-o\" title=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "html", null, true);
                    echo "\"></a></div>
      ";
                }
                // line 14
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
    ";
            }
            // line 16
            echo "  
    ";
            // line 17
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getWarningNote", array(), "method")) {
                // line 18
                echo "      <div class=\"warning\"><a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getConfigurationURL", array(), "method"), "html", null, true);
                echo "\" class=\"fa fa-exclamation-circle\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getWarningNote", array(), "method"), "html", null, true);
                echo "\"></a></div>
    ";
            } elseif ( !$this->getAttribute($this->getAttribute(            // line 19
(isset($context["this"]) ? $context["this"] : null), "method", array()), "isCurrencyApplicable", array(), "method")) {
                // line 20
                echo "      <div class=\"warning\"><a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "currency")), "html", null, true);
                echo "\" class=\"fa fa-exclamation-circle\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This method does not support the current store currency and is not available for customers")), "html", null, true);
                echo "\"></a></div>
    ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 21
(isset($context["this"]) ? $context["this"] : null), "method", array()), "isTestMode", array(), "method")) {
                // line 22
                echo "      <div class=\"test-mode\"><a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getConfigurationURL", array(), "method"), "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This method is in test mode")), "html", null, true);
                echo "\"><img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
                echo "\" alt=\"\" /></a></div>
    ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 23
(isset($context["this"]) ? $context["this"] : null), "method", array()), "isConfigurable", array(), "method")) {
                // line 24
                echo "      <div class=\"warning\"></div>
      ";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Configure")), "location" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getConfigurationURL", array(), "method"), "style" => "configure"))), "html", null, true);
                echo "
    ";
            } else {
                // line 27
                echo "      <div class=\"warning\"></div>
    ";
            }
            // line 29
            echo "  
    ";
            // line 30
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSeparateConfigureButtonVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                // line 31
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Configure")), "location" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getConfigurationURL", array(), "method"), "style" => "configure"))), "html", null, true);
                echo "
    ";
            }
            // line 33
            echo "  
  </div>
";
        }
        // line 36
        echo "
";
        // line 37
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAfterListName", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"), "type" => "nested"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/action.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  110 => 36,  105 => 33,  99 => 31,  97 => 30,  94 => 29,  90 => 27,  85 => 25,  82 => 24,  80 => 23,  71 => 22,  69 => 21,  62 => 20,  60 => 19,  53 => 18,  51 => 17,  48 => 16,  42 => 14,  34 => 12,  32 => 11,  27 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment methods list : right action*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.row", weight=300)*/
/*  #}*/
/* {% if this.hasRightActions(this.method) %}*/
/*   <div class="action right-action">*/
/*   */
/*     {% if this.canRemoveMethod(this.method) %}*/
/*       <img src="{{ asset('images/spacer.gif') }}" class="separator" alt="" />*/
/*       {% if this.canRemoveMethod(this.method) %}*/
/*         <div class="remove"><a href="{{ url('payment_settings', 'remove', {'id': this.method.getMethodId()}) }}" class="fa fa-trash-o" title="{{ t('Remove') }}"></a></div>*/
/*       {% endif %}*/
/*       <img src="{{ asset('images/spacer.gif') }}" class="separator" alt="" />*/
/*     {% endif %}*/
/*   */
/*     {% if this.method.getWarningNote() %}*/
/*       <div class="warning"><a href="{{ this.method.getConfigurationURL() }}" class="fa fa-exclamation-circle" title="{{ this.method.getWarningNote() }}"></a></div>*/
/*     {% elseif not this.method.isCurrencyApplicable() %}*/
/*       <div class="warning"><a href="{{ url('currency') }}" class="fa fa-exclamation-circle" title="{{ t('This method does not support the current store currency and is not available for customers') }}"></a></div>*/
/*     {% elseif this.method.isTestMode() %}*/
/*       <div class="test-mode"><a href="{{ this.method.getConfigurationURL() }}" title="{{ t('This method is in test mode') }}"><img src="{{ asset('images/spacer.gif') }}" alt="" /></a></div>*/
/*     {% elseif this.method.isConfigurable() %}*/
/*       <div class="warning"></div>*/
/*       {{ widget('XLite\\View\\Button\\Link', label=t('Configure'), location=this.method.getConfigurationURL(), style='configure') }}*/
/*     {% else %}*/
/*       <div class="warning"></div>*/
/*     {% endif %}*/
/*   */
/*     {% if this.isSeparateConfigureButtonVisible(this.method) %}*/
/*       {{ widget('XLite\\View\\Button\\Link', label=t('Configure'), location=this.method.getConfigurationURL(), style='configure') }}*/
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* {{ widget_list(this.getAfterListName(this.method), type='nested') }}*/
/* */
