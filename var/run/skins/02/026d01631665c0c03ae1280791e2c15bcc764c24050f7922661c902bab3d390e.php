<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/center/list/parts/body/body.twig */
class __TwigTemplate_b89e458ba3ed45be3e298dbe4d19a3d37ca5c96c1c8d12189f5ebed007c47e12 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"body\">
  <div class=\"quick-look-cell\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "quicklook.info", "type" => "nested"))), "html", null, true);
        echo "
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "info", "type" => "nested", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/center/list/parts/body/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Item body*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.body", weight="40")*/
/*  #}*/
/* */
/* <td class="body">*/
/*   <div class="quick-look-cell">*/
/*     {{ widget_list('quicklook.info', type='nested') }}*/
/*     {{ widget_list('info', type='nested', product=this.product) }}*/
/*   </div>*/
/* </td>*/
/* */
