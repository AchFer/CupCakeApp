<?php

/* form_table_layout.html.twig */
class __TwigTemplate_e43cf276a9cd922dff23f708013333c2d92a75a71a9affb3814e0a475f37aedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_354bf630a9e6273fd5c285aeee2d66d32d580c7cdeffcc5bd18809afc1f84512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354bf630a9e6273fd5c285aeee2d66d32d580c7cdeffcc5bd18809afc1f84512->enter($__internal_354bf630a9e6273fd5c285aeee2d66d32d580c7cdeffcc5bd18809afc1f84512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_0322757e71a05389c6f13c8f5b8c63f95886d2ce5aae1b70131625d38dd81b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0322757e71a05389c6f13c8f5b8c63f95886d2ce5aae1b70131625d38dd81b37->enter($__internal_0322757e71a05389c6f13c8f5b8c63f95886d2ce5aae1b70131625d38dd81b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_354bf630a9e6273fd5c285aeee2d66d32d580c7cdeffcc5bd18809afc1f84512->leave($__internal_354bf630a9e6273fd5c285aeee2d66d32d580c7cdeffcc5bd18809afc1f84512_prof);

        
        $__internal_0322757e71a05389c6f13c8f5b8c63f95886d2ce5aae1b70131625d38dd81b37->leave($__internal_0322757e71a05389c6f13c8f5b8c63f95886d2ce5aae1b70131625d38dd81b37_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_114ae48f3c16fe73e836158790e980d5dec37661508c3fc263cd837159fe411e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114ae48f3c16fe73e836158790e980d5dec37661508c3fc263cd837159fe411e->enter($__internal_114ae48f3c16fe73e836158790e980d5dec37661508c3fc263cd837159fe411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4b6eb729a0694b2a9a34352f4ea4f7301452356e329d3f934fbb7f230a539427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6eb729a0694b2a9a34352f4ea4f7301452356e329d3f934fbb7f230a539427->enter($__internal_4b6eb729a0694b2a9a34352f4ea4f7301452356e329d3f934fbb7f230a539427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_4b6eb729a0694b2a9a34352f4ea4f7301452356e329d3f934fbb7f230a539427->leave($__internal_4b6eb729a0694b2a9a34352f4ea4f7301452356e329d3f934fbb7f230a539427_prof);

        
        $__internal_114ae48f3c16fe73e836158790e980d5dec37661508c3fc263cd837159fe411e->leave($__internal_114ae48f3c16fe73e836158790e980d5dec37661508c3fc263cd837159fe411e_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f12fc2ebb7263c0e08226f900a64f82505464d784f767d8762cb9dc7199bdd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12fc2ebb7263c0e08226f900a64f82505464d784f767d8762cb9dc7199bdd29->enter($__internal_f12fc2ebb7263c0e08226f900a64f82505464d784f767d8762cb9dc7199bdd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_b3fa17e9e15da368c20bcf1f9f64378b88655a0203af970391575e3e7de10409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fa17e9e15da368c20bcf1f9f64378b88655a0203af970391575e3e7de10409->enter($__internal_b3fa17e9e15da368c20bcf1f9f64378b88655a0203af970391575e3e7de10409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_b3fa17e9e15da368c20bcf1f9f64378b88655a0203af970391575e3e7de10409->leave($__internal_b3fa17e9e15da368c20bcf1f9f64378b88655a0203af970391575e3e7de10409_prof);

        
        $__internal_f12fc2ebb7263c0e08226f900a64f82505464d784f767d8762cb9dc7199bdd29->leave($__internal_f12fc2ebb7263c0e08226f900a64f82505464d784f767d8762cb9dc7199bdd29_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_09a8bfd1ffbf7d225d7062bf741e4a097270500f7b73f6ff55fc0415341b3d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a8bfd1ffbf7d225d7062bf741e4a097270500f7b73f6ff55fc0415341b3d3a->enter($__internal_09a8bfd1ffbf7d225d7062bf741e4a097270500f7b73f6ff55fc0415341b3d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6066823e6ae91a778ba925d1830e436c240f8868b614e5f28f2a3dfbca8075ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6066823e6ae91a778ba925d1830e436c240f8868b614e5f28f2a3dfbca8075ca->enter($__internal_6066823e6ae91a778ba925d1830e436c240f8868b614e5f28f2a3dfbca8075ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_6066823e6ae91a778ba925d1830e436c240f8868b614e5f28f2a3dfbca8075ca->leave($__internal_6066823e6ae91a778ba925d1830e436c240f8868b614e5f28f2a3dfbca8075ca_prof);

        
        $__internal_09a8bfd1ffbf7d225d7062bf741e4a097270500f7b73f6ff55fc0415341b3d3a->leave($__internal_09a8bfd1ffbf7d225d7062bf741e4a097270500f7b73f6ff55fc0415341b3d3a_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_2e72a3e0322bab3d80f1467e16427f179655e4f7e11ad4333de158fa70845b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e72a3e0322bab3d80f1467e16427f179655e4f7e11ad4333de158fa70845b46->enter($__internal_2e72a3e0322bab3d80f1467e16427f179655e4f7e11ad4333de158fa70845b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_15f8c19236bfe72fa16db708d568e154837d1c974041b0f9be121836d7ad1af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f8c19236bfe72fa16db708d568e154837d1c974041b0f9be121836d7ad1af9->enter($__internal_15f8c19236bfe72fa16db708d568e154837d1c974041b0f9be121836d7ad1af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_15f8c19236bfe72fa16db708d568e154837d1c974041b0f9be121836d7ad1af9->leave($__internal_15f8c19236bfe72fa16db708d568e154837d1c974041b0f9be121836d7ad1af9_prof);

        
        $__internal_2e72a3e0322bab3d80f1467e16427f179655e4f7e11ad4333de158fa70845b46->leave($__internal_2e72a3e0322bab3d80f1467e16427f179655e4f7e11ad4333de158fa70845b46_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
