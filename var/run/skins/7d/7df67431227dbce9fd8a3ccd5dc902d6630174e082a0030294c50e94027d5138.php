<?php

/* /var/www/next/output/xcart/src/skins/admin/payment/appearance/note.twig */
class __TwigTemplate_b26d7e0b5c0ef7becaa4fbb268313648c5f8550040da11c1f9f9873a78373029 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"alert alert-info\" role=\"alert\">
  ";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment methods appearance description"));
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/payment/appearance/note.twig";
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
/*  # Payment methods. Appearance tab.*/
/*  #*/
/*  # @ListChild (list="itemsList.methods.header", weight="10")*/
/*  #}*/
/* */
/* <div class="alert alert-info" role="alert">*/
/*   {{ t('Payment methods appearance description')|raw }}*/
/* </div>*/
/* */
/* */
