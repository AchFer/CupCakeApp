<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_fcc779cce82f78e99c37b5e8b7a3903755b74326be637777b48f9dd8703ea353 extends Twig_Template
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
        $__internal_d2fabfb4fb7df87fa1ec6635d727dc7d11e3eee22049cacdf77a164312257d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2fabfb4fb7df87fa1ec6635d727dc7d11e3eee22049cacdf77a164312257d35->enter($__internal_d2fabfb4fb7df87fa1ec6635d727dc7d11e3eee22049cacdf77a164312257d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_96fc6d19d8af2cb8e35c0c89f4f9d00d329600ff06fd8f545d2a99f0c1f1bb9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fc6d19d8af2cb8e35c0c89f4f9d00d329600ff06fd8f545d2a99f0c1f1bb9b->enter($__internal_96fc6d19d8af2cb8e35c0c89f4f9d00d329600ff06fd8f545d2a99f0c1f1bb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_d2fabfb4fb7df87fa1ec6635d727dc7d11e3eee22049cacdf77a164312257d35->leave($__internal_d2fabfb4fb7df87fa1ec6635d727dc7d11e3eee22049cacdf77a164312257d35_prof);

        
        $__internal_96fc6d19d8af2cb8e35c0c89f4f9d00d329600ff06fd8f545d2a99f0c1f1bb9b->leave($__internal_96fc6d19d8af2cb8e35c0c89f4f9d00d329600ff06fd8f545d2a99f0c1f1bb9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
