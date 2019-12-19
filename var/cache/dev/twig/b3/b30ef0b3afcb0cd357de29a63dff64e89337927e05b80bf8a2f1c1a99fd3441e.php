<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4ead3059092bdc80a22e3c6f5f39c09b604a0cc134f6b090dbf315a6120cbe00 extends Twig_Template
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
        $__internal_f620da2dec5c509b24fe5a10bfb1edc9db96f9602cdf05d0998c889cd4395ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f620da2dec5c509b24fe5a10bfb1edc9db96f9602cdf05d0998c889cd4395ed0->enter($__internal_f620da2dec5c509b24fe5a10bfb1edc9db96f9602cdf05d0998c889cd4395ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_88413454327d6979b7621d6271a0344bc4e5cb43ee3620e42dbc00933f98a2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88413454327d6979b7621d6271a0344bc4e5cb43ee3620e42dbc00933f98a2b1->enter($__internal_88413454327d6979b7621d6271a0344bc4e5cb43ee3620e42dbc00933f98a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f620da2dec5c509b24fe5a10bfb1edc9db96f9602cdf05d0998c889cd4395ed0->leave($__internal_f620da2dec5c509b24fe5a10bfb1edc9db96f9602cdf05d0998c889cd4395ed0_prof);

        
        $__internal_88413454327d6979b7621d6271a0344bc4e5cb43ee3620e42dbc00933f98a2b1->leave($__internal_88413454327d6979b7621d6271a0344bc4e5cb43ee3620e42dbc00933f98a2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
