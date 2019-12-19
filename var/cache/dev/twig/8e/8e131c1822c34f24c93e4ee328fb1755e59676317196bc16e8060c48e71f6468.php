<?php

/* PIUserBundle:ChangePassword:change_password_content.html.twig */
class __TwigTemplate_64a2bebebeb5f05bb1c1fac273db6e12b003ce7bac251a4823a91f323677a1ed extends Twig_Template
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
        $__internal_5db7b05585c8b25c61789c724d6fc32b982817cd976857987b886da22f18db8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5db7b05585c8b25c61789c724d6fc32b982817cd976857987b886da22f18db8b->enter($__internal_5db7b05585c8b25c61789c724d6fc32b982817cd976857987b886da22f18db8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:ChangePassword:change_password_content.html.twig"));

        $__internal_37afe18fd3f8bc1df87c8068df10f1e7ed5844335e3576e88e1d7dd499bf7e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37afe18fd3f8bc1df87c8068df10f1e7ed5844335e3576e88e1d7dd499bf7e4e->enter($__internal_37afe18fd3f8bc1df87c8068df10f1e7ed5844335e3576e88e1d7dd499bf7e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:ChangePassword:change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_5db7b05585c8b25c61789c724d6fc32b982817cd976857987b886da22f18db8b->leave($__internal_5db7b05585c8b25c61789c724d6fc32b982817cd976857987b886da22f18db8b_prof);

        
        $__internal_37afe18fd3f8bc1df87c8068df10f1e7ed5844335e3576e88e1d7dd499bf7e4e->leave($__internal_37afe18fd3f8bc1df87c8068df10f1e7ed5844335e3576e88e1d7dd499bf7e4e_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:ChangePassword:change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "PIUserBundle:ChangePassword:change_password_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/ChangePassword/change_password_content.html.twig");
    }
}
