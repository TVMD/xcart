<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/body.twig */
class __TwigTemplate_5579475d2605ea3f9a2bf757e7ff164dcb98025773452f7e2f9e4de626ae5e6c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"news-message-body\">";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "newsMessage", array()), "body", array());
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/News/page/news_message/parts/body.twig";
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
/*  # @ListChild (list="newsMessage.details", weight="300")*/
/*  #}*/
/* */
/* <div class="news-message-body">{{ this.newsMessage.body|raw }}</div>*/
/* */
