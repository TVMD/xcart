<?php

/* /var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/name.twig */
class __TwigTemplate_302287c9d8b272979b0d8f6d9b8d0cff04861e048860b3fe0ba8e1d1090a7269 extends \XLite\Core\Templating\Twig\Template
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
<div class='name'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/name.twig";
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
/*  # Name*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="20")*/
/*  #}*/
/* */
/* <div class='name'>{{ this.getName() }}</div>*/
/* */
