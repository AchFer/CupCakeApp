<?php

/* @PIAppel/appeldoffre/mesdemande.html.twig */
class __TwigTemplate_5ea7048149ebdd5b8741295eda90324f2282c1debe25fdef0db433c4bfaf710f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/mesdemande.html.twig", 1);
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
        $__internal_1a32c34c68367c10daa250133e662e289fbd6f8f3e06508ca0e0486e3b8f235b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a32c34c68367c10daa250133e662e289fbd6f8f3e06508ca0e0486e3b8f235b->enter($__internal_1a32c34c68367c10daa250133e662e289fbd6f8f3e06508ca0e0486e3b8f235b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/mesdemande.html.twig"));

        $__internal_78db6a7636eb31abcd1c9cd5a6a01cc784630a0e81857e148714246764585d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78db6a7636eb31abcd1c9cd5a6a01cc784630a0e81857e148714246764585d80->enter($__internal_78db6a7636eb31abcd1c9cd5a6a01cc784630a0e81857e148714246764585d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/mesdemande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a32c34c68367c10daa250133e662e289fbd6f8f3e06508ca0e0486e3b8f235b->leave($__internal_1a32c34c68367c10daa250133e662e289fbd6f8f3e06508ca0e0486e3b8f235b_prof);

        
        $__internal_78db6a7636eb31abcd1c9cd5a6a01cc784630a0e81857e148714246764585d80->leave($__internal_78db6a7636eb31abcd1c9cd5a6a01cc784630a0e81857e148714246764585d80_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_7994d05f7eeae894f2e23e6577159afcb3905a2bb542f9d117644c6137e871b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7994d05f7eeae894f2e23e6577159afcb3905a2bb542f9d117644c6137e871b4->enter($__internal_7994d05f7eeae894f2e23e6577159afcb3905a2bb542f9d117644c6137e871b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_fc41e2a77dde4f4828ace5ce5b6e640015b14774952c1ffc062acfe9f1c0c150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc41e2a77dde4f4828ace5ce5b6e640015b14774952c1ffc062acfe9f1c0c150->enter($__internal_fc41e2a77dde4f4828ace5ce5b6e640015b14774952c1ffc062acfe9f1c0c150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_fc41e2a77dde4f4828ace5ce5b6e640015b14774952c1ffc062acfe9f1c0c150->leave($__internal_fc41e2a77dde4f4828ace5ce5b6e640015b14774952c1ffc062acfe9f1c0c150_prof);

        
        $__internal_7994d05f7eeae894f2e23e6577159afcb3905a2bb542f9d117644c6137e871b4->leave($__internal_7994d05f7eeae894f2e23e6577159afcb3905a2bb542f9d117644c6137e871b4_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/mesdemande.html.twig";
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

{% endblock %}", "@PIAppel/appeldoffre/mesdemande.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\mesdemande.html.twig");
    }
}
