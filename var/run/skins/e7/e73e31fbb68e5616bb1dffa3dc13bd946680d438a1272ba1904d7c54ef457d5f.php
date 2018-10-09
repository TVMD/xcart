<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/meta_upgrade_insecure.twig */
class __TwigTemplate_87821f4f169192ce054dade075a62041212168543a2c359c2b54461a66b88ca5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "useUpgradeInsecure", array(), "method")) {
            // line 8
            echo "  <meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/meta_upgrade_insecure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="700")*/
/*  #}*/
/* */
/* {% if this.useUpgradeInsecure() %}*/
/*   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">*/
/* {% endif %}*/
/* */
