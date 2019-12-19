<?php

/* @PIAppel/appeldoffre/ajoutappeldoffre.html.twig */
class __TwigTemplate_d4772a81b2336b9d35ac4ce75e0e5aebeb0d3214ce541181f364226345960635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/ajoutappeldoffre.html.twig", 1);
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
        $__internal_14464585188dc55b87503cbe86b595ade6b4d99212ab25a2bb3e5d95175dc768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14464585188dc55b87503cbe86b595ade6b4d99212ab25a2bb3e5d95175dc768->enter($__internal_14464585188dc55b87503cbe86b595ade6b4d99212ab25a2bb3e5d95175dc768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/ajoutappeldoffre.html.twig"));

        $__internal_7e6df4bf2588b3e24d80964c36fb650b258013e5ed4342705f5c521b238914a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6df4bf2588b3e24d80964c36fb650b258013e5ed4342705f5c521b238914a1->enter($__internal_7e6df4bf2588b3e24d80964c36fb650b258013e5ed4342705f5c521b238914a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/ajoutappeldoffre.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14464585188dc55b87503cbe86b595ade6b4d99212ab25a2bb3e5d95175dc768->leave($__internal_14464585188dc55b87503cbe86b595ade6b4d99212ab25a2bb3e5d95175dc768_prof);

        
        $__internal_7e6df4bf2588b3e24d80964c36fb650b258013e5ed4342705f5c521b238914a1->leave($__internal_7e6df4bf2588b3e24d80964c36fb650b258013e5ed4342705f5c521b238914a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d231d78bd0fa7cc453abdeafe0c6eb2f73759f7b60df926dbcdfc180c2650093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d231d78bd0fa7cc453abdeafe0c6eb2f73759f7b60df926dbcdfc180c2650093->enter($__internal_d231d78bd0fa7cc453abdeafe0c6eb2f73759f7b60df926dbcdfc180c2650093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4ea7ca35a7e0e10ed5860588c8cb11fd14b08fef2895c0c958680710300637b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea7ca35a7e0e10ed5860588c8cb11fd14b08fef2895c0c958680710300637b9->enter($__internal_4ea7ca35a7e0e10ed5860588c8cb11fd14b08fef2895c0c958680710300637b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4ea7ca35a7e0e10ed5860588c8cb11fd14b08fef2895c0c958680710300637b9->leave($__internal_4ea7ca35a7e0e10ed5860588c8cb11fd14b08fef2895c0c958680710300637b9_prof);

        
        $__internal_d231d78bd0fa7cc453abdeafe0c6eb2f73759f7b60df926dbcdfc180c2650093->leave($__internal_d231d78bd0fa7cc453abdeafe0c6eb2f73759f7b60df926dbcdfc180c2650093_prof);

    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        $__internal_99fa2a09f2184aea81d8543eee03646d3f70b4a1ecc0c86a77a3da37dc8a49f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99fa2a09f2184aea81d8543eee03646d3f70b4a1ecc0c86a77a3da37dc8a49f2->enter($__internal_99fa2a09f2184aea81d8543eee03646d3f70b4a1ecc0c86a77a3da37dc8a49f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_e3f671c2fdeb194eb4a4ec81438e86f099a0f19d2de35b9f55a19ae530f3333b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f671c2fdeb194eb4a4ec81438e86f099a0f19d2de35b9f55a19ae530f3333b->enter($__internal_e3f671c2fdeb194eb4a4ec81438e86f099a0f19d2de35b9f55a19ae530f3333b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_e3f671c2fdeb194eb4a4ec81438e86f099a0f19d2de35b9f55a19ae530f3333b->leave($__internal_e3f671c2fdeb194eb4a4ec81438e86f099a0f19d2de35b9f55a19ae530f3333b_prof);

        
        $__internal_99fa2a09f2184aea81d8543eee03646d3f70b4a1ecc0c86a77a3da37dc8a49f2->leave($__internal_99fa2a09f2184aea81d8543eee03646d3f70b4a1ecc0c86a77a3da37dc8a49f2_prof);

    }

    // line 80
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_de43e8c6262ed6ae4c4b7494cde77d1ea2c82b0a45ab71bc2c0320798876ec88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de43e8c6262ed6ae4c4b7494cde77d1ea2c82b0a45ab71bc2c0320798876ec88->enter($__internal_de43e8c6262ed6ae4c4b7494cde77d1ea2c82b0a45ab71bc2c0320798876ec88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_1041b460244887160c560a43b9189b556aae9ccaba2d0ed830998400c318e43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1041b460244887160c560a43b9189b556aae9ccaba2d0ed830998400c318e43b->enter($__internal_1041b460244887160c560a43b9189b556aae9ccaba2d0ed830998400c318e43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_1041b460244887160c560a43b9189b556aae9ccaba2d0ed830998400c318e43b->leave($__internal_1041b460244887160c560a43b9189b556aae9ccaba2d0ed830998400c318e43b_prof);

        
        $__internal_de43e8c6262ed6ae4c4b7494cde77d1ea2c82b0a45ab71bc2c0320798876ec88->leave($__internal_de43e8c6262ed6ae4c4b7494cde77d1ea2c82b0a45ab71bc2c0320798876ec88_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/ajoutappeldoffre.html.twig";
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
{% endblock %}", "@PIAppel/appeldoffre/ajoutappeldoffre.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\ajoutappeldoffre.html.twig");
    }
}
