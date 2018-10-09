<?php

/* /var/www/next/output/xcart/src/skins/admin/payment/add_method/parts/add_offline_method.twig */
class __TwigTemplate_f70be0a66c18d221f9777f45d83630fb2fbf46a66e50d482a22e43f96ca6dc1c extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\View\\Form\\Payment\\Method\\Admin\\AddOfflineMethod", array("className" => "add-offline-method validationEngine"));        // line 8
        echo "
  <ul class=\"table\">
    <li>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "name", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Name")), "required" => "true"))), "html", null, true);
        echo "</li>
    <li>";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Textarea\\Simple", "fieldName" => "instruction", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment instructions")), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("These instructions will appear below the order invoice on the page which customers see after they confirm their order."))))), "html", null, true);
        echo "</li>
    <li>";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Textarea\\Simple", "fieldName" => "description", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Description")), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Here you can define how your payment methods will look in customer area.")), "maxlength" => 255))), "html", null, true);
        echo "</li>
  </ul>

  ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add")), "style" => "action"))), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/payment/add_method/parts/add_offline_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  35 => 12,  31 => 11,  27 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Add offline method*/
/*  #*/
/*  # @ListChild (list="payment.method.add.offline")*/
/*  #}*/
/* */
/* {% form 'XLite\\View\\Form\\Payment\\Method\\Admin\\AddOfflineMethod' with {className: 'add-offline-method validationEngine'} %}*/
/* */
/*   <ul class="table">*/
/*     <li>{{ widget('XLite\\View\\FormField\\Input\\Text', fieldName='name', label=t('Name'), required='true') }}</li>*/
/*     <li>{{ widget('XLite\\View\\FormField\\Textarea\\Simple', fieldName='instruction', label=t('Payment instructions'), help=t('These instructions will appear below the order invoice on the page which customers see after they confirm their order.')) }}</li>*/
/*     <li>{{ widget('XLite\\View\\FormField\\Textarea\\Simple', fieldName='description', label=t('Description'), help=t('Here you can define how your payment methods will look in customer area.'), maxlength=255) }}</li>*/
/*   </ul>*/
/* */
/*   {{ widget('XLite\\View\\Button\\Submit', label=t('Add'), style='action') }}*/
/* */
/* {% endform %}*/
/* */
