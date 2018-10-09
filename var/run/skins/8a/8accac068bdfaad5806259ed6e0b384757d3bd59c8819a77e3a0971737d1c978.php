<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/agree.twig */
class __TwigTemplate_0c0babd801d556a9d39080140cec5e36cf7d3603bb9ef9b73aeb84199596cd94 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNextStepAvailable", array(), "method")) {
            // line 8
            echo "  <div class=\"alert agree\">
    <input type=\"checkbox\" id=\"agree\" name=\"agree\" />
    <label for=\"agree\">";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Yes, I have made the full backup of my store files and database"));
            echo "</label>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/agree.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Checkbox*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.left", weight="100")*/
/*  #}*/
/* */
/* {% if this.isNextStepAvailable() %}*/
/*   <div class="alert agree">*/
/*     <input type="checkbox" id="agree" name="agree" />*/
/*     <label for="agree">{{ t('Yes, I have made the full backup of my store files and database')|raw }}</label>*/
/*   </div>*/
/* {% endif %}*/
/* */
