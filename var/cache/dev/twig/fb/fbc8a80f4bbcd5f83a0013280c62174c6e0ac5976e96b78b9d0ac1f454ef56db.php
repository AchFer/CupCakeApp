<?php

/* @PIUser/Security/login.html.twig */
class __TwigTemplate_7d27fbff270bde1e233920f46fff2ebfeba2cc6b1148c53dfc55d86f6b1f1d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Security/login.html.twig", 1);
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
        $__internal_9d03d3fe92a9e5eeb9044310695b7a479a11f9a65d6a4e9c2124896a3d13a55d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d03d3fe92a9e5eeb9044310695b7a479a11f9a65d6a4e9c2124896a3d13a55d->enter($__internal_9d03d3fe92a9e5eeb9044310695b7a479a11f9a65d6a4e9c2124896a3d13a55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Security/login.html.twig"));

        $__internal_913bd3a6881fb0f42daa72255c539991e6edbd54054ce734dc4fc807e59a1551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913bd3a6881fb0f42daa72255c539991e6edbd54054ce734dc4fc807e59a1551->enter($__internal_913bd3a6881fb0f42daa72255c539991e6edbd54054ce734dc4fc807e59a1551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d03d3fe92a9e5eeb9044310695b7a479a11f9a65d6a4e9c2124896a3d13a55d->leave($__internal_9d03d3fe92a9e5eeb9044310695b7a479a11f9a65d6a4e9c2124896a3d13a55d_prof);

        
        $__internal_913bd3a6881fb0f42daa72255c539991e6edbd54054ce734dc4fc807e59a1551->leave($__internal_913bd3a6881fb0f42daa72255c539991e6edbd54054ce734dc4fc807e59a1551_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d351a466cbb3c339552a1bf53c3fd058d092cf2bacd5a86d04d58d56231e99a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d351a466cbb3c339552a1bf53c3fd058d092cf2bacd5a86d04d58d56231e99a8->enter($__internal_d351a466cbb3c339552a1bf53c3fd058d092cf2bacd5a86d04d58d56231e99a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_662b881a753dad8a9112d094076133fcaea09848c6ea9cb61df85f76c370cf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662b881a753dad8a9112d094076133fcaea09848c6ea9cb61df85f76c370cf2a->enter($__internal_662b881a753dad8a9112d094076133fcaea09848c6ea9cb61df85f76c370cf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_662b881a753dad8a9112d094076133fcaea09848c6ea9cb61df85f76c370cf2a->leave($__internal_662b881a753dad8a9112d094076133fcaea09848c6ea9cb61df85f76c370cf2a_prof);

        
        $__internal_d351a466cbb3c339552a1bf53c3fd058d092cf2bacd5a86d04d58d56231e99a8->leave($__internal_d351a466cbb3c339552a1bf53c3fd058d092cf2bacd5a86d04d58d56231e99a8_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@PIUser/Security/login.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Security\\login.html.twig");
    }
}
