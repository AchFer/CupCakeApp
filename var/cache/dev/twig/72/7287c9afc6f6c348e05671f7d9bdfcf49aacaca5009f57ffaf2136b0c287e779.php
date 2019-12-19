<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_2e345552874719b366b12703ab530b7589fbed15a7de47b9f4fcf5542e30491e extends Twig_Template
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
        $__internal_dad8f23ffab44f39092e3462ffe1886afeba9a5cc176eb2dab652a6167667d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad8f23ffab44f39092e3462ffe1886afeba9a5cc176eb2dab652a6167667d07->enter($__internal_dad8f23ffab44f39092e3462ffe1886afeba9a5cc176eb2dab652a6167667d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_0c6b22ab2bbf2cca6fa92f014679996d52e41a040fcc08aa33478d40088773a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6b22ab2bbf2cca6fa92f014679996d52e41a040fcc08aa33478d40088773a6->enter($__internal_0c6b22ab2bbf2cca6fa92f014679996d52e41a040fcc08aa33478d40088773a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_dad8f23ffab44f39092e3462ffe1886afeba9a5cc176eb2dab652a6167667d07->leave($__internal_dad8f23ffab44f39092e3462ffe1886afeba9a5cc176eb2dab652a6167667d07_prof);

        
        $__internal_0c6b22ab2bbf2cca6fa92f014679996d52e41a040fcc08aa33478d40088773a6->leave($__internal_0c6b22ab2bbf2cca6fa92f014679996d52e41a040fcc08aa33478d40088773a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_start.html.php");
    }
}
