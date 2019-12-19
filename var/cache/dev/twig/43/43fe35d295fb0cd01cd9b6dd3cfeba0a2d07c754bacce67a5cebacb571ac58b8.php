<?php

/* PIAppelBundle:appeldoffre:marque.html.twig */
class __TwigTemplate_33756173b63b4aa0becc2810f2f4b9c8ce9d29b02c474658f638a7cf37bf9761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:marque.html.twig", 1);
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
        $__internal_acd7947d2b12f722c6f2bbc2602ec24f9214ad155801c0fbe55410488360aa7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd7947d2b12f722c6f2bbc2602ec24f9214ad155801c0fbe55410488360aa7c->enter($__internal_acd7947d2b12f722c6f2bbc2602ec24f9214ad155801c0fbe55410488360aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:marque.html.twig"));

        $__internal_c080baa523fdd489c1558b408dbdd9b518bbcd30b1ceb1dece3eb2ce4d343a4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c080baa523fdd489c1558b408dbdd9b518bbcd30b1ceb1dece3eb2ce4d343a4a->enter($__internal_c080baa523fdd489c1558b408dbdd9b518bbcd30b1ceb1dece3eb2ce4d343a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:marque.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acd7947d2b12f722c6f2bbc2602ec24f9214ad155801c0fbe55410488360aa7c->leave($__internal_acd7947d2b12f722c6f2bbc2602ec24f9214ad155801c0fbe55410488360aa7c_prof);

        
        $__internal_c080baa523fdd489c1558b408dbdd9b518bbcd30b1ceb1dece3eb2ce4d343a4a->leave($__internal_c080baa523fdd489c1558b408dbdd9b518bbcd30b1ceb1dece3eb2ce4d343a4a_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_25f37c14505da0d14d7b40d080b6cfa4857a7772d9694d5aeab048c10835a8d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f37c14505da0d14d7b40d080b6cfa4857a7772d9694d5aeab048c10835a8d1->enter($__internal_25f37c14505da0d14d7b40d080b6cfa4857a7772d9694d5aeab048c10835a8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_138578c193e12034679cde72aff157c9721711c490cd6eb08c0e98aaddb535dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138578c193e12034679cde72aff157c9721711c490cd6eb08c0e98aaddb535dc->enter($__internal_138578c193e12034679cde72aff157c9721711c490cd6eb08c0e98aaddb535dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_138578c193e12034679cde72aff157c9721711c490cd6eb08c0e98aaddb535dc->leave($__internal_138578c193e12034679cde72aff157c9721711c490cd6eb08c0e98aaddb535dc_prof);

        
        $__internal_25f37c14505da0d14d7b40d080b6cfa4857a7772d9694d5aeab048c10835a8d1->leave($__internal_25f37c14505da0d14d7b40d080b6cfa4857a7772d9694d5aeab048c10835a8d1_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:marque.html.twig";
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

{% endblock %}", "PIAppelBundle:appeldoffre:marque.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/marque.html.twig");
    }
}
