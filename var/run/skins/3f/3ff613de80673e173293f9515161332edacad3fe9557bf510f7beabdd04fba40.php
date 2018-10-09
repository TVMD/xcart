<?php

/* button/regular.twig */
class __TwigTemplate_dc85fa7e1a321583fbc6f787d39b44cc8a80b8f2ad63a85ec12180635a15fef4 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<button ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 7
        $context["iconStyle"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method");
        // line 8
        echo "  ";
        if ((isset($context["iconStyle"]) ? $context["iconStyle"] : null)) {
            echo "<span><i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["iconStyle"]) ? $context["iconStyle"] : null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 9
        echo "
  ";
        // line 10
        $context["buttonLabel"] = call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method")));
        // line 11
        echo "  ";
        if ((isset($context["buttonLabel"]) ? $context["buttonLabel"] : null)) {
            echo "<span>";
            echo (isset($context["buttonLabel"]) ? $context["buttonLabel"] : null);
            echo "</span>";
        }
        // line 12
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "button/regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  44 => 11,  42 => 10,  39 => 9,  32 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Regular button*/
/*  #}*/
/* */
/* <button {{ this.printTagAttributes(this.getAttributes())|raw }}>*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   {% set iconStyle = this.getParam('icon-style') %}*/
/*   {% if iconStyle %}<span><i class="button-icon {{ iconStyle }}"></i></span>{% endif %}*/
/* */
/*   {% set buttonLabel = t(this.getButtonLabel()) %}*/
/*   {% if buttonLabel %}<span>{{ buttonLabel|raw }}</span>{% endif %}*/
/* </button>*/
/* */
