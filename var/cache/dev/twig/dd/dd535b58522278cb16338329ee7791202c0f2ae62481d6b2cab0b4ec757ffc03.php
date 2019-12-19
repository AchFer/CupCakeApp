<?php

/* @PIUser/Registration/register.html.twig */
class __TwigTemplate_df3693535cd0aea2ebcfa95c3c86ed0f29ffe3a8a9d22648f8319a991882d81e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd04c2e0121fb5fad32cc3050998fc05fd469c1187d65de24878eb231fbc99e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04c2e0121fb5fad32cc3050998fc05fd469c1187d65de24878eb231fbc99e5->enter($__internal_bd04c2e0121fb5fad32cc3050998fc05fd469c1187d65de24878eb231fbc99e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/register.html.twig"));

        $__internal_2f48421eae22379169231c844511f2d9d8c3ec8bfe8de14a4683234be7eda432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f48421eae22379169231c844511f2d9d8c3ec8bfe8de14a4683234be7eda432->enter($__internal_2f48421eae22379169231c844511f2d9d8c3ec8bfe8de14a4683234be7eda432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd04c2e0121fb5fad32cc3050998fc05fd469c1187d65de24878eb231fbc99e5->leave($__internal_bd04c2e0121fb5fad32cc3050998fc05fd469c1187d65de24878eb231fbc99e5_prof);

        
        $__internal_2f48421eae22379169231c844511f2d9d8c3ec8bfe8de14a4683234be7eda432->leave($__internal_2f48421eae22379169231c844511f2d9d8c3ec8bfe8de14a4683234be7eda432_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b46fc661b5f38318401e922279fc3f0ada799a699a3f12a5a6ceb8c112a18331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46fc661b5f38318401e922279fc3f0ada799a699a3f12a5a6ceb8c112a18331->enter($__internal_b46fc661b5f38318401e922279fc3f0ada799a699a3f12a5a6ceb8c112a18331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d5a8adc2818c7cfd171aaa14abd8147c8c3aa50716527083cdff035e21a75134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a8adc2818c7cfd171aaa14abd8147c8c3aa50716527083cdff035e21a75134->enter($__internal_d5a8adc2818c7cfd171aaa14abd8147c8c3aa50716527083cdff035e21a75134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@PIUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d5a8adc2818c7cfd171aaa14abd8147c8c3aa50716527083cdff035e21a75134->leave($__internal_d5a8adc2818c7cfd171aaa14abd8147c8c3aa50716527083cdff035e21a75134_prof);

        
        $__internal_b46fc661b5f38318401e922279fc3f0ada799a699a3f12a5a6ceb8c112a18331->leave($__internal_b46fc661b5f38318401e922279fc3f0ada799a699a3f12a5a6ceb8c112a18331_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Registration/register.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
