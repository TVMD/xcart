<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/CDev/PINCodes/invoice_item_pin_codes.twig */
class __TwigTemplate_00e98344b61e22d704a1a7d6d4f93f530cc031f81f181c1f80b5d26579596b9a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isCustomerInterface", array(), "method")) {
            // line 8
            echo "  ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSoldPinCodes", array(), "method")) {
                // line 9
                echo "  <li class=\"pin-codes separated\">
    ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("PIN")), "html", null, true);
                echo ":<br />
    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSoldPinCodes", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["pin"]) {
                    // line 12
                    echo "      <div class=\"code\">
        ";
                    // line 13
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["pin"], "code", array()), "html", null, true);
                    echo "
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "  </li>
  ";
            }
        } else {
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "countPinCodes", array(), "method")) {
                // line 20
                echo "  <li class=\"pin-codes separated\">
    ";
                // line 21
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("PIN")), "html", null, true);
                echo ":<br />
    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getPinCodes", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["pin"]) {
                    // line 23
                    echo "      <div class=\"code\">
        ";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["pin"], "code", array()), "html", null, true);
                    echo "
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "  </li>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/CDev/PINCodes/invoice_item_pin_codes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  72 => 24,  69 => 23,  65 => 22,  61 => 21,  58 => 20,  55 => 19,  50 => 16,  41 => 13,  38 => 12,  34 => 11,  30 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Pincodes item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item.name", weight="10")*/
/*  #}*/
/* */
/* {% if this.item.isCustomerInterface() %}*/
/*   {% if this.item.getSoldPinCodes() %}*/
/*   <li class="pin-codes separated">*/
/*     {{ t('PIN') }}:<br />*/
/*     {% for pin in this.item.getSoldPinCodes() %}*/
/*       <div class="code">*/
/*         {{ pin.code }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </li>*/
/*   {% endif %}*/
/* {% else %}*/
/*   {% if this.item.countPinCodes() %}*/
/*   <li class="pin-codes separated">*/
/*     {{ t('PIN') }}:<br />*/
/*     {% for pin in this.item.getPinCodes() %}*/
/*       <div class="code">*/
/*         {{ pin.code }}*/
/*       </div>*/
/*     {% endfor %}*/
/*   </li>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
