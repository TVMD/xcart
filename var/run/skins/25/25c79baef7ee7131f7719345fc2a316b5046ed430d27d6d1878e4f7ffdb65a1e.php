<?php

/* /var/www/next/output/xcart/src/skins/admin/banner_rotation/parts/images.twig */
class __TwigTemplate_cd8f8f89bc0c1e8294896a8d70c6f817af32b9419650307b47725a1c8be5024a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"banner-images\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\BannerRotationImages"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/banner_rotation/parts/images.twig";
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
/*  # Banner images list & upload*/
/*  #*/
/*  # @ListChild (list="crud.bannerrotation.formFooter", zone="admin", weight="200")*/
/*  #}*/
/* */
/* <div class="banner-images">*/
/*     {{ widget('\\XLite\\View\\ItemsList\\BannerRotationImages') }}*/
/* </div>*/
/* */
