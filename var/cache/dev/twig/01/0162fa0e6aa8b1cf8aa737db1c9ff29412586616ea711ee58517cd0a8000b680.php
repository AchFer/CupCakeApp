<?php

/* PIUserBundle:Group:show.html.twig */
class __TwigTemplate_cb1fc0aab3c44981f3673af0aeddcd05c572b6e6e65f398c3cbd36a1bb032060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Group:show.html.twig", 1);
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
        $__internal_c74a0f029b4717c0d6502c6d8c5c56dc2d1b27a54e7cb3519441562a44c29e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74a0f029b4717c0d6502c6d8c5c56dc2d1b27a54e7cb3519441562a44c29e1a->enter($__internal_c74a0f029b4717c0d6502c6d8c5c56dc2d1b27a54e7cb3519441562a44c29e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:show.html.twig"));

        $__internal_1beb7545432e8877338d3f911594d3145aabe27c1eec7c8a7a5c6e47f1bda0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1beb7545432e8877338d3f911594d3145aabe27c1eec7c8a7a5c6e47f1bda0f4->enter($__internal_1beb7545432e8877338d3f911594d3145aabe27c1eec7c8a7a5c6e47f1bda0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c74a0f029b4717c0d6502c6d8c5c56dc2d1b27a54e7cb3519441562a44c29e1a->leave($__internal_c74a0f029b4717c0d6502c6d8c5c56dc2d1b27a54e7cb3519441562a44c29e1a_prof);

        
        $__internal_1beb7545432e8877338d3f911594d3145aabe27c1eec7c8a7a5c6e47f1bda0f4->leave($__internal_1beb7545432e8877338d3f911594d3145aabe27c1eec7c8a7a5c6e47f1bda0f4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63531934a173d560504bd66788a2aa78eb19c82b0d76a48cb9a8e47ba77ae17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63531934a173d560504bd66788a2aa78eb19c82b0d76a48cb9a8e47ba77ae17c->enter($__internal_63531934a173d560504bd66788a2aa78eb19c82b0d76a48cb9a8e47ba77ae17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9a70eada4ac10d0bc2044cada114f356fa77828fc4e0de1bfb28976d8bfeebc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a70eada4ac10d0bc2044cada114f356fa77828fc4e0de1bfb28976d8bfeebc0->enter($__internal_9a70eada4ac10d0bc2044cada114f356fa77828fc4e0de1bfb28976d8bfeebc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "PIUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_9a70eada4ac10d0bc2044cada114f356fa77828fc4e0de1bfb28976d8bfeebc0->leave($__internal_9a70eada4ac10d0bc2044cada114f356fa77828fc4e0de1bfb28976d8bfeebc0_prof);

        
        $__internal_63531934a173d560504bd66788a2aa78eb19c82b0d76a48cb9a8e47ba77ae17c->leave($__internal_63531934a173d560504bd66788a2aa78eb19c82b0d76a48cb9a8e47ba77ae17c_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Group:show.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/show.html.twig");
    }
}
