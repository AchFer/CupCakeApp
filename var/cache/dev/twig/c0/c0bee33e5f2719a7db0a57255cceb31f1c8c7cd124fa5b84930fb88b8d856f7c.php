<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e99afbe2f9de7eb77e5ccc8e8106eb455e86d13282c8a4120a6ced0066265b51 extends Twig_Template
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
        $__internal_c0d316735c4dcb92bb9521850fa7e5f7daf4b2e4831c7f7736a3e6b1ce72438d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0d316735c4dcb92bb9521850fa7e5f7daf4b2e4831c7f7736a3e6b1ce72438d->enter($__internal_c0d316735c4dcb92bb9521850fa7e5f7daf4b2e4831c7f7736a3e6b1ce72438d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0b226d8dbcc2f0a7d4105e9cf33b16e573db615ff5b85942bf33c2124afe0b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b226d8dbcc2f0a7d4105e9cf33b16e573db615ff5b85942bf33c2124afe0b3a->enter($__internal_0b226d8dbcc2f0a7d4105e9cf33b16e573db615ff5b85942bf33c2124afe0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c0d316735c4dcb92bb9521850fa7e5f7daf4b2e4831c7f7736a3e6b1ce72438d->leave($__internal_c0d316735c4dcb92bb9521850fa7e5f7daf4b2e4831c7f7736a3e6b1ce72438d_prof);

        
        $__internal_0b226d8dbcc2f0a7d4105e9cf33b16e573db615ff5b85942bf33c2124afe0b3a->leave($__internal_0b226d8dbcc2f0a7d4105e9cf33b16e573db615ff5b85942bf33c2124afe0b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
