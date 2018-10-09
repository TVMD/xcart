<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/begin.files.orders_note.twig */
class __TwigTemplate_6b862be214c0e069cd9fcb1e8e70d1b9031c688aff5496a2f1e1b9d2c4d88a91 extends \XLite\Core\Templating\Twig\Template
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
<p>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Import of orders is not supported.")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/begin.files.orders_note.twig";
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
/*  # Import begin orders note*/
/*  #*/
/*  # @ListChild (list="import.begin.content.files", weight="100")*/
/*  #}*/
/* */
/* <p>{{ t('Import of orders is not supported.') }}</p>*/
/* */
