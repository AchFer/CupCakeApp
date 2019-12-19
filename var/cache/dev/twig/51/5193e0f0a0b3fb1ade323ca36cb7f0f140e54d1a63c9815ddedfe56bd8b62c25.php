<?php

/* @PIUser/Resetting/email.txt.twig */
class __TwigTemplate_2b3c88a35ae574500829b8596544139e2fb3edfeac0c80c05b73f25d071f7067 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b4912ef3d31b3023db4f660a1a5431393845051dbc460f4fcf616d6c64e238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b4912ef3d31b3023db4f660a1a5431393845051dbc460f4fcf616d6c64e238->enter($__internal_a6b4912ef3d31b3023db4f660a1a5431393845051dbc460f4fcf616d6c64e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/email.txt.twig"));

        $__internal_2eb8ca8072e278397a4e102c97bd7f0d59f05c5832dad4f0d6c4c69bae08e9cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eb8ca8072e278397a4e102c97bd7f0d59f05c5832dad4f0d6c4c69bae08e9cf->enter($__internal_2eb8ca8072e278397a4e102c97bd7f0d59f05c5832dad4f0d6c4c69bae08e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a6b4912ef3d31b3023db4f660a1a5431393845051dbc460f4fcf616d6c64e238->leave($__internal_a6b4912ef3d31b3023db4f660a1a5431393845051dbc460f4fcf616d6c64e238_prof);

        
        $__internal_2eb8ca8072e278397a4e102c97bd7f0d59f05c5832dad4f0d6c4c69bae08e9cf->leave($__internal_2eb8ca8072e278397a4e102c97bd7f0d59f05c5832dad4f0d6c4c69bae08e9cf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e2e04befa192addfbea40c8d7079d0e96f7ab10e17b9e7fef5e22bbb5648c31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e04befa192addfbea40c8d7079d0e96f7ab10e17b9e7fef5e22bbb5648c31f->enter($__internal_e2e04befa192addfbea40c8d7079d0e96f7ab10e17b9e7fef5e22bbb5648c31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_70f1b35d2c7eedbbdbc65c6797310d7bc44614edf3acf3da0d3bac7b8b383198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70f1b35d2c7eedbbdbc65c6797310d7bc44614edf3acf3da0d3bac7b8b383198->enter($__internal_70f1b35d2c7eedbbdbc65c6797310d7bc44614edf3acf3da0d3bac7b8b383198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_70f1b35d2c7eedbbdbc65c6797310d7bc44614edf3acf3da0d3bac7b8b383198->leave($__internal_70f1b35d2c7eedbbdbc65c6797310d7bc44614edf3acf3da0d3bac7b8b383198_prof);

        
        $__internal_e2e04befa192addfbea40c8d7079d0e96f7ab10e17b9e7fef5e22bbb5648c31f->leave($__internal_e2e04befa192addfbea40c8d7079d0e96f7ab10e17b9e7fef5e22bbb5648c31f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_955900f6531c7ccd43a854d01c0302d438280ccc041b6d2f6f52b203cca64ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955900f6531c7ccd43a854d01c0302d438280ccc041b6d2f6f52b203cca64ed6->enter($__internal_955900f6531c7ccd43a854d01c0302d438280ccc041b6d2f6f52b203cca64ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_cab0732edf1c8f23390b7c6d806b85c8b7f54c7b5905012a15eeccc7611a10ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab0732edf1c8f23390b7c6d806b85c8b7f54c7b5905012a15eeccc7611a10ec->enter($__internal_cab0732edf1c8f23390b7c6d806b85c8b7f54c7b5905012a15eeccc7611a10ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_cab0732edf1c8f23390b7c6d806b85c8b7f54c7b5905012a15eeccc7611a10ec->leave($__internal_cab0732edf1c8f23390b7c6d806b85c8b7f54c7b5905012a15eeccc7611a10ec_prof);

        
        $__internal_955900f6531c7ccd43a854d01c0302d438280ccc041b6d2f6f52b203cca64ed6->leave($__internal_955900f6531c7ccd43a854d01c0302d438280ccc041b6d2f6f52b203cca64ed6_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d61f57a6a720e71d93b4c454c2fd1f59523a4bc13aefab88192e2fbed7dd5de7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d61f57a6a720e71d93b4c454c2fd1f59523a4bc13aefab88192e2fbed7dd5de7->enter($__internal_d61f57a6a720e71d93b4c454c2fd1f59523a4bc13aefab88192e2fbed7dd5de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_94f96d837fa429a8c6fd56227ec14a95b3b6d2c749defbd39fb10811f9072678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f96d837fa429a8c6fd56227ec14a95b3b6d2c749defbd39fb10811f9072678->enter($__internal_94f96d837fa429a8c6fd56227ec14a95b3b6d2c749defbd39fb10811f9072678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94f96d837fa429a8c6fd56227ec14a95b3b6d2c749defbd39fb10811f9072678->leave($__internal_94f96d837fa429a8c6fd56227ec14a95b3b6d2c749defbd39fb10811f9072678_prof);

        
        $__internal_d61f57a6a720e71d93b4c454c2fd1f59523a4bc13aefab88192e2fbed7dd5de7->leave($__internal_d61f57a6a720e71d93b4c454c2fd1f59523a4bc13aefab88192e2fbed7dd5de7_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@PIUser/Resetting/email.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
