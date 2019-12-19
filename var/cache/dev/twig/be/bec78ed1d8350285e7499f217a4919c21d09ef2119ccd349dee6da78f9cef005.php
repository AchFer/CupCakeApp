<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bff1239d485ed1aa0af4325051d3867eaabba6276402449b2da145fcc5665698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6591fa076045dfcfd3ba8040ff58159ab6692a534408ec934f52b928cde33edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6591fa076045dfcfd3ba8040ff58159ab6692a534408ec934f52b928cde33edd->enter($__internal_6591fa076045dfcfd3ba8040ff58159ab6692a534408ec934f52b928cde33edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1d0d937d0f2713b786c2d1ae052414f791aa63953994e05c3bd9585c605cc330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d0d937d0f2713b786c2d1ae052414f791aa63953994e05c3bd9585c605cc330->enter($__internal_1d0d937d0f2713b786c2d1ae052414f791aa63953994e05c3bd9585c605cc330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
<div>
    ";
        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
        <a href=\"";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 13
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        // line 15
        echo "</div>

";
        // line 17
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "            <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 26
        echo "
<div>
</div>

<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>Login Page - Ace Admin</title>

    <meta name=\"description\" content=\"User login page\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"login-layout\">
<div class=\"main-container\">
    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"login-container\">
                    <div class=\"center\">
                        <h1>
                            <i class=\"ace-icon fa fa-leaf green\"></i>
                            <span class=\"red\">CupCake</span>
                            <span class=\"white\" id=\"id-text2\">Application</span>
                        </h1>
                        <h4 class=\"blue\" id=\"id-company-text\"> Dashboard</h4>
                    </div>

                    <div class=\"space-6\"></div>

                    <div class=\"position-relative\">
                        <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header blue lighter bigger\">
                                        <i class=\"ace-icon fa fa-coffee green\"></i>
                                        Please Enter Your Information
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    ";
        // line 92
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 95
        echo "


                                    <div class=\"social-or-login center\">
                                        <span class=\"bigger-110\">Or Login Using</span>
                                    </div>

                                    <div class=\"space-6\"></div>

                                    <div class=\"social-login center\">
                                        <a class=\"btn btn-primary\">
                                            <i class=\"ace-icon fa fa-facebook\"></i>
                                        </a>

                                        <a class=\"btn btn-info\">
                                            <i class=\"ace-icon fa fa-twitter\"></i>
                                        </a>

                                        <a class=\"btn btn-danger\">
                                            <i class=\"ace-icon fa fa-google-plus\"></i>
                                        </a>
                                    </div>
                                </div><!-- /.widget-main -->

                                <div class=\"toolbar clearfix\">
                                    <div>
                                        <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
                                            <i class=\"ace-icon fa fa-arrow-left\"></i>
                                            Login
                                        </a>
                                    </div>

                                    <div>
                                        <a href=\"";
        // line 128
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" data-target=\"#signup-box\" class=\"user-signup-link\">
                                            I want to register
                                            <i class=\"ace-icon fa fa-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                        <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header red lighter bigger\">
                                        <i class=\"ace-icon fa fa-key\"></i>
                                        Retrieve Password
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p>
                                        Enter your email and to receive instructions
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <div class=\"clearfix\">
                                                <button type=\"button\" class=\"width-35 pull-right btn btn-sm btn-danger\">
                                                    <i class=\"ace-icon fa fa-lightbulb-o\"></i>
                                                    <span class=\"bigger-110\">Send Me!</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->

                                <div class=\"toolbar center\">
                                    <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                        Back to login
                                        <i class=\"ace-icon fa fa-arrow-right\"></i>
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.forgot-box -->

                        <div id=\"signup-box\" class=\"signup-box widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header green lighter bigger\">
                                        <i class=\"ace-icon fa fa-users blue\"></i>
                                        New User Registration
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p> Enter your details to begin: </p>

                                    <form>
                                        <fieldset>
                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Repeat password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-retweet\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block\">
                                                <input type=\"checkbox\" class=\"ace\" />
                                                <span class=\"lbl\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tI accept the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">User Agreement</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <div class=\"space-24\"></div>

                                            <div class=\"clearfix\">
                                                <button type=\"reset\" class=\"width-30 pull-left btn btn-sm\">
                                                    <i class=\"ace-icon fa fa-refresh\"></i>
                                                    <span class=\"bigger-110\">Reset</span>
                                                </button>

                                                <button type=\"button\" class=\"width-65 pull-right btn btn-sm btn-success\">
                                                    <span class=\"bigger-110\">Register</span>

                                                    <i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class=\"toolbar center\">
                                    <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                        <i class=\"ace-icon fa fa-arrow-left\"></i>
                                        Back to login
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->
                    </div><!-- /.position-relative -->

                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"assets/js/jquery-2.1.4.min.js\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"assets/js/jquery-1.11.3.min.js\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>

<!-- inline scripts related to this page -->




";
        
        $__internal_6591fa076045dfcfd3ba8040ff58159ab6692a534408ec934f52b928cde33edd->leave($__internal_6591fa076045dfcfd3ba8040ff58159ab6692a534408ec934f52b928cde33edd_prof);

        
        $__internal_1d0d937d0f2713b786c2d1ae052414f791aa63953994e05c3bd9585c605cc330->leave($__internal_1d0d937d0f2713b786c2d1ae052414f791aa63953994e05c3bd9585c605cc330_prof);

    }

    // line 92
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34a2cda743c8bbe9a6af3a7346625a11c6fde0134abb6867d3d95ad231036979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a2cda743c8bbe9a6af3a7346625a11c6fde0134abb6867d3d95ad231036979->enter($__internal_34a2cda743c8bbe9a6af3a7346625a11c6fde0134abb6867d3d95ad231036979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f30a6e1c450e98c5ebf22a266491353b8eb3cf42ad5a6acb9a6c49a098413825 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f30a6e1c450e98c5ebf22a266491353b8eb3cf42ad5a6acb9a6c49a098413825->enter($__internal_f30a6e1c450e98c5ebf22a266491353b8eb3cf42ad5a6acb9a6c49a098413825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 93
        echo "
                                    ";
        
        $__internal_f30a6e1c450e98c5ebf22a266491353b8eb3cf42ad5a6acb9a6c49a098413825->leave($__internal_f30a6e1c450e98c5ebf22a266491353b8eb3cf42ad5a6acb9a6c49a098413825_prof);

        
        $__internal_34a2cda743c8bbe9a6af3a7346625a11c6fde0134abb6867d3d95ad231036979->leave($__internal_34a2cda743c8bbe9a6af3a7346625a11c6fde0134abb6867d3d95ad231036979_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 93,  394 => 92,  231 => 128,  221 => 121,  193 => 95,  191 => 92,  157 => 61,  153 => 60,  144 => 54,  138 => 51,  133 => 49,  127 => 46,  121 => 43,  115 => 40,  111 => 39,  96 => 26,  89 => 24,  80 => 21,  75 => 20,  70 => 19,  65 => 18,  63 => 17,  59 => 15,  51 => 13,  45 => 10,  41 => 9,  36 => 8,  34 => 7,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<head>
    <meta charset=\"UTF-8\" />
</head>
<body>
<div>
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
        <a href=\"{{ path('fos_user_security_logout') }}\">
            {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
        </a>
    {% else %}
        <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
    {% endif %}
</div>

{% if app.request.hasPreviousSession %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            <div class=\"flash-{{ type }}\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}
{% endif %}

<div>
</div>

<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>Login Page - Ace Admin</title>

    <meta name=\"description\" content=\"User login page\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}\" />

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/fonts.googleapis.com.css')}}\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace.min.css')}}\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-part2.min.css')}}\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-rtl.min.css')}}\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-ie.min.css')}}\" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"{{ asset('bundles/assets/js/html5shiv.min.js')}}\"></script>
    <script src=\"{{ asset('bundles/assets/js/respond.min.js')}}\"></script>
    <![endif]-->
