<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/add_files.twig */
class __TwigTemplate_9862b11d9806b0327d24b32a60ef1dcbba7ee5515cb815769b75b5168d9cc0c6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllowedQuantity", array(), "method")) {
            // line 8
            echo "  <div>
      <form action=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "customer_attachments", "upload")), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" class=\"attachment-form no-popup-ajax-submit\" method=\"post\">
          <p>
              <input type=\"file\" multiple name=\"customer_attachments[]\" accept=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAcceptExtensionsString", array(), "method"), "html", null, true);
            echo "\">
              <input type=\"hidden\" name=\"item_id\" value=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "itemId", array()), "html", null, true);
            echo "\">
          </p>
          <div>
              ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentDescription", "orderItem" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItem", array(), "method")))), "html", null, true);
            echo "
              ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upload file"))))), "html", null, true);
            echo "
         </div>
      </form>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/add_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 16,  42 => 15,  36 => 12,  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Customer attachmetns add file button*/
/*  #*/
/*  # @ListChild (list="customer.attachments.popup", weight="100")*/
/*  #}*/
/* */
/* {% if this.getAllowedQuantity() %}*/
/*   <div>*/
/*       <form action="{{ url('customer_attachments', 'upload') }}" enctype="multipart/form-data" class="attachment-form no-popup-ajax-submit" method="post">*/
/*           <p>*/
/*               <input type="file" multiple name="customer_attachments[]" accept="{{ this.getAcceptExtensionsString() }}">*/
/*               <input type="hidden" name="item_id" value="{{ this.item.itemId }}">*/
/*           </p>*/
/*           <div>*/
/*               {{ widget('\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentDescription', orderItem=this.getItem()) }}*/
/*               {{ widget('\\XLite\\View\\Button\\Submit', label=t('Upload file')) }}*/
/*          </div>*/
/*       </form>*/
/*   </div>*/
/* {% endif %}*/
