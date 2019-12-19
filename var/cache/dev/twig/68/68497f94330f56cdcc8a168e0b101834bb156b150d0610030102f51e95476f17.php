<?php

/* @PIUser/Profile/edit_content.html.twig */
class __TwigTemplate_561bc9ba848df87fb53773a866111ad640d3f25dcca902491f8938ea27f4fb78 extends Twig_Template
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
        $__internal_fdd653ccfb0298c20b6e10c768a531d4c5de93135100ab88e83a8508663901b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd653ccfb0298c20b6e10c768a531d4c5de93135100ab88e83a8508663901b2->enter($__internal_fdd653ccfb0298c20b6e10c768a531d4c5de93135100ab88e83a8508663901b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/edit_content.html.twig"));

        $__internal_086d47aadcd8c350965fdc322004df53bd60ef1cb1b5ec454215162fb9f64ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086d47aadcd8c350965fdc322004df53bd60ef1cb1b5ec454215162fb9f64ae8->enter($__internal_086d47aadcd8c350965fdc322004df53bd60ef1cb1b5ec454215162fb9f64ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/edit_content.html.twig"));

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
        
        $__internal_fdd653ccfb0298c20b6e10c768a531d4c5de93135100ab88e83a8508663901b2->leave($__internal_fdd653ccfb0298c20b6e10c768a531d4c5de93135100ab88e83a8508663901b2_prof);

        
        $__internal_086d47aadcd8c350965fdc322004df53bd60ef1cb1b5ec454215162fb9f64ae8->leave($__internal_086d47aadcd8c350965fdc322004df53bd60ef1cb1b5ec454215162fb9f64ae8_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Profile/edit_content.html.twig";
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
", "@PIUser/Profile/edit_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
