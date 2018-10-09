<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/completed.download.twig */
class __TwigTemplate_6804eba4d3f718eaa36ac0f0f63ffcea1f062dfe42a3529f87103984a412373b extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"files std\">
  <h3>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxTitle", array(), "method"), "html", null, true);
        echo "</h3>
  ";
        // line 10
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCompletedSection", array(), "method")) {
            // line 11
            echo "    <div class=\"delete-all\">
      ";
            // line 12
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPopupContext", array(), "method")) {
                // line 13
                echo "        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "export", "deleteFiles")), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i> <span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete all files")), "html", null, true);
                echo "</span></a>
      ";
            }
            // line 15
            echo "    </div>
  ";
        }
        // line 17
        echo "  <ul>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDownloadFiles", array(), "method"));
        foreach ($context['_seq'] as $context["path"] => $context["file"]) {
            // line 19
            echo "      <li class=\"file\">
        <i class=\"icon-file-alt\"></i>
        <a href=\"";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "export", "download", array("path" => $context["path"]))), "html", null, true);
            echo "\" ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPopupContext", array(), "method")) {
                echo "data-autodownload=\"true\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "getFilename", array(), "method"), "html", null, true);
            echo "</a>
        <span class=\"size\">";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSize", array(0 => $this->getAttribute($context["file"], "getSize", array(), "method")), "method"), "html", null, true);
            echo "</span>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['path'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPopupContext", array(), "method")) {
            // line 26
            echo "      <li class=\"sum\">
        ";
            // line 27
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBracketVisible", array(), "method")) {
                // line 28
                echo "          <div class=\"bracket\"></div>
        ";
            }
            // line 30
            echo "        <div class=\"icon\"></div>
  
        <div class=\"pack\">
          <h4>";
            // line 33
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Download all files in a single archive")), "html", null, true);
            echo "</h4>
          <p>(";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X, including images and file attachments", array("size" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSize", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPackedSize", array(), "method")), "method")))), "html", null, true);
            echo ")</p>
          <ul>
            ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllowedPackTypes", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 37
                echo "              <li>
                ";
                // line 38
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "export", "pack", array("type" => $context["type"]))), "label" => $context["type"]))), "html", null, true);
                echo "
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "          </ul>
        </div>
  
      </li>
    ";
        }
        // line 46
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/completed.download.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  118 => 41,  109 => 38,  106 => 37,  102 => 36,  97 => 34,  93 => 33,  88 => 30,  84 => 28,  82 => 27,  79 => 26,  76 => 25,  67 => 22,  57 => 21,  53 => 19,  49 => 18,  46 => 17,  42 => 15,  34 => 13,  32 => 12,  29 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Export completed section : files*/
/*  #*/
/*  # @ListChild (list="export.completed.content", weight="100")*/
/*  # @ListChild (list="export.popup.completed.content", weight="100")*/
/*  #}*/
/* */
/* <div class="files std">*/
/*   <h3>{{ this.getBoxTitle() }}</h3>*/
/*   {% if not this.isCompletedSection() %}*/
/*     <div class="delete-all">*/
/*       {% if not this.isPopupContext() %}*/
/*         <a href="{{ url('export', 'deleteFiles') }}"><i class="icon-trash"></i> <span>{{ t('Delete all files') }}</span></a>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/*   <ul>*/
/*     {% for path, file in this.getDownloadFiles() %}*/
/*       <li class="file">*/
/*         <i class="icon-file-alt"></i>*/
/*         <a href="{{ url('export', 'download', {'path': path}) }}" {% if this.isPopupContext() %}data-autodownload="true"{% endif %}>{{ file.getFilename() }}</a>*/
/*         <span class="size">{{ this.formatSize(file.getSize()) }}</span>*/
/*       </li>*/
/*     {% endfor %}*/
/*     {% if not this.isPopupContext() %}*/
/*       <li class="sum">*/
/*         {% if this.isBracketVisible() %}*/
/*           <div class="bracket"></div>*/
/*         {% endif %}*/
/*         <div class="icon"></div>*/
/*   */
/*         <div class="pack">*/
/*           <h4>{{ t('Download all files in a single archive') }}</h4>*/
/*           <p>({{ t('X, including images and file attachments', {'size': this.formatSize(this.getPackedSize())}) }})</p>*/
/*           <ul>*/
/*             {% for type in this.getAllowedPackTypes() %}*/
/*               <li>*/
/*                 {{ widget('XLite\\View\\Button\\Link', location=url('export', 'pack', {'type': type}), label=type) }}*/
/*               </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*   */
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* </div>*/
/* */
