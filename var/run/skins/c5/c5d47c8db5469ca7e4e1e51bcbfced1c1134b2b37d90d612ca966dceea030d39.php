<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/contact_us/parts/contact_us.address.twig */
class __TwigTemplate_c3192c32e6b7076a43664a3d08e411e26fa428f4fb311d9d050f25198cce22c2 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"contact_us-address_links\">
 \t";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLocation", array(), "method")) {
            // line 9
            echo "\t\t<li class=\"location\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLocation", array(), "method"), "html", null, true);
            echo "</li>
\t";
        }
        // line 11
        echo " \t";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPhone", array(), "method")) {
            // line 12
            echo "\t\t<li class=\"phone\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPhone", array(), "method"), "html", null, true);
            echo "</li>
\t";
        }
        // line 14
        echo " \t";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmail", array(), "method")) {
            // line 15
            echo "\t\t<li class=\"email\"><a href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmail", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmail", array(), "method"), "html", null, true);
            echo "</a></li>
\t";
        }
        // line 17
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "contact_us.parts.last"))), "html", null, true);
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/contact_us/parts/contact_us.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  43 => 15,  40 => 14,  34 => 12,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Contact us address links*/
/*  #*/
/*  # @ListChild (list="contact_us.parts", weight="10")*/
/*  #}*/
/* */
/* <ul class="contact_us-address_links">*/
/*  	{% if this.getLocation() %}*/
/* 		<li class="location">{{ this.getLocation() }}</li>*/
/* 	{% endif %}*/
/*  	{% if this.getPhone() %}*/
/* 		<li class="phone">{{ this.getPhone() }}</li>*/
/* 	{% endif %}*/
/*  	{% if this.getEmail() %}*/
/* 		<li class="email"><a href="mailto:{{ this.getEmail() }}">{{ this.getEmail() }}</a></li>*/
/* 	{% endif %}*/
/*   {{ widget_list('contact_us.parts.last') }}*/
/* </ul>*/
