<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_592353006e6b0d27e0ef1da2f99053a9e49732fd06b5de1261439be9631cf71a extends Twig_Template
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
        $__internal_23a67d6936d81415de0a64e04a69f1dac8e9c257474f8edc182bc51112f06609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a67d6936d81415de0a64e04a69f1dac8e9c257474f8edc182bc51112f06609->enter($__internal_23a67d6936d81415de0a64e04a69f1dac8e9c257474f8edc182bc51112f06609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_5af5f5213d35049ded4d91609b4d5701ef8e98f6576ed7824e3e19dc84b0342d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af5f5213d35049ded4d91609b4d5701ef8e98f6576ed7824e3e19dc84b0342d->enter($__internal_5af5f5213d35049ded4d91609b4d5701ef8e98f6576ed7824e3e19dc84b0342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_23a67d6936d81415de0a64e04a69f1dac8e9c257474f8edc182bc51112f06609->leave($__internal_23a67d6936d81415de0a64e04a69f1dac8e9c257474f8edc182bc51112f06609_prof);

        
        $__internal_5af5f5213d35049ded4d91609b4d5701ef8e98f6576ed7824e3e19dc84b0342d->leave($__internal_5af5f5213d35049ded4d91609b4d5701ef8e98f6576ed7824e3e19dc84b0342d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
