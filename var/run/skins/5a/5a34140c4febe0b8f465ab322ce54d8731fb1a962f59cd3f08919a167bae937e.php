<?php

/* /var/www/next/output/xcart/src/skins/admin/profiles/parts/actions.twig */
class __TwigTemplate_acb628dd8b0ca1a508608a54dce3ce699f16edcaa23a9123f1df805ae3ef5895 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"actions\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Dropdown\\ProfileOperations"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/profiles/parts/actions.twig";
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
/*  # Orders*/
/*  #*/
/*  # @ListChild (list="tabs.after.items", zone="admin", weight="100")*/
/*  #}*/
/* */
/* <div class="actions">*/
/*   {{ widget('\\XLite\\View\\Button\\Dropdown\\ProfileOperations') }}*/
/* </div>*/
/* */
