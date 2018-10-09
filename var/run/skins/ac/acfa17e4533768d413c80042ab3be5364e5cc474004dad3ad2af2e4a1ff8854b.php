<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form.twig */
class __TwigTemplate_4ace4fdd1d1df05ba6516e6b49b408d25beda8d42a12e481e0eee95e5a24b2a9 extends \XLite\Core\Templating\Twig\Template
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
<form action=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
        echo "\" method=\"post\">

  <input type=\"hidden\" name=\"target\" value=\"upgrade\">
  <input type=\"hidden\" name=\"action\" value=\"start_upgrade\"/>
  ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 12
            echo "    <input type=\"hidden\" name=\"entries[enabled]\" value=\"1\"/>
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\FormId"))), "html", null, true);
        echo "

  <div class=\"update-module-list-frame\">

    ";
        // line 19
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNewFeaturesUpgradeEntries", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHotfixUpgradeEntries", array(), "method"))) {
            // line 20
            echo "      <h2>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Major improvements and new features")), "html", null, true);
            echo "</h2>
      <ul class=\"update-module-list clearfix\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNewFeaturesUpgradeEntries", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 24
                echo "          <li class=\"update-module-info\">
            ";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
      </ul>
      <h2>";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Minor improvements")), "html", null, true);
            echo "</h2>
      <ul class=\"update-module-list clearfix\">

        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHotfixUpgradeEntries", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 34
                echo "          <li class=\"update-module-info\">
            ";
                // line 35
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
      </ul>
    ";
        } else {
            // line 41
            echo "      <ul class=\"update-module-list clearfix\">

        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUpgradeEntries", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 44
                echo "          <li class=\"update-module-info\">
            ";
                // line 45
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "
      </ul>
    ";
        }
        // line 51
        echo "    <div class=\"actions\">
      ";
        // line 52
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 53
            echo "        <div class=\"additional-actions\">
          <span class=\"uncheck-all\">";
            // line 54
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Uncheck all")), "html", null, true);
            echo "</span>
          <span class=\"check-all\">";
            // line 55
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check all")), "html", null, true);
            echo "</span>
        </div>
      ";
        }
        // line 58
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Install updates")), "style" => "center regular-main-button"))), "html", null, true);
        echo "
    </div>

  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 58,  138 => 55,  134 => 54,  131 => 53,  129 => 52,  126 => 51,  121 => 48,  112 => 45,  109 => 44,  105 => 43,  101 => 41,  96 => 38,  87 => 35,  84 => 34,  80 => 33,  74 => 30,  70 => 28,  61 => 25,  58 => 24,  54 => 23,  47 => 20,  45 => 19,  38 => 15,  35 => 14,  31 => 12,  29 => 11,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Updates list*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections", weight="200")*/
/*  #}*/
/* */
/* <form action="{{ url() }}" method="post">*/
/* */
/*   <input type="hidden" name="target" value="upgrade">*/
/*   <input type="hidden" name="action" value="start_upgrade"/>*/
/*   {% if this.isAdvancedMode() %}*/
/*     <input type="hidden" name="entries[enabled]" value="1"/>*/
/*   {% endif %}*/
/* */
/*   {{ widget('\\XLite\\View\\FormField\\Input\\FormId') }}*/
/* */
/*   <div class="update-module-list-frame">*/
/* */
/*     {% if this.getNewFeaturesUpgradeEntries() and this.getHotfixUpgradeEntries() %}*/
/*       <h2>{{ t('Major improvements and new features') }}</h2>*/
/*       <ul class="update-module-list clearfix">*/
/* */
/*         {% for entry in this.getNewFeaturesUpgradeEntries() %}*/
/*           <li class="update-module-info">*/
/*             {{ widget_list('sections.form', type='inherited', entry=entry) }}*/
/*           </li>*/
/*         {% endfor %}*/
/* */
/*       </ul>*/
/*       <h2>{{ t('Minor improvements') }}</h2>*/
/*       <ul class="update-module-list clearfix">*/
/* */
/*         {% for entry in this.getHotfixUpgradeEntries() %}*/
/*           <li class="update-module-info">*/
/*             {{ widget_list('sections.form', type='inherited', entry=entry) }}*/
/*           </li>*/
/*         {% endfor %}*/
/* */
/*       </ul>*/
/*     {% else %}*/
/*       <ul class="update-module-list clearfix">*/
/* */
/*         {% for entry in this.getUpgradeEntries() %}*/
/*           <li class="update-module-info">*/
/*             {{ widget_list('sections.form', type='inherited', entry=entry) }}*/
/*           </li>*/
/*         {% endfor %}*/
/* */
/*       </ul>*/
/*     {% endif %}*/
/*     <div class="actions">*/
/*       {% if this.isAdvancedMode() %}*/
/*         <div class="additional-actions">*/
/*           <span class="uncheck-all">{{ t('Uncheck all') }}</span>*/
/*           <span class="check-all">{{ t('Check all') }}</span>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ widget('\\XLite\\View\\Button\\Submit', label=t('Install updates'), style='center regular-main-button') }}*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* </form>*/
/* */
