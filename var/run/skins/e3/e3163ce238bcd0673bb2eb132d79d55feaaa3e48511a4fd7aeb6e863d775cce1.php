<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig */
class __TwigTemplate_8fe7f437bad4adaffdb0a960e1f8c95d85002a53c2ac16d8b92f3f6d1302cc1c extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"alert alert-info\" role=\"alert\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Cards saved by the customer for the future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/saved_cards.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Customer's saved credit cards header */
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.saved_cards.before", weight="100")*/
/*  #}*/
/* */
/* <div class="alert alert-info" role="alert">*/
/*   {{ t('Cards saved by the customer for the future orders in this shop. No real credit cards were saved, only special token on the side of the payment processor, that can be used in this store only.') }}*/
/* </div>*/
/* */
