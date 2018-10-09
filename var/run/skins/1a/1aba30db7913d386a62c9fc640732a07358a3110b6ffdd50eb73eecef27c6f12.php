<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.files.twig */
class __TwigTemplate_852bb1cb1cd424c468c782f86f6d0e50076d78aac95c4b5c2c661a7f725c13be extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "hasLinks", array(), "method")) {
            // line 8
            echo "  <div class=\"documents\">
    
    <h2>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Documents")), "html", null, true);
            echo "</h2>
  
    <ul>
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 14
                echo "        <li>
          <a href=\"";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["link"], "storage", array()), "getURL", array(), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["link"], "getLinkTitle", array(), "method"), "html", null, true);
                echo "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
    
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 18,  41 => 15,  38 => 14,  34 => 13,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return :: from :: files*/
/*  #*/
/*  # @ListChild (list="capost_return.form", weight="300")*/
/*  #}*/
/* */
/* {% if this.productsReturn.hasLinks() %}*/
/*   <div class="documents">*/
/*     */
/*     <h2>{{ t('Documents') }}</h2>*/
/*   */
/*     <ul>*/
/*       {% for link in this.productsReturn.getLinks() %}*/
/*         <li>*/
/*           <a href="{{ link.storage.getURL() }}">{{ link.getLinkTitle() }}</a>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     */
/*   </div>*/
/* {% endif %}*/
/* */
