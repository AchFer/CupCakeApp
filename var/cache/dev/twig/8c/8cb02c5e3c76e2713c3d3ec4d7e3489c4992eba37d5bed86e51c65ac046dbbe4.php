<?php

/* PIAppelBundle:appeldoffre:validation.html.twig */
class __TwigTemplate_b97b6689b66534506d61978323af6fdd53c304ec6fe63de828d887dec3b96a9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:validation.html.twig", 1);
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
        $__internal_adafed5d72d406a3d8ad44fb4fb76eeffc21a50beab0f89c88bc3f9da6a66125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adafed5d72d406a3d8ad44fb4fb76eeffc21a50beab0f89c88bc3f9da6a66125->enter($__internal_adafed5d72d406a3d8ad44fb4fb76eeffc21a50beab0f89c88bc3f9da6a66125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:validation.html.twig"));

        $__internal_6ffff378f074e028bbc6c8d72fcaab6afff73c5605bfca24d964c2f4f6d8a25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffff378f074e028bbc6c8d72fcaab6afff73c5605bfca24d964c2f4f6d8a25b->enter($__internal_6ffff378f074e028bbc6c8d72fcaab6afff73c5605bfca24d964c2f4f6d8a25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adafed5d72d406a3d8ad44fb4fb76eeffc21a50beab0f89c88bc3f9da6a66125->leave($__internal_adafed5d72d406a3d8ad44fb4fb76eeffc21a50beab0f89c88bc3f9da6a66125_prof);

        
        $__internal_6ffff378f074e028bbc6c8d72fcaab6afff73c5605bfca24d964c2f4f6d8a25b->leave($__internal_6ffff378f074e028bbc6c8d72fcaab6afff73c5605bfca24d964c2f4f6d8a25b_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_b5218c89fd0c0f2e7ec5e704c81f51b7c3655d1923967de2e81ac0a5aad5acca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5218c89fd0c0f2e7ec5e704c81f51b7c3655d1923967de2e81ac0a5aad5acca->enter($__internal_b5218c89fd0c0f2e7ec5e704c81f51b7c3655d1923967de2e81ac0a5aad5acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8cd4c783abe7a5d22a1d938df0f5955543df82626114dfa4d5bb5ad704d0843a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd4c783abe7a5d22a1d938df0f5955543df82626114dfa4d5bb5ad704d0843a->enter($__internal_8cd4c783abe7a5d22a1d938df0f5955543df82626114dfa4d5bb5ad704d0843a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_8cd4c783abe7a5d22a1d938df0f5955543df82626114dfa4d5bb5ad704d0843a->leave($__internal_8cd4c783abe7a5d22a1d938df0f5955543df82626114dfa4d5bb5ad704d0843a_prof);

        
        $__internal_b5218c89fd0c0f2e7ec5e704c81f51b7c3655d1923967de2e81ac0a5aad5acca->leave($__internal_b5218c89fd0c0f2e7ec5e704c81f51b7c3655d1923967de2e81ac0a5aad5acca_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:validation.html.twig";
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

{% endblock %}", "PIAppelBundle:appeldoffre:validation.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/validation.html.twig");
    }
}
