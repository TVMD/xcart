<?php

/* layout/slidebar.twig */
class __TwigTemplate_c385d4314d6efe31352a9fb587df19732c0d4f0159ed65e7954ec9f9daa53c18 extends \XLite\Core\Templating\Twig\Template
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
        echo "<nav id=\"slidebar\" data-mobile-navbar>
    ";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shouldRender", array(), "method")) {
            // line 6
            echo "    <ul>
        ";
            // line 7
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayCategories", array(), "method")) {
                // line 8
                echo "            <li class=\"slidebar-categories\">
                <span data-toggle=\"dropdown\">";
                // line 9
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Categories")), "html", null, true);
                echo "</span>
              ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.categories"))), "html", null, true);
                echo "
            </li>
        ";
            }
            // line 13
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu", "isSlidebar" => true))), "html", null, true);
            echo "
    </ul>
    ";
        }
        // line 16
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "layout/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  42 => 13,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Slidebar*/
/*  #}*/
/* <nav id="slidebar" data-mobile-navbar>*/
/*     {% if this.shouldRender() %}*/
/*     <ul>*/
/*         {% if this.isDisplayCategories() %}*/
/*             <li class="slidebar-categories">*/
/*                 <span data-toggle="dropdown">{{ t('Categories') }}</span>*/
/*               {{ widget_list('layout.header.categories') }}*/
/*             </li>*/
/*         {% endif %}*/
/*         {{ widget_list('header.menu', isSlidebar=true) }}*/
/*     </ul>*/
/*     {% endif %}*/
/* </nav>*/
/* */
