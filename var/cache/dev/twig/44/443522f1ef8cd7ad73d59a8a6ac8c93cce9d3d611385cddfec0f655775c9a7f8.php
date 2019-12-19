<?php

/* @PIAppel/appeldoffre/recherche.html.twig */
class __TwigTemplate_65caedd071d1821a889b42ea263c14313929201a361911dfa582194feb445689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/recherche.html.twig", 1);
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
        $__internal_814da60e4447c146d1dcd0d7bd9e07d296b004603c67a84e260376f80bf0e252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814da60e4447c146d1dcd0d7bd9e07d296b004603c67a84e260376f80bf0e252->enter($__internal_814da60e4447c146d1dcd0d7bd9e07d296b004603c67a84e260376f80bf0e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/recherche.html.twig"));

        $__internal_3d2ebe95768b2ae5a930899b7b04b86cbf214a7f4ac81fb3a3412cdb67ebe189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2ebe95768b2ae5a930899b7b04b86cbf214a7f4ac81fb3a3412cdb67ebe189->enter($__internal_3d2ebe95768b2ae5a930899b7b04b86cbf214a7f4ac81fb3a3412cdb67ebe189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_814da60e4447c146d1dcd0d7bd9e07d296b004603c67a84e260376f80bf0e252->leave($__internal_814da60e4447c146d1dcd0d7bd9e07d296b004603c67a84e260376f80bf0e252_prof);

        
        $__internal_3d2ebe95768b2ae5a930899b7b04b86cbf214a7f4ac81fb3a3412cdb67ebe189->leave($__internal_3d2ebe95768b2ae5a930899b7b04b86cbf214a7f4ac81fb3a3412cdb67ebe189_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_0ba59b14250c8a40dac7166a5083aea5d297012f597d917ee4da1e8b840f9ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba59b14250c8a40dac7166a5083aea5d297012f597d917ee4da1e8b840f9ebe->enter($__internal_0ba59b14250c8a40dac7166a5083aea5d297012f597d917ee4da1e8b840f9ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_d7a866af91428f15fc19a2cce9812ad7ed3d56a034db15b8ff82f30d79d523fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a866af91428f15fc19a2cce9812ad7ed3d56a034db15b8ff82f30d79d523fa->enter($__internal_d7a866af91428f15fc19a2cce9812ad7ed3d56a034db15b8ff82f30d79d523fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <form method=\"post\">
    Mes Appels :
    <input type=\"submit\" name=\"submit\" value=\"recherche\">

    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
    <thead>
<tr>
    <th>Patisserie</th>
    <th>Sujet</th>
    <th>Description</th>
    <th>Etat</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Action</th>

    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 18
            echo "    <tr>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "patisserie", array()), "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "sujet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "description", array()), "html", null, true);
            echo "</td>
        <td>
            ";
            // line 23
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "statut", array()) == 0)) {
                // line 24
                echo "
                En attend
            ";
            } else {
                // line 27
                echo "                Confirmé

            ";
            }
            // line 30
            echo "

        </td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "datemax", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>


        <td>
            ";
            // line 37
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "patisserie", array()) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 37, $this->getSourceContext()); })()))) {
                // line 38
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
                echo "\"> Participer </a>
            ";
            }
            // line 39
            echo "</td>
    </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        
        $__internal_d7a866af91428f15fc19a2cce9812ad7ed3d56a034db15b8ff82f30d79d523fa->leave($__internal_d7a866af91428f15fc19a2cce9812ad7ed3d56a034db15b8ff82f30d79d523fa_prof);

        
        $__internal_0ba59b14250c8a40dac7166a5083aea5d297012f597d917ee4da1e8b840f9ebe->leave($__internal_0ba59b14250c8a40dac7166a5083aea5d297012f597d917ee4da1e8b840f9ebe_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  117 => 39,  111 => 38,  109 => 37,  102 => 33,  97 => 30,  92 => 27,  87 => 24,  85 => 23,  80 => 21,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}
{% block container %}
    <form method=\"post\">
    Mes Appels :
    <input type=\"submit\" name=\"submit\" value=\"recherche\">

    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
    <thead>
<tr>
    <th>Patisserie</th>
    <th>Sujet</th>
    <th>Description</th>
    <th>Etat</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Action</th>

    {% for appels in a%}
    <tr>
        <td>{{ appels.patisserie.name }}</td>
        <td>{{ appels.sujet }}</td>
        <td>{{ appels.description }}</td>
        <td>
            {% if appels.statut == 0  %}

                En attend
            {% else %}
                Confirmé

            {% endif %}


        </td>
        <td>{{ appels.datemax|date('Y-m-d H:i:s')   }}</td>


        <td>
            {% if appels.patisserie != user  %}
                <a href=\"{{ path ('participer',{'id':appels.id}) }}\"> Participer </a>
            {% endif %}</td>
    </tr>

    {% endfor %}

{% endblock %}", "@PIAppel/appeldoffre/recherche.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\recherche.html.twig");
    }
}
