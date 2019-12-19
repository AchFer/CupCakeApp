<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_99e47c9fdc8dabf9f9e2fce8db82bed02064b57b15ccce3fddf8b87bcd33548c extends Twig_Template
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
        $__internal_fcd2602d02ecf6cb2d87d30095be9fe8742997d9964995cfe6da66d2307ae0a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd2602d02ecf6cb2d87d30095be9fe8742997d9964995cfe6da66d2307ae0a2->enter($__internal_fcd2602d02ecf6cb2d87d30095be9fe8742997d9964995cfe6da66d2307ae0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0de35dcef31db1093cf30505181b6cf9461b42cd025c7d34e48d5f08cdca2878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0de35dcef31db1093cf30505181b6cf9461b42cd025c7d34e48d5f08cdca2878->enter($__internal_0de35dcef31db1093cf30505181b6cf9461b42cd025c7d34e48d5f08cdca2878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fcd2602d02ecf6cb2d87d30095be9fe8742997d9964995cfe6da66d2307ae0a2->leave($__internal_fcd2602d02ecf6cb2d87d30095be9fe8742997d9964995cfe6da66d2307ae0a2_prof);

        
        $__internal_0de35dcef31db1093cf30505181b6cf9461b42cd025c7d34e48d5f08cdca2878->leave($__internal_0de35dcef31db1093cf30505181b6cf9461b42cd025c7d34e48d5f08cdca2878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
