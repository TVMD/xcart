<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/News/top_news_messages/list/parts/cell.date.twig */
class __TwigTemplate_9365a31ba2dc528540d0f9cf0816907a30ddb81b1e32db8135246989aeca6334 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"date\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "date", array())), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/News/top_news_messages/list/parts/cell.date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # News messages :: date cell*/
/*  #*/
/*  # @ListChild (list="itemsList.newsMessages.customer.top.row", weight="100")*/
/*  #}*/
/* */
/* <span class="date">{{ this.formatDate(this.model.date) }}</span>*/
/* */
