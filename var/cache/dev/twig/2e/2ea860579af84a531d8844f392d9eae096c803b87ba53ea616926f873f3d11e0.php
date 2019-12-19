<?php

/* PIUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_213353e53bf2dc780283bf8e82e6bd936dfc318e4e10003acdc6f795c1493835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53de7254cdd5181f504ef6255405360c55b85d208451ecbb5d6fe53e36f0ed9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53de7254cdd5181f504ef6255405360c55b85d208451ecbb5d6fe53e36f0ed9f->enter($__internal_53de7254cdd5181f504ef6255405360c55b85d208451ecbb5d6fe53e36f0ed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:show_content.html.twig"));

        $__internal_f20116cac4fcf87ed956a77066bc1a5fbbf5b64a579c62a908d549fd7627b59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20116cac4fcf87ed956a77066bc1a5fbbf5b64a579c62a908d549fd7627b59f->enter($__internal_f20116cac4fcf87ed956a77066bc1a5fbbf5b64a579c62a908d549fd7627b59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_53de7254cdd5181f504ef6255405360c55b85d208451ecbb5d6fe53e36f0ed9f->leave($__internal_53de7254cdd5181f504ef6255405360c55b85d208451ecbb5d6fe53e36f0ed9f_prof);

        
        $__internal_f20116cac4fcf87ed956a77066bc1a5fbbf5b64a579c62a908d549fd7627b59f->leave($__internal_f20116cac4fcf87ed956a77066bc1a5fbbf5b64a579c62a908d549fd7627b59f_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "PIUserBundle:Profile:show_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Profile/show_content.html.twig");
    }
}
