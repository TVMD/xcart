<?php

/* /var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.message.twig */
class __TwigTemplate_b28b3a444608ed0125cb2a0f7e00f2ef0bd7ceb35b8277723572cc083aa8ffff extends \XLite\Core\Templating\Twig\Template
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
<li role=\"presentation\" class=\"dropdown-header message\" v-if=\"errorMessage\">
  <i class=\"fa fa-exclamation-triangle\"></i> <span v-html=\"realErrorMessage\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessage", array(), "method"), "html", null, true);
        echo "</span>
</li>
<li role=\"presentation\" class=\"divider\" v-if=\"message\"></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.message.twig";
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
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="10")*/
/*  #}*/
/* */
/* <li role="presentation" class="dropdown-header message" v-if="errorMessage">*/
/*   <i class="fa fa-exclamation-triangle"></i> <span v-html="realErrorMessage">{{ this.getMessage() }}</span>*/
/* </li>*/
/* <li role="presentation" class="divider" v-if="message"></li>*/
/* */
