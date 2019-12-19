<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_af005e96253d1cf23dd515b50063693d3e511f5155b508c9537e5cc0df2a604f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff508f9e3fdda1e35f61227e7c53e28d2c094c3b7313a5bc6ee880bd863dbcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff508f9e3fdda1e35f61227e7c53e28d2c094c3b7313a5bc6ee880bd863dbcc3->enter($__internal_ff508f9e3fdda1e35f61227e7c53e28d2c094c3b7313a5bc6ee880bd863dbcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_1e2d6eaaefbd41b23c4326c16376d567d67dd0e4a681662d5a4d3fd7c84d6afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e2d6eaaefbd41b23c4326c16376d567d67dd0e4a681662d5a4d3fd7c84d6afd->enter($__internal_1e2d6eaaefbd41b23c4326c16376d567d67dd0e4a681662d5a4d3fd7c84d6afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff508f9e3fdda1e35f61227e7c53e28d2c094c3b7313a5bc6ee880bd863dbcc3->leave($__internal_ff508f9e3fdda1e35f61227e7c53e28d2c094c3b7313a5bc6ee880bd863dbcc3_prof);

        
        $__internal_1e2d6eaaefbd41b23c4326c16376d567d67dd0e4a681662d5a4d3fd7c84d6afd->leave($__internal_1e2d6eaaefbd41b23c4326c16376d567d67dd0e4a681662d5a4d3fd7c84d6afd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b791f05fc01e861a1f7b16e70c019d3568d5d3976fac43a2cac82f2ae7717af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b791f05fc01e861a1f7b16e70c019d3568d5d3976fac43a2cac82f2ae7717af->enter($__internal_1b791f05fc01e861a1f7b16e70c019d3568d5d3976fac43a2cac82f2ae7717af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd72d52083107001ae58edb7e08b25a93cc679990b1887a6bb8a399e7e98dbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72d52083107001ae58edb7e08b25a93cc679990b1887a6bb8a399e7e98dbdf->enter($__internal_cd72d52083107001ae58edb7e08b25a93cc679990b1887a6bb8a399e7e98dbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cd72d52083107001ae58edb7e08b25a93cc679990b1887a6bb8a399e7e98dbdf->leave($__internal_cd72d52083107001ae58edb7e08b25a93cc679990b1887a6bb8a399e7e98dbdf_prof);

        
        $__internal_1b791f05fc01e861a1f7b16e70c019d3568d5d3976fac43a2cac82f2ae7717af->leave($__internal_1b791f05fc01e861a1f7b16e70c019d3568d5d3976fac43a2cac82f2ae7717af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
