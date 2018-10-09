<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/author_email.twig */
class __TwigTemplate_2232842acb48db4c34a2abe33e3aee911e9e1394346c2760bcc625ac8c499acb extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAuthorEmail", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"author-email\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAuthorEmail", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/author_email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="21")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="21")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="21")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="21")*/
/*  #}*/
/* {% if this.getAuthorEmail(this.module) %}*/
/*   <div class="author-email"><a href="{{ this.getAuthorEmail(this.module) }}"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></div>*/
/* {% endif%}*/
/* */
