<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_99ce37277ad6e79ca67577f5a2a0f5a33bb27970660ba3c8f9400e42ecc09f8e extends Twig_Template
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
        $__internal_0802f9a42e347ecf17588214c6a25460dfd061f78eda658beb0ac8b36441df36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0802f9a42e347ecf17588214c6a25460dfd061f78eda658beb0ac8b36441df36->enter($__internal_0802f9a42e347ecf17588214c6a25460dfd061f78eda658beb0ac8b36441df36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_99f7c7a4a854314476f7e0ce39981d73ee90e4db4ea8f11f0d315fce6ef010d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f7c7a4a854314476f7e0ce39981d73ee90e4db4ea8f11f0d315fce6ef010d2->enter($__internal_99f7c7a4a854314476f7e0ce39981d73ee90e4db4ea8f11f0d315fce6ef010d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0802f9a42e347ecf17588214c6a25460dfd061f78eda658beb0ac8b36441df36->leave($__internal_0802f9a42e347ecf17588214c6a25460dfd061f78eda658beb0ac8b36441df36_prof);

        
        $__internal_99f7c7a4a854314476f7e0ce39981d73ee90e4db4ea8f11f0d315fce6ef010d2->leave($__internal_99f7c7a4a854314476f7e0ce39981d73ee90e4db4ea8f11f0d315fce6ef010d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
