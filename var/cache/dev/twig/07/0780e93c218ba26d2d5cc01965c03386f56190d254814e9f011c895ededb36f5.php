<?php

/* PIAppelBundle:appeldoffre:affichageAO.html.twig */
class __TwigTemplate_43d04041684832c93263a966ac810716b8794bd18b0dd12de5c086775dde4f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:affichageAO.html.twig", 1);
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
        $__internal_0fe99d402b322b133ba7c640a4ce0fa03b8f6d6f81d463462ebb73eb7fa7a4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe99d402b322b133ba7c640a4ce0fa03b8f6d6f81d463462ebb73eb7fa7a4a4->enter($__internal_0fe99d402b322b133ba7c640a4ce0fa03b8f6d6f81d463462ebb73eb7fa7a4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:affichageAO.html.twig"));

        $__internal_eec9b348c62a983c851295d9def6bb2f61e4cf32cd9b732208ee5fb5c923fa62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec9b348c62a983c851295d9def6bb2f61e4cf32cd9b732208ee5fb5c923fa62->enter($__internal_eec9b348c62a983c851295d9def6bb2f61e4cf32cd9b732208ee5fb5c923fa62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:affichageAO.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe99d402b322b133ba7c640a4ce0fa03b8f6d6f81d463462ebb73eb7fa7a4a4->leave($__internal_0fe99d402b322b133ba7c640a4ce0fa03b8f6d6f81d463462ebb73eb7fa7a4a4_prof);

        
        $__internal_eec9b348c62a983c851295d9def6bb2f61e4cf32cd9b732208ee5fb5c923fa62->leave($__internal_eec9b348c62a983c851295d9def6bb2f61e4cf32cd9b732208ee5fb5c923fa62_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_7f6e0d59206068052f1043a228d221fdf3c43903fe1c58b5a00599dfb1dfd306 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6e0d59206068052f1043a228d221fdf3c43903fe1c58b5a00599dfb1dfd306->enter($__internal_7f6e0d59206068052f1043a228d221fdf3c43903fe1c58b5a00599dfb1dfd306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_3b5ff1308b631331a168c48be5ea229594356e7db2717d1967eab87e70972c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5ff1308b631331a168c48be5ea229594356e7db2717d1967eab87e70972c77->enter($__internal_3b5ff1308b631331a168c48be5ea229594356e7db2717d1967eab87e70972c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
                        <thead>
                        <tr>

                            <th>Sujet</th>
                            <th>Description</th>
                           <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 13
            echo "    <tr>

                               <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "sujet", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "description", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "datemax", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>

                  <td> <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\">  <button class=\"btn btn-xs btn-info\">
                              <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                          </button></a></td>
                  <td> <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-xs btn-danger\">
                              <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                          </button> </a></td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        
        $__internal_3b5ff1308b631331a168c48be5ea229594356e7db2717d1967eab87e70972c77->leave($__internal_3b5ff1308b631331a168c48be5ea229594356e7db2717d1967eab87e70972c77_prof);

        
        $__internal_7f6e0d59206068052f1043a228d221fdf3c43903fe1c58b5a00599dfb1dfd306->leave($__internal_7f6e0d59206068052f1043a228d221fdf3c43903fe1c58b5a00599dfb1dfd306_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:affichageAO.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 28,  87 => 22,  81 => 19,  76 => 17,  72 => 16,  68 => 15,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
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
                            <th>Modifier</th>
                            <th>Supprimer</th>
{% for appels in a%}
    <tr>

                               <td>{{ appels.sujet }}</td>
                               <td>{{ appels.description }}</td>
                               <td>{{ appels.datemax|date('Y-m-d H:i:s')   }}</td>

                  <td> <a href=\"{{ path ('_update',{'id':appels.id}) }}\">  <button class=\"btn btn-xs btn-info\">
                              <i class=\"ace-icon fa fa-pencil bigger-120\"></i>
                          </button></a></td>
                  <td> <a href=\"{{ path ('_Delete',{'id':appels.id}) }}\"><button class=\"btn btn-xs btn-danger\">
                              <i class=\"ace-icon fa fa-trash-o bigger-120\"></i>
                          </button> </a></td>
    </tr>

{% endfor %}

{% endblock %}", "PIAppelBundle:appeldoffre:affichageAO.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/affichageAO.html.twig");
    }
}
