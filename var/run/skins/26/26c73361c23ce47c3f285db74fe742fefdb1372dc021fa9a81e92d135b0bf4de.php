<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_disable.twig */
class __TwigTemplate_a09674bea9ac836c6521b8551f256a719aee40c184fac4ea0e0b6f8f6ebb51d7 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "canDisable", array(), "method")) {
            // line 8
            echo "  ";
            $context["dependentModules"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDependentModules", array(), "method");
            // line 9
            echo "  <div class=\"note dependencies\">

    ";
            // line 11
            if ( !twig_test_empty((isset($context["dependentModules"]) ? $context["dependentModules"] : null))) {
                // line 12
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Can't be disabled. The module is required by:")), "html", null, true);
                echo "

      <ul>
        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getDependentModules", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["depend"]) {
                    // line 16
                    echo "          <li>
            <a href=\"#";
                    // line 17
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["depend"], "getName", array(), "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["depend"], "getModuleName", array(), "method"), "html", null, true);
                    echo " (";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["depend"], "getAuthorName", array(), "method"), "html", null, true);
                    echo ")</a>
          </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['depend'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "      </ul>
    ";
            } else {
                // line 22
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module may not be disabled due to the limitations of the module architecture.")), "html", null, true);
                echo "
    ";
            }
            // line 24
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_disable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  66 => 22,  62 => 20,  47 => 17,  44 => 16,  40 => 15,  33 => 12,  31 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages", weight="30")*/
/*  #}*/
/* */
/* {% if not this.module.canDisable() %}*/
/*   {% set dependentModules = this.module.getDependentModules() %}*/
/*   <div class="note dependencies">*/
/* */
/*     {% if dependentModules is not empty %}*/
/*       {{ t('Can\'t be disabled. The module is required by:') }}*/
/* */
/*       <ul>*/
/*         {% for depend in this.module.getDependentModules() %}*/
/*           <li>*/
/*             <a href="#{{ depend.getName() }}">{{ depend.getModuleName() }} ({{ t('by') }} {{ depend.getAuthorName() }})</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% else %}*/
/*       {{ t('The module may not be disabled due to the limitations of the module architecture.') }}*/
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
