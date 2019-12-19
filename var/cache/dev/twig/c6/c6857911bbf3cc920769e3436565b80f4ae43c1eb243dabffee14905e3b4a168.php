<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_15388bb9a8b9aeb6743656eb5e1a8ba97294ae03a7e9dfe18acc162afbef63ce extends Twig_Template
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
        $__internal_5028814499cdf66486f3aaf8b7e459d9d6c7c4ff9a4d3a9534f7fcb761708d5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5028814499cdf66486f3aaf8b7e459d9d6c7c4ff9a4d3a9534f7fcb761708d5d->enter($__internal_5028814499cdf66486f3aaf8b7e459d9d6c7c4ff9a4d3a9534f7fcb761708d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_4802f9cfa851381ae1068c6b25dd67e6cc177bf85e53951bae4cdac2dac26034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4802f9cfa851381ae1068c6b25dd67e6cc177bf85e53951bae4cdac2dac26034->enter($__internal_4802f9cfa851381ae1068c6b25dd67e6cc177bf85e53951bae4cdac2dac26034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5028814499cdf66486f3aaf8b7e459d9d6c7c4ff9a4d3a9534f7fcb761708d5d->leave($__internal_5028814499cdf66486f3aaf8b7e459d9d6c7c4ff9a4d3a9534f7fcb761708d5d_prof);

        
        $__internal_4802f9cfa851381ae1068c6b25dd67e6cc177bf85e53951bae4cdac2dac26034->leave($__internal_4802f9cfa851381ae1068c6b25dd67e6cc177bf85e53951bae4cdac2dac26034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
