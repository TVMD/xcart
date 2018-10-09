<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Moneybookers/register.twig */
class __TwigTemplate_b1828b88e44bdc8b8b926e5f284096e95f5863826443b4f1718f8836e23fc2a8 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "CDev", array()), "Moneybookers", array()), "email", array())) {
            // line 7
            echo "  <p class=\"mb-register-note\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("To process your customers' payments with Skrill, you need a Skrill account. If you do not have one yet, you can sign up for free at http://www.skrill.com"));
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Moneybookers/register.twig";
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
/*  # Skripp register note*/
/*  #*/
/*  # @ListChild (list="payment.methods.body", zone="admin", weight="150")*/
/*  #}*/
/* {% if not this.config.CDev.Moneybookers.email %}*/
/*   <p class="mb-register-note">{{ t('To process your customers\' payments with Skrill, you need a Skrill account. If you do not have one yet, you can sign up for free at http://www.skrill.com')|raw }}</p>*/
/* {% endif %}*/
/* */
