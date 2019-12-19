<?php

/* PIUserBundle:Group:list.html.twig */
class __TwigTemplate_c74884bbde5a40633829ee4cf574a3509f50f661bd86bddabee97722513e2d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Group:list.html.twig", 1);
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
        $__internal_daa4d3082ca012120c54947f3c073fb802db26a26f172cea4d06dee3e17b0658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa4d3082ca012120c54947f3c073fb802db26a26f172cea4d06dee3e17b0658->enter($__internal_daa4d3082ca012120c54947f3c073fb802db26a26f172cea4d06dee3e17b0658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:list.html.twig"));

        $__internal_376c7cc7e0eb760f68ce79859871aad990bc941899d203b95cf67d10e2391785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376c7cc7e0eb760f68ce79859871aad990bc941899d203b95cf67d10e2391785->enter($__internal_376c7cc7e0eb760f68ce79859871aad990bc941899d203b95cf67d10e2391785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daa4d3082ca012120c54947f3c073fb802db26a26f172cea4d06dee3e17b0658->leave($__internal_daa4d3082ca012120c54947f3c073fb802db26a26f172cea4d06dee3e17b0658_prof);

        
        $__internal_376c7cc7e0eb760f68ce79859871aad990bc941899d203b95cf67d10e2391785->leave($__internal_376c7cc7e0eb760f68ce79859871aad990bc941899d203b95cf67d10e2391785_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7080d312e97f20a7dd2693882e9e49cbe52d56b158fc50950adaf69e388361c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7080d312e97f20a7dd2693882e9e49cbe52d56b158fc50950adaf69e388361c1->enter($__internal_7080d312e97f20a7dd2693882e9e49cbe52d56b158fc50950adaf69e388361c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f02211341b45e0017080349b0e4ad11b54e9b0f678e642195e24d313b817e0b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02211341b45e0017080349b0e4ad11b54e9b0f678e642195e24d313b817e0b0->enter($__internal_f02211341b45e0017080349b0e4ad11b54e9b0f678e642195e24d313b817e0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "PIUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f02211341b45e0017080349b0e4ad11b54e9b0f678e642195e24d313b817e0b0->leave($__internal_f02211341b45e0017080349b0e4ad11b54e9b0f678e642195e24d313b817e0b0_prof);

        
        $__internal_7080d312e97f20a7dd2693882e9e49cbe52d56b158fc50950adaf69e388361c1->leave($__internal_7080d312e97f20a7dd2693882e9e49cbe52d56b158fc50950adaf69e388361c1_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Group:list.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/list.html.twig");
    }
}
