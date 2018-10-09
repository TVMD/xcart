<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.info.twig */
class __TwigTemplate_83f9ce93f4f6dfb4c36dfc38361848f2b1cd1bb9145307e72f149f6e0c511a18 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"section-text\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("To request a return please fill the form below")), "html", null, true);
        echo "
</div>
 
<hr size=\"1\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.info.twig";
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
/*  # Create return :: form*/
/*  #*/
/*  # @ListChild (list="capost_create_return", weight="100")*/
/*  #}*/
/* */
/* <div class="section-text">*/
/*   {{ t('To request a return please fill the form below') }}*/
/* </div>*/
/*  */
/* <hr size="1" />*/
/* */
