<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_305eacf8abb18e8c33564ed1eb698bd8ca4d617e2acd77aeaf5f02924ccd31a6 extends Twig_Template
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
        $__internal_a86679d163cac4ec915ff1a10411031f515061f23de731e1cde72adde1b91cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a86679d163cac4ec915ff1a10411031f515061f23de731e1cde72adde1b91cd4->enter($__internal_a86679d163cac4ec915ff1a10411031f515061f23de731e1cde72adde1b91cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4f5419efb736e71e9945d0a5bc64a93dd6093b17b91704878005a039cf13c327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5419efb736e71e9945d0a5bc64a93dd6093b17b91704878005a039cf13c327->enter($__internal_4f5419efb736e71e9945d0a5bc64a93dd6093b17b91704878005a039cf13c327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a86679d163cac4ec915ff1a10411031f515061f23de731e1cde72adde1b91cd4->leave($__internal_a86679d163cac4ec915ff1a10411031f515061f23de731e1cde72adde1b91cd4_prof);

        
        $__internal_4f5419efb736e71e9945d0a5bc64a93dd6093b17b91704878005a039cf13c327->leave($__internal_4f5419efb736e71e9945d0a5bc64a93dd6093b17b91704878005a039cf13c327_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
