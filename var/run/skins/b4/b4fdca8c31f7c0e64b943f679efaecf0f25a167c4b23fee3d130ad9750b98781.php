<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/footer/footer.additional.twig */
class __TwigTemplate_19ee82e456a747f5c0e4423a5b66405d89240d4eacf9dd2f0d5739b5a4ae5817 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"thank-you\">";
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Thank you for your order FOOTER"));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/footer/footer.additional.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Order customer note*/
/*  #*/
/*  # @ListChild (list="packing_slip.footer", weight="20")*/
/*  #}*/
/* <div class="thank-you">{{ t('Thank you for your order FOOTER')|raw }}</div>*/
/* */
