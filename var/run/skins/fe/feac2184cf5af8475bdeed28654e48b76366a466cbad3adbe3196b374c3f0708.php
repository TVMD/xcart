<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/common.errors.twig */
class __TwigTemplate_34960333c0f63b7fde6cf356f17f34eb89faf5bffd2cd83eb4edadd56823d49c extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
        echo "</h3>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFiles", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            echo "  <div class=\"errors-wrapper faded initial\">
    <ul class=\"errors\">
      <li class=\"title\">
        <i class=\"icon-file-alt\"></i> 
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "file", array()), "html", null, true);
            echo "
        ";
            // line 15
            if ($this->getAttribute($context["file"], "countW", array())) {
                // line 16
                echo "          <span class=\"count-w\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "countW", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 18
            echo "        ";
            if ($this->getAttribute($context["file"], "countE", array())) {
                // line 19
                echo "          <span class=\"count-e\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "countE", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 21
            echo "      </li>
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrorsGroups", array(0 => $this->getAttribute($context["file"], "file", array())), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["errorGroup"]) {
                // line 23
                echo "        <li class=\"clearfix type-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["errorGroup"], "type", array()), "html", null, true);
                echo "\">
          <div class=\"message\">
            <div class=\"message-text\">";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getGroupErrorMessage", array(0 => $context["errorGroup"]), "method"), "html", null, true);
                echo "</div>
            <hr>
            <div class=\"rows\">";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getGroupErrorRows", array(0 => $context["errorGroup"]), "method"), "html", null, true);
                echo "</div>
          </div>
          <div class=\"text\">";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrorText", array(0 => $context["errorGroup"]), "method"), "html", null, true);
                echo "</div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/common.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  80 => 29,  75 => 27,  70 => 25,  64 => 23,  60 => 22,  57 => 21,  51 => 19,  48 => 18,  42 => 16,  40 => 15,  36 => 14,  30 => 10,  26 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Errors and warnings list template*/
/*  #*/
/*  # @ListChild (list="import.failed.content.errors", weight="100")*/
/*  # @ListChild (list="import.completed.content.errors", weight="100")*/
/*  #}*/
/* */
/* <h3>{{ this.getTitle() }}</h3>*/
/* {% for file in this.getFiles() %}*/
/*   <div class="errors-wrapper faded initial">*/
/*     <ul class="errors">*/
/*       <li class="title">*/
/*         <i class="icon-file-alt"></i> */
/*         {{ file.file }}*/
/*         {% if file.countW %}*/
/*           <span class="count-w">{{ file.countW }}</span>*/
/*         {% endif %}*/
/*         {% if file.countE %}*/
/*           <span class="count-e">{{ file.countE }}</span>*/
/*         {% endif %}*/
/*       </li>*/
/*       {% for errorGroup in this.getErrorsGroups(file.file) %}*/
/*         <li class="clearfix type-{{ errorGroup.type }}">*/
/*           <div class="message">*/
/*             <div class="message-text">{{ this.getGroupErrorMessage(errorGroup) }}</div>*/
/*             <hr>*/
/*             <div class="rows">{{ this.getGroupErrorRows(errorGroup) }}</div>*/
/*           </div>*/
/*           <div class="text">{{ this.getErrorText(errorGroup) }}</div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endfor %}*/
/* */
