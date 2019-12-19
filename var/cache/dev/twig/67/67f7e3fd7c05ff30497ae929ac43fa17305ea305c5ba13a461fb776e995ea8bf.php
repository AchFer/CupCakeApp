<?php

/* @PIUser/Group/new.html.twig */
class __TwigTemplate_95fa72753e008c9e2e798060c494948948630b52d3f56257582153538a6e1c04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Group/new.html.twig", 1);
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
        $__internal_2df68b0aba4fa7dac25d20cfb403307620d4d3173bb2dda2fd4469ac89687729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df68b0aba4fa7dac25d20cfb403307620d4d3173bb2dda2fd4469ac89687729->enter($__internal_2df68b0aba4fa7dac25d20cfb403307620d4d3173bb2dda2fd4469ac89687729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/new.html.twig"));

        $__internal_eb867b53dd59f5f7bf73397845710258221569073a5e616861d7afcafb847384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb867b53dd59f5f7bf73397845710258221569073a5e616861d7afcafb847384->enter($__internal_eb867b53dd59f5f7bf73397845710258221569073a5e616861d7afcafb847384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df68b0aba4fa7dac25d20cfb403307620d4d3173bb2dda2fd4469ac89687729->leave($__internal_2df68b0aba4fa7dac25d20cfb403307620d4d3173bb2dda2fd4469ac89687729_prof);

        
        $__internal_eb867b53dd59f5f7bf73397845710258221569073a5e616861d7afcafb847384->leave($__internal_eb867b53dd59f5f7bf73397845710258221569073a5e616861d7afcafb847384_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bed6e82b07257bf3d87c7c5b5f037b24a5fb4686deed17719226ccfbef3d5533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed6e82b07257bf3d87c7c5b5f037b24a5fb4686deed17719226ccfbef3d5533->enter($__internal_bed6e82b07257bf3d87c7c5b5f037b24a5fb4686deed17719226ccfbef3d5533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2814442104a0e5f753261a0f6945f269f03c8cca75f018311eba64d13ba81933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2814442104a0e5f753261a0f6945f269f03c8cca75f018311eba64d13ba81933->enter($__internal_2814442104a0e5f753261a0f6945f269f03c8cca75f018311eba64d13ba81933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@PIUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_2814442104a0e5f753261a0f6945f269f03c8cca75f018311eba64d13ba81933->leave($__internal_2814442104a0e5f753261a0f6945f269f03c8cca75f018311eba64d13ba81933_prof);

        
        $__internal_bed6e82b07257bf3d87c7c5b5f037b24a5fb4686deed17719226ccfbef3d5533->leave($__internal_bed6e82b07257bf3d87c7c5b5f037b24a5fb4686deed17719226ccfbef3d5533_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/new.html.twig";
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
", "@PIUser/Group/new.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\new.html.twig");
    }
}
