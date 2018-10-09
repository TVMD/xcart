<?php

/* /var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.delete.twig */
class __TwigTemplate_c5405034b62edf881427c4c56f46880f18fa7e93bf80015b686c47f8ffc798c4 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasFile", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRemovable", array(), "method"))) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete")), "html", null, true);
            echo "</span>
    </a>
  </li>
  <li role=\"presentation\" class=\"undelete\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"delete\" @click.prevent=\"toggleDelete\">
      <div class=\"diagonal\"></div>
      <i class=\"button-icon fa fa-trash-o\"></i>
      <span>";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Undelete")), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 19,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="100")*/
/*  #}*/
/* */
/* {% if this.hasFile() and this.isRemovable() %}*/
/*   <li role="presentation" class="divider"></li>*/
/*   <li role="presentation">*/
/*     <a role="menuitem" tabindex="-1" href="#" class="delete" @click.prevent="toggleDelete">*/
/*       <i class="button-icon fa fa-trash-o"></i>*/
/*       <span>{{ t('Delete') }}</span>*/
/*     </a>*/
/*   </li>*/
/*   <li role="presentation" class="undelete">*/
/*     <a role="menuitem" tabindex="-1" href="#" class="delete" @click.prevent="toggleDelete">*/
/*       <div class="diagonal"></div>*/
/*       <i class="button-icon fa fa-trash-o"></i>*/
/*       <span>{{ t('Undelete') }}</span>*/
/*     </a>*/
/*   </li>*/
/* {% endif %}*/
/* */
