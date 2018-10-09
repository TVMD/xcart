<?php

/* /var/www/next/output/xcart/src/skins/customer/signin/signin.twig */
class __TwigTemplate_ee182f0bb565d147e880edb5c12384d97c50ce1300c38dde69a072626bc34004 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-wrapper\">

  <div class=\"signin-login-wrapper\">
    <div class=\"signin-login-title\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Existing Customer?")), "html", null, true);
        echo "</div>
    <div class=\"login-box\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "customer.checkout.signin"))), "html", null, true);
        echo "</div>
  </div>

  <div class=\"or-line\">
    <div class=\"line\"></div>
    <div class=\"or-box\">
      <div class=\"or\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"signin-anonymous-wrapper\">
    <div class=\"signin-anonymous-title\">";
        // line 21
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("New to our store?", array("our store" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStoreName", array(), "method")))), "html", null, true);
        echo "</div>
    <div class=\"signin-anonymous-box\">";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "signin-anonymous-title"))), "html", null, true);
        echo "</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/signin/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 22,  45 => 21,  37 => 16,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin.main", weight="10")*/
/*  #}*/
/* <div class="signin-wrapper">*/
/* */
/*   <div class="signin-login-wrapper">*/
/*     <div class="signin-login-title">{{ t('Existing Customer?') }}</div>*/
/*     <div class="login-box">{{ widget_list('customer.checkout.signin') }}</div>*/
/*   </div>*/
/* */
/*   <div class="or-line">*/
/*     <div class="line"></div>*/
/*     <div class="or-box">*/
/*       <div class="or">{{ t('or') }}</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="signin-anonymous-wrapper">*/
/*     <div class="signin-anonymous-title">{{ t('New to our store?', {'our store': this.getStoreName()}) }}</div>*/
/*     <div class="signin-anonymous-box">{{ widget_list('signin-anonymous-title') }}</div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
