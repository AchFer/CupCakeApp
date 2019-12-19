<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c26ca5f463da1050ce24c33d534279052dd31768849729b91b639f03487d9d2b extends Twig_Template
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
        $__internal_e17c8385828f3450d556abd3affdc276bcbc6fb53bd60eee427a3869f692e5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e17c8385828f3450d556abd3affdc276bcbc6fb53bd60eee427a3869f692e5e9->enter($__internal_e17c8385828f3450d556abd3affdc276bcbc6fb53bd60eee427a3869f692e5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_c0b679d7ee08b671566d7005654bffd4e21758a0bb945fb977715d036de93592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b679d7ee08b671566d7005654bffd4e21758a0bb945fb977715d036de93592->enter($__internal_c0b679d7ee08b671566d7005654bffd4e21758a0bb945fb977715d036de93592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e17c8385828f3450d556abd3affdc276bcbc6fb53bd60eee427a3869f692e5e9->leave($__internal_e17c8385828f3450d556abd3affdc276bcbc6fb53bd60eee427a3869f692e5e9_prof);

        
        $__internal_c0b679d7ee08b671566d7005654bffd4e21758a0bb945fb977715d036de93592->leave($__internal_c0b679d7ee08b671566d7005654bffd4e21758a0bb945fb977715d036de93592_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
