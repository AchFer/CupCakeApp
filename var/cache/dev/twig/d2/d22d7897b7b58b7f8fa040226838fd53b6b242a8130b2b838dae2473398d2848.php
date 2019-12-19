<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cf2e445378a9df9be2cb4f3812f312b9d7169c5f4cd2b9c5562156e7a1c3dffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dab1cdfcd6f5fefdfdd92005de45b7b40c9c069cbe5d2792922e6bbdea192e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab1cdfcd6f5fefdfdd92005de45b7b40c9c069cbe5d2792922e6bbdea192e1f->enter($__internal_dab1cdfcd6f5fefdfdd92005de45b7b40c9c069cbe5d2792922e6bbdea192e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_e9bffc1ba0a5ca3c95f06f0855ffcce5746a11120c83ee5f82db12eefa3c78c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9bffc1ba0a5ca3c95f06f0855ffcce5746a11120c83ee5f82db12eefa3c78c0->enter($__internal_e9bffc1ba0a5ca3c95f06f0855ffcce5746a11120c83ee5f82db12eefa3c78c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dab1cdfcd6f5fefdfdd92005de45b7b40c9c069cbe5d2792922e6bbdea192e1f->leave($__internal_dab1cdfcd6f5fefdfdd92005de45b7b40c9c069cbe5d2792922e6bbdea192e1f_prof);

        
        $__internal_e9bffc1ba0a5ca3c95f06f0855ffcce5746a11120c83ee5f82db12eefa3c78c0->leave($__internal_e9bffc1ba0a5ca3c95f06f0855ffcce5746a11120c83ee5f82db12eefa3c78c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc8d7852fe3f879bda691df8011f529e4003b2c36a80e83b7656a04eda7d2573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8d7852fe3f879bda691df8011f529e4003b2c36a80e83b7656a04eda7d2573->enter($__internal_bc8d7852fe3f879bda691df8011f529e4003b2c36a80e83b7656a04eda7d2573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a584764e851ede8d8cb04371242f571281376c1ce9ef95baf333f0a058e20ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a584764e851ede8d8cb04371242f571281376c1ce9ef95baf333f0a058e20ed0->enter($__internal_a584764e851ede8d8cb04371242f571281376c1ce9ef95baf333f0a058e20ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a584764e851ede8d8cb04371242f571281376c1ce9ef95baf333f0a058e20ed0->leave($__internal_a584764e851ede8d8cb04371242f571281376c1ce9ef95baf333f0a058e20ed0_prof);

        
        $__internal_bc8d7852fe3f879bda691df8011f529e4003b2c36a80e83b7656a04eda7d2573->leave($__internal_bc8d7852fe3f879bda691df8011f529e4003b2c36a80e83b7656a04eda7d2573_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_738c7db07d4bf09a7def702b7f0aabbb732d87ab58869996710ea6476a11c658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_738c7db07d4bf09a7def702b7f0aabbb732d87ab58869996710ea6476a11c658->enter($__internal_738c7db07d4bf09a7def702b7f0aabbb732d87ab58869996710ea6476a11c658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0df7816c94dc78917f146711ee7da3793e21520466ccc19656df247ef9479ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0df7816c94dc78917f146711ee7da3793e21520466ccc19656df247ef9479ef->enter($__internal_a0df7816c94dc78917f146711ee7da3793e21520466ccc19656df247ef9479ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_a0df7816c94dc78917f146711ee7da3793e21520466ccc19656df247ef9479ef->leave($__internal_a0df7816c94dc78917f146711ee7da3793e21520466ccc19656df247ef9479ef_prof);

        
        $__internal_738c7db07d4bf09a7def702b7f0aabbb732d87ab58869996710ea6476a11c658->leave($__internal_738c7db07d4bf09a7def702b7f0aabbb732d87ab58869996710ea6476a11c658_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cda7716d81df6a56c91bec2a6e0ad6a9565791f6f96366ef7080ab4bf426596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cda7716d81df6a56c91bec2a6e0ad6a9565791f6f96366ef7080ab4bf426596->enter($__internal_6cda7716d81df6a56c91bec2a6e0ad6a9565791f6f96366ef7080ab4bf426596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb7142aec6172206293a2fd9159d4ec010a4a7c160146c7c85b21f08b709d0f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7142aec6172206293a2fd9159d4ec010a4a7c160146c7c85b21f08b709d0f9->enter($__internal_fb7142aec6172206293a2fd9159d4ec010a4a7c160146c7c85b21f08b709d0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_fb7142aec6172206293a2fd9159d4ec010a4a7c160146c7c85b21f08b709d0f9->leave($__internal_fb7142aec6172206293a2fd9159d4ec010a4a7c160146c7c85b21f08b709d0f9_prof);

        
        $__internal_6cda7716d81df6a56c91bec2a6e0ad6a9565791f6f96366ef7080ab4bf426596->leave($__internal_6cda7716d81df6a56c91bec2a6e0ad6a9565791f6f96366ef7080ab4bf426596_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
