<?php

/* /var/www/next/output/xcart/src/skins/admin/settings/clean_view_cache.twig */
class __TwigTemplate_d1e446421abe50fc4f4b3d243d8c916edeef82b88ad6ddb623cc73b609524dc0 extends \XLite\Core\Templating\Twig\Template
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
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/settings/clean_view_cache.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
/* {##*/
/*  # Email footer*/
/*  #*/
/*  # @ListChild (list="crud.settings.footer", zone="admin", weight="200")*/
/*  #}*/
/* {#*/
/* <div IF="page=#Performance#" class="clean-widgets-cache">*/
/*   <widget*/
/*     class="\XLite\View\Button\Regular"*/
/*     style="clean-widgets-cache"*/
/*     label="Clean widgets cache"*/
/*     jsCode="self.location='{buildURL(#css_js_performance#,#clean_view_cache#)}'" />*/
/*   <widget*/
/*     class="\XLite\View\Tooltip"*/
/*     id="clean-widgets-cache-help-text"*/
/*     text="{t(#Clean widgets cache help text#):h}"*/
/*     isImageTag=true*/
/*     className="help-icon" />*/
/* </div>*/
/* #}*/
