<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/date.twig */
class __TwigTemplate_9f675acb8a54de968da8216e721deef61f5d6ca7b96add1d6d56f202b91ee4c6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"news-message-date\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array()), "date", array())), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/date.twig";
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
/*  # News message page template*/
/*  #*/
/*  # @ListChild (list="newsMessage.details", weight="200")*/
/*  #}*/
/* */
/* <div class="news-message-date">{{ this.formatDate(this.newsMessage.date) }}</div>*/
/* */
