<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/url_copy_to_local.twig */
class __TwigTemplate_75ea7bcafefb13c15f57eafd40c4ab5eb06da5c4aa48c3130c281a83256332ba extends \XLite\Core\Templating\Twig\Template
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
<li class=\"url-copy-to-local input-field\">
  <label for=\"url-copy-to-local\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox", "value" => "Y", "isChecked" => "true", "attributes" => array("disabled" => "disabled"), "fieldName" => "url_copy_to_local", "fieldOnly" => "true"))), "html", null, true);
        echo "
    <span class=\"label\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Copy file to local server")), "html", null, true);
        echo "</span>
  </label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/url_copy_to_local.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="700")*/
/*  # @ListChild (list="file_select_dialog.file_selections_url", weight="700")*/
/*  #}*/
/* */
/* <li class="url-copy-to-local input-field">*/
/*   <label for="url-copy-to-local">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox', value='Y', isChecked='true', attributes={'disabled': 'disabled'}, fieldName='url_copy_to_local', fieldOnly='true') }}*/
/*     <span class="label">{{ t('Copy file to local server') }}</span>*/
/*   </label>*/
/* </li>*/
/* */
