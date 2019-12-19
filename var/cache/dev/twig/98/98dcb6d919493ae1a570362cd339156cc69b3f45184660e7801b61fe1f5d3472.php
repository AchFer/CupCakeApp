<?php

/* PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig */
class __TwigTemplate_1bdb5d0623138a8967f43a5e180fe758c77b0f5e67bce4ad1289bc3a95193162 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'container' => array($this, 'block_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PIAppelBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77e60790f2510722122c769c57f9fa831707848f60bb3e0aa5acee4a7c4dc5dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e60790f2510722122c769c57f9fa831707848f60bb3e0aa5acee4a7c4dc5dc->enter($__internal_77e60790f2510722122c769c57f9fa831707848f60bb3e0aa5acee4a7c4dc5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig"));

        $__internal_70fa1e1aa34de5b32085618c071e05f2260d6bd59af20ad96f0362f9d6e8fee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70fa1e1aa34de5b32085618c071e05f2260d6bd59af20ad96f0362f9d6e8fee4->enter($__internal_70fa1e1aa34de5b32085618c071e05f2260d6bd59af20ad96f0362f9d6e8fee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e60790f2510722122c769c57f9fa831707848f60bb3e0aa5acee4a7c4dc5dc->leave($__internal_77e60790f2510722122c769c57f9fa831707848f60bb3e0aa5acee4a7c4dc5dc_prof);

        
        $__internal_70fa1e1aa34de5b32085618c071e05f2260d6bd59af20ad96f0362f9d6e8fee4->leave($__internal_70fa1e1aa34de5b32085618c071e05f2260d6bd59af20ad96f0362f9d6e8fee4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1b514a2f604acdb7e95602c45b62365752a6adc41b0bbe9825fc4eb9a64ce0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b514a2f604acdb7e95602c45b62365752a6adc41b0bbe9825fc4eb9a64ce0c->enter($__internal_f1b514a2f604acdb7e95602c45b62365752a6adc41b0bbe9825fc4eb9a64ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b26b1a4b07ce5fc2adea9faab496a0be583d838f08e66834382693aed965d333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26b1a4b07ce5fc2adea9faab496a0be583d838f08e66834382693aed965d333->enter($__internal_b26b1a4b07ce5fc2adea9faab496a0be583d838f08e66834382693aed965d333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <head>

        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/formValidation.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/formValidation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/dist/css/lobibox.min.css"), "html", null, true);
        echo "\"/>
        <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/lib/jquery.1.11.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/dist/js/lobibox.min.js"), "html", null, true);
        echo "\"></script>
    </head>
";
        
        $__internal_b26b1a4b07ce5fc2adea9faab496a0be583d838f08e66834382693aed965d333->leave($__internal_b26b1a4b07ce5fc2adea9faab496a0be583d838f08e66834382693aed965d333_prof);

        
        $__internal_f1b514a2f604acdb7e95602c45b62365752a6adc41b0bbe9825fc4eb9a64ce0c->leave($__internal_f1b514a2f604acdb7e95602c45b62365752a6adc41b0bbe9825fc4eb9a64ce0c_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_6e177ea8bc4d8c0e29c03c4f045c2cf0caa042171f1d99d2186bdb95e5f79136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e177ea8bc4d8c0e29c03c4f045c2cf0caa042171f1d99d2186bdb95e5f79136->enter($__internal_6e177ea8bc4d8c0e29c03c4f045c2cf0caa042171f1d99d2186bdb95e5f79136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_955b8e7cfa0c9b856ea1ae8d4e3ad7ece10993a75b46de25005b4a0b8dd292bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955b8e7cfa0c9b856ea1ae8d4e3ad7ece10993a75b46de25005b4a0b8dd292bd->enter($__internal_955b8e7cfa0c9b856ea1ae8d4e3ad7ece10993a75b46de25005b4a0b8dd292bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 18
        echo "
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 19, $this->getSourceContext()); })()), 'form_start', array("attr" => array("onsubmit" => "return controle();")));
        echo "



    <div class=\"main-container ace-save-state\" id=\"main-container\">
        <div class=\"page-content\">
            <div class=\"main-content\">
                <div class=\"main-content-inner\">

                    <div class=\"row\">
                        <div class=\"col-xs-12\">

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Sujet </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 35, $this->getSourceContext()); })()), "sujet", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>


                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> DataMaximal </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 44, $this->getSourceContext()); })()), "datemax", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Description </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 52, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>



                            <div class=\"form-group\">
                                <div class=\"clearfix form-actions\">
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 61, $this->getSourceContext()); })()), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
        echo "


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 74, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_955b8e7cfa0c9b856ea1ae8d4e3ad7ece10993a75b46de25005b4a0b8dd292bd->leave($__internal_955b8e7cfa0c9b856ea1ae8d4e3ad7ece10993a75b46de25005b4a0b8dd292bd_prof);

        
        $__internal_6e177ea8bc4d8c0e29c03c4f045c2cf0caa042171f1d99d2186bdb95e5f79136->leave($__internal_6e177ea8bc4d8c0e29c03c4f045c2cf0caa042171f1d99d2186bdb95e5f79136_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d4af10eb6eb7e5ab12db973aa7109a4f44a068ae825f042497bde0c064e260af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4af10eb6eb7e5ab12db973aa7109a4f44a068ae825f042497bde0c064e260af->enter($__internal_d4af10eb6eb7e5ab12db973aa7109a4f44a068ae825f042497bde0c064e260af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_300a6cdca4b5ec6c49b3b5a195cf5b41a565b511c88b21d76908907a56f9af37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300a6cdca4b5ec6c49b3b5a195cf5b41a565b511c88b21d76908907a56f9af37->enter($__internal_300a6cdca4b5ec6c49b3b5a195cf5b41a565b511c88b21d76908907a56f9af37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 81
        echo "    <script>
    function controle() {
    if (document.getElementById(\"pi_appelbundle_appeldoffre_sujet\").value.length < 6){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"la sujet de la recette doit contenir au moins 6 lettres\"
    });
    return false;
    }
    if (document.getElementById('forumbundle_recette_duree').value < 1){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"duree doit etre positive\"
    });
    return false;
    }
    if (document.getElementById('forumbundle_recette_besoin').value.length < 6){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"l adresse doit contenir au moins 6 lettres\"
    });
    return false;
    }
    if (!document.getElementById('date').value < date('Y-m-d H:i:s') ){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"vous devez selectionez une date\"
    });
    return false;
    }
    return true;
    }
    </script>
