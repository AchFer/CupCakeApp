<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_48e6812720ad7d0922abad945c8c22b5f282cff1f1d5ce1a1772d5593876beca extends Twig_Template
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
        $__internal_f423e719e4b18510c05bb880501dd012ce93901793994b3c35c07314d12d1c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f423e719e4b18510c05bb880501dd012ce93901793994b3c35c07314d12d1c4c->enter($__internal_f423e719e4b18510c05bb880501dd012ce93901793994b3c35c07314d12d1c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8b7a78dd43937dfad538bdd5dbe00935f6bd7d0a59446abdb1b410f280836857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7a78dd43937dfad538bdd5dbe00935f6bd7d0a59446abdb1b410f280836857->enter($__internal_8b7a78dd43937dfad538bdd5dbe00935f6bd7d0a59446abdb1b410f280836857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f423e719e4b18510c05bb880501dd012ce93901793994b3c35c07314d12d1c4c->leave($__internal_f423e719e4b18510c05bb880501dd012ce93901793994b3c35c07314d12d1c4c_prof);

        
        $__internal_8b7a78dd43937dfad538bdd5dbe00935f6bd7d0a59446abdb1b410f280836857->leave($__internal_8b7a78dd43937dfad538bdd5dbe00935f6bd7d0a59446abdb1b410f280836857_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
