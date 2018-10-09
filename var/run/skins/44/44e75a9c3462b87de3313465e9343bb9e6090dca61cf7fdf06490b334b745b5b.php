<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/images.twig */
class __TwigTemplate_88e5a8dcfa6329e94e91a73b0942be48e42dd83382d1533677bb9eb117f7f6c3 extends \XLite\Core\Templating\Twig\Template
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
<tr class=\"images\">
  <td class=\"clear-list\">
    <a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "compare", "clear")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clear list")), "html", null, true);
        echo "</a>
  </td>
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 12
            echo "    <td>
      <a target=\"_blank\"
        href=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($context["product"], "product_id", array())))), "html", null, true);
            echo "\"
        class=\"product-thumbnail\">
          ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($context["product"], "getImage", array(), "method"), "maxWidth" => "110", "maxHeight" => "70", "alt" => $this->getAttribute($context["product"], "name", array()), "className" => "photo"))), "html", null, true);
            echo "
      </a>
      <a
        href=\"";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "compare", "delete", array("product_id" => $this->getAttribute($context["product"], "product_id", array())))), "html", null, true);
            echo "\"
        class=\"remove\"
        title=\"";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "html", null, true);
            echo "\"
        data-id=\"";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["product"], "product_id", array()), "html", null, true);
            echo "\">
        <img src=\"";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remove")), "html", null, true);
            echo "\" />
      </a>
    </td>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/images.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 27,  63 => 23,  59 => 22,  55 => 21,  50 => 19,  44 => 16,  39 => 14,  35 => 12,  31 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Images*/
/*  #*/
/*  # @ListChild (list="comparison_table.header", weight="100")*/
/*  #}*/
/* */
/* <tr class="images">*/
/*   <td class="clear-list">*/
/*     <a href="{{ url('compare', 'clear') }}">{{ t('Clear list') }}</a>*/
/*   </td>*/
/*   {% for product in this.getProducts() %}*/
/*     <td>*/
/*       <a target="_blank"*/
/*         href="{{ url('product', '', {'product_id': product.product_id}) }}"*/
/*         class="product-thumbnail">*/
/*           {{ widget('\\XLite\\View\\Image', image=product.getImage(), maxWidth='110', maxHeight='70', alt=product.name, className='photo') }}*/
/*       </a>*/
/*       <a*/
/*         href="{{ url('compare', 'delete', {'product_id': product.product_id}) }}"*/
/*         class="remove"*/
/*         title="{{ t('Remove') }}"*/
/*         data-id="{{ product.product_id }}">*/
/*         <img src="{{ asset('images/spacer.gif') }}" alt="{{ t('Remove') }}" />*/
/*       </a>*/
/*     </td>*/
/*   {% endfor %}*/
/* </tr>*/
/* */
