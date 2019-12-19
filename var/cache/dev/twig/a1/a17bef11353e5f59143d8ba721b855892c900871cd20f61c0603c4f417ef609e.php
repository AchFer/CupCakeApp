<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_deb712625bf07d457aee6edc06c782bfd79a852e1f65b0a5f894f6c097aa671d extends Twig_Template
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
        $__internal_559a2ae1530c276529a4c826d61435b7c907c594cf071334272174673032143f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_559a2ae1530c276529a4c826d61435b7c907c594cf071334272174673032143f->enter($__internal_559a2ae1530c276529a4c826d61435b7c907c594cf071334272174673032143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_01949e47d3e7db26dbbfe01fa27113271c3b618560a6ca0f1bc7df6a2ed530a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01949e47d3e7db26dbbfe01fa27113271c3b618560a6ca0f1bc7df6a2ed530a2->enter($__internal_01949e47d3e7db26dbbfe01fa27113271c3b618560a6ca0f1bc7df6a2ed530a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_559a2ae1530c276529a4c826d61435b7c907c594cf071334272174673032143f->leave($__internal_559a2ae1530c276529a4c826d61435b7c907c594cf071334272174673032143f_prof);

        
        $__internal_01949e47d3e7db26dbbfe01fa27113271c3b618560a6ca0f1bc7df6a2ed530a2->leave($__internal_01949e47d3e7db26dbbfe01fa27113271c3b618560a6ca0f1bc7df6a2ed530a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b425c3d74f9b3e393ef722cf21ba910e8daa69321412c54939c41e9ef6ea819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b425c3d74f9b3e393ef722cf21ba910e8daa69321412c54939c41e9ef6ea819->enter($__internal_6b425c3d74f9b3e393ef722cf21ba910e8daa69321412c54939c41e9ef6ea819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb4c6e077eb986b920d274295fa84a61693ca4b0bd2b67050998187bcc8ab857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4c6e077eb986b920d274295fa84a61693ca4b0bd2b67050998187bcc8ab857->enter($__internal_eb4c6e077eb986b920d274295fa84a61693ca4b0bd2b67050998187bcc8ab857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eb4c6e077eb986b920d274295fa84a61693ca4b0bd2b67050998187bcc8ab857->leave($__internal_eb4c6e077eb986b920d274295fa84a61693ca4b0bd2b67050998187bcc8ab857_prof);

        
        $__internal_6b425c3d74f9b3e393ef722cf21ba910e8daa69321412c54939c41e9ef6ea819->leave($__internal_6b425c3d74f9b3e393ef722cf21ba910e8daa69321412c54939c41e9ef6ea819_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_eff63092c3f9a41253f9d67d6e2bc22c6ad241e5b2a11e6152a1cc63da9e5a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff63092c3f9a41253f9d67d6e2bc22c6ad241e5b2a11e6152a1cc63da9e5a3c->enter($__internal_eff63092c3f9a41253f9d67d6e2bc22c6ad241e5b2a11e6152a1cc63da9e5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7aa041d54e7796fb66164cd21d9ac11719505b3a6f72864f0c26cf871c3220ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa041d54e7796fb66164cd21d9ac11719505b3a6f72864f0c26cf871c3220ea->enter($__internal_7aa041d54e7796fb66164cd21d9ac11719505b3a6f72864f0c26cf871c3220ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7aa041d54e7796fb66164cd21d9ac11719505b3a6f72864f0c26cf871c3220ea->leave($__internal_7aa041d54e7796fb66164cd21d9ac11719505b3a6f72864f0c26cf871c3220ea_prof);

        
        $__internal_eff63092c3f9a41253f9d67d6e2bc22c6ad241e5b2a11e6152a1cc63da9e5a3c->leave($__internal_eff63092c3f9a41253f9d67d6e2bc22c6ad241e5b2a11e6152a1cc63da9e5a3c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c513ac7bd5555e0136d929e98299967741da2cd5c688d2c66baa08284de4f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c513ac7bd5555e0136d929e98299967741da2cd5c688d2c66baa08284de4f81->enter($__internal_2c513ac7bd5555e0136d929e98299967741da2cd5c688d2c66baa08284de4f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e05a67a838db859133195a271f8225aaa45d565c87f9588ca6f3c51775f1063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e05a67a838db859133195a271f8225aaa45d565c87f9588ca6f3c51775f1063->enter($__internal_4e05a67a838db859133195a271f8225aaa45d565c87f9588ca6f3c51775f1063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4e05a67a838db859133195a271f8225aaa45d565c87f9588ca6f3c51775f1063->leave($__internal_4e05a67a838db859133195a271f8225aaa45d565c87f9588ca6f3c51775f1063_prof);

        
        $__internal_2c513ac7bd5555e0136d929e98299967741da2cd5c688d2c66baa08284de4f81->leave($__internal_2c513ac7bd5555e0136d929e98299967741da2cd5c688d2c66baa08284de4f81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
