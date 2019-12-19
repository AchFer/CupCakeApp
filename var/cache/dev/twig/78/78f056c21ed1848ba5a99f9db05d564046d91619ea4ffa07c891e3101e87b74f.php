<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f07ed13a8b1a64b2456adf23f6951cf3f90fe45747b9920fdf5901dbecb60fa1 extends Twig_Template
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
        $__internal_c13165338e73cca087c2bdd094f822f535ee0d875ff2fa91efb97b2a30d6365b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13165338e73cca087c2bdd094f822f535ee0d875ff2fa91efb97b2a30d6365b->enter($__internal_c13165338e73cca087c2bdd094f822f535ee0d875ff2fa91efb97b2a30d6365b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_85cbcba8abe0abe09e14cd9dc017caad235dc9a162aa40d91ec4e172e947b449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85cbcba8abe0abe09e14cd9dc017caad235dc9a162aa40d91ec4e172e947b449->enter($__internal_85cbcba8abe0abe09e14cd9dc017caad235dc9a162aa40d91ec4e172e947b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c13165338e73cca087c2bdd094f822f535ee0d875ff2fa91efb97b2a30d6365b->leave($__internal_c13165338e73cca087c2bdd094f822f535ee0d875ff2fa91efb97b2a30d6365b_prof);

        
        $__internal_85cbcba8abe0abe09e14cd9dc017caad235dc9a162aa40d91ec4e172e947b449->leave($__internal_85cbcba8abe0abe09e14cd9dc017caad235dc9a162aa40d91ec4e172e947b449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
