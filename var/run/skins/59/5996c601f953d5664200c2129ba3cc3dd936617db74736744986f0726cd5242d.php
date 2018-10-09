<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/file_name.twig */
class __TwigTemplate_027ee8d23072a904988be68e59cf99f704c79407c987da31579980259fda0014 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "attachment", array()), "getFileName", array(), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/file_name.twig";
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
/*  # File name*/
/*  #*/
/*  # @ListChild (list="customer.attachments.popup.item", weight="90")*/
/*  #}*/
/* */
/* {{ this.attachment.getFileName() }}*/
