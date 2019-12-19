<?php

/* @PIUser/Profile/show_content.html.twig */
class __TwigTemplate_bfb838a099314795b1fa69ab200e530c4e3a44588c525641c6258c4988abd19c extends Twig_Template
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
        $__internal_9a8eec9ca8992b56fb7489f9876935b850871a126d75bb6e1fdaa75724c189b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8eec9ca8992b56fb7489f9876935b850871a126d75bb6e1fdaa75724c189b6->enter($__internal_9a8eec9ca8992b56fb7489f9876935b850871a126d75bb6e1fdaa75724c189b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/show_content.html.twig"));

        $__internal_aa7ebd22643c930ca864a4bca7b83cecb40c2419781adcac30bbb225e84ef1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7ebd22643c930ca864a4bca7b83cecb40c2419781adcac30bbb225e84ef1de->enter($__internal_aa7ebd22643c930ca864a4bca7b83cecb40c2419781adcac30bbb225e84ef1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/show_content.html.twig"));

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
        
        $__internal_9a8eec9ca8992b56fb7489f9876935b850871a126d75bb6e1fdaa75724c189b6->leave($__internal_9a8eec9ca8992b56fb7489f9876935b850871a126d75bb6e1fdaa75724c189b6_prof);

        
        $__internal_aa7ebd22643c930ca864a4bca7b83cecb40c2419781adcac30bbb225e84ef1de->leave($__internal_aa7ebd22643c930ca864a4bca7b83cecb40c2419781adcac30bbb225e84ef1de_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Profile/show_content.html.twig";
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
", "@PIUser/Profile/show_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
