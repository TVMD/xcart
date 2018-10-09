<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig */
class __TwigTemplate_d065f6e287afa48598f1f4c7ed69edbe4025f83e12ae46c69f56ed0eebe90e20 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.settings"), "method")) {
            // line 8
            echo "  <div class=\"settings\">
    <div>
      <a href=\"#settings-panel\" class=\"item-title\">
        <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Settings")), "html", null, true);
            echo "</span>
        <span class=\"mm-next\"></span>
      </a>
      <div class=\"Panel\" id=\"settings-panel\">
        <ul class=\"Inset\">
          ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "slidebar.settings"))), "html", null, true);
            echo "
        </ul>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="390")*/
/*  #}*/
/* */
/* {% if this.getViewList('slidebar.settings') %}*/
/*   <div class="settings">*/
/*     <div>*/
/*       <a href="#settings-panel" class="item-title">*/
/*         <span>{{ t('Settings') }}</span>*/
/*         <span class="mm-next"></span>*/
/*       </a>*/
/*       <div class="Panel" id="settings-panel">*/
/*         <ul class="Inset">*/
/*           {{ widget_list('slidebar.settings') }}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
