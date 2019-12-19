<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_2a7727787f43d0f72105324d1a93ccd6613b9bf282b6b33e87971ff29d157f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56b525b04e11e79d4f7043c9e25964326291b005e16fa337d1fc38a3049d7a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56b525b04e11e79d4f7043c9e25964326291b005e16fa337d1fc38a3049d7a39->enter($__internal_56b525b04e11e79d4f7043c9e25964326291b005e16fa337d1fc38a3049d7a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0d028fe416428c6ed45d32100f2caaa9b6da04e82838c715b5a6d906b4439909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d028fe416428c6ed45d32100f2caaa9b6da04e82838c715b5a6d906b4439909->enter($__internal_0d028fe416428c6ed45d32100f2caaa9b6da04e82838c715b5a6d906b4439909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56b525b04e11e79d4f7043c9e25964326291b005e16fa337d1fc38a3049d7a39->leave($__internal_56b525b04e11e79d4f7043c9e25964326291b005e16fa337d1fc38a3049d7a39_prof);

        
        $__internal_0d028fe416428c6ed45d32100f2caaa9b6da04e82838c715b5a6d906b4439909->leave($__internal_0d028fe416428c6ed45d32100f2caaa9b6da04e82838c715b5a6d906b4439909_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_07f1d556fb499d60f79b225044680f55719af42640a0d873d709e706c89f254c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07f1d556fb499d60f79b225044680f55719af42640a0d873d709e706c89f254c->enter($__internal_07f1d556fb499d60f79b225044680f55719af42640a0d873d709e706c89f254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32a5b7941ce48154893c5ee2774df72f9952e4c576e5611e2dfc9394ed4892ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a5b7941ce48154893c5ee2774df72f9952e4c576e5611e2dfc9394ed4892ca->enter($__internal_32a5b7941ce48154893c5ee2774df72f9952e4c576e5611e2dfc9394ed4892ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_32a5b7941ce48154893c5ee2774df72f9952e4c576e5611e2dfc9394ed4892ca->leave($__internal_32a5b7941ce48154893c5ee2774df72f9952e4c576e5611e2dfc9394ed4892ca_prof);

        
        $__internal_07f1d556fb499d60f79b225044680f55719af42640a0d873d709e706c89f254c->leave($__internal_07f1d556fb499d60f79b225044680f55719af42640a0d873d709e706c89f254c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b8b403cd48f288afa9558423ba66d247f5403ece112993c91c99fab306327a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b8b403cd48f288afa9558423ba66d247f5403ece112993c91c99fab306327a->enter($__internal_e5b8b403cd48f288afa9558423ba66d247f5403ece112993c91c99fab306327a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6cb85004f52218d7d722c7c0869c3416a55b07d376def15ec6af788264cc7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cb85004f52218d7d722c7c0869c3416a55b07d376def15ec6af788264cc7ce->enter($__internal_a6cb85004f52218d7d722c7c0869c3416a55b07d376def15ec6af788264cc7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_a6cb85004f52218d7d722c7c0869c3416a55b07d376def15ec6af788264cc7ce->leave($__internal_a6cb85004f52218d7d722c7c0869c3416a55b07d376def15ec6af788264cc7ce_prof);

        
        $__internal_e5b8b403cd48f288afa9558423ba66d247f5403ece112993c91c99fab306327a->leave($__internal_e5b8b403cd48f288afa9558423ba66d247f5403ece112993c91c99fab306327a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
