<?php

/* @PIUser/Profile/edit.html.twig */
class __TwigTemplate_eef3bf3af873f3bc2d884006ea112b9c12a833f224312c45580c381ffd58f758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Profile/edit.html.twig", 1);
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
        $__internal_6fedfaacd8d8dd6fbe35fcebee8362c266179df3dcc237009d2f9960b09603df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fedfaacd8d8dd6fbe35fcebee8362c266179df3dcc237009d2f9960b09603df->enter($__internal_6fedfaacd8d8dd6fbe35fcebee8362c266179df3dcc237009d2f9960b09603df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/edit.html.twig"));

        $__internal_6ed979f26b8b2740c06c7d4f766233d49573b3ffdca2539ab551468f5c3a4da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed979f26b8b2740c06c7d4f766233d49573b3ffdca2539ab551468f5c3a4da7->enter($__internal_6ed979f26b8b2740c06c7d4f766233d49573b3ffdca2539ab551468f5c3a4da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fedfaacd8d8dd6fbe35fcebee8362c266179df3dcc237009d2f9960b09603df->leave($__internal_6fedfaacd8d8dd6fbe35fcebee8362c266179df3dcc237009d2f9960b09603df_prof);

        
        $__internal_6ed979f26b8b2740c06c7d4f766233d49573b3ffdca2539ab551468f5c3a4da7->leave($__internal_6ed979f26b8b2740c06c7d4f766233d49573b3ffdca2539ab551468f5c3a4da7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e8730827ed2dd48267cad8084aa82dabf3debf7f2c8290aaa2a0c17bff50284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e8730827ed2dd48267cad8084aa82dabf3debf7f2c8290aaa2a0c17bff50284->enter($__internal_6e8730827ed2dd48267cad8084aa82dabf3debf7f2c8290aaa2a0c17bff50284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dae9e5fcfd562cf1368762d446babdedd16f88ab0904753b9699bb5a043a1ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae9e5fcfd562cf1368762d446babdedd16f88ab0904753b9699bb5a043a1ce4->enter($__internal_dae9e5fcfd562cf1368762d446babdedd16f88ab0904753b9699bb5a043a1ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@PIUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_dae9e5fcfd562cf1368762d446babdedd16f88ab0904753b9699bb5a043a1ce4->leave($__internal_dae9e5fcfd562cf1368762d446babdedd16f88ab0904753b9699bb5a043a1ce4_prof);

        
        $__internal_6e8730827ed2dd48267cad8084aa82dabf3debf7f2c8290aaa2a0c17bff50284->leave($__internal_6e8730827ed2dd48267cad8084aa82dabf3debf7f2c8290aaa2a0c17bff50284_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Profile/edit.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
