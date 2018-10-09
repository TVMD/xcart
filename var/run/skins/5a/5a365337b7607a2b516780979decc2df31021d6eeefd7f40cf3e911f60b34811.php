<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CustomProductTabs/product/brief_info.twig */
class __TwigTemplate_576ac3089a998110119701021566a1a472053a2d1b6c1996e491a8c414439c86 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasTabsBriefInfo", array(), "method")) {
            // line 8
            echo "  <div class=\"product-tabs-brief-info\">
    <ul>
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabsBriefInfo", array(), "method"));
            foreach ($context['_seq'] as $context["link"] => $context["info"]) {
                // line 11
                echo "        <li>
          <span class=\"tab-title\">";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["info"], "title", array()), "html", null, true);
                echo "</span>
          <div class=\"tab-brief-info-body\">
            ";
                // line 14
                echo $this->getAttribute($context["info"], "brief_info", array());
                echo "
          </div>
          <div class=\"brief-info-link\">
            <a data-id=\"";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\" href=\"#";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["link"], "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("learn more")), "html", null, true);
                echo "</a>
          </div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['link'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CustomProductTabs/product/brief_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  46 => 17,  40 => 14,  35 => 12,  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details main block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="105")*/
/*  #}*/
/* */
/* {% if this.hasTabsBriefInfo() %}*/
/*   <div class="product-tabs-brief-info">*/
/*     <ul>*/
/*       {% for link, info in this.getTabsBriefInfo() %}*/
/*         <li>*/
/*           <span class="tab-title">{{ info.title }}</span>*/
/*           <div class="tab-brief-info-body">*/
/*             {{ info.brief_info|raw }}*/
/*           </div>*/
/*           <div class="brief-info-link">*/
/*             <a data-id="{{ link }}" href="#{{ link }}" data-toggle="tab">{{ t('learn more') }}</a>*/
/*           </div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
