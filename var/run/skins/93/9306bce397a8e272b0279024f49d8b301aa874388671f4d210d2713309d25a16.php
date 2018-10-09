<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_blocks.twig */
class __TwigTemplate_f5d0a1c2d32d2eb8efada2ce92d110a00c31629007191660155fefc1f6025eaf extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-hidden-list'>
\t<a class='layout-editor-hidden-block' v-for=\"item in hiddenBlocks\" @click=\"showBlock(item)\">
\t\t<span class=\"name\" v-text=\"getBlockName(item)\"></span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_blocks.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor show hidden blocks button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="20")*/
/*  #}*/
/* */
/* <div class='layout-editor-hidden-list'>*/
/* 	<a class='layout-editor-hidden-block' v-for="item in hiddenBlocks" @click="showBlock(item)">*/
/* 		<span class="name" v-text="getBlockName(item)"></span>*/
/* 	</a>*/
/* </div>*/
/* */
