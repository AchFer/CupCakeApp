<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_abe3f91d96bad7d863ef5bab85480e2d178c1e570cc0c0035d6864657ff29450 extends Twig_Template
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
        $__internal_db0305323080e3a7d0cc59794d9dc24a8312497c1f2ae9fca4b28ff462f656f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0305323080e3a7d0cc59794d9dc24a8312497c1f2ae9fca4b28ff462f656f1->enter($__internal_db0305323080e3a7d0cc59794d9dc24a8312497c1f2ae9fca4b28ff462f656f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_65627e24aab712fcbb6fcde03a95981131a88aac22cce47d561394210e76aec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65627e24aab712fcbb6fcde03a95981131a88aac22cce47d561394210e76aec5->enter($__internal_65627e24aab712fcbb6fcde03a95981131a88aac22cce47d561394210e76aec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_db0305323080e3a7d0cc59794d9dc24a8312497c1f2ae9fca4b28ff462f656f1->leave($__internal_db0305323080e3a7d0cc59794d9dc24a8312497c1f2ae9fca4b28ff462f656f1_prof);

        
        $__internal_65627e24aab712fcbb6fcde03a95981131a88aac22cce47d561394210e76aec5->leave($__internal_65627e24aab712fcbb6fcde03a95981131a88aac22cce47d561394210e76aec5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
