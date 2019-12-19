<?php

/* PIAppelBundle:Default:index.html.twig */
class __TwigTemplate_a6a631d2eca52c1bdfd607f1af31c968d38e7b9e7f028994094b2cf0a23519ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5326d5a124bfcee61b1b821b9c31dcc2c6eacbc2866a51365b937a298e733592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5326d5a124bfcee61b1b821b9c31dcc2c6eacbc2866a51365b937a298e733592->enter($__internal_5326d5a124bfcee61b1b821b9c31dcc2c6eacbc2866a51365b937a298e733592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:Default:index.html.twig"));

        $__internal_d6665f4f09554d02d517b2b2ec28cd03bf40bc86c75b7e994b81e3110fc0a622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6665f4f09554d02d517b2b2ec28cd03bf40bc86c75b7e994b81e3110fc0a622->enter($__internal_d6665f4f09554d02d517b2b2ec28cd03bf40bc86c75b7e994b81e3110fc0a622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PIAppelBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>CupCakeADMIN</title>

    <meta name=\"description\" content=\"Common form elements and layouts\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

    <!-- page specific plugin styles -->
    <link rel=\"stylesheet\" href=\" ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/jquery-ui.custom.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/chosen.min.css"), "html", null, true);
        echo " />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap-timepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/daterangepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/bootstrap-colorpicker.min.css"), "html", null, true);
        echo "\" />

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/fonts.googleapis.com.css"), "html", null, true);
        echo "\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-part2.min.css"), "html", null, true);
        echo "\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-rtl.min.css"), "html", null, true);
        echo "\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/css/ace-ie.min.css"), "html", null, true);
        echo "\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/ace-extra.min.js"), "html", null, true);
        echo "\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/respond.min.js"), "html", null, true);
        echo "\"></script>
    <![endif]-->
</head>

<body class=\"no-skin\">
<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
    <div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
        <button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
            <span class=\"sr-only\">Toggle sidebar</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>
        </button>

        <div class=\"navbar-header pull-left\">
            <a href=\"index.html\" class=\"navbar-brand\">
                <small>
                    <i class=\"fa fa-leaf\"></i>
                    CupCakeAdmin
                </small>
            </a>
        </div>

        <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
            <ul class=\"nav ace-nav\">
                <li class=\"grey dropdown-modal\">

                    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">


                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Software Update</span>
                                            <span class=\"pull-right\">65%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:65%\" class=\"progress-bar\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Hardware Upgrade</span>
                                            <span class=\"pull-right\">35%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Unit Testing</span>
                                            <span class=\"pull-right\">15%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Bug Fixes</span>
                                            <span class=\"pull-right\">90%</span>
                                        </div>

                                        <div class=\"progress progress-mini progress-striped active\">
                                            <div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">
                                See tasks with details
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"purple dropdown-modal\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
                        <span class=\"badge badge-important\">8</span>
                    </a>

                    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
                        <li class=\"dropdown-header\">
                            <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
                            8 Notifications
                        </li>

                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-info\">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class=\"btn btn-xs btn-primary fa fa-user\"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-success\">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-info\">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">
                                See all notifications
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"green dropdown-modal\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
                        <span class=\"badge badge-success\">5</span>
                    </a>

                    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">


                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/avatar.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/avatar3.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/avatar4.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/avatar2.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/avatar5.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"inbox.html\">
                                See all messages
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"light-blue dropdown-modal\">
                    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                        <img class=\"nav-user-photo\" src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/images/avatars/user.jpg"), "html", null, true);
        echo "\" alt=\"Jason's Photo\" />
                        <span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>

                            ";
        // line 328
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 328, $this->getSourceContext()); })()), "user", array())) {
            // line 329
            echo "                                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 329, $this->getSourceContext()); })()), "user", array()), "name", array()), "html", null, true);
            echo "
                            ";
        }
        // line 331
        echo "                             </span>

                        <i class=\"ace-icon fa fa-caret-down\"></i>
                    </a>

                    <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">


                        <li>
                            <a href=\"";
        // line 340
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                <i class=\"ace-icon fa fa-power-off\"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id=\"sidebar\" class=\"sidebar                  responsive                    ace-save-state\">
        <script type=\"text/javascript\">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
            <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
                <button class=\"btn btn-success\">
                    <i class=\"ace-icon fa fa-signal\"></i>
                </button>

                <button class=\"btn btn-info\">
                    <i class=\"ace-icon fa fa-pencil\"></i>
                </button>

                <button class=\"btn btn-warning\">
                    <i class=\"ace-icon fa fa-users\"></i>
                </button>

                <button class=\"btn btn-danger\">
                    <i class=\"ace-icon fa fa-cogs\"></i>
                </button>
            </div>

            <div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
                <span class=\"btn btn-success\"></span>

                <span class=\"btn btn-info\"></span>

                <span class=\"btn btn-warning\"></span>

                <span class=\"btn btn-danger\"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class=\"nav nav-list\">
            <li class=\"\">
                <a href=\"index.html\">
                    <i class=\"menu-icon fa fa-tachometer\"></i>
                    <span class=\"menu-text\"> Dashboard </span>
                </a>

                <b class=\"arrow\"></b>
            </li>





            <li class=\"active open\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-pencil-square-o\"></i>
                    <span class=\"menu-text\"> Appels d'offre </span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>

                <ul class=\"submenu\">
                    <li class=\"active\">
                        <a href=\"ajout\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Ajouter
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\"\">
                        <a href=\"";
        // line 427
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pi_affiche_appeloffre2");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Mes Appel Offer
                        </a>

                        <b class=\"arrow\"></b>
                    </li>
                    <li class=\"\">
                        <a href=\"";
        // line 435
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pi_affiche_alloffer");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Tout Les Appel  d'offre
                        </a>

                        <b class=\"arrow\"></b>
                    </li>


                    <li class=\"\">
                        <a href=\"";
        // line 445
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("demande");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Les Demande sur mes appels d'offre
                        </a>

                        <b class=\"arrow\"></b>
                    </li>
                    <li class=\"\">
                        <a href=\"";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mesdemande");
        echo "\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                           Mes Demande
                        </a>

                        <b class=\"arrow\"></b>
                    </li>



                </ul>
            </li>

            <li class=\"\">
                <a href=\"";
        // line 467
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_grapheChartLine");
        echo "\">
                    <i class=\"menu-icon fa fa-list-alt\"></i>
                    <span class=\"menu-text\"> Statistiques</span>
                </a>

                <b class=\"arrow\"></b>
            </li>



            <li class=\"\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-file-o\"></i>

                    <span class=\"menu-text\">
