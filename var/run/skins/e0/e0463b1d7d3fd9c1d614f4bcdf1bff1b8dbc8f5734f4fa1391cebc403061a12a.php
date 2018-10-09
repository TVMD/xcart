<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/sales_channels/items_list/footer.twig */
class __TwigTemplate_95d7fcb8cad24d707ae01990fb6f28fbe78fb4d7ef143945e6a276c5920a2bae extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"sales-channel-footer\">
  <a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildURL", array(0 => "addons_list_marketplace"), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View more addons in Marketplace")), "html", null, true);
        echo "</a>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/sales_channels/items_list/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="sales-channels.top-controls", weight="500")*/
/*  #}*/
/* <div class="sales-channel-footer">*/
/*   <a href="{{ this.buildURL('addons_list_marketplace') }}">{{ t('View more addons in Marketplace') }}</a>*/
/* </div>*/
