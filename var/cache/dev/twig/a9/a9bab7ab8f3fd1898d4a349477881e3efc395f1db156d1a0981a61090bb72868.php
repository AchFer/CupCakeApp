<?php

/* PIUserBundle:Registration:register.html.twig */
class __TwigTemplate_ad4f66d6fdf7deb3ff4c8715ffd4ad2533d30ae38ff5ab2b8da381c65fcc069c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6db56ad1ed9bedeef92504bd6656b1448d61ea3bbef31f6aa6b641be7e285f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db56ad1ed9bedeef92504bd6656b1448d61ea3bbef31f6aa6b641be7e285f84->enter($__internal_6db56ad1ed9bedeef92504bd6656b1448d61ea3bbef31f6aa6b641be7e285f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:register.html.twig"));

        $__internal_c3627e5d251dc71b4df39ab8c23369a863e3648fa8d26603556afe4e5c5a039c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3627e5d251dc71b4df39ab8c23369a863e3648fa8d26603556afe4e5c5a039c->enter($__internal_c3627e5d251dc71b4df39ab8c23369a863e3648fa8d26603556afe4e5c5a039c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6db56ad1ed9bedeef92504bd6656b1448d61ea3bbef31f6aa6b641be7e285f84->leave($__internal_6db56ad1ed9bedeef92504bd6656b1448d61ea3bbef31f6aa6b641be7e285f84_prof);

        
        $__internal_c3627e5d251dc71b4df39ab8c23369a863e3648fa8d26603556afe4e5c5a039c->leave($__internal_c3627e5d251dc71b4df39ab8c23369a863e3648fa8d26603556afe4e5c5a039c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef7e00361cb10be755e5fe7dcc4a48ddd8fdbd925646019b2b28edf9f35d086e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7e00361cb10be755e5fe7dcc4a48ddd8fdbd925646019b2b28edf9f35d086e->enter($__internal_ef7e00361cb10be755e5fe7dcc4a48ddd8fdbd925646019b2b28edf9f35d086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_06a26d09239b3a3ac3cb23a7f53df461e39a4cf47d69eb72de71ebe3280c1825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a26d09239b3a3ac3cb23a7f53df461e39a4cf47d69eb72de71ebe3280c1825->enter($__internal_06a26d09239b3a3ac3cb23a7f53df461e39a4cf47d69eb72de71ebe3280c1825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "PIUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_06a26d09239b3a3ac3cb23a7f53df461e39a4cf47d69eb72de71ebe3280c1825->leave($__internal_06a26d09239b3a3ac3cb23a7f53df461e39a4cf47d69eb72de71ebe3280c1825_prof);

        
        $__internal_ef7e00361cb10be755e5fe7dcc4a48ddd8fdbd925646019b2b28edf9f35d086e->leave($__internal_ef7e00361cb10be755e5fe7dcc4a48ddd8fdbd925646019b2b28edf9f35d086e_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Registration:register.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Registration/register.html.twig");
    }
}
