<?php

/* PIUserBundle:Group:edit.html.twig */
class __TwigTemplate_fccd67ff175be36f2acc1fa2c325ca26dbb2b99efe38ddef130034f935f913f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5c52977a007facbfea9fb43e697a58549c02af783493ecf6b05266eef6404b2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c52977a007facbfea9fb43e697a58549c02af783493ecf6b05266eef6404b2c->enter($__internal_5c52977a007facbfea9fb43e697a58549c02af783493ecf6b05266eef6404b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:edit.html.twig"));

        $__internal_21518cf472196384474d0fb56c7e1f3312a87f4d825acc7e0c47ca875e3f20eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21518cf472196384474d0fb56c7e1f3312a87f4d825acc7e0c47ca875e3f20eb->enter($__internal_21518cf472196384474d0fb56c7e1f3312a87f4d825acc7e0c47ca875e3f20eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c52977a007facbfea9fb43e697a58549c02af783493ecf6b05266eef6404b2c->leave($__internal_5c52977a007facbfea9fb43e697a58549c02af783493ecf6b05266eef6404b2c_prof);

        
        $__internal_21518cf472196384474d0fb56c7e1f3312a87f4d825acc7e0c47ca875e3f20eb->leave($__internal_21518cf472196384474d0fb56c7e1f3312a87f4d825acc7e0c47ca875e3f20eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db0cfcc61945b5a31b5df180449c5ba90265b7762d2a123916657ed93aee3756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0cfcc61945b5a31b5df180449c5ba90265b7762d2a123916657ed93aee3756->enter($__internal_db0cfcc61945b5a31b5df180449c5ba90265b7762d2a123916657ed93aee3756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16ce51bcfeba062a881dafdb968ec6aa60931a752a9f79fa23f9af2ba8836675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ce51bcfeba062a881dafdb968ec6aa60931a752a9f79fa23f9af2ba8836675->enter($__internal_16ce51bcfeba062a881dafdb968ec6aa60931a752a9f79fa23f9af2ba8836675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "PIUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_16ce51bcfeba062a881dafdb968ec6aa60931a752a9f79fa23f9af2ba8836675->leave($__internal_16ce51bcfeba062a881dafdb968ec6aa60931a752a9f79fa23f9af2ba8836675_prof);

        
        $__internal_db0cfcc61945b5a31b5df180449c5ba90265b7762d2a123916657ed93aee3756->leave($__internal_db0cfcc61945b5a31b5df180449c5ba90265b7762d2a123916657ed93aee3756_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Group:edit.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/edit.html.twig");
    }
}
