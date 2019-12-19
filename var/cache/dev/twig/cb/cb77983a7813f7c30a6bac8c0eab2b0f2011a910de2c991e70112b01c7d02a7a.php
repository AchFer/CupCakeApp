<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9862382bbbbc7d2c1003f0dbe7b70732834022c6fc40a2bddd3683c7b0b8d1b1 extends Twig_Template
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
        $__internal_415e96c4aadb2aaa10218cc920b41b69f81ed4961975f8fd8fc7e56363ded49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_415e96c4aadb2aaa10218cc920b41b69f81ed4961975f8fd8fc7e56363ded49b->enter($__internal_415e96c4aadb2aaa10218cc920b41b69f81ed4961975f8fd8fc7e56363ded49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e5e9168d04771b28a50f2cbb2a90f80d3ef600e461098e2e74e9b56c7263b992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e9168d04771b28a50f2cbb2a90f80d3ef600e461098e2e74e9b56c7263b992->enter($__internal_e5e9168d04771b28a50f2cbb2a90f80d3ef600e461098e2e74e9b56c7263b992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_415e96c4aadb2aaa10218cc920b41b69f81ed4961975f8fd8fc7e56363ded49b->leave($__internal_415e96c4aadb2aaa10218cc920b41b69f81ed4961975f8fd8fc7e56363ded49b_prof);

        
        $__internal_e5e9168d04771b28a50f2cbb2a90f80d3ef600e461098e2e74e9b56c7263b992->leave($__internal_e5e9168d04771b28a50f2cbb2a90f80d3ef600e461098e2e74e9b56c7263b992_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
