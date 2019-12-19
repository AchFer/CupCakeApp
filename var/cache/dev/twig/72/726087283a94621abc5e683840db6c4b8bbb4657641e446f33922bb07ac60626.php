<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_02b5240374a891b6e74eb3d17d801ebb76fb7b561a6e145594311681345dcb61 extends Twig_Template
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
        $__internal_22d158bc35878220c38ac18b2357494db56474e32f2ed70464c3e76481d844c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d158bc35878220c38ac18b2357494db56474e32f2ed70464c3e76481d844c7->enter($__internal_22d158bc35878220c38ac18b2357494db56474e32f2ed70464c3e76481d844c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_37de476fd71ef12725ac9df856fec237e48598c996c4fae7dbf75fd241b6111a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37de476fd71ef12725ac9df856fec237e48598c996c4fae7dbf75fd241b6111a->enter($__internal_37de476fd71ef12725ac9df856fec237e48598c996c4fae7dbf75fd241b6111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_22d158bc35878220c38ac18b2357494db56474e32f2ed70464c3e76481d844c7->leave($__internal_22d158bc35878220c38ac18b2357494db56474e32f2ed70464c3e76481d844c7_prof);

        
        $__internal_37de476fd71ef12725ac9df856fec237e48598c996c4fae7dbf75fd241b6111a->leave($__internal_37de476fd71ef12725ac9df856fec237e48598c996c4fae7dbf75fd241b6111a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
