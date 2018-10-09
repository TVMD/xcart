<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/header.twig */
class __TwigTemplate_5b3bc33139cb267f1cdcaa902b6e8ef9385ffc824efccfce146ba4317e6715a0 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRecentlyInstalledPage", array(), "method")) {
            // line 7
            echo "
<div class=\"installed-modules-header\">

  <div class=\"addons-filters\">
    <div class=\"addons-search-box\">
  
      ";
            // line 13
            $this->startForm("\\XLite\\View\\Form\\Module\\ManageSearch", array("formMethod" => "GET", "className" => "search-form"));            // line 14
            echo "        <div class=\"state\">
          ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ItemsList\\Module\\Filter\\Selector", "name" => "state", "items" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStateOptionsForSelector", array(), "method"), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("All addons"))))), "html", null, true);
            echo "
        </div>
        <div class=\"substring\">
          <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
          ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldOnly" => "true", "fieldName" => "substring", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubstring", array(), "method"), "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search for modules"))))), "html", null, true);
            echo "
        </div>
      ";
            $this->endForm();            // line 22
            echo "  
    </div>
  </div>

  <div class=\"actions\">
    ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\ActivateLicenseKey"))), "html", null, true);
            echo "
    ";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\EnterLicenseKey"))), "html", null, true);
            echo "
    ";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\Upload"))), "html", null, true);
            echo "
    <span class=\"separator-or\">";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "</span>
    <a href=\"";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_marketplace")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View more addons in Marketplace")), "html", null, true);
            echo "</a>
  </div>

</div>
";
        } else {
            // line 36
            echo "  <div class=\"installed-modules-header\">
    <div class=\"actions\">
      ";
            // line 38
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\ActivateLicenseKey"))), "html", null, true);
            echo "
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  78 => 36,  68 => 31,  64 => 30,  60 => 29,  56 => 28,  52 => 27,  45 => 22,  40 => 19,  33 => 15,  30 => 14,  29 => 13,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="modules-manage.top-controls", weight="100")*/
/*  #}*/
/* {% if not this.isRecentlyInstalledPage() %}*/
/* */
/* <div class="installed-modules-header">*/
/* */
/*   <div class="addons-filters">*/
/*     <div class="addons-search-box">*/
/*   */
/*       {% form '\\XLite\\View\\Form\\Module\\ManageSearch' with {formMethod: 'GET', className: 'search-form'} %}*/
/*         <div class="state">*/
/*           {{ widget('XLite\\View\\ItemsList\\Module\\Filter\\Selector', name='state', items=this.getStateOptionsForSelector(), caption=t('All addons')) }}*/
/*         </div>*/
/*         <div class="substring">*/
/*           <i class="fa fa-search" aria-hidden="true"></i>*/
/*           {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldOnly='true', fieldName='substring', value=this.getSubstring(), placeholder=t('Search for modules')) }}*/
/*         </div>*/
/*       {% endform %}*/
/*   */
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="actions">*/
/*     {{ widget('XLite\\View\\Button\\Addon\\ActivateLicenseKey') }}*/
/*     {{ widget('XLite\\View\\Button\\Addon\\EnterLicenseKey') }}*/
/*     {{ widget('XLite\\View\\Button\\Addon\\Upload') }}*/
/*     <span class="separator-or">{{ t('or') }}</span>*/
/*     <a href="{{ url('addons_list_marketplace') }}">{{ t('View more addons in Marketplace') }}</a>*/
/*   </div>*/
/* */
/* </div>*/
/* {% else %}*/
/*   <div class="installed-modules-header">*/
/*     <div class="actions">*/
/*       {{ widget('XLite\\View\\Button\\Addon\\ActivateLicenseKey') }}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
