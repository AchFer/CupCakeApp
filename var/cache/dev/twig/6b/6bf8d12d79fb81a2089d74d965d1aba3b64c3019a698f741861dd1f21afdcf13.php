<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_33778e57f96f3dacf8b9b1fdf7dbfdd37b5756fae1d2a49603d57a641615cd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a131990c60ef13fd1526223e651dc0e5d40fd85ef2d21a75577b9d543bf6de6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a131990c60ef13fd1526223e651dc0e5d40fd85ef2d21a75577b9d543bf6de6a->enter($__internal_a131990c60ef13fd1526223e651dc0e5d40fd85ef2d21a75577b9d543bf6de6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f8c75cb4d5ba8ee298f06614e046efb5653722f3ecd5780921fb1369d88d56d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c75cb4d5ba8ee298f06614e046efb5653722f3ecd5780921fb1369d88d56d5->enter($__internal_f8c75cb4d5ba8ee298f06614e046efb5653722f3ecd5780921fb1369d88d56d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a131990c60ef13fd1526223e651dc0e5d40fd85ef2d21a75577b9d543bf6de6a->leave($__internal_a131990c60ef13fd1526223e651dc0e5d40fd85ef2d21a75577b9d543bf6de6a_prof);

        
        $__internal_f8c75cb4d5ba8ee298f06614e046efb5653722f3ecd5780921fb1369d88d56d5->leave($__internal_f8c75cb4d5ba8ee298f06614e046efb5653722f3ecd5780921fb1369d88d56d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c8e2c573facebadad228a0c1f879b8db011b2ae92a01936b04117745a9805af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8e2c573facebadad228a0c1f879b8db011b2ae92a01936b04117745a9805af6->enter($__internal_c8e2c573facebadad228a0c1f879b8db011b2ae92a01936b04117745a9805af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b76580aa04e00dbdf6ab63d205e38ce68e87b71c74dc4a34a1a98d858765ac59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76580aa04e00dbdf6ab63d205e38ce68e87b71c74dc4a34a1a98d858765ac59->enter($__internal_b76580aa04e00dbdf6ab63d205e38ce68e87b71c74dc4a34a1a98d858765ac59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b76580aa04e00dbdf6ab63d205e38ce68e87b71c74dc4a34a1a98d858765ac59->leave($__internal_b76580aa04e00dbdf6ab63d205e38ce68e87b71c74dc4a34a1a98d858765ac59_prof);

        
        $__internal_c8e2c573facebadad228a0c1f879b8db011b2ae92a01936b04117745a9805af6->leave($__internal_c8e2c573facebadad228a0c1f879b8db011b2ae92a01936b04117745a9805af6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebea357f62b2b0307091a3508d8947bb966491bb75caf755cfa71dba0e1f4ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebea357f62b2b0307091a3508d8947bb966491bb75caf755cfa71dba0e1f4ea7->enter($__internal_ebea357f62b2b0307091a3508d8947bb966491bb75caf755cfa71dba0e1f4ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49a31f570e4b863aeee6621e9bf177e416e19905e0dfbd51e5a91af1d6e70473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a31f570e4b863aeee6621e9bf177e416e19905e0dfbd51e5a91af1d6e70473->enter($__internal_49a31f570e4b863aeee6621e9bf177e416e19905e0dfbd51e5a91af1d6e70473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49a31f570e4b863aeee6621e9bf177e416e19905e0dfbd51e5a91af1d6e70473->leave($__internal_49a31f570e4b863aeee6621e9bf177e416e19905e0dfbd51e5a91af1d6e70473_prof);

        
        $__internal_ebea357f62b2b0307091a3508d8947bb966491bb75caf755cfa71dba0e1f4ea7->leave($__internal_ebea357f62b2b0307091a3508d8947bb966491bb75caf755cfa71dba0e1f4ea7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03e02847be6ec72d09714775fa220e321c0c83f653a5c03dc27d0833a83d71bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e02847be6ec72d09714775fa220e321c0c83f653a5c03dc27d0833a83d71bc->enter($__internal_03e02847be6ec72d09714775fa220e321c0c83f653a5c03dc27d0833a83d71bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e2c6282e500165b8e8036313ee398664b0540519fada9a28c6dffc318a390d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2c6282e500165b8e8036313ee398664b0540519fada9a28c6dffc318a390d3->enter($__internal_9e2c6282e500165b8e8036313ee398664b0540519fada9a28c6dffc318a390d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9e2c6282e500165b8e8036313ee398664b0540519fada9a28c6dffc318a390d3->leave($__internal_9e2c6282e500165b8e8036313ee398664b0540519fada9a28c6dffc318a390d3_prof);

        
        $__internal_03e02847be6ec72d09714775fa220e321c0c83f653a5c03dc27d0833a83d71bc->leave($__internal_03e02847be6ec72d09714775fa220e321c0c83f653a5c03dc27d0833a83d71bc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
