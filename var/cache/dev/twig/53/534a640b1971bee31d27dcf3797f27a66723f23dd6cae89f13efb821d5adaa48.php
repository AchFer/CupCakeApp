<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ef35f09263c9316b244c6ee944db5256a6380e8db03c5ca5055f4cd708a89aae extends Twig_Template
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
        $__internal_5a8d3547ebfb4591ef22de9ac6890af4ae231ba3e685b0baf5e6e5744601812f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a8d3547ebfb4591ef22de9ac6890af4ae231ba3e685b0baf5e6e5744601812f->enter($__internal_5a8d3547ebfb4591ef22de9ac6890af4ae231ba3e685b0baf5e6e5744601812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3e3f917be5d51d372f5ee6c975636673f7884643937bb4c24a5cfd49e39f7432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e3f917be5d51d372f5ee6c975636673f7884643937bb4c24a5cfd49e39f7432->enter($__internal_3e3f917be5d51d372f5ee6c975636673f7884643937bb4c24a5cfd49e39f7432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5a8d3547ebfb4591ef22de9ac6890af4ae231ba3e685b0baf5e6e5744601812f->leave($__internal_5a8d3547ebfb4591ef22de9ac6890af4ae231ba3e685b0baf5e6e5744601812f_prof);

        
        $__internal_3e3f917be5d51d372f5ee6c975636673f7884643937bb4c24a5cfd49e39f7432->leave($__internal_3e3f917be5d51d372f5ee6c975636673f7884643937bb4c24a5cfd49e39f7432_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
