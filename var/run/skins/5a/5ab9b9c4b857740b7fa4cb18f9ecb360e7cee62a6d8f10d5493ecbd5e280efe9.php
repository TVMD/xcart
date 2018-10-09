<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_server_input.twig */
class __TwigTemplate_fc04680610b4bc8167b1158763c0cac9eb42f86ed2a2a83fb9014d6ed1c6a64f extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-server-input input-field\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "local_server_file", "fieldOnly" => "true", "value" => ""))), "html", null, true);
        echo "
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\BrowseServer", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Browse server")), "name" => "local_server_file"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_server_input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="400")*/
/*  #}*/
/* */
/* <li class="local-server-input input-field">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='local_server_file', fieldOnly='true', value='') }}*/
/*   {{ widget('\\XLite\\View\\Button\\BrowseServer', label=t('Browse server'), name='local_server_file') }}*/
/* </li>*/
/* */
