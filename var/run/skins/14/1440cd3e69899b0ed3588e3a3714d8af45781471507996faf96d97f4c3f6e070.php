<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/option.ignore_images_verification.twig */
class __TwigTemplate_c31af329103b7f08660781849766a0b49fac1bb49c14e50128175ee5abb747ba extends \XLite\Core\Templating\Twig\Template
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
<li class=\"checkbox-option\">
  <label for=\"ignoreFileChecking\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Do not verify images to increase speed of the process")), "html", null, true);
        echo "</label>
  <input type=\"checkbox\" name=\"options[ignoreFileChecking]\" value=\"1\" id=\"ignoreFileChecking\" checked />
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/option.ignore_images_verification.twig";
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
/*  # Import begin section : settings : ignore files checking*/
/*  #*/
/*  # @ListChild (list="import.begin.options", weight="50")*/
/*  #}*/
/* */
/* <li class="checkbox-option">*/
/*   <label for="ignoreFileChecking">{{ t('Do not verify images to increase speed of the process') }}</label>*/
/*   <input type="checkbox" name="options[ignoreFileChecking]" value="1" id="ignoreFileChecking" checked />*/
/* </li>*/
/* */
