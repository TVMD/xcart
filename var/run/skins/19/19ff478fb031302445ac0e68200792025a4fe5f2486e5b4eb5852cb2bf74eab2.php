<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order_tracking_information/parts/tracking_info.twig */
class __TwigTemplate_6ce4470f72ae1943332f4af128e0a764687499e54e18ff878bf17db7f6df6387 extends \XLite\Core\Templating\Twig\Template
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
<p style=\"font-weight: bold;\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tracking numbers")), "html", null, true);
        echo ":</p>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "trackingNumbers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 10
            echo "<div>
";
            // line 11
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method")) {
                // line 12
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isTrackingInformationForm", array(0 => $this->getAttribute($context["number"], "value", array())), "method")) {
                    // line 13
                    echo "<form method=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationMethod", array(0 => $this->getAttribute($context["number"], "value", array())), "method");
                    echo "\" action=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method"), "html", null, true);
                    echo "\" target=\"_blank\" >
";
                    // line 14
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationParams", array(0 => $this->getAttribute($context["number"], "value", array())), "method"));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        // line 15
                        echo "<input type=\"hidden\" name=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" value=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" />
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "<span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                    echo " - </span>
<button type=\"submit\">";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Track package")), "html", null, true);
                    echo "</button>
</form>
";
                } else {
                    // line 21
                    echo "<span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                    echo " - </span>
<a href=\"";
                    // line 22
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Track package")), "html", null, true);
                    echo "</a>
";
                }
            } else {
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                echo "
";
            }
            // line 27
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order_tracking_information/parts/tracking_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  84 => 25,  76 => 22,  71 => 21,  65 => 18,  60 => 17,  49 => 15,  45 => 14,  38 => 13,  36 => 12,  34 => 11,  31 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="tracking.info", weight="10")*/
/*  #}*/
/* */
/* <p style="font-weight: bold;">{{ t('Tracking numbers') }}:</p>*/
/* */
/* {% for number in this.trackingNumbers %}*/
/* <div>*/
/* {% if this.order.getTrackingInformationURL(number.value) %}*/
/* {% if this.order.isTrackingInformationForm(number.value) %}*/
/* <form method="{{ this.order.getTrackingInformationMethod(number.value)|raw }}" action="{{ this.order.getTrackingInformationURL(number.value) }}" target="_blank" >*/
/* {% for name, value in this.order.getTrackingInformationParams(number.value) %}*/
/* <input type="hidden" name="{{ name }}" value="{{ value }}" />*/
/* {% endfor %}*/
/* <span>{{ number.value }} - </span>*/
/* <button type="submit">{{ t('Track package') }}</button>*/
/* </form>*/
/* {% else %}*/
/* <span>{{ number.value }} - </span>*/
/* <a href="{{ this.order.getTrackingInformationURL(number.value) }}" target="_blank">{{ t('Track package') }}</a>*/
/* {% endif %}*/
/* {% else %}*/
/* {{ number.value }}*/
/* {% endif %}*/
/* </div>*/
/* {% endfor %}*/
/* */
