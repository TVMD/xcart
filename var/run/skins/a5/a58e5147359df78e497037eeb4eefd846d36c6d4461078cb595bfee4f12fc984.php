<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.twig */
class __TwigTemplate_09afb32656f47ae26f7ec89e9b2736abcb53b618e17a0ae174ea1a60ccc62231 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\ProductsReturn\\Details");        // line 8
        echo "
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "capost_return.form"))), "html", null, true);
        echo "

  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CanadaPost\\View\\StickyPanel\\ProductsReturn\\Admin\\Details"))), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  26 => 9,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return: return form*/
/*  #*/
/*  # @ListChild (list="capost_return", weight="200")*/
/*  #}*/
/* */
/* {% form '\\XLite\\Module\\XC\\CanadaPost\\View\\Form\\ProductsReturn\\Details' %}*/
/* */
/*   {{ widget_list('capost_return.form') }}*/
/* */
/*   {{ widget('\\XLite\\Module\\XC\\CanadaPost\\View\\StickyPanel\\ProductsReturn\\Admin\\Details') }}*/
/* */
/* {% endform %}*/
/* */
