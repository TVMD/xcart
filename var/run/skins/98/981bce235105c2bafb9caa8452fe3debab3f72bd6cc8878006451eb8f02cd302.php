<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig */
class __TwigTemplate_d596211c1fb79a084e2e648b8108ec57d9c1afa06e5c3cb53dd27ff39256a4db extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperStyleClass", array(), "method"), "html", null, true);
        echo "\">

  <div class=\"signin-login-wrapper\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("signin/parts/login.heading.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 9
        $this->loadTemplate("signin/parts/login.heading.twig", "/var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig", 9)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRegisterMode", array(), "method")) {
            // line 11
            echo "    <div class=\"login-box\">
      ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\CheckoutAuthorization"))), "html", null, true);
            echo "
    </div>
    ";
        } else {
            // line 15
            echo "    <div class=\"register-box\">
      ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Model\\Profile\\Main", "useBodyTemplate" => "1"))), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 19
        echo "  </div>

  <div class=\"or-line\">
    <div class=\"line\"></div>
    <div class=\"or-box\">
      <div class=\"or\">";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"signin-anonymous-wrapper\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("signin/parts/anonymous.heading.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 29
        $this->loadTemplate("signin/parts/anonymous.heading.twig", "/var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig", 29)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 30
        echo "    <div class=\"signin-anonymous-box\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "signin-anonymous-title"))), "html", null, true);
        echo "</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  77 => 29,  64 => 24,  57 => 19,  51 => 16,  48 => 15,  42 => 12,  39 => 11,  36 => 10,  31 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin.main", weight="10")*/
/*  #}*/
/* <div class="{{ this.getWrapperStyleClass() }}">*/
/* */
/*   <div class="signin-login-wrapper">*/
/*     {% include 'signin/parts/login.heading.twig' %}*/
/*     {% if not this.isRegisterMode() %}*/
/*     <div class="login-box">*/
/*       {{ widget('XLite\\Module\\XC\\CrispWhiteSkin\\View\\CheckoutAuthorization') }}*/
/*     </div>*/
/*     {% else %}*/
/*     <div class="register-box">*/
/*       {{ widget('\\XLite\\View\\Model\\Profile\\Main', useBodyTemplate='1') }}*/
/*     </div>*/
/*     {% endif %}*/
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
/*     {% include 'signin/parts/anonymous.heading.twig' %}*/
/*     <div class="signin-anonymous-box">{{ widget_list('signin-anonymous-title') }}</div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
