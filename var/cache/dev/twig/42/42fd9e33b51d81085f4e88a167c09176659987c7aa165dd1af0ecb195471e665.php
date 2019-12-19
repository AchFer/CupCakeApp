<?php

/* PIUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f913820a81a7b0f1189079c1fdcdce8ba50a4856cecaf091baf088b6274f0e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_42643d753da66fb1c5f03050ebbd4b12030de283163afbfb1d7715e7e0474cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42643d753da66fb1c5f03050ebbd4b12030de283163afbfb1d7715e7e0474cb2->enter($__internal_42643d753da66fb1c5f03050ebbd4b12030de283163afbfb1d7715e7e0474cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:check_email.html.twig"));

        $__internal_cc88f582bc863f3e9efa7f717fe3772f1afbc249f7d90647f7470959512c0224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc88f582bc863f3e9efa7f717fe3772f1afbc249f7d90647f7470959512c0224->enter($__internal_cc88f582bc863f3e9efa7f717fe3772f1afbc249f7d90647f7470959512c0224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42643d753da66fb1c5f03050ebbd4b12030de283163afbfb1d7715e7e0474cb2->leave($__internal_42643d753da66fb1c5f03050ebbd4b12030de283163afbfb1d7715e7e0474cb2_prof);

        
        $__internal_cc88f582bc863f3e9efa7f717fe3772f1afbc249f7d90647f7470959512c0224->leave($__internal_cc88f582bc863f3e9efa7f717fe3772f1afbc249f7d90647f7470959512c0224_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04f325174b12b1cfad9683cb241df8d207de08632332dc5935eba847bb4ee269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f325174b12b1cfad9683cb241df8d207de08632332dc5935eba847bb4ee269->enter($__internal_04f325174b12b1cfad9683cb241df8d207de08632332dc5935eba847bb4ee269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_551bbaf4eed33509ea96bfd4af28f4a052314416be50f356964837485bec27f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551bbaf4eed33509ea96bfd4af28f4a052314416be50f356964837485bec27f7->enter($__internal_551bbaf4eed33509ea96bfd4af28f4a052314416be50f356964837485bec27f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_551bbaf4eed33509ea96bfd4af28f4a052314416be50f356964837485bec27f7->leave($__internal_551bbaf4eed33509ea96bfd4af28f4a052314416be50f356964837485bec27f7_prof);

        
        $__internal_04f325174b12b1cfad9683cb241df8d207de08632332dc5935eba847bb4ee269->leave($__internal_04f325174b12b1cfad9683cb241df8d207de08632332dc5935eba847bb4ee269_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "PIUserBundle:Registration:check_email.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Registration/check_email.html.twig");
    }
}
