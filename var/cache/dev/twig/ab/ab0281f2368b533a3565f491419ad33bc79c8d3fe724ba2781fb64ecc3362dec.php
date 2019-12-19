<?php

/* PIUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_82c6eade0631074515f133f1f26a0b6abdf6a1016b1ba378ae8260e94183f99c extends Twig_Template
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
        $__internal_b208d332b24a8dc28316f9d15ecbce9007e5790d228138b3af4657272516ebff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b208d332b24a8dc28316f9d15ecbce9007e5790d228138b3af4657272516ebff->enter($__internal_b208d332b24a8dc28316f9d15ecbce9007e5790d228138b3af4657272516ebff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:request_content.html.twig"));

        $__internal_eef6284cfcdfecc153baf905047c37979c52552cb2b5546c30a9bcbef9bbf9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef6284cfcdfecc153baf905047c37979c52552cb2b5546c30a9bcbef9bbf9f9->enter($__internal_eef6284cfcdfecc153baf905047c37979c52552cb2b5546c30a9bcbef9bbf9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_b208d332b24a8dc28316f9d15ecbce9007e5790d228138b3af4657272516ebff->leave($__internal_b208d332b24a8dc28316f9d15ecbce9007e5790d228138b3af4657272516ebff_prof);

        
        $__internal_eef6284cfcdfecc153baf905047c37979c52552cb2b5546c30a9bcbef9bbf9f9->leave($__internal_eef6284cfcdfecc153baf905047c37979c52552cb2b5546c30a9bcbef9bbf9f9_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Resetting:request_content.html.twig";
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
", "PIUserBundle:Resetting:request_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Resetting/request_content.html.twig");
    }
}
