<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_86b8b61bf19f3fb9e670f266f67830f68cd4901ee496ef83c2ee0a359e0db992 extends Twig_Template
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
        $__internal_a18e777ed69b708afb4988ffdad197ed31932f7d92a90e830ad1ab9c0522fa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a18e777ed69b708afb4988ffdad197ed31932f7d92a90e830ad1ab9c0522fa43->enter($__internal_a18e777ed69b708afb4988ffdad197ed31932f7d92a90e830ad1ab9c0522fa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_4c2b5175b176cd5bdc7f3225d9a5f5a639e04273bbb221b1d34b440a436d6cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2b5175b176cd5bdc7f3225d9a5f5a639e04273bbb221b1d34b440a436d6cab->enter($__internal_4c2b5175b176cd5bdc7f3225d9a5f5a639e04273bbb221b1d34b440a436d6cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a18e777ed69b708afb4988ffdad197ed31932f7d92a90e830ad1ab9c0522fa43->leave($__internal_a18e777ed69b708afb4988ffdad197ed31932f7d92a90e830ad1ab9c0522fa43_prof);

        
        $__internal_4c2b5175b176cd5bdc7f3225d9a5f5a639e04273bbb221b1d34b440a436d6cab->leave($__internal_4c2b5175b176cd5bdc7f3225d9a5f5a639e04273bbb221b1d34b440a436d6cab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
