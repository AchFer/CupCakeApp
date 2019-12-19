<?php

/* @PIUser/Resetting/reset.html.twig */
class __TwigTemplate_31026478e9a526079f19c8539f91c5459fe1c4b83bc5a5a3d461637ec03d2984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Resetting/reset.html.twig", 1);
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
        $__internal_81707b3724d4b418a49f053c039bc03903998b8f61c143a0cfd8e04c55777fd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81707b3724d4b418a49f053c039bc03903998b8f61c143a0cfd8e04c55777fd8->enter($__internal_81707b3724d4b418a49f053c039bc03903998b8f61c143a0cfd8e04c55777fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/reset.html.twig"));

        $__internal_e47a9a1e8fa4e903380c2bb0d0f9a4ec7950beaaf500276ed5b6aa48b696ed1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47a9a1e8fa4e903380c2bb0d0f9a4ec7950beaaf500276ed5b6aa48b696ed1b->enter($__internal_e47a9a1e8fa4e903380c2bb0d0f9a4ec7950beaaf500276ed5b6aa48b696ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81707b3724d4b418a49f053c039bc03903998b8f61c143a0cfd8e04c55777fd8->leave($__internal_81707b3724d4b418a49f053c039bc03903998b8f61c143a0cfd8e04c55777fd8_prof);

        
        $__internal_e47a9a1e8fa4e903380c2bb0d0f9a4ec7950beaaf500276ed5b6aa48b696ed1b->leave($__internal_e47a9a1e8fa4e903380c2bb0d0f9a4ec7950beaaf500276ed5b6aa48b696ed1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_499c7941e3eae2b9a8489e6675f7aeb812a552fd46e9ce7756ee1702ed684807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499c7941e3eae2b9a8489e6675f7aeb812a552fd46e9ce7756ee1702ed684807->enter($__internal_499c7941e3eae2b9a8489e6675f7aeb812a552fd46e9ce7756ee1702ed684807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_12babcf904be471fba65161701e04ed3758b2ca31abd94fb9da8f79f4051aeb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12babcf904be471fba65161701e04ed3758b2ca31abd94fb9da8f79f4051aeb8->enter($__internal_12babcf904be471fba65161701e04ed3758b2ca31abd94fb9da8f79f4051aeb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@PIUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_12babcf904be471fba65161701e04ed3758b2ca31abd94fb9da8f79f4051aeb8->leave($__internal_12babcf904be471fba65161701e04ed3758b2ca31abd94fb9da8f79f4051aeb8_prof);

        
        $__internal_499c7941e3eae2b9a8489e6675f7aeb812a552fd46e9ce7756ee1702ed684807->leave($__internal_499c7941e3eae2b9a8489e6675f7aeb812a552fd46e9ce7756ee1702ed684807_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Resetting/reset.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
