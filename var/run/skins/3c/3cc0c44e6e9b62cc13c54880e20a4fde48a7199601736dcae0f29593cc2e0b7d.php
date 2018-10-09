<?php

/* /var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/title.twig */
class __TwigTemplate_a44d45bd58dee3c893a106e5df7a3d965f542b335e982171994b8aa4f3b8b677 extends \XLite\Core\Templating\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Steps to complete your store for real sales", array("url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShopURL", array(), "method"))));
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/title.twig";
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
/*  # @ListChild (list="welcome-block.root.title", weight="10")*/
/*  #}*/
/* */
/* <h1 class="block-heading">{{ t('Steps to complete your store for real sales', {'url': this.getShopURL()})|raw }}</h1>*/
/* */
