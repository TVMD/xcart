<?php

/* /var/www/next/output/xcart/src/skins/admin/payment/add_method/parts/payment_gateways.note.twig */
class __TwigTemplate_8123051e74c8ae00fca15db4d6de789c993ed512d5fb87a745e8bc38fe654a57 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"small-head\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Requires registered merchant account"));
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/payment/add_method/parts/payment_gateways.note.twig";
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
/*  # Payment getaways*/
/*  #*/
/*  # @ListChild (list="itemsList.onlinemethods.header", weight="10")*/
/*  #}*/
/* */
/* <div class="small-head">{{ t('Requires registered merchant account')|raw }}</div>*/
