<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a663a6bce92495b870cb739e825b9d53bfb2225c995f955fc6b75d78cdbd10d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_17ed981f26a0ede61eadbdde7529ebdcea36dc8b1d91e76c2b9d0a8ec9590c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ed981f26a0ede61eadbdde7529ebdcea36dc8b1d91e76c2b9d0a8ec9590c81->enter($__internal_17ed981f26a0ede61eadbdde7529ebdcea36dc8b1d91e76c2b9d0a8ec9590c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6de7e1a83ee98222091508862062b90dfb2eefbb3c2a7184334664bad00059a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de7e1a83ee98222091508862062b90dfb2eefbb3c2a7184334664bad00059a2->enter($__internal_6de7e1a83ee98222091508862062b90dfb2eefbb3c2a7184334664bad00059a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17ed981f26a0ede61eadbdde7529ebdcea36dc8b1d91e76c2b9d0a8ec9590c81->leave($__internal_17ed981f26a0ede61eadbdde7529ebdcea36dc8b1d91e76c2b9d0a8ec9590c81_prof);

        
        $__internal_6de7e1a83ee98222091508862062b90dfb2eefbb3c2a7184334664bad00059a2->leave($__internal_6de7e1a83ee98222091508862062b90dfb2eefbb3c2a7184334664bad00059a2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_687d61c1e2c59c4551b24bceff93ce938ad0997eb7307e6cb08f185fbce6c756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687d61c1e2c59c4551b24bceff93ce938ad0997eb7307e6cb08f185fbce6c756->enter($__internal_687d61c1e2c59c4551b24bceff93ce938ad0997eb7307e6cb08f185fbce6c756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4a09a72e64510fcade4a0dd81ceffc8fd6d58c341a47447cb99953eaac392a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a09a72e64510fcade4a0dd81ceffc8fd6d58c341a47447cb99953eaac392a3f->enter($__internal_4a09a72e64510fcade4a0dd81ceffc8fd6d58c341a47447cb99953eaac392a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4a09a72e64510fcade4a0dd81ceffc8fd6d58c341a47447cb99953eaac392a3f->leave($__internal_4a09a72e64510fcade4a0dd81ceffc8fd6d58c341a47447cb99953eaac392a3f_prof);

        
        $__internal_687d61c1e2c59c4551b24bceff93ce938ad0997eb7307e6cb08f185fbce6c756->leave($__internal_687d61c1e2c59c4551b24bceff93ce938ad0997eb7307e6cb08f185fbce6c756_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e83da581b35f62670d75bd0602b8ed8e8b938dff702f32f7ddf343ecbfaf8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e83da581b35f62670d75bd0602b8ed8e8b938dff702f32f7ddf343ecbfaf8dc->enter($__internal_7e83da581b35f62670d75bd0602b8ed8e8b938dff702f32f7ddf343ecbfaf8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f93b777463c73587e6dfde02d939dfe592fa8cfe777d3bb2ae5c404462917d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93b777463c73587e6dfde02d939dfe592fa8cfe777d3bb2ae5c404462917d2a->enter($__internal_f93b777463c73587e6dfde02d939dfe592fa8cfe777d3bb2ae5c404462917d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_f93b777463c73587e6dfde02d939dfe592fa8cfe777d3bb2ae5c404462917d2a->leave($__internal_f93b777463c73587e6dfde02d939dfe592fa8cfe777d3bb2ae5c404462917d2a_prof);

        
        $__internal_7e83da581b35f62670d75bd0602b8ed8e8b938dff702f32f7ddf343ecbfaf8dc->leave($__internal_7e83da581b35f62670d75bd0602b8ed8e8b938dff702f32f7ddf343ecbfaf8dc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_217f5c58934d7eb9dd385ef2fe39308bb3f9be00568646e9649180b46bd0d474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_217f5c58934d7eb9dd385ef2fe39308bb3f9be00568646e9649180b46bd0d474->enter($__internal_217f5c58934d7eb9dd385ef2fe39308bb3f9be00568646e9649180b46bd0d474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad1dd35aefc4b04d91c3c97898865e70c413cb3fd0b84f9447b1d92fd6e95948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1dd35aefc4b04d91c3c97898865e70c413cb3fd0b84f9447b1d92fd6e95948->enter($__internal_ad1dd35aefc4b04d91c3c97898865e70c413cb3fd0b84f9447b1d92fd6e95948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ad1dd35aefc4b04d91c3c97898865e70c413cb3fd0b84f9447b1d92fd6e95948->leave($__internal_ad1dd35aefc4b04d91c3c97898865e70c413cb3fd0b84f9447b1d92fd6e95948_prof);

        
        $__internal_217f5c58934d7eb9dd385ef2fe39308bb3f9be00568646e9649180b46bd0d474->leave($__internal_217f5c58934d7eb9dd385ef2fe39308bb3f9be00568646e9649180b46bd0d474_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
