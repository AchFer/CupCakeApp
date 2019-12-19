<?php

/* @PIAppel/appeldoffre/marque.html.twig */
class __TwigTemplate_a66135a7f9967cf3c5606bd0fd37637203385d5a02567a767d0f0278c907b3e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/marque.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIAppelBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca2ef8b4a07c6919d87dc63bea6ac0adc11b5d69be04762ee0a107622802be7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2ef8b4a07c6919d87dc63bea6ac0adc11b5d69be04762ee0a107622802be7d->enter($__internal_ca2ef8b4a07c6919d87dc63bea6ac0adc11b5d69be04762ee0a107622802be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/marque.html.twig"));

        $__internal_cd1588fbb57d5f0a400640b02f00311e19a490b288ff05424cedc85cfc1f2175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1588fbb57d5f0a400640b02f00311e19a490b288ff05424cedc85cfc1f2175->enter($__internal_cd1588fbb57d5f0a400640b02f00311e19a490b288ff05424cedc85cfc1f2175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/marque.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2ef8b4a07c6919d87dc63bea6ac0adc11b5d69be04762ee0a107622802be7d->leave($__internal_ca2ef8b4a07c6919d87dc63bea6ac0adc11b5d69be04762ee0a107622802be7d_prof);

        
        $__internal_cd1588fbb57d5f0a400640b02f00311e19a490b288ff05424cedc85cfc1f2175->leave($__internal_cd1588fbb57d5f0a400640b02f00311e19a490b288ff05424cedc85cfc1f2175_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_cd6c459402c63369f8ebfcc223f9d41eb2178053ec19648393be4522097385e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6c459402c63369f8ebfcc223f9d41eb2178053ec19648393be4522097385e5->enter($__internal_cd6c459402c63369f8ebfcc223f9d41eb2178053ec19648393be4522097385e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_73fe48e6f27274b25c4543c16c7512a4501afff6bc615cf03130964b10f51f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73fe48e6f27274b25c4543c16c7512a4501afff6bc615cf03130964b10f51f2c->enter($__internal_73fe48e6f27274b25c4543c16c7512a4501afff6bc615cf03130964b10f51f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
    <thead>
<tr>
    <th>Sujet</th>
    <th>Description</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Validation</th>
    <th>Status</th>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 12
            echo "    <tr>

        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "sujet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "datemax", array())), "html", null, true);
            echo "</td>




        <td>
            <span class=\"label label-sm label-inverse arrowed-in\">Marqué</span>
            <button class=\"btn btn-xs btn-warning\">
                <i class=\"ace-icon fa fa-flag bigger-120\"></i>
            </button>
        </td>

    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
";
        
        $__internal_73fe48e6f27274b25c4543c16c7512a4501afff6bc615cf03130964b10f51f2c->leave($__internal_73fe48e6f27274b25c4543c16c7512a4501afff6bc615cf03130964b10f51f2c_prof);

        
        $__internal_cd6c459402c63369f8ebfcc223f9d41eb2178053ec19648393be4522097385e5->leave($__internal_cd6c459402c63369f8ebfcc223f9d41eb2178053ec19648393be4522097385e5_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/marque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  75 => 16,  71 => 15,  67 => 14,  63 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}
{% block container %}
    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
    <thead>
<tr>
    <th>Sujet</th>
    <th>Description</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Validation</th>
    <th>Status</th>
    {% for appels in a%}
    <tr>

        <td>{{ appels.sujet }}</td>
        <td>{{ appels.description }}</td>
        <td>{{ appels.datemax|date }}</td>




        <td>
            <span class=\"label label-sm label-inverse arrowed-in\">Marqué</span>
            <button class=\"btn btn-xs btn-warning\">
                <i class=\"ace-icon fa fa-flag bigger-120\"></i>
            </button>
        </td>

    </tr>
    {% endfor %}

{% endblock %}", "@PIAppel/appeldoffre/marque.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\marque.html.twig");
    }
}
