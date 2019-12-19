<?php

/* PIUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_564e9fb64cd4797170c96af047c6508eaacae4dd968358851dd68138e21d07ab extends Twig_Template
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
        $__internal_1885b62cd77ba1a2fa86eb63bcfec5ff6e2dd61199679cacdf6b95b552788b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1885b62cd77ba1a2fa86eb63bcfec5ff6e2dd61199679cacdf6b95b552788b9a->enter($__internal_1885b62cd77ba1a2fa86eb63bcfec5ff6e2dd61199679cacdf6b95b552788b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:email.txt.twig"));

        $__internal_dbc9f9132ca333597129f4688e5200c6bea52c1611daeebf0a43d78e5d540322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc9f9132ca333597129f4688e5200c6bea52c1611daeebf0a43d78e5d540322->enter($__internal_dbc9f9132ca333597129f4688e5200c6bea52c1611daeebf0a43d78e5d540322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1885b62cd77ba1a2fa86eb63bcfec5ff6e2dd61199679cacdf6b95b552788b9a->leave($__internal_1885b62cd77ba1a2fa86eb63bcfec5ff6e2dd61199679cacdf6b95b552788b9a_prof);

        
        $__internal_dbc9f9132ca333597129f4688e5200c6bea52c1611daeebf0a43d78e5d540322->leave($__internal_dbc9f9132ca333597129f4688e5200c6bea52c1611daeebf0a43d78e5d540322_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_55781a1d355e14a1073d9945081995e2e1ab8a30e4e3c8a1b1599904c7e7b9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55781a1d355e14a1073d9945081995e2e1ab8a30e4e3c8a1b1599904c7e7b9cb->enter($__internal_55781a1d355e14a1073d9945081995e2e1ab8a30e4e3c8a1b1599904c7e7b9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_05982743f6cb1c57f1e67df66c021d92d5ab0e03bc63980bd82c191115e423bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05982743f6cb1c57f1e67df66c021d92d5ab0e03bc63980bd82c191115e423bb->enter($__internal_05982743f6cb1c57f1e67df66c021d92d5ab0e03bc63980bd82c191115e423bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_05982743f6cb1c57f1e67df66c021d92d5ab0e03bc63980bd82c191115e423bb->leave($__internal_05982743f6cb1c57f1e67df66c021d92d5ab0e03bc63980bd82c191115e423bb_prof);

        
        $__internal_55781a1d355e14a1073d9945081995e2e1ab8a30e4e3c8a1b1599904c7e7b9cb->leave($__internal_55781a1d355e14a1073d9945081995e2e1ab8a30e4e3c8a1b1599904c7e7b9cb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ec3d6090affece4be8bd61631d77559daaa4d97852b3b0c5a5555fbb877b7a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3d6090affece4be8bd61631d77559daaa4d97852b3b0c5a5555fbb877b7a54->enter($__internal_ec3d6090affece4be8bd61631d77559daaa4d97852b3b0c5a5555fbb877b7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_3d731890b4a91272c1f611ea9ee7e86d895b3ef944a66c42a156ed796a6ea522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d731890b4a91272c1f611ea9ee7e86d895b3ef944a66c42a156ed796a6ea522->enter($__internal_3d731890b4a91272c1f611ea9ee7e86d895b3ef944a66c42a156ed796a6ea522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_3d731890b4a91272c1f611ea9ee7e86d895b3ef944a66c42a156ed796a6ea522->leave($__internal_3d731890b4a91272c1f611ea9ee7e86d895b3ef944a66c42a156ed796a6ea522_prof);

        
        $__internal_ec3d6090affece4be8bd61631d77559daaa4d97852b3b0c5a5555fbb877b7a54->leave($__internal_ec3d6090affece4be8bd61631d77559daaa4d97852b3b0c5a5555fbb877b7a54_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5fac3272b711cbfbfa56c52ff19f4ebcaca6f5510748bf932ffea9f24f3af389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fac3272b711cbfbfa56c52ff19f4ebcaca6f5510748bf932ffea9f24f3af389->enter($__internal_5fac3272b711cbfbfa56c52ff19f4ebcaca6f5510748bf932ffea9f24f3af389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_51cf56d6862c0c2b5f19c64592a13be825a5bb1e89fafa6d0400a4a567eb943b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51cf56d6862c0c2b5f19c64592a13be825a5bb1e89fafa6d0400a4a567eb943b->enter($__internal_51cf56d6862c0c2b5f19c64592a13be825a5bb1e89fafa6d0400a4a567eb943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_51cf56d6862c0c2b5f19c64592a13be825a5bb1e89fafa6d0400a4a567eb943b->leave($__internal_51cf56d6862c0c2b5f19c64592a13be825a5bb1e89fafa6d0400a4a567eb943b_prof);

        
        $__internal_5fac3272b711cbfbfa56c52ff19f4ebcaca6f5510748bf932ffea9f24f3af389->leave($__internal_5fac3272b711cbfbfa56c52ff19f4ebcaca6f5510748bf932ffea9f24f3af389_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:email.txt.twig";
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
", "PIUserBundle:Resetting:email.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
