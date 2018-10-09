<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/files_table.twig */
class __TwigTemplate_87808ff370b9c4ef5f4d3fcfa86b23d5b93e2d329cd54fe8a8b503525faf078e extends \XLite\Core\Templating\Twig\Template
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
<div>
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "customerAttachments", array())) {
            // line 9
            echo "      <ul class=\"customer-attachments\">
          ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getCustomerAttachments", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 11
                echo "            <li class=\"attachment\">
                ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentItem", "attachment" => $context["attachment"], "itemId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemId", array(), "method")))), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/files_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  44 => 15,  35 => 12,  32 => 11,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Customer attachments items list*/
/*  #*/
/*  # @ListChild (list="customer.attachments.popup", weight="50")*/
/*  #}*/
/* */
/* <div>*/
/*     {% if this.item.customerAttachments %}*/
/*       <ul class="customer-attachments">*/
/*           {% for attachment in this.item.getCustomerAttachments() %}*/
/*             <li class="attachment">*/
/*                 {{ widget('\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentItem', attachment=attachment, itemId=this.item.getItemId()) }}*/
/*             </li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/* </div>*/
/* */
