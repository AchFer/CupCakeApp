<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_3347d6800470a3c0ed1f01e42b5aaebc8df5b942f4bb4cd71d8694e74fb29e25 extends Twig_Template
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
        $__internal_8da777cea41ecf547b55b0bff8f9a86c7833a32348881de541960dfd5c679a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da777cea41ecf547b55b0bff8f9a86c7833a32348881de541960dfd5c679a2b->enter($__internal_8da777cea41ecf547b55b0bff8f9a86c7833a32348881de541960dfd5c679a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b4bb4e0a92aa7bd72a27ce89088380b0fef75e50821631dd20d6dc8424cc6522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bb4e0a92aa7bd72a27ce89088380b0fef75e50821631dd20d6dc8424cc6522->enter($__internal_b4bb4e0a92aa7bd72a27ce89088380b0fef75e50821631dd20d6dc8424cc6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8da777cea41ecf547b55b0bff8f9a86c7833a32348881de541960dfd5c679a2b->leave($__internal_8da777cea41ecf547b55b0bff8f9a86c7833a32348881de541960dfd5c679a2b_prof);

        
        $__internal_b4bb4e0a92aa7bd72a27ce89088380b0fef75e50821631dd20d6dc8424cc6522->leave($__internal_b4bb4e0a92aa7bd72a27ce89088380b0fef75e50821631dd20d6dc8424cc6522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
