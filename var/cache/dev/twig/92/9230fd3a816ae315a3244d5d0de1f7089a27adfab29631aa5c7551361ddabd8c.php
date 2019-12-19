<?php

/* PIAppelBundle:appeldoffre:validé.html.twig */
class __TwigTemplate_48b089c35203b61fe23492e5c7d4a60558b03617968dc59d01e2f3ca538ca3d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:appeldoffre:validation.html.twig", "PIAppelBundle:appeldoffre:validé.html.twig", 1);
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
        $__internal_e77672e579568d6ee340759aa4c4cac55d85d79f9a13fe1e83f717f60827e373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77672e579568d6ee340759aa4c4cac55d85d79f9a13fe1e83f717f60827e373->enter($__internal_e77672e579568d6ee340759aa4c4cac55d85d79f9a13fe1e83f717f60827e373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:validé.html.twig"));

        $__internal_b2b2b722df32709c4ac524a0d8fbaa965c4652f4e2d33aab36dd7c031c8d6d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b2b722df32709c4ac524a0d8fbaa965c4652f4e2d33aab36dd7c031c8d6d94->enter($__internal_b2b2b722df32709c4ac524a0d8fbaa965c4652f4e2d33aab36dd7c031c8d6d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:validé.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77672e579568d6ee340759aa4c4cac55d85d79f9a13fe1e83f717f60827e373->leave($__internal_e77672e579568d6ee340759aa4c4cac55d85d79f9a13fe1e83f717f60827e373_prof);

        
        $__internal_b2b2b722df32709c4ac524a0d8fbaa965c4652f4e2d33aab36dd7c031c8d6d94->leave($__internal_b2b2b722df32709c4ac524a0d8fbaa965c4652f4e2d33aab36dd7c031c8d6d94_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_a53036639b7bf0f1c4a6c7e4512ecd1f2dd0f498e8abda3ae515b2c3e53a44ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53036639b7bf0f1c4a6c7e4512ecd1f2dd0f498e8abda3ae515b2c3e53a44ab->enter($__internal_a53036639b7bf0f1c4a6c7e4512ecd1f2dd0f498e8abda3ae515b2c3e53a44ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_55b3f5d7a4c3ed7b6b8d5ec156919f3c4476b659f51d95f16ee4a449a5b69baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b3f5d7a4c3ed7b6b8d5ec156919f3c4476b659f51d95f16ee4a449a5b69baf->enter($__internal_55b3f5d7a4c3ed7b6b8d5ec156919f3c4476b659f51d95f16ee4a449a5b69baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_55b3f5d7a4c3ed7b6b8d5ec156919f3c4476b659f51d95f16ee4a449a5b69baf->leave($__internal_55b3f5d7a4c3ed7b6b8d5ec156919f3c4476b659f51d95f16ee4a449a5b69baf_prof);

        
        $__internal_a53036639b7bf0f1c4a6c7e4512ecd1f2dd0f498e8abda3ae515b2c3e53a44ab->leave($__internal_a53036639b7bf0f1c4a6c7e4512ecd1f2dd0f498e8abda3ae515b2c3e53a44ab_prof);

    }

    // line 18
    public function block_valide($context, array $blocks = array())
    {
        $__internal_23cfebe854bcbb8f493bb33b1246ae55cb81c57a80ae9c3768145c71927ae894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23cfebe854bcbb8f493bb33b1246ae55cb81c57a80ae9c3768145c71927ae894->enter($__internal_23cfebe854bcbb8f493bb33b1246ae55cb81c57a80ae9c3768145c71927ae894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "valide"));

        $__internal_61acf6581a0aabeef6219c740d7aa32a8c7e56b9b47a4688ea24d472cc9ab8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61acf6581a0aabeef6219c740d7aa32a8c7e56b9b47a4688ea24d472cc9ab8dc->enter($__internal_61acf6581a0aabeef6219c740d7aa32a8c7e56b9b47a4688ea24d472cc9ab8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "valide"));

        // line 19
        echo "            <td class=\"hidden-480\">
                <span class=\"label label-sm label-success\">ValidÃ©</span>
            </td>
        ";
        
        $__internal_61acf6581a0aabeef6219c740d7aa32a8c7e56b9b47a4688ea24d472cc9ab8dc->leave($__internal_61acf6581a0aabeef6219c740d7aa32a8c7e56b9b47a4688ea24d472cc9ab8dc_prof);

        
        $__internal_23cfebe854bcbb8f493bb33b1246ae55cb81c57a80ae9c3768145c71927ae894->leave($__internal_23cfebe854bcbb8f493bb33b1246ae55cb81c57a80ae9c3768145c71927ae894_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:validé.html.twig";
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

{% endblock %}", "PIAppelBundle:appeldoffre:validé.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/validé.html.twig");
    }
}
