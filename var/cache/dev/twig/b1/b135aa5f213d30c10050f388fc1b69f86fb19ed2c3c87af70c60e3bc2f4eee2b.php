<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_6472134ca7c4c85e18e8a8e09d40f70f38d12e78fb498b35b576e747d13c3104 extends Twig_Template
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
        $__internal_9fb01144e577b17f876eb8d36d2b0a2868ae227f0dd9011280f30344747fc6af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb01144e577b17f876eb8d36d2b0a2868ae227f0dd9011280f30344747fc6af->enter($__internal_9fb01144e577b17f876eb8d36d2b0a2868ae227f0dd9011280f30344747fc6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_ff9b3323213706645c662a77210be16d8a5e66022b64b15aa54d288900f4d915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff9b3323213706645c662a77210be16d8a5e66022b64b15aa54d288900f4d915->enter($__internal_ff9b3323213706645c662a77210be16d8a5e66022b64b15aa54d288900f4d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_9fb01144e577b17f876eb8d36d2b0a2868ae227f0dd9011280f30344747fc6af->leave($__internal_9fb01144e577b17f876eb8d36d2b0a2868ae227f0dd9011280f30344747fc6af_prof);

        
        $__internal_ff9b3323213706645c662a77210be16d8a5e66022b64b15aa54d288900f4d915->leave($__internal_ff9b3323213706645c662a77210be16d8a5e66022b64b15aa54d288900f4d915_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
