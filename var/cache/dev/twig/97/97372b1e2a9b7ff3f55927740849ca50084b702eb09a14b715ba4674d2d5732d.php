<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_94bcd3d9fe96ebe9699e27bba8e53bf5f52bc818db1736393f0aeb886de5aa71 extends Twig_Template
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
        $__internal_16cf1bfbd3a9a7c0a0a7ffab18eebe7b5c3ada575d7085291d55da38376da1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16cf1bfbd3a9a7c0a0a7ffab18eebe7b5c3ada575d7085291d55da38376da1e7->enter($__internal_16cf1bfbd3a9a7c0a0a7ffab18eebe7b5c3ada575d7085291d55da38376da1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c968733ccf0651f46b3e97be5f3dd4244148f2fde2049e6a55dd9fb47eb9d411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c968733ccf0651f46b3e97be5f3dd4244148f2fde2049e6a55dd9fb47eb9d411->enter($__internal_c968733ccf0651f46b3e97be5f3dd4244148f2fde2049e6a55dd9fb47eb9d411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_16cf1bfbd3a9a7c0a0a7ffab18eebe7b5c3ada575d7085291d55da38376da1e7->leave($__internal_16cf1bfbd3a9a7c0a0a7ffab18eebe7b5c3ada575d7085291d55da38376da1e7_prof);

        
        $__internal_c968733ccf0651f46b3e97be5f3dd4244148f2fde2049e6a55dd9fb47eb9d411->leave($__internal_c968733ccf0651f46b3e97be5f3dd4244148f2fde2049e6a55dd9fb47eb9d411_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
