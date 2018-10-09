<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig */
class __TwigTemplate_c1519a6433dedd24e23ac1c8ad30292b65b8765f47537e8f4ead3d3ed449f28e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "import.failed.content.errors"))), "html", null, true);
        echo "

";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrors", array(), "method")) {
            // line 10
            echo "  <div class=\"alert alert-danger\">
  ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Critical errors have been detected in the files you are trying to import. Check the manual to correct the errors and try again.")), "html", null, true);
            echo "
  ";
            // line 12
            $context["manualLinks"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getManualLinks", array(), "method");
            // line 13
            echo "  ";
            if ( !twig_test_empty((isset($context["manualLinks"]) ? $context["manualLinks"] : null))) {
                // line 14
                echo "    <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("CSV format tables")), "html", null, true);
                echo ":</div>
    <ul>
      ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["manualLinks"]) ? $context["manualLinks"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 17
                    echo "        <li><a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "manualURL", array()), "html", null, true);
                    echo "\" target=\"_blank\" class=\"external\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "file", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    </ul>
  ";
            }
            // line 21
            echo "  </div>
";
        }
        // line 23
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBroken", array(), "method")) {
            // line 24
            echo "  <div class=\"alert alert-danger\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Import has been cancelled.")), "html", null, true);
            echo "</div>
";
        }
        // line 26
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrorsOrWarnings", array(), "method")) {
            // line 27
            echo "  <div class=\"download-errors\">
      <a href=\"";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "import", "getErrorsFile")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Download error file")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  80 => 27,  78 => 26,  72 => 24,  70 => 23,  66 => 21,  62 => 19,  51 => 17,  47 => 16,  41 => 14,  38 => 13,  36 => 12,  32 => 11,  29 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Import failed section : errors */
/*  #*/
/*  # @ListChild (list="import.failed.content", weight="100")*/
/*  #}*/
/* */
/* {{ widget_list('import.failed.content.errors') }}*/
/* */
/* {% if this.hasErrors() %}*/
/*   <div class="alert alert-danger">*/
/*   {{ t('Critical errors have been detected in the files you are trying to import. Check the manual to correct the errors and try again.') }}*/
/*   {% set manualLinks = this.getManualLinks() %}*/
/*   {% if manualLinks is not empty %}*/
/*     <div>{{ t('CSV format tables') }}:</div>*/
/*     <ul>*/
/*       {% for file in manualLinks %}*/
/*         <li><a href="{{ file.manualURL }}" target="_blank" class="external">{{ file.file }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* {% if this.isBroken() %}*/
/*   <div class="alert alert-danger">{{ t('Import has been cancelled.') }}</div>*/
/* {% endif %}*/
/* {% if this.hasErrorsOrWarnings() %}*/
/*   <div class="download-errors">*/
/*       <a href="{{ url('import', 'getErrorsFile') }}">{{ t('Download error file') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
