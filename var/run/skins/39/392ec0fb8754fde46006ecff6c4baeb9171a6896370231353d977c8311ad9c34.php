<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/image.twig */
class __TwigTemplate_7767778fcc6af8c25ebd3a5d41f2258896d0214eaba69e1b779ab9fc304085c7 extends \XLite\Core\Templating\Twig\Template
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
<p class=\"next-previous-image\">
    <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "name", array()), "className" => "photo"))), "html", null, true);
        echo "
    </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body.dropdown", weight="100")*/
/*  #}*/
/* */
/* <p class="next-previous-image">*/
/*     <a href="{{ this.getItemURL(this.item) }}">*/
/*         {{ widget('\\XLite\\View\\Image', image=this.item.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.item.name, className='photo') }}*/
/*     </a>*/
/* </p>*/
/* */
