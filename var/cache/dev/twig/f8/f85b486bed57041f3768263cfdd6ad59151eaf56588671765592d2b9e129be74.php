<?php

/* PIUserBundle:Profile:show.html.twig */
class __TwigTemplate_d2e5a1e593b9be7a652634568897cc894d2ea43c61dc3e6da525b2c0952e43da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "PIUserBundle:Profile:show.html.twig", 1);
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
        $__internal_13a6c3a991dad19bc386ae332e1f81bba61eb1ee55776d4717a29ef95ca55e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a6c3a991dad19bc386ae332e1f81bba61eb1ee55776d4717a29ef95ca55e7f->enter($__internal_13a6c3a991dad19bc386ae332e1f81bba61eb1ee55776d4717a29ef95ca55e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:show.html.twig"));

        $__internal_b95ef3aabe4175c56074b027598848cf7386b4bfac9124a4b614596029e5645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95ef3aabe4175c56074b027598848cf7386b4bfac9124a4b614596029e5645c->enter($__internal_b95ef3aabe4175c56074b027598848cf7386b4bfac9124a4b614596029e5645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a6c3a991dad19bc386ae332e1f81bba61eb1ee55776d4717a29ef95ca55e7f->leave($__internal_13a6c3a991dad19bc386ae332e1f81bba61eb1ee55776d4717a29ef95ca55e7f_prof);

        
        $__internal_b95ef3aabe4175c56074b027598848cf7386b4bfac9124a4b614596029e5645c->leave($__internal_b95ef3aabe4175c56074b027598848cf7386b4bfac9124a4b614596029e5645c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_492a13917ef87f5da35b68376963d9cec3397f2823a18b28f63ff3ab3c9a2758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_492a13917ef87f5da35b68376963d9cec3397f2823a18b28f63ff3ab3c9a2758->enter($__internal_492a13917ef87f5da35b68376963d9cec3397f2823a18b28f63ff3ab3c9a2758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_842f7750ade4fadc66dd5eee2b9313ef8cfc7124be2a76df1e2373e240177781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842f7750ade4fadc66dd5eee2b9313ef8cfc7124be2a76df1e2373e240177781->enter($__internal_842f7750ade4fadc66dd5eee2b9313ef8cfc7124be2a76df1e2373e240177781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "PIUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_842f7750ade4fadc66dd5eee2b9313ef8cfc7124be2a76df1e2373e240177781->leave($__internal_842f7750ade4fadc66dd5eee2b9313ef8cfc7124be2a76df1e2373e240177781_prof);

        
        $__internal_492a13917ef87f5da35b68376963d9cec3397f2823a18b28f63ff3ab3c9a2758->leave($__internal_492a13917ef87f5da35b68376963d9cec3397f2823a18b28f63ff3ab3c9a2758_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "PIUserBundle:Profile:show.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Profile/show.html.twig");
    }
}
