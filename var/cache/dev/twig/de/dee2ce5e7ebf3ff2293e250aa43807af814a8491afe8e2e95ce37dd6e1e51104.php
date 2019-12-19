<?php

/* @PIAppel/appeldoffre/demande.html.twig */
class __TwigTemplate_d92ede6dffded345a4ca78f243e5b366134b8be3bd1106f93859f573868d84a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/demande.html.twig", 1);
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
        $__internal_042855e793d3c49f305f7b61b5ff82724e63206627d725983f7cd8a1562814f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042855e793d3c49f305f7b61b5ff82724e63206627d725983f7cd8a1562814f9->enter($__internal_042855e793d3c49f305f7b61b5ff82724e63206627d725983f7cd8a1562814f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/demande.html.twig"));

        $__internal_1b2a7209875d8b3e45139b07fb777f1ecb029125164b3d61f0297d4f09087c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2a7209875d8b3e45139b07fb777f1ecb029125164b3d61f0297d4f09087c15->enter($__internal_1b2a7209875d8b3e45139b07fb777f1ecb029125164b3d61f0297d4f09087c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/demande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042855e793d3c49f305f7b61b5ff82724e63206627d725983f7cd8a1562814f9->leave($__internal_042855e793d3c49f305f7b61b5ff82724e63206627d725983f7cd8a1562814f9_prof);

        
        $__internal_1b2a7209875d8b3e45139b07fb777f1ecb029125164b3d61f0297d4f09087c15->leave($__internal_1b2a7209875d8b3e45139b07fb777f1ecb029125164b3d61f0297d4f09087c15_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_5ed26ea206cdd709af8ccbb90795c42a462837bfbcc94d4d479d949e9957763a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed26ea206cdd709af8ccbb90795c42a462837bfbcc94d4d479d949e9957763a->enter($__internal_5ed26ea206cdd709af8ccbb90795c42a462837bfbcc94d4d479d949e9957763a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_ed35608f693f0ce955c95ebd3b92bae367c5ae052cf702a40233b4d3452dfd98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed35608f693f0ce955c95ebd3b92bae367c5ae052cf702a40233b4d3452dfd98->enter($__internal_ed35608f693f0ce955c95ebd3b92bae367c5ae052cf702a40233b4d3452dfd98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_ed35608f693f0ce955c95ebd3b92bae367c5ae052cf702a40233b4d3452dfd98->leave($__internal_ed35608f693f0ce955c95ebd3b92bae367c5ae052cf702a40233b4d3452dfd98_prof);

        
        $__internal_5ed26ea206cdd709af8ccbb90795c42a462837bfbcc94d4d479d949e9957763a->leave($__internal_5ed26ea206cdd709af8ccbb90795c42a462837bfbcc94d4d479d949e9957763a_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/demande.html.twig";
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

{% endblock %}", "@PIAppel/appeldoffre/demande.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\demande.html.twig");
    }
}
