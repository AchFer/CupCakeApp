<?php

/* @PIUser/Group/edit_content.html.twig */
class __TwigTemplate_7680aba312b34fc6d692021bd4191507ea4c001c2cb047171eacd529a134c688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fec4f9d09cf493c985573b6f6475dfce4a2317ca7ab871071aced773a2c3d3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec4f9d09cf493c985573b6f6475dfce4a2317ca7ab871071aced773a2c3d3ea->enter($__internal_fec4f9d09cf493c985573b6f6475dfce4a2317ca7ab871071aced773a2c3d3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/edit_content.html.twig"));

        $__internal_b234b43d6016d064d805b1570110a902f5fc76afc3cbbfc825336d3a5c218fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b234b43d6016d064d805b1570110a902f5fc76afc3cbbfc825336d3a5c218fea->enter($__internal_b234b43d6016d064d805b1570110a902f5fc76afc3cbbfc825336d3a5c218fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_fec4f9d09cf493c985573b6f6475dfce4a2317ca7ab871071aced773a2c3d3ea->leave($__internal_fec4f9d09cf493c985573b6f6475dfce4a2317ca7ab871071aced773a2c3d3ea_prof);

        
        $__internal_b234b43d6016d064d805b1570110a902f5fc76afc3cbbfc825336d3a5c218fea->leave($__internal_b234b43d6016d064d805b1570110a902f5fc76afc3cbbfc825336d3a5c218fea_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@PIUser/Group/edit_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\edit_content.html.twig");
    }
}
