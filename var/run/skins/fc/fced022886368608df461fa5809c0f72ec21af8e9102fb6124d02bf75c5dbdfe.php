<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/url_input.twig */
class __TwigTemplate_1f5d5e75ac6ec97ea2e4519d7ab508467ba9a9254a51a9150c1bfed1c76512d3 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<li class=\"url-input input-field\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "url", "fieldOnly" => "true", "value" => "", "maxlength" => "512"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/url_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="600")*/
/*  # @ListChild (list="file_select_dialog.file_selections_url", weight="600")*/
/*  #}*/
/* */
/* <li class="url-input input-field">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='url', fieldOnly='true', value='', maxlength='512') }}*/
/* </li>*/
/* */
