<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.ret_amount.twig */
class __TwigTemplate_bae7103dddc6988f355bcad542d7e6e76a7ccff8ffc3cb47117f9843115f62bc extends \XLite\Core\Templating\Twig\Template
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
<th>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Return quantity")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.ret_amount.twig";
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
/*  # Create return :: form :: products :: amount*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.captions", weight="30")*/
/*  #}*/
/* */
/* <th>{{ t('Return quantity') }}</th>*/
/* */
