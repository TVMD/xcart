<?php

/* /var/www/next/output/xcart/src/skins/admin/welcome_block/admin/block.items.twig */
class __TwigTemplate_0e1036f77b89d455bb11e8c3c0f85ab6009d700de22a44f34dba1b87177f0f76 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"step-items\">
  <ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRoles", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 10
            echo "      <li class=\"item-role\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/welcome_block/admin/block.items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Block content : items*/
/*  #*/
/*  # @ListChild (list="welcome-block.non-root.content", weight="10")*/
/*  #}*/
/* */
/* <div class="step-items">*/
/*   <ul>*/
/*     {% for role in this.getRoles() %}*/
/*       <li class="item-role">{{ role.name }}</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
/* */
/* */
