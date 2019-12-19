<?php

/* @PIUser/Profile/show.html.twig */
class __TwigTemplate_eecbc75760afbe98716afe682f2b9e049c4f869df8c97cceefd7abcca4daf0a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Profile/show.html.twig", 1);
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
        $__internal_37a03474a9030a1a1e902654ad7e0a0dfcc841914cb42c7aaf08f4645573f34c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37a03474a9030a1a1e902654ad7e0a0dfcc841914cb42c7aaf08f4645573f34c->enter($__internal_37a03474a9030a1a1e902654ad7e0a0dfcc841914cb42c7aaf08f4645573f34c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/show.html.twig"));

        $__internal_1625af6ea291f1721b9cfb4500c5154aa869a674a504266b96adbd7e3e333f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1625af6ea291f1721b9cfb4500c5154aa869a674a504266b96adbd7e3e333f24->enter($__internal_1625af6ea291f1721b9cfb4500c5154aa869a674a504266b96adbd7e3e333f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37a03474a9030a1a1e902654ad7e0a0dfcc841914cb42c7aaf08f4645573f34c->leave($__internal_37a03474a9030a1a1e902654ad7e0a0dfcc841914cb42c7aaf08f4645573f34c_prof);

        
        $__internal_1625af6ea291f1721b9cfb4500c5154aa869a674a504266b96adbd7e3e333f24->leave($__internal_1625af6ea291f1721b9cfb4500c5154aa869a674a504266b96adbd7e3e333f24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe5cf42a4fa75bd64a4b1647b1703b84cc6d61aef6737b645d7deff400f2f201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5cf42a4fa75bd64a4b1647b1703b84cc6d61aef6737b645d7deff400f2f201->enter($__internal_fe5cf42a4fa75bd64a4b1647b1703b84cc6d61aef6737b645d7deff400f2f201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d7faf38bed396a8614bffae31b09e8b9201c0bd0e7dacc7f5eac50e76f8d21af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7faf38bed396a8614bffae31b09e8b9201c0bd0e7dacc7f5eac50e76f8d21af->enter($__internal_d7faf38bed396a8614bffae31b09e8b9201c0bd0e7dacc7f5eac50e76f8d21af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@PIUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_d7faf38bed396a8614bffae31b09e8b9201c0bd0e7dacc7f5eac50e76f8d21af->leave($__internal_d7faf38bed396a8614bffae31b09e8b9201c0bd0e7dacc7f5eac50e76f8d21af_prof);

        
        $__internal_fe5cf42a4fa75bd64a4b1647b1703b84cc6d61aef6737b645d7deff400f2f201->leave($__internal_fe5cf42a4fa75bd64a4b1647b1703b84cc6d61aef6737b645d7deff400f2f201_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Profile/show.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