</head>

<body class=\"login-layout\">
<div class=\"main-container\">
    <div class=\"main-content\">
        <div class=\"row\">
            <div class=\"col-sm-10 col-sm-offset-1\">
                <div class=\"login-container\">
                    <div class=\"center\">
                        <h1>
                            <i class=\"ace-icon fa fa-leaf green\"></i>
                            <span class=\"red\">CupCake</span>
                            <span class=\"white\" id=\"id-text2\">Application</span>
                        </h1>
                        <h4 class=\"blue\" id=\"id-company-text\"> Dashboard</h4>
                    </div>

                    <div class=\"space-6\"></div>

                    <div class=\"position-relative\">
                        <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header blue lighter bigger\">
                                        <i class=\"ace-icon fa fa-coffee green\"></i>
                                        Please Enter Your Information
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    {% block fos_user_content %}

                                    {% endblock fos_user_content %}



                                    <div class=\"social-or-login center\">
                                        <span class=\"bigger-110\">Or Login Using</span>
                                    </div>

                                    <div class=\"space-6\"></div>

                                    <div class=\"social-login center\">
                                        <a class=\"btn btn-primary\">
                                            <i class=\"ace-icon fa fa-facebook\"></i>
                                        </a>

                                        <a class=\"btn btn-info\">
                                            <i class=\"ace-icon fa fa-twitter\"></i>
                                        </a>

                                        <a class=\"btn btn-danger\">
                                            <i class=\"ace-icon fa fa-google-plus\"></i>
                                        </a>
                                    </div>
                                </div><!-- /.widget-main -->

                                <div class=\"toolbar clearfix\">
                                    <div>
                                        <a href=\"{{ path('fos_user_security_login') }}\" data-target=\"#forgot-box\" class=\"forgot-password-link\">
                                            <i class=\"ace-icon fa fa-arrow-left\"></i>
                                            Login
                                        </a>
                                    </div>

                                    <div>
                                        <a href=\"{{  path('fos_user_registration_register') }}\" data-target=\"#signup-box\" class=\"user-signup-link\">
                                            I want to register
                                            <i class=\"ace-icon fa fa-arrow-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.login-box -->

                        <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header red lighter bigger\">
                                        <i class=\"ace-icon fa fa-key\"></i>
                                        Retrieve Password
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p>
                                        Enter your email and to receive instructions
                                    </p>

                                    <form>
                                        <fieldset>
                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <div class=\"clearfix\">
                                                <button type=\"button\" class=\"width-35 pull-right btn btn-sm btn-danger\">
                                                    <i class=\"ace-icon fa fa-lightbulb-o\"></i>
                                                    <span class=\"bigger-110\">Send Me!</span>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div><!-- /.widget-main -->

                                <div class=\"toolbar center\">
                                    <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                        Back to login
                                        <i class=\"ace-icon fa fa-arrow-right\"></i>
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.forgot-box -->

                        <div id=\"signup-box\" class=\"signup-box widget-box no-border\">
                            <div class=\"widget-body\">
                                <div class=\"widget-main\">
                                    <h4 class=\"header green lighter bigger\">
                                        <i class=\"ace-icon fa fa-users blue\"></i>
                                        New User Registration
                                    </h4>

                                    <div class=\"space-6\"></div>
                                    <p> Enter your details to begin: </p>

                                    <form>
                                        <fieldset>
                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-envelope\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-user\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"block input-icon input-icon-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Repeat password\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-retweet\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <label class=\"block\">
                                                <input type=\"checkbox\" class=\"ace\" />
                                                <span class=\"lbl\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tI accept the
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">User Agreement</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            </label>

                                            <div class=\"space-24\"></div>

                                            <div class=\"clearfix\">
                                                <button type=\"reset\" class=\"width-30 pull-left btn btn-sm\">
                                                    <i class=\"ace-icon fa fa-refresh\"></i>
                                                    <span class=\"bigger-110\">Reset</span>
                                                </button>

                                                <button type=\"button\" class=\"width-65 pull-right btn btn-sm btn-success\">
                                                    <span class=\"bigger-110\">Register</span>

                                                    <i class=\"ace-icon fa fa-arrow-right icon-on-right\"></i>
                                                </button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>

                                <div class=\"toolbar center\">
                                    <a href=\"#\" data-target=\"#login-box\" class=\"back-to-login-link\">
                                        <i class=\"ace-icon fa fa-arrow-left\"></i>
                                        Back to login
                                    </a>
                                </div>
                            </div><!-- /.widget-body -->
                        </div><!-- /.signup-box -->
                    </div><!-- /.position-relative -->

                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"assets/js/jquery-2.1.4.min.js\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"assets/js/jquery-1.11.3.min.js\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src='assets/js/jquery.mobile.custom.min.js'>\"+\"<\"+\"/script>\");
</script>

<!-- inline scripts related to this page -->




", "@FOSUser/layout.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\UserBundle\\Resources\\views\\layout.html.twig");
    }
}
