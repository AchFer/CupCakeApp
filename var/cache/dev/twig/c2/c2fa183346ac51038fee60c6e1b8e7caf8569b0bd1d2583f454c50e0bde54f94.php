<?php

/* @PIAppel/appeldoffre/ajoutappeldoffre1.html.twig */
class __TwigTemplate_c1d10456ce9aa661c214d5b405e7a3268fdd5616ffad463ee137ecd3596887e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("PIAppelBundle:Default:index.html.twig", "@PIAppel/appeldoffre/ajoutappeldoffre1.html.twig", 2);
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
        $__internal_03b279beed8f424b62bddbc79c637ad2125ee4387087c85238a7329b814f3ba4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b279beed8f424b62bddbc79c637ad2125ee4387087c85238a7329b814f3ba4->enter($__internal_03b279beed8f424b62bddbc79c637ad2125ee4387087c85238a7329b814f3ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/ajoutappeldoffre1.html.twig"));

        $__internal_7b801a7adb4ff2b1137249b1c89c9190708126a1421851aeea7e1ed79c6d1070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b801a7adb4ff2b1137249b1c89c9190708126a1421851aeea7e1ed79c6d1070->enter($__internal_7b801a7adb4ff2b1137249b1c89c9190708126a1421851aeea7e1ed79c6d1070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PIAppel/appeldoffre/ajoutappeldoffre1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b279beed8f424b62bddbc79c637ad2125ee4387087c85238a7329b814f3ba4->leave($__internal_03b279beed8f424b62bddbc79c637ad2125ee4387087c85238a7329b814f3ba4_prof);

        
        $__internal_7b801a7adb4ff2b1137249b1c89c9190708126a1421851aeea7e1ed79c6d1070->leave($__internal_7b801a7adb4ff2b1137249b1c89c9190708126a1421851aeea7e1ed79c6d1070_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_c62e3b4c7df9f1f78e903911955d1600630580b6eb3690993e35681ac61164bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c62e3b4c7df9f1f78e903911955d1600630580b6eb3690993e35681ac61164bd->enter($__internal_c62e3b4c7df9f1f78e903911955d1600630580b6eb3690993e35681ac61164bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fce8131b3375b7793018b1e25b74fa9d8360d68f9b252590f57fdc4e8bfadc75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce8131b3375b7793018b1e25b74fa9d8360d68f9b252590f57fdc4e8bfadc75->enter($__internal_fce8131b3375b7793018b1e25b74fa9d8360d68f9b252590f57fdc4e8bfadc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fce8131b3375b7793018b1e25b74fa9d8360d68f9b252590f57fdc4e8bfadc75->leave($__internal_fce8131b3375b7793018b1e25b74fa9d8360d68f9b252590f57fdc4e8bfadc75_prof);

        
        $__internal_c62e3b4c7df9f1f78e903911955d1600630580b6eb3690993e35681ac61164bd->leave($__internal_c62e3b4c7df9f1f78e903911955d1600630580b6eb3690993e35681ac61164bd_prof);

    }

    // line 18
    public function block_container($context, array $blocks = array())
    {
        $__internal_4f2de81c1deccb45f9fe4ed0b36dcda96eee221f1937e3cdfbdebf37642dbcb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2de81c1deccb45f9fe4ed0b36dcda96eee221f1937e3cdfbdebf37642dbcb0->enter($__internal_4f2de81c1deccb45f9fe4ed0b36dcda96eee221f1937e3cdfbdebf37642dbcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_35aa03f65dacc1b028c1c18741f6479ce6aa7de36a8271ea73dd728de96f7923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aa03f65dacc1b028c1c18741f6479ce6aa7de36a8271ea73dd728de96f7923->enter($__internal_35aa03f65dacc1b028c1c18741f6479ce6aa7de36a8271ea73dd728de96f7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_35aa03f65dacc1b028c1c18741f6479ce6aa7de36a8271ea73dd728de96f7923->leave($__internal_35aa03f65dacc1b028c1c18741f6479ce6aa7de36a8271ea73dd728de96f7923_prof);

        
        $__internal_4f2de81c1deccb45f9fe4ed0b36dcda96eee221f1937e3cdfbdebf37642dbcb0->leave($__internal_4f2de81c1deccb45f9fe4ed0b36dcda96eee221f1937e3cdfbdebf37642dbcb0_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_3fa3230e2a482f8a4be213ec2e0155bc0eb1b82fd4887727feec46ef905ef004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa3230e2a482f8a4be213ec2e0155bc0eb1b82fd4887727feec46ef905ef004->enter($__internal_3fa3230e2a482f8a4be213ec2e0155bc0eb1b82fd4887727feec46ef905ef004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_e6c7d48d38508e7adb8a6c37dd7d568ba66c2435890f9784d8a68ed36317a331 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c7d48d38508e7adb8a6c37dd7d568ba66c2435890f9784d8a68ed36317a331->enter($__internal_e6c7d48d38508e7adb8a6c37dd7d568ba66c2435890f9784d8a68ed36317a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_e6c7d48d38508e7adb8a6c37dd7d568ba66c2435890f9784d8a68ed36317a331->leave($__internal_e6c7d48d38508e7adb8a6c37dd7d568ba66c2435890f9784d8a68ed36317a331_prof);

        
        $__internal_3fa3230e2a482f8a4be213ec2e0155bc0eb1b82fd4887727feec46ef905ef004->leave($__internal_3fa3230e2a482f8a4be213ec2e0155bc0eb1b82fd4887727feec46ef905ef004_prof);

    }

    public function getTemplateName()
    {
        return "@PIAppel/appeldoffre/ajoutappeldoffre1.html.twig";
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
{% endblock %}", "@PIAppel/appeldoffre/ajoutappeldoffre1.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle\\Resources\\views\\appeldoffre\\ajoutappeldoffre1.html.twig");
    }
}
