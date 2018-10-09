<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/group.title.twig */
class __TwigTemplate_afd87874ec272d9485f9a2c8ae35b381c0af1c7b20d1021fd6606b773a0909fd extends \XLite\Core\Templating\Twig\Template
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
<td colspan=\"7\">
  <p class=\"group-title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "group", array()), "title", array()), "html", null, true);
        echo "</p>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/group.title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item name*/
/*  #*/
/*  # @ListChild (list="cart.group", weight="10")*/
/*  #}*/
/* */
/* <td colspan="7">*/
/*   <p class="group-title">{{ this.group.title }}</p>*/
/* </td>*/
/* */
