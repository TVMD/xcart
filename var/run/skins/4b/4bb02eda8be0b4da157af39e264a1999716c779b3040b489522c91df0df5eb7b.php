<?php

/* /var/www/next/output/xcart/src/skins/admin/settings/module.twig */
class __TwigTemplate_64cb059f012ed58e73d0ce954d80df0d1e9f723b050208cb1406f77fd2eb7265 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "module")) {
            // line 7
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("settings/base.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("settings/base.twig", "/var/www/next/output/xcart/src/skins/admin/settings/module.twig", 7)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/settings/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module-based settings page*/
/*  #*/
/*  # @ListChild (list="admin.center", zone="admin")*/
/*  #}*/
/* {% if this.target == 'module' %}*/
/*   {% include 'settings/base.twig' %}*/
/* {% endif %}*/
/* */
