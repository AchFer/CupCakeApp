<?php

/* PIUserBundle:Group:new.html.twig */
class __TwigTemplate_c603474e07b5dcb833758c1e9309ec382539dd01211d2159a785be8af4bde196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Group:new.html.twig", 1);
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
        $__internal_da997cf10fed472b0e9175add9be8a6f658b6f6d39117b05ed99a13bfd7aef04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da997cf10fed472b0e9175add9be8a6f658b6f6d39117b05ed99a13bfd7aef04->enter($__internal_da997cf10fed472b0e9175add9be8a6f658b6f6d39117b05ed99a13bfd7aef04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:new.html.twig"));

        $__internal_9372eced28491ad30f770b42968ef70caced8b8c41aa5ee8d625f749c775d7b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9372eced28491ad30f770b42968ef70caced8b8c41aa5ee8d625f749c775d7b2->enter($__internal_9372eced28491ad30f770b42968ef70caced8b8c41aa5ee8d625f749c775d7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da997cf10fed472b0e9175add9be8a6f658b6f6d39117b05ed99a13bfd7aef04->leave($__internal_da997cf10fed472b0e9175add9be8a6f658b6f6d39117b05ed99a13bfd7aef04_prof);

        
        $__internal_9372eced28491ad30f770b42968ef70caced8b8c41aa5ee8d625f749c775d7b2->leave($__internal_9372eced28491ad30f770b42968ef70caced8b8c41aa5ee8d625f749c775d7b2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f8145c3bcd74ad5c60bbf9923f190a8b00ca3ae138c68ffd837d0bbe7c535fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8145c3bcd74ad5c60bbf9923f190a8b00ca3ae138c68ffd837d0bbe7c535fe->enter($__internal_5f8145c3bcd74ad5c60bbf9923f190a8b00ca3ae138c68ffd837d0bbe7c535fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c544c8ed6eaa49f0072b3de06e22a078311eb3f9c2c6f5ae67951b6018b6e0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c544c8ed6eaa49f0072b3de06e22a078311eb3f9c2c6f5ae67951b6018b6e0b6->enter($__internal_c544c8ed6eaa49f0072b3de06e22a078311eb3f9c2c6f5ae67951b6018b6e0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "PIUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c544c8ed6eaa49f0072b3de06e22a078311eb3f9c2c6f5ae67951b6018b6e0b6->leave($__internal_c544c8ed6eaa49f0072b3de06e22a078311eb3f9c2c6f5ae67951b6018b6e0b6_prof);

        
        $__internal_5f8145c3bcd74ad5c60bbf9923f190a8b00ca3ae138c68ffd837d0bbe7c535fe->leave($__internal_5f8145c3bcd74ad5c60bbf9923f190a8b00ca3ae138c68ffd837d0bbe7c535fe_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Group:new.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/new.html.twig");
    }
}
