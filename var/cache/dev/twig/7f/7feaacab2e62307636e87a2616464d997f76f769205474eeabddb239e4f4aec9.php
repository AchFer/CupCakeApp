<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_bf4ca427f3dcf21fd3ec4804c73875c86c0d8439be398362ab0581d88ac0489d extends Twig_Template
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
        $__internal_f58ece606a693c4a034606e592263d53cf0846172c6f30ce92af231312d435a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58ece606a693c4a034606e592263d53cf0846172c6f30ce92af231312d435a1->enter($__internal_f58ece606a693c4a034606e592263d53cf0846172c6f30ce92af231312d435a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7df432d6c711cf68e12a2f3bf1cad96048859378522a4456a69d7f53adf4623d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df432d6c711cf68e12a2f3bf1cad96048859378522a4456a69d7f53adf4623d->enter($__internal_7df432d6c711cf68e12a2f3bf1cad96048859378522a4456a69d7f53adf4623d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f58ece606a693c4a034606e592263d53cf0846172c6f30ce92af231312d435a1->leave($__internal_f58ece606a693c4a034606e592263d53cf0846172c6f30ce92af231312d435a1_prof);

        
        $__internal_7df432d6c711cf68e12a2f3bf1cad96048859378522a4456a69d7f53adf4623d->leave($__internal_7df432d6c711cf68e12a2f3bf1cad96048859378522a4456a69d7f53adf4623d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
