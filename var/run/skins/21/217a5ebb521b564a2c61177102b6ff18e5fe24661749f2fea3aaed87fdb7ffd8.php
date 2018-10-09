<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/product/details/parts/page.tabs.twig */
class __TwigTemplate_2b0f4c4f628e1428cb07dba37fb3984cd42667bad219fa86fa67f53b47fea5d9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method")) {
            // line 8
            echo "  <div class=\"product-details-tabs\">

    <div class=\"tabs\">
      <ul class=\"tabs primary\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
            foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                // line 13
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => $context["tab"]), "method"), "html", null, true);
                echo "\">
            <a data-id=\"";
                // line 14
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\"
               ";
                // line 15
                if ($this->getAttribute($context["tab"], "alt_id", array())) {
                    echo "data-alt-id=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tab"], "alt_id", array()), "html", null, true);
                    echo "\"";
                }
                // line 16
                echo "               href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "productId", array())))), "html", null, true);
                echo "#";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\"
               data-toggle=\"tab\">";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
    </div>

    <div class=\"tabs-container\">
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 25
                echo "        ";
                if ($this->getAttribute($context["tab"], "alt_id", array())) {
                    // line 26
                    echo "          <div id=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["tab"], "alt_id", array()), "html", null, true);
                    echo "\"></div>
        ";
                }
                // line 28
                echo "        <div id=\"";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" class=\"tab-container hacky-container\">
          <a name=\"";
                // line 29
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\"></a>
          ";
                // line 30
                if ($this->getAttribute($context["tab"], "template", array())) {
                    // line 31
                    echo "            ";
                    $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tab"], "template", array()));                    list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                    if ($templateWrapperText) {
echo $templateWrapperStart;
}

                    $this->loadTemplate($this->getAttribute($context["tab"], "template", array()), "/var/www/next/output/xcart/src/skins/crisp_white/customer/product/details/parts/page.tabs.twig", 31)->display($context);
                    if ($templateWrapperText) {
                        echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                    }
                    // line 32
                    echo "
          ";
                } else {
                    // line 34
                    echo "            ";
                    if ($this->getAttribute($context["tab"], "widget", array())) {
                        // line 35
                        echo "              ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "widget", array()), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                        echo "

            ";
                    } else {
                        // line 38
                        echo "              ";
                        if ($this->getAttribute($context["tab"], "list", array())) {
                            // line 39
                            echo "                ";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "list", array()), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                            echo "
              ";
                        } else {
                            // line 41
                            echo "                ";
                            if ($this->getAttribute($context["tab"], "widgetObject", array())) {
                                // line 42
                                echo "                  ";
                                echo $this->getAttribute($this->getAttribute($context["tab"], "widgetObject", array()), "display", array(), "method");
                                echo "
                ";
                            }
                            // line 44
                            echo "              ";
                        }
                        // line 45
                        echo "            ";
                    }
                    // line 46
                    echo "          ";
                }
                // line 47
                echo "        </div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    </div>

  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/product/details/parts/page.tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 49,  160 => 47,  157 => 46,  154 => 45,  151 => 44,  145 => 42,  142 => 41,  136 => 39,  133 => 38,  126 => 35,  123 => 34,  119 => 32,  108 => 31,  106 => 30,  102 => 29,  97 => 28,  91 => 26,  88 => 25,  71 => 24,  65 => 20,  56 => 17,  49 => 16,  43 => 15,  39 => 14,  34 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details information block*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="40")*/
/*  #}*/
/* */
/* {% if this.getTabs() %}*/
/*   <div class="product-details-tabs">*/
/* */
/*     <div class="tabs">*/
/*       <ul class="tabs primary">*/
/*         {% for index, tab in this.getTabs() %}*/
/*           <li class="{{ this.getTabClass(tab) }}">*/
/*             <a data-id="{{ tab.id|raw }}"*/
/*                {% if tab.alt_id %}data-alt-id="{{ tab.alt_id }}"{% endif %}*/
/*                href="{{ url('product', '', {'product_id': this.product.productId}) }}#{{ tab.id|raw }}"*/
/*                data-toggle="tab">{{ tab.name }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/* */
/*     <div class="tabs-container">*/
/*       {% for tab in this.getTabs() %}*/
/*         {% if tab.alt_id %}*/
/*           <div id="{{ tab.alt_id }}"></div>*/
/*         {% endif %}*/
/*         <div id="{{ tab.id|raw }}" class="tab-container hacky-container">*/
/*           <a name="{{ tab.id|raw }}"></a>*/
/*           {% if tab.template %}*/
/*             {% include tab.template %}*/
/* */
/*           {% else %}*/
/*             {% if tab.widget %}*/
/*               {{ widget(tab.widget, product=this.product) }}*/
/* */
/*             {% else %}*/
/*               {% if tab.list %}*/
/*                 {{ widget_list(tab.list, product=this.product) }}*/
/*               {% else %}*/
/*                 {% if tab.widgetObject %}*/
/*                   {{ tab.widgetObject.display()|raw }}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*   </div>*/
/* {% endif %}*/
/* */
