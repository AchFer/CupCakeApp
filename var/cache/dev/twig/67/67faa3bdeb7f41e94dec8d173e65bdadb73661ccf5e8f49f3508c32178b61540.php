<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_dc0ad8b61fcde94fba2c59a594619f24c166f0a3e7e5070c4c2a45c04422eb24 extends Twig_Template
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
        $__internal_f65b5e2e57271a80b119d7fb39f4646d0123ca0c4146f01de7df21bdd32541dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65b5e2e57271a80b119d7fb39f4646d0123ca0c4146f01de7df21bdd32541dc->enter($__internal_f65b5e2e57271a80b119d7fb39f4646d0123ca0c4146f01de7df21bdd32541dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d778657d26757ce8b9f4f980227385d226a2c5eb4fce5624f8007db08da3fc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d778657d26757ce8b9f4f980227385d226a2c5eb4fce5624f8007db08da3fc20->enter($__internal_d778657d26757ce8b9f4f980227385d226a2c5eb4fce5624f8007db08da3fc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f65b5e2e57271a80b119d7fb39f4646d0123ca0c4146f01de7df21bdd32541dc->leave($__internal_f65b5e2e57271a80b119d7fb39f4646d0123ca0c4146f01de7df21bdd32541dc_prof);

        
        $__internal_d778657d26757ce8b9f4f980227385d226a2c5eb4fce5624f8007db08da3fc20->leave($__internal_d778657d26757ce8b9f4f980227385d226a2c5eb4fce5624f8007db08da3fc20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
