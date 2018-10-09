<?php

/* /var/www/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig */
class __TwigTemplate_26f88eedec30b003ccc748cdacd7ec1b49deef3161195019e8e9594904833289 extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"js-tabs dashboard-tabs\">
  
    <div class=\"tabs\">
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
            foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                // line 13
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => $context["tab"]), "method"), "html", null, true);
                echo "\">
            <a href=\"#link-";
                // line 14
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" data-id=\"";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["tab"], "name", array()))), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
  
    ";
            // line 20
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
                // line 21
                echo "      <div id=\"";
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\" class=\"tab-content\" style=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabStyle", array(0 => $context["tab"]), "method"), "html", null, true);
                echo "\">
        <a name=\"link-";
                // line 22
                echo $this->getAttribute($context["tab"], "id", array());
                echo "\"></a>
        ";
                // line 23
                if ($this->getAttribute($context["tab"], "template", array())) {
                    // line 24
                    echo "          ";
                    $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tab"], "template", array()));                    list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                    if ($templateWrapperText) {
echo $templateWrapperStart;
}

                    $this->loadTemplate($this->getAttribute($context["tab"], "template", array()), "/var/www/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig", 24)->display($context);
                    if ($templateWrapperText) {
                        echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                    }
                    // line 25
                    echo "    
        ";
                } elseif ($this->getAttribute(                // line 26
$context["tab"], "widget", array())) {
                    // line 27
                    echo "          ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "widget", array())))), "html", null, true);
                    echo "
    
        ";
                } elseif ($this->getAttribute(                // line 29
$context["tab"], "list", array())) {
                    // line 30
                    echo "          ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["tab"], "list", array())))), "html", null, true);
                    echo "
    
        ";
                } else {
                    // line 33
                    echo "          No content
        ";
                }
                // line 35
                echo "      </div>
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
            // line 37
            echo "  
  </div>
";
        }
        // line 40
        echo "
<div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  137 => 37,  122 => 35,  118 => 33,  111 => 30,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  87 => 24,  85 => 23,  81 => 22,  74 => 21,  57 => 20,  52 => 17,  39 => 14,  34 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Panel*/
/*  #*/
/*  # @ListChild (list="dashboard-center", weight="200")*/
/*  #}*/
/* */
/* {% if this.getTabs() %}*/
/*   <div class="js-tabs dashboard-tabs">*/
/*   */
/*     <div class="tabs">*/
/*       <ul>*/
/*         {% for index, tab in this.getTabs() %}*/
/*           <li class="{{ this.getTabClass(tab) }}">*/
/*             <a href="#link-{{ tab.id|raw }}" data-id="{{ tab.id|raw }}">{{ t(tab.name) }}</a>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   */
/*     {% for tab in this.getTabs() %}*/
/*       <div id="{{ tab.id|raw }}" class="tab-content" style="{{ this.getTabStyle(tab) }}">*/
/*         <a name="link-{{ tab.id|raw }}"></a>*/
/*         {% if tab.template %}*/
/*           {% include tab.template %}*/
/*     */
/*         {% elseif tab.widget %}*/
/*           {{ widget(tab.widget) }}*/
/*     */
/*         {% elseif tab.list %}*/
/*           {{ widget_list(tab.list) }}*/
/*     */
/*         {% else %}*/
/*           No content*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* <div class="clear"></div>*/
/* */
/* */
