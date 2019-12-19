<?php

/* PIUserBundle:Registration:email.txt.twig */
class __TwigTemplate_47a2a8130b912e0a5199b4e7fe86319d80a4403d18756af953e661c8669ffba4 extends Twig_Template
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
        $__internal_8438ca9b58519bd5d0c0b72ce20077fb3235ae3365712c85bc29c03c8c0435de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8438ca9b58519bd5d0c0b72ce20077fb3235ae3365712c85bc29c03c8c0435de->enter($__internal_8438ca9b58519bd5d0c0b72ce20077fb3235ae3365712c85bc29c03c8c0435de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:email.txt.twig"));

        $__internal_48b6d8e80cf9d20c6b55fc243774dfd5f0ffd842a5212b68906d4e69a97d2ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b6d8e80cf9d20c6b55fc243774dfd5f0ffd842a5212b68906d4e69a97d2ca5->enter($__internal_48b6d8e80cf9d20c6b55fc243774dfd5f0ffd842a5212b68906d4e69a97d2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8438ca9b58519bd5d0c0b72ce20077fb3235ae3365712c85bc29c03c8c0435de->leave($__internal_8438ca9b58519bd5d0c0b72ce20077fb3235ae3365712c85bc29c03c8c0435de_prof);

        
        $__internal_48b6d8e80cf9d20c6b55fc243774dfd5f0ffd842a5212b68906d4e69a97d2ca5->leave($__internal_48b6d8e80cf9d20c6b55fc243774dfd5f0ffd842a5212b68906d4e69a97d2ca5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_000633c26e296fd881cef4696971cf387bac0a17e5c4dbfba9e5d06cee1d4507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_000633c26e296fd881cef4696971cf387bac0a17e5c4dbfba9e5d06cee1d4507->enter($__internal_000633c26e296fd881cef4696971cf387bac0a17e5c4dbfba9e5d06cee1d4507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1497f578ad66f98ba8193dcc7666bc858785b57787581b14bdf9e824475f88fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1497f578ad66f98ba8193dcc7666bc858785b57787581b14bdf9e824475f88fa->enter($__internal_1497f578ad66f98ba8193dcc7666bc858785b57787581b14bdf9e824475f88fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_1497f578ad66f98ba8193dcc7666bc858785b57787581b14bdf9e824475f88fa->leave($__internal_1497f578ad66f98ba8193dcc7666bc858785b57787581b14bdf9e824475f88fa_prof);

        
        $__internal_000633c26e296fd881cef4696971cf387bac0a17e5c4dbfba9e5d06cee1d4507->leave($__internal_000633c26e296fd881cef4696971cf387bac0a17e5c4dbfba9e5d06cee1d4507_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a95780ac2586c238e99ad003f9adefe90a3ccb9d18d5ddac3c61e940f9d2e775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95780ac2586c238e99ad003f9adefe90a3ccb9d18d5ddac3c61e940f9d2e775->enter($__internal_a95780ac2586c238e99ad003f9adefe90a3ccb9d18d5ddac3c61e940f9d2e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9694a0b508fc023c0cbb6993cc3485b33abf4e367dfa93de3280b7f32dc19441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9694a0b508fc023c0cbb6993cc3485b33abf4e367dfa93de3280b7f32dc19441->enter($__internal_9694a0b508fc023c0cbb6993cc3485b33abf4e367dfa93de3280b7f32dc19441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9694a0b508fc023c0cbb6993cc3485b33abf4e367dfa93de3280b7f32dc19441->leave($__internal_9694a0b508fc023c0cbb6993cc3485b33abf4e367dfa93de3280b7f32dc19441_prof);

        
        $__internal_a95780ac2586c238e99ad003f9adefe90a3ccb9d18d5ddac3c61e940f9d2e775->leave($__internal_a95780ac2586c238e99ad003f9adefe90a3ccb9d18d5ddac3c61e940f9d2e775_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5354431265304fd6e5597bff058302bdbb66e67817c7b3660ea9ac50828633cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5354431265304fd6e5597bff058302bdbb66e67817c7b3660ea9ac50828633cb->enter($__internal_5354431265304fd6e5597bff058302bdbb66e67817c7b3660ea9ac50828633cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7a9cbe949523b873cef3fa7f1a89fe2cf0e85580b15a3c1f68962ecad0283770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9cbe949523b873cef3fa7f1a89fe2cf0e85580b15a3c1f68962ecad0283770->enter($__internal_7a9cbe949523b873cef3fa7f1a89fe2cf0e85580b15a3c1f68962ecad0283770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a9cbe949523b873cef3fa7f1a89fe2cf0e85580b15a3c1f68962ecad0283770->leave($__internal_7a9cbe949523b873cef3fa7f1a89fe2cf0e85580b15a3c1f68962ecad0283770_prof);

        
        $__internal_5354431265304fd6e5597bff058302bdbb66e67817c7b3660ea9ac50828633cb->leave($__internal_5354431265304fd6e5597bff058302bdbb66e67817c7b3660ea9ac50828633cb_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "PIUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Registration/email.txt.twig");
    }
}
