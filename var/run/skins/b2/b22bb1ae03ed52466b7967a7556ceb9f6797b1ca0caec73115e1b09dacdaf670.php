<?php

/* modules/XC/NewsletterSubscriptions/form/subscribe.twig */
class __TwigTemplate_133ffb786f509a7ba47d3ae577337e2a4c7a6abccbd6e0b7b56e32a46df676f4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subscription-block\">
    <div class=\"subscription-form-block\">
        ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.form-block"))), "html", null, true);
        echo "

        <div class=\"subscription-error-block hidden\">
            ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.error-block"))), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"subscription-success-block hidden\">
        ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.success-block"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  30 => 10,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Subscribe block*/
/*  #}*/
/* */
/* <div class="subscription-block">*/
/*     <div class="subscription-form-block">*/
/*         {{ widget_list('NewsletterSubscriptions.footer.form-block') }}*/
/* */
/*         <div class="subscription-error-block hidden">*/
/*             {{ widget_list('NewsletterSubscriptions.footer.error-block') }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="subscription-success-block hidden">*/
/*         {{ widget_list('NewsletterSubscriptions.footer.success-block') }}*/
/*     </div>*/
/* </div>*/
/* */
