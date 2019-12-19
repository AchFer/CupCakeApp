<?php

/* PIAppelBundle:appeldoffre:recherche.html.twig */
class __TwigTemplate_35dca79c2b243507a91878df50d955bcd58f0f546b80da818369e4b64869036a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:recherche.html.twig", 1);
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
        $__internal_f6abaee0632c760173d7ae7a1e43fdf934d4dba2a499aeea9f81bdc10e2d42ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6abaee0632c760173d7ae7a1e43fdf934d4dba2a499aeea9f81bdc10e2d42ba->enter($__internal_f6abaee0632c760173d7ae7a1e43fdf934d4dba2a499aeea9f81bdc10e2d42ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:recherche.html.twig"));

        $__internal_8415139d456c69a9079c0879e0389e8ab447691b7a051fcc740497d579fa0031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8415139d456c69a9079c0879e0389e8ab447691b7a051fcc740497d579fa0031->enter($__internal_8415139d456c69a9079c0879e0389e8ab447691b7a051fcc740497d579fa0031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6abaee0632c760173d7ae7a1e43fdf934d4dba2a499aeea9f81bdc10e2d42ba->leave($__internal_f6abaee0632c760173d7ae7a1e43fdf934d4dba2a499aeea9f81bdc10e2d42ba_prof);

        
        $__internal_8415139d456c69a9079c0879e0389e8ab447691b7a051fcc740497d579fa0031->leave($__internal_8415139d456c69a9079c0879e0389e8ab447691b7a051fcc740497d579fa0031_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_f63a94751589b0908ece1f45bcb032a2790b0222082c808c8564f3c9230ee7b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63a94751589b0908ece1f45bcb032a2790b0222082c808c8564f3c9230ee7b5->enter($__internal_f63a94751589b0908ece1f45bcb032a2790b0222082c808c8564f3c9230ee7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_132dace9de7c2f07fc86ecbcea5bf19ff3270f6d55c566fe25be3e41b39520d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132dace9de7c2f07fc86ecbcea5bf19ff3270f6d55c566fe25be3e41b39520d4->enter($__internal_132dace9de7c2f07fc86ecbcea5bf19ff3270f6d55c566fe25be3e41b39520d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_132dace9de7c2f07fc86ecbcea5bf19ff3270f6d55c566fe25be3e41b39520d4->leave($__internal_132dace9de7c2f07fc86ecbcea5bf19ff3270f6d55c566fe25be3e41b39520d4_prof);

        
        $__internal_f63a94751589b0908ece1f45bcb032a2790b0222082c808c8564f3c9230ee7b5->leave($__internal_f63a94751589b0908ece1f45bcb032a2790b0222082c808c8564f3c9230ee7b5_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:recherche.html.twig";
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

{% endblock %}", "PIAppelBundle:appeldoffre:recherche.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/recherche.html.twig");
    }
}
