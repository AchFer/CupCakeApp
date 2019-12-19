<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cc43c6390b1823368748ed87de9a20e92a22ba726f8537d1ca169594164c1234 extends Twig_Template
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
        $__internal_5d2c0e8d337dbe71e94886d32dff11d85b7d5460bffa7c4a271926bd1f4026c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2c0e8d337dbe71e94886d32dff11d85b7d5460bffa7c4a271926bd1f4026c7->enter($__internal_5d2c0e8d337dbe71e94886d32dff11d85b7d5460bffa7c4a271926bd1f4026c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_dfb6e7f956b51a38194181493fbc6eed845b0405ff2e6ef3e1937f557fa881ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb6e7f956b51a38194181493fbc6eed845b0405ff2e6ef3e1937f557fa881ab->enter($__internal_dfb6e7f956b51a38194181493fbc6eed845b0405ff2e6ef3e1937f557fa881ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_5d2c0e8d337dbe71e94886d32dff11d85b7d5460bffa7c4a271926bd1f4026c7->leave($__internal_5d2c0e8d337dbe71e94886d32dff11d85b7d5460bffa7c4a271926bd1f4026c7_prof);

        
        $__internal_dfb6e7f956b51a38194181493fbc6eed845b0405ff2e6ef3e1937f557fa881ab->leave($__internal_dfb6e7f956b51a38194181493fbc6eed845b0405ff2e6ef3e1937f557fa881ab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
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
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
