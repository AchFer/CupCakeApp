<?php

/* @PIUser/Security/login_content.html.twig */
class __TwigTemplate_fa8df5a9328b32b4442d51293fabae8f3ff50494a6bb31f346f3a4baaec78bca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98f6637a3ff8aa6f3a1fe41e13deece81096d707e19f96fb25b4529f06fdc692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f6637a3ff8aa6f3a1fe41e13deece81096d707e19f96fb25b4529f06fdc692->enter($__internal_98f6637a3ff8aa6f3a1fe41e13deece81096d707e19f96fb25b4529f06fdc692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Security/login_content.html.twig"));

        $__internal_6d9db6b1509b1882653f680a082d3c0c5debd7942e1c10cc28cc87f53e3c4043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9db6b1509b1882653f680a082d3c0c5debd7942e1c10cc28cc87f53e3c4043->enter($__internal_6d9db6b1509b1882653f680a082d3c0c5debd7942e1c10cc28cc87f53e3c4043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Security/login_content.html.twig"));

        // line 2
        echo " ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 2, $this->getSourceContext()); })())) {
            // line 3
            echo "     <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
 ";
        }
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_98f6637a3ff8aa6f3a1fe41e13deece81096d707e19f96fb25b4529f06fdc692->leave($__internal_98f6637a3ff8aa6f3a1fe41e13deece81096d707e19f96fb25b4529f06fdc692_prof);

        
        $__internal_6d9db6b1509b1882653f680a082d3c0c5debd7942e1c10cc28cc87f53e3c4043->leave($__internal_6d9db6b1509b1882653f680a082d3c0c5debd7942e1c10cc28cc87f53e3c4043_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b73fd03045b7230d36aefdc009b0c0d422e60f3d19c151f39dfbb90a29d9d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b73fd03045b7230d36aefdc009b0c0d422e60f3d19c151f39dfbb90a29d9d0c->enter($__internal_8b73fd03045b7230d36aefdc009b0c0d422e60f3d19c151f39dfbb90a29d9d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f88801b6495f7a2b08ab6dccccda3870dd9f2f8716667a4df3dc3e6af659a458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88801b6495f7a2b08ab6dccccda3870dd9f2f8716667a4df3dc3e6af659a458->enter($__internal_f88801b6495f7a2b08ab6dccccda3870dd9f2f8716667a4df3dc3e6af659a458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "

    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 9, $this->getSourceContext()); })())) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 10, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "    <fieldset>
        <label class=\"block clearfix\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "
            <span class=\"block input-icon input-icon-right\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\"
                       id=\"username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\"
                       required=\"required\" autocomplete=\"username\"/>
                <i class=\"ace-icon fa fa-user\"></i>
            </span>
        </label>

        <label class=\"block clearfix\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "
            <span class=\"block input-icon input-icon-right\">
                <input type=\"password\"  class=\"form-control\" placeholder=\"Password\" id=\"password\"
                       name=\"_password\"
                       required=\"required\" autocomplete=\"current-password\" />
                <i class=\"ace-icon fa fa-lock\"></i>
            </span>
        </label>

        <div class=\"space\"></div>

        <div class=\"clearfix\">


            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

        </div>

        <div class=\"space-4\"></div>
    </fieldset>
</form>
";
        
        $__internal_f88801b6495f7a2b08ab6dccccda3870dd9f2f8716667a4df3dc3e6af659a458->leave($__internal_f88801b6495f7a2b08ab6dccccda3870dd9f2f8716667a4df3dc3e6af659a458_prof);

        
        $__internal_8b73fd03045b7230d36aefdc009b0c0d422e60f3d19c151f39dfbb90a29d9d0c->leave($__internal_8b73fd03045b7230d36aefdc009b0c0d422e60f3d19c151f39dfbb90a29d9d0c_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 36,  87 => 22,  78 => 16,  72 => 13,  69 => 12,  63 => 10,  61 => 9,  57 => 8,  53 => 6,  35 => 5,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
 {% if error %}
     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
 {% endif %}
{% block fos_user_content %}


    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}
    <fieldset>
        <label class=\"block clearfix\">{{ 'security.login.username'|trans }}
            <span class=\"block input-icon input-icon-right\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\"
                       id=\"username\" value=\"{{ last_username }}\"
                       required=\"required\" autocomplete=\"username\"/>
                <i class=\"ace-icon fa fa-user\"></i>
            </span>
        </label>

        <label class=\"block clearfix\">{{ 'security.login.password'|trans }}
            <span class=\"block input-icon input-icon-right\">
                <input type=\"password\"  class=\"form-control\" placeholder=\"Password\" id=\"password\"
                       name=\"_password\"
                       required=\"required\" autocomplete=\"current-password\" />
                <i class=\"ace-icon fa fa-lock\"></i>
            </span>
        </label>

        <div class=\"space\"></div>

        <div class=\"clearfix\">


            <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />

        </div>

        <div class=\"space-4\"></div>
    </fieldset>
</form>
{% endblock fos_user_content  %}
", "@PIUser/Security/login_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Security\\login_content.html.twig");
    }
}
