<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/News/news_messages/list/parts/cell.brief.twig */
class __TwigTemplate_6bde5628b60fad59bed7fa556921c544782f55e7f810dd808f114bb59bd53851 extends \XLite\Core\Templating\Twig\Template
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
<span class='brief'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "model", array()), "brief_description", array()), "html", null, true);
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/News/news_messages/list/parts/cell.brief.twig";
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
/*  # @ListChild (list="itemsList.newsMessages.customer.center.row", weight="250")*/
/*  #}*/
/* */
/* <span class='brief'>{{ this.model.brief_description }}</span>*/
