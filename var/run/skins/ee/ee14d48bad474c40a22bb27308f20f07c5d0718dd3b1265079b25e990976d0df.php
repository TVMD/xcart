<?php

/* /var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_author.twig */
class __TwigTemplate_abf539fc53fce64644b04d1535565c4ee550e34f99980038e2b2de985c5c1afb extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"author\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "showAuthor", array(), "method")) {
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthor", array(), "method")) {
                // line 9
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("profile_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthor", array(), "method"), "getProfileId", array(), "method")))), "html", null, true);
                echo "\"
         data-toggle=\"popover\"
         data-placement=\"top\"
         data-trigger=\"hover\"
         data-content=\"IP: ";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthorIp", array(), "method"), "html", null, true);
                echo "\">
        ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthor", array(), "method"), "getLogin", array(), "method"), "html", null, true);
                echo "
      </a>
    ";
            } else {
                // line 17
                echo "      ";
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthorName", array(), "method")) {
                    // line 18
                    echo "        <span class=\"removed-profile-name\"
              data-toggle=\"popover\"
              data-placement=\"top\"
              data-trigger=\"hover\"
              data-content=\"IP: ";
                    // line 22
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthorIp", array(), "method"), "html", null, true);
                    echo "\">
          ";
                    // line 23
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthorName", array(), "method"), "html", null, true);
                    echo "
        </span>
      ";
                } else {
                    // line 26
                    echo "        <span class=\"no-author\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "event", array()), "getAuthorIp", array(), "method"), "html", null, true);
                    echo "</span>
      ";
                }
                // line 28
                echo "    ";
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/history/parts/event_details_author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  73 => 29,  70 => 28,  64 => 26,  58 => 23,  54 => 22,  48 => 18,  45 => 17,  39 => 14,  35 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order history event date*/
/*  #*/
/*  # @ListChild (list="order.history.base.events.details", weight="150")*/
/*  #}*/
/* <li class="author">*/
/*   {% if this.event.showAuthor() %}*/
/*     {% if this.event.getAuthor() %}*/
/*       <a href="{{ url('profile', '', {'profile_id': this.event.getAuthor().getProfileId()}) }}"*/
/*          data-toggle="popover"*/
/*          data-placement="top"*/
/*          data-trigger="hover"*/
/*          data-content="IP: {{ this.event.getAuthorIp() }}">*/
/*         {{ this.event.getAuthor().getLogin() }}*/
/*       </a>*/
/*     {% else %}*/
/*       {% if this.event.getAuthorName() %}*/
/*         <span class="removed-profile-name"*/
/*               data-toggle="popover"*/
/*               data-placement="top"*/
/*               data-trigger="hover"*/
/*               data-content="IP: {{ this.event.getAuthorIp() }}">*/
/*           {{ this.event.getAuthorName() }}*/
/*         </span>*/
/*       {% else %}*/
/*         <span class="no-author">{{ this.event.getAuthorIp() }}</span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </li>*/
/* */
