<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_00f25c0d1cce8b498c187f83079431a7d7561c7d7ea11b0c0a80fa31b7b1e3a7 extends Twig_Template
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
        $__internal_7b33a0ed333db0ce70ab3976e8f263f2bd3be5ff31bd76ee8a51f3e5813fadbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b33a0ed333db0ce70ab3976e8f263f2bd3be5ff31bd76ee8a51f3e5813fadbd->enter($__internal_7b33a0ed333db0ce70ab3976e8f263f2bd3be5ff31bd76ee8a51f3e5813fadbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_24a88128b86c1b398d94f4baa236e59ef37f0abe7be3e949ecd6baca8e547620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a88128b86c1b398d94f4baa236e59ef37f0abe7be3e949ecd6baca8e547620->enter($__internal_24a88128b86c1b398d94f4baa236e59ef37f0abe7be3e949ecd6baca8e547620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_7b33a0ed333db0ce70ab3976e8f263f2bd3be5ff31bd76ee8a51f3e5813fadbd->leave($__internal_7b33a0ed333db0ce70ab3976e8f263f2bd3be5ff31bd76ee8a51f3e5813fadbd_prof);

        
        $__internal_24a88128b86c1b398d94f4baa236e59ef37f0abe7be3e949ecd6baca8e547620->leave($__internal_24a88128b86c1b398d94f4baa236e59ef37f0abe7be3e949ecd6baca8e547620_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
