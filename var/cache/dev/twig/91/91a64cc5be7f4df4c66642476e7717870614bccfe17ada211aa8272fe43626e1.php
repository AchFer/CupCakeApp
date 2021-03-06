<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_539ffc44c78a059fd27a5aceb63465319f7f56a27e3302bf4e09af2aa8803476 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff44942ea813981a8554001f75f348ae4ac061ace3d48d5e4898ccf82bbf128f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff44942ea813981a8554001f75f348ae4ac061ace3d48d5e4898ccf82bbf128f->enter($__internal_ff44942ea813981a8554001f75f348ae4ac061ace3d48d5e4898ccf82bbf128f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_dce54cefa5c7612a7c9de18b69d11eba4329669799cfb44fb7ee6fc20a3b0622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce54cefa5c7612a7c9de18b69d11eba4329669799cfb44fb7ee6fc20a3b0622->enter($__internal_dce54cefa5c7612a7c9de18b69d11eba4329669799cfb44fb7ee6fc20a3b0622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ff44942ea813981a8554001f75f348ae4ac061ace3d48d5e4898ccf82bbf128f->leave($__internal_ff44942ea813981a8554001f75f348ae4ac061ace3d48d5e4898ccf82bbf128f_prof);

        
        $__internal_dce54cefa5c7612a7c9de18b69d11eba4329669799cfb44fb7ee6fc20a3b0622->leave($__internal_dce54cefa5c7612a7c9de18b69d11eba4329669799cfb44fb7ee6fc20a3b0622_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_75a5d485676610d261fbf1d5a9d6accb5bc93cd1ee111b8d0eaf7527fd39c910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a5d485676610d261fbf1d5a9d6accb5bc93cd1ee111b8d0eaf7527fd39c910->enter($__internal_75a5d485676610d261fbf1d5a9d6accb5bc93cd1ee111b8d0eaf7527fd39c910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a52da4b14f589aedeb6c5cd44c6121f84dd813c5d01bbcc8c8fac48ed72524b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52da4b14f589aedeb6c5cd44c6121f84dd813c5d01bbcc8c8fac48ed72524b7->enter($__internal_a52da4b14f589aedeb6c5cd44c6121f84dd813c5d01bbcc8c8fac48ed72524b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 6, $this->getSourceContext()); })()), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 7, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a52da4b14f589aedeb6c5cd44c6121f84dd813c5d01bbcc8c8fac48ed72524b7->leave($__internal_a52da4b14f589aedeb6c5cd44c6121f84dd813c5d01bbcc8c8fac48ed72524b7_prof);

        
        $__internal_75a5d485676610d261fbf1d5a9d6accb5bc93cd1ee111b8d0eaf7527fd39c910->leave($__internal_75a5d485676610d261fbf1d5a9d6accb5bc93cd1ee111b8d0eaf7527fd39c910_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_560c0d0764b7c225b4ed77d04c3f2375a62b676f836ce8fe76b016a6ff041e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560c0d0764b7c225b4ed77d04c3f2375a62b676f836ce8fe76b016a6ff041e33->enter($__internal_560c0d0764b7c225b4ed77d04c3f2375a62b676f836ce8fe76b016a6ff041e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_ecfcd725b6a1ec2075a544f56a344aa3957cc5e50287792067d23cf21d09d562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfcd725b6a1ec2075a544f56a344aa3957cc5e50287792067d23cf21d09d562->enter($__internal_ecfcd725b6a1ec2075a544f56a344aa3957cc5e50287792067d23cf21d09d562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 13, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_ecfcd725b6a1ec2075a544f56a344aa3957cc5e50287792067d23cf21d09d562->leave($__internal_ecfcd725b6a1ec2075a544f56a344aa3957cc5e50287792067d23cf21d09d562_prof);

        
        $__internal_560c0d0764b7c225b4ed77d04c3f2375a62b676f836ce8fe76b016a6ff041e33->leave($__internal_560c0d0764b7c225b4ed77d04c3f2375a62b676f836ce8fe76b016a6ff041e33_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2da230041b18cbc615a118315a95a5ef87787c5d38295a8aa097d6f17ee36466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da230041b18cbc615a118315a95a5ef87787c5d38295a8aa097d6f17ee36466->enter($__internal_2da230041b18cbc615a118315a95a5ef87787c5d38295a8aa097d6f17ee36466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_c40b06342ebc60446ed39c60a9c5fee660dffcaf0ba8085ac54b3edd3553016e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c40b06342ebc60446ed39c60a9c5fee660dffcaf0ba8085ac54b3edd3553016e->enter($__internal_c40b06342ebc60446ed39c60a9c5fee660dffcaf0ba8085ac54b3edd3553016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 18, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 19, $this->getSourceContext()); })()))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_c40b06342ebc60446ed39c60a9c5fee660dffcaf0ba8085ac54b3edd3553016e->leave($__internal_c40b06342ebc60446ed39c60a9c5fee660dffcaf0ba8085ac54b3edd3553016e_prof);

        
        $__internal_2da230041b18cbc615a118315a95a5ef87787c5d38295a8aa097d6f17ee36466->leave($__internal_2da230041b18cbc615a118315a95a5ef87787c5d38295a8aa097d6f17ee36466_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f74b3641e11302271c73613bdf2cc1aa67ccff7067abc33a1baadc119ddd0c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74b3641e11302271c73613bdf2cc1aa67ccff7067abc33a1baadc119ddd0c81->enter($__internal_f74b3641e11302271c73613bdf2cc1aa67ccff7067abc33a1baadc119ddd0c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_60a75a2097c2de72686d94c05608fa80c76936af39be1bcc6963fc6505ac4b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a75a2097c2de72686d94c05608fa80c76936af39be1bcc6963fc6505ac4b0e->enter($__internal_60a75a2097c2de72686d94c05608fa80c76936af39be1bcc6963fc6505ac4b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 29, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_60a75a2097c2de72686d94c05608fa80c76936af39be1bcc6963fc6505ac4b0e->leave($__internal_60a75a2097c2de72686d94c05608fa80c76936af39be1bcc6963fc6505ac4b0e_prof);

        
        $__internal_f74b3641e11302271c73613bdf2cc1aa67ccff7067abc33a1baadc119ddd0c81->leave($__internal_f74b3641e11302271c73613bdf2cc1aa67ccff7067abc33a1baadc119ddd0c81_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_84f4f1ab3c836844bedb67240df277ba23ace4f1fc350075d07423f935cb04d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f4f1ab3c836844bedb67240df277ba23ace4f1fc350075d07423f935cb04d5->enter($__internal_84f4f1ab3c836844bedb67240df277ba23ace4f1fc350075d07423f935cb04d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ed7bea44e935f26adefadb56e7b9a9f42a26dcd52b324bf7e634b038d136839a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7bea44e935f26adefadb56e7b9a9f42a26dcd52b324bf7e634b038d136839a->enter($__internal_ed7bea44e935f26adefadb56e7b9a9f42a26dcd52b324bf7e634b038d136839a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 42, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ed7bea44e935f26adefadb56e7b9a9f42a26dcd52b324bf7e634b038d136839a->leave($__internal_ed7bea44e935f26adefadb56e7b9a9f42a26dcd52b324bf7e634b038d136839a_prof);

        
        $__internal_84f4f1ab3c836844bedb67240df277ba23ace4f1fc350075d07423f935cb04d5->leave($__internal_84f4f1ab3c836844bedb67240df277ba23ace4f1fc350075d07423f935cb04d5_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6ee886c99bd1fb09354292a22affe0fc4b8d8bc16b4842797320ae8c41c50480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee886c99bd1fb09354292a22affe0fc4b8d8bc16b4842797320ae8c41c50480->enter($__internal_6ee886c99bd1fb09354292a22affe0fc4b8d8bc16b4842797320ae8c41c50480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_297ec2e605238cccc6c8282ebc3bfd8e6d7b3ccf90839ef0c4dc9448169b4e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297ec2e605238cccc6c8282ebc3bfd8e6d7b3ccf90839ef0c4dc9448169b4e86->enter($__internal_297ec2e605238cccc6c8282ebc3bfd8e6d7b3ccf90839ef0c4dc9448169b4e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 48, $this->getSourceContext()); })()), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_297ec2e605238cccc6c8282ebc3bfd8e6d7b3ccf90839ef0c4dc9448169b4e86->leave($__internal_297ec2e605238cccc6c8282ebc3bfd8e6d7b3ccf90839ef0c4dc9448169b4e86_prof);

        
        $__internal_6ee886c99bd1fb09354292a22affe0fc4b8d8bc16b4842797320ae8c41c50480->leave($__internal_6ee886c99bd1fb09354292a22affe0fc4b8d8bc16b4842797320ae8c41c50480_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_fe4247887c01093bcd425a5d2b0556ca7085ac5950d945bed74a58e6d3fb87a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4247887c01093bcd425a5d2b0556ca7085ac5950d945bed74a58e6d3fb87a2->enter($__internal_fe4247887c01093bcd425a5d2b0556ca7085ac5950d945bed74a58e6d3fb87a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_494334ad9cbb7cacd311065d3a4a8e405743869235bc224e44c41e53f64c1b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494334ad9cbb7cacd311065d3a4a8e405743869235bc224e44c41e53f64c1b4e->enter($__internal_494334ad9cbb7cacd311065d3a4a8e405743869235bc224e44c41e53f64c1b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 53, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 53, $this->getSourceContext()); })())));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_494334ad9cbb7cacd311065d3a4a8e405743869235bc224e44c41e53f64c1b4e->leave($__internal_494334ad9cbb7cacd311065d3a4a8e405743869235bc224e44c41e53f64c1b4e_prof);

        
        $__internal_fe4247887c01093bcd425a5d2b0556ca7085ac5950d945bed74a58e6d3fb87a2->leave($__internal_fe4247887c01093bcd425a5d2b0556ca7085ac5950d945bed74a58e6d3fb87a2_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_72c3719f5d0a512ea4b0c12c43d823230a4a0389082de8faaa8856187738ff8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72c3719f5d0a512ea4b0c12c43d823230a4a0389082de8faaa8856187738ff8e->enter($__internal_72c3719f5d0a512ea4b0c12c43d823230a4a0389082de8faaa8856187738ff8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_95c3ade956ea5676ca51930d32a1f52064727dbff042451aad0f01e7472266bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95c3ade956ea5676ca51930d32a1f52064727dbff042451aad0f01e7472266bf->enter($__internal_95c3ade956ea5676ca51930d32a1f52064727dbff042451aad0f01e7472266bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 59, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 59, $this->getSourceContext()); })())));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_95c3ade956ea5676ca51930d32a1f52064727dbff042451aad0f01e7472266bf->leave($__internal_95c3ade956ea5676ca51930d32a1f52064727dbff042451aad0f01e7472266bf_prof);

        
        $__internal_72c3719f5d0a512ea4b0c12c43d823230a4a0389082de8faaa8856187738ff8e->leave($__internal_72c3719f5d0a512ea4b0c12c43d823230a4a0389082de8faaa8856187738ff8e_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_bb2122c9b90cbee596154149b96648577c2b922198aa29b1eeff883e6469b8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb2122c9b90cbee596154149b96648577c2b922198aa29b1eeff883e6469b8fd->enter($__internal_bb2122c9b90cbee596154149b96648577c2b922198aa29b1eeff883e6469b8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f858e5b8b4e818759de2d58d6f8f00158a355fc288f0134393afd95756133139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f858e5b8b4e818759de2d58d6f8f00158a355fc288f0134393afd95756133139->enter($__internal_f858e5b8b4e818759de2d58d6f8f00158a355fc288f0134393afd95756133139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 67, $this->getSourceContext()); })())) {
                // line 68
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 71, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 71, $this->getSourceContext()); })())))));
            }
            // line 73
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 73, $this->getSourceContext()); })())))) {
                // line 74
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 74, $this->getSourceContext()); })()))) {
                    // line 75
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 75, $this->getSourceContext()); })()), array("%name%" =>                     // line 76
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 76, $this->getSourceContext()); })()), "%id%" =>                     // line 77
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 77, $this->getSourceContext()); })())));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 80, $this->getSourceContext()); })()));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 83, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 84, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 84, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 84, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_f858e5b8b4e818759de2d58d6f8f00158a355fc288f0134393afd95756133139->leave($__internal_f858e5b8b4e818759de2d58d6f8f00158a355fc288f0134393afd95756133139_prof);

        
        $__internal_bb2122c9b90cbee596154149b96648577c2b922198aa29b1eeff883e6469b8fd->leave($__internal_bb2122c9b90cbee596154149b96648577c2b922198aa29b1eeff883e6469b8fd_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1f222970fa117f71e481fb99e5f22ca7607cb8667e8bfb5610056a6b7027dd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f222970fa117f71e481fb99e5f22ca7607cb8667e8bfb5610056a6b7027dd64->enter($__internal_1f222970fa117f71e481fb99e5f22ca7607cb8667e8bfb5610056a6b7027dd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_22049a848ea03e3850775196a9accc5f6479e3dba202a5529ebf7438a1f96519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22049a848ea03e3850775196a9accc5f6479e3dba202a5529ebf7438a1f96519->enter($__internal_22049a848ea03e3850775196a9accc5f6479e3dba202a5529ebf7438a1f96519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 92, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 92, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 92, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->getSourceContext()); })()), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 94, $this->getSourceContext()); })()), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_22049a848ea03e3850775196a9accc5f6479e3dba202a5529ebf7438a1f96519->leave($__internal_22049a848ea03e3850775196a9accc5f6479e3dba202a5529ebf7438a1f96519_prof);

        
        $__internal_1f222970fa117f71e481fb99e5f22ca7607cb8667e8bfb5610056a6b7027dd64->leave($__internal_1f222970fa117f71e481fb99e5f22ca7607cb8667e8bfb5610056a6b7027dd64_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f87bf4314969ee826ae35e14a7c3e8435cca5c30495d51b3188c62b4c5c9b866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87bf4314969ee826ae35e14a7c3e8435cca5c30495d51b3188c62b4c5c9b866->enter($__internal_f87bf4314969ee826ae35e14a7c3e8435cca5c30495d51b3188c62b4c5c9b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_215a4edb1b26c0583190fd2704b4c8b79d84356070e77ba16b4a711c528f6e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_215a4edb1b26c0583190fd2704b4c8b79d84356070e77ba16b4a711c528f6e89->enter($__internal_215a4edb1b26c0583190fd2704b4c8b79d84356070e77ba16b4a711c528f6e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_215a4edb1b26c0583190fd2704b4c8b79d84356070e77ba16b4a711c528f6e89->leave($__internal_215a4edb1b26c0583190fd2704b4c8b79d84356070e77ba16b4a711c528f6e89_prof);

        
        $__internal_f87bf4314969ee826ae35e14a7c3e8435cca5c30495d51b3188c62b4c5c9b866->leave($__internal_f87bf4314969ee826ae35e14a7c3e8435cca5c30495d51b3188c62b4c5c9b866_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5a7dac368ff3e83ad4a9cf89d89ad65049326a119ae89f64e33c98fb7f5e71cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7dac368ff3e83ad4a9cf89d89ad65049326a119ae89f64e33c98fb7f5e71cb->enter($__internal_5a7dac368ff3e83ad4a9cf89d89ad65049326a119ae89f64e33c98fb7f5e71cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_4dcbf4574616d9241c0744888ed13afa771f7c3fd39ca933bfc8676375f9cf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcbf4574616d9241c0744888ed13afa771f7c3fd39ca933bfc8676375f9cf73->enter($__internal_4dcbf4574616d9241c0744888ed13afa771f7c3fd39ca933bfc8676375f9cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4dcbf4574616d9241c0744888ed13afa771f7c3fd39ca933bfc8676375f9cf73->leave($__internal_4dcbf4574616d9241c0744888ed13afa771f7c3fd39ca933bfc8676375f9cf73_prof);

        
        $__internal_5a7dac368ff3e83ad4a9cf89d89ad65049326a119ae89f64e33c98fb7f5e71cb->leave($__internal_5a7dac368ff3e83ad4a9cf89d89ad65049326a119ae89f64e33c98fb7f5e71cb_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9109e3d54a393634ff4ed17fb076388787ccc5ef8029349515e2eb33619c4583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9109e3d54a393634ff4ed17fb076388787ccc5ef8029349515e2eb33619c4583->enter($__internal_9109e3d54a393634ff4ed17fb076388787ccc5ef8029349515e2eb33619c4583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_82ac051d6d14d0435fe2e2be9b20ec63ca2e6c50c1f319779fed0a54ebe5f2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82ac051d6d14d0435fe2e2be9b20ec63ca2e6c50c1f319779fed0a54ebe5f2da->enter($__internal_82ac051d6d14d0435fe2e2be9b20ec63ca2e6c50c1f319779fed0a54ebe5f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_82ac051d6d14d0435fe2e2be9b20ec63ca2e6c50c1f319779fed0a54ebe5f2da->leave($__internal_82ac051d6d14d0435fe2e2be9b20ec63ca2e6c50c1f319779fed0a54ebe5f2da_prof);

        
        $__internal_9109e3d54a393634ff4ed17fb076388787ccc5ef8029349515e2eb33619c4583->leave($__internal_9109e3d54a393634ff4ed17fb076388787ccc5ef8029349515e2eb33619c4583_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7b6639ec6ac85e3448b433d1fcc90a72603f0dad0d24fba2e78d0eb114cc81e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6639ec6ac85e3448b433d1fcc90a72603f0dad0d24fba2e78d0eb114cc81e2->enter($__internal_7b6639ec6ac85e3448b433d1fcc90a72603f0dad0d24fba2e78d0eb114cc81e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_506474b85d52b7077fee64ded3e1e75b66856db4958fd658955f93a7a5536a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506474b85d52b7077fee64ded3e1e75b66856db4958fd658955f93a7a5536a4d->enter($__internal_506474b85d52b7077fee64ded3e1e75b66856db4958fd658955f93a7a5536a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_506474b85d52b7077fee64ded3e1e75b66856db4958fd658955f93a7a5536a4d->leave($__internal_506474b85d52b7077fee64ded3e1e75b66856db4958fd658955f93a7a5536a4d_prof);

        
        $__internal_7b6639ec6ac85e3448b433d1fcc90a72603f0dad0d24fba2e78d0eb114cc81e2->leave($__internal_7b6639ec6ac85e3448b433d1fcc90a72603f0dad0d24fba2e78d0eb114cc81e2_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_393519492987d0579696eb6258d53637c5835851a296a67c482adec7be61f3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393519492987d0579696eb6258d53637c5835851a296a67c482adec7be61f3a3->enter($__internal_393519492987d0579696eb6258d53637c5835851a296a67c482adec7be61f3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_aaacdf9569065c03ad17ebafe8419c7fdb187361e448dc41a577de52d45b9107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaacdf9569065c03ad17ebafe8419c7fdb187361e448dc41a577de52d45b9107->enter($__internal_aaacdf9569065c03ad17ebafe8419c7fdb187361e448dc41a577de52d45b9107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aaacdf9569065c03ad17ebafe8419c7fdb187361e448dc41a577de52d45b9107->leave($__internal_aaacdf9569065c03ad17ebafe8419c7fdb187361e448dc41a577de52d45b9107_prof);

        
        $__internal_393519492987d0579696eb6258d53637c5835851a296a67c482adec7be61f3a3->leave($__internal_393519492987d0579696eb6258d53637c5835851a296a67c482adec7be61f3a3_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fa3cc2eb996fad770af6429b3585c17092e9ab4c31746558231f78fde4fd42cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3cc2eb996fad770af6429b3585c17092e9ab4c31746558231f78fde4fd42cc->enter($__internal_fa3cc2eb996fad770af6429b3585c17092e9ab4c31746558231f78fde4fd42cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f6b3ac9c4cd89051e1d7706b2212e10b96c58be8683a8735202f748aaa7be585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b3ac9c4cd89051e1d7706b2212e10b96c58be8683a8735202f748aaa7be585->enter($__internal_f6b3ac9c4cd89051e1d7706b2212e10b96c58be8683a8735202f748aaa7be585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 126, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 127, $this->getSourceContext()); })()), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_f6b3ac9c4cd89051e1d7706b2212e10b96c58be8683a8735202f748aaa7be585->leave($__internal_f6b3ac9c4cd89051e1d7706b2212e10b96c58be8683a8735202f748aaa7be585_prof);

        
        $__internal_fa3cc2eb996fad770af6429b3585c17092e9ab4c31746558231f78fde4fd42cc->leave($__internal_fa3cc2eb996fad770af6429b3585c17092e9ab4c31746558231f78fde4fd42cc_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b451ffab69d2ba4c358929049909532338b55e689574f0b2e2b8b48c8e494587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b451ffab69d2ba4c358929049909532338b55e689574f0b2e2b8b48c8e494587->enter($__internal_b451ffab69d2ba4c358929049909532338b55e689574f0b2e2b8b48c8e494587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7ac0923a545cfeebeb3880359c7dbe37c5ec4ff3ac2edb8525098dee06bf62c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac0923a545cfeebeb3880359c7dbe37c5ec4ff3ac2edb8525098dee06bf62c2->enter($__internal_7ac0923a545cfeebeb3880359c7dbe37c5ec4ff3ac2edb8525098dee06bf62c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 133, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 134, $this->getSourceContext()); })()), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 135, $this->getSourceContext()); })()), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_7ac0923a545cfeebeb3880359c7dbe37c5ec4ff3ac2edb8525098dee06bf62c2->leave($__internal_7ac0923a545cfeebeb3880359c7dbe37c5ec4ff3ac2edb8525098dee06bf62c2_prof);

        
        $__internal_b451ffab69d2ba4c358929049909532338b55e689574f0b2e2b8b48c8e494587->leave($__internal_b451ffab69d2ba4c358929049909532338b55e689574f0b2e2b8b48c8e494587_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0297c316d5f9594c8cb07af64a6110202bbac959b4a1de177fe9d8746b5156e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0297c316d5f9594c8cb07af64a6110202bbac959b4a1de177fe9d8746b5156e7->enter($__internal_0297c316d5f9594c8cb07af64a6110202bbac959b4a1de177fe9d8746b5156e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_76634c00681720f4774856843b050e25d59faf96caabaf9bc26c43fb4d6badf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76634c00681720f4774856843b050e25d59faf96caabaf9bc26c43fb4d6badf8->enter($__internal_76634c00681720f4774856843b050e25d59faf96caabaf9bc26c43fb4d6badf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 142, $this->getSourceContext()); })())) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 145, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 149, $this->getSourceContext()); })()))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_76634c00681720f4774856843b050e25d59faf96caabaf9bc26c43fb4d6badf8->leave($__internal_76634c00681720f4774856843b050e25d59faf96caabaf9bc26c43fb4d6badf8_prof);

        
        $__internal_0297c316d5f9594c8cb07af64a6110202bbac959b4a1de177fe9d8746b5156e7->leave($__internal_0297c316d5f9594c8cb07af64a6110202bbac959b4a1de177fe9d8746b5156e7_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
