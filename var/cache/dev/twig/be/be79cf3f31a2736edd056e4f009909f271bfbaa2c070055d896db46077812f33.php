<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15dcf32ba60b6b8b45e212de74a5522c186c8920e03c2fbda56aeccc524d2a08 extends Twig_Template
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
        $__internal_281e6945ce4f8efbc70e838bda8a5ca77197e319db02e6b01ae7ebd02bf9d939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281e6945ce4f8efbc70e838bda8a5ca77197e319db02e6b01ae7ebd02bf9d939->enter($__internal_281e6945ce4f8efbc70e838bda8a5ca77197e319db02e6b01ae7ebd02bf9d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_a3768557d0e5c7c4b9a0913a1fddd761fe1eef1b59e31a3ddc5a1f20d8fb0161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3768557d0e5c7c4b9a0913a1fddd761fe1eef1b59e31a3ddc5a1f20d8fb0161->enter($__internal_a3768557d0e5c7c4b9a0913a1fddd761fe1eef1b59e31a3ddc5a1f20d8fb0161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_281e6945ce4f8efbc70e838bda8a5ca77197e319db02e6b01ae7ebd02bf9d939->leave($__internal_281e6945ce4f8efbc70e838bda8a5ca77197e319db02e6b01ae7ebd02bf9d939_prof);

        
        $__internal_a3768557d0e5c7c4b9a0913a1fddd761fe1eef1b59e31a3ddc5a1f20d8fb0161->leave($__internal_a3768557d0e5c7c4b9a0913a1fddd761fe1eef1b59e31a3ddc5a1f20d8fb0161_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
