<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/FileAttachments/file_attachments.twig */
class __TwigTemplate_c3d82e1a2a93d1de3c27aa2fb4b7463303f994dd13caf55640cf831f0bed99b2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.tab.description.file-attachments", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/FileAttachments/file_attachments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Attachments list*/
/*  #*/
/*  # @ListChild (list="product.details.page.tab.description", weight="50")*/
/*  #}*/
/* {{ widget_list('product.details.page.tab.description.file-attachments', product=this.product) }}*/
