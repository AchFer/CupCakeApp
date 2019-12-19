<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_c5b95ed3073392f18ee194af4ff5812bd4c30acf014b479fa701f9b95c428f14 extends Twig_Template
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
        $__internal_e97982d4c8c0beb2493eed3e843f9f972580905c4556dc805c7183ef32be3ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97982d4c8c0beb2493eed3e843f9f972580905c4556dc805c7183ef32be3ab5->enter($__internal_e97982d4c8c0beb2493eed3e843f9f972580905c4556dc805c7183ef32be3ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ff2e6cdf9334068c3c99fea8ce125b7dc869c1db3cce22574170a11eccd73339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff2e6cdf9334068c3c99fea8ce125b7dc869c1db3cce22574170a11eccd73339->enter($__internal_ff2e6cdf9334068c3c99fea8ce125b7dc869c1db3cce22574170a11eccd73339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e97982d4c8c0beb2493eed3e843f9f972580905c4556dc805c7183ef32be3ab5->leave($__internal_e97982d4c8c0beb2493eed3e843f9f972580905c4556dc805c7183ef32be3ab5_prof);

        
        $__internal_ff2e6cdf9334068c3c99fea8ce125b7dc869c1db3cce22574170a11eccd73339->leave($__internal_ff2e6cdf9334068c3c99fea8ce125b7dc869c1db3cce22574170a11eccd73339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
