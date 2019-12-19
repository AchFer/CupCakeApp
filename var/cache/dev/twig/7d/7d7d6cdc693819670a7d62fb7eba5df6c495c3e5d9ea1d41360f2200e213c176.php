<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4e380cf79687d0f0a89141008947b3feafd2fc6229f14d19a5320b42ffbf07de extends Twig_Template
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
        $__internal_d51cf633cf42a4c618cd74822a0260bdd61a4e2e92709966a535b4ef3d217e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51cf633cf42a4c618cd74822a0260bdd61a4e2e92709966a535b4ef3d217e3d->enter($__internal_d51cf633cf42a4c618cd74822a0260bdd61a4e2e92709966a535b4ef3d217e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_17e384340f87a6a0080d5c7714114ad88e1f2da861724708dc5ff2d70709e329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e384340f87a6a0080d5c7714114ad88e1f2da861724708dc5ff2d70709e329->enter($__internal_17e384340f87a6a0080d5c7714114ad88e1f2da861724708dc5ff2d70709e329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d51cf633cf42a4c618cd74822a0260bdd61a4e2e92709966a535b4ef3d217e3d->leave($__internal_d51cf633cf42a4c618cd74822a0260bdd61a4e2e92709966a535b4ef3d217e3d_prof);

        
        $__internal_17e384340f87a6a0080d5c7714114ad88e1f2da861724708dc5ff2d70709e329->leave($__internal_17e384340f87a6a0080d5c7714114ad88e1f2da861724708dc5ff2d70709e329_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
