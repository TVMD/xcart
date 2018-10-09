<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.actions.twig */
class __TwigTemplate_294bb414b3a43bc76629e4282c004a4016cd8786460d1cabfedf37b27853f6e5 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"actions\">
  
  <div class=\"left-column\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "capost_return.form.actions.left"))), "html", null, true);
        echo "
  </div>

  <div class=\"right-column\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "capost_return.form.actions.right"))), "html", null, true);
        echo "
  </div>

  <div class=\"clear\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/products_return/parts/form.actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post products return :: from :: actions*/
/*  #*/
/*  # @ListChild (list="capost_return.form", weight="100")*/
/*  #}*/
/* */
/* <div class="actions">*/
/*   */
/*   <div class="left-column">*/
/*     {{ widget_list('capost_return.form.actions.left') }}*/
/*   </div>*/
/* */
/*   <div class="right-column">*/
/*     {{ widget_list('capost_return.form.actions.right') }}*/
/*   </div>*/
/* */
/*   <div class="clear"></div>*/
/* */
/* </div>*/
/* */
