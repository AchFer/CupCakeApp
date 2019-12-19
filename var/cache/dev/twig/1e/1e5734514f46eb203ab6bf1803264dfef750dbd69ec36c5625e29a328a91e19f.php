<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bf2254b39268269dc8695d320b0ea9d476e23e5d888aef9cd173edf62faca7ba extends Twig_Template
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
        $__internal_f437a87ec6ee246ee027076121f84c10368de14aedcbd0252b1696ec2b1fc699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f437a87ec6ee246ee027076121f84c10368de14aedcbd0252b1696ec2b1fc699->enter($__internal_f437a87ec6ee246ee027076121f84c10368de14aedcbd0252b1696ec2b1fc699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a08da751a1a5e369e1c656983f9b778ea1be8933fa5bdb2f7b64bded3cb23253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08da751a1a5e369e1c656983f9b778ea1be8933fa5bdb2f7b64bded3cb23253->enter($__internal_a08da751a1a5e369e1c656983f9b778ea1be8933fa5bdb2f7b64bded3cb23253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f437a87ec6ee246ee027076121f84c10368de14aedcbd0252b1696ec2b1fc699->leave($__internal_f437a87ec6ee246ee027076121f84c10368de14aedcbd0252b1696ec2b1fc699_prof);

        
        $__internal_a08da751a1a5e369e1c656983f9b778ea1be8933fa5bdb2f7b64bded3cb23253->leave($__internal_a08da751a1a5e369e1c656983f9b778ea1be8933fa5bdb2f7b64bded3cb23253_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
