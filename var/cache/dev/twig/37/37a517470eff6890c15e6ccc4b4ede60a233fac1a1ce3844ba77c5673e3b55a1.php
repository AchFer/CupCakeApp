<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_351c0b915d11b6a61b57981708c56859c519c1743b55f8f92c8ca389cd5d4d23 extends Twig_Template
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
        $__internal_4bf040a37f39d2b183b1a88626d47de95f481a79ac92cab4595412756e20100b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf040a37f39d2b183b1a88626d47de95f481a79ac92cab4595412756e20100b->enter($__internal_4bf040a37f39d2b183b1a88626d47de95f481a79ac92cab4595412756e20100b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c3edb45ca9f0362e6572e917eba395d4fc8e0921bb443f90b373d1b027793fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3edb45ca9f0362e6572e917eba395d4fc8e0921bb443f90b373d1b027793fb2->enter($__internal_c3edb45ca9f0362e6572e917eba395d4fc8e0921bb443f90b373d1b027793fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4bf040a37f39d2b183b1a88626d47de95f481a79ac92cab4595412756e20100b->leave($__internal_4bf040a37f39d2b183b1a88626d47de95f481a79ac92cab4595412756e20100b_prof);

        
        $__internal_c3edb45ca9f0362e6572e917eba395d4fc8e0921bb443f90b373d1b027793fb2->leave($__internal_c3edb45ca9f0362e6572e917eba395d4fc8e0921bb443f90b373d1b027793fb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
