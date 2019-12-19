<?php

/* @PIUser/Resetting/request_content.html.twig */
class __TwigTemplate_bfb649ed20886c365fd55f6d5e1b8ad7dadafb4e9e803e2de82c674d22835970 extends Twig_Template
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
        $__internal_496854db8f37c13d45ded6a8a6f3917a7b0befb913d494cd83e1feb7d07f00a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496854db8f37c13d45ded6a8a6f3917a7b0befb913d494cd83e1feb7d07f00a1->enter($__internal_496854db8f37c13d45ded6a8a6f3917a7b0befb913d494cd83e1feb7d07f00a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/request_content.html.twig"));

        $__internal_36f6e6f20aa1376ee12a350dc3e13d9230d8bac4d4c935e8e69ce8e708e94448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f6e6f20aa1376ee12a350dc3e13d9230d8bac4d4c935e8e69ce8e708e94448->enter($__internal_36f6e6f20aa1376ee12a350dc3e13d9230d8bac4d4c935e8e69ce8e708e94448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_496854db8f37c13d45ded6a8a6f3917a7b0befb913d494cd83e1feb7d07f00a1->leave($__internal_496854db8f37c13d45ded6a8a6f3917a7b0befb913d494cd83e1feb7d07f00a1_prof);

        
        $__internal_36f6e6f20aa1376ee12a350dc3e13d9230d8bac4d4c935e8e69ce8e708e94448->leave($__internal_36f6e6f20aa1376ee12a350dc3e13d9230d8bac4d4c935e8e69ce8e708e94448_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@PIUser/Resetting/request_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
