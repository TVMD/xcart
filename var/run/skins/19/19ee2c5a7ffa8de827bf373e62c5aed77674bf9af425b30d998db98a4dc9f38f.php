<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.ret_amount.twig */
class __TwigTemplate_247123205971aa3fad0ab7c756782882fc723298e76b32246847c2a6586cadb8 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-amount\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text\\Integer", "className" => "amount", "fieldOnly" => "true", "fieldName" => (("items[" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemId", array(), "method")) . "][amount]"), "min" => "0", "max" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.ret_amount.twig";
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
/*  # Create return :: form :: products :: column :: return amount*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="30")*/
/*  #}*/
/* */
/* <div class="return-amount">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text\\Integer', className='amount', fieldOnly='true', fieldName='items[' ~ this.item.getItemId() ~ '][amount]', min='0', max=this.item.getAmount()) }}*/
/* </div>*/
/* */
