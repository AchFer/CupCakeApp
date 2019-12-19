<?php

/* @PIAppel/appeldoffre/affichageAO.html.twig */
class __TwigTemplate_46af74e11c6d5d1df929bebab99a5e57d2dbf8325a1c1516e15692f72322d154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/affichageAO.html.twig", 1);
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
        $__internal_937354691a2b0b59834a3990570295cdfb642835202ee489ffcc319dacb8b891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937354691a2b0b59834a3990570295cdfb642835202ee489ffcc319dacb8b891->enter($__internal_937354691a2b0b59834a3990570295cdfb642835202ee489ffcc319dacb8b891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/affichageAO.html.twig"));

        $__internal_2bb80422333e60db3be3e216df0999d2fc75455c4ee0a0b88b495b7ab2bd1ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb80422333e60db3be3e216df0999d2fc75455c4ee0a0b88b495b7ab2bd1ca9->enter($__internal_2bb80422333e60db3be3e216df0999d2fc75455c4ee0a0b88b495b7ab2bd1ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/affichageAO.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_937354691a2b0b59834a3990570295cdfb642835202ee489ffcc319dacb8b891->leave($__internal_937354691a2b0b59834a3990570295cdfb642835202ee489ffcc319dacb8b891_prof);

        
        $__internal_2bb80422333e60db3be3e216df0999d2fc75455c4ee0a0b88b495b7ab2bd1ca9->leave($__internal_2bb80422333e60db3be3e216df0999d2fc75455c4ee0a0b88b495b7ab2bd1ca9_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_7467c74e871040ab046e6aa7eeda284df704f7d8d6a7fd013c750e6813f7fe5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7467c74e871040ab046e6aa7eeda284df704f7d8d6a7fd013c750e6813f7fe5f->enter($__internal_7467c74e871040ab046e6aa7eeda284df704f7d8d6a7fd013c750e6813f7fe5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_0705110bbe1bd7159f00aff6fe0343a740886ba92c1154380a6cadff846c0443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0705110bbe1bd7159f00aff6fe0343a740886ba92c1154380a6cadff846c0443->enter($__internal_0705110bbe1bd7159f00aff6fe0343a740886ba92c1154380a6cadff846c0443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_0705110bbe1bd7159f00aff6fe0343a740886ba92c1154380a6cadff846c0443->leave($__internal_0705110bbe1bd7159f00aff6fe0343a740886ba92c1154380a6cadff846c0443_prof);

        
        $__internal_7467c74e871040ab046e6aa7eeda284df704f7d8d6a7fd013c750e6813f7fe5f->leave($__internal_7467c74e871040ab046e6aa7eeda284df704f7d8d6a7fd013c750e6813f7fe5f_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/affichageAO.html.twig";
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

{% endblock %}", "@PIAppel/appeldoffre/affichageAO.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\affichageAO.html.twig");
    }
}
