<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c5ff98bf07b02246b68a61b7a2e6958ec6a52318cb6c2ba4e20952fc99d820e8 extends Twig_Template
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
        $__internal_0ab35542b7f52846b98c361c5c37f17627622629e61af01484e92799fddcc01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab35542b7f52846b98c361c5c37f17627622629e61af01484e92799fddcc01e->enter($__internal_0ab35542b7f52846b98c361c5c37f17627622629e61af01484e92799fddcc01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b52de6b0ee8c0d8e1232ec757a543197d41d7d5618a56c64634608c033026440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52de6b0ee8c0d8e1232ec757a543197d41d7d5618a56c64634608c033026440->enter($__internal_b52de6b0ee8c0d8e1232ec757a543197d41d7d5618a56c64634608c033026440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0ab35542b7f52846b98c361c5c37f17627622629e61af01484e92799fddcc01e->leave($__internal_0ab35542b7f52846b98c361c5c37f17627622629e61af01484e92799fddcc01e_prof);

        
        $__internal_b52de6b0ee8c0d8e1232ec757a543197d41d7d5618a56c64634608c033026440->leave($__internal_b52de6b0ee8c0d8e1232ec757a543197d41d7d5618a56c64634608c033026440_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
