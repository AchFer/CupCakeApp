<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9bc94e068ff361b0735dc72edaa9c26bb412620e7ba97cbaaaabbc9a34775e5f extends Twig_Template
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
        $__internal_21527211673af8cbf95e8a06ae675b86643fd850a07cfe943966a1960504468f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21527211673af8cbf95e8a06ae675b86643fd850a07cfe943966a1960504468f->enter($__internal_21527211673af8cbf95e8a06ae675b86643fd850a07cfe943966a1960504468f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_da2d4b46da376f58dc620da4dadbb99f48f8e37a3916d2a8d13a8bf8d324cf23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2d4b46da376f58dc620da4dadbb99f48f8e37a3916d2a8d13a8bf8d324cf23->enter($__internal_da2d4b46da376f58dc620da4dadbb99f48f8e37a3916d2a8d13a8bf8d324cf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_21527211673af8cbf95e8a06ae675b86643fd850a07cfe943966a1960504468f->leave($__internal_21527211673af8cbf95e8a06ae675b86643fd850a07cfe943966a1960504468f_prof);

        
        $__internal_da2d4b46da376f58dc620da4dadbb99f48f8e37a3916d2a8d13a8bf8d324cf23->leave($__internal_da2d4b46da376f58dc620da4dadbb99f48f8e37a3916d2a8d13a8bf8d324cf23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
