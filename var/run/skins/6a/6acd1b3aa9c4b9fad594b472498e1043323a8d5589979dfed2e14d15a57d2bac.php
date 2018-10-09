<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/js_code.twig */
class __TwigTemplate_6e430d1e2ad68d5e9459f3f9a4b295cd505bdb52e97eae1bab0d0a7b76355622 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
  moduleNames['";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method"), "html", null, true);
        echo "'] = '";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormattedModuleName", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
        echo "';
  moduleStatuses['";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method"), "html", null, true);
        echo "'] = '";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getEnabled", array(), "method")) {
            echo "1";
        } else {
            echo "0";
        }
        echo "';
  depends['";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method"), "html", null, true);
        echo "'] = [];
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDependencyModules", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["m"]) {
            // line 12
            echo "    depends['";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method"), "html", null, true);
            echo "']['";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "'] = '";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["m"], "getModuleID", array(), "method"), "html", null, true);
            echo "';
    if (!moduleNames['";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["m"], "getModuleID", array(), "method"), "html", null, true);
            echo "']) {
      moduleNames['";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["m"], "getModuleID", array(), "method"), "html", null, true);
            echo "'] = '";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormattedModuleName", array(0 => $context["m"]), "method"), "html", null, true);
            echo "';
    }
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  dependents['";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method"), "html", null, true);
        echo "'] = [];
  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDependentModules", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["m"]) {
            // line 20
            echo "    dependents['";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"), "html", null, true);
            echo "'].push('";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["m"], "getModuleID", array(), "method"), "html", null, true);
            echo "');
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/js_code.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 22,  82 => 20,  78 => 19,  74 => 18,  71 => 17,  60 => 14,  56 => 13,  47 => 12,  43 => 11,  39 => 10,  29 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="1000")*/
/*  #}*/
/* */
/* <script type="text/javascript">*/
/*   moduleNames['{{ this.module.getModuleID() }}'] = '{{ this.getFormattedModuleName(this.module) }}';*/
/*   moduleStatuses['{{ this.module.getModuleID() }}'] = '{% if this.module.getEnabled() %}1{% else %}0{% endif %}';*/
/*   depends['{{ this.module.getModuleID() }}'] = [];*/
/*   {% for k, m in this.module.getDependencyModules() %}*/
/*     depends['{{ this.module.getModuleID() }}']['{{ k }}'] = '{{ m.getModuleID() }}';*/
/*     if (!moduleNames['{{ m.getModuleID() }}']) {*/
/*       moduleNames['{{ m.getModuleID() }}'] = '{{ this.getFormattedModuleName(m) }}';*/
/*     }*/
/*   {% endfor %}*/
/* */
/*   dependents['{{ this.module.getModuleID() }}'] = [];*/
/*   {% for k, m in this.module.getDependentModules() %}*/
/*     dependents['{{ this.module.getModuleId() }}'].push('{{ m.getModuleID() }}');*/
/*   {% endfor %}*/
/* </script>*/
/* */
