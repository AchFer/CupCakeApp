<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_30cd8a71a48892cd60ad7808b136b310377ddfe156d9838490697e961ee7217c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a34235f51ae2be0239cbb61be8ecb9318cbe417fbcd98f3908db3cb83136ad6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34235f51ae2be0239cbb61be8ecb9318cbe417fbcd98f3908db3cb83136ad6f->enter($__internal_a34235f51ae2be0239cbb61be8ecb9318cbe417fbcd98f3908db3cb83136ad6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_738ae04bb6fbca903da63a8a223615dcf81a79942a5d9dd54472ba707749dcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_738ae04bb6fbca903da63a8a223615dcf81a79942a5d9dd54472ba707749dcf0->enter($__internal_738ae04bb6fbca903da63a8a223615dcf81a79942a5d9dd54472ba707749dcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a34235f51ae2be0239cbb61be8ecb9318cbe417fbcd98f3908db3cb83136ad6f->leave($__internal_a34235f51ae2be0239cbb61be8ecb9318cbe417fbcd98f3908db3cb83136ad6f_prof);

        
        $__internal_738ae04bb6fbca903da63a8a223615dcf81a79942a5d9dd54472ba707749dcf0->leave($__internal_738ae04bb6fbca903da63a8a223615dcf81a79942a5d9dd54472ba707749dcf0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85f3244e1d9154da507cf95e4cf9e6c53ce831bc138e2b2decfaa0433f92c4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85f3244e1d9154da507cf95e4cf9e6c53ce831bc138e2b2decfaa0433f92c4a6->enter($__internal_85f3244e1d9154da507cf95e4cf9e6c53ce831bc138e2b2decfaa0433f92c4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9b80451717026cf9dc8d0781727d9d5c27a3589d05f6fbbf62252d698bb3eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b80451717026cf9dc8d0781727d9d5c27a3589d05f6fbbf62252d698bb3eb3->enter($__internal_c9b80451717026cf9dc8d0781727d9d5c27a3589d05f6fbbf62252d698bb3eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9b80451717026cf9dc8d0781727d9d5c27a3589d05f6fbbf62252d698bb3eb3->leave($__internal_c9b80451717026cf9dc8d0781727d9d5c27a3589d05f6fbbf62252d698bb3eb3_prof);

        
        $__internal_85f3244e1d9154da507cf95e4cf9e6c53ce831bc138e2b2decfaa0433f92c4a6->leave($__internal_85f3244e1d9154da507cf95e4cf9e6c53ce831bc138e2b2decfaa0433f92c4a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bdd4ed54d9d9313cffc33113b630ddb2af0e655d2e3e3206100eae03739fecfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd4ed54d9d9313cffc33113b630ddb2af0e655d2e3e3206100eae03739fecfc->enter($__internal_bdd4ed54d9d9313cffc33113b630ddb2af0e655d2e3e3206100eae03739fecfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_024006ed35d43b788261a4c5e786368eac43979c5b4871c406dd53e41bda7b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024006ed35d43b788261a4c5e786368eac43979c5b4871c406dd53e41bda7b35->enter($__internal_024006ed35d43b788261a4c5e786368eac43979c5b4871c406dd53e41bda7b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_024006ed35d43b788261a4c5e786368eac43979c5b4871c406dd53e41bda7b35->leave($__internal_024006ed35d43b788261a4c5e786368eac43979c5b4871c406dd53e41bda7b35_prof);

        
        $__internal_bdd4ed54d9d9313cffc33113b630ddb2af0e655d2e3e3206100eae03739fecfc->leave($__internal_bdd4ed54d9d9313cffc33113b630ddb2af0e655d2e3e3206100eae03739fecfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de843476764ed8c87e0c7dd0f1536c1127fc6054d087cee0469c83657cb48e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de843476764ed8c87e0c7dd0f1536c1127fc6054d087cee0469c83657cb48e3c->enter($__internal_de843476764ed8c87e0c7dd0f1536c1127fc6054d087cee0469c83657cb48e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8480fa5c65d69243a3e3bf726b5214367969e4ea7a36572dca9cd837ac0c93fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8480fa5c65d69243a3e3bf726b5214367969e4ea7a36572dca9cd837ac0c93fd->enter($__internal_8480fa5c65d69243a3e3bf726b5214367969e4ea7a36572dca9cd837ac0c93fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_8480fa5c65d69243a3e3bf726b5214367969e4ea7a36572dca9cd837ac0c93fd->leave($__internal_8480fa5c65d69243a3e3bf726b5214367969e4ea7a36572dca9cd837ac0c93fd_prof);

        
        $__internal_de843476764ed8c87e0c7dd0f1536c1127fc6054d087cee0469c83657cb48e3c->leave($__internal_de843476764ed8c87e0c7dd0f1536c1127fc6054d087cee0469c83657cb48e3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
