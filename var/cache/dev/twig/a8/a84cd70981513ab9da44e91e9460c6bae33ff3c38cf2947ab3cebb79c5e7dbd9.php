<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_97661fd7d30f4704d67f63f31041f6055b525a0fe59848cf07a56d0a1fb2f1f9 extends Twig_Template
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
        $__internal_f2911019a89ed1d8478e6ddf71ffa2d809ac370dc90c2d107eaf1bfb7add9415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2911019a89ed1d8478e6ddf71ffa2d809ac370dc90c2d107eaf1bfb7add9415->enter($__internal_f2911019a89ed1d8478e6ddf71ffa2d809ac370dc90c2d107eaf1bfb7add9415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_753f8489f7299ffd823b229891a664447375cbf14d2f45515a528f8fb5ed0761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753f8489f7299ffd823b229891a664447375cbf14d2f45515a528f8fb5ed0761->enter($__internal_753f8489f7299ffd823b229891a664447375cbf14d2f45515a528f8fb5ed0761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f2911019a89ed1d8478e6ddf71ffa2d809ac370dc90c2d107eaf1bfb7add9415->leave($__internal_f2911019a89ed1d8478e6ddf71ffa2d809ac370dc90c2d107eaf1bfb7add9415_prof);

        
        $__internal_753f8489f7299ffd823b229891a664447375cbf14d2f45515a528f8fb5ed0761->leave($__internal_753f8489f7299ffd823b229891a664447375cbf14d2f45515a528f8fb5ed0761_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
