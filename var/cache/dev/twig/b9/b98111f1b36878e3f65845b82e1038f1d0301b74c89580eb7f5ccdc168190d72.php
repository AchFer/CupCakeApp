<?php

/* @PIUser/Registration/email.txt.twig */
class __TwigTemplate_01028bc7cc0c699e0e6315cd8f8b844ba70a814540e845f4007d4f752369665e extends Twig_Template
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
        $__internal_5f83f739c55a9d4e3fbf32c438407333180159500e87ed13e0ead81b9c23254a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f83f739c55a9d4e3fbf32c438407333180159500e87ed13e0ead81b9c23254a->enter($__internal_5f83f739c55a9d4e3fbf32c438407333180159500e87ed13e0ead81b9c23254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/email.txt.twig"));

        $__internal_275abcffb12976ddd3c3bf1c208845b63819b589d278411b8ddab204cadf5b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275abcffb12976ddd3c3bf1c208845b63819b589d278411b8ddab204cadf5b37->enter($__internal_275abcffb12976ddd3c3bf1c208845b63819b589d278411b8ddab204cadf5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5f83f739c55a9d4e3fbf32c438407333180159500e87ed13e0ead81b9c23254a->leave($__internal_5f83f739c55a9d4e3fbf32c438407333180159500e87ed13e0ead81b9c23254a_prof);

        
        $__internal_275abcffb12976ddd3c3bf1c208845b63819b589d278411b8ddab204cadf5b37->leave($__internal_275abcffb12976ddd3c3bf1c208845b63819b589d278411b8ddab204cadf5b37_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ba16d093ec3a8a2e9eefdb69402237ce1189613d5bc7fa975c8025d843fe5a66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba16d093ec3a8a2e9eefdb69402237ce1189613d5bc7fa975c8025d843fe5a66->enter($__internal_ba16d093ec3a8a2e9eefdb69402237ce1189613d5bc7fa975c8025d843fe5a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c8fba696525c583d9c2e0b097a2f785c8442d8223f1b329e547cee5b2590150d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fba696525c583d9c2e0b097a2f785c8442d8223f1b329e547cee5b2590150d->enter($__internal_c8fba696525c583d9c2e0b097a2f785c8442d8223f1b329e547cee5b2590150d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_c8fba696525c583d9c2e0b097a2f785c8442d8223f1b329e547cee5b2590150d->leave($__internal_c8fba696525c583d9c2e0b097a2f785c8442d8223f1b329e547cee5b2590150d_prof);

        
        $__internal_ba16d093ec3a8a2e9eefdb69402237ce1189613d5bc7fa975c8025d843fe5a66->leave($__internal_ba16d093ec3a8a2e9eefdb69402237ce1189613d5bc7fa975c8025d843fe5a66_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6d17b5dbe30e7e9bb047f59c61e38bd0b1f16c71ee8b0e36e55b3c548c751c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d17b5dbe30e7e9bb047f59c61e38bd0b1f16c71ee8b0e36e55b3c548c751c64->enter($__internal_6d17b5dbe30e7e9bb047f59c61e38bd0b1f16c71ee8b0e36e55b3c548c751c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_f2bccace48f8c350df346b72442a78dc33adfd8d5ca1e9b95910a3ff1db64ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bccace48f8c350df346b72442a78dc33adfd8d5ca1e9b95910a3ff1db64ff6->enter($__internal_f2bccace48f8c350df346b72442a78dc33adfd8d5ca1e9b95910a3ff1db64ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_f2bccace48f8c350df346b72442a78dc33adfd8d5ca1e9b95910a3ff1db64ff6->leave($__internal_f2bccace48f8c350df346b72442a78dc33adfd8d5ca1e9b95910a3ff1db64ff6_prof);

        
        $__internal_6d17b5dbe30e7e9bb047f59c61e38bd0b1f16c71ee8b0e36e55b3c548c751c64->leave($__internal_6d17b5dbe30e7e9bb047f59c61e38bd0b1f16c71ee8b0e36e55b3c548c751c64_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a494316904e26884f0989b88916852a8d2e00bf895cd4f608e6930b90f4e8f2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a494316904e26884f0989b88916852a8d2e00bf895cd4f608e6930b90f4e8f2a->enter($__internal_a494316904e26884f0989b88916852a8d2e00bf895cd4f608e6930b90f4e8f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c67ed6a4984b6608254a9877bca7b7fa344e6ea15f9591ed043bff39870bd825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c67ed6a4984b6608254a9877bca7b7fa344e6ea15f9591ed043bff39870bd825->enter($__internal_c67ed6a4984b6608254a9877bca7b7fa344e6ea15f9591ed043bff39870bd825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c67ed6a4984b6608254a9877bca7b7fa344e6ea15f9591ed043bff39870bd825->leave($__internal_c67ed6a4984b6608254a9877bca7b7fa344e6ea15f9591ed043bff39870bd825_prof);

        
        $__internal_a494316904e26884f0989b88916852a8d2e00bf895cd4f608e6930b90f4e8f2a->leave($__internal_a494316904e26884f0989b88916852a8d2e00bf895cd4f608e6930b90f4e8f2a_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Registration/email.txt.twig";
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
", "@PIUser/Registration/email.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
