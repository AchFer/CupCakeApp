<?php

/* PIUserBundle:Group:show_content.html.twig */
class __TwigTemplate_214e0abbd45f1edacdf01a4df1f9f1bcd42852d4af49ad8df92e82fd844e9bd6 extends Twig_Template
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
        $__internal_f18fdf9376592dc0e06c75a03c5675c5966ed7e379c5b64adb3bfbb729a47763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f18fdf9376592dc0e06c75a03c5675c5966ed7e379c5b64adb3bfbb729a47763->enter($__internal_f18fdf9376592dc0e06c75a03c5675c5966ed7e379c5b64adb3bfbb729a47763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:show_content.html.twig"));

        $__internal_492f3b0a4355c2adddab17f88cd1d5c2651a8e13fc31523bd5049637f386136a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492f3b0a4355c2adddab17f88cd1d5c2651a8e13fc31523bd5049637f386136a->enter($__internal_492f3b0a4355c2adddab17f88cd1d5c2651a8e13fc31523bd5049637f386136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_f18fdf9376592dc0e06c75a03c5675c5966ed7e379c5b64adb3bfbb729a47763->leave($__internal_f18fdf9376592dc0e06c75a03c5675c5966ed7e379c5b64adb3bfbb729a47763_prof);

        
        $__internal_492f3b0a4355c2adddab17f88cd1d5c2651a8e13fc31523bd5049637f386136a->leave($__internal_492f3b0a4355c2adddab17f88cd1d5c2651a8e13fc31523bd5049637f386136a_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "PIUserBundle:Group:show_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/show_content.html.twig");
    }
}
