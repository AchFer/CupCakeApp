<?php

/* @PIUser/Group/show.html.twig */
class __TwigTemplate_dbfa4a862fd194f8939ba40d186539b6c79b4886906ddeb1590db95563f72949 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4442a52c14aebbb89ddd503f4f60141366858301fbc5201d800ff7f2bfc46567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4442a52c14aebbb89ddd503f4f60141366858301fbc5201d800ff7f2bfc46567->enter($__internal_4442a52c14aebbb89ddd503f4f60141366858301fbc5201d800ff7f2bfc46567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/show.html.twig"));

        $__internal_157c4a4bce693dd6bc86ae172eabbbb2cc97fbeece944d97569e1e669ba81a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157c4a4bce693dd6bc86ae172eabbbb2cc97fbeece944d97569e1e669ba81a13->enter($__internal_157c4a4bce693dd6bc86ae172eabbbb2cc97fbeece944d97569e1e669ba81a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4442a52c14aebbb89ddd503f4f60141366858301fbc5201d800ff7f2bfc46567->leave($__internal_4442a52c14aebbb89ddd503f4f60141366858301fbc5201d800ff7f2bfc46567_prof);

        
        $__internal_157c4a4bce693dd6bc86ae172eabbbb2cc97fbeece944d97569e1e669ba81a13->leave($__internal_157c4a4bce693dd6bc86ae172eabbbb2cc97fbeece944d97569e1e669ba81a13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1334c4e6518baced1fdceb1aa44f4d4f1aa860596458ad133bf9bb41f36b36fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1334c4e6518baced1fdceb1aa44f4d4f1aa860596458ad133bf9bb41f36b36fe->enter($__internal_1334c4e6518baced1fdceb1aa44f4d4f1aa860596458ad133bf9bb41f36b36fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fa0c9b5219ef1ef97e8dcb12ed0a2fa7dc60ef5324ea402cbe12063165bc5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa0c9b5219ef1ef97e8dcb12ed0a2fa7dc60ef5324ea402cbe12063165bc5cb->enter($__internal_4fa0c9b5219ef1ef97e8dcb12ed0a2fa7dc60ef5324ea402cbe12063165bc5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@PIUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_4fa0c9b5219ef1ef97e8dcb12ed0a2fa7dc60ef5324ea402cbe12063165bc5cb->leave($__internal_4fa0c9b5219ef1ef97e8dcb12ed0a2fa7dc60ef5324ea402cbe12063165bc5cb_prof);

        
        $__internal_1334c4e6518baced1fdceb1aa44f4d4f1aa860596458ad133bf9bb41f36b36fe->leave($__internal_1334c4e6518baced1fdceb1aa44f4d4f1aa860596458ad133bf9bb41f36b36fe_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/Group/show.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Group\\show.html.twig");
    }
}
