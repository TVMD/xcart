<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/icon.twig */
class __TwigTemplate_56a13e6fab3c362637f2664e112acfce9aa764e6290630b3aa94260f79702c85 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"module-icon\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "hasIcon", array(), "method")) {
            // line 8
            echo "  <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getPublicIconURL", array(), "method"), "html", null, true);
            echo "\" class=\"addon-icon\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
            echo "\" />
  ";
        } else {
            // line 10
            echo "  <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" class=\"addon-icon addon-default-icon\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
            echo "\" />
  ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table", weight="100")*/
/*  #}*/
/* <div class="module-icon">*/
/*   {% if this.entry.hasIcon() %}*/
/*   <img src="{{ this.entry.getPublicIconURL() }}" class="addon-icon" alt="{{ this.entry.getName() }}" />*/
/*   {% else %}*/
/*   <img src="{{ asset('images/spacer.gif') }}" class="addon-icon addon-default-icon" alt="{{ this.entry.getName() }}" />*/
/*   {% endif %}*/
/* </div>*/
/* */
