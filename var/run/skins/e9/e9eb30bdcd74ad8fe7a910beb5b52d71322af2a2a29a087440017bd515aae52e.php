<?php

/* /var/www/next/output/xcart/src/skins/admin/browse_server/parts/items.twig */
class __TwigTemplate_014995ed9b46f1af2669a71a1a57699767327a1726bb34e39d4292951933bf78 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"browse-selector\">
  <ul class=\"file-system-entries\">
    <li class=\"file-system-entry up-level\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCatalogInfo", array(), "method")), "method"), "html", null, true);
        echo "
      <a class=\"type-catalog up-level\"><img src=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
        echo "\" alt=\"\" />[...]</a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFSEntries", array(), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["entry"]) {
            // line 13
            echo "      <li class=\"fs-entry\">
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "browseServer.item", "entry" => $context["entry"]))), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyCatalog", array(), "method")) {
            // line 18
            echo "      <li class=\"empty-catalog\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Directory is empty")), "html", null, true);
            echo "</li>
    ";
        }
        // line 20
        echo "  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/browse_server/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  52 => 18,  49 => 17,  40 => 14,  37 => 13,  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Browser server dialog : items*/
/*  #*/
/*  # @ListChild (list="browseServer", zone="admin", weight="100")*/
/*  #}*/
/* <div class="browse-selector">*/
/*   <ul class="file-system-entries">*/
/*     <li class="file-system-entry up-level">*/
/*       {{ this.displayCommentedData(this.getCatalogInfo()) }}*/
/*       <a class="type-catalog up-level"><img src="{{ asset('images/spacer.gif') }}" alt="" />[...]</a>*/
/*     </li>*/
/*     {% for idx, entry in this.getFSEntries() %}*/
/*       <li class="fs-entry">*/
/*         {{ widget_list('browseServer.item', entry=entry) }}*/
/*       </li>*/
/*     {% endfor %}*/
/*     {% if this.isEmptyCatalog() %}*/
/*       <li class="empty-catalog">{{ t('Directory is empty') }}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
/* */
/* */
