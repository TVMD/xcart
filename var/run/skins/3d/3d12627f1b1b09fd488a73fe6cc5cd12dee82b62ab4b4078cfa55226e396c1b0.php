<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/delete_btn.twig */
class __TwigTemplate_4e870eb947e73ac693d8122b56754139a555908b6e77d2cc0825fad666a17fe2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Image", "style" => "delete-btn", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete attachment")), "jsCode" => "return jQuery(this).closest('form').submit();"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/delete_btn.twig";
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
/*  # Delete attachment item button*/
/*  #*/
/*  # @ListChild (list="customer.attachments.popup.item", weight="40")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\Image', style='delete-btn', label=t('Delete attachment'), jsCode='return jQuery(this).closest(\'form\').submit();') }}*/
/* */
