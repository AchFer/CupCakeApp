<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_8ccb77f33ace89107f25150327715daa49904b3f91ad853d08cc3ea98da6f202 extends Twig_Template
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
        $__internal_f5e788d5e2b78878f03a62da1e3fad93a4ffe9df2b0f02d44ab34fa6e02c7b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e788d5e2b78878f03a62da1e3fad93a4ffe9df2b0f02d44ab34fa6e02c7b6a->enter($__internal_f5e788d5e2b78878f03a62da1e3fad93a4ffe9df2b0f02d44ab34fa6e02c7b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_4d2fd0d6bd1f6c24f1fda21afc69f0bf44a75e30535026a9a3d6116cb9616d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2fd0d6bd1f6c24f1fda21afc69f0bf44a75e30535026a9a3d6116cb9616d51->enter($__internal_4d2fd0d6bd1f6c24f1fda21afc69f0bf44a75e30535026a9a3d6116cb9616d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_f5e788d5e2b78878f03a62da1e3fad93a4ffe9df2b0f02d44ab34fa6e02c7b6a->leave($__internal_f5e788d5e2b78878f03a62da1e3fad93a4ffe9df2b0f02d44ab34fa6e02c7b6a_prof);

        
        $__internal_4d2fd0d6bd1f6c24f1fda21afc69f0bf44a75e30535026a9a3d6116cb9616d51->leave($__internal_4d2fd0d6bd1f6c24f1fda21afc69f0bf44a75e30535026a9a3d6116cb9616d51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_label.html.php");
    }
}
