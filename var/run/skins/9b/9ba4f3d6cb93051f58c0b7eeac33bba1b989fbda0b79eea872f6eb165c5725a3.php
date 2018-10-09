<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.products.twig */
class __TwigTemplate_92e6fb706e9a920dce6080863a4998dbe91fd280665345b3c418176213af473b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"return-products\">

  <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Products")), "html", null, true);
        echo "</h2>
  
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CanadaPost\\View\\ItemsList\\Model\\ProductsReturnItem", "returnId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "getId", array(), "method")))), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return :: from :: products*/
/*  #*/
/*  # @ListChild (list="capost_return.form", weight="200")*/
/*  #}*/
/* */
/* <div class="return-products">*/
/* */
/*   <h2>{{ t('Products') }}</h2>*/
/*   */
/*   {{ widget('\\XLite\\Module\\XC\\CanadaPost\\View\\ItemsList\\Model\\ProductsReturnItem', returnId=this.productsReturn.getId()) }}*/
/* */
/* </div>*/
/* */
