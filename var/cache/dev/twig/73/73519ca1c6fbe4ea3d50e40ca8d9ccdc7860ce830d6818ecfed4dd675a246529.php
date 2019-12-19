<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1a9ca0b44f2f057b6ebf66c712b93a4774c8d90aa12d4e5e7e161af3c4afff2e extends Twig_Template
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
        $__internal_072146c2f83e3c0aafc531489b75374b59e08fa903a3dddc77d85475684e7ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_072146c2f83e3c0aafc531489b75374b59e08fa903a3dddc77d85475684e7ec8->enter($__internal_072146c2f83e3c0aafc531489b75374b59e08fa903a3dddc77d85475684e7ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_c7f04a5b6d01426df59d4767d73c719c65a0acc72ffc1f03caabd13af61b1e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f04a5b6d01426df59d4767d73c719c65a0acc72ffc1f03caabd13af61b1e19->enter($__internal_c7f04a5b6d01426df59d4767d73c719c65a0acc72ffc1f03caabd13af61b1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_072146c2f83e3c0aafc531489b75374b59e08fa903a3dddc77d85475684e7ec8->leave($__internal_072146c2f83e3c0aafc531489b75374b59e08fa903a3dddc77d85475684e7ec8_prof);

        
        $__internal_c7f04a5b6d01426df59d4767d73c719c65a0acc72ffc1f03caabd13af61b1e19->leave($__internal_c7f04a5b6d01426df59d4767d73c719c65a0acc72ffc1f03caabd13af61b1e19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
