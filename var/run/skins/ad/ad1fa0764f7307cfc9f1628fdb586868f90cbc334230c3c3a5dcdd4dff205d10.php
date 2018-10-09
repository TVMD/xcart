<?php

/* /var/www/next/output/xcart/src/skins/admin/header/parts/js_static.twig */
class __TwigTemplate_297c3877f1d25ef7bc196f3212b9a68cfb4defa72e93867d1a180e88fc8453cd extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<script type=\"text/javascript\">
var xliteConfig = {
  script:              '";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getScript", array(), "method");
        echo "',
  target:              '";
        // line 10
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method");
        echo "',
  language:            '";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "getCode", array(), "method"), "html", null, true);
        echo "',
  success_lng:         '";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Success")), "html", null, true);
        echo "',
  base_url:            '";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBaseShopURL", array(), "method"), "html", null, true);
        echo "',
  form_id:             '";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "xlite", array()), "formId", array()), "html", null, true);
        echo "',
  form_id_name:        '";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_constant("XLite::FORM_ID"), "html", null, true);
        echo "',
  zone:                'admin',
  developer_mode:      ";
        // line 17
        echo (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDeveloperMode", array(), "method")) ? ("true") : ("false"));
        echo ",
};
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/header/parts/js_static.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="100")*/
/*  #}*/
/* {# TODO : Remove the whole static code into the comment model#}*/
/* <script type="text/javascript">*/
/* var xliteConfig = {*/
/*   script:              '{{ this.getScript()|raw }}',*/
/*   target:              '{{ this.getTarget()|raw }}',*/
/*   language:            '{{ this.currentLanguage.getCode() }}',*/
/*   success_lng:         '{{ t('Success') }}',*/
/*   base_url:            '{{ this.getBaseShopURL() }}',*/
/*   form_id:             '{{ this.xlite.formId }}',*/
/*   form_id_name:        '{{ constant('XLite::FORM_ID') }}',*/
/*   zone:                'admin',*/
/*   developer_mode:      {{ this.isDeveloperMode() ? 'true' : 'false' }},*/
/* };*/
/* </script>*/
/* */
