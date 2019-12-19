<?php

/* PIAppelBundle:appeldoffre:mesdemande.html.twig */
class __TwigTemplate_0d3c4186414ee505ec0ced2b6c9f30e3d587a5911545f4b523096bd98d02f9fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:mesdemande.html.twig", 1);
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
        $__internal_e016d2320d4c9536bb88b23b7bb3ce0bd975779adc0ad2b70490dd528690280e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e016d2320d4c9536bb88b23b7bb3ce0bd975779adc0ad2b70490dd528690280e->enter($__internal_e016d2320d4c9536bb88b23b7bb3ce0bd975779adc0ad2b70490dd528690280e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:mesdemande.html.twig"));

        $__internal_ee2998e8ff26b6ea0490f8cf1a49695ab46ae9accb467991de714101cb650e54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2998e8ff26b6ea0490f8cf1a49695ab46ae9accb467991de714101cb650e54->enter($__internal_ee2998e8ff26b6ea0490f8cf1a49695ab46ae9accb467991de714101cb650e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:mesdemande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e016d2320d4c9536bb88b23b7bb3ce0bd975779adc0ad2b70490dd528690280e->leave($__internal_e016d2320d4c9536bb88b23b7bb3ce0bd975779adc0ad2b70490dd528690280e_prof);

        
        $__internal_ee2998e8ff26b6ea0490f8cf1a49695ab46ae9accb467991de714101cb650e54->leave($__internal_ee2998e8ff26b6ea0490f8cf1a49695ab46ae9accb467991de714101cb650e54_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_335875b33fdd41bd51de598f0950ecf74cf3c3b88b58a13338d0612f01ce732d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335875b33fdd41bd51de598f0950ecf74cf3c3b88b58a13338d0612f01ce732d->enter($__internal_335875b33fdd41bd51de598f0950ecf74cf3c3b88b58a13338d0612f01ce732d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_dc42bff84207456f9a23c18f31dfea036fd16096161d8b246a32a946ff812f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc42bff84207456f9a23c18f31dfea036fd16096161d8b246a32a946ff812f0c->enter($__internal_dc42bff84207456f9a23c18f31dfea036fd16096161d8b246a32a946ff812f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    <table id=\"simple-table\" class=\"table  table-bordered table-hover\">
                        <thead>
                        <tr>
                          <th>Sujet Appel</th>
                            <th>Etat</th>

                            <th>Action</th>

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new Twig_Error_Runtime('Variable "a" does not exist.', 11, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appels"]) {
            // line 12
            echo "    <tr>
                               <td>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "appel", array()), "sujet", array()), "html", null, true);
            echo "</td>


                               <td>
                                   ";
            // line 17
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "statut", array()) == 0)) {
                // line 18
                echo "
                                       En attend
                                   ";
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),             // line 20
$context["appels"], "statut", array()) == 1)) {
                // line 21
                echo "                                       Confirmé
                                   ";
            } else {
                // line 23
                echo "
                                       Annulé
                                   ";
            }
            // line 26
            echo "


                               </td>




                  <td>

                      <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annulerdem", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["appels"], "id", array()))), "html", null, true);
            echo "\"> Annuler </a>
   </td>
    </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
";
        
        $__internal_dc42bff84207456f9a23c18f31dfea036fd16096161d8b246a32a946ff812f0c->leave($__internal_dc42bff84207456f9a23c18f31dfea036fd16096161d8b246a32a946ff812f0c_prof);

        
        $__internal_335875b33fdd41bd51de598f0950ecf74cf3c3b88b58a13338d0612f01ce732d->leave($__internal_335875b33fdd41bd51de598f0950ecf74cf3c3b88b58a13338d0612f01ce732d_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:mesdemande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  102 => 36,  90 => 26,  85 => 23,  81 => 21,  79 => 20,  75 => 18,  73 => 17,  66 => 13,  63 => 12,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
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

                            <th>Action</th>

{% for appels in a%}
    <tr>
                               <td>{{ appels.appel.sujet }}</td>


                               <td>
                                   {% if appels.statut == 0  %}

                                       En attend
                                   {% elseif(appels.statut == 1 ) %}
                                       Confirmé
                                   {% else %}

                                       Annulé
                                   {% endif %}



                               </td>




                  <td>

                      <a href=\"{{ path ('annulerdem',{'id':appels.id}) }}\"> Annuler </a>
   </td>
    </tr>

{% endfor %}

{% endblock %}", "PIAppelBundle:appeldoffre:mesdemande.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/mesdemande.html.twig");
    }
}
