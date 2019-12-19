<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_41deda1fece7a08cee07cfb8393771a902bdb81c33f9bde7e3b11112eaf0ea0b extends Twig_Template
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
        $__internal_12b8132140829a11315a5b782d48f6b7854461afe9cb0817c7a3931b97650550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b8132140829a11315a5b782d48f6b7854461afe9cb0817c7a3931b97650550->enter($__internal_12b8132140829a11315a5b782d48f6b7854461afe9cb0817c7a3931b97650550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_e7c11ea8bd232d02b20a2403a6734962dc6e2f46134abf15021bbfdce48ead6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c11ea8bd232d02b20a2403a6734962dc6e2f46134abf15021bbfdce48ead6b->enter($__internal_e7c11ea8bd232d02b20a2403a6734962dc6e2f46134abf15021bbfdce48ead6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_12b8132140829a11315a5b782d48f6b7854461afe9cb0817c7a3931b97650550->leave($__internal_12b8132140829a11315a5b782d48f6b7854461afe9cb0817c7a3931b97650550_prof);

        
        $__internal_e7c11ea8bd232d02b20a2403a6734962dc6e2f46134abf15021bbfdce48ead6b->leave($__internal_e7c11ea8bd232d02b20a2403a6734962dc6e2f46134abf15021bbfdce48ead6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
