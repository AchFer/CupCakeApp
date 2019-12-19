<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_42cc4841225eb3c94d4351b25e59a630da3ebac59740005a16bc5caf0fd9df92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dca903e48d0aa22a71d35dc2ae62d804d23ff344ff1122905479adb25722b3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca903e48d0aa22a71d35dc2ae62d804d23ff344ff1122905479adb25722b3cc->enter($__internal_dca903e48d0aa22a71d35dc2ae62d804d23ff344ff1122905479adb25722b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_f377b164e4d7b7fc669eee8b406632cdb70bd488e9a36918db2d08a25afc3879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f377b164e4d7b7fc669eee8b406632cdb70bd488e9a36918db2d08a25afc3879->enter($__internal_f377b164e4d7b7fc669eee8b406632cdb70bd488e9a36918db2d08a25afc3879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_dca903e48d0aa22a71d35dc2ae62d804d23ff344ff1122905479adb25722b3cc->leave($__internal_dca903e48d0aa22a71d35dc2ae62d804d23ff344ff1122905479adb25722b3cc_prof);

        
        $__internal_f377b164e4d7b7fc669eee8b406632cdb70bd488e9a36918db2d08a25afc3879->leave($__internal_f377b164e4d7b7fc669eee8b406632cdb70bd488e9a36918db2d08a25afc3879_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e244ce12ab03372aeda5e997898463d3dfc7e6b4e7a5589260097f7d80e14015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e244ce12ab03372aeda5e997898463d3dfc7e6b4e7a5589260097f7d80e14015->enter($__internal_e244ce12ab03372aeda5e997898463d3dfc7e6b4e7a5589260097f7d80e14015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fa7e91a3dbda66267c9a2c6b42f18bca9a7e314f437413028c736d373fd0d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa7e91a3dbda66267c9a2c6b42f18bca9a7e314f437413028c736d373fd0d1d->enter($__internal_1fa7e91a3dbda66267c9a2c6b42f18bca9a7e314f437413028c736d373fd0d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1fa7e91a3dbda66267c9a2c6b42f18bca9a7e314f437413028c736d373fd0d1d->leave($__internal_1fa7e91a3dbda66267c9a2c6b42f18bca9a7e314f437413028c736d373fd0d1d_prof);

        
        $__internal_e244ce12ab03372aeda5e997898463d3dfc7e6b4e7a5589260097f7d80e14015->leave($__internal_e244ce12ab03372aeda5e997898463d3dfc7e6b4e7a5589260097f7d80e14015_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
