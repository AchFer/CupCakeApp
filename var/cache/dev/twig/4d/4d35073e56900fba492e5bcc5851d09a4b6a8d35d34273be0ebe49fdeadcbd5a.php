<?php

/* PIUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9b650d7f3ced90f2524064e41af2873305d893ac90245135425862153928be73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_24cc595b88e5fce81b185bae9e5eb86bb350154a943c5a4df5ac4bf69926b29e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24cc595b88e5fce81b185bae9e5eb86bb350154a943c5a4df5ac4bf69926b29e->enter($__internal_24cc595b88e5fce81b185bae9e5eb86bb350154a943c5a4df5ac4bf69926b29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:check_email.html.twig"));

        $__internal_e15518c2abe3b3da8165ce014c62636c4ca10095ffd5793fabf9379589ccbffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15518c2abe3b3da8165ce014c62636c4ca10095ffd5793fabf9379589ccbffc->enter($__internal_e15518c2abe3b3da8165ce014c62636c4ca10095ffd5793fabf9379589ccbffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24cc595b88e5fce81b185bae9e5eb86bb350154a943c5a4df5ac4bf69926b29e->leave($__internal_24cc595b88e5fce81b185bae9e5eb86bb350154a943c5a4df5ac4bf69926b29e_prof);

        
        $__internal_e15518c2abe3b3da8165ce014c62636c4ca10095ffd5793fabf9379589ccbffc->leave($__internal_e15518c2abe3b3da8165ce014c62636c4ca10095ffd5793fabf9379589ccbffc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f30a67c43bdc1d6191a55ca58059311f7ffbf836d3ee95a5d32cb6d4163c6b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30a67c43bdc1d6191a55ca58059311f7ffbf836d3ee95a5d32cb6d4163c6b3e->enter($__internal_f30a67c43bdc1d6191a55ca58059311f7ffbf836d3ee95a5d32cb6d4163c6b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fb5d5a3b479818a2920ed076fbefda4fc36c097d69c199d65e3b9c9ffa99f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb5d5a3b479818a2920ed076fbefda4fc36c097d69c199d65e3b9c9ffa99f7f->enter($__internal_8fb5d5a3b479818a2920ed076fbefda4fc36c097d69c199d65e3b9c9ffa99f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_8fb5d5a3b479818a2920ed076fbefda4fc36c097d69c199d65e3b9c9ffa99f7f->leave($__internal_8fb5d5a3b479818a2920ed076fbefda4fc36c097d69c199d65e3b9c9ffa99f7f_prof);

        
        $__internal_f30a67c43bdc1d6191a55ca58059311f7ffbf836d3ee95a5d32cb6d4163c6b3e->leave($__internal_f30a67c43bdc1d6191a55ca58059311f7ffbf836d3ee95a5d32cb6d4163c6b3e_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "PIUserBundle:Resetting:check_email.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
