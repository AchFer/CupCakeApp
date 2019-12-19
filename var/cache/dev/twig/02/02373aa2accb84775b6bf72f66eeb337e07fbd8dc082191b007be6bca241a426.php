<?php

/* @PIUser/Group/list.html.twig */
class __TwigTemplate_1a3e28c6d3bd4712aa3bec332c28216d711a1e606d5b4129e2f66703f22ad939 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Group/list.html.twig", 1);
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
        $__internal_50cdcfaa2a0639ac52540e9335178578a2720cefebb9de449a06ab9ad6d154f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cdcfaa2a0639ac52540e9335178578a2720cefebb9de449a06ab9ad6d154f8->enter($__internal_50cdcfaa2a0639ac52540e9335178578a2720cefebb9de449a06ab9ad6d154f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/list.html.twig"));

        $__internal_61f1350eaacc28a45402c164aee943aa1ac3a5530ba7af6ada520d79a6e3f04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f1350eaacc28a45402c164aee943aa1ac3a5530ba7af6ada520d79a6e3f04b->enter($__internal_61f1350eaacc28a45402c164aee943aa1ac3a5530ba7af6ada520d79a6e3f04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50cdcfaa2a0639ac52540e9335178578a2720cefebb9de449a06ab9ad6d154f8->leave($__internal_50cdcfaa2a0639ac52540e9335178578a2720cefebb9de449a06ab9ad6d154f8_prof);

        
        $__internal_61f1350eaacc28a45402c164aee943aa1ac3a5530ba7af6ada520d79a6e3f04b->leave($__internal_61f1350eaacc28a45402c164aee943aa1ac3a5530ba7af6ada520d79a6e3f04b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28ec5ba99997d6011a78659a60f9a69277fcf683c79302fc71d82f00d3c345df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ec5ba99997d6011a78659a60f9a69277fcf683c79302fc71d82f00d3c345df->enter($__internal_28ec5ba99997d6011a78659a60f9a69277fcf683c79302fc71d82f00d3c345df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_957356d5836f851fba8a85da99a29c2956d955cc6badc7b0e390a31bfdd0164d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957356d5836f851fba8a85da99a29c2956d955cc6badc7b0e390a31bfdd0164d->enter($__internal_957356d5836f851fba8a85da99a29c2956d955cc6badc7b0e390a31bfdd0164d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@PIUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_957356d5836f851fba8a85da99a29c2956d955cc6badc7b0e390a31bfdd0164d->leave($__internal_957356d5836f851fba8a85da99a29c2956d955cc6badc7b0e390a31bfdd0164d_prof);

        
        $__internal_28ec5ba99997d6011a78659a60f9a69277fcf683c79302fc71d82f00d3c345df->leave($__internal_28ec5ba99997d6011a78659a60f9a69277fcf683c79302fc71d82f00d3c345df_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Group/list.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\list.html.twig");
    }
}
