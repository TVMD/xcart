<?php

/* button/link.twig */
class __TwigTemplate_f4c8e375b0b680ebe08cba2652a72e24eecb35c09b8f6f9370cd8bf18f694784 extends \XLite\Core\Templating\Twig\Template
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
<a ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method")), "method");
        echo ">
";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method")) {
            echo "<i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method"), "html", null, true);
            echo "\"></i>";
        }
        echo "<span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "button/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Regular link*/
/*  #}*/
/* */
/* <a {{ this.printTagAttributes(this.getAttributes())|raw }}>*/
/* {% if this.getParam('icon-style') %}<i class="button-icon {{ this.getParam('icon-style') }}"></i>{% endif %}<span>{{ t(this.getButtonLabel()) }}</span>*/
/* </a>*/
