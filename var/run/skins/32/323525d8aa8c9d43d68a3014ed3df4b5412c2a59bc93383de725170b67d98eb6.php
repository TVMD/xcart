<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_server_label.twig */
class __TwigTemplate_4d94dafe07632a71aab76d3a47479a6685cd7d24adb3ab845cb0b88996c02349 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-server-label label-field\">
  <input type=\"radio\" id=\"file_select_local\" name=\"file_select\" value=\"local\" />
  <label for=\"file_select_local\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("from local server")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_server_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.file_selections", weight="300")*/
/*  #}*/
/* */
/* <li class="local-server-label label-field">*/
/*   <input type="radio" id="file_select_local" name="file_select" value="local" />*/
/*   <label for="file_select_local">{{ t('from local server') }}</label>*/
/* </li>*/
/* */
