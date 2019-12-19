<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_d45803621e97121c2701bac1b6b293003659b9ee6c4f1804cdcdf0b112ce4595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89240dc2f05be36ffcfcb6215fd065d5408a45c05601ea23951554e62ebacdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89240dc2f05be36ffcfcb6215fd065d5408a45c05601ea23951554e62ebacdc3->enter($__internal_89240dc2f05be36ffcfcb6215fd065d5408a45c05601ea23951554e62ebacdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_d4c3468ad579e964dcd4446ccbdeb60de5671470d598301e6a4227f8cc6484cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c3468ad579e964dcd4446ccbdeb60de5671470d598301e6a4227f8cc6484cf->enter($__internal_d4c3468ad579e964dcd4446ccbdeb60de5671470d598301e6a4227f8cc6484cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_89240dc2f05be36ffcfcb6215fd065d5408a45c05601ea23951554e62ebacdc3->leave($__internal_89240dc2f05be36ffcfcb6215fd065d5408a45c05601ea23951554e62ebacdc3_prof);

        
        $__internal_d4c3468ad579e964dcd4446ccbdeb60de5671470d598301e6a4227f8cc6484cf->leave($__internal_d4c3468ad579e964dcd4446ccbdeb60de5671470d598301e6a4227f8cc6484cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
