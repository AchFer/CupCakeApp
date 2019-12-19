<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_515fb1769db7e13f307241f4253dd1f4e81a64c34fb9e1bc2916d8593d361e97 extends Twig_Template
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
        $__internal_52e89af5383ba4ffef0b37bfded139305617873791b3a20c3bbed5c29e7efabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e89af5383ba4ffef0b37bfded139305617873791b3a20c3bbed5c29e7efabc->enter($__internal_52e89af5383ba4ffef0b37bfded139305617873791b3a20c3bbed5c29e7efabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b657267c5920c1e62c6a3320d17ca3704284fb0c921aebc7970de939d37c8a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b657267c5920c1e62c6a3320d17ca3704284fb0c921aebc7970de939d37c8a5a->enter($__internal_b657267c5920c1e62c6a3320d17ca3704284fb0c921aebc7970de939d37c8a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_52e89af5383ba4ffef0b37bfded139305617873791b3a20c3bbed5c29e7efabc->leave($__internal_52e89af5383ba4ffef0b37bfded139305617873791b3a20c3bbed5c29e7efabc_prof);

        
        $__internal_b657267c5920c1e62c6a3320d17ca3704284fb0c921aebc7970de939d37c8a5a->leave($__internal_b657267c5920c1e62c6a3320d17ca3704284fb0c921aebc7970de939d37c8a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
