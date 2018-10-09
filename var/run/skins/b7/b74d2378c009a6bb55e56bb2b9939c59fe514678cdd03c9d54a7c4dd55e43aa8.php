<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/buttons.twig */
class __TwigTemplate_864f847e198f27d7864a76def72b95e69160bd82f410132a3d5dc562b1d9fc1f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"model form buttons\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/buttons.twig";
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
/*  # Buttons*/
/*  #*/
/*  # @ListChild (list="review.add.buttons", weight="500")*/
/*  #}*/
/* */
/* <div class="model form buttons">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit') }}*/
/* </div>*/
/* */
