<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.link.twig */
class __TwigTemplate_9b1d72e7938933c1adda340f04e7d51a41a67ea653e427d73a97179a71000990 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "next", array())) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Next product"));
            echo "</a><span class=\"fa fa-arrow-right arrow\"></span>
";
        } else {
            // line 10
            echo "    <span class=\"fa fa-arrow-left arrow\"></span><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), "html", null, true);
            echo "\" class=\"previous-link\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Previous product"));
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body", weight="100")*/
/*  #}*/
/* */
/* {% if this.next %}*/
/*     <a href="{{ this.getItemURL(this.item) }}">{{ t('Next product')|raw }}</a><span class="fa fa-arrow-right arrow"></span>*/
/* {% else %}*/
/*     <span class="fa fa-arrow-left arrow"></span><a href="{{ this.getItemURL(this.item) }}" class="previous-link">{{ t('Previous product')|raw }}</a>*/
/* {% endif %}*/
/* */
