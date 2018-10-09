<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.reviewer_name.twig */
class __TwigTemplate_a8bdffe900f184e9d3aa8e63a2ef90140efa03a6502581139cb17c83083613f0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"form-item clearfix\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Full name")), "fieldName" => "reviewerName", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your name")), "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "reviewerName", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.reviewer_name.twig";
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
/*  # Reviewer name*/
/*  #*/
/*  # @ListChild (list="review.add.fields", weight="200")*/
/*  #}*/
/* <div class="form-item clearfix">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text', required='true', placeholder=t('Full name'), fieldName='reviewerName', label=t('Your name'), value=this.review.reviewerName) }}*/
/* </div>*/
/* */
