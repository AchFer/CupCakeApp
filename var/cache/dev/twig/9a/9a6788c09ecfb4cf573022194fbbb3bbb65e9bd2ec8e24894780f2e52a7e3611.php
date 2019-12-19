<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_760d4b543394302d982e22635ca56f9ebc0914a8d72661d979b9ddb3ea71d6ae extends Twig_Template
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
        $__internal_60c99da6e875eba124ca6b193adbd508f9b8503b2806fbfec781dc511481676d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c99da6e875eba124ca6b193adbd508f9b8503b2806fbfec781dc511481676d->enter($__internal_60c99da6e875eba124ca6b193adbd508f9b8503b2806fbfec781dc511481676d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_8776fbf0d947a39310b2a51be53ce46ac5b4daf2fe636e56fcdba5c7115963ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8776fbf0d947a39310b2a51be53ce46ac5b4daf2fe636e56fcdba5c7115963ed->enter($__internal_8776fbf0d947a39310b2a51be53ce46ac5b4daf2fe636e56fcdba5c7115963ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_60c99da6e875eba124ca6b193adbd508f9b8503b2806fbfec781dc511481676d->leave($__internal_60c99da6e875eba124ca6b193adbd508f9b8503b2806fbfec781dc511481676d_prof);

        
        $__internal_8776fbf0d947a39310b2a51be53ce46ac5b4daf2fe636e56fcdba5c7115963ed->leave($__internal_8776fbf0d947a39310b2a51be53ce46ac5b4daf2fe636e56fcdba5c7115963ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
