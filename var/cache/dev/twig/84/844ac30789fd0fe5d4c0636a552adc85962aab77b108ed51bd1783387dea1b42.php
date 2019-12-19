<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_05ac0a42a1d347e75023f4d3a9f4bfc24de4bec774a1c41e014f6edae6538b14 extends Twig_Template
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
        $__internal_16329bd454986f1f8fe10012de4a477660f7062f51b0aa711e35ff9367990668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16329bd454986f1f8fe10012de4a477660f7062f51b0aa711e35ff9367990668->enter($__internal_16329bd454986f1f8fe10012de4a477660f7062f51b0aa711e35ff9367990668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_63ef06c3bf98223e3bb49b0c38b3be04042d6b17de2d12cca418b76fc5f954a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ef06c3bf98223e3bb49b0c38b3be04042d6b17de2d12cca418b76fc5f954a0->enter($__internal_63ef06c3bf98223e3bb49b0c38b3be04042d6b17de2d12cca418b76fc5f954a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_16329bd454986f1f8fe10012de4a477660f7062f51b0aa711e35ff9367990668->leave($__internal_16329bd454986f1f8fe10012de4a477660f7062f51b0aa711e35ff9367990668_prof);

        
        $__internal_63ef06c3bf98223e3bb49b0c38b3be04042d6b17de2d12cca418b76fc5f954a0->leave($__internal_63ef06c3bf98223e3bb49b0c38b3be04042d6b17de2d12cca418b76fc5f954a0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
