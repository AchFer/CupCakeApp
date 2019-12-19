<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1836752af61223365958872a49e44045cb62f51f4d49a241e89742e9fa446896 extends Twig_Template
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
        $__internal_e1c347e977bc415974c353ab35689ce3d7b54838a6a2a1dcce35b045c5accaf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c347e977bc415974c353ab35689ce3d7b54838a6a2a1dcce35b045c5accaf4->enter($__internal_e1c347e977bc415974c353ab35689ce3d7b54838a6a2a1dcce35b045c5accaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_373ff7cc99bcbbeed55e8851c5ff61083e998676b78f398a09de5460ec87bb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373ff7cc99bcbbeed55e8851c5ff61083e998676b78f398a09de5460ec87bb44->enter($__internal_373ff7cc99bcbbeed55e8851c5ff61083e998676b78f398a09de5460ec87bb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e1c347e977bc415974c353ab35689ce3d7b54838a6a2a1dcce35b045c5accaf4->leave($__internal_e1c347e977bc415974c353ab35689ce3d7b54838a6a2a1dcce35b045c5accaf4_prof);

        
        $__internal_373ff7cc99bcbbeed55e8851c5ff61083e998676b78f398a09de5460ec87bb44->leave($__internal_373ff7cc99bcbbeed55e8851c5ff61083e998676b78f398a09de5460ec87bb44_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
