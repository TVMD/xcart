<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Egoods/encrypt_mark.twig */
class __TwigTemplate_77b33e5b2e1df9be675d60343c3afa33e788a5c0e59fb6f08d44b9acaaa6401a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "egoods", array())) {
            // line 7
            echo "  <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Private")), "html", null, true);
            echo "\" class=\"egood\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Egoods/encrypt_mark.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Browser server dialog : item : private mark*/
/*  #*/
/*  # @ListChild (list="browseServer.item", zone="admin", weight="200")*/
/*  #}*/
/* {% if this.entry.egoods %}*/
/*   <img src="{{ asset('images/spacer.gif') }}" alt="{{ t('Private') }}" class="egood" />*/
/* {% endif %}*/
/* */
