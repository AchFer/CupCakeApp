<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d94eab6a535979634215283d4936d2592e84e3d96ae6bf0939050a8ebfacdbd9 extends Twig_Template
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
        $__internal_eb3740612c1918d9d426a9c428ea76e202249fdd4450ddc16ee1d5c7e0259028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3740612c1918d9d426a9c428ea76e202249fdd4450ddc16ee1d5c7e0259028->enter($__internal_eb3740612c1918d9d426a9c428ea76e202249fdd4450ddc16ee1d5c7e0259028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bcbb435a6a744aad7cc3611459db6a487161f89c6bdd3b9090ecfd31c8b65db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbb435a6a744aad7cc3611459db6a487161f89c6bdd3b9090ecfd31c8b65db7->enter($__internal_bcbb435a6a744aad7cc3611459db6a487161f89c6bdd3b9090ecfd31c8b65db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_eb3740612c1918d9d426a9c428ea76e202249fdd4450ddc16ee1d5c7e0259028->leave($__internal_eb3740612c1918d9d426a9c428ea76e202249fdd4450ddc16ee1d5c7e0259028_prof);

        
        $__internal_bcbb435a6a744aad7cc3611459db6a487161f89c6bdd3b9090ecfd31c8b65db7->leave($__internal_bcbb435a6a744aad7cc3611459db6a487161f89c6bdd3b9090ecfd31c8b65db7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
