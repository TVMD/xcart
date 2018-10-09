<?php

/* /var/www/next/output/xcart/src/skins/admin/order/history/parts/block.twig */
class __TwigTemplate_7dd1898d52ac71f3ba21f55db1c6cb658392f25b78126411d119971874cccff2 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderHistoryEventsBlock", array(), "method"));
        foreach ($context['_seq'] as $context["index"] => $context["block"]) {
            // line 7
            echo "  <li class=\"block\">
    <ul class=\"block-item\">
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.history.base.events", "index" => $context["index"], "block" => $context["block"]))), "html", null, true);
            echo "
    </ul>
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/history/parts/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history block*/
/*  #*/
/*  # @ListChild (list="order.history.base", weight="10")*/
/*  #}*/
/* {% for index, block in this.getOrderHistoryEventsBlock() %}*/
/*   <li class="block">*/
/*     <ul class="block-item">*/
/*       {{ widget_list('order.history.base.events', index=index, block=block) }}*/
/*     </ul>*/
/*   </li>*/
/* {% endfor %}*/
/* */
