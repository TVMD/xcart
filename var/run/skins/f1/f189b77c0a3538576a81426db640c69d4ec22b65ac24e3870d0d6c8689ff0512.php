<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/created.twig */
class __TwigTemplate_42ba1444fcb0172f11192b73db7b21f6eae6e8b5484d3284fe7100095de188af extends \XLite\Core\Templating\Twig\Template
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
<p class=\"title\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Created on")), "html", null, true);
        echo " <span class=\"date\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCreateDate", array(), "method"), "html", null, true);
        echo "</span> ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo "
  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasProfilePage", array(), "method")) {
            // line 10
            echo "    <a class=\"name\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileURL", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileName", array(), "method"), "html", null, true);
            echo "</a>
  ";
        }
        // line 12
        echo "  ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasProfilePage", array(), "method")) {
            // line 13
            echo "    <span class=\"name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileName", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 15
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMembership", array(), "method")) {
            // line 16
            echo "    <span class=\"membership\">(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "membership", array()), "getName", array(), "method"), "html", null, true);
            echo ")</span>
  ";
        }
        // line 18
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/created.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 18,  53 => 16,  50 => 15,  44 => 13,  41 => 12,  33 => 10,  31 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return: created line*/
/*  #*/
/*  # @ListChild (list="capost_return", weight="100")*/
/*  #}*/
/* */
/* <p class="title">*/
/*   {{ t('Created on') }} <span class="date">{{ this.getCreateDate() }}</span> {{ t('by') }}*/
/*   {% if this.hasProfilePage() %}*/
/*     <a class="name" href="{{ this.getProfileURL() }}">{{ this.getProfileName() }}</a>*/
/*   {% endif %}*/
/*   {% if not this.hasProfilePage() %}*/
/*     <span class="name">{{ this.getProfileName() }}</span>*/
/*   {% endif %}*/
/*   {% if this.getMembership() %}*/
/*     <span class="membership">({{ this.membership.getName() }})</span>*/
/*   {% endif %}*/
/* </p>*/
/* */
