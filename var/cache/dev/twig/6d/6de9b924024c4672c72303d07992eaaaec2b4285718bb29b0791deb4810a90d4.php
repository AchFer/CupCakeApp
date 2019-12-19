<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0db3560d5c563f9ce54922581a54a2d80e918f0c94e542167a41d8bc5a73e5f9 extends Twig_Template
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
        $__internal_36d16741ffd5148eb9e5df197ce668e305d41833366dfcc2253fa3a1184a0b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d16741ffd5148eb9e5df197ce668e305d41833366dfcc2253fa3a1184a0b89->enter($__internal_36d16741ffd5148eb9e5df197ce668e305d41833366dfcc2253fa3a1184a0b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a3c6f67fde4026d985e50554f85e6c6b58d89a0bdcd1f864caf307c4074c5651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c6f67fde4026d985e50554f85e6c6b58d89a0bdcd1f864caf307c4074c5651->enter($__internal_a3c6f67fde4026d985e50554f85e6c6b58d89a0bdcd1f864caf307c4074c5651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_36d16741ffd5148eb9e5df197ce668e305d41833366dfcc2253fa3a1184a0b89->leave($__internal_36d16741ffd5148eb9e5df197ce668e305d41833366dfcc2253fa3a1184a0b89_prof);

        
        $__internal_a3c6f67fde4026d985e50554f85e6c6b58d89a0bdcd1f864caf307c4074c5651->leave($__internal_a3c6f67fde4026d985e50554f85e6c6b58d89a0bdcd1f864caf307c4074c5651_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
