<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module.twig */
class __TwigTemplate_fd6fd8e13d9448c81c0c9afe17406993a4655086f8024fc7950ef9bced86ea56 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 8
            echo "  <li class=\"module\">
    <ul class=\"details\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form.info.module", "type" => "inherited", "entry" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())))), "html", null, true);
            echo "
    </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info", weight="200")*/
/*  #}*/
/* */
/* {% if this.isModule(this.entry) %}*/
/*   <li class="module">*/
/*     <ul class="details">*/
/*     {{ widget_list('sections.form.info.module', type='inherited', entry=this.entry) }}*/
/*     </ul>*/
/*   </li>*/
/* {% endif %}*/
/* */
