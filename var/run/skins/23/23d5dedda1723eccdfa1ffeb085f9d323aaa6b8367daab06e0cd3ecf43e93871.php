<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.notes.twig */
class __TwigTemplate_3743f5d2ece303d9bf262b547ca2377ab63c1851afad5aa543db7e8cceaedbf7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCustomerNotesVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"customer-notes\">
    
    <h2>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer note")), "html", null, true);
            echo "</h2>
    
    <div class=\"note\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "getNotes", array(), "method"), "html", null, true);
            echo "</div>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return :: from :: customer notes*/
/*  #*/
/*  # @ListChild (list="capost_return.form", weight="400")*/
/*  #}*/
/* */
/* {% if this.isCustomerNotesVisible() %}*/
/*   <div class="customer-notes">*/
/*     */
/*     <h2>{{ t('Customer note') }}</h2>*/
/*     */
/*     <div class="note">{{ this.productsReturn.getNotes() }}</div>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
