<?php

/* @PIUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_bb4797f8e73cf1736c95adb2b4c99a3da5bda02b4700cb0de8b5e6496ef364a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@PIUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_aeac69eefd1dd53d06b789137f37fb5ad7ae145eebfaba83a31efae46cda1d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeac69eefd1dd53d06b789137f37fb5ad7ae145eebfaba83a31efae46cda1d20->enter($__internal_aeac69eefd1dd53d06b789137f37fb5ad7ae145eebfaba83a31efae46cda1d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/ChangePassword/change_password.html.twig"));

        $__internal_053d67d2e6ccf634de357602e9295c559a0b7f8119890c9b0148216e6257141a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_053d67d2e6ccf634de357602e9295c559a0b7f8119890c9b0148216e6257141a->enter($__internal_053d67d2e6ccf634de357602e9295c559a0b7f8119890c9b0148216e6257141a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeac69eefd1dd53d06b789137f37fb5ad7ae145eebfaba83a31efae46cda1d20->leave($__internal_aeac69eefd1dd53d06b789137f37fb5ad7ae145eebfaba83a31efae46cda1d20_prof);

        
        $__internal_053d67d2e6ccf634de357602e9295c559a0b7f8119890c9b0148216e6257141a->leave($__internal_053d67d2e6ccf634de357602e9295c559a0b7f8119890c9b0148216e6257141a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cdc13a6331cea72f927d071078df941ad1de6a02898e2ce2916c6890c047d880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc13a6331cea72f927d071078df941ad1de6a02898e2ce2916c6890c047d880->enter($__internal_cdc13a6331cea72f927d071078df941ad1de6a02898e2ce2916c6890c047d880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_733f6beb238ce2f57d04f059cd21104e0f4885808f19eecd3e0783f96acffbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733f6beb238ce2f57d04f059cd21104e0f4885808f19eecd3e0783f96acffbc1->enter($__internal_733f6beb238ce2f57d04f059cd21104e0f4885808f19eecd3e0783f96acffbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@PIUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_733f6beb238ce2f57d04f059cd21104e0f4885808f19eecd3e0783f96acffbc1->leave($__internal_733f6beb238ce2f57d04f059cd21104e0f4885808f19eecd3e0783f96acffbc1_prof);

        
        $__internal_cdc13a6331cea72f927d071078df941ad1de6a02898e2ce2916c6890c047d880->leave($__internal_cdc13a6331cea72f927d071078df941ad1de6a02898e2ce2916c6890c047d880_prof);

    }

    public function getTemplateName()
    {
        return "@PIUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@PIUser/ChangePassword/change_password.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
