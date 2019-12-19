<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9a0e87e8ead898caa56b9a95530094bbf93e6866340e5fd5330e629c3976189d extends Twig_Template
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
        $__internal_393f44b27fcadbe0d95e6a70ab33228b1238185fbe401386bea5fd7bac82f501 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393f44b27fcadbe0d95e6a70ab33228b1238185fbe401386bea5fd7bac82f501->enter($__internal_393f44b27fcadbe0d95e6a70ab33228b1238185fbe401386bea5fd7bac82f501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_24409f50ebbbb916087d622e6ae8e732c8e1a2b25e452da4f326d6a0e3ad24f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24409f50ebbbb916087d622e6ae8e732c8e1a2b25e452da4f326d6a0e3ad24f6->enter($__internal_24409f50ebbbb916087d622e6ae8e732c8e1a2b25e452da4f326d6a0e3ad24f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_393f44b27fcadbe0d95e6a70ab33228b1238185fbe401386bea5fd7bac82f501->leave($__internal_393f44b27fcadbe0d95e6a70ab33228b1238185fbe401386bea5fd7bac82f501_prof);

        
        $__internal_24409f50ebbbb916087d622e6ae8e732c8e1a2b25e452da4f326d6a0e3ad24f6->leave($__internal_24409f50ebbbb916087d622e6ae8e732c8e1a2b25e452da4f326d6a0e3ad24f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
