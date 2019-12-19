<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c8165c76e420eea7ef2109e54383204f6077a611dff725349e5cc63fef021b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0673f6001e6d3e906016f3b39700b4fb577761ea18b79d619f74f588de9ed348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0673f6001e6d3e906016f3b39700b4fb577761ea18b79d619f74f588de9ed348->enter($__internal_0673f6001e6d3e906016f3b39700b4fb577761ea18b79d619f74f588de9ed348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_c7941fa636b4e14d99d3b4f1d79bb66d4f7e761dc3d201814df27b10487f642c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7941fa636b4e14d99d3b4f1d79bb66d4f7e761dc3d201814df27b10487f642c->enter($__internal_c7941fa636b4e14d99d3b4f1d79bb66d4f7e761dc3d201814df27b10487f642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0673f6001e6d3e906016f3b39700b4fb577761ea18b79d619f74f588de9ed348->leave($__internal_0673f6001e6d3e906016f3b39700b4fb577761ea18b79d619f74f588de9ed348_prof);

        
        $__internal_c7941fa636b4e14d99d3b4f1d79bb66d4f7e761dc3d201814df27b10487f642c->leave($__internal_c7941fa636b4e14d99d3b4f1d79bb66d4f7e761dc3d201814df27b10487f642c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da43e5f62ac5c10028b8e2e00c6779d1b930994220913e0edd1fca24d7989e17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da43e5f62ac5c10028b8e2e00c6779d1b930994220913e0edd1fca24d7989e17->enter($__internal_da43e5f62ac5c10028b8e2e00c6779d1b930994220913e0edd1fca24d7989e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_03f7d1a24905e24b7f3fee87e4b07360d87aa823ee0bb317943529945aa855fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03f7d1a24905e24b7f3fee87e4b07360d87aa823ee0bb317943529945aa855fb->enter($__internal_03f7d1a24905e24b7f3fee87e4b07360d87aa823ee0bb317943529945aa855fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_03f7d1a24905e24b7f3fee87e4b07360d87aa823ee0bb317943529945aa855fb->leave($__internal_03f7d1a24905e24b7f3fee87e4b07360d87aa823ee0bb317943529945aa855fb_prof);

        
        $__internal_da43e5f62ac5c10028b8e2e00c6779d1b930994220913e0edd1fca24d7989e17->leave($__internal_da43e5f62ac5c10028b8e2e00c6779d1b930994220913e0edd1fca24d7989e17_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_80276a803c6c8e46c165eefac6e0689ca59988a8eca250277d77e0c4fe481fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80276a803c6c8e46c165eefac6e0689ca59988a8eca250277d77e0c4fe481fa2->enter($__internal_80276a803c6c8e46c165eefac6e0689ca59988a8eca250277d77e0c4fe481fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae998e928635d23d2c065283281359476a301092fb3081d00ff9dcebab46951c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae998e928635d23d2c065283281359476a301092fb3081d00ff9dcebab46951c->enter($__internal_ae998e928635d23d2c065283281359476a301092fb3081d00ff9dcebab46951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ae998e928635d23d2c065283281359476a301092fb3081d00ff9dcebab46951c->leave($__internal_ae998e928635d23d2c065283281359476a301092fb3081d00ff9dcebab46951c_prof);

        
        $__internal_80276a803c6c8e46c165eefac6e0689ca59988a8eca250277d77e0c4fe481fa2->leave($__internal_80276a803c6c8e46c165eefac6e0689ca59988a8eca250277d77e0c4fe481fa2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0f5a0efb6aeedb854006ff461ca56225b60034f27608fc74b74cf2b6ebb6512 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f5a0efb6aeedb854006ff461ca56225b60034f27608fc74b74cf2b6ebb6512->enter($__internal_b0f5a0efb6aeedb854006ff461ca56225b60034f27608fc74b74cf2b6ebb6512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63c29bafaba1cb6797490c5102d7487e38571fd4f8d1cf6eece793939ace08b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c29bafaba1cb6797490c5102d7487e38571fd4f8d1cf6eece793939ace08b8->enter($__internal_63c29bafaba1cb6797490c5102d7487e38571fd4f8d1cf6eece793939ace08b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63c29bafaba1cb6797490c5102d7487e38571fd4f8d1cf6eece793939ace08b8->leave($__internal_63c29bafaba1cb6797490c5102d7487e38571fd4f8d1cf6eece793939ace08b8_prof);

        
        $__internal_b0f5a0efb6aeedb854006ff461ca56225b60034f27608fc74b74cf2b6ebb6512->leave($__internal_b0f5a0efb6aeedb854006ff461ca56225b60034f27608fc74b74cf2b6ebb6512_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
