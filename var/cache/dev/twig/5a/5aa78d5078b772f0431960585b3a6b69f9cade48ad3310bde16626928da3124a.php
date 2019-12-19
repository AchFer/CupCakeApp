<?php

/* @PIUser/Group/show_content.html.twig */
class __TwigTemplate_d6d5b6343ecf81dfdaf200f3e07830cf638182efbc2f8bc9aee7fed075713fbb extends Twig_Template
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
        $__internal_532f7d36439b194f6025240ba3a3ed839207bab15264f1f4a9511fa5075ac02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532f7d36439b194f6025240ba3a3ed839207bab15264f1f4a9511fa5075ac02a->enter($__internal_532f7d36439b194f6025240ba3a3ed839207bab15264f1f4a9511fa5075ac02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/show_content.html.twig"));

        $__internal_543b682be9e4f74b1c83282f52cb1b4620af4bafa0af94bf0cac1fd05574e8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543b682be9e4f74b1c83282f52cb1b4620af4bafa0af94bf0cac1fd05574e8ec->enter($__internal_543b682be9e4f74b1c83282f52cb1b4620af4bafa0af94bf0cac1fd05574e8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_532f7d36439b194f6025240ba3a3ed839207bab15264f1f4a9511fa5075ac02a->leave($__internal_532f7d36439b194f6025240ba3a3ed839207bab15264f1f4a9511fa5075ac02a_prof);

        
        $__internal_543b682be9e4f74b1c83282f52cb1b4620af4bafa0af94bf0cac1fd05574e8ec->leave($__internal_543b682be9e4f74b1c83282f52cb1b4620af4bafa0af94bf0cac1fd05574e8ec_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@PIUser/Group/show_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
