<?php

/* PIAppelBundle:appeldoffre:update.html.twig */
class __TwigTemplate_35c799ee1fddd1c5440a91ba98263789752c20d9cdb0baf686b023adf4b61b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:update.html.twig", 2);
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
        $__internal_247c39e8d48cc63869c30abe323521040c2100260a26189070bd28db16f6a0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247c39e8d48cc63869c30abe323521040c2100260a26189070bd28db16f6a0db->enter($__internal_247c39e8d48cc63869c30abe323521040c2100260a26189070bd28db16f6a0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:update.html.twig"));

        $__internal_804a6670f75595fecff8af8b8a26ba935d46d30c14dfa604c09c413f19151e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804a6670f75595fecff8af8b8a26ba935d46d30c14dfa604c09c413f19151e98->enter($__internal_804a6670f75595fecff8af8b8a26ba935d46d30c14dfa604c09c413f19151e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247c39e8d48cc63869c30abe323521040c2100260a26189070bd28db16f6a0db->leave($__internal_247c39e8d48cc63869c30abe323521040c2100260a26189070bd28db16f6a0db_prof);

        
        $__internal_804a6670f75595fecff8af8b8a26ba935d46d30c14dfa604c09c413f19151e98->leave($__internal_804a6670f75595fecff8af8b8a26ba935d46d30c14dfa604c09c413f19151e98_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_18f27b7aa03cdbcc418c6e3aa0a096039098e2f6dcba02f0b06eec5141b1be47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f27b7aa03cdbcc418c6e3aa0a096039098e2f6dcba02f0b06eec5141b1be47->enter($__internal_18f27b7aa03cdbcc418c6e3aa0a096039098e2f6dcba02f0b06eec5141b1be47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e32d358f716d00abf47966d831bddee5b8b54816461c916a94e2c42ade4bac36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32d358f716d00abf47966d831bddee5b8b54816461c916a94e2c42ade4bac36->enter($__internal_e32d358f716d00abf47966d831bddee5b8b54816461c916a94e2c42ade4bac36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <head>

        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/formValidation.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/formValidation.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Formvalidation/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/dist/css/lobibox.min.css"), "html", null, true);
        echo "\"/>
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/lib/jquery.1.11.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lobibox/dist/js/lobibox.min.js"), "html", null, true);
        echo "\"></script>
    </head>
";
        
        $__internal_e32d358f716d00abf47966d831bddee5b8b54816461c916a94e2c42ade4bac36->leave($__internal_e32d358f716d00abf47966d831bddee5b8b54816461c916a94e2c42ade4bac36_prof);

        
        $__internal_18f27b7aa03cdbcc418c6e3aa0a096039098e2f6dcba02f0b06eec5141b1be47->leave($__internal_18f27b7aa03cdbcc418c6e3aa0a096039098e2f6dcba02f0b06eec5141b1be47_prof);

    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        $__internal_95fcf1edc198d1171005fd74adf93409f8933f35d6551c376a3e6b083290c700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95fcf1edc198d1171005fd74adf93409f8933f35d6551c376a3e6b083290c700->enter($__internal_95fcf1edc198d1171005fd74adf93409f8933f35d6551c376a3e6b083290c700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_8f2a44cedcbaab382174dc901620f5510a79ae58b14f257f47980a69897d4a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2a44cedcbaab382174dc901620f5510a79ae58b14f257f47980a69897d4a05->enter($__internal_8f2a44cedcbaab382174dc901620f5510a79ae58b14f257f47980a69897d4a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'form_start');
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
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->getSourceContext()); })()), "sujet", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>


                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> DataMaximal </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), "datemax", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Description </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>



                            <div class=\"form-group\">
                                <div class=\"clearfix form-actions\">
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), "valider", array()), 'widget', array("label" => "Modifier"));
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
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_8f2a44cedcbaab382174dc901620f5510a79ae58b14f257f47980a69897d4a05->leave($__internal_8f2a44cedcbaab382174dc901620f5510a79ae58b14f257f47980a69897d4a05_prof);

        
        $__internal_95fcf1edc198d1171005fd74adf93409f8933f35d6551c376a3e6b083290c700->leave($__internal_95fcf1edc198d1171005fd74adf93409f8933f35d6551c376a3e6b083290c700_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_d515a85ef8759534b1fd6859d5713f780bcc1f5b70b38ae38d91bfc388432ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d515a85ef8759534b1fd6859d5713f780bcc1f5b70b38ae38d91bfc388432ebd->enter($__internal_d515a85ef8759534b1fd6859d5713f780bcc1f5b70b38ae38d91bfc388432ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ff72b4fadbe53ba8408575bc7866bc934b46942ae15c699cf3c87e51fcebb90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff72b4fadbe53ba8408575bc7866bc934b46942ae15c699cf3c87e51fcebb90d->enter($__internal_ff72b4fadbe53ba8408575bc7866bc934b46942ae15c699cf3c87e51fcebb90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 82
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
                        msg: \"vous devez changer de date\"
                    });
                return false;
            }
            return true;
        }
    </script>
";
        
        $__internal_ff72b4fadbe53ba8408575bc7866bc934b46942ae15c699cf3c87e51fcebb90d->leave($__internal_ff72b4fadbe53ba8408575bc7866bc934b46942ae15c699cf3c87e51fcebb90d_prof);

        
        $__internal_d515a85ef8759534b1fd6859d5713f780bcc1f5b70b38ae38d91bfc388432ebd->leave($__internal_d515a85ef8759534b1fd6859d5713f780bcc1f5b70b38ae38d91bfc388432ebd_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 82,  196 => 81,  182 => 75,  166 => 62,  154 => 53,  143 => 45,  131 => 36,  112 => 20,  109 => 19,  100 => 18,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 5,  42 => 4,  11 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"PIAppelBundle:Default:index.html.twig\" %}

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

    {{ form_start(form) }}



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
                                    {{ form_widget(form.sujet ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>


                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> DataMaximal </label>
                                <div class=\"col-sm-9\">
                                    {{ form_widget(form.datemax ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Description </label>
                                <div class=\"col-sm-9\">
                                    {{ form_widget(form.description ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }}
                                </div>
                            </div><br><br>



                            <div class=\"form-group\">
                                <div class=\"clearfix form-actions\">
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        {{ form_widget(form.valider,{'label':'Modifier'}) }}


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}


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
                        msg: \"vous devez changer de date\"
                    });
                return false;
            }
            return true;
        }
    </script>
{% endblock %}", "PIAppelBundle:appeldoffre:update.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/update.html.twig");
    }
}
