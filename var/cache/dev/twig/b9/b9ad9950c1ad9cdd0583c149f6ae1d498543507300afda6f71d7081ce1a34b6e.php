<?php

/* PIAppelBundle:appeldoffre:demande.html.twig */
class __TwigTemplate_29b514cba4a487f89332c9ba72489e932ca1628bbba8cc996a7afb7091421984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:demande.html.twig", 1);
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
        $__internal_8bfb5c29125a982492e44d44cf8d4e5267ad099a15cc89439a9a179a87c0817a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfb5c29125a982492e44d44cf8d4e5267ad099a15cc89439a9a179a87c0817a->enter($__internal_8bfb5c29125a982492e44d44cf8d4e5267ad099a15cc89439a9a179a87c0817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:demande.html.twig"));

        $__internal_4493acfdbfb27ec6f741343eeccafc3e03b69b53b55e62970f2fbcab7e86720a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4493acfdbfb27ec6f741343eeccafc3e03b69b53b55e62970f2fbcab7e86720a->enter($__internal_4493acfdbfb27ec6f741343eeccafc3e03b69b53b55e62970f2fbcab7e86720a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:demande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bfb5c29125a982492e44d44cf8d4e5267ad099a15cc89439a9a179a87c0817a->leave($__internal_8bfb5c29125a982492e44d44cf8d4e5267ad099a15cc89439a9a179a87c0817a_prof);

        
        $__internal_4493acfdbfb27ec6f741343eeccafc3e03b69b53b55e62970f2fbcab7e86720a->leave($__internal_4493acfdbfb27ec6f741343eeccafc3e03b69b53b55e62970f2fbcab7e86720a_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_dbdbb887b31ae2c67610c90567199c9ea5bebc6a6837a92e87d48d299d21777b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbdbb887b31ae2c67610c90567199c9ea5bebc6a6837a92e87d48d299d21777b->enter($__internal_dbdbb887b31ae2c67610c90567199c9ea5bebc6a6837a92e87d48d299d21777b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1987dcb9e2e2d182776aa8a384048133fa08c7143e6e69ff3b5595386fb67be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1987dcb9e2e2d182776aa8a384048133fa08c7143e6e69ff3b5595386fb67be9->enter($__internal_1987dcb9e2e2d182776aa8a384048133fa08c7143e6e69ff3b5595386fb67be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
                        <thead>
                        <tr>
    <th>Sujet Appel</th>
    <th>Etat</th>
    <th>Patisserie</th>

                            <th>Action</th>

";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 13
            echo "    <tr>
        <td>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "appel", array()), "sujet", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "statut", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "user", array()), "name", array()), "html", null, true);
            echo "</td>

                  <td>

                      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("confirmer", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\"> Confirmer </a>
                      <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annuler", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\"> Annuler </a>
    </td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
";
        
        $__internal_1987dcb9e2e2d182776aa8a384048133fa08c7143e6e69ff3b5595386fb67be9->leave($__internal_1987dcb9e2e2d182776aa8a384048133fa08c7143e6e69ff3b5595386fb67be9_prof);

        
        $__internal_dbdbb887b31ae2c67610c90567199c9ea5bebc6a6837a92e87d48d299d21777b->leave($__internal_dbdbb887b31ae2c67610c90567199c9ea5bebc6a6837a92e87d48d299d21777b_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:demande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  86 => 21,  82 => 20,  75 => 16,  71 => 15,  67 => 14,  64 => 13,  60 => 12,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}
{% block container %}
    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
                        <thead>
                        <tr>
    <th>Sujet Appel</th>
    <th>Etat</th>
    <th>Patisserie</th>

                            <th>Action</th>

{% for appels in a%}
    <tr>
        <td>{{ appels.appel.sujet }}</td>
        <td>{{ appels.statut }}</td>
        <td>{{ appels.user.name }}</td>

                  <td>

                      <a href=\"{{ path ('confirmer',{'id':appels.id}) }}\"> Confirmer </a>
                      <a href=\"{{ path ('annuler',{'id':appels.id}) }}\"> Annuler </a>
    </td>
    </tr>

{% endfor %}

{% endblock %}", "PIAppelBundle:appeldoffre:demande.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/demande.html.twig");
    }
}
