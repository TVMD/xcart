<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.merchant.twig */
class __TwigTemplate_1dce901d34ec8d272b7bd7b8eb1f0f8b6c15d4a4432f0f1a94265198cb0d5fa1 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"merchant-data\">
  <div class=\"merchant-data-block merchant-address\">
    <h3>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_name", array()), "html", null, true);
        echo "</h3>
    <p>
      ";
        // line 11
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_address", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_address", array()), "html", null, true);
            echo "<br />";
        }
        // line 12
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_city", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_city", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "locationState", array()), "state", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "locationState", array()), "state", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_zipcode", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "location_zipcode", array()), "html", null, true);
        }
        echo "<br />
      ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "locationCountry", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "locationCountry", array()), "getCountry", array(), "method"), "html", null, true);
        }
        // line 14
        echo "    </p>
    ";
        // line 15
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_phone", array()) || $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_fax", array()))) {
            // line 16
            echo "      <p>
        ";
            // line 17
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_phone", array())) {
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Phone")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_phone", array()), "html", null, true);
                echo "<br />";
            }
            // line 18
            echo "        ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_fax", array())) {
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Fax")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_fax", array()), "html", null, true);
            }
            // line 19
            echo "      </p>
    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_website", array())) {
            // line 22
            echo "      <p class=\"url\">
        <a href=\"";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_website", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_website", array()), "html", null, true);
            echo "</a>
      </p>
    ";
        }
        // line 26
        echo "  </div>
</td>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.merchant.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  85 => 23,  82 => 22,  79 => 21,  75 => 19,  68 => 18,  61 => 17,  58 => 16,  56 => 15,  53 => 14,  49 => 13,  34 => 12,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="packing_slip.addresses", weight="20")*/
/*  #}*/
/* */
/* <td class="merchant-data">*/
/*   <div class="merchant-data-block merchant-address">*/
/*     <h3>{{ this.config.Company.company_name }}</h3>*/
/*     <p>*/
/*       {% if this.config.Company.location_address %}{{ this.config.Company.location_address }}<br />{% endif %}*/
/*       {% if this.config.Company.location_city %}{{ this.config.Company.location_city }}, {% endif %}{% if this.config.Company.locationState.state %}{{ this.config.Company.locationState.state }}, {% endif %}{% if this.config.Company.location_zipcode %}{{ this.config.Company.location_zipcode }}{% endif %}<br />*/
/*       {% if this.config.Company.locationCountry %}{{ this.config.Company.locationCountry.getCountry() }}{% endif %}*/
/*     </p>*/
/*     {% if this.config.Company.company_phone or this.config.Company.company_fax %}*/
/*       <p>*/
/*         {% if this.config.Company.company_phone %}{{ t('Phone') }}: {{ this.config.Company.company_phone }}<br />{% endif %}*/
/*         {% if this.config.Company.company_fax %}{{ t('Fax') }}: {{ this.config.Company.company_fax }}{% endif %}*/
/*       </p>*/
/*     {% endif %}*/
/*     {% if this.config.Company.company_website %}*/
/*       <p class="url">*/
/*         <a href="{{ this.config.Company.company_website }}">{{ this.config.Company.company_website }}</a>*/
/*       </p>*/
/*     {% endif %}*/
/*   </div>*/
/* </td>*/
/* */
/* */
