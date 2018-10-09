<?php

/* /var/www/next/output/xcart/src/skins/admin/shipping/add_method/parts/offline_create.twig */
class __TwigTemplate_692bf8336735aa09a609e80e99fdc86cb0f6932e88fd11f0ea603bf315486d6d extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"offline-shipping-create\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 7
(isset($context["this"]) ? $context["this"] : null), "getOfflineHelpTemplate", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOfflineHelpTemplate", array(), "method"), "/var/www/next/output/xcart/src/skins/admin/shipping/add_method/parts/offline_create.twig", 7)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Model\\Shipping\\Offline"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/shipping/add_method/parts/offline_create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Offline carrier form*/
/*  #*/
/*  # @ListChild (list="edit_shipping")*/
/*  #}*/
/* <div class="offline-shipping-create">*/
/*   {% include this.getOfflineHelpTemplate() %}*/
/*   {{ widget('XLite\\View\\Model\\Shipping\\Offline') }}*/
/* </div>*/
/* */
