<?php

/* /var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_computer_input.twig */
class __TwigTemplate_c316885f9e4f0049e5895327815541d11cb444cbc7d520ec7f37fbbe3fb11489 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"local-computer-input input-field\">
  <input type=\"file\" name=\"uploaded_file\" />
  <span class=\"upload-file-message\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUploadFileMessage", array(), "method"), "html", null, true);
        echo "</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_selector/parts/local_computer_input.twig";
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
/*  # @ListChild (list="file_select_dialog.file_selections", weight="200")*/
/*  #}*/
/* */
/* <li class="local-computer-input input-field">*/
/*   <input type="file" name="uploaded_file" />*/
/*   <span class="upload-file-message">{{ this.getUploadFileMessage() }}</span>*/
/* </li>*/
/* */
