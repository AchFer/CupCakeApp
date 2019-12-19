<?php

/* @PIUser/Registration/check_email.html.twig */
class __TwigTemplate_6103248c5dfd9d11b44972a5365652bf1d9a97329aded496a9d9d0b42984da36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Registration/check_email.html.twig", 1);
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
        $__internal_2190c34d0c83cf159332ae342adcc2e368d15431ea82aa21c0dc4245c29a7a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2190c34d0c83cf159332ae342adcc2e368d15431ea82aa21c0dc4245c29a7a3a->enter($__internal_2190c34d0c83cf159332ae342adcc2e368d15431ea82aa21c0dc4245c29a7a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/check_email.html.twig"));

        $__internal_f833d4c69b214efdd9053dbfd521c537604866fb14aa5573dbdc9eef89a6e608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f833d4c69b214efdd9053dbfd521c537604866fb14aa5573dbdc9eef89a6e608->enter($__internal_f833d4c69b214efdd9053dbfd521c537604866fb14aa5573dbdc9eef89a6e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2190c34d0c83cf159332ae342adcc2e368d15431ea82aa21c0dc4245c29a7a3a->leave($__internal_2190c34d0c83cf159332ae342adcc2e368d15431ea82aa21c0dc4245c29a7a3a_prof);

        
        $__internal_f833d4c69b214efdd9053dbfd521c537604866fb14aa5573dbdc9eef89a6e608->leave($__internal_f833d4c69b214efdd9053dbfd521c537604866fb14aa5573dbdc9eef89a6e608_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76fbe26d2af692581c5b908eb5a01be8d314ec638f8f1fe3c33f51708bbadb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76fbe26d2af692581c5b908eb5a01be8d314ec638f8f1fe3c33f51708bbadb74->enter($__internal_76fbe26d2af692581c5b908eb5a01be8d314ec638f8f1fe3c33f51708bbadb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a75f8d8e3cddde94e02b10efdfc0581e6fae2a172c6cd3b1a5ce74cdd40067c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75f8d8e3cddde94e02b10efdfc0581e6fae2a172c6cd3b1a5ce74cdd40067c7->enter($__internal_a75f8d8e3cddde94e02b10efdfc0581e6fae2a172c6cd3b1a5ce74cdd40067c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a75f8d8e3cddde94e02b10efdfc0581e6fae2a172c6cd3b1a5ce74cdd40067c7->leave($__internal_a75f8d8e3cddde94e02b10efdfc0581e6fae2a172c6cd3b1a5ce74cdd40067c7_prof);

        
        $__internal_76fbe26d2af692581c5b908eb5a01be8d314ec638f8f1fe3c33f51708bbadb74->leave($__internal_76fbe26d2af692581c5b908eb5a01be8d314ec638f8f1fe3c33f51708bbadb74_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Registration/check_email.html.twig";
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
", "@PIUser/Registration/check_email.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
