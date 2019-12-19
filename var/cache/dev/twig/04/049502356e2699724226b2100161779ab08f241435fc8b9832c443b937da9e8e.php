<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2dff80664948e68117af02445f5861dfde6c80b8d345bb6e7a668494849e475f extends Twig_Template
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
        $__internal_04a72edb72d30f1c8a28f2dd9a0eb12158aae4da59a0ae15114de01cc0b46168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a72edb72d30f1c8a28f2dd9a0eb12158aae4da59a0ae15114de01cc0b46168->enter($__internal_04a72edb72d30f1c8a28f2dd9a0eb12158aae4da59a0ae15114de01cc0b46168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_48dc730623316193c945e592d4b7b860d382219a3f24cc1a08f6499c840dcdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dc730623316193c945e592d4b7b860d382219a3f24cc1a08f6499c840dcdcb->enter($__internal_48dc730623316193c945e592d4b7b860d382219a3f24cc1a08f6499c840dcdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_04a72edb72d30f1c8a28f2dd9a0eb12158aae4da59a0ae15114de01cc0b46168->leave($__internal_04a72edb72d30f1c8a28f2dd9a0eb12158aae4da59a0ae15114de01cc0b46168_prof);

        
        $__internal_48dc730623316193c945e592d4b7b860d382219a3f24cc1a08f6499c840dcdcb->leave($__internal_48dc730623316193c945e592d4b7b860d382219a3f24cc1a08f6499c840dcdcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
", "@Twig/Exception/exception.json.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
