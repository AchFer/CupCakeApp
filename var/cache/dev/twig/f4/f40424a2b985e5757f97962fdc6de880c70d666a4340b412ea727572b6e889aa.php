<?php

/* @PIAppel/appeldoffre/validation.html.twig */
class __TwigTemplate_f3f3689ee75f686146ae4de6c50587045ccb159c4efdf87945aa341f635604d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/validation.html.twig", 1);
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
        $__internal_51d4ceee10e8ac88f01d3499a3816b907ad5c24acfc245383191f1107f78e500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d4ceee10e8ac88f01d3499a3816b907ad5c24acfc245383191f1107f78e500->enter($__internal_51d4ceee10e8ac88f01d3499a3816b907ad5c24acfc245383191f1107f78e500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/validation.html.twig"));

        $__internal_f8bfb6adf2ed5c737266632d878e96ee6c76304d88aa0a930662234ba026de6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8bfb6adf2ed5c737266632d878e96ee6c76304d88aa0a930662234ba026de6d->enter($__internal_f8bfb6adf2ed5c737266632d878e96ee6c76304d88aa0a930662234ba026de6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51d4ceee10e8ac88f01d3499a3816b907ad5c24acfc245383191f1107f78e500->leave($__internal_51d4ceee10e8ac88f01d3499a3816b907ad5c24acfc245383191f1107f78e500_prof);

        
        $__internal_f8bfb6adf2ed5c737266632d878e96ee6c76304d88aa0a930662234ba026de6d->leave($__internal_f8bfb6adf2ed5c737266632d878e96ee6c76304d88aa0a930662234ba026de6d_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_acd4b69cf8dc965726ad9995e218070fa0fe735d7aa45cdc52c91bb1de5e7837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd4b69cf8dc965726ad9995e218070fa0fe735d7aa45cdc52c91bb1de5e7837->enter($__internal_acd4b69cf8dc965726ad9995e218070fa0fe735d7aa45cdc52c91bb1de5e7837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_aedc115b65526ef1cdaa1333dccbda8088d7965436d450a32873985177186d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedc115b65526ef1cdaa1333dccbda8088d7965436d450a32873985177186d27->enter($__internal_aedc115b65526ef1cdaa1333dccbda8088d7965436d450a32873985177186d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\" xmlns=\"http://www.w3.org/1999/html\">
    <thead>
<tr>
    <th>Sujet</th>
    <th>Description</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Participer</th>
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




        <td> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_valide", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\">  <button class=\"btn btn-xs btn-success\">
                    <i class=\"ace-icon fa fa-check bigger-120\"></i>
                </button>
            </a>
            <button class=\"btn btn-xs btn-warning\">
                <i class=\"ace-icon fa fa-flag bigger-120\"></i>
            </button>
        </td>

        <td class=\"hidden-480\">

            <span class=\"label label-sm label-warning\">Expiré</span>
        </td>
        <td> <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pi_offre_appeloffre", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\">  <button class=\"btn btn-minier btn-primary dropdown-toggle\">
                    <i class=\"ace-icon fa fa-cog icon-only bigger-110\"></i>
                </button></a>
            <span class=\"label label-sm label-inverse arrowed-in\">Marqué</span>
        </td>
        <td class=\"hidden-480\">
            <span class=\"label label-sm label-success\">Enregistré</span>
        </td>
    </tr>

    </tr>




    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        
        $__internal_aedc115b65526ef1cdaa1333dccbda8088d7965436d450a32873985177186d27->leave($__internal_aedc115b65526ef1cdaa1333dccbda8088d7965436d450a32873985177186d27_prof);

        
        $__internal_acd4b69cf8dc965726ad9995e218070fa0fe735d7aa45cdc52c91bb1de5e7837->leave($__internal_acd4b69cf8dc965726ad9995e218070fa0fe735d7aa45cdc52c91bb1de5e7837_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 50,  99 => 34,  83 => 21,  75 => 16,  71 => 15,  67 => 14,  63 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}
{% block container %}
    <table id=\"simple-table\" class=\"table  table-bordered table-hover\" xmlns=\"http://www.w3.org/1999/html\">
    <thead>
<tr>
    <th>Sujet</th>
    <th>Description</th>
    <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
    <th>Participer</th>
    <th>Status</th>
    {% for appels in a%}
    <tr>

        <td>{{ appels.sujet }}</td>
        <td>{{ appels.description }}</td>
        <td>{{ appels.datemax|date }}</td>




        <td> <a href=\"{{ path ('_valide',{'id':appels.id}) }}\">  <button class=\"btn btn-xs btn-success\">
                    <i class=\"ace-icon fa fa-check bigger-120\"></i>
                </button>
            </a>
            <button class=\"btn btn-xs btn-warning\">
                <i class=\"ace-icon fa fa-flag bigger-120\"></i>
            </button>
        </td>

        <td class=\"hidden-480\">

            <span class=\"label label-sm label-warning\">Expiré</span>
        </td>
        <td> <a href=\"{{ path ('pi_offre_appeloffre',{'id':appels.id}) }}\">  <button class=\"btn btn-minier btn-primary dropdown-toggle\">
                    <i class=\"ace-icon fa fa-cog icon-only bigger-110\"></i>
                </button></a>
            <span class=\"label label-sm label-inverse arrowed-in\">Marqué</span>
        </td>
        <td class=\"hidden-480\">
            <span class=\"label label-sm label-success\">Enregistré</span>
        </td>
    </tr>

    </tr>




    {% endfor %}

{% endblock %}", "@PIAppel/appeldoffre/validation.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\validation.html.twig");
    }
}
