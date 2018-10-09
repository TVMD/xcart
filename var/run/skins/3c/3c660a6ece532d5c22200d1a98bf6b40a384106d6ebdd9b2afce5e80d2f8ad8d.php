<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/right.twig */
class __TwigTemplate_e68298f5c00b0978ccb1bc1297e6736f596639d36be903f67dce9fbf8514bd6b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"right\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.right", "type" => "inherited"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/right.twig";
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
/*  # Right actions block*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections", weight="200")*/
/*  #}*/
/* */
/* <div class="right">*/
/*   {{ widget_list('sections.right', type='inherited') }}*/
/* </div>*/
/* */
