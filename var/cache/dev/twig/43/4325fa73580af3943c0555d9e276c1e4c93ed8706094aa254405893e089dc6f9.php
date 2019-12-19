<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_6264e9c6aa0919cf05ed5066e6bcff843a7d787f1a7043ee541ace88ddb2e0f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e32ab308df3e145721a8fa2084cfbe1886b41490a3cf25effeddebc911e7d42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e32ab308df3e145721a8fa2084cfbe1886b41490a3cf25effeddebc911e7d42a->enter($__internal_e32ab308df3e145721a8fa2084cfbe1886b41490a3cf25effeddebc911e7d42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9e182ac04cdae3466aa87a1b3cc526f3432d88a61323315827e84ab7df0be7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e182ac04cdae3466aa87a1b3cc526f3432d88a61323315827e84ab7df0be7db->enter($__internal_9e182ac04cdae3466aa87a1b3cc526f3432d88a61323315827e84ab7df0be7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e32ab308df3e145721a8fa2084cfbe1886b41490a3cf25effeddebc911e7d42a->leave($__internal_e32ab308df3e145721a8fa2084cfbe1886b41490a3cf25effeddebc911e7d42a_prof);

        
        $__internal_9e182ac04cdae3466aa87a1b3cc526f3432d88a61323315827e84ab7df0be7db->leave($__internal_9e182ac04cdae3466aa87a1b3cc526f3432d88a61323315827e84ab7df0be7db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8c0078ca3156e45c952413903378d8925280f268b424b099bc0c9eb01c36299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8c0078ca3156e45c952413903378d8925280f268b424b099bc0c9eb01c36299->enter($__internal_d8c0078ca3156e45c952413903378d8925280f268b424b099bc0c9eb01c36299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4ad4c900d345b85f67e7f56d69dd5af0636c313e0bf69c4381f5fa496a15f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4ad4c900d345b85f67e7f56d69dd5af0636c313e0bf69c4381f5fa496a15f4d->enter($__internal_b4ad4c900d345b85f67e7f56d69dd5af0636c313e0bf69c4381f5fa496a15f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b4ad4c900d345b85f67e7f56d69dd5af0636c313e0bf69c4381f5fa496a15f4d->leave($__internal_b4ad4c900d345b85f67e7f56d69dd5af0636c313e0bf69c4381f5fa496a15f4d_prof);

        
        $__internal_d8c0078ca3156e45c952413903378d8925280f268b424b099bc0c9eb01c36299->leave($__internal_d8c0078ca3156e45c952413903378d8925280f268b424b099bc0c9eb01c36299_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
