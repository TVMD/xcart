<?php

/* /var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.view.twig */
class __TwigTemplate_5c87fc94346b3009f161fed1aaf004f929735b5c3c10146b1fda51a02cc03452 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasView", array(), "method")) {
            // line 8
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "object", array()), "getFrontURL", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">
      <i class=\"button-icon fa fa-picture-o\"></i>
      <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View image")), "html", null, true);
            echo "</span>
    </a>
  </li>
  <li role=\"presentation\" class=\"divider\"></li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="20")*/
/*  #}*/
/* */
/* {% if this.hasView() %}*/
/*   <li role="presentation">*/
/*     <a role="menuitem" tabindex="-1" href="{{ this.object.getFrontURL() }}" target="_blank">*/
/*       <i class="button-icon fa fa-picture-o"></i>*/
/*       <span>{{ t('View image') }}</span>*/
/*     </a>*/
/*   </li>*/
/*   <li role="presentation" class="divider"></li>*/
/* {% endif %}*/
/* */
