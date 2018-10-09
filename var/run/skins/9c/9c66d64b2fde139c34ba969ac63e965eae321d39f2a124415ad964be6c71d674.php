<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/left.twig */
class __TwigTemplate_8b36e34331231cb6177d481e41954c2955062c33f61c12516912c7057a1c61b1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"left\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.left", "type" => "inherited"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/left.twig";
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
/*  # Left actions block*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections", weight="100")*/
/*  #}*/
/* */
/* <div class="left">*/
/*   {{ widget_list('sections.left', type='inherited') }}*/
/* </div>*/
/* */
