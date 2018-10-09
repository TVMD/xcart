<?php

/* /var/www/next/output/xcart/src/skins/admin/header/parts/preloaded_labels.twig */
class __TwigTemplate_9a79fce5f6e88328f79c87326f2f9b344b462c01db77052c93b12c904de5ce8b extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
  window.xlite_preloaded_labels =";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPreloadedLabelsJSON", array(), "method");
        echo ";
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/header/parts/preloaded_labels.twig";
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
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1500")*/
/*  #}*/
/* */
/* <script type="text/javascript">*/
/*   window.xlite_preloaded_labels ={{ this.getPreloadedLabelsJSON()|raw }};*/
/* </script>*/
/* */
