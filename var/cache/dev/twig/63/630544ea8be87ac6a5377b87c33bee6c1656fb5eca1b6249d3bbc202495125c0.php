<?php

/* @PIUser/Group/edit.html.twig */
class __TwigTemplate_011bbbff9c191a1fb7699679b274b73ef541b4fbe09c4fd608ffdf3525efeaad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Group/edit.html.twig", 1);
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
        $__internal_c5e5dcb3493c55b97bf76dd5c0c289f89e0a43306eecab7cb33ee76cebca6b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e5dcb3493c55b97bf76dd5c0c289f89e0a43306eecab7cb33ee76cebca6b01->enter($__internal_c5e5dcb3493c55b97bf76dd5c0c289f89e0a43306eecab7cb33ee76cebca6b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/edit.html.twig"));

        $__internal_490a14917d73cd9a7690db5565a234207060f0ce2f432123ebf8a0b8c27287ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490a14917d73cd9a7690db5565a234207060f0ce2f432123ebf8a0b8c27287ca->enter($__internal_490a14917d73cd9a7690db5565a234207060f0ce2f432123ebf8a0b8c27287ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5e5dcb3493c55b97bf76dd5c0c289f89e0a43306eecab7cb33ee76cebca6b01->leave($__internal_c5e5dcb3493c55b97bf76dd5c0c289f89e0a43306eecab7cb33ee76cebca6b01_prof);

        
        $__internal_490a14917d73cd9a7690db5565a234207060f0ce2f432123ebf8a0b8c27287ca->leave($__internal_490a14917d73cd9a7690db5565a234207060f0ce2f432123ebf8a0b8c27287ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ded2152391d857599f3ac180996599414a7daf948fca92f2d4fc28eb3852bd4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded2152391d857599f3ac180996599414a7daf948fca92f2d4fc28eb3852bd4e->enter($__internal_ded2152391d857599f3ac180996599414a7daf948fca92f2d4fc28eb3852bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_719959ed4ba630fafc1b60753212f97677e872ec53f47c112e03c6fb9a248ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719959ed4ba630fafc1b60753212f97677e872ec53f47c112e03c6fb9a248ee1->enter($__internal_719959ed4ba630fafc1b60753212f97677e872ec53f47c112e03c6fb9a248ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@PIUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_719959ed4ba630fafc1b60753212f97677e872ec53f47c112e03c6fb9a248ee1->leave($__internal_719959ed4ba630fafc1b60753212f97677e872ec53f47c112e03c6fb9a248ee1_prof);

        
        $__internal_ded2152391d857599f3ac180996599414a7daf948fca92f2d4fc28eb3852bd4e->leave($__internal_ded2152391d857599f3ac180996599414a7daf948fca92f2d4fc28eb3852bd4e_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/edit.html.twig";
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
", "@PIUser/Group/edit.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
