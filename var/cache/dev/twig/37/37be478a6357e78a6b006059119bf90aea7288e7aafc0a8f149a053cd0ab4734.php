<?php

/* PIUserBundle:Group:list_content.html.twig */
class __TwigTemplate_fdb7b0c8b6cbf24638ee7657df90965daad41f49156516ab823907d6f99a5de5 extends Twig_Template
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
        $__internal_5c6acc40102c38d58c96589c2e157c90975179e561bfb32202eb86783eeb408d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6acc40102c38d58c96589c2e157c90975179e561bfb32202eb86783eeb408d->enter($__internal_5c6acc40102c38d58c96589c2e157c90975179e561bfb32202eb86783eeb408d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:list_content.html.twig"));

        $__internal_22dd1d14a4119757867862a24bcdaa4651cf311692b11b92843b9935eefc9609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dd1d14a4119757867862a24bcdaa4651cf311692b11b92843b9935eefc9609->enter($__internal_22dd1d14a4119757867862a24bcdaa4651cf311692b11b92843b9935eefc9609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_5c6acc40102c38d58c96589c2e157c90975179e561bfb32202eb86783eeb408d->leave($__internal_5c6acc40102c38d58c96589c2e157c90975179e561bfb32202eb86783eeb408d_prof);

        
        $__internal_22dd1d14a4119757867862a24bcdaa4651cf311692b11b92843b9935eefc9609->leave($__internal_22dd1d14a4119757867862a24bcdaa4651cf311692b11b92843b9935eefc9609_prof);

    }

    public function getTemplateName()
    {
        return "PIUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "PIUserBundle:Group:list_content.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle/Resources/views/Group/list_content.html.twig");
    }
}
