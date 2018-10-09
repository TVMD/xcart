<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.amount.twig */
class __TwigTemplate_932cf08ab585202c875a7f3edf430547a163455b7951b67dfabbe777fd64800f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"amount\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form :: products :: column :: amount*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="25")*/
/*  #}*/
/* */
/* <div class="amount">*/
/*   {{ this.item.getAmount() }}*/
/* </div>*/
/* */
