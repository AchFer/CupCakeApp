<?php

/* @PIAppel/appeldoffre/validé.html.twig */
class __TwigTemplate_6c01c8ad5faca2ca08a0852e4ff3ac7423310dc948930fecf4f7b146120ac132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:appeldoffre:validation.html.twig", "@PIAppel/appeldoffre/validé.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'valide' => array($this, 'block_valide'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIAppelBundle:appeldoffre:validation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c1df024fd6e652ec9a833d4d42a28cecae9101ec9096dd00466aede049c4b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c1df024fd6e652ec9a833d4d42a28cecae9101ec9096dd00466aede049c4b59->enter($__internal_4c1df024fd6e652ec9a833d4d42a28cecae9101ec9096dd00466aede049c4b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/validé.html.twig"));

        $__internal_0a844c718eafbd8b30848fe6bd71285e92022da88aecbeede5c8925f94671f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a844c718eafbd8b30848fe6bd71285e92022da88aecbeede5c8925f94671f24->enter($__internal_0a844c718eafbd8b30848fe6bd71285e92022da88aecbeede5c8925f94671f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/validé.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c1df024fd6e652ec9a833d4d42a28cecae9101ec9096dd00466aede049c4b59->leave($__internal_4c1df024fd6e652ec9a833d4d42a28cecae9101ec9096dd00466aede049c4b59_prof);

        
        $__internal_0a844c718eafbd8b30848fe6bd71285e92022da88aecbeede5c8925f94671f24->leave($__internal_0a844c718eafbd8b30848fe6bd71285e92022da88aecbeede5c8925f94671f24_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_2fee9846c450c774053ba6b23efe4ded204bbbdaa48d017d38a39284dd10e118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fee9846c450c774053ba6b23efe4ded204bbbdaa48d017d38a39284dd10e118->enter($__internal_2fee9846c450c774053ba6b23efe4ded204bbbdaa48d017d38a39284dd10e118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_fe82bb4f5a38706db6d09ee7cca3c6514f129f2ac4058d90c6ebd817924ef1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe82bb4f5a38706db6d09ee7cca3c6514f129f2ac4058d90c6ebd817924ef1d2->enter($__internal_fe82bb4f5a38706db6d09ee7cca3c6514f129f2ac4058d90c6ebd817924ef1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
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

        ";
            // line 18
            $this->displayBlock('valide', $context, $blocks);
            // line 23
            echo "
    </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        
        $__internal_fe82bb4f5a38706db6d09ee7cca3c6514f129f2ac4058d90c6ebd817924ef1d2->leave($__internal_fe82bb4f5a38706db6d09ee7cca3c6514f129f2ac4058d90c6ebd817924ef1d2_prof);

        
        $__internal_2fee9846c450c774053ba6b23efe4ded204bbbdaa48d017d38a39284dd10e118->leave($__internal_2fee9846c450c774053ba6b23efe4ded204bbbdaa48d017d38a39284dd10e118_prof);

    }

    // line 18
    public function block_valide($context, array $blocks = array())
    {
        $__internal_dae6c596ff6bd2e4f8070fc88fef0befe34fb7c5501d242cda028d220515233f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae6c596ff6bd2e4f8070fc88fef0befe34fb7c5501d242cda028d220515233f->enter($__internal_dae6c596ff6bd2e4f8070fc88fef0befe34fb7c5501d242cda028d220515233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "valide"));

        $__internal_86ab6e537b38941b5510d30debc250516dddfbb2f0f2b70173d7ff557a8cf350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ab6e537b38941b5510d30debc250516dddfbb2f0f2b70173d7ff557a8cf350->enter($__internal_86ab6e537b38941b5510d30debc250516dddfbb2f0f2b70173d7ff557a8cf350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "valide"));

        // line 19
        echo "            <td class=\"hidden-480\">
                <span class=\"label label-sm label-success\">ValidÃ©</span>
            </td>
        ";
        
        $__internal_86ab6e537b38941b5510d30debc250516dddfbb2f0f2b70173d7ff557a8cf350->leave($__internal_86ab6e537b38941b5510d30debc250516dddfbb2f0f2b70173d7ff557a8cf350_prof);

        
        $__internal_dae6c596ff6bd2e4f8070fc88fef0befe34fb7c5501d242cda028d220515233f->leave($__internal_dae6c596ff6bd2e4f8070fc88fef0befe34fb7c5501d242cda028d220515233f_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/validé.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 19,  123 => 18,  112 => 26,  96 => 23,  94 => 18,  89 => 16,  85 => 15,  81 => 14,  77 => 12,  60 => 11,  50 => 3,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:appeldoffre:validation.html.twig\" %}
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

        {% block valide  %}
            <td class=\"hidden-480\">
                <span class=\"label label-sm label-success\">ValidÃ©</span>
            </td>
        {% endblock %}

    </tr>
    {% endfor %}

{% endblock %}", "@PIAppel/appeldoffre/validé.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\validé.html.twig");
    }
}
