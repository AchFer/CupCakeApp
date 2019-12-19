<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_08d0f8b267e4f6b8461483f7f24aa6dd3a65346a7e891730aaf3c569a6f76a88 extends Twig_Template
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
        $__internal_6c227b1574e65fd33613daea524811434e8b5affb3b47852cadac34bac3dc378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c227b1574e65fd33613daea524811434e8b5affb3b47852cadac34bac3dc378->enter($__internal_6c227b1574e65fd33613daea524811434e8b5affb3b47852cadac34bac3dc378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1578d62a10e22ef7bea852a79b400f79623b6ecf290445b11accea0a90c8139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1578d62a10e22ef7bea852a79b400f79623b6ecf290445b11accea0a90c8139f->enter($__internal_1578d62a10e22ef7bea852a79b400f79623b6ecf290445b11accea0a90c8139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6c227b1574e65fd33613daea524811434e8b5affb3b47852cadac34bac3dc378->leave($__internal_6c227b1574e65fd33613daea524811434e8b5affb3b47852cadac34bac3dc378_prof);

        
        $__internal_1578d62a10e22ef7bea852a79b400f79623b6ecf290445b11accea0a90c8139f->leave($__internal_1578d62a10e22ef7bea852a79b400f79623b6ecf290445b11accea0a90c8139f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
