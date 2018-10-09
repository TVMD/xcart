<?php

/* login/body.twig */
class __TwigTemplate_ad84bdb2e240b143d507c2d9a5ca2e69379a3d56edf1d6bffa1c701cf4ff1716 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"login-box-wrapper\">
  <div class=\"login-box";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLocked", array(), "method")) {
            echo " locked\" data-time-left=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTimeLeftToUnlock", array(), "method"), "html", null, true);
        }
        echo "\">

    <h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Administration Zone")), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLocked", array(), "method")) {
            // line 10
            echo "      <h2 class=\"timer-header\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Login is locked out")), "html", null, true);
            echo "</h2>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "additional_note", array())) {
            // line 14
            echo "      <div class=\"additional-note\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "additional_note", array());
            echo "</div>
    ";
        }
        // line 16
        echo "
    <form id=\"login_form\" action=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "login")), "html", null, true);
        echo "\" method=\"post\" name=\"login_form\">
      <input type=\"hidden\" name=\"target\" value=\"login\" />
      <input type=\"hidden\" name=\"action\" value=\"login\" />
      ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\FormId"))), "html", null, true);
        echo "

      <table>
        <tbody class=\"fields\">
          <tr>
            <td><input type=\"text\" class=\"form-control\" name=\"login\" value=\"";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "login", array()), "html", null, true);
        echo "\" size=\"32\" maxlength=\"128\" autocomplete=\"off\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "html", null, true);
        echo "\" /></td>
          </tr>
          <tr>
            <td><input type=\"password\" class=\"form-control\" name=\"password\" value=\"";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "password", array()), "html", null, true);
        echo "\" size=\"32\" maxlength=\"128\" autocomplete=\"off\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "html", null, true);
        echo "\" /></td>
          </tr>
        </tbody>

        ";
        // line 32
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLocked", array(), "method")) {
            // line 33
            echo "          <tbody class=\"timer\">
            <tr>
              <td>
                ";
            // line 36
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Time left")), "html", null, true);
            echo ": <span id=\"timer\"></span>
              </td>
            </tr>
          </tbody>
        ";
        }
        // line 41
        echo "
        <tbody class=\"buttons\">
          <tr>
            <td>
              ";
        // line 45
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Log in", "style" => "regular-main-button"))), "html", null, true);
        echo "
              <div class=\"forgot-password\">
                <a href=\"";
        // line 47
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "recover_password")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Forgot password?")), "html", null, true);
        echo "</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  109 => 45,  103 => 41,  95 => 36,  90 => 33,  88 => 32,  79 => 28,  71 => 25,  63 => 20,  57 => 17,  54 => 16,  48 => 14,  46 => 13,  43 => 12,  37 => 10,  35 => 9,  30 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Login widget*/
/*  #}*/
/* <div class="login-box-wrapper">*/
/*   <div class="login-box{% if this.isLocked() %} locked" data-time-left="{{ this.getTimeLeftToUnlock() }}{% endif %}">*/
/* */
/*     <h1>{{ t('Administration Zone') }}</h1>*/
/* */
/*     {% if this.isLocked() %}*/
/*       <h2 class="timer-header">{{ t('Login is locked out') }}</h2>*/
/*     {% endif %}*/
/* */
/*     {% if this.additional_note %}*/
/*       <div class="additional-note">{{ this.additional_note|raw }}</div>*/
/*     {% endif %}*/
/* */
/*     <form id="login_form" action="{{ url('login') }}" method="post" name="login_form">*/
/*       <input type="hidden" name="target" value="login" />*/
/*       <input type="hidden" name="action" value="login" />*/
/*       {{ widget('\\XLite\\View\\FormField\\Input\\FormId') }}*/
/* */
/*       <table>*/
/*         <tbody class="fields">*/
/*           <tr>*/
/*             <td><input type="text" class="form-control" name="login" value="{{ this.login }}" size="32" maxlength="128" autocomplete="off" placeholder="{{ t('Email') }}" /></td>*/
/*           </tr>*/
/*           <tr>*/
/*             <td><input type="password" class="form-control" name="password" value="{{ this.password }}" size="32" maxlength="128" autocomplete="off" placeholder="{{ t('Password') }}" /></td>*/
/*           </tr>*/
/*         </tbody>*/
/* */
/*         {% if this.isLocked() %}*/
/*           <tbody class="timer">*/
/*             <tr>*/
/*               <td>*/
/*                 {{ t('Time left') }}: <span id="timer"></span>*/
/*               </td>*/
/*             </tr>*/
/*           </tbody>*/
/*         {% endif %}*/
/* */
/*         <tbody class="buttons">*/
/*           <tr>*/
/*             <td>*/
/*               {{ widget('\\XLite\\View\\Button\\Submit', label='Log in', style='regular-main-button') }}*/
/*               <div class="forgot-password">*/
/*                 <a href="{{ url('recover_password') }}">{{ t('Forgot password?') }}</a>*/
/*               </div>*/
/*             </td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*     </form>*/
/* */
/*   </div>*/
/* </div>*/
/* */
