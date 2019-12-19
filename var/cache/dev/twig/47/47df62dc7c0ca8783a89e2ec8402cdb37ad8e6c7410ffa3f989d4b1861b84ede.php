<?php

/* @PIUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_191b8aad1e12a9644d4c47252008cf7aee9386fb09b07d2108785a3476414378 extends Twig_Template
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
        $__internal_f566936056ec2ea5af95e4da021b686405e6137c4e951a7e2a9941eb10850c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f566936056ec2ea5af95e4da021b686405e6137c4e951a7e2a9941eb10850c8d->enter($__internal_f566936056ec2ea5af95e4da021b686405e6137c4e951a7e2a9941eb10850c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/ChangePassword/change_password_content.html.twig"));

        $__internal_6748424be8fd32a1325f7b281e2061835ba1dba2b5f4e6cf8bc662aaa6a255a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6748424be8fd32a1325f7b281e2061835ba1dba2b5f4e6cf8bc662aaa6a255a7->enter($__internal_6748424be8fd32a1325f7b281e2061835ba1dba2b5f4e6cf8bc662aaa6a255a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/ChangePassword/change_password_content.html.twig"));

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
        
        $__internal_f566936056ec2ea5af95e4da021b686405e6137c4e951a7e2a9941eb10850c8d->leave($__internal_f566936056ec2ea5af95e4da021b686405e6137c4e951a7e2a9941eb10850c8d_prof);

        
        $__internal_6748424be8fd32a1325f7b281e2061835ba1dba2b5f4e6cf8bc662aaa6a255a7->leave($__internal_6748424be8fd32a1325f7b281e2061835ba1dba2b5f4e6cf8bc662aaa6a255a7_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/ChangePassword/change_password_content.html.twig";
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
", "@PIUser/ChangePassword/change_password_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
