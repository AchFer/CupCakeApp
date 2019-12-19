<?php

/* PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig */
class __TwigTemplate_a6da9b803ff8b97a40d985c04b686a648fbac12b35d62f401600e77c107e9fb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig", 2);
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
        $__internal_275de79bf8cc41ee1365c022f499e509854f66db953790d4a3e2685a870b4076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275de79bf8cc41ee1365c022f499e509854f66db953790d4a3e2685a870b4076->enter($__internal_275de79bf8cc41ee1365c022f499e509854f66db953790d4a3e2685a870b4076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig"));

        $__internal_dbc045b147a8eef981dc0b2107db0d57e6eba6c84d4e1e08b32f706980aa159a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc045b147a8eef981dc0b2107db0d57e6eba6c84d4e1e08b32f706980aa159a->enter($__internal_dbc045b147a8eef981dc0b2107db0d57e6eba6c84d4e1e08b32f706980aa159a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275de79bf8cc41ee1365c022f499e509854f66db953790d4a3e2685a870b4076->leave($__internal_275de79bf8cc41ee1365c022f499e509854f66db953790d4a3e2685a870b4076_prof);

        
        $__internal_dbc045b147a8eef981dc0b2107db0d57e6eba6c84d4e1e08b32f706980aa159a->leave($__internal_dbc045b147a8eef981dc0b2107db0d57e6eba6c84d4e1e08b32f706980aa159a_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_f944592285a2519a481cca9dde6bdc470123973f5ab34a78877c3c96efcef16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f944592285a2519a481cca9dde6bdc470123973f5ab34a78877c3c96efcef16c->enter($__internal_f944592285a2519a481cca9dde6bdc470123973f5ab34a78877c3c96efcef16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a76b497a0d837d47816180e88c1226663673318c8327e20730a4127761a4cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a76b497a0d837d47816180e88c1226663673318c8327e20730a4127761a4cb0->enter($__internal_5a76b497a0d837d47816180e88c1226663673318c8327e20730a4127761a4cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a76b497a0d837d47816180e88c1226663673318c8327e20730a4127761a4cb0->leave($__internal_5a76b497a0d837d47816180e88c1226663673318c8327e20730a4127761a4cb0_prof);

        
        $__internal_f944592285a2519a481cca9dde6bdc470123973f5ab34a78877c3c96efcef16c->leave($__internal_f944592285a2519a481cca9dde6bdc470123973f5ab34a78877c3c96efcef16c_prof);

    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        $__internal_4b9c87c921a000d8fcc002181f82f36a13f165fde8fae5dd71958085c00a5c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b9c87c921a000d8fcc002181f82f36a13f165fde8fae5dd71958085c00a5c45->enter($__internal_4b9c87c921a000d8fcc002181f82f36a13f165fde8fae5dd71958085c00a5c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_08a6b7965977e5804c5f0f6c4a9c5697a81adfe886a7325283d37df0b47400fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a6b7965977e5804c5f0f6c4a9c5697a81adfe886a7325283d37df0b47400fc->enter($__internal_08a6b7965977e5804c5f0f6c4a9c5697a81adfe886a7325283d37df0b47400fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 19
        echo "
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 20, $this->getSourceContext()); })()), 'form_start', array("attr" => array("onsubmit" => "return controle();")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 36, $this->getSourceContext()); })()), "sujet", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>


                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> DataMaximal </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 45, $this->getSourceContext()); })()), "datemax", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo " <center><h4 style=\"color: red\"> Date invalide  </h4></center>
                                </div>
                            </div><br><br>

                            <!-- PAGE CONTENT BEGINS -->
                            <div class=\"form-group\">
                                <label class=\"col-sm-3 control-label no-padding-right\" for=\"form-field-1\"> Description </label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 53, $this->getSourceContext()); })()), "description", array()), 'widget', array("attr" => array("class" => "col-xs-10 col-sm-5")));
        echo "
                                </div>
                            </div><br><br>



                            <div class=\"form-group\">
                                <div class=\"clearfix form-actions\">
                                    <div class=\"col-md-offset-3 col-md-9\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 62, $this->getSourceContext()); })()), "valider", array()), 'widget', array("attr" => array("class" => "btn btn-info")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new Twig_Error_Runtime('Variable "f" does not exist.', 75, $this->getSourceContext()); })()), 'form_end');
        echo "


";
        
        $__internal_08a6b7965977e5804c5f0f6c4a9c5697a81adfe886a7325283d37df0b47400fc->leave($__internal_08a6b7965977e5804c5f0f6c4a9c5697a81adfe886a7325283d37df0b47400fc_prof);

        
        $__internal_4b9c87c921a000d8fcc002181f82f36a13f165fde8fae5dd71958085c00a5c45->leave($__internal_4b9c87c921a000d8fcc002181f82f36a13f165fde8fae5dd71958085c00a5c45_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_33f16b07c1c653182082d1197ad3c1f441134f06541f1d7561aaab9533969f24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33f16b07c1c653182082d1197ad3c1f441134f06541f1d7561aaab9533969f24->enter($__internal_33f16b07c1c653182082d1197ad3c1f441134f06541f1d7561aaab9533969f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_336bbd711ea8d0feb859b7c42c728ab1e12cbcd6d88f22b44cff885f1d876f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336bbd711ea8d0feb859b7c42c728ab1e12cbcd6d88f22b44cff885f1d876f0f->enter($__internal_336bbd711ea8d0feb859b7c42c728ab1e12cbcd6d88f22b44cff885f1d876f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
            if (!document.getElementById('date').value < date ){
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
        
        $__internal_336bbd711ea8d0feb859b7c42c728ab1e12cbcd6d88f22b44cff885f1d876f0f->leave($__internal_336bbd711ea8d0feb859b7c42c728ab1e12cbcd6d88f22b44cff885f1d876f0f_prof);

        
        $__internal_33f16b07c1c653182082d1197ad3c1f441134f06541f1d7561aaab9533969f24->leave($__internal_33f16b07c1c653182082d1197ad3c1f441134f06541f1d7561aaab9533969f24_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig";
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
                                    {{ form_widget(f.datemax ,{ 'attr':{'class': 'col-xs-10 col-sm-5'}} ) }} <center><h4 style=\"color: red\"> Date invalide  </h4></center>
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
            if (!document.getElementById('date').value < date ){
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
{% endblock %}", "PIAppelBundle:appeldoffre:ajoutappeldoffre1.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/appeldoffre/ajoutappeldoffre1.html.twig");
    }
}
