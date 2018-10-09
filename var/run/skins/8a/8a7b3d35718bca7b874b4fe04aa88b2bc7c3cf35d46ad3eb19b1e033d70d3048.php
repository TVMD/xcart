<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.review.twig */
class __TwigTemplate_885e0d42d3b6f28beebf4a313bc18317dceaf52e67f50837d9e3445c860dd91a extends \XLite\Core\Templating\Twig\Template
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
  <label for=\"review\" class=\"review\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Write your review")), "html", null, true);
        echo "
  </label>
  <br />
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Your review")), "fieldOnly" => "true", "fieldName" => "review", "rows" => "6", "cols" => "78", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "review", array())))), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Review*/
/*  #*/
/*  # @ListChild (list="review.add.fields", weight="400")*/
/*  #}*/
/* <div class="form-item clearfix">*/
/*   <label for="review" class="review">*/
/*     {{ t('Write your review') }}*/
/*   </label>*/
/*   <br />*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', placeholder=t('Your review'), fieldOnly='true', fieldName='review', rows='6', cols='78', value=this.review.review) }}*/
/* */
/* </div>*/
/* */
