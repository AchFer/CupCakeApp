<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_8839f5dc3e9d534226f9f737852c3e1b44f1a8e3274c40208200f545c03949ba extends Twig_Template
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
        $__internal_435aa80e681e04b33de6eda538374e17267c48e77d0a73dbfb6b144f066cfa38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_435aa80e681e04b33de6eda538374e17267c48e77d0a73dbfb6b144f066cfa38->enter($__internal_435aa80e681e04b33de6eda538374e17267c48e77d0a73dbfb6b144f066cfa38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_311a871e0c933c85f7d2a7b04ef1389879394827efbbba64c6d33588bfc68db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311a871e0c933c85f7d2a7b04ef1389879394827efbbba64c6d33588bfc68db9->enter($__internal_311a871e0c933c85f7d2a7b04ef1389879394827efbbba64c6d33588bfc68db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_435aa80e681e04b33de6eda538374e17267c48e77d0a73dbfb6b144f066cfa38->leave($__internal_435aa80e681e04b33de6eda538374e17267c48e77d0a73dbfb6b144f066cfa38_prof);

        
        $__internal_311a871e0c933c85f7d2a7b04ef1389879394827efbbba64c6d33588bfc68db9->leave($__internal_311a871e0c933c85f7d2a7b04ef1389879394827efbbba64c6d33588bfc68db9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
