<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/begin.files.twig */
class __TwigTemplate_dd1a2853eed32fbffd3ae0ea5e75ce8226290e1f3e8c2bf9ef0c755a4a8eaca3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"parts\">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload files")), "html", null, true);
        echo "</h3>
  <input id=\"files\" type=\"file\" name=\"files[]\" multiple=\"multiple\" data-max-size=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUploadFileMaxSize", array(), "method"), "html", null, true);
        echo "\" data-readable-max-size=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReadableUploadFileMaxSize", array(), "method"), "html", null, true);
        echo "\" />
  <p>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUploadFileMessage", array(), "method"), "html", null, true);
        echo "</p>
  <a href=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSamplesURL", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSamplesURLText", array(), "method"), "html", null, true);
        echo "</a>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "import.begin.content.files"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/begin.files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,  37 => 11,  33 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Import begin section : sections*/
/*  #*/
/*  # @ListChild (list="import.begin.content", weight="100")*/
/*  #}*/
/* */
/* <div class="parts">*/
/*   <h3>{{ t('Upload files') }}</h3>*/
/*   <input id="files" type="file" name="files[]" multiple="multiple" data-max-size="{{ this.getUploadFileMaxSize() }}" data-readable-max-size="{{ this.getReadableUploadFileMaxSize() }}" />*/
/*   <p>{{ this.getUploadFileMessage() }}</p>*/
/*   <a href="{{ this.getSamplesURL() }}" target="_blank">{{ this.getSamplesURLText() }}</a>*/
/*   {{ widget_list('import.begin.content.files') }}*/
/* </div>*/
/* */
