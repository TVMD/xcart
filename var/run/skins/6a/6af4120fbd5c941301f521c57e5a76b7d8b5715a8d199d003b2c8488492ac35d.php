<?php

/* /var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.upload.twig */
class __TwigTemplate_7488ad65f664dc13fc24f1ecf8f727406252ca6c5a5ae80c4693d0b9084d93c2 extends \XLite\Core\Templating\Twig\Template
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
<li role=\"presentation\" class=\"dropdown-header\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload")), "html", null, true);
        echo "</li>
<li role=\"presentation\">
  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"from-computer\" @click.prevent=\"uploadFromComputer\">
    <i class=\"button-icon fa fa-sign-out fa-rotate-270\"></i>
    <span>";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("From computer")), "html", null, true);
        echo "</span>
  </a>
  <input type=\"file\" name=\"uploaded-file\"";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasMultipleSelector", array(), "method")) {
            echo " multiple=\"multiple\"";
        }
        echo " @change=\"doUploadFromFile\" />
</li>
";
        // line 15
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViaUrlAllowed", array(), "method")) {
            // line 16
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"via-url\" @click.prevent=\"uploadViaUrl\">
      <i class=\"button-icon fa fa-link\"></i>
      <span>";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Via URL")), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
        // line 23
        echo "<div class=\"via-url-popup\" data-title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload via URL")), "html", null, true);
        echo "\" data-multiple=\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasMultipleSelector", array(), "method")) {
            echo "1";
        }
        echo "\">
";
        // line 24
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasMultipleSelector", array(), "method")) {
            echo "  
  <textarea name=\"url\" class=\"form-control urls\" placeholder=\"http://example.com/file1.jpg                                                                     http://example.com/file2.jpg\" /></textarea>
";
        } else {
            // line 27
            echo "  <input type=\"text\" name=\"url\" class=\"form-control url\" value=\"\" placeholder=\"http://example.com/file.jpg\" />
";
        }
        // line 29
        echo "  <div class=\"checkbox\">
    <label><input type=\"checkbox\" name=\"copy-to-file\" value=\"1\" class=\"copy-to-file\" checked=\"checked\"/>";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Copy to file system")), "html", null, true);
        echo "</label>
    <div class=\"not-copy-to-file-warning alert alert-warning hidden\">";
        // line 31
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning! The image cannot be resized to reduce capacity for better site performance.")), "html", null, true);
        echo "</div>
  </div>
  <button type=\"button\" class=\"btn btn-default\" @click.prevent=\"doUploadViaUrl\">";
        // line 33
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload")), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/file_uploader/parts/menu.upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 33,  81 => 31,  77 => 30,  74 => 29,  70 => 27,  64 => 24,  55 => 23,  48 => 19,  43 => 16,  41 => 15,  34 => 13,  29 => 11,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # File uploader menu*/
/*  #*/
/*  # @ListChild (list="file-uploader.menu", weight="30")*/
/*  #}*/
/* */
/* <li role="presentation" class="dropdown-header">{{ t('Upload') }}</li>*/
/* <li role="presentation">*/
/*   <a role="menuitem" tabindex="-1" href="#" class="from-computer" @click.prevent="uploadFromComputer">*/
/*     <i class="button-icon fa fa-sign-out fa-rotate-270"></i>*/
/*     <span>{{ t('From computer') }}</span>*/
/*   </a>*/
/*   <input type="file" name="uploaded-file"{% if this.hasMultipleSelector() %} multiple="multiple"{% endif %} @change="doUploadFromFile" />*/
/* </li>*/
/* {% if this.isViaUrlAllowed() %}*/
/*   <li role="presentation">*/
/*     <a role="menuitem" tabindex="-1" href="#" class="via-url" @click.prevent="uploadViaUrl">*/
/*       <i class="button-icon fa fa-link"></i>*/
/*       <span>{{ t('Via URL') }}</span>*/
/*     </a>*/
/*   </li>*/
/* {% endif %}*/
/* <div class="via-url-popup" data-title="{{ t('Upload via URL') }}" data-multiple="{% if this.hasMultipleSelector() %}1{% endif %}">*/
/* {% if this.hasMultipleSelector() %}  */
/*   <textarea name="url" class="form-control urls" placeholder="http://example.com/file1.jpg                                                                     http://example.com/file2.jpg" /></textarea>*/
/* {% else %}*/
/*   <input type="text" name="url" class="form-control url" value="" placeholder="http://example.com/file.jpg" />*/
/* {% endif %}*/
/*   <div class="checkbox">*/
/*     <label><input type="checkbox" name="copy-to-file" value="1" class="copy-to-file" checked="checked"/>{{ t('Copy to file system') }}</label>*/
/*     <div class="not-copy-to-file-warning alert alert-warning hidden">{{ t('Warning! The image cannot be resized to reduce capacity for better site performance.') }}</div>*/
/*   </div>*/
/*   <button type="button" class="btn btn-default" @click.prevent="doUploadViaUrl">{{ t('Upload') }}</button>*/
/* </div>*/
/* */