\t\t\t\t\t\t\t\tOther Pages

\t\t\t\t\t\t\t\t<span class=\"badge badge-primary\">5</span>
\t\t\t\t\t\t\t</span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>


            </li>
        </ul><!-- /.nav-list -->

        <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
            <i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
                <ul class=\"breadcrumb\">
                    <li>
                        <i class=\"ace-icon fa fa-home home-icon\"></i>
                        <a href=\"#\">Gestion Appels d'offre</a>
                    </li>

                    <li>

                </ul><!-- /.breadcrumb -->

                <div class=\"nav-search\" id=\"nav-search\">
                    <form class=\"form-search\" method=\"POST\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-search nav-search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->


        </div>
    </div><!-- /.main-content -->


        ";
        // line 597
        $this->displayBlock('container', $context, $blocks);
        // line 600
        echo "
    <div class=\"footer\">
        <div class=\"footer-inner\">
            <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">CupCake</span>
\t\t\t\t\t\t\tApp &copy; 2017-2018
\t\t\t\t\t\t</span>

                &nbsp; &nbsp;
                <span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
            </div>
        </div>
    </div>

    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"";
        // line 635
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "\">\"+\"<\"+\"/script>\");
</script>
<script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery-ui.custom.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/spinbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap-timepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap-colorpicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/autosize.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery.inputlimiter.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 666
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/bootstrap-tag.min.js"), "html", null, true);
        echo "\"></script>

<!-- ace scripts -->
<script src=\"";
        // line 669
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 670
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

