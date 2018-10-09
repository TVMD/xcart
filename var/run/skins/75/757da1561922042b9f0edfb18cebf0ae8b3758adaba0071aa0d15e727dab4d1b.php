<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.javascript-add2cart.twig */
class __TwigTemplate_0a8fb44e7ca4998040a3a94c5aca39cb2af634a2245f1228aefc5a5eb0b4d958 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getJavascript", array(), "method")) {
            // line 7
            echo "  <script>
  \$(document).ready(
    function() {
      \$('form[name=\"add_to_cart\"]').submit(
        function() {
          ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getJavascript", array(), "method"), "html", null, true);
            echo "
        }
      );
    }
  );
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.javascript-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Custom javascript*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="1000")*/
/*  #}*/
/* {% if this.product.getJavascript() %}*/
/*   <script>*/
/*   $(document).ready(*/
/*     function() {*/
/*       $('form[name="add_to_cart"]').submit(*/
/*         function() {*/
/*           {{ this.product.getJavascript() }}*/
/*         }*/
/*       );*/
/*     }*/
/*   );*/
/*   </script>*/
/* {% endif %}*/
/* */
