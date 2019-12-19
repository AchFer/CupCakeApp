<?php

/* PIUserBundle:Profile:edit.html.twig */
class __TwigTemplate_b7a35242904da2b2005cbdecc2f8012b1bad86da1a37cbd9acd2eeb61967196a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_00113008b3b879a352c1bd342484776e38ab38d60b96bb98b8b1408ca09b1584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00113008b3b879a352c1bd342484776e38ab38d60b96bb98b8b1408ca09b1584->enter($__internal_00113008b3b879a352c1bd342484776e38ab38d60b96bb98b8b1408ca09b1584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:edit.html.twig"));

        $__internal_526c6f1c469c37bbcc91e9907ab9c52be0e6b46da334ea349d5843673a3eb66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526c6f1c469c37bbcc91e9907ab9c52be0e6b46da334ea349d5843673a3eb66f->enter($__internal_526c6f1c469c37bbcc91e9907ab9c52be0e6b46da334ea349d5843673a3eb66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00113008b3b879a352c1bd342484776e38ab38d60b96bb98b8b1408ca09b1584->leave($__internal_00113008b3b879a352c1bd342484776e38ab38d60b96bb98b8b1408ca09b1584_prof);

        
        $__internal_526c6f1c469c37bbcc91e9907ab9c52be0e6b46da334ea349d5843673a3eb66f->leave($__internal_526c6f1c469c37bbcc91e9907ab9c52be0e6b46da334ea349d5843673a3eb66f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e02c2c23d28ded111ddd5a95ec0d64f5ec21d3e8f670d7a0421c99f41331f88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02c2c23d28ded111ddd5a95ec0d64f5ec21d3e8f670d7a0421c99f41331f88e->enter($__internal_e02c2c23d28ded111ddd5a95ec0d64f5ec21d3e8f670d7a0421c99f41331f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7ba02fedd03a5c43e001c39eb46c10ae008c18c4bf88a32205ea68f027605741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba02fedd03a5c43e001c39eb46c10ae008c18c4bf88a32205ea68f027605741->enter($__internal_7ba02fedd03a5c43e001c39eb46c10ae008c18c4bf88a32205ea68f027605741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "PIUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7ba02fedd03a5c43e001c39eb46c10ae008c18c4bf88a32205ea68f027605741->leave($__internal_7ba02fedd03a5c43e001c39eb46c10ae008c18c4bf88a32205ea68f027605741_prof);

        
        $__internal_e02c2c23d28ded111ddd5a95ec0d64f5ec21d3e8f670d7a0421c99f41331f88e->leave($__internal_e02c2c23d28ded111ddd5a95ec0d64f5ec21d3e8f670d7a0421c99f41331f88e_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Profile:edit.html.twig";
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
", "PIUserBundle:Profile:edit.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
