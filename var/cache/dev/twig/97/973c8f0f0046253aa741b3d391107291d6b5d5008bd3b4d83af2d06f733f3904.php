<?php

/* @PIUser/Registration/confirmed.html.twig */
class __TwigTemplate_42297418f561af5eb482f9081599a5a4391395722d310ce8677e1275f3dd52f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Registration/confirmed.html.twig", 1);
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
        $__internal_9daa75af9b3b3e3a0dd3a7c9b1178ad2acd54d4123d380913774d4edcd58fae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9daa75af9b3b3e3a0dd3a7c9b1178ad2acd54d4123d380913774d4edcd58fae7->enter($__internal_9daa75af9b3b3e3a0dd3a7c9b1178ad2acd54d4123d380913774d4edcd58fae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/confirmed.html.twig"));

        $__internal_6f318565afd98bcb9300b4ce90c1b84e9268c2ecf5b1f9e8296d51e43d6e167e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f318565afd98bcb9300b4ce90c1b84e9268c2ecf5b1f9e8296d51e43d6e167e->enter($__internal_6f318565afd98bcb9300b4ce90c1b84e9268c2ecf5b1f9e8296d51e43d6e167e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9daa75af9b3b3e3a0dd3a7c9b1178ad2acd54d4123d380913774d4edcd58fae7->leave($__internal_9daa75af9b3b3e3a0dd3a7c9b1178ad2acd54d4123d380913774d4edcd58fae7_prof);

        
        $__internal_6f318565afd98bcb9300b4ce90c1b84e9268c2ecf5b1f9e8296d51e43d6e167e->leave($__internal_6f318565afd98bcb9300b4ce90c1b84e9268c2ecf5b1f9e8296d51e43d6e167e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3775b56fc9f48eb5459910eb6006ebfff0fa2cfd59ad26154fea33c2316cb1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3775b56fc9f48eb5459910eb6006ebfff0fa2cfd59ad26154fea33c2316cb1c4->enter($__internal_3775b56fc9f48eb5459910eb6006ebfff0fa2cfd59ad26154fea33c2316cb1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f16fac1a206e84f95e5708dddbb6e19b7c1ca4608172ac3c5940580ad80a2170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16fac1a206e84f95e5708dddbb6e19b7c1ca4608172ac3c5940580ad80a2170->enter($__internal_f16fac1a206e84f95e5708dddbb6e19b7c1ca4608172ac3c5940580ad80a2170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f16fac1a206e84f95e5708dddbb6e19b7c1ca4608172ac3c5940580ad80a2170->leave($__internal_f16fac1a206e84f95e5708dddbb6e19b7c1ca4608172ac3c5940580ad80a2170_prof);

        
        $__internal_3775b56fc9f48eb5459910eb6006ebfff0fa2cfd59ad26154fea33c2316cb1c4->leave($__internal_3775b56fc9f48eb5459910eb6006ebfff0fa2cfd59ad26154fea33c2316cb1c4_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Registration/confirmed.html.twig";
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
", "@PIUser/Registration/confirmed.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
