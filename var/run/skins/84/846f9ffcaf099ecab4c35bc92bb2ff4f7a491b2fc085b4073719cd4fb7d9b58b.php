<?php

/* /var/www/next/output/xcart/src/skins/admin/welcome_block/admin/title.twig */
class __TwigTemplate_e5c5ea745411af33d89f83cb2eb445257c3861d27ab08276839e9586633e57b3 extends \XLite\Core\Templating\Twig\Template
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
<h1 class=\"block-heading\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You have the following roles:")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/welcome_block/admin/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Title*/
/*  #*/
/*  # @ListChild (list="welcome-block.non-root.title", weight="10")*/
/*  #}*/
/* */
/* <h1 class="block-heading">{{ t('You have the following roles:') }}</h1>*/
/* */
