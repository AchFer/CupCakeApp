<?php

/* PIUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_39c810a1089bdfa10e8aab7f663ffd25a6a0e4d8cac32ac7eaf4158363c94a04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_61b3fcc522b3173b067f93ed4afa6e7b4413e5ced6837aad98f89d48dd9c6250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b3fcc522b3173b067f93ed4afa6e7b4413e5ced6837aad98f89d48dd9c6250->enter($__internal_61b3fcc522b3173b067f93ed4afa6e7b4413e5ced6837aad98f89d48dd9c6250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:confirmed.html.twig"));

        $__internal_52589c02e149ea82464e66988f6ff10117cd0e327420b2ba2df90e244dfe6092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52589c02e149ea82464e66988f6ff10117cd0e327420b2ba2df90e244dfe6092->enter($__internal_52589c02e149ea82464e66988f6ff10117cd0e327420b2ba2df90e244dfe6092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b3fcc522b3173b067f93ed4afa6e7b4413e5ced6837aad98f89d48dd9c6250->leave($__internal_61b3fcc522b3173b067f93ed4afa6e7b4413e5ced6837aad98f89d48dd9c6250_prof);

        
        $__internal_52589c02e149ea82464e66988f6ff10117cd0e327420b2ba2df90e244dfe6092->leave($__internal_52589c02e149ea82464e66988f6ff10117cd0e327420b2ba2df90e244dfe6092_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d11d9e28c12854cdfa017f953e86d56d426d55dbb8b796191c36b8ee55698111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11d9e28c12854cdfa017f953e86d56d426d55dbb8b796191c36b8ee55698111->enter($__internal_d11d9e28c12854cdfa017f953e86d56d426d55dbb8b796191c36b8ee55698111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1503bb9f45ee1fa1076bbcc3b17295da7cfe8d678678a3cee0b0a95e53391553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1503bb9f45ee1fa1076bbcc3b17295da7cfe8d678678a3cee0b0a95e53391553->enter($__internal_1503bb9f45ee1fa1076bbcc3b17295da7cfe8d678678a3cee0b0a95e53391553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1503bb9f45ee1fa1076bbcc3b17295da7cfe8d678678a3cee0b0a95e53391553->leave($__internal_1503bb9f45ee1fa1076bbcc3b17295da7cfe8d678678a3cee0b0a95e53391553_prof);

        
        $__internal_d11d9e28c12854cdfa017f953e86d56d426d55dbb8b796191c36b8ee55698111->leave($__internal_d11d9e28c12854cdfa017f953e86d56d426d55dbb8b796191c36b8ee55698111_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "PIUserBundle:Registration:confirmed.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
