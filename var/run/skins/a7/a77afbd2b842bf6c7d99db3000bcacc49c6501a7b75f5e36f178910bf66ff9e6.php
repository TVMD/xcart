<?php

/* /var/www/next/output/xcart/src/skins/admin/email_settings/queues_note.twig */
class __TwigTemplate_c868782215e47db239a7f06bba7970e44248a95c9dce5a834b88f29642f03a8f extends \XLite\Core\Templating\Twig\Template
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
        if ((($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "field", array()), "name", array()) == "smtp_section") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isQueuesNoteVisible", array(), "method"))) {
            // line 8
            echo "    <p class=\"smpt-help-block help-block not-padded\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("To send email asynchronously and improve website performance we recommend to set up queues in on your server. [Learn how to do it].", array("url" => "https://kb.x-cart.com/en/general_setup/configuring_queues.html")));
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/email_settings/queues_note.twig";
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
/*  # Banner promo block*/
/*  #*/
/*  # @ListChild (list="crud.settings.field", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {% if this.field.name == 'smtp_section' and this.isQueuesNoteVisible() %}*/
/*     <p class="smpt-help-block help-block not-padded">{{ t('To send email asynchronously and improve website performance we recommend to set up queues in on your server. [Learn how to do it].', {'url': 'https://kb.x-cart.com/en/general_setup/configuring_queues.html'})|raw }}</p>*/
/* {% endif %}*/
