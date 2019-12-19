<?php

/* PIUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_999df675cad905aac7258a5ba04210400fe42dd8fad61e6a11be3dc5235f5e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_daff48b9f81a9dc63132f0cee69d5c637152ed9463fdef7f87810a83388faf4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daff48b9f81a9dc63132f0cee69d5c637152ed9463fdef7f87810a83388faf4c->enter($__internal_daff48b9f81a9dc63132f0cee69d5c637152ed9463fdef7f87810a83388faf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_b390cebefa4ed02b045ca31bed4c52b4459b9a3d354c900d35cac3a3c43353fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b390cebefa4ed02b045ca31bed4c52b4459b9a3d354c900d35cac3a3c43353fa->enter($__internal_b390cebefa4ed02b045ca31bed4c52b4459b9a3d354c900d35cac3a3c43353fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_daff48b9f81a9dc63132f0cee69d5c637152ed9463fdef7f87810a83388faf4c->leave($__internal_daff48b9f81a9dc63132f0cee69d5c637152ed9463fdef7f87810a83388faf4c_prof);

        
        $__internal_b390cebefa4ed02b045ca31bed4c52b4459b9a3d354c900d35cac3a3c43353fa->leave($__internal_b390cebefa4ed02b045ca31bed4c52b4459b9a3d354c900d35cac3a3c43353fa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a741659b415bc7cd4aa93f6dbe2f62d86e84578401cea34737378f68b50d477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a741659b415bc7cd4aa93f6dbe2f62d86e84578401cea34737378f68b50d477->enter($__internal_1a741659b415bc7cd4aa93f6dbe2f62d86e84578401cea34737378f68b50d477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2f7c199bab575d1d044f0ee1a88a19e1345afaa331318bbacb3e806112b95b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f7c199bab575d1d044f0ee1a88a19e1345afaa331318bbacb3e806112b95b20->enter($__internal_2f7c199bab575d1d044f0ee1a88a19e1345afaa331318bbacb3e806112b95b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "PIUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_2f7c199bab575d1d044f0ee1a88a19e1345afaa331318bbacb3e806112b95b20->leave($__internal_2f7c199bab575d1d044f0ee1a88a19e1345afaa331318bbacb3e806112b95b20_prof);

        
        $__internal_1a741659b415bc7cd4aa93f6dbe2f62d86e84578401cea34737378f68b50d477->leave($__internal_1a741659b415bc7cd4aa93f6dbe2f62d86e84578401cea34737378f68b50d477_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
