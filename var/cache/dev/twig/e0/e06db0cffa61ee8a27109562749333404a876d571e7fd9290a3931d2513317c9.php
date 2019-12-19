<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_b6538a28bcd36fad59ba267762cd76597625c072541c784db0218bccf59c561d extends Twig_Template
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
        $__internal_857df490674735e0c5c5306782235a7a6064eb9ad495f9b5d44f3fee6867c22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857df490674735e0c5c5306782235a7a6064eb9ad495f9b5d44f3fee6867c22f->enter($__internal_857df490674735e0c5c5306782235a7a6064eb9ad495f9b5d44f3fee6867c22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_cb742fe3bbc8edb9f1231e68bbe1736b78caa4a7a429b6963945f8ba97417aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb742fe3bbc8edb9f1231e68bbe1736b78caa4a7a429b6963945f8ba97417aae->enter($__internal_cb742fe3bbc8edb9f1231e68bbe1736b78caa4a7a429b6963945f8ba97417aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_857df490674735e0c5c5306782235a7a6064eb9ad495f9b5d44f3fee6867c22f->leave($__internal_857df490674735e0c5c5306782235a7a6064eb9ad495f9b5d44f3fee6867c22f_prof);

        
        $__internal_cb742fe3bbc8edb9f1231e68bbe1736b78caa4a7a429b6963945f8ba97417aae->leave($__internal_cb742fe3bbc8edb9f1231e68bbe1736b78caa4a7a429b6963945f8ba97417aae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
