<?php

/* PIUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_b1a5249d7f65ed3c6840a36cd66ee0df4da7acfcf4ecc159ed08100b5040151a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_d7a887b96f28030405f3db16a6a34d73703b9c0e81b7d6198dfbd6c7568de726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a887b96f28030405f3db16a6a34d73703b9c0e81b7d6198dfbd6c7568de726->enter($__internal_d7a887b96f28030405f3db16a6a34d73703b9c0e81b7d6198dfbd6c7568de726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:reset.html.twig"));

        $__internal_8fa55054f9bab773f8fa92867a7e2ab17d77386b9006d8e242cadd9ad0ebcd82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fa55054f9bab773f8fa92867a7e2ab17d77386b9006d8e242cadd9ad0ebcd82->enter($__internal_8fa55054f9bab773f8fa92867a7e2ab17d77386b9006d8e242cadd9ad0ebcd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a887b96f28030405f3db16a6a34d73703b9c0e81b7d6198dfbd6c7568de726->leave($__internal_d7a887b96f28030405f3db16a6a34d73703b9c0e81b7d6198dfbd6c7568de726_prof);

        
        $__internal_8fa55054f9bab773f8fa92867a7e2ab17d77386b9006d8e242cadd9ad0ebcd82->leave($__internal_8fa55054f9bab773f8fa92867a7e2ab17d77386b9006d8e242cadd9ad0ebcd82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a8adce07c6363bec3fd52362b0fb66b548704a0653f78f889f4cb88370e1732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8adce07c6363bec3fd52362b0fb66b548704a0653f78f889f4cb88370e1732->enter($__internal_2a8adce07c6363bec3fd52362b0fb66b548704a0653f78f889f4cb88370e1732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c4ef4aa640e71ff0077226b0977cc4d17b6bed23bbff8e91f38994371af0a977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ef4aa640e71ff0077226b0977cc4d17b6bed23bbff8e91f38994371af0a977->enter($__internal_c4ef4aa640e71ff0077226b0977cc4d17b6bed23bbff8e91f38994371af0a977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "PIUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c4ef4aa640e71ff0077226b0977cc4d17b6bed23bbff8e91f38994371af0a977->leave($__internal_c4ef4aa640e71ff0077226b0977cc4d17b6bed23bbff8e91f38994371af0a977_prof);

        
        $__internal_2a8adce07c6363bec3fd52362b0fb66b548704a0653f78f889f4cb88370e1732->leave($__internal_2a8adce07c6363bec3fd52362b0fb66b548704a0653f78f889f4cb88370e1732_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:reset.html.twig";
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
", "PIUserBundle:Resetting:reset.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
