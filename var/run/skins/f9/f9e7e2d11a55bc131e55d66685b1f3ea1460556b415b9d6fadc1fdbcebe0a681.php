<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/actions/restore_backup.twig */
class __TwigTemplate_9c5aca4b53eaec024e6cc2795c132a6ea7576e0d67eea19a9c35c5585c376e5f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"upgrade-note restore-backup\">
  <span class=\"restore-backup-label\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Restore last backup")), "html", null, true);
        echo " <span class=\"small-note\">(";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("should be performed manually")), "html", null, true);
        echo ")</span></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/actions/restore_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Hard reset*/
/*  #*/
/*  # @ListChild (list="upgrade.step.completed.backup.actions", weight="300")*/
/*  #}*/
/* */
/* <div class="upgrade-note restore-backup">*/
/*   <span class="restore-backup-label">{{ t('Restore last backup') }} <span class="small-note">({{ t('should be performed manually') }})</span></span>*/
/* </div>*/
/* */
