<?php

/* /var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.twig */
class __TwigTemplate_c67b581fc79f87756c96e2ab4b101484fdf0e289a2676f2fb585521fc4f881ba extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome-block.root.title"))), "html", null, true);
        echo "
<div class=\"block-content\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "welcome-block.root.content"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Block content*/
/*  #*/
/*  # @ListChild(list="welcome-block.root", weight="100")*/
/*  #}*/
/* */
/* {{ widget_list('welcome-block.root.title') }}*/
/* <div class="block-content">*/
/*   {{ widget_list('welcome-block.root.content') }}*/
/* </div>*/
/* */
