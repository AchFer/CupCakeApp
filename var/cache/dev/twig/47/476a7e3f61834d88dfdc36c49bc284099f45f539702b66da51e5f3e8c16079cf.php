<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_08bc700597bb8dfebab20a419b58cf878431da2cd08c362070111fb3ae9cb2a4 extends Twig_Template
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
        $__internal_53d945f8ff6f3b14a84060242f8fff9eae7605bcb0ba61c298256462fbbeb805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d945f8ff6f3b14a84060242f8fff9eae7605bcb0ba61c298256462fbbeb805->enter($__internal_53d945f8ff6f3b14a84060242f8fff9eae7605bcb0ba61c298256462fbbeb805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_328460185f04d70c7a1734abd213e262ec30f58c2f67d7bc93bba0faaa352822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_328460185f04d70c7a1734abd213e262ec30f58c2f67d7bc93bba0faaa352822->enter($__internal_328460185f04d70c7a1734abd213e262ec30f58c2f67d7bc93bba0faaa352822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_53d945f8ff6f3b14a84060242f8fff9eae7605bcb0ba61c298256462fbbeb805->leave($__internal_53d945f8ff6f3b14a84060242f8fff9eae7605bcb0ba61c298256462fbbeb805_prof);

        
        $__internal_328460185f04d70c7a1734abd213e262ec30f58c2f67d7bc93bba0faaa352822->leave($__internal_328460185f04d70c7a1734abd213e262ec30f58c2f67d7bc93bba0faaa352822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
