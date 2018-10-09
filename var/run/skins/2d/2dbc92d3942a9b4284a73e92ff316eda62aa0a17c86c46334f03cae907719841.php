<?php

/* /var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/pdf_invoice.twig */
class __TwigTemplate_43f9617880142fbe63556e936112fafffd92c97b2dd4a1eacab32c3af739015c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SimplePromoBlock", "promoId" => "pdf-invoice-1"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/promotions/simple_blocks/pdf_invoice.twig";
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
/*  # Banner promo block*/
/*  #*/
/*  # @ListChild (list="crud.notificationattachments.formHeader", zone="admin", weight="50")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\SimplePromoBlock', promoId="pdf-invoice-1") }}*/
/* */
