<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_cdc8de334e67fbb8ded7d6c8fc86fdf6555140713cff76fc8249f22289c59219 extends Twig_Template
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
        $__internal_bb2ad132055fed23cdac540630410d48a9f700c96196c355f99b5c85ff4a87f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2ad132055fed23cdac540630410d48a9f700c96196c355f99b5c85ff4a87f2->enter($__internal_bb2ad132055fed23cdac540630410d48a9f700c96196c355f99b5c85ff4a87f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_1988ae48e7cb83dfd174c98aab4055b8b89103cde9532c6fb9ef03158c83d8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1988ae48e7cb83dfd174c98aab4055b8b89103cde9532c6fb9ef03158c83d8c0->enter($__internal_1988ae48e7cb83dfd174c98aab4055b8b89103cde9532c6fb9ef03158c83d8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_bb2ad132055fed23cdac540630410d48a9f700c96196c355f99b5c85ff4a87f2->leave($__internal_bb2ad132055fed23cdac540630410d48a9f700c96196c355f99b5c85ff4a87f2_prof);

        
        $__internal_1988ae48e7cb83dfd174c98aab4055b8b89103cde9532c6fb9ef03158c83d8c0->leave($__internal_1988ae48e7cb83dfd174c98aab4055b8b89103cde9532c6fb9ef03158c83d8c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
