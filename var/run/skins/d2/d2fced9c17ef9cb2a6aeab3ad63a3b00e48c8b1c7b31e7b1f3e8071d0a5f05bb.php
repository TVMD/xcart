<?php

/* /var/www/next/output/xcart/src/skins/admin/settings/clean_aggregation.twig */
class __TwigTemplate_fea9a35531570c5741f660d11422a4fc152edf239c66816d76850912ca26d094 extends \XLite\Core\Templating\Twig\Template
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
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/settings/clean_aggregation.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.settings.footer", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {#*/
/* <div IF="page=#Performance#" class="clean-aggregation-cache">*/
/*   <widget*/
/*     class="\XLite\View\Button\Regular"*/
/*     style="clean-aggregation-cache"*/
/*     label="Clean aggregation cache"*/
/*     jsCode="self.location='{buildURL(#css_js_performance#,#clean_aggregation_cache#)}'" />*/
/*   <widget*/
/*     class="\XLite\View\Tooltip"*/
/*     id="clean-aggregation-help-text"*/
/*     text="{t(#Clean aggregation cache help text#):h}"*/
/*     isImageTag=true*/
/*     className="help-icon" />*/
/* </div>*/
/* #}*/
