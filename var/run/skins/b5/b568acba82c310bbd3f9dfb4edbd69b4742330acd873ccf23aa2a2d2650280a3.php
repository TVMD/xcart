<?php

/* /var/www/next/output/xcart/src/skins/admin/jscontainer/parts/register_resources.twig */
class __TwigTemplate_148642fb322638739330acc8fcf1e845a76e40607e32266a8827c33363562995 extends \XLite\Core\Templating\Twig\Template
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
        echo "<script type=\"application/javascript\">
  (function () {
    var resources = ";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceRegistry", array(), "method");
        echo ";

    if (window.CoreAMD !== undefined) {
      require('js/core', function (core) {
        core.registerResources(resources);
        core.htmlResourcesLoadDeferred.resolve();
      });
    } else {
      document.addEventListener('amd-ready', function (event) {
        require('js/core', function (core) {
          core.registerResources(resources);
          core.htmlResourcesLoadDeferred.resolve();
        });
      });
    }
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/jscontainer/parts/register_resources.twig";
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
/*  # Cached JS part*/
/*  #*/
/*  # @ListChild (list="jscontainer.js", weight="50")*/
/*  #}*/
/* <script type="application/javascript">*/
/*   (function () {*/
/*     var resources = {{ this.getResourceRegistry()|raw }};*/
/* */
/*     if (window.CoreAMD !== undefined) {*/
/*       require('js/core', function (core) {*/
/*         core.registerResources(resources);*/
/*         core.htmlResourcesLoadDeferred.resolve();*/
/*       });*/
/*     } else {*/
/*       document.addEventListener('amd-ready', function (event) {*/
/*         require('js/core', function (core) {*/
/*           core.registerResources(resources);*/
/*           core.htmlResourcesLoadDeferred.resolve();*/
/*         });*/
/*       });*/
/*     }*/
/*   })();*/
/* </script>*/
/* */
