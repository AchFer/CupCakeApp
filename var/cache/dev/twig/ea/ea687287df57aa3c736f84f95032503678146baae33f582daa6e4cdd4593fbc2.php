<?php

/* PIUserBundle:Security:login.html.twig */
class __TwigTemplate_108a89f6b0842836738643308db9044b70e924f98487cd8edf1c6ee97846706c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Security:login.html.twig", 1);
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
        $__internal_0bcfa6fd746c84572e1a201d7372f17fa2c2da40b9e765be5436768ba8e08c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcfa6fd746c84572e1a201d7372f17fa2c2da40b9e765be5436768ba8e08c67->enter($__internal_0bcfa6fd746c84572e1a201d7372f17fa2c2da40b9e765be5436768ba8e08c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Security:login.html.twig"));

        $__internal_d27ae545ceb96cde4aeac335360ebdb4f6198e8e53f8f39f7bf9782f7af9ac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27ae545ceb96cde4aeac335360ebdb4f6198e8e53f8f39f7bf9782f7af9ac81->enter($__internal_d27ae545ceb96cde4aeac335360ebdb4f6198e8e53f8f39f7bf9782f7af9ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bcfa6fd746c84572e1a201d7372f17fa2c2da40b9e765be5436768ba8e08c67->leave($__internal_0bcfa6fd746c84572e1a201d7372f17fa2c2da40b9e765be5436768ba8e08c67_prof);

        
        $__internal_d27ae545ceb96cde4aeac335360ebdb4f6198e8e53f8f39f7bf9782f7af9ac81->leave($__internal_d27ae545ceb96cde4aeac335360ebdb4f6198e8e53f8f39f7bf9782f7af9ac81_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be35e0ec25344cb6c4b4021eeb35c227d79f8926365c50d131ee99ba5f7ae5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be35e0ec25344cb6c4b4021eeb35c227d79f8926365c50d131ee99ba5f7ae5e9->enter($__internal_be35e0ec25344cb6c4b4021eeb35c227d79f8926365c50d131ee99ba5f7ae5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce2f0d3100ce75564c69bf3b4262388977a59158e902f44a908c11b3914b4c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce2f0d3100ce75564c69bf3b4262388977a59158e902f44a908c11b3914b4c04->enter($__internal_ce2f0d3100ce75564c69bf3b4262388977a59158e902f44a908c11b3914b4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ce2f0d3100ce75564c69bf3b4262388977a59158e902f44a908c11b3914b4c04->leave($__internal_ce2f0d3100ce75564c69bf3b4262388977a59158e902f44a908c11b3914b4c04_prof);

        
        $__internal_be35e0ec25344cb6c4b4021eeb35c227d79f8926365c50d131ee99ba5f7ae5e9->leave($__internal_be35e0ec25344cb6c4b4021eeb35c227d79f8926365c50d131ee99ba5f7ae5e9_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "PIUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
