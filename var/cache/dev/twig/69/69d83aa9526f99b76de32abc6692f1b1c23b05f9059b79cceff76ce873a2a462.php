<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5bb51c67216df0dc71450803d262ba2b13863da15ac88fabaeb562a5f8f6f5cc extends Twig_Template
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
        $__internal_0b1d8449338a126ef1067e158a0ee46a63239860b44f70ec4cda1888a3ed5721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1d8449338a126ef1067e158a0ee46a63239860b44f70ec4cda1888a3ed5721->enter($__internal_0b1d8449338a126ef1067e158a0ee46a63239860b44f70ec4cda1888a3ed5721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_530437aa10f5066f6eca285c2b063f4d3e856ae8bdb788370aefc28f98629b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530437aa10f5066f6eca285c2b063f4d3e856ae8bdb788370aefc28f98629b3a->enter($__internal_530437aa10f5066f6eca285c2b063f4d3e856ae8bdb788370aefc28f98629b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0b1d8449338a126ef1067e158a0ee46a63239860b44f70ec4cda1888a3ed5721->leave($__internal_0b1d8449338a126ef1067e158a0ee46a63239860b44f70ec4cda1888a3ed5721_prof);

        
        $__internal_530437aa10f5066f6eca285c2b063f4d3e856ae8bdb788370aefc28f98629b3a->leave($__internal_530437aa10f5066f6eca285c2b063f4d3e856ae8bdb788370aefc28f98629b3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
