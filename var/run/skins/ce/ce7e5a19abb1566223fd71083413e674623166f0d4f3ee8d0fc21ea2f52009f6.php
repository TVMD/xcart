<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/mobile_header_parts/search_menu.twig */
class __TwigTemplate_f76c42370ffc9fcdb53b7f5fdb8b36dd91f090d21e21e82fe3f1458006733556 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-search_menu\">
  <a id=\"search_menu\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
      <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"0 0 20 20\" enable-background=\"new 0 0 20 20\" xml:space=\"preserve\">
        <path d=\"M13.5,12.2h-0.7l-0.3-0.3c0.9-1.1,1.5-2.5,1.5-4c0-3.4-2.7-6.1-6.1-6.1C4.5,1.9,1.8,4.6,1.8,8c0,3.4,2.7,6.1,6.1,6.1
c1.5,0,2.9-0.6,4-1.5l0.3,0.3v0.7l4.7,4.7l1.4-1.4L13.5,12.2z M7.9,12.2c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2
c2.3,0,4.2,1.9,4.2,4.2C12.1,10.3,10.2,12.2,7.9,12.2z\"/>
      </svg>
  </a>
  <ul id=\"search_box\" class=\"dropdown-menu\" >
    <li role=\"presentation\">
      ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.responsive.search"))), "html", null, true);
        echo "
    </li>
  </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/mobile_header_parts/search_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 17,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header.mobile.menu", weight="200")*/
/*  #}*/
/* */
/* <li class="dropdown mobile_header-search_menu">*/
/*   <a id="search_menu" class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*       <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">*/
/*         <path d="M13.5,12.2h-0.7l-0.3-0.3c0.9-1.1,1.5-2.5,1.5-4c0-3.4-2.7-6.1-6.1-6.1C4.5,1.9,1.8,4.6,1.8,8c0,3.4,2.7,6.1,6.1,6.1*/
/* c1.5,0,2.9-0.6,4-1.5l0.3,0.3v0.7l4.7,4.7l1.4-1.4L13.5,12.2z M7.9,12.2c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2*/
/* c2.3,0,4.2,1.9,4.2,4.2C12.1,10.3,10.2,12.2,7.9,12.2z"/>*/
/*       </svg>*/
/*   </a>*/
/*   <ul id="search_box" class="dropdown-menu" >*/
/*     <li role="presentation">*/
/*       {{ widget_list('layout.responsive.search') }}*/
/*     </li>*/
/*   </ul>*/
/* </li>*/
