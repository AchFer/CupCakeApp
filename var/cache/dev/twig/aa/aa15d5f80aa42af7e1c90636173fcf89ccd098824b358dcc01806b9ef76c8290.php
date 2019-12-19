<?php

/* @PIUser/Registration/register_content.html.twig */
class __TwigTemplate_6f61fa3f61f4eb5d615bc0a2a7ee8ffc1cb873705a6b97df879524e24d8fb7e1 extends Twig_Template
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
        $__internal_cf1d2b747823234eb55e79b6ddd5ebe955e996d9ad4d414257529f9ac2916f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1d2b747823234eb55e79b6ddd5ebe955e996d9ad4d414257529f9ac2916f78->enter($__internal_cf1d2b747823234eb55e79b6ddd5ebe955e996d9ad4d414257529f9ac2916f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/register_content.html.twig"));

        $__internal_90e6dadeedba0ee492a88bd609931ab9ffe4f4856c249b1bc6dc484fa9ddc2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e6dadeedba0ee492a88bd609931ab9ffe4f4856c249b1bc6dc484fa9ddc2d4->enter($__internal_90e6dadeedba0ee492a88bd609931ab9ffe4f4856c249b1bc6dc484fa9ddc2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_cf1d2b747823234eb55e79b6ddd5ebe955e996d9ad4d414257529f9ac2916f78->leave($__internal_cf1d2b747823234eb55e79b6ddd5ebe955e996d9ad4d414257529f9ac2916f78_prof);

        
        $__internal_90e6dadeedba0ee492a88bd609931ab9ffe4f4856c249b1bc6dc484fa9ddc2d4->leave($__internal_90e6dadeedba0ee492a88bd609931ab9ffe4f4856c249b1bc6dc484fa9ddc2d4_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@PIUser/Registration/register_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
