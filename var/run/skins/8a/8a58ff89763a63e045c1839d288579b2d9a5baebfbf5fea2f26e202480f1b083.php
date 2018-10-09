<?php

/* form_field/form_field.twig */
class __TwigTemplate_40c753bd1ad4c7c5502f2446a679c7aec5dfe973e7924f8f6de4b624b954b35c extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "fieldOnly"), "method")) {
            // line 6
            echo "  <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelContainerClass", array(), "method"), "html", null, true);
            echo "\">
    <label for=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormattedLabel", array(), "method");
            echo "\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormattedLabel", array(), "method"), "html", null, true);
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "useColon"), "method")) {
                echo ":";
            }
            // line 9
            echo "      ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasLabelHelp", array(), "method")) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "labelHelp"), "method"))), "helpWidget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "labelHelpWidget"), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
                echo "
      ";
            }
            // line 12
            echo "    </label>
  </div>
  ";
            // line 14
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "required"), "method")) {
                // line 15
                echo "    <div class=\"star\">*</div>
  ";
            }
            // line 17
            echo "  ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "required"), "method")) {
                // line 18
                echo "    <div class=\"star\">&nbsp;</div>
  ";
            }
        }
        // line 21
        echo "
<div class=\"";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValueContainerClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 23
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "editOnClick"), "method")) {
            // line 24
            echo "    <div ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributes", array(), "method")), "method");
            echo ">
      <div ";
            // line 25
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewContainerAttributes", array(), "method")), "method");
            echo ">";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewTemplate", array(), "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewTemplate", array(), "method"), "form_field/form_field.twig", 25)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            echo "</div>
      <div ";
            // line 26
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldContainerAttributes", array(), "method")), "method");
            echo ">
        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(            // line 27
(isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method")), "form_field/form_field.twig", 27)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 28
            echo "      </div>
    </div>
  ";
        } else {
            // line 31
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method")), "form_field/form_field.twig", 31)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 32
            echo "  ";
        }
        // line 33
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "linkHref"), "method")) {
            // line 34
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "linkImg"), "method")) {
                // line 35
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "linkImg"), "method"), "html", null, true);
                echo "\" class=\"form-field-link-img\" alt=\"\" height=\"20\">
    ";
            }
            // line 37
            echo "    <a class=\"form-field-link ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
            echo "-link\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "linkHref"), "method"), "html", null, true);
            echo "\">
      ";
            // line 38
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "linkText"), "method")));
            echo "
    </a>
  ";
        }
        // line 41
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasHelp", array(), "method")) {
            // line 42
            echo "    <div class=\"help-wrapper\">
      ";
            // line 43
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "help"), "method"))), "helpWidget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "helpWidget"), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "comment"), "method")) {
            // line 47
            echo "    <div class=\"form-field-comment ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
            echo "-comment\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "comment"), "method")));
            echo "</div>
  ";
        }
        // line 49
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormFieldJSData", array(), "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormFieldJSData", array(), "method")), "method"), "html", null, true);
        }
        // line 50
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInlineJSCode", array(), "method")) {
            // line 51
            echo "    <script type=\"text/javascript\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInlineJSCode", array(), "method");
            echo "</script>
  ";
        }
        // line 53
        echo "</div>

";
        // line 55
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "fieldOnly"), "method")) {
            // line 56
            echo "  <div class=\"clear\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/form_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 56,  194 => 55,  190 => 53,  184 => 51,  181 => 50,  176 => 49,  168 => 47,  165 => 46,  159 => 43,  156 => 42,  153 => 41,  147 => 38,  140 => 37,  134 => 35,  131 => 34,  128 => 33,  125 => 32,  114 => 31,  109 => 28,  99 => 27,  95 => 26,  81 => 25,  76 => 24,  74 => 23,  70 => 22,  67 => 21,  62 => 18,  59 => 17,  55 => 15,  53 => 14,  49 => 12,  43 => 10,  40 => 9,  35 => 8,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Form field*/
/*  #}*/
/* */
/* {% if not this.getParam('fieldOnly') %}*/
/*   <div class="{{ this.getLabelContainerClass() }}">*/
/*     <label for="{{ this.getFieldId() }}" title="{{ this.getFormattedLabel()|raw }}">*/
/*       {{ this.getFormattedLabel() }}{% if this.getParam('useColon') %}:{% endif %}*/
/*       {% if this.hasLabelHelp() %}*/
/*         {{ widget('\\XLite\\View\\Tooltip', text=t(this.getParam('labelHelp')), helpWidget=this.getParam('labelHelpWidget'), isImageTag='true', className='help-icon') }}*/
/*       {% endif %}*/
/*     </label>*/
/*   </div>*/
/*   {% if this.getParam('required') %}*/
/*     <div class="star">*</div>*/
/*   {% endif %}*/
/*   {% if not this.getParam('required') %}*/
/*     <div class="star">&nbsp;</div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* <div class="{{ this.getValueContainerClass() }}">*/
/*   {% if this.getParam('editOnClick') %}*/
/*     <div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>*/
/*       <div {{ this.printTagAttributes(this.getViewContainerAttributes())|raw }}>{% include this.getViewTemplate() %}</div>*/
/*       <div {{ this.printTagAttributes(this.getFieldContainerAttributes())|raw }}>*/
/*         {% include this.getDir() ~ '/' ~ this.getFieldTemplate() %}*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     {% include this.getDir() ~ '/' ~ this.getFieldTemplate() %}*/
/*   {% endif %}*/
/*   {% if this.getParam('linkHref') %}*/
/*     {% if this.getParam('linkImg') %}*/
/*       <img src="{{ this.getParam('linkImg') }}" class="form-field-link-img" alt="" height="20">*/
/*     {% endif %}*/
/*     <a class="form-field-link {{ this.getFieldId() }}-link" href="{{ this.getParam('linkHref') }}">*/
/*       {{ t(this.getParam('linkText'))|raw }}*/
/*     </a>*/
/*   {% endif %}*/
/*   {% if this.hasHelp() %}*/
/*     <div class="help-wrapper">*/
/*       {{ widget('XLite\\View\\Tooltip', text=t(this.getParam('help')), helpWidget=this.getParam('helpWidget'), isImageTag='true', className='help-icon') }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if this.getParam('comment') %}*/
/*     <div class="form-field-comment {{ this.getFieldId() }}-comment">{{ t(this.getParam('comment'))|raw }}</div>*/
/*   {% endif %}*/
/*   {% if this.getFormFieldJSData() %}{{ this.displayCommentedData(this.getFormFieldJSData()) }}{% endif %}*/
/*   {% if this.getInlineJSCode() %}*/
/*     <script type="text/javascript">{{ this.getInlineJSCode()|raw }}</script>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* {% if not this.getParam('fieldOnly') %}*/
/*   <div class="clear"></div>*/
/* {% endif %}*/
/* */
