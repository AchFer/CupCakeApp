<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2bdb5b60e61ff9be4d7953e5d5cfd3f78f84cbaefa24fcb1d74ee1ea277ddfb8 extends Twig_Template
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
        $__internal_54cf571123ff643f06e99c770d1488892cbd78eef7b8f32420e5b1d613a1a9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54cf571123ff643f06e99c770d1488892cbd78eef7b8f32420e5b1d613a1a9c8->enter($__internal_54cf571123ff643f06e99c770d1488892cbd78eef7b8f32420e5b1d613a1a9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_014becd398e409c37e55401955b03a444070ec9de7542bcd34d37c70b6c74d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014becd398e409c37e55401955b03a444070ec9de7542bcd34d37c70b6c74d22->enter($__internal_014becd398e409c37e55401955b03a444070ec9de7542bcd34d37c70b6c74d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_54cf571123ff643f06e99c770d1488892cbd78eef7b8f32420e5b1d613a1a9c8->leave($__internal_54cf571123ff643f06e99c770d1488892cbd78eef7b8f32420e5b1d613a1a9c8_prof);

        
        $__internal_014becd398e409c37e55401955b03a444070ec9de7542bcd34d37c70b6c74d22->leave($__internal_014becd398e409c37e55401955b03a444070ec9de7542bcd34d37c70b6c74d22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
