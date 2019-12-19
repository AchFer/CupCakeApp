<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_22ba8bc3579564a060b5f4c6382b3e376a428295b5ee5119a1b5548a542f91ad extends Twig_Template
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
        $__internal_e874282e657ccc94fda5fc6aacede53a8bb24734fe42027952a59091d23e3207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e874282e657ccc94fda5fc6aacede53a8bb24734fe42027952a59091d23e3207->enter($__internal_e874282e657ccc94fda5fc6aacede53a8bb24734fe42027952a59091d23e3207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e6c2c2c94d47997693cb789fbcc2da08bc749e8f034e86401fdb1305501526e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c2c2c94d47997693cb789fbcc2da08bc749e8f034e86401fdb1305501526e7->enter($__internal_e6c2c2c94d47997693cb789fbcc2da08bc749e8f034e86401fdb1305501526e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e874282e657ccc94fda5fc6aacede53a8bb24734fe42027952a59091d23e3207->leave($__internal_e874282e657ccc94fda5fc6aacede53a8bb24734fe42027952a59091d23e3207_prof);

        
        $__internal_e6c2c2c94d47997693cb789fbcc2da08bc749e8f034e86401fdb1305501526e7->leave($__internal_e6c2c2c94d47997693cb789fbcc2da08bc749e8f034e86401fdb1305501526e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
