<?php

/* @PIUser/Resetting/check_email.html.twig */
class __TwigTemplate_3e7b5300e19579f91683bccbf9cdcb406d2798ad84199ad92f480888aaa64e7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Resetting/check_email.html.twig", 1);
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
        $__internal_6141bf4c8bff5ff2ee8b3cf9dcdd40532f9eb2923c2e76e94f42f960c4c55d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6141bf4c8bff5ff2ee8b3cf9dcdd40532f9eb2923c2e76e94f42f960c4c55d1e->enter($__internal_6141bf4c8bff5ff2ee8b3cf9dcdd40532f9eb2923c2e76e94f42f960c4c55d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/check_email.html.twig"));

        $__internal_d1fe51373b06f5da7c4f8c81336638047e751b287d76f289a98f6e913a68943b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fe51373b06f5da7c4f8c81336638047e751b287d76f289a98f6e913a68943b->enter($__internal_d1fe51373b06f5da7c4f8c81336638047e751b287d76f289a98f6e913a68943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6141bf4c8bff5ff2ee8b3cf9dcdd40532f9eb2923c2e76e94f42f960c4c55d1e->leave($__internal_6141bf4c8bff5ff2ee8b3cf9dcdd40532f9eb2923c2e76e94f42f960c4c55d1e_prof);

        
        $__internal_d1fe51373b06f5da7c4f8c81336638047e751b287d76f289a98f6e913a68943b->leave($__internal_d1fe51373b06f5da7c4f8c81336638047e751b287d76f289a98f6e913a68943b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eac98a0214f59ce3df57bd9808ea0446b93d2f11216e3cd3dd1649fea193ae08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac98a0214f59ce3df57bd9808ea0446b93d2f11216e3cd3dd1649fea193ae08->enter($__internal_eac98a0214f59ce3df57bd9808ea0446b93d2f11216e3cd3dd1649fea193ae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16424f23938978359c8813a71975810d2ea86600c06b99a18b6b0f047984e5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16424f23938978359c8813a71975810d2ea86600c06b99a18b6b0f047984e5ec->enter($__internal_16424f23938978359c8813a71975810d2ea86600c06b99a18b6b0f047984e5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_16424f23938978359c8813a71975810d2ea86600c06b99a18b6b0f047984e5ec->leave($__internal_16424f23938978359c8813a71975810d2ea86600c06b99a18b6b0f047984e5ec_prof);

        
        $__internal_eac98a0214f59ce3df57bd9808ea0446b93d2f11216e3cd3dd1649fea193ae08->leave($__internal_eac98a0214f59ce3df57bd9808ea0446b93d2f11216e3cd3dd1649fea193ae08_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/check_email.html.twig";
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
", "@PIUser/Resetting/check_email.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
