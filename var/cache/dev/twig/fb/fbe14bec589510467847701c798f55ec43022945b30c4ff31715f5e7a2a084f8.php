<?php

/* @PIUser/Resetting/reset_content.html.twig */
class __TwigTemplate_21bed90032ff328f9996178d3d7fd99ced6aa1b5320308c80be8ced7d860d3b3 extends Twig_Template
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
        $__internal_91a07c1ea7893501539d3adfe96151a4e80267e9e87e7d234ba020ba9e483128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a07c1ea7893501539d3adfe96151a4e80267e9e87e7d234ba020ba9e483128->enter($__internal_91a07c1ea7893501539d3adfe96151a4e80267e9e87e7d234ba020ba9e483128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/reset_content.html.twig"));

        $__internal_b56a3562aa590ae0d39d2930ddba432f7a7ed2608e39a2fe32aab85112e23f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56a3562aa590ae0d39d2930ddba432f7a7ed2608e39a2fe32aab85112e23f72->enter($__internal_b56a3562aa590ae0d39d2930ddba432f7a7ed2608e39a2fe32aab85112e23f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/reset_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_91a07c1ea7893501539d3adfe96151a4e80267e9e87e7d234ba020ba9e483128->leave($__internal_91a07c1ea7893501539d3adfe96151a4e80267e9e87e7d234ba020ba9e483128_prof);

        
        $__internal_b56a3562aa590ae0d39d2930ddba432f7a7ed2608e39a2fe32aab85112e23f72->leave($__internal_b56a3562aa590ae0d39d2930ddba432f7a7ed2608e39a2fe32aab85112e23f72_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/reset_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@PIUser/Resetting/reset_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\reset_content.html.twig");
    }
}
