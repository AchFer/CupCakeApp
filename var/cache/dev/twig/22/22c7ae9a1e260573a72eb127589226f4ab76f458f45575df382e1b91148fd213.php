<?php

/* Default/base.html.twig */
class __TwigTemplate_b55612805c345ec42e335bb6f79c4e585a580db6095cb5d2c5348d1a4ef9d9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9ab7ac64bd705ceb3fb3eaec3a38f32dc44657e7e92e7b5731bf639a364e576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ab7ac64bd705ceb3fb3eaec3a38f32dc44657e7e92e7b5731bf639a364e576->enter($__internal_d9ab7ac64bd705ceb3fb3eaec3a38f32dc44657e7e92e7b5731bf639a364e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

        $__internal_a4a24b2016d6a5b2ba32e31c129a0571bf863924039408fd76754d91d247df9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a24b2016d6a5b2ba32e31c129a0571bf863924039408fd76754d91d247df9c->enter($__internal_a4a24b2016d6a5b2ba32e31c129a0571bf863924039408fd76754d91d247df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Default/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    </head>
    <body>
    <div class=\"container\">
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>

    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
    </body>
</html>
";
        
        $__internal_d9ab7ac64bd705ceb3fb3eaec3a38f32dc44657e7e92e7b5731bf639a364e576->leave($__internal_d9ab7ac64bd705ceb3fb3eaec3a38f32dc44657e7e92e7b5731bf639a364e576_prof);

        
        $__internal_a4a24b2016d6a5b2ba32e31c129a0571bf863924039408fd76754d91d247df9c->leave($__internal_a4a24b2016d6a5b2ba32e31c129a0571bf863924039408fd76754d91d247df9c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f6e2052f983c1630c640fa19ca8218716562f358f3b410a22dec91d5c337a5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6e2052f983c1630c640fa19ca8218716562f358f3b410a22dec91d5c337a5e->enter($__internal_4f6e2052f983c1630c640fa19ca8218716562f358f3b410a22dec91d5c337a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc0541f48de3bc4a365fecbc427f1d3a0c2116d0d9279e56fc3c91c120e7e678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0541f48de3bc4a365fecbc427f1d3a0c2116d0d9279e56fc3c91c120e7e678->enter($__internal_cc0541f48de3bc4a365fecbc427f1d3a0c2116d0d9279e56fc3c91c120e7e678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_cc0541f48de3bc4a365fecbc427f1d3a0c2116d0d9279e56fc3c91c120e7e678->leave($__internal_cc0541f48de3bc4a365fecbc427f1d3a0c2116d0d9279e56fc3c91c120e7e678_prof);

        
        $__internal_4f6e2052f983c1630c640fa19ca8218716562f358f3b410a22dec91d5c337a5e->leave($__internal_4f6e2052f983c1630c640fa19ca8218716562f358f3b410a22dec91d5c337a5e_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_6bede8a04dc6ebb934e4d68c5174a234f72976aa8ac48fb5c2d29380244d680c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bede8a04dc6ebb934e4d68c5174a234f72976aa8ac48fb5c2d29380244d680c->enter($__internal_6bede8a04dc6ebb934e4d68c5174a234f72976aa8ac48fb5c2d29380244d680c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_052e5ac53f235e4429e15689ed08bb8d24e55e17b5fa7ab50453887eac619d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052e5ac53f235e4429e15689ed08bb8d24e55e17b5fa7ab50453887eac619d44->enter($__internal_052e5ac53f235e4429e15689ed08bb8d24e55e17b5fa7ab50453887eac619d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "        ";
        
        $__internal_052e5ac53f235e4429e15689ed08bb8d24e55e17b5fa7ab50453887eac619d44->leave($__internal_052e5ac53f235e4429e15689ed08bb8d24e55e17b5fa7ab50453887eac619d44_prof);

        
        $__internal_6bede8a04dc6ebb934e4d68c5174a234f72976aa8ac48fb5c2d29380244d680c->leave($__internal_6bede8a04dc6ebb934e4d68c5174a234f72976aa8ac48fb5c2d29380244d680c_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e2c61e2e20c70987669736ca81e7624e7d807ed78f4492b44b39e07fe838bfb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c61e2e20c70987669736ca81e7624e7d807ed78f4492b44b39e07fe838bfb3->enter($__internal_e2c61e2e20c70987669736ca81e7624e7d807ed78f4492b44b39e07fe838bfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a8623071a0e7189d046f6915c24cd2d4fc6d8b759bc571f268d36c0e4675bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8623071a0e7189d046f6915c24cd2d4fc6d8b759bc571f268d36c0e4675bb2->enter($__internal_2a8623071a0e7189d046f6915c24cd2d4fc6d8b759bc571f268d36c0e4675bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a8623071a0e7189d046f6915c24cd2d4fc6d8b759bc571f268d36c0e4675bb2->leave($__internal_2a8623071a0e7189d046f6915c24cd2d4fc6d8b759bc571f268d36c0e4675bb2_prof);

        
        $__internal_e2c61e2e20c70987669736ca81e7624e7d807ed78f4492b44b39e07fe838bfb3->leave($__internal_e2c61e2e20c70987669736ca81e7624e7d807ed78f4492b44b39e07fe838bfb3_prof);

    }

    public function getTemplateName()
    {
        return "Default/base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 14,  90 => 11,  81 => 10,  63 => 5,  50 => 15,  48 => 14,  44 => 12,  42 => 10,  34 => 5,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> {% block title %}Login{% endblock %}</title>

    </head>
    <body>
    <div class=\"container\">
        {% block content %}
        {% endblock %}
    </div>

    {% block javascripts %}{% endblock %}

    </body>
</html>
", "Default/base.html.twig", "C:\\wamp\\www\\Pi\\app\\Resources\\views\\Default\\base.html.twig");
    }
}
