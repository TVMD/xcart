<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_computer_label.twig */
class __TwigTemplate_271d0d0471b2cd3e503af85b7a59b71b2f67b76decf0e9ef4f27715148dea342 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-computer-label label-field\">
  <input type=\"radio\" id=\"file_select_upload\" name=\"file_select\" value=\"upload\" />
  <label for=\"file_select_upload\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("from local computer")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_computer_label.twig";
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
/*  # @ListChild (list="file_select_dialog.file_selections", weight="100")*/
/*  #}*/
/* */
/* <li class="local-computer-label label-field">*/
/*   <input type="radio" id="file_select_upload" name="file_select" value="upload" />*/
/*   <label for="file_select_upload">{{ t('from local computer') }}</label>*/
/* </li>*/
/* */
