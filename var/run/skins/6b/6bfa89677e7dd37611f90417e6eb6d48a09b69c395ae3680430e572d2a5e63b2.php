<?php

/* /var/www/next/output/xcart/src/skins/admin/center.twig */
class __TwigTemplate_4543e8b2d61c180c561a3aab259ed63c39bb1c46d172648f4c1941bb6e8641f9 extends \XLite\Core\Templating\Twig\Template
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
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("noscript.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 6
        $this->loadTemplate("noscript.twig", "/var/www/next/output/xcart/src/skins/admin/center.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTitleVisible", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"))) {
            // line 9
            echo "  <h1 class=\"title\" id=\"page-title\">
    <div id=\"breadcrumb\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.breadcrumb"))), "html", null, true);
            echo "
    </div>
  </h1>
";
        }
        // line 15
        echo "
";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.center"))), "html", null, true);
        echo "

";
        // line 18
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "access_denied")) {
            // line 19
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("access_denied.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("access_denied.twig", "/var/www/next/output/xcart/src/skins/admin/center.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 21
        echo "
";
        // line 22
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "license_restriction")) {
            // line 23
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("license_message.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("license_message.twig", "/var/www/next/output/xcart/src/skins/admin/center.twig", 23)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 25
        echo "
";
        // line 29
        echo "
";
        // line 30
        if ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "profile") && ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "mode", array()) == "delete"))) {
            // line 31
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "common/dialog.twig", "head" => "Delete profile - Confirmation", "body" => "profile/confirm_delete.twig"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  90 => 30,  87 => 29,  84 => 25,  72 => 23,  70 => 22,  67 => 21,  55 => 19,  53 => 18,  48 => 16,  45 => 15,  38 => 11,  34 => 9,  32 => 8,  29 => 7,  24 => 6,);
    }
}
/* {##*/
/*  # Center column*/
/*  #*/
/*  # @ListChild (list="admin.main.page.content.center", weight="10")*/
/*  #}*/
/* {% include 'noscript.twig' %}*/
/* */
/* {% if this.isTitleVisible() and this.getTitle() %}*/
/*   <h1 class="title" id="page-title">*/
/*     <div id="breadcrumb">*/
/*       {{ widget_list('layout.main.breadcrumb') }}*/
/*     </div>*/
/*   </h1>*/
/* {% endif %}*/
/* */
/* {{ widget_list('admin.center') }}*/
/* */
/* {% if this.target == 'access_denied' %}*/
/*   {% include 'access_denied.twig' %}*/
/* {% endif %}*/
/* */
/* {% if this.target == 'license_restriction' %}*/
/*   {% include 'license_message.twig' %}*/
/* {% endif %}*/
/* */
/* {### TODO: will be moved to the dashboard side bar*/
/* <widget template="common/dialog.tpl" head="Customer zone warning" body="customer_zone_warning.tpl" IF="{getCustomerZoneWarning()}" />*/
/* ###}*/
/* */
/* {% if this.target == 'profile' and this.mode == 'delete' %}*/
/*   {{ widget(template='common/dialog.twig', head='Delete profile - Confirmation', body='profile/confirm_delete.twig') }}*/
/* {% endif %}*/
/* */