";
        
        $__internal_300a6cdca4b5ec6c49b3b5a195cf5b41a565b511c88b21d76908907a56f9af37->leave($__internal_300a6cdca4b5ec6c49b3b5a195cf5b41a565b511c88b21d76908907a56f9af37_prof);

        
        $__internal_d4af10eb6eb7e5ab12db973aa7109a4f44a068ae825f042497bde0c064e260af->leave($__internal_d4af10eb6eb7e5ab12db973aa7109a4f44a068ae825f042497bde0c064e260af_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 81,  196 => 80,  182 => 74,  166 => 61,  154 => 52,  143 => 44,  131 => 35,  112 => 19,  109 => 18,  100 => 17,  87 => 14,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PIAppelBundle:Default:index.html.twig\" %}

{% block head %}
    <head>

        <link rel=\"stylesheet\" href=\"{{ asset('Formvalidation/formValidation.css')}}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('Formvalidation/bootstrap.css')}}\"/>
        <script type=\"text/javascript\" src=\"{{ asset('Formvalidation/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('Formvalidation/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('Formvalidation/formValidation.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('Formvalidation/bootstrap.js') }}\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('lobibox/dist/css/lobibox.min.css') }}\"/>
        <script src=\"{{ asset('lobibox/lib/jquery.1.11.min.js') }}\"></script>
        <script src=\"{{ asset('lobibox/dist/js/lobibox.min.js') }}\"></script>
    </head>
{% endblock %}
{% block container %}

    {{ form_start(f , {'attr': {'onsubmit':'return controle();' }}) }}



    <div class=\"main-container ace-save-state\" id=\"main-container\">
        <div class=\"page-content\">
            <div class=\"main-content\">
                <div class=\"main-content-inner\">

                    <div class=\"row\">
                        <div class=\"col-xs-12\">

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Sujet </label>
                                <div class=\"col-sm-9\">
                                    {{ form_widget(f.sujet ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>


                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> DataMaximal </label>
                                <div class=\"col-sm-9\">
                                    {{ form_widget(f.datemax ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Description </label>
                                <div class=\"col-sm-9\">
                                    {{ form_widget(f.description ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>



                            <div class=\"form-group\">
                                <div class=\"clearfix form-actions\">
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        {{ form_widget(f.valider,{ 'attr':{'class': 'btn btn-info'}} ) }}


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(f) }}


{% endblock %}


{% block javascript %}
    <script>
    function controle() {
    if (document.getElementById(\"pi_appelbundle_appeldoffre_sujet\").value.length < 6){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"la sujet de la recette doit contenir au moins 6 lettres\"
    });
    return false;
    }
    if (document.getElementById('forumbundle_recette_duree').value < 1){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"duree doit etre positive\"
    });
    return false;
    }
    if (document.getElementById('forumbundle_recette_besoin').value.length < 6){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"l adresse doit contenir au moins 6 lettres\"
    });
    return false;
    }
    if (!document.getElementById('date').value < date('Y-m-d H:i:s') ){
    Lobibox.notify('error',
    {
    rounded: true,
    msg: \"vous devez selectionez une date\"
    });
    return false;
    }
    return true;
    }
    </script>
{% endblock %}", "PIAppelBundle:appeldoffre:ajoutappeldoffre.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/ajoutappeldoffre.html.twig");
    }
}
