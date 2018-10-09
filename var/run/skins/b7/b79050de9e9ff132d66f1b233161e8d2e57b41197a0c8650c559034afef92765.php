<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.action.right.note.twig */
class __TwigTemplate_5a88d28adcc5668ccc1b916deb76f5c4254dfeb3248645140b2ec81a0ed13eb9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"admin-note\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "label" => "Note", "fieldName" => "postedData[adminNotes]", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "productsReturn", array()), "getAdminNotes", array(), "method")))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.action.right.note.twig";
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
/*  # Canada Post products return :: from :: actions :: right :: status change*/
/*  #*/
/*  # @ListChild (list="capost_return.form.actions.right", weight="100")*/
/*  #}*/
/* */
/* <div class="admin-note">*/
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', label='Note', fieldName='postedData[adminNotes]', value=this.productsReturn.getAdminNotes()) }}*/
/* </div>*/
/* */
