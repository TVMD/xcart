<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/page.image.twig */
class __TwigTemplate_aa5af028fd1ffb0226fe73adf975ffdaba4ace89d6297f5fc4f8200b7363e0ad extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"image";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "hasImage", array(), "method")) {
            echo " empty";
        }
        echo "\" style=\"width: ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxImageWidth", array(), "method"), "html", null, true);
        echo "px;\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.image"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/page.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details image block*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="20")*/
/*  #}*/
/* <div class="image{% if not this.product.hasImage() %} empty{% endif %}" style="width: {{ this.getMaxImageWidth() }}px;">*/
/*   {{ widget_list('product.details.page.image') }}*/
/* </div>*/
/* */
