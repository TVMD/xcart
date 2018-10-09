<?php

/* /var/www/next/output/xcart/src/skins/admin/notifications/list.twig */
class __TwigTemplate_8b0d073c1ac02f03c8add5876be143c11e5cf380e8b0635c398743b4c71b21bf extends \XLite\Core\Templating\Twig\Template
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
<div class=\"alert alert-info\" role=\"alert\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This page allows you to adjust the types of email notifications your store sends to users")), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/notifications/list.twig";
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
/*  # Notifications list table template*/
/*  #*/
/*  # @ListChild (list="itemsList.notification.header", weight="100")*/
/*  #}*/
/* */
/* <div class="alert alert-info" role="alert">*/
/*   {{ t('This page allows you to adjust the types of email notifications your store sends to users') }}*/
/* </div>*/
/* */
