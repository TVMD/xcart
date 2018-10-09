<?php

/* /var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/desc.twig */
class __TwigTemplate_e05e7ec8fcd42dab4bf199ac015c5ca9b7f1868cbe84d35b742f8c058a0a9dbc extends \XLite\Core\Templating\Twig\Template
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
<div class='description'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are operating as:")), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/desc.twig";
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
/*  # Description*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="10")*/
/*  #}*/
/* */
/* <div class='description'>{{ t('You are operating as:') }}</div>*/
/* */
