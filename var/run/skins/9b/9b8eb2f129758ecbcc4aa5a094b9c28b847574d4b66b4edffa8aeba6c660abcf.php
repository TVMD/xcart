<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/file_select_actions.twig */
class __TwigTemplate_68e9e4d77cfbaa8b95eba8b8880d553dbcb22305113ca30754e6cadf04d8b5bf extends \XLite\Core\Templating\Twig\Template
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
<div class=\"upload-file\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload")), "style" => "main-button"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/file_select_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="file_select_dialog.actions", weight="100")*/
/*  #}*/
/* */
/* <div class="upload-file">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Upload'), style='main-button') }}*/
/* </div>*/
/* */
