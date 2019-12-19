<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7bfbeb5b0dcc6fec99750112940163adc693ee135148532ff9c6f45935a782fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_363627de2c7c4f48785539d78305548daef20708fe6ec1260a9493a83333548b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363627de2c7c4f48785539d78305548daef20708fe6ec1260a9493a83333548b->enter($__internal_363627de2c7c4f48785539d78305548daef20708fe6ec1260a9493a83333548b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_a7a361d1204b8294b24c625d99092065cda6649502bfd7d8edc0d4347aead8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a361d1204b8294b24c625d99092065cda6649502bfd7d8edc0d4347aead8eb->enter($__internal_a7a361d1204b8294b24c625d99092065cda6649502bfd7d8edc0d4347aead8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_363627de2c7c4f48785539d78305548daef20708fe6ec1260a9493a83333548b->leave($__internal_363627de2c7c4f48785539d78305548daef20708fe6ec1260a9493a83333548b_prof);

        
        $__internal_a7a361d1204b8294b24c625d99092065cda6649502bfd7d8edc0d4347aead8eb->leave($__internal_a7a361d1204b8294b24c625d99092065cda6649502bfd7d8edc0d4347aead8eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9c6e2b05b4cf681c594295a37d0720ca0666bb6c986672fd0eaf8c1159226d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6e2b05b4cf681c594295a37d0720ca0666bb6c986672fd0eaf8c1159226d21->enter($__internal_9c6e2b05b4cf681c594295a37d0720ca0666bb6c986672fd0eaf8c1159226d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d862468dd56d0317e2d512676e02627df7e0170fc9437ad69a7126f2e475db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d862468dd56d0317e2d512676e02627df7e0170fc9437ad69a7126f2e475db2->enter($__internal_8d862468dd56d0317e2d512676e02627df7e0170fc9437ad69a7126f2e475db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d862468dd56d0317e2d512676e02627df7e0170fc9437ad69a7126f2e475db2->leave($__internal_8d862468dd56d0317e2d512676e02627df7e0170fc9437ad69a7126f2e475db2_prof);

        
        $__internal_9c6e2b05b4cf681c594295a37d0720ca0666bb6c986672fd0eaf8c1159226d21->leave($__internal_9c6e2b05b4cf681c594295a37d0720ca0666bb6c986672fd0eaf8c1159226d21_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_791edb024d56cdb396263597ae4fbd3d2b4e8ca29bedae2851aef1b616e6942c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791edb024d56cdb396263597ae4fbd3d2b4e8ca29bedae2851aef1b616e6942c->enter($__internal_791edb024d56cdb396263597ae4fbd3d2b4e8ca29bedae2851aef1b616e6942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8122147467e56c02c00d190c22829d78781c470d866fb79bd3efa8dcc94d043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8122147467e56c02c00d190c22829d78781c470d866fb79bd3efa8dcc94d043->enter($__internal_e8122147467e56c02c00d190c22829d78781c470d866fb79bd3efa8dcc94d043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e8122147467e56c02c00d190c22829d78781c470d866fb79bd3efa8dcc94d043->leave($__internal_e8122147467e56c02c00d190c22829d78781c470d866fb79bd3efa8dcc94d043_prof);

        
        $__internal_791edb024d56cdb396263597ae4fbd3d2b4e8ca29bedae2851aef1b616e6942c->leave($__internal_791edb024d56cdb396263597ae4fbd3d2b4e8ca29bedae2851aef1b616e6942c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
