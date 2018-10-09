<?php

/* product/search/simple_form.twig */
class __TwigTemplate_d04739b1c620f49f4d0659a8d2d4df357aa282b83b65e9697820ca225ae3f9ed extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div class=\"simple-search-product-form\">

  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Product\\Search\\Customer\\SimpleForm");        // line 8
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.simple-search-form.simple-box"))), "html", null, true);
        echo "
  ";
        $this->endForm();        // line 10
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/search/simple_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  25 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Simple form for searching products template*/
/*  #}*/
/* */
/* <div class="simple-search-product-form">*/
/* */
/*   {% form '\\XLite\\View\\Form\\Product\\Search\\Customer\\SimpleForm' %}*/
/*     {{ widget_list('product.simple-search-form.simple-box') }}*/
/*   {% endform %}*/
/* */
/* </div>*/
/* */
