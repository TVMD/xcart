<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/completed.downloadLarge.twig */
class __TwigTemplate_80bf74362ad2196849c9f69bf60db1192f338d09a04d0ff2cbd2469c87edbe90 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDownloadLargeFiles", array(), "method")) {
            // line 8
            echo "  <div class=\"files large\">
    <p>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following files are too large to be included in the archive")), "html", null, true);
            echo ":</p>
    <ul>
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDownloadLargeFiles", array(), "method"));
            foreach ($context['_seq'] as $context["path"] => $context["file"]) {
                // line 12
                echo "        <li class=\"file\">
          <i class=\"icon-file-alt\"></i>
          <a href=\"";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "export", "download", array("path" => $context["path"]))), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "getFilename", array(), "method"), "html", null, true);
                echo "</a>
          <span class=\"size\">";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSize", array(0 => $this->getAttribute($context["file"], "getSize", array(), "method")), "method"), "html", null, true);
                echo "</span>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/completed.downloadLarge.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  46 => 15,  40 => 14,  36 => 12,  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Export completed section : large*/
/*  #*/
/*  # @ListChild (list="export.completed.content", weight="200")*/
/*  #}*/
/* */
/* {% if this.getDownloadLargeFiles() %}*/
/*   <div class="files large">*/
/*     <p>{{ t('The following files are too large to be included in the archive') }}:</p>*/
/*     <ul>*/
/*       {% for path, file in this.getDownloadLargeFiles() %}*/
/*         <li class="file">*/
/*           <i class="icon-file-alt"></i>*/
/*           <a href="{{ url('export', 'download', {'path': path}) }}">{{ file.getFilename() }}</a>*/
/*           <span class="size">{{ this.formatSize(file.getSize()) }}</span>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
