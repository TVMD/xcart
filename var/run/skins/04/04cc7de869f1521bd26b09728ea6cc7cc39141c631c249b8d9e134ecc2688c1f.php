<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/meta_content_type.twig */
class __TwigTemplate_9e52b508933c0b8ed31cc6df0d23fcd2aedfe1a932d74770606270a24b3c07d1 extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCharset", array(), "method");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/meta_content_type.twig";
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
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="200")*/
/*  #}*/
/* */
/* <meta http-equiv="Content-Type" content="text/html; charset={{ this.getCharset()|raw }}" />*/
/* */
