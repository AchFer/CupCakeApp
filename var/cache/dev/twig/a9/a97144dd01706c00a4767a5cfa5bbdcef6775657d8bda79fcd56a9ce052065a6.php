<?php

/* @PIUser/Profile/email_update_confirmation.txt.twig */
class __TwigTemplate_bf99d75e212ef76fbad10f38525a057dc4b7f72471ea8b5d66662a0ecfd4e42b extends Twig_Template
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
        $__internal_1e08711e31d436d54cf75a477b2688fdab04ecf022a61d42e01a25c3d81fb830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e08711e31d436d54cf75a477b2688fdab04ecf022a61d42e01a25c3d81fb830->enter($__internal_1e08711e31d436d54cf75a477b2688fdab04ecf022a61d42e01a25c3d81fb830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/email_update_confirmation.txt.twig"));

        $__internal_bfea767388dce95f585e0ca7bc362b102985695466ec73e95886a92b872cc37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfea767388dce95f585e0ca7bc362b102985695466ec73e95886a92b872cc37d->enter($__internal_bfea767388dce95f585e0ca7bc362b102985695466ec73e95886a92b872cc37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Profile/email_update_confirmation.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 9
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1e08711e31d436d54cf75a477b2688fdab04ecf022a61d42e01a25c3d81fb830->leave($__internal_1e08711e31d436d54cf75a477b2688fdab04ecf022a61d42e01a25c3d81fb830_prof);

        
        $__internal_bfea767388dce95f585e0ca7bc362b102985695466ec73e95886a92b872cc37d->leave($__internal_bfea767388dce95f585e0ca7bc362b102985695466ec73e95886a92b872cc37d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ce15245fea82214b8ed31096a538525ba838ee3ea24575d65ad5027010bfd04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce15245fea82214b8ed31096a538525ba838ee3ea24575d65ad5027010bfd04b->enter($__internal_ce15245fea82214b8ed31096a538525ba838ee3ea24575d65ad5027010bfd04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_1355feabfde0c08ae2eecf7f66c710333ca03cdb024e68cc344e529aa2de4311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1355feabfde0c08ae2eecf7f66c710333ca03cdb024e68cc344e529aa2de4311->enter($__internal_1355feabfde0c08ae2eecf7f66c710333ca03cdb024e68cc344e529aa2de4311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_update.email.subject", array(), "FOSUserBundle");
        echo "
";
        
        $__internal_1355feabfde0c08ae2eecf7f66c710333ca03cdb024e68cc344e529aa2de4311->leave($__internal_1355feabfde0c08ae2eecf7f66c710333ca03cdb024e68cc344e529aa2de4311_prof);

        
        $__internal_ce15245fea82214b8ed31096a538525ba838ee3ea24575d65ad5027010bfd04b->leave($__internal_ce15245fea82214b8ed31096a538525ba838ee3ea24575d65ad5027010bfd04b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bdf2d116cb26bbf206f87e3facfb2cfe4e441ea2a48a4ad59f4a0089cd329031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf2d116cb26bbf206f87e3facfb2cfe4e441ea2a48a4ad59f4a0089cd329031->enter($__internal_bdf2d116cb26bbf206f87e3facfb2cfe4e441ea2a48a4ad59f4a0089cd329031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_29153118538ff4a93b9e55d2c2c265a8ca052089fc80d573fd4892842c8fc9b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29153118538ff4a93b9e55d2c2c265a8ca052089fc80d573fd4892842c8fc9b1->enter($__internal_29153118538ff4a93b9e55d2c2c265a8ca052089fc80d573fd4892842c8fc9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("email_update.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_29153118538ff4a93b9e55d2c2c265a8ca052089fc80d573fd4892842c8fc9b1->leave($__internal_29153118538ff4a93b9e55d2c2c265a8ca052089fc80d573fd4892842c8fc9b1_prof);

        
        $__internal_bdf2d116cb26bbf206f87e3facfb2cfe4e441ea2a48a4ad59f4a0089cd329031->leave($__internal_bdf2d116cb26bbf206f87e3facfb2cfe4e441ea2a48a4ad59f4a0089cd329031_prof);

    }

    // line 9
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b302684cd53d8140804425b23adff246b8cbee4f12666f27c35158ca118e5932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b302684cd53d8140804425b23adff246b8cbee4f12666f27c35158ca118e5932->enter($__internal_b302684cd53d8140804425b23adff246b8cbee4f12666f27c35158ca118e5932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_74c077ad7c468bec68edb26c7eea769adfb608c192260e034496c65b9e8df9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c077ad7c468bec68edb26c7eea769adfb608c192260e034496c65b9e8df9bb->enter($__internal_74c077ad7c468bec68edb26c7eea769adfb608c192260e034496c65b9e8df9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_74c077ad7c468bec68edb26c7eea769adfb608c192260e034496c65b9e8df9bb->leave($__internal_74c077ad7c468bec68edb26c7eea769adfb608c192260e034496c65b9e8df9bb_prof);

        
        $__internal_b302684cd53d8140804425b23adff246b8cbee4f12666f27c35158ca118e5932->leave($__internal_b302684cd53d8140804425b23adff246b8cbee4f12666f27c35158ca118e5932_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Profile/email_update_confirmation.txt.twig";
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
", "@PIUser/Profile/email_update_confirmation.txt.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Profile\\email_update_confirmation.txt.twig");
    }
}
