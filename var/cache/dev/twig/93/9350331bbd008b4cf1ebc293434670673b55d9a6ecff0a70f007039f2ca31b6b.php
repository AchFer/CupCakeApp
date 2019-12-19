<?php

/* PIUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_655d12aa4b67c7f9d79fe1172a4b8ec8ab9eed17b2e713516777ef73603e8869 extends Twig_Template
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
        $__internal_760ae36af92e194d31bbd67393a8c7621dc206e3284b44e95812a11ce4b3aa60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760ae36af92e194d31bbd67393a8c7621dc206e3284b44e95812a11ce4b3aa60->enter($__internal_760ae36af92e194d31bbd67393a8c7621dc206e3284b44e95812a11ce4b3aa60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:reset_content.html.twig"));

        $__internal_e74c0be9a9e43f7c9a11f90003a72299587cd2a06c00da1208a9c3a5683750ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74c0be9a9e43f7c9a11f90003a72299587cd2a06c00da1208a9c3a5683750ed->enter($__internal_e74c0be9a9e43f7c9a11f90003a72299587cd2a06c00da1208a9c3a5683750ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:reset_content.html.twig"));

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
        
        $__internal_760ae36af92e194d31bbd67393a8c7621dc206e3284b44e95812a11ce4b3aa60->leave($__internal_760ae36af92e194d31bbd67393a8c7621dc206e3284b44e95812a11ce4b3aa60_prof);

        
        $__internal_e74c0be9a9e43f7c9a11f90003a72299587cd2a06c00da1208a9c3a5683750ed->leave($__internal_e74c0be9a9e43f7c9a11f90003a72299587cd2a06c00da1208a9c3a5683750ed_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:reset_content.html.twig";
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
", "PIUserBundle:Resetting:reset_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
