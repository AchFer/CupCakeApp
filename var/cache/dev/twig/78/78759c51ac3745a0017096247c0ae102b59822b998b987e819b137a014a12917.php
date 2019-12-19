<?php

/* PIAppelBundle:appeldoffre:affichageall.html.twig */
class __TwigTemplate_9d25de9c9be90dadb9db3be4e9402272a8fe5b96b9aef9701653e90bb41b91d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:affichageall.html.twig", 1);
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
        $__internal_be698b101a1b316eec2ca97d9eb36899729ab29defc2808d5a8686c20885cae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be698b101a1b316eec2ca97d9eb36899729ab29defc2808d5a8686c20885cae2->enter($__internal_be698b101a1b316eec2ca97d9eb36899729ab29defc2808d5a8686c20885cae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:affichageall.html.twig"));

        $__internal_9836fbdacceea41755e8b2d45d152c5e9279ce4fb4ee1db22d3b376828d0f612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9836fbdacceea41755e8b2d45d152c5e9279ce4fb4ee1db22d3b376828d0f612->enter($__internal_9836fbdacceea41755e8b2d45d152c5e9279ce4fb4ee1db22d3b376828d0f612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:affichageall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be698b101a1b316eec2ca97d9eb36899729ab29defc2808d5a8686c20885cae2->leave($__internal_be698b101a1b316eec2ca97d9eb36899729ab29defc2808d5a8686c20885cae2_prof);

        
        $__internal_9836fbdacceea41755e8b2d45d152c5e9279ce4fb4ee1db22d3b376828d0f612->leave($__internal_9836fbdacceea41755e8b2d45d152c5e9279ce4fb4ee1db22d3b376828d0f612_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_832036f6719ce00a57c8c9d2ab5c24deca77bbf1e56441243c4dde5d54fc836c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832036f6719ce00a57c8c9d2ab5c24deca77bbf1e56441243c4dde5d54fc836c->enter($__internal_832036f6719ce00a57c8c9d2ab5c24deca77bbf1e56441243c4dde5d54fc836c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_35917a5da264631b21b97b567981b5e6e28aaca34ae83ac0aa1d2363427e0c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35917a5da264631b21b97b567981b5e6e28aaca34ae83ac0aa1d2363427e0c4b->enter($__internal_35917a5da264631b21b97b567981b5e6e28aaca34ae83ac0aa1d2363427e0c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
                        <thead>
                        <tr>
                          <th>Patisserie</th>
                            <th>Sujet</th>
                            <th>Description</th>
                            <th>Etat</th>
                           <th><i class=\"ace-icon fa fa-clock-o bigger-110 hidden-480\"></i>Date limite</th>
                            <th>Action</th>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 14
            echo "    <tr>
                               <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "patisserie", array()), "name", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "sujet", array()), "html", null, true);
            echo "</td>
                               <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "description", array()), "html", null, true);
            echo "</td>
                               <td>
                                   ";
            // line 19
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "statut", array()) == 0)) {
                // line 20
                echo "
                                       En attente
                                       ";
            } else {
                // line 23
                echo "                                           Confirmé

                                           ";
            }
            // line 26
            echo "

                               </td>
                               <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "datemax", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>


                  <td>
    ";
            // line 33
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "patisserie", array()) != (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 33, $this->getSourceContext()); })()))) {
                // line 34
                echo "                      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
                echo "\"> Participer </a>
    ";
            }
            // line 35
            echo "</td>
        <td>
            ";
            // line 37
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "datemax", array()) == twig_date_format_filter($this->env, "now", "Y-m-d H:i:s"))) {
                // line 38
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("participer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
                echo "\">  </a>
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
        
        $__internal_35917a5da264631b21b97b567981b5e6e28aaca34ae83ac0aa1d2363427e0c4b->leave($__internal_35917a5da264631b21b97b567981b5e6e28aaca34ae83ac0aa1d2363427e0c4b_prof);

        
        $__internal_832036f6719ce00a57c8c9d2ab5c24deca77bbf1e56441243c4dde5d54fc836c->leave($__internal_832036f6719ce00a57c8c9d2ab5c24deca77bbf1e56441243c4dde5d54fc836c_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:affichageall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  125 => 39,  119 => 38,  117 => 37,  113 => 35,  107 => 34,  105 => 33,  98 => 29,  93 => 26,  88 => 23,  83 => 20,  81 => 19,  76 => 17,  72 => 16,  68 => 15,  65 => 14,  61 => 13,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}
{% block container %}
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

                                       En attente
                                       {% else %}
                                           Confirmé

                                           {% endif %}


                               </td>
                               <td>{{ appels.datemax|date('Y-m-d H:i:s')   }}</td>


                  <td>
    {% if appels.patisserie != user  %}
                      <a href=\"{{ path ('participer',{'id':appels.id}) }}\"> Participer </a>
    {% endif %}</td>
        <td>
            {% if appels.datemax == \"now\"|date('Y-m-d H:i:s')  %}
                <a href=\"{{ path ('participer',{'id':appels.id}) }}\">  </a>
            {% endif %}</td>
    </tr>

{% endfor %}

{% endblock %}", "PIAppelBundle:appeldoffre:affichageall.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/affichageall.html.twig");
    }
}
