<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_95ebdb977e60bea67e6e8cbf2d1a5a5cb8888dfb781ac646f9d912ec714c6fd1 extends Twig_Template
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
        $__internal_262392b46cb4cfffa9876d566d862242dee911d0df4c3613db90bec772887601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262392b46cb4cfffa9876d566d862242dee911d0df4c3613db90bec772887601->enter($__internal_262392b46cb4cfffa9876d566d862242dee911d0df4c3613db90bec772887601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_3fa9e848c0bf7c98e5ca4379e48408e7a9967c7760c12b39487a6560dd784112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa9e848c0bf7c98e5ca4379e48408e7a9967c7760c12b39487a6560dd784112->enter($__internal_3fa9e848c0bf7c98e5ca4379e48408e7a9967c7760c12b39487a6560dd784112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_262392b46cb4cfffa9876d566d862242dee911d0df4c3613db90bec772887601->leave($__internal_262392b46cb4cfffa9876d566d862242dee911d0df4c3613db90bec772887601_prof);

        
        $__internal_3fa9e848c0bf7c98e5ca4379e48408e7a9967c7760c12b39487a6560dd784112->leave($__internal_3fa9e848c0bf7c98e5ca4379e48408e7a9967c7760c12b39487a6560dd784112_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
