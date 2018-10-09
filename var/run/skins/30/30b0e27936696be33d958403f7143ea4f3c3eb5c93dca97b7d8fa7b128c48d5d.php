<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.action.left.status.twig */
class __TwigTemplate_14cb4cfde94da147a1b30dde079a5b380991ab451c2bfeab37cc49d111fb0746 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CanadaPost\\View\\FormField\\Select\\ReturnStatus", "label" => "Status", "fieldName" => "postedData[status]", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "getStatus", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.action.left.status.twig";
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
/*  # Canada Post products return :: from :: actions :: left :: status change*/
/*  #*/
/*  # @ListChild (list="capost_return.form.actions.left", weight="100")*/
/*  #}*/
/* */
/* <div class="status">*/
/*   {{ widget('\\XLite\\Module\\XC\\CanadaPost\\View\\FormField\\Select\\ReturnStatus', label='Status', fieldName='postedData[status]', value=this.productsReturn.getStatus()) }}*/
/* </div>*/
/* */
