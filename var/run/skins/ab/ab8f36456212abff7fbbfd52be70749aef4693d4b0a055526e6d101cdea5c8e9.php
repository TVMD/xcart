<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/script_config.twig */
class __TwigTemplate_45533675a4708150447ac1a3430ac9b8fed75f737a4b4821af6cf9b01b91f763 extends \XLite\Core\Templating\Twig\Template
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
<script>
  var xliteConfig = {
    script: '";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getScript", array(), "method");
        echo "',

    ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAdminScript", array(), "method")) {
            // line 12
            echo "    admin_script: '";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdminScript", array(), "method");
            echo "',
    ";
        }
        // line 14
        echo "
    zone: 'customer',
    target: '";
        // line 16
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method");
        echo "',
    language: '";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "getCode", array(), "method"), "html", null, true);
        echo "',
    ajax_prefix: '";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAjaxPrefix", array(), "method"), "html", null, true);
        echo "',
    form_id: '";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "xlite", array()), "formId", array()), "html", null, true);
        echo "',
    form_id_name: '";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite::FORM_ID"), "html", null, true);
        echo "',
    developer_mode: ";
        // line 21
        echo (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDeveloperMode", array(), "method")) ? ("true") : ("false"));
        echo ",
    clean_url: ";
        // line 22
        echo (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCleanUrlsEnabled", array(), "method")) ? ("true") : ("false"));
        echo ",
    clean_urls_base: '";
        // line 23
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cleansUrlsBase", array(), "method"), "html", null, true);
        echo "',
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/script_config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  45 => 17,  41 => 16,  37 => 14,  31 => 12,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1300")*/
/*  #}*/
/* */
/* <script>*/
/*   var xliteConfig = {*/
/*     script: '{{ this.getScript()|raw }}',*/
/* */
/*     {% if this.isDisplayAdminScript() %}*/
/*     admin_script: '{{ this.getAdminScript()|raw }}',*/
/*     {% endif %}*/
/* */
/*     zone: 'customer',*/
/*     target: '{{ this.getTarget()|raw }}',*/
/*     language: '{{ this.currentLanguage.getCode() }}',*/
/*     ajax_prefix: '{{ this.getAjaxPrefix() }}',*/
/*     form_id: '{{ this.xlite.formId }}',*/
/*     form_id_name: '{{ constant('XLite::FORM_ID') }}',*/
/*     developer_mode: {{ this.isDeveloperMode() ? 'true' : 'false' }},*/
/*     clean_url: {{ this.isCleanUrlsEnabled() ? 'true' : 'false' }},*/
/*     clean_urls_base: '{{ this.cleansUrlsBase() }}',*/
/*   };*/
/* </script>*/
/* */
