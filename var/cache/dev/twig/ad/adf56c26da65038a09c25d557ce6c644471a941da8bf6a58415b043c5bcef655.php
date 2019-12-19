<?php

/* @PIUser/Resetting/request.html.twig */
class __TwigTemplate_44ee63d1d3ea7b7ba765a560ecf532b52792f2200f48055748270badfeef654c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Resetting/request.html.twig", 1);
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
        $__internal_69f8ec7ebeee95d3c0e5a497c9d96750517766b693a052db3a99399cf5530cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f8ec7ebeee95d3c0e5a497c9d96750517766b693a052db3a99399cf5530cd2->enter($__internal_69f8ec7ebeee95d3c0e5a497c9d96750517766b693a052db3a99399cf5530cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/request.html.twig"));

        $__internal_6f648d7120ca4516fbe3a580183262c6b27c46b7cf74e2f691bcb7bfe04b0dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f648d7120ca4516fbe3a580183262c6b27c46b7cf74e2f691bcb7bfe04b0dfd->enter($__internal_6f648d7120ca4516fbe3a580183262c6b27c46b7cf74e2f691bcb7bfe04b0dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69f8ec7ebeee95d3c0e5a497c9d96750517766b693a052db3a99399cf5530cd2->leave($__internal_69f8ec7ebeee95d3c0e5a497c9d96750517766b693a052db3a99399cf5530cd2_prof);

        
        $__internal_6f648d7120ca4516fbe3a580183262c6b27c46b7cf74e2f691bcb7bfe04b0dfd->leave($__internal_6f648d7120ca4516fbe3a580183262c6b27c46b7cf74e2f691bcb7bfe04b0dfd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4173c2204ef320083b48b564b5fe99e4003844ba4555939fdc5da2bc506faad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4173c2204ef320083b48b564b5fe99e4003844ba4555939fdc5da2bc506faad0->enter($__internal_4173c2204ef320083b48b564b5fe99e4003844ba4555939fdc5da2bc506faad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a6fd1233deddcebd7322268381c5bc3063dc2a4b98e620ac810b2ba035a86da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6fd1233deddcebd7322268381c5bc3063dc2a4b98e620ac810b2ba035a86da->enter($__internal_2a6fd1233deddcebd7322268381c5bc3063dc2a4b98e620ac810b2ba035a86da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@PIUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_2a6fd1233deddcebd7322268381c5bc3063dc2a4b98e620ac810b2ba035a86da->leave($__internal_2a6fd1233deddcebd7322268381c5bc3063dc2a4b98e620ac810b2ba035a86da_prof);

        
        $__internal_4173c2204ef320083b48b564b5fe99e4003844ba4555939fdc5da2bc506faad0->leave($__internal_4173c2204ef320083b48b564b5fe99e4003844ba4555939fdc5da2bc506faad0_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Resetting/request.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
