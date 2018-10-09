<?php

/* body/footer.twig */
class __TwigTemplate_b0625218ea5ee2597f7db8359d31bfdd8f33607fdae3dc65a3ce79b99ecd97d8 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"footer\">
  <div class=\"footer-cell left\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\PoweredByAdmin"))), "html", null, true);
        echo "
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.footer.left"))), "html", null, true);
        echo "
  </div>
  <div class=\"footer-cell right\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.footer.right"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "body/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Main template*/
/*  #}*/
/* */
/* <div id="footer">*/
/*   <div class="footer-cell left">*/
/*     {{ widget('\\XLite\\View\\PoweredByAdmin') }}*/
/*     {{ widget_list('admin.main.page.footer.left') }}*/
/*   </div>*/
/*   <div class="footer-cell right">*/
/*     {{ widget_list('admin.main.page.footer.right') }}*/
/*   </div>*/
/* </div>*/
/* */
