<?php

/* /var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/page.twig */
class __TwigTemplate_88a7fd85a6cfef03a078c4fea4f92f8b3b4bdbf78d6f1286dfdd02ed54449b91 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagesListVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"pagination-wrapper\">
    <ul class=\"pagination\">
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPages", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                echo "        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "classes", array()), "html", null, true);
                echo "\">
          ";
                // line 12
                if ($this->getAttribute($context["page"], "href", array())) {
                    // line 13
                    echo "            <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "href", array()), "html", null, true);
                    echo "\" data-pageId=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "num", array()), "html", null, true);
                    echo "\">";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "text", array())));
                    echo "</a>
          ";
                }
                // line 15
                echo "          ";
                if ( !$this->getAttribute($context["page"], "href", array())) {
                    // line 16
                    echo "            <span>";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["page"], "text", array())));
                    echo "</span>
          ";
                }
                // line 18
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  58 => 18,  52 => 16,  49 => 15,  39 => 13,  37 => 12,  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Page selector*/
/*  #*/
/*  # @ListChild (list="pager.admin.model.table.left", weight="100")*/
/*  #}*/
/* */
/* {% if this.isPagesListVisible() %}*/
/*   <div class="pagination-wrapper">*/
/*     <ul class="pagination">*/
/*       {% for page in this.getPages() %}*/
/*         <li class="{{ page.classes }}">*/
/*           {% if page.href %}*/
/*             <a href="{{ page.href }}" data-pageId="{{ page.num }}">{{ t(page.text)|raw }}</a>*/
/*           {% endif %}*/
/*           {% if not page.href %}*/
/*             <span>{{ t(page.text)|raw }}</span>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
