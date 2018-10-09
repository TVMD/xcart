<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.name.twig */
class __TwigTemplate_56a4b0b45370f0a5b9d5c002b49eca393f4cb6cc15494d624730818deafb872e extends \XLite\Core\Templating\Twig\Template
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
<th class=\"caption-product-name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product name")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.captions.name.twig";
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
/*  # Create return :: form :: products :: name*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.captions", weight="20")*/
/*  #}*/
/* */
/* <th class="caption-product-name">{{ t('Product name') }}</th>*/
/* */
