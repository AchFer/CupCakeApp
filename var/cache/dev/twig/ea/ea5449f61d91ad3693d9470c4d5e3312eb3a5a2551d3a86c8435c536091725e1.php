<?php

/* PIUserBundle:Group:new_content.html.twig */
class __TwigTemplate_670e4e530b6e00bb16f33a4273f59fcc3c8edc3681f5a49d52b80b200c98b1c8 extends Twig_Template
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
        $__internal_0d74f7c58df9ff5671e1119493d4ff701b60dd891b3b8481b377413a93b36181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d74f7c58df9ff5671e1119493d4ff701b60dd891b3b8481b377413a93b36181->enter($__internal_0d74f7c58df9ff5671e1119493d4ff701b60dd891b3b8481b377413a93b36181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:new_content.html.twig"));

        $__internal_29c96c4a2e3e8e73284374a99e34488e9c935ec4b63367bd4c689e7905cdc6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c96c4a2e3e8e73284374a99e34488e9c935ec4b63367bd4c689e7905cdc6fc->enter($__internal_29c96c4a2e3e8e73284374a99e34488e9c935ec4b63367bd4c689e7905cdc6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:new_content.html.twig"));

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
        
        $__internal_0d74f7c58df9ff5671e1119493d4ff701b60dd891b3b8481b377413a93b36181->leave($__internal_0d74f7c58df9ff5671e1119493d4ff701b60dd891b3b8481b377413a93b36181_prof);

        
        $__internal_29c96c4a2e3e8e73284374a99e34488e9c935ec4b63367bd4c689e7905cdc6fc->leave($__internal_29c96c4a2e3e8e73284374a99e34488e9c935ec4b63367bd4c689e7905cdc6fc_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:new_content.html.twig";
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
", "PIUserBundle:Group:new_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/new_content.html.twig");
    }
}
