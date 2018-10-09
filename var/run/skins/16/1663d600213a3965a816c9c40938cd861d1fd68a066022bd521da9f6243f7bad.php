<?php

/* /var/www/next/output/xcart/src/skins/admin/settings/contacts/anchor.twig */
class __TwigTemplate_b4cdbc77ba1fca252425ddb1aaac748d1d52c8d1488b0f1fc2f080d42e7b07bd extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "field", array()), "name", array()) == "site_administrator")) {
            // line 8
            echo "  <a id=\"contacts\"></a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/settings/contacts/anchor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Contacts anchor*/
/*  #*/
/*  # @ListChild (list="crud.settings.field", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {% if this.field.name == 'site_administrator' %}*/
/*   <a id="contacts"></a>*/
/* {% endif %}*/
