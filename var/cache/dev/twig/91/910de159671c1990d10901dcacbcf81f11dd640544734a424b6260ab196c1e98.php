<?php

/* @PIUser/Group/new_content.html.twig */
class __TwigTemplate_acb0cc1a1e8bc7fb9d2803e0c61bc7cea69fe11ceea59306ae1abca9a2508a5e extends Twig_Template
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
        $__internal_6e2f246e001e36e11012bf00ce570dd46b8ca8bae28ce424ad12e4ccdf3ef3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2f246e001e36e11012bf00ce570dd46b8ca8bae28ce424ad12e4ccdf3ef3e4->enter($__internal_6e2f246e001e36e11012bf00ce570dd46b8ca8bae28ce424ad12e4ccdf3ef3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/new_content.html.twig"));

        $__internal_74268f59398cf8d2042dea8716e1921d4866de27ad8d2a96c4056cdf0b60cdde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74268f59398cf8d2042dea8716e1921d4866de27ad8d2a96c4056cdf0b60cdde->enter($__internal_74268f59398cf8d2042dea8716e1921d4866de27ad8d2a96c4056cdf0b60cdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_6e2f246e001e36e11012bf00ce570dd46b8ca8bae28ce424ad12e4ccdf3ef3e4->leave($__internal_6e2f246e001e36e11012bf00ce570dd46b8ca8bae28ce424ad12e4ccdf3ef3e4_prof);

        
        $__internal_74268f59398cf8d2042dea8716e1921d4866de27ad8d2a96c4056cdf0b60cdde->leave($__internal_74268f59398cf8d2042dea8716e1921d4866de27ad8d2a96c4056cdf0b60cdde_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/new_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@PIUser/Group/new_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\new_content.html.twig");
    }
}
