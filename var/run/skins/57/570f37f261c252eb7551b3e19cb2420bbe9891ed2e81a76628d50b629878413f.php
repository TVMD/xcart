<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/icon.twig */
class __TwigTemplate_282e4c65c08ab60ecaf153e00c3b4a5ded83b13f00cbc0f74d6b58095bc2f3cc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 8
            echo "  <td class=\"module-status status-incompatible\">
    <div class=\"incompatible-status-container\">
      <span class=\"incompatible-status\" title=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIncompatibleStatusMessage", array(), "method"), "html", null, true);
            echo "\" data-toggle=\"tooltip\">
        <svg id=\"Layer_1\" style=\"enable-background:new 0 0 512 512;\" version=\"1.1\" viewBox=\"0 0 512 512\" xml:space=\"preserve\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">><path class=\"st0\" d=\"M284.3,245.1l110.9-110.9c7.8-7.8,7.8-20.5,0-28.3s-20.5-7.8-28.3,0L256,216.8L145.1,105.9  c-7.8-7.8-20.5-7.8-28.3,0s-7.8,20.5,0,28.3l110.9,110.9L116.9,355.9c-7.8,7.8-7.8,20.5,0,28.3c3.9,3.9,9,5.9,14.1,5.9  c5.1,0,10.2-2,14.1-5.9L256,273.3l110.9,110.9c3.9,3.9,9,5.9,14.1,5.9s10.2-2,14.1-5.9c7.8-7.8,7.8-20.5,0-28.3L284.3,245.1z\"/></svg>
      </span>
    </div>
  </td>
";
        }
        // line 16
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 17
            echo "  <td class=\"module-status\">
    ";
            // line 18
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleExtendedWarranty", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                // line 19
                echo "      <div class=\"extended-warranty-container\">
        <span class=\"extended-warranty\" title=\"";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExtendedWarrantyMessage", array(), "method"), "html", null, true);
                echo "\" data-toggle=\"tooltip\">
          <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
               width=\"31.3px\" height=\"23.3px\" viewBox=\"-53 604.8 31.3 23.3\" enable-background=\"new -53 604.8 31.3 23.3\"
               xml:space=\"preserve\">
            <g transform=\"translate(0.000000,392.000000) scale(0.100000,-0.100000)\">
              <path d=\"M-259-2129.9c-1-0.5-35.9-34.9-77.5-76.5c-41.5-41.6-75.8-75.7-76.1-75.7c-0.3,0-16.7,16.3-36.5,36.3
        c-21.1,21.3-36.9,36.7-38.3,37.5c-2.9,1.4-6.7,1.5-9.8,0.2c-2.9-1.2-29.1-27-30.8-30.4c-1.4-2.8-1.6-7.2-0.2-10.2
        c1.1-2.7,106-108.5,109.8-110.8c3-1.8,7.8-2,10.7-0.4c2.7,1.4,188.8,187.9,189.6,189.9c0.9,2.6,0.7,7.1-0.3,9.4
        c-1.2,2.6-28.9,30.1-31.1,30.9C-251.9-2128.8-256.8-2128.9-259-2129.9z\"></path>
            </g>
          </svg>
        </span>
      </div>
    ";
            }
            // line 34
            echo "  </td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  47 => 20,  44 => 19,  42 => 18,  39 => 17,  37 => 16,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module status icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections.table.columns", weight="200")*/
/*  #}*/
/* */
/* {% if this.isModuleToDisable(this.entry) %}*/
/*   <td class="module-status status-incompatible">*/
/*     <div class="incompatible-status-container">*/
/*       <span class="incompatible-status" title="{{ this.getIncompatibleStatusMessage() }}" data-toggle="tooltip">*/
/*         <svg id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">><path class="st0" d="M284.3,245.1l110.9-110.9c7.8-7.8,7.8-20.5,0-28.3s-20.5-7.8-28.3,0L256,216.8L145.1,105.9  c-7.8-7.8-20.5-7.8-28.3,0s-7.8,20.5,0,28.3l110.9,110.9L116.9,355.9c-7.8,7.8-7.8,20.5,0,28.3c3.9,3.9,9,5.9,14.1,5.9  c5.1,0,10.2-2,14.1-5.9L256,273.3l110.9,110.9c3.9,3.9,9,5.9,14.1,5.9s10.2-2,14.1-5.9c7.8-7.8,7.8-20.5,0-28.3L284.3,245.1z"/></svg>*/
/*       </span>*/
/*     </div>*/
/*   </td>*/
/* {% endif %}*/
/* {% if not this.isModuleToDisable(this.entry) %}*/
/*   <td class="module-status">*/
/*     {% if this.isModuleExtendedWarranty(this.entry) %}*/
/*       <div class="extended-warranty-container">*/
/*         <span class="extended-warranty" title="{{ this.getExtendedWarrantyMessage() }}" data-toggle="tooltip">*/
/*           <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"*/
/*                width="31.3px" height="23.3px" viewBox="-53 604.8 31.3 23.3" enable-background="new -53 604.8 31.3 23.3"*/
/*                xml:space="preserve">*/
/*             <g transform="translate(0.000000,392.000000) scale(0.100000,-0.100000)">*/
/*               <path d="M-259-2129.9c-1-0.5-35.9-34.9-77.5-76.5c-41.5-41.6-75.8-75.7-76.1-75.7c-0.3,0-16.7,16.3-36.5,36.3*/
/*         c-21.1,21.3-36.9,36.7-38.3,37.5c-2.9,1.4-6.7,1.5-9.8,0.2c-2.9-1.2-29.1-27-30.8-30.4c-1.4-2.8-1.6-7.2-0.2-10.2*/
/*         c1.1-2.7,106-108.5,109.8-110.8c3-1.8,7.8-2,10.7-0.4c2.7,1.4,188.8,187.9,189.6,189.9c0.9,2.6,0.7,7.1-0.3,9.4*/
/*         c-1.2,2.6-28.9,30.1-31.1,30.9C-251.9-2128.8-256.8-2128.9-259-2129.9z"></path>*/
/*             </g>*/
/*           </svg>*/
/*         </span>*/
/*       </div>*/
/*     {% endif %}*/
/*   </td>*/
/* {% endif %}*/
