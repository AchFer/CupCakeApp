<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0e9c3cee79393b6ba2fd03733bbd6a96d68c731432e54e360800c89283382e31 extends Twig_Template
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
        $__internal_abf5b3eb0cb9a80c90b9a502dfbb4135c28fb5ac95f528a460d9b7b02e894ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf5b3eb0cb9a80c90b9a502dfbb4135c28fb5ac95f528a460d9b7b02e894ff2->enter($__internal_abf5b3eb0cb9a80c90b9a502dfbb4135c28fb5ac95f528a460d9b7b02e894ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_246558eb43f3fc463143a43a5b3be049b521392ca00594b31fdf149fa9c7f54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246558eb43f3fc463143a43a5b3be049b521392ca00594b31fdf149fa9c7f54a->enter($__internal_246558eb43f3fc463143a43a5b3be049b521392ca00594b31fdf149fa9c7f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_abf5b3eb0cb9a80c90b9a502dfbb4135c28fb5ac95f528a460d9b7b02e894ff2->leave($__internal_abf5b3eb0cb9a80c90b9a502dfbb4135c28fb5ac95f528a460d9b7b02e894ff2_prof);

        
        $__internal_246558eb43f3fc463143a43a5b3be049b521392ca00594b31fdf149fa9c7f54a->leave($__internal_246558eb43f3fc463143a43a5b3be049b521392ca00594b31fdf149fa9c7f54a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
