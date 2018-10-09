<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.button.twig */
class __TwigTemplate_253611a993d488446c709b19095e1e544817ab134710344b5d9b1254d9b4c4d1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"form-action\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Create return"))))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.button.twig";
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
/*  # Create return :: form :: button*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form", weight="300")*/
/*  #}*/
/* */
/* <div class="form-action">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Create return')) }}*/
/* </div>*/
/* */
