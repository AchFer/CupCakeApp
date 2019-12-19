<?php

/* PIUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_ba91c4beb8e14f4e7bba67b62a6029e6f10ee5ad05414eac9a5ea3a87d9a14b7 extends Twig_Template
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
        $__internal_b265abae8b3e9c96ffa04c3da050c8f6aeb8609e2818ef03a44ab81b8319c5f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b265abae8b3e9c96ffa04c3da050c8f6aeb8609e2818ef03a44ab81b8319c5f7->enter($__internal_b265abae8b3e9c96ffa04c3da050c8f6aeb8609e2818ef03a44ab81b8319c5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:edit_content.html.twig"));

        $__internal_63449ea7607daeacb130a50b2ee070b9d623fe4e3a83dbd58696cd8423dad126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63449ea7607daeacb130a50b2ee070b9d623fe4e3a83dbd58696cd8423dad126->enter($__internal_63449ea7607daeacb130a50b2ee070b9d623fe4e3a83dbd58696cd8423dad126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_b265abae8b3e9c96ffa04c3da050c8f6aeb8609e2818ef03a44ab81b8319c5f7->leave($__internal_b265abae8b3e9c96ffa04c3da050c8f6aeb8609e2818ef03a44ab81b8319c5f7_prof);

        
        $__internal_63449ea7607daeacb130a50b2ee070b9d623fe4e3a83dbd58696cd8423dad126->leave($__internal_63449ea7607daeacb130a50b2ee070b9d623fe4e3a83dbd58696cd8423dad126_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "PIUserBundle:Profile:edit_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Profile/edit_content.html.twig");
    }
}
