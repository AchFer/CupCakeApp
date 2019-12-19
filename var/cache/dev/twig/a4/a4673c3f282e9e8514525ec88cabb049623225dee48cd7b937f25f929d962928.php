<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_34f9f2d2ece9cd3ee7280475d4277ccea86b2fcc0170bc410bf8f249d646e935 extends Twig_Template
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
        $__internal_e9162af5cf49f09de806d0c8ff28692e8671500a73e21d0b8e814f9531e212dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9162af5cf49f09de806d0c8ff28692e8671500a73e21d0b8e814f9531e212dd->enter($__internal_e9162af5cf49f09de806d0c8ff28692e8671500a73e21d0b8e814f9531e212dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_02b6c4a8383f15b19ef5095cd8212e7e25e5d103ffce29ab4e6803b6523fe494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b6c4a8383f15b19ef5095cd8212e7e25e5d103ffce29ab4e6803b6523fe494->enter($__internal_02b6c4a8383f15b19ef5095cd8212e7e25e5d103ffce29ab4e6803b6523fe494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e9162af5cf49f09de806d0c8ff28692e8671500a73e21d0b8e814f9531e212dd->leave($__internal_e9162af5cf49f09de806d0c8ff28692e8671500a73e21d0b8e814f9531e212dd_prof);

        
        $__internal_02b6c4a8383f15b19ef5095cd8212e7e25e5d103ffce29ab4e6803b6523fe494->leave($__internal_02b6c4a8383f15b19ef5095cd8212e7e25e5d103ffce29ab4e6803b6523fe494_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
