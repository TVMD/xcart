<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/account/parts/link.login.twig */
class __TwigTemplate_3d636d71a7c7091e2abd96920a73bbab03b45aacfc1ebdf86d6794270e0469d2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"additional-buttons text-center\">
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PopupLoginLink"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/account/parts/link.login.twig";
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
/*  # Link : create account*/
/*  #*/
/*  # @ListChild (list="customer.account.details.after", weight="100")*/
/*  #}*/
/* */
/* <div class="additional-buttons text-center">*/
/* {{ widget('XLite\\View\\Button\\PopupLoginLink') }}*/
/* </div>*/
/* */
