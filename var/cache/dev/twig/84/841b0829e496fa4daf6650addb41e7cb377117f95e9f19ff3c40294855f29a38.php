<?php

/* PIUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_37ec83665f6606dd19b824e5bac8ffb6bece47cba8c81edb1adcd2d5ad8cc5cb extends Twig_Template
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
        $__internal_8f72a9531a75b13120b94879d405c0e7403a06e6cbcffc3641b59f72e8ae6de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f72a9531a75b13120b94879d405c0e7403a06e6cbcffc3641b59f72e8ae6de3->enter($__internal_8f72a9531a75b13120b94879d405c0e7403a06e6cbcffc3641b59f72e8ae6de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:register_content.html.twig"));

        $__internal_6990c6abb7072e996ccde3fc50b37a9727cb7498a3f2eb4741ffba9bc608018f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6990c6abb7072e996ccde3fc50b37a9727cb7498a3f2eb4741ffba9bc608018f->enter($__internal_6990c6abb7072e996ccde3fc50b37a9727cb7498a3f2eb4741ffba9bc608018f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_8f72a9531a75b13120b94879d405c0e7403a06e6cbcffc3641b59f72e8ae6de3->leave($__internal_8f72a9531a75b13120b94879d405c0e7403a06e6cbcffc3641b59f72e8ae6de3_prof);

        
        $__internal_6990c6abb7072e996ccde3fc50b37a9727cb7498a3f2eb4741ffba9bc608018f->leave($__internal_6990c6abb7072e996ccde3fc50b37a9727cb7498a3f2eb4741ffba9bc608018f_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Registration:register_content.html.twig";
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

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "PIUserBundle:Registration:register_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Registration/register_content.html.twig");
    }
}
