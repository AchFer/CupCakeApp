<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_80e967c38341c3f80b0bbf0affa59a102d3c1851ca675770fee3cc2d85c16169 extends Twig_Template
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
        $__internal_33bdbeafc01edd877ce32d6ed41027345501165ac0490676f2e3dd8e02dcfeaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33bdbeafc01edd877ce32d6ed41027345501165ac0490676f2e3dd8e02dcfeaf->enter($__internal_33bdbeafc01edd877ce32d6ed41027345501165ac0490676f2e3dd8e02dcfeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_458ea38ec8bf52afe0842ac0fd3ed6ff08b9405281b14a575a180516c4c75f4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458ea38ec8bf52afe0842ac0fd3ed6ff08b9405281b14a575a180516c4c75f4b->enter($__internal_458ea38ec8bf52afe0842ac0fd3ed6ff08b9405281b14a575a180516c4c75f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_33bdbeafc01edd877ce32d6ed41027345501165ac0490676f2e3dd8e02dcfeaf->leave($__internal_33bdbeafc01edd877ce32d6ed41027345501165ac0490676f2e3dd8e02dcfeaf_prof);

        
        $__internal_458ea38ec8bf52afe0842ac0fd3ed6ff08b9405281b14a575a180516c4c75f4b->leave($__internal_458ea38ec8bf52afe0842ac0fd3ed6ff08b9405281b14a575a180516c4c75f4b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
