<?php

/* /var/www/next/output/xcart/src/skins/admin/notifications/cell.name.twig */
class __TwigTemplate_d489ae058cbf4f710a159c9abd95cf4d29035a98267de61fe1e419c0a97974a5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"description\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getDescription", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/notifications/cell.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Cell*/
/*  #*/
/*  # @ListChild (list="itemsList.notification.cell.name", weight="100")*/
/*  #}*/
/* <div class="description">{{ this.entity.getDescription() }}</div>*/
/* */
