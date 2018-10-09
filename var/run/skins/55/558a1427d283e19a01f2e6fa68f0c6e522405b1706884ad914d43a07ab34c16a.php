<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/XC/CustomerAttachments/order/invoice/parts/items/item.attachments.twig */
class __TwigTemplate_152040f4137d4ec3ae39f46df8f6259070c4499384aa16bd03855686408e3ab2 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "customerAttachments", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "customerAttachments", array()), "isEmpty", array(), "method"))) {
            // line 8
            echo "  <li class=\"separated\">
      <ul class=\"file-attachments\">
          <li>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Attached files:")), "html", null, true);
            echo "</li>
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "customerAttachments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 12
                echo "            <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["attachment"], "fileName", array()), "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "      </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/XC/CustomerAttachments/order/invoice/parts/items/item.attachments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  36 => 12,  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Attached files list*/
/*  #*/
/*  # @ListChild (list="invoice.item.name", weight="100")*/
/*  #}*/
/* */
/* {% if this.item.customerAttachments and not this.item.customerAttachments.isEmpty() %}*/
/*   <li class="separated">*/
/*       <ul class="file-attachments">*/
/*           <li>{{ t('Attached files:') }}</li>*/
/*           {% for attachment in this.item.customerAttachments %}*/
/*             <li>{{ attachment.fileName }}</li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*   </li>*/
/* {% endif %}*/
