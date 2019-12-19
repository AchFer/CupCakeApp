<?php

/* PIUserBundle:Profile:email_update_confirmation.txt.twig */
class __TwigTemplate_109230f065731f68969b36a978852523df551b74aa12a0baf9a98bd365d574b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8667faba4bf64af22fc2701e7c201b154ec74a2840303d22248555dd7a601e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8667faba4bf64af22fc2701e7c201b154ec74a2840303d22248555dd7a601e9->enter($__internal_f8667faba4bf64af22fc2701e7c201b154ec74a2840303d22248555dd7a601e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:email_update_confirmation.txt.twig"));

        $__internal_31232f2f29894ad0e80ebc20cad0713952c43dc19e7f861a0c9e014fd545e924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31232f2f29894ad0e80ebc20cad0713952c43dc19e7f861a0c9e014fd545e924->enter($__internal_31232f2f29894ad0e80ebc20cad0713952c43dc19e7f861a0c9e014fd545e924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Profile:email_update_confirmation.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 9
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f8667faba4bf64af22fc2701e7c201b154ec74a2840303d22248555dd7a601e9->leave($__internal_f8667faba4bf64af22fc2701e7c201b154ec74a2840303d22248555dd7a601e9_prof);

        
        $__internal_31232f2f29894ad0e80ebc20cad0713952c43dc19e7f861a0c9e014fd545e924->leave($__internal_31232f2f29894ad0e80ebc20cad0713952c43dc19e7f861a0c9e014fd545e924_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_49c41fdcd248ba2b282df2e78076058489b0b81294476bfd082d768588308c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c41fdcd248ba2b282df2e78076058489b0b81294476bfd082d768588308c86->enter($__internal_49c41fdcd248ba2b282df2e78076058489b0b81294476bfd082d768588308c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4cf81817b0117a4d5dee77982cbb42d5484a55494d2ae4ea65d334c1c85900aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf81817b0117a4d5dee77982cbb42d5484a55494d2ae4ea65d334c1c85900aa->enter($__internal_4cf81817b0117a4d5dee77982cbb42d5484a55494d2ae4ea65d334c1c85900aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_update.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_4cf81817b0117a4d5dee77982cbb42d5484a55494d2ae4ea65d334c1c85900aa->leave($__internal_4cf81817b0117a4d5dee77982cbb42d5484a55494d2ae4ea65d334c1c85900aa_prof);

        
        $__internal_49c41fdcd248ba2b282df2e78076058489b0b81294476bfd082d768588308c86->leave($__internal_49c41fdcd248ba2b282df2e78076058489b0b81294476bfd082d768588308c86_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6b2f5f61befd764197b918eafa81418f24c0b36df0429a778a7e97dc1d8a4165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2f5f61befd764197b918eafa81418f24c0b36df0429a778a7e97dc1d8a4165->enter($__internal_6b2f5f61befd764197b918eafa81418f24c0b36df0429a778a7e97dc1d8a4165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9f162bcc5a7be14cb039c258dcba090a103359d73252509607631719d212c51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f162bcc5a7be14cb039c258dcba090a103359d73252509607631719d212c51d->enter($__internal_9f162bcc5a7be14cb039c258dcba090a103359d73252509607631719d212c51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_update.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_9f162bcc5a7be14cb039c258dcba090a103359d73252509607631719d212c51d->leave($__internal_9f162bcc5a7be14cb039c258dcba090a103359d73252509607631719d212c51d_prof);

        
        $__internal_6b2f5f61befd764197b918eafa81418f24c0b36df0429a778a7e97dc1d8a4165->leave($__internal_6b2f5f61befd764197b918eafa81418f24c0b36df0429a778a7e97dc1d8a4165_prof);

    }

    // line 9
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2d08de9044732c81cf690958cd058f7372ad1fc6bd71436824b21d71db084e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d08de9044732c81cf690958cd058f7372ad1fc6bd71436824b21d71db084e09->enter($__internal_2d08de9044732c81cf690958cd058f7372ad1fc6bd71436824b21d71db084e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8a77f08692a76509bd7d73c8c8d33cbb01b7b4bae2f42753ee9e20a7fae564d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a77f08692a76509bd7d73c8c8d33cbb01b7b4bae2f42753ee9e20a7fae564d9->enter($__internal_8a77f08692a76509bd7d73c8c8d33cbb01b7b4bae2f42753ee9e20a7fae564d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8a77f08692a76509bd7d73c8c8d33cbb01b7b4bae2f42753ee9e20a7fae564d9->leave($__internal_8a77f08692a76509bd7d73c8c8d33cbb01b7b4bae2f42753ee9e20a7fae564d9_prof);

        
        $__internal_2d08de9044732c81cf690958cd058f7372ad1fc6bd71436824b21d71db084e09->leave($__internal_2d08de9044732c81cf690958cd058f7372ad1fc6bd71436824b21d71db084e09_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Profile:email_update_confirmation.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 9,  75 => 7,  66 => 6,  54 => 3,  45 => 2,  35 => 9,  33 => 6,  30 => 5,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{{ 'email_update.email.subject'|trans }}
{% endblock %}

{% block body_text %}
{{ 'email_update.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endblock %}
{% block body_html %}{% endblock %}
", "PIUserBundle:Profile:email_update_confirmation.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Profile/email_update_confirmation.txt.twig");
    }
}
