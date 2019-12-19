<?php

/* PIUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_ce72f264b209c394c2f9f2e1f0f85029e7326d1eeb4984cfe37295aef50b033a extends Twig_Template
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
        $__internal_30142832d0b5021c9a72e010c9e73adbcd1409aa4e20d21cea0eb018df57566d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30142832d0b5021c9a72e010c9e73adbcd1409aa4e20d21cea0eb018df57566d->enter($__internal_30142832d0b5021c9a72e010c9e73adbcd1409aa4e20d21cea0eb018df57566d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:edit_content.html.twig"));

        $__internal_00a49b860519548ce7de839d7861d77eb10e037f550690b70537baf975e707d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a49b860519548ce7de839d7861d77eb10e037f550690b70537baf975e707d2->enter($__internal_00a49b860519548ce7de839d7861d77eb10e037f550690b70537baf975e707d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_30142832d0b5021c9a72e010c9e73adbcd1409aa4e20d21cea0eb018df57566d->leave($__internal_30142832d0b5021c9a72e010c9e73adbcd1409aa4e20d21cea0eb018df57566d_prof);

        
        $__internal_00a49b860519548ce7de839d7861d77eb10e037f550690b70537baf975e707d2->leave($__internal_00a49b860519548ce7de839d7861d77eb10e037f550690b70537baf975e707d2_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "PIUserBundle:Group:edit_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/edit_content.html.twig");
    }
}
