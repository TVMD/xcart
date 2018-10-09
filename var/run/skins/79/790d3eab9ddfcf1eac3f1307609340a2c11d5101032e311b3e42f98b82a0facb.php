<?php

/* common/dialog.twig */
class __TwigTemplate_8c462631c71defb4e99c33c320841623b62daaa140c8ac653e8b3e41e420f83c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlockClasses", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHead", array(), "method")) {
            // line 7
            echo "    <h3>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHead", array(), "method"))), "html", null, true);
            echo "</h3>
  ";
        }
        // line 9
        echo "  <div class=\"content\">";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "common/dialog.twig", 9)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/dialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Dialog*/
/*  #}*/
/* */
/* <div class="{{ this.getBlockClasses() }}">*/
/*   {% if this.getHead() %}*/
/*     <h3>{{ t(this.getHead()) }}</h3>*/
/*   {% endif %}*/
/*   <div class="content">{% include this.getBody() %}</div>*/
/* </div>*/
/* */