<!-- inline scripts related to this page -->
<script type=\"text/javascript\">
    jQuery(function(\$) {
        \$('#id-disable-check').on('click', function() {
            var inp = \$('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value=\"This text field is readonly!\";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value=\"This text field is disabled!\";
            }
        });


        if(!ace.vars['touch']) {
            \$('.chosen-select').chosen({allow_single_deselect:true});
            //resize the chosen on window resize

            \$(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    \$('.chosen-select').each(function() {
                        var \$this = \$(this);
                        \$this.next().css({'width': \$this.parent().width()});
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            \$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                \$('.chosen-select').each(function() {
                    var \$this = \$(this);
                    \$this.next().css({'width': \$this.parent().width()});
                })
            });


            \$('#chosen-multiple-style .btn').on('click', function(e){
                var target = \$(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) \$('#form-field-select-4').addClass('tag-input-style');
                else \$('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        \$('[data-rel=tooltip]').tooltip({container:'body'});
        \$('[data-rel=popover]').popover({container:'body'});

        autosize(\$('textarea[class*=autosize]'));

        \$('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        \$.mask.definitions['~']='[+-]';
        \$('.input-mask-date').mask('99/99/9999');
        \$('.input-mask-phone').mask('(999) 999-9999');
        \$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        \$(\".input-mask-product\").mask(\"a*-999-a999\",{placeholder:\" \",completed:function(){alert(\"You typed the following: \"+this.val());}});



        \$( \"#input-size-slider\" ).css('width','200px').slider({
            value:1,
            range: \"min\",
            min: 1,
            max: 8,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                \$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
            }
        });

        \$( \"#input-span-slider\" ).slider({
            value:1,
            range: \"min\",
            min: 1,
            max: 12,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                \$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
            }
        });



        //\"jQuery UI Slider\"
        //range slider tooltip example
        \$( \"#slider-range\" ).css('height','200px').slider({
            orientation: \"vertical\",
            range: true,
            min: 0,
            max: 100,
            values: [ 17, 67 ],
            slide: function( event, ui ) {
                var val = ui.values[\$(ui.handle).index()-1] + \"\";

                if( !ui.handle.firstChild ) {
                    \$(\"<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>\")
                        .prependTo(ui.handle);
                }
                \$(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function(){
            \$(this.firstChild).hide();
        });


        \$( \"#slider-range-max\" ).slider({
            range: \"max\",
            min: 1,
            max: 10,
            value: 2
        });

        \$( \"#slider-eq > span\" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( \$( this ).text(), 10 );
            \$( this ).empty().slider({
                value: value,
                range: \"min\",
                animate: true

            });
        });

        \$(\"#slider-eq > span.ui-slider-purple\").slider('disable');//disable third item


        \$('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //\$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        \$('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
\t\t\t\t\t\t//Check an example below
\t\t\t\t\t\t//or examples/file-upload.html
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
            /**,before_remove : function() {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function(){
            //console.log(\$(this).data('ace_input_files'));
            //console.log(\$(this).data('ace_input_method'));
        });


        //\$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);




        //dynamically change allowed formats by changing allowExt && allowMime function
        \$('#id-file-format').removeAttr('checked').on('change', function() {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if(this.checked) {
                btn_choose = \"Drop images here or click to choose\";
                no_icon = \"ace-icon fa fa-picture-o\";

                whitelist_ext = [\"jpeg\", \"jpg\", \"png\", \"gif\" , \"bmp\"];
                whitelist_mime = [\"image/jpg\", \"image/jpeg\", \"image/png\", \"image/gif\", \"image/bmp\"];
            }
            else {
                btn_choose = \"Drop files here or click to choose\";
                no_icon = \"ace-icon fa fa-cloud-upload\";

                whitelist_ext = null;//all extensions are acceptable
                whitelist_mime = null;//all mimes are acceptable
            }
            var file_input = \$('#id-input-file-3');
            file_input
                .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
            file_input.ace_file_input('reset_input');

            file_input
                .off('file.error.ace')
                .on('file.error.ace', function(e, info) {
                    //console.log(info.file_count);//number of selected files
                    //console.log(info.invalid_count);//number of invalid files
                    //console.log(info.error_list);//a list of errors in the following format

                    //info.error_count['ext']
                    //info.error_count['mime']
                    //info.error_count['size']

                    //info.error_list['ext']  = [list of file names with invalid extension]
                    //info.error_list['mime'] = [list of file names with invalid mimetype]
                    //info.error_list['size'] = [list of file names with invalid size]


                    /**
                     if( !info.dropped ) {
\t\t\t\t\t\t\t//perhapse reset file field if files have been selected, and there are invalid files among them
\t\t\t\t\t\t\t//when files are dropped, only valid files will be added to our file array
\t\t\t\t\t\t\te.preventDefault();//it will rest input
\t\t\t\t\t\t}
                     */


                    //if files have been selected (not dropped), you can choose to reset input
                    //because browser keeps all selected files anyway and this cannot be changed
                    //we can only reset file field to become empty again
                    //on any case you still should check files with your server side script
                    //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                });


            /**
             file_input
             .off('file.preview.ace')
             .on('file.preview.ace', function(e, info) {
\t\t\t\t\t\tconsole.log(info.file.width);
\t\t\t\t\t\tconsole.log(info.file.height);
\t\t\t\t\t\te.preventDefault();//to prevent preview
\t\t\t\t\t});
             */

        });

        \$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
            .closest('.ace-spinner')
            .on('changed.fu.spinbox', function(){
                //console.log(\$('#spinner1').val())
            });
        \$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
        \$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
        \$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});

        //\$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
        //or
        //\$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
        //\$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


        //datepicker plugin
        //link
        \$('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });

        //or change it into a date range picker
        \$('.input-daterange').datepicker({autoclose:true});


        //to translate the daterange picker, please copy the \"examples/daterange-fr.js\" contents here before initialization
        \$('input[name=date-range-picker]').daterangepicker({
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
            }
        })
            .prev().on(ace.click_event, function(){
            \$(this).next().focus();
        });


        \$('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            \$('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });




        if(!ace.vars['old_ie']) \$('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });


        \$('#colorpicker1').colorpicker();
        //\$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe

        \$('#simple-colorpicker-1').ace_colorpicker();
        //\$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
        //\$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
        //var picker = \$('#simple-colorpicker-1').data('ace_colorpicker')
        //picker.pick('red', true);//insert the color if it doesn't exist


        \$(\".knob\").knob();


        var tag_input = \$('#form-field-tags');
        try{
            tag_input.tag(
                {
                    placeholder:tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                    /**
                     //or fetch data from database, fetch those that match \"query\"
                     source: function(query, process) {
\t\t\t\t\t\t  \$.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
\t\t\t\t\t\t  .done(function(result_items){
\t\t\t\t\t\t\tprocess(result_items);
\t\t\t\t\t\t  });
\t\t\t\t\t\t}
                     */
                }
            )

            //programmatically add/remove a tag
            var \$tag_obj = \$('#form-field-tags').data('tag');
            \$tag_obj.add('Programmatically Added');

            var index = \$tag_obj.inValues('some tag');
            \$tag_obj.remove(index);
        }
        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id=\"'+tag_input.attr('id')+'\" name=\"'+tag_input.attr('name')+'\" rows=\"3\">'+tag_input.val()+'</textarea>').remove();
            //autosize(\$('#form-field-tags'));
        }


        /////////
        \$('#modal-form input[type=file]').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'ace-icon fa fa-cloud-upload',
            droppable:true,
            thumbnail:'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        \$('#modal-form').on('shown.bs.modal', function () {
            if(!ace.vars['touch']) {
                \$(this).find('.chosen-container').each(function(){
                    \$(this).find('a:first-child').css('width' , '210px');
                    \$(this).find('.chosen-drop').css('width' , '210px');
                    \$(this).find('.chosen-search input').css('width' , '200px');
                });
            }
        })
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element becomes visible with dimensions and chosen works as expected
         \$('#modal-form').on('shown', function () {
\t\t\t\t\t\$(this).find('.modal-chosen').chosen();
\t\t\t\t})
         */



        \$(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            \$('.limiterBox,.autosizejs').remove();
            \$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>
</body>
</html>
";
        
        $__internal_5326d5a124bfcee61b1b821b9c31dcc2c6eacbc2866a51365b937a298e733592->leave($__internal_5326d5a124bfcee61b1b821b9c31dcc2c6eacbc2866a51365b937a298e733592_prof);

        
        $__internal_d6665f4f09554d02d517b2b2ec28cd03bf40bc86c75b7e994b81e3110fc0a622->leave($__internal_d6665f4f09554d02d517b2b2ec28cd03bf40bc86c75b7e994b81e3110fc0a622_prof);

    }

    // line 597
    public function block_container($context, array $blocks = array())
    {
        $__internal_4aee7178a76aa0eabb317f1c6be1e6e90d3fce09552b73815896496f05befc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aee7178a76aa0eabb317f1c6be1e6e90d3fce09552b73815896496f05befc0c->enter($__internal_4aee7178a76aa0eabb317f1c6be1e6e90d3fce09552b73815896496f05befc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_1a2ff6d8df17f9b58997e4807cf28163d6c493f8b5a9eaf8104f8f1fd46d3f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a2ff6d8df17f9b58997e4807cf28163d6c493f8b5a9eaf8104f8f1fd46d3f72->enter($__internal_1a2ff6d8df17f9b58997e4807cf28163d6c493f8b5a9eaf8104f8f1fd46d3f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 598
        echo "
        ";
        
        $__internal_1a2ff6d8df17f9b58997e4807cf28163d6c493f8b5a9eaf8104f8f1fd46d3f72->leave($__internal_1a2ff6d8df17f9b58997e4807cf28163d6c493f8b5a9eaf8104f8f1fd46d3f72_prof);

        
        $__internal_4aee7178a76aa0eabb317f1c6be1e6e90d3fce09552b73815896496f05befc0c->leave($__internal_4aee7178a76aa0eabb317f1c6be1e6e90d3fce09552b73815896496f05befc0c_prof);

    }

    public function getTemplateName()
    {
        return "PIAppelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1318 => 598,  1309 => 597,  858 => 670,  854 => 669,  848 => 666,  844 => 665,  840 => 664,  836 => 663,  832 => 662,  828 => 661,  824 => 660,  820 => 659,  816 => 658,  812 => 657,  808 => 656,  804 => 655,  800 => 654,  796 => 653,  792 => 652,  787 => 650,  779 => 645,  774 => 643,  768 => 640,  760 => 635,  723 => 600,  721 => 597,  588 => 467,  571 => 453,  560 => 445,  547 => 435,  536 => 427,  446 => 340,  435 => 331,  429 => 329,  427 => 328,  420 => 324,  389 => 296,  369 => 279,  349 => 262,  329 => 245,  309 => 228,  127 => 49,  123 => 48,  115 => 43,  106 => 37,  100 => 34,  96 => 33,  91 => 31,  85 => 28,  79 => 25,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  43 => 13,  39 => 12,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <meta charset=\"utf-8\" />
    <title>CupCakeADMIN</title>

    <meta name=\"description\" content=\"Common form elements and layouts\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

    <!-- bootstrap & fontawesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}\" />

    <!-- page specific plugin styles -->
    <link rel=\"stylesheet\" href=\" {{ asset('bundles/assets/css/jquery-ui.custom.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/chosen.min.css')}} />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap-datepicker3.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap-timepicker.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/daterangepicker.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap-datetimepicker.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/bootstrap-colorpicker.min.css')}}\" />

    <!-- text fonts -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/fonts.googleapis.com.css')}}\" />

    <!-- ace styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace.min.css')}}\" class=\"ace-main-stylesheet\" id=\"main-ace-style\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-part2.min.css')}}\" class=\"ace-main-stylesheet\" />
    <![endif]-->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-skins.min.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-rtl.min.css')}}\" />

    <!--[if lte IE 9]>
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/assets/css/ace-ie.min.css')}}\" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src=\"{{ asset('bundles/assets/js/ace-extra.min.js')}}\"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src=\"{{ asset('bundles/assets/js/html5shiv.min.js')}}\"></script>
    <script src=\"{{ asset('bundles/assets/js/respond.min.js')}}\"></script>
    <![endif]-->
</head>

<body class=\"no-skin\">
<div id=\"navbar\" class=\"navbar navbar-default          ace-save-state\">
    <div class=\"navbar-container ace-save-state\" id=\"navbar-container\">
        <button type=\"button\" class=\"navbar-toggle menu-toggler pull-left\" id=\"menu-toggler\" data-target=\"#sidebar\">
            <span class=\"sr-only\">Toggle sidebar</span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>

            <span class=\"icon-bar\"></span>
        </button>

        <div class=\"navbar-header pull-left\">
            <a href=\"index.html\" class=\"navbar-brand\">
                <small>
                    <i class=\"fa fa-leaf\"></i>
                    CupCakeAdmin
                </small>
            </a>
        </div>

        <div class=\"navbar-buttons navbar-header pull-right\" role=\"navigation\">
            <ul class=\"nav ace-nav\">
                <li class=\"grey dropdown-modal\">

                    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">


                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Software Update</span>
                                            <span class=\"pull-right\">65%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:65%\" class=\"progress-bar\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Hardware Upgrade</span>
                                            <span class=\"pull-right\">35%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:35%\" class=\"progress-bar progress-bar-danger\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Unit Testing</span>
                                            <span class=\"pull-right\">15%</span>
                                        </div>

                                        <div class=\"progress progress-mini\">
                                            <div style=\"width:15%\" class=\"progress-bar progress-bar-warning\"></div>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
                                            <span class=\"pull-left\">Bug Fixes</span>
                                            <span class=\"pull-right\">90%</span>
                                        </div>

                                        <div class=\"progress progress-mini progress-striped active\">
                                            <div style=\"width:90%\" class=\"progress-bar progress-bar-success\"></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">
                                See tasks with details
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"purple dropdown-modal\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"ace-icon fa fa-bell icon-animated-bell\"></i>
                        <span class=\"badge badge-important\">8</span>
                    </a>

                    <ul class=\"dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close\">
                        <li class=\"dropdown-header\">
                            <i class=\"ace-icon fa fa-exclamation-triangle\"></i>
                            8 Notifications
                        </li>

                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar navbar-pink\">
                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-pink fa fa-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-info\">+12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <i class=\"btn btn-xs btn-primary fa fa-user\"></i>
                                        Bob just signed up as an editor ...
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-success fa fa-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-success\">+8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\">
                                        <div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-xs no-hover btn-info fa fa-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                            <span class=\"pull-right badge badge-info\">+11</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"#\">
                                See all notifications
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"green dropdown-modal\">
                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                        <i class=\"ace-icon fa fa-envelope icon-animated-vertical\"></i>
                        <span class=\"badge badge-success\">5</span>
                    </a>

                    <ul class=\"dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close\">


                        <li class=\"dropdown-content\">
                            <ul class=\"dropdown-menu dropdown-navbar\">
                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"{{ asset('bundles/assets/images/avatars/avatar.png')}}\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"{{ asset('bundles/assets/images/avatars/avatar3.png')}}\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"{{ asset('bundles/assets/images/avatars/avatar4.png')}}\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"{{ asset('bundles/assets/images/avatars/avatar2.png')}}\" class=\"msg-photo\" alt=\"Kate's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Kate:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>1:33 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>

                                <li>
                                    <a href=\"#\" class=\"clearfix\">
                                        <img src=\"{{ asset('bundles/assets/images/avatars/avatar5.png')}}\" class=\"msg-photo\" alt=\"Fred's Avatar\" />
                                        <span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Fred:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id penatibus et auctor  ...
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-clock-o\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>10:09 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class=\"dropdown-footer\">
                            <a href=\"inbox.html\">
                                See all messages
                                <i class=\"ace-icon fa fa-arrow-right\"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=\"light-blue dropdown-modal\">
                    <a data-toggle=\"dropdown\" href=\"#\" class=\"dropdown-toggle\">
                        <img class=\"nav-user-photo\" src=\"{{ asset('bundles/assets/images/avatars/user.jpg')}}\" alt=\"Jason's Photo\" />
                        <span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>

                            {% if app.user %}
                                {{ app.user.name }}
                            {% endif %}
                             </span>

                        <i class=\"ace-icon fa fa-caret-down\"></i>
                    </a>

                    <ul class=\"user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close\">


                        <li>
                            <a href=\"{{ path('fos_user_security_logout') }}\">
                                <i class=\"ace-icon fa fa-power-off\"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class=\"main-container ace-save-state\" id=\"main-container\">
    <script type=\"text/javascript\">
        try{ace.settings.loadState('main-container')}catch(e){}
    </script>

    <div id=\"sidebar\" class=\"sidebar                  responsive                    ace-save-state\">
        <script type=\"text/javascript\">
            try{ace.settings.loadState('sidebar')}catch(e){}
        </script>

        <div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
            <div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
                <button class=\"btn btn-success\">
                    <i class=\"ace-icon fa fa-signal\"></i>
                </button>

                <button class=\"btn btn-info\">
                    <i class=\"ace-icon fa fa-pencil\"></i>
                </button>

                <button class=\"btn btn-warning\">
                    <i class=\"ace-icon fa fa-users\"></i>
                </button>

                <button class=\"btn btn-danger\">
                    <i class=\"ace-icon fa fa-cogs\"></i>
                </button>
            </div>

            <div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
                <span class=\"btn btn-success\"></span>

                <span class=\"btn btn-info\"></span>

                <span class=\"btn btn-warning\"></span>

                <span class=\"btn btn-danger\"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class=\"nav nav-list\">
            <li class=\"\">
                <a href=\"index.html\">
                    <i class=\"menu-icon fa fa-tachometer\"></i>
                    <span class=\"menu-text\"> Dashboard </span>
                </a>

                <b class=\"arrow\"></b>
            </li>





            <li class=\"active open\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-pencil-square-o\"></i>
                    <span class=\"menu-text\"> Appels d'offre </span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>

                <ul class=\"submenu\">
                    <li class=\"active\">
                        <a href=\"ajout\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Ajouter
                        </a>

                        <b class=\"arrow\"></b>
                    </li>

                    <li class=\"\">
                        <a href=\"{{ path('pi_affiche_appeloffre2') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Mes Appel Offer
                        </a>

                        <b class=\"arrow\"></b>
                    </li>
                    <li class=\"\">
                        <a href=\"{{ path('pi_affiche_alloffer') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Tout Les Appel  d'offre
                        </a>

                        <b class=\"arrow\"></b>
                    </li>


                    <li class=\"\">
                        <a href=\"{{ path('demande') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                            Les Demande sur mes appels d'offre
                        </a>

                        <b class=\"arrow\"></b>
                    </li>
                    <li class=\"\">
                        <a href=\"{{ path('mesdemande') }}\">
                            <i class=\"menu-icon fa fa-caret-right\"></i>
                           Mes Demande
                        </a>

                        <b class=\"arrow\"></b>
                    </li>



                </ul>
            </li>

            <li class=\"\">
                <a href=\"{{ path('_grapheChartLine') }}\">
                    <i class=\"menu-icon fa fa-list-alt\"></i>
                    <span class=\"menu-text\"> Statistiques</span>
                </a>

                <b class=\"arrow\"></b>
            </li>



            <li class=\"\">
                <a href=\"#\" class=\"dropdown-toggle\">
                    <i class=\"menu-icon fa fa-file-o\"></i>

                    <span class=\"menu-text\">
\t\t\t\t\t\t\t\tOther Pages

\t\t\t\t\t\t\t\t<span class=\"badge badge-primary\">5</span>
\t\t\t\t\t\t\t</span>

                    <b class=\"arrow fa fa-angle-down\"></b>
                </a>

                <b class=\"arrow\"></b>


            </li>
        </ul><!-- /.nav-list -->

        <div class=\"sidebar-toggle sidebar-collapse\" id=\"sidebar-collapse\">
            <i id=\"sidebar-toggle-icon\" class=\"ace-icon fa fa-angle-double-left ace-save-state\" data-icon1=\"ace-icon fa fa-angle-double-left\" data-icon2=\"ace-icon fa fa-angle-double-right\"></i>
        </div>
    </div>

    <div class=\"main-content\">
        <div class=\"main-content-inner\">
            <div class=\"breadcrumbs ace-save-state\" id=\"breadcrumbs\">
                <ul class=\"breadcrumb\">
                    <li>
                        <i class=\"ace-icon fa fa-home home-icon\"></i>
                        <a href=\"#\">Gestion Appels d'offre</a>
                    </li>

                    <li>

                </ul><!-- /.breadcrumb -->

                <div class=\"nav-search\" id=\"nav-search\">
                    <form class=\"form-search\" method=\"POST\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-search nav-search-icon\"></i>
\t\t\t\t\t\t\t\t</span>
                    </form>
                </div><!-- /.nav-search -->
            </div>

            <div class=\"page-content\">
                <div class=\"ace-settings-container\" id=\"ace-settings-container\">
                    <div class=\"btn btn-app btn-xs btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
                        <i class=\"ace-icon fa fa-cog bigger-130\"></i>
                    </div>

                    <div class=\"ace-settings-box clearfix\" id=\"ace-settings-box\">
                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <div class=\"pull-left\">
                                    <select id=\"skin-colorpicker\" class=\"hide\">
                                        <option data-skin=\"no-skin\" value=\"#438EB9\">#438EB9</option>
                                        <option data-skin=\"skin-1\" value=\"#222A2D\">#222A2D</option>
                                        <option data-skin=\"skin-2\" value=\"#C6487E\">#C6487E</option>
                                        <option data-skin=\"skin-3\" value=\"#D0D0D0\">#D0D0D0</option>
                                    </select>
                                </div>
                                <span>&nbsp; Choose Skin</span>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-navbar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-navbar\"> Fixed Navbar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-sidebar\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-breadcrumbs\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-rtl\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2 ace-save-state\" id=\"ace-settings-add-container\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-add-container\">
                                    Inside
                                    <b>.container</b>
                                </label>
                            </div>
                        </div><!-- /.pull-left -->

                        <div class=\"pull-left width-50\">
                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-hover\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-hover\"> Submenu on Hover</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-compact\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-compact\"> Compact Sidebar</label>
                            </div>

                            <div class=\"ace-settings-item\">
                                <input type=\"checkbox\" class=\"ace ace-checkbox-2\" id=\"ace-settings-highlight\" autocomplete=\"off\" />
                                <label class=\"lbl\" for=\"ace-settings-highlight\"> Alt. Active Item</label>
                            </div>
                        </div><!-- /.pull-left -->
                    </div><!-- /.ace-settings-box -->
                </div><!-- /.ace-settings-container -->


        </div>
    </div><!-- /.main-content -->


        {% block container %}

        {% endblock %}

    <div class=\"footer\">
        <div class=\"footer-inner\">
            <div class=\"footer-content\">
\t\t\t\t\t\t<span class=\"bigger-120\">
\t\t\t\t\t\t\t<span class=\"blue bolder\">CupCake</span>
\t\t\t\t\t\t\tApp &copy; 2017-2018
\t\t\t\t\t\t</span>

                &nbsp; &nbsp;
                <span class=\"action-buttons\">
\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-twitter-square light-blue bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-facebook-square text-primary bigger-150\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"ace-icon fa fa-rss-square orange bigger-150\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</span>
            </div>
        </div>
    </div>

    <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-sm btn-inverse\">
        <i class=\"ace-icon fa fa-angle-double-up icon-only bigger-110\"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src=\"{{ asset('bundles/assets/js/jquery-2.1.4.min.js')}}\"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src=\"{{ asset('bundles/assets/js/jquery-1.11.3.min.js')}}\"></script>
<![endif]-->
<script type=\"text/javascript\">
    if('ontouchstart' in document.documentElement) document.write(\"<script src=\"{{ asset('bundles/assets/js/jquery.mobile.custom.min.js')}}\">\"+\"<\"+\"/script>\");
</script>
<script src=\"{{ asset('bundles/assets/js/bootstrap.min.js')}}\"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src=\"{{ asset('bundles/assets/js/excanvas.min.js')}}\"></script>
<![endif]-->
<script src=\"{{ asset('bundles/assets/js/jquery-ui.custom.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/jquery.ui.touch-punch.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/chosen.jquery.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/spinbox.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/bootstrap-datepicker.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/bootstrap-timepicker.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/moment.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/daterangepicker.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/bootstrap-datetimepicker.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/bootstrap-colorpicker.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/jquery.knob.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/autosize.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/jquery.inputlimiter.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/jquery.maskedinput.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/bootstrap-tag.min.js')}}\"></script>

<!-- ace scripts -->
<script src=\"{{ asset('bundles/assets/js/ace-elements.min.js')}}\"></script>
<script src=\"{{ asset('bundles/assets/js/ace.min.js')}}\"></script>

<!-- inline scripts related to this page -->
<script type=\"text/javascript\">
    jQuery(function(\$) {
        \$('#id-disable-check').on('click', function() {
            var inp = \$('#form-input-readonly').get(0);
            if(inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly' , 'true');
                inp.removeAttribute('disabled');
                inp.value=\"This text field is readonly!\";
            }
            else {
                inp.setAttribute('disabled' , 'disabled');
                inp.removeAttribute('readonly');
                inp.value=\"This text field is disabled!\";
            }
        });


        if(!ace.vars['touch']) {
            \$('.chosen-select').chosen({allow_single_deselect:true});
            //resize the chosen on window resize

            \$(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    \$('.chosen-select').each(function() {
                        var \$this = \$(this);
                        \$this.next().css({'width': \$this.parent().width()});
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            \$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if(event_name != 'sidebar_collapsed') return;
                \$('.chosen-select').each(function() {
                    var \$this = \$(this);
                    \$this.next().css({'width': \$this.parent().width()});
                })
            });


            \$('#chosen-multiple-style .btn').on('click', function(e){
                var target = \$(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) \$('#form-field-select-4').addClass('tag-input-style');
                else \$('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        \$('[data-rel=tooltip]').tooltip({container:'body'});
        \$('[data-rel=popover]').popover({container:'body'});

        autosize(\$('textarea[class*=autosize]'));

        \$('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        \$.mask.definitions['~']='[+-]';
        \$('.input-mask-date').mask('99/99/9999');
        \$('.input-mask-phone').mask('(999) 999-9999');
        \$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        \$(\".input-mask-product\").mask(\"a*-999-a999\",{placeholder:\" \",completed:function(){alert(\"You typed the following: \"+this.val());}});



        \$( \"#input-size-slider\" ).css('width','200px').slider({
            value:1,
            range: \"min\",
            min: 1,
            max: 8,
            step: 1,
            slide: function( event, ui ) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                \$('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
            }
        });

        \$( \"#input-span-slider\" ).slider({
            value:1,
            range: \"min\",
            min: 1,
            max: 12,
            step: 1,
            slide: function( event, ui ) {
                var val = parseInt(ui.value);
                \$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
            }
        });



        //\"jQuery UI Slider\"
        //range slider tooltip example
        \$( \"#slider-range\" ).css('height','200px').slider({
            orientation: \"vertical\",
            range: true,
            min: 0,
            max: 100,
            values: [ 17, 67 ],
            slide: function( event, ui ) {
                var val = ui.values[\$(ui.handle).index()-1] + \"\";

                if( !ui.handle.firstChild ) {
                    \$(\"<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>\")
                        .prependTo(ui.handle);
                }
                \$(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function(){
            \$(this.firstChild).hide();
        });


        \$( \"#slider-range-max\" ).slider({
            range: \"max\",
            min: 1,
            max: 10,
            value: 2
        });

        \$( \"#slider-eq > span\" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
            // read initial values from markup and remove that
            var value = parseInt( \$( this ).text(), 10 );
            \$( this ).empty().slider({
                value: value,
                range: \"min\",
                animate: true

            });
        });

        \$(\"#slider-eq > span.ui-slider-purple\").slider('disable');//disable third item


        \$('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file:'No File ...',
            btn_choose:'Choose',
            btn_change:'Change',
            droppable:false,
            onchange:null,
            thumbnail:false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //\$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        \$('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small'//large | fit
            //,icon_remove:null//set null, to hide remove/reset button
            /**,before_change:function(files, dropped) {
\t\t\t\t\t\t//Check an example below
\t\t\t\t\t\t//or examples/file-upload.html
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
            /**,before_remove : function() {
\t\t\t\t\t\treturn true;
\t\t\t\t\t}*/
            ,
            preview_error : function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function(){
            //console.log(\$(this).data('ace_input_files'));
            //console.log(\$(this).data('ace_input_method'));
        });


        //\$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);




        //dynamically change allowed formats by changing allowExt && allowMime function
        \$('#id-file-format').removeAttr('checked').on('change', function() {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if(this.checked) {
                btn_choose = \"Drop images here or click to choose\";
                no_icon = \"ace-icon fa fa-picture-o\";

                whitelist_ext = [\"jpeg\", \"jpg\", \"png\", \"gif\" , \"bmp\"];
                whitelist_mime = [\"image/jpg\", \"image/jpeg\", \"image/png\", \"image/gif\", \"image/bmp\"];
            }
            else {
                btn_choose = \"Drop files here or click to choose\";
                no_icon = \"ace-icon fa fa-cloud-upload\";

                whitelist_ext = null;//all extensions are acceptable
                whitelist_mime = null;//all mimes are acceptable
            }
            var file_input = \$('#id-input-file-3');
            file_input
                .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
            file_input.ace_file_input('reset_input');

            file_input
                .off('file.error.ace')
                .on('file.error.ace', function(e, info) {
                    //console.log(info.file_count);//number of selected files
                    //console.log(info.invalid_count);//number of invalid files
                    //console.log(info.error_list);//a list of errors in the following format

                    //info.error_count['ext']
                    //info.error_count['mime']
                    //info.error_count['size']

                    //info.error_list['ext']  = [list of file names with invalid extension]
                    //info.error_list['mime'] = [list of file names with invalid mimetype]
                    //info.error_list['size'] = [list of file names with invalid size]


                    /**
                     if( !info.dropped ) {
\t\t\t\t\t\t\t//perhapse reset file field if files have been selected, and there are invalid files among them
\t\t\t\t\t\t\t//when files are dropped, only valid files will be added to our file array
\t\t\t\t\t\t\te.preventDefault();//it will rest input
\t\t\t\t\t\t}
                     */


                    //if files have been selected (not dropped), you can choose to reset input
                    //because browser keeps all selected files anyway and this cannot be changed
                    //we can only reset file field to become empty again
                    //on any case you still should check files with your server side script
                    //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                });


            /**
             file_input
             .off('file.preview.ace')
             .on('file.preview.ace', function(e, info) {
\t\t\t\t\t\tconsole.log(info.file.width);
\t\t\t\t\t\tconsole.log(info.file.height);
\t\t\t\t\t\te.preventDefault();//to prevent preview
\t\t\t\t\t});
             */

        });

        \$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
            .closest('.ace-spinner')
            .on('changed.fu.spinbox', function(){
                //console.log(\$('#spinner1').val())
            });
        \$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
        \$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
        \$('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});

        //\$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
        //or
        //\$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
        //\$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


        //datepicker plugin
        //link
        \$('.date-picker').datepicker({
            autoclose: true,
            todayHighlight: true
        })
        //show datepicker when clicking on the icon
            .next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });

        //or change it into a date range picker
        \$('.input-daterange').datepicker({autoclose:true});


        //to translate the daterange picker, please copy the \"examples/daterange-fr.js\" contents here before initialization
        \$('input[name=date-range-picker]').daterangepicker({
            'applyClass' : 'btn-sm btn-success',
            'cancelClass' : 'btn-sm btn-default',
            locale: {
                applyLabel: 'Apply',
                cancelLabel: 'Cancel',
            }
        })
            .prev().on(ace.click_event, function(){
            \$(this).next().focus();
        });


        \$('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            \$('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });




        if(!ace.vars['old_ie']) \$('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function(){
            \$(this).prev().focus();
        });


        \$('#colorpicker1').colorpicker();
        //\$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe

        \$('#simple-colorpicker-1').ace_colorpicker();
        //\$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
        //\$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
        //var picker = \$('#simple-colorpicker-1').data('ace_colorpicker')
        //picker.pick('red', true);//insert the color if it doesn't exist


        \$(\".knob\").knob();


        var tag_input = \$('#form-field-tags');
        try{
            tag_input.tag(
                {
                    placeholder:tag_input.attr('placeholder'),
                    //enable typeahead by specifying the source array
                    source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                    /**
                     //or fetch data from database, fetch those that match \"query\"
                     source: function(query, process) {
\t\t\t\t\t\t  \$.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
\t\t\t\t\t\t  .done(function(result_items){
\t\t\t\t\t\t\tprocess(result_items);
\t\t\t\t\t\t  });
\t\t\t\t\t\t}
                     */
                }
            )

            //programmatically add/remove a tag
            var \$tag_obj = \$('#form-field-tags').data('tag');
            \$tag_obj.add('Programmatically Added');

            var index = \$tag_obj.inValues('some tag');
            \$tag_obj.remove(index);
        }
        catch(e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id=\"'+tag_input.attr('id')+'\" name=\"'+tag_input.attr('name')+'\" rows=\"3\">'+tag_input.val()+'</textarea>').remove();
            //autosize(\$('#form-field-tags'));
        }


        /////////
        \$('#modal-form input[type=file]').ace_file_input({
            style:'well',
            btn_choose:'Drop files here or click to choose',
            btn_change:null,
            no_icon:'ace-icon fa fa-cloud-upload',
            droppable:true,
            thumbnail:'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        \$('#modal-form').on('shown.bs.modal', function () {
            if(!ace.vars['touch']) {
                \$(this).find('.chosen-container').each(function(){
                    \$(this).find('a:first-child').css('width' , '210px');
                    \$(this).find('.chosen-drop').css('width' , '210px');
                    \$(this).find('.chosen-search input').css('width' , '200px');
                });
            }
        })
        /**
         //or you can activate the chosen plugin after modal is shown
         //this way select element becomes visible with dimensions and chosen works as expected
         \$('#modal-form').on('shown', function () {
\t\t\t\t\t\$(this).find('.modal-chosen').chosen();
\t\t\t\t})
         */



        \$(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            \$('.limiterBox,.autosizejs').remove();
            \$('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>
</body>
</html>
", "PIAppelBundle:Default:index.html.twig", "C:\\wamp\\www\\Pi\\src\\PI\\AppelBundle/Resources/views/Default/index.html.twig");
    }
}
