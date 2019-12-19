<?php

/* PIUserBundle:Resetting:request.html.twig */
class __TwigTemplate_d71b90b1d9e263225efdf9da616ddb2dc63c696ffc57155924462adae2cd0b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b79e5518f66b878da1d0f4b56aee3349cfd458c59ee79f4839212b4e181a1f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b79e5518f66b878da1d0f4b56aee3349cfd458c59ee79f4839212b4e181a1f74->enter($__internal_b79e5518f66b878da1d0f4b56aee3349cfd458c59ee79f4839212b4e181a1f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:request.html.twig"));

        $__internal_9206ccb0f810913e565f34dc7bfba25fccc8407e004532e44c99d9bf8acc742e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9206ccb0f810913e565f34dc7bfba25fccc8407e004532e44c99d9bf8acc742e->enter($__internal_9206ccb0f810913e565f34dc7bfba25fccc8407e004532e44c99d9bf8acc742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b79e5518f66b878da1d0f4b56aee3349cfd458c59ee79f4839212b4e181a1f74->leave($__internal_b79e5518f66b878da1d0f4b56aee3349cfd458c59ee79f4839212b4e181a1f74_prof);

        
        $__internal_9206ccb0f810913e565f34dc7bfba25fccc8407e004532e44c99d9bf8acc742e->leave($__internal_9206ccb0f810913e565f34dc7bfba25fccc8407e004532e44c99d9bf8acc742e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57fb86640c4f135a107b6052adadefc80ab1b2eafa1d91b323622ee669c0f079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fb86640c4f135a107b6052adadefc80ab1b2eafa1d91b323622ee669c0f079->enter($__internal_57fb86640c4f135a107b6052adadefc80ab1b2eafa1d91b323622ee669c0f079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7860702d41db7981314699d005463e4bd678a9157ebabcd2f09cd4d221c99960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7860702d41db7981314699d005463e4bd678a9157ebabcd2f09cd4d221c99960->enter($__internal_7860702d41db7981314699d005463e4bd678a9157ebabcd2f09cd4d221c99960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "PIUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7860702d41db7981314699d005463e4bd678a9157ebabcd2f09cd4d221c99960->leave($__internal_7860702d41db7981314699d005463e4bd678a9157ebabcd2f09cd4d221c99960_prof);

        
        $__internal_57fb86640c4f135a107b6052adadefc80ab1b2eafa1d91b323622ee669c0f079->leave($__internal_57fb86640c4f135a107b6052adadefc80ab1b2eafa1d91b323622ee669c0f079_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:request.html.twig";
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
", "PIUserBundle:Resetting:request.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/request.html.twig");
    }
}
