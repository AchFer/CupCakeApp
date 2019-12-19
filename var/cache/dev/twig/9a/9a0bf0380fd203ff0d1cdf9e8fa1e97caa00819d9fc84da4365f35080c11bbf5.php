<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_f28977d84d24dd68e8c9a2f5a1bedea1aaa91fe31f31e8310195a8e81992c0da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3083a7eb5af737765b7a02cb6679fa2c2bd58ac8481c3a24ca07ebbe6214589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3083a7eb5af737765b7a02cb6679fa2c2bd58ac8481c3a24ca07ebbe6214589->enter($__internal_a3083a7eb5af737765b7a02cb6679fa2c2bd58ac8481c3a24ca07ebbe6214589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_04a65c1a4be12935016d7e3b9c4caa4438f5b0aa8b54ba411a6aa9ea12d29495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a65c1a4be12935016d7e3b9c4caa4438f5b0aa8b54ba411a6aa9ea12d29495->enter($__internal_04a65c1a4be12935016d7e3b9c4caa4438f5b0aa8b54ba411a6aa9ea12d29495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a3083a7eb5af737765b7a02cb6679fa2c2bd58ac8481c3a24ca07ebbe6214589->leave($__internal_a3083a7eb5af737765b7a02cb6679fa2c2bd58ac8481c3a24ca07ebbe6214589_prof);

        
        $__internal_04a65c1a4be12935016d7e3b9c4caa4438f5b0aa8b54ba411a6aa9ea12d29495->leave($__internal_04a65c1a4be12935016d7e3b9c4caa4438f5b0aa8b54ba411a6aa9ea12d29495_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b127cdb9540e1776a2b3dc01abd5312a0985e5999c9c98f3a8b02b1a021bfb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b127cdb9540e1776a2b3dc01abd5312a0985e5999c9c98f3a8b02b1a021bfb4a->enter($__internal_b127cdb9540e1776a2b3dc01abd5312a0985e5999c9c98f3a8b02b1a021bfb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2140376de86b0d5bb7b97f5b2ebddb80e6e6657e855433402f54bf051c95b052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2140376de86b0d5bb7b97f5b2ebddb80e6e6657e855433402f54bf051c95b052->enter($__internal_2140376de86b0d5bb7b97f5b2ebddb80e6e6657e855433402f54bf051c95b052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_2140376de86b0d5bb7b97f5b2ebddb80e6e6657e855433402f54bf051c95b052->leave($__internal_2140376de86b0d5bb7b97f5b2ebddb80e6e6657e855433402f54bf051c95b052_prof);

        
        $__internal_b127cdb9540e1776a2b3dc01abd5312a0985e5999c9c98f3a8b02b1a021bfb4a->leave($__internal_b127cdb9540e1776a2b3dc01abd5312a0985e5999c9c98f3a8b02b1a021bfb4a_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_71cd6e2ad7db03d7fee1742c6d014d7b673309e6c9a1acd5cc5008477c8989a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cd6e2ad7db03d7fee1742c6d014d7b673309e6c9a1acd5cc5008477c8989a3->enter($__internal_71cd6e2ad7db03d7fee1742c6d014d7b673309e6c9a1acd5cc5008477c8989a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4dd2decec47ce65fbb72c59f06591a3e3a71ef8cf8d733ad3e2e81b49f76179f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd2decec47ce65fbb72c59f06591a3e3a71ef8cf8d733ad3e2e81b49f76179f->enter($__internal_4dd2decec47ce65fbb72c59f06591a3e3a71ef8cf8d733ad3e2e81b49f76179f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 14, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 14, $this->getSourceContext()); })()))) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_4dd2decec47ce65fbb72c59f06591a3e3a71ef8cf8d733ad3e2e81b49f76179f->leave($__internal_4dd2decec47ce65fbb72c59f06591a3e3a71ef8cf8d733ad3e2e81b49f76179f_prof);

        
        $__internal_71cd6e2ad7db03d7fee1742c6d014d7b673309e6c9a1acd5cc5008477c8989a3->leave($__internal_71cd6e2ad7db03d7fee1742c6d014d7b673309e6c9a1acd5cc5008477c8989a3_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0bcdb15300df3d293816bd89cf9ce34ba269a8fab8f4e2c5c06d4bcf3d262515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcdb15300df3d293816bd89cf9ce34ba269a8fab8f4e2c5c06d4bcf3d262515->enter($__internal_0bcdb15300df3d293816bd89cf9ce34ba269a8fab8f4e2c5c06d4bcf3d262515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_918e58689032316d34407ddf7f4ea9d4a0a04dc4ac2bd56131185ba4f13f356b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918e58689032316d34407ddf7f4ea9d4a0a04dc4ac2bd56131185ba4f13f356b->enter($__internal_918e58689032316d34407ddf7f4ea9d4a0a04dc4ac2bd56131185ba4f13f356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 22, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 22, $this->getSourceContext()); })()))) {
            // line 23
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 23, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_918e58689032316d34407ddf7f4ea9d4a0a04dc4ac2bd56131185ba4f13f356b->leave($__internal_918e58689032316d34407ddf7f4ea9d4a0a04dc4ac2bd56131185ba4f13f356b_prof);

        
        $__internal_0bcdb15300df3d293816bd89cf9ce34ba269a8fab8f4e2c5c06d4bcf3d262515->leave($__internal_0bcdb15300df3d293816bd89cf9ce34ba269a8fab8f4e2c5c06d4bcf3d262515_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5d70f9288d4bb605880cb8e5417221083af99147a956cfacca4ea7802ba5cb62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d70f9288d4bb605880cb8e5417221083af99147a956cfacca4ea7802ba5cb62->enter($__internal_5d70f9288d4bb605880cb8e5417221083af99147a956cfacca4ea7802ba5cb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_01deb3684a12b20459bdd2d612545a63a7f0d3f68b04aa3b18d0c37769c0f17e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01deb3684a12b20459bdd2d612545a63a7f0d3f68b04aa3b18d0c37769c0f17e->enter($__internal_01deb3684a12b20459bdd2d612545a63a7f0d3f68b04aa3b18d0c37769c0f17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 30, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 30, $this->getSourceContext()); })()))) {
            // line 31
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 31, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_01deb3684a12b20459bdd2d612545a63a7f0d3f68b04aa3b18d0c37769c0f17e->leave($__internal_01deb3684a12b20459bdd2d612545a63a7f0d3f68b04aa3b18d0c37769c0f17e_prof);

        
        $__internal_5d70f9288d4bb605880cb8e5417221083af99147a956cfacca4ea7802ba5cb62->leave($__internal_5d70f9288d4bb605880cb8e5417221083af99147a956cfacca4ea7802ba5cb62_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c17bdd80afca04617110a3f79fb093d6f721036251758b1cb8781eff8c1dcb0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17bdd80afca04617110a3f79fb093d6f721036251758b1cb8781eff8c1dcb0d->enter($__internal_c17bdd80afca04617110a3f79fb093d6f721036251758b1cb8781eff8c1dcb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_bbaa632c6fea5899385ce48fd7be6a2acc01124c9237b32e3ed78e553427bb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbaa632c6fea5899385ce48fd7be6a2acc01124c9237b32e3ed78e553427bb89->enter($__internal_bbaa632c6fea5899385ce48fd7be6a2acc01124c9237b32e3ed78e553427bb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 38, $this->getSourceContext()); })()) != "single_text") &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 38, $this->getSourceContext()); })()))) {
            // line 39
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 39, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_bbaa632c6fea5899385ce48fd7be6a2acc01124c9237b32e3ed78e553427bb89->leave($__internal_bbaa632c6fea5899385ce48fd7be6a2acc01124c9237b32e3ed78e553427bb89_prof);

        
        $__internal_c17bdd80afca04617110a3f79fb093d6f721036251758b1cb8781eff8c1dcb0d->leave($__internal_c17bdd80afca04617110a3f79fb093d6f721036251758b1cb8781eff8c1dcb0d_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b4d2fed90cb8d54d2c4eb371024c5efc66fc573cf3e0ad13a6b4b0e6d269059c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d2fed90cb8d54d2c4eb371024c5efc66fc573cf3e0ad13a6b4b0e6d269059c->enter($__internal_b4d2fed90cb8d54d2c4eb371024c5efc66fc573cf3e0ad13a6b4b0e6d269059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b3a92e7ac8311537a84bbc099d066a965b026ae7aaf45f5a4e540cf835180217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a92e7ac8311537a84bbc099d066a965b026ae7aaf45f5a4e540cf835180217->enter($__internal_b3a92e7ac8311537a84bbc099d066a965b026ae7aaf45f5a4e540cf835180217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 46, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b3a92e7ac8311537a84bbc099d066a965b026ae7aaf45f5a4e540cf835180217->leave($__internal_b3a92e7ac8311537a84bbc099d066a965b026ae7aaf45f5a4e540cf835180217_prof);

        
        $__internal_b4d2fed90cb8d54d2c4eb371024c5efc66fc573cf3e0ad13a6b4b0e6d269059c->leave($__internal_b4d2fed90cb8d54d2c4eb371024c5efc66fc573cf3e0ad13a6b4b0e6d269059c_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_921c2e7141afc677ca4f92e4354f9f09d81a07da8d5838d315b78fadf3b67767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921c2e7141afc677ca4f92e4354f9f09d81a07da8d5838d315b78fadf3b67767->enter($__internal_921c2e7141afc677ca4f92e4354f9f09d81a07da8d5838d315b78fadf3b67767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_51a3a392c1cd8e34fcfdfe693f2eb042a4eea56d4a1cbe756f952c8236dee860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a3a392c1cd8e34fcfdfe693f2eb042a4eea56d4a1cbe756f952c8236dee860->enter($__internal_51a3a392c1cd8e34fcfdfe693f2eb042a4eea56d4a1cbe756f952c8236dee860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 54, $this->getSourceContext()); })()) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 55, $this->getSourceContext()); })()), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_51a3a392c1cd8e34fcfdfe693f2eb042a4eea56d4a1cbe756f952c8236dee860->leave($__internal_51a3a392c1cd8e34fcfdfe693f2eb042a4eea56d4a1cbe756f952c8236dee860_prof);

        
        $__internal_921c2e7141afc677ca4f92e4354f9f09d81a07da8d5838d315b78fadf3b67767->leave($__internal_921c2e7141afc677ca4f92e4354f9f09d81a07da8d5838d315b78fadf3b67767_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_b325991002be61f8e78ede6890a8a5fbd96cde823c800629b4885ae09d200eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b325991002be61f8e78ede6890a8a5fbd96cde823c800629b4885ae09d200eec->enter($__internal_b325991002be61f8e78ede6890a8a5fbd96cde823c800629b4885ae09d200eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_b00b2f54e0bea20cf408ef6a3533114b752990bb39caf31ff2b3815b6e11e7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00b2f54e0bea20cf408ef6a3533114b752990bb39caf31ff2b3815b6e11e7fa->enter($__internal_b00b2f54e0bea20cf408ef6a3533114b752990bb39caf31ff2b3815b6e11e7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 61, $this->getSourceContext()); })())) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 62, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_b00b2f54e0bea20cf408ef6a3533114b752990bb39caf31ff2b3815b6e11e7fa->leave($__internal_b00b2f54e0bea20cf408ef6a3533114b752990bb39caf31ff2b3815b6e11e7fa_prof);

        
        $__internal_b325991002be61f8e78ede6890a8a5fbd96cde823c800629b4885ae09d200eec->leave($__internal_b325991002be61f8e78ede6890a8a5fbd96cde823c800629b4885ae09d200eec_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_8cd917f885125c3dc32cf24f59a940d9bf0c1a6232424954d5d1dbb1dc2c527e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cd917f885125c3dc32cf24f59a940d9bf0c1a6232424954d5d1dbb1dc2c527e->enter($__internal_8cd917f885125c3dc32cf24f59a940d9bf0c1a6232424954d5d1dbb1dc2c527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b3a29757fe1a39d73841f0354c37d895e4004baa7a09674a21550ea9c112a83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a29757fe1a39d73841f0354c37d895e4004baa7a09674a21550ea9c112a83d->enter($__internal_b3a29757fe1a39d73841f0354c37d895e4004baa7a09674a21550ea9c112a83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 68, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b3a29757fe1a39d73841f0354c37d895e4004baa7a09674a21550ea9c112a83d->leave($__internal_b3a29757fe1a39d73841f0354c37d895e4004baa7a09674a21550ea9c112a83d_prof);

        
        $__internal_8cd917f885125c3dc32cf24f59a940d9bf0c1a6232424954d5d1dbb1dc2c527e->leave($__internal_8cd917f885125c3dc32cf24f59a940d9bf0c1a6232424954d5d1dbb1dc2c527e_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0a3990c7289c39239f6f9bebaa5a64c521c044c00a131a72ea2c83fec12b36d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a3990c7289c39239f6f9bebaa5a64c521c044c00a131a72ea2c83fec12b36d1->enter($__internal_0a3990c7289c39239f6f9bebaa5a64c521c044c00a131a72ea2c83fec12b36d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_253752fab613b4c4ccb0d82dbb391f093291842439e28d4e3efea7dae1a58ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_253752fab613b4c4ccb0d82dbb391f093291842439e28d4e3efea7dae1a58ea1->enter($__internal_253752fab613b4c4ccb0d82dbb391f093291842439e28d4e3efea7dae1a58ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 73, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 74, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 75, $this->getSourceContext()); })()))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
(isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 77, $this->getSourceContext()); })()))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 78, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 82, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_253752fab613b4c4ccb0d82dbb391f093291842439e28d4e3efea7dae1a58ea1->leave($__internal_253752fab613b4c4ccb0d82dbb391f093291842439e28d4e3efea7dae1a58ea1_prof);

        
        $__internal_0a3990c7289c39239f6f9bebaa5a64c521c044c00a131a72ea2c83fec12b36d1->leave($__internal_0a3990c7289c39239f6f9bebaa5a64c521c044c00a131a72ea2c83fec12b36d1_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_db73e34cb23e9c0e34a9e633f60ef8fddb721e194cf2a83e9b7621277703220a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db73e34cb23e9c0e34a9e633f60ef8fddb721e194cf2a83e9b7621277703220a->enter($__internal_db73e34cb23e9c0e34a9e633f60ef8fddb721e194cf2a83e9b7621277703220a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e5f4fbacd0c79ef8743f863a7495b5917c4de8f5f6b65b33916e71cb039ba3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f4fbacd0c79ef8743f863a7495b5917c4de8f5f6b65b33916e71cb039ba3d3->enter($__internal_e5f4fbacd0c79ef8743f863a7495b5917c4de8f5f6b65b33916e71cb039ba3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 89, $this->getSourceContext()); })()), ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 90, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 91, $this->getSourceContext()); })()))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 92, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 94, $this->getSourceContext()); })())) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 95, $this->getSourceContext()); })()), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_e5f4fbacd0c79ef8743f863a7495b5917c4de8f5f6b65b33916e71cb039ba3d3->leave($__internal_e5f4fbacd0c79ef8743f863a7495b5917c4de8f5f6b65b33916e71cb039ba3d3_prof);

        
        $__internal_db73e34cb23e9c0e34a9e633f60ef8fddb721e194cf2a83e9b7621277703220a->leave($__internal_db73e34cb23e9c0e34a9e633f60ef8fddb721e194cf2a83e9b7621277703220a_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ecb52a3df396f12b05002b2355d8536ea3c3fb6c47059459a335b758ffabcbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb52a3df396f12b05002b2355d8536ea3c3fb6c47059459a335b758ffabcbf5->enter($__internal_ecb52a3df396f12b05002b2355d8536ea3c3fb6c47059459a335b758ffabcbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c8264c634e4b499f3ba4a8789323688ccb166a1b553b023d6164594e64e8b026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8264c634e4b499f3ba4a8789323688ccb166a1b553b023d6164594e64e8b026->enter($__internal_c8264c634e4b499f3ba4a8789323688ccb166a1b553b023d6164594e64e8b026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 105, $this->getSourceContext()); })()), "valid" =>                 // line 106
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 106, $this->getSourceContext()); })())));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 110, $this->getSourceContext()); })())) {
                // line 111
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 111, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 117, $this->getSourceContext()); })()), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_c8264c634e4b499f3ba4a8789323688ccb166a1b553b023d6164594e64e8b026->leave($__internal_c8264c634e4b499f3ba4a8789323688ccb166a1b553b023d6164594e64e8b026_prof);

        
        $__internal_ecb52a3df396f12b05002b2355d8536ea3c3fb6c47059459a335b758ffabcbf5->leave($__internal_ecb52a3df396f12b05002b2355d8536ea3c3fb6c47059459a335b758ffabcbf5_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_7806f34eb799e754d4118bc814df25d48b38b70831037ea2c080102276ae70c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7806f34eb799e754d4118bc814df25d48b38b70831037ea2c080102276ae70c7->enter($__internal_7806f34eb799e754d4118bc814df25d48b38b70831037ea2c080102276ae70c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_29c7c73fa51b92bdff50ab58cc360e51a2e3c01fed39bf9da8d76ee49d282966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29c7c73fa51b92bdff50ab58cc360e51a2e3c01fed39bf9da8d76ee49d282966->enter($__internal_29c7c73fa51b92bdff50ab58cc360e51a2e3c01fed39bf9da8d76ee49d282966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 128, $this->getSourceContext()); })()))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 130, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 132, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_29c7c73fa51b92bdff50ab58cc360e51a2e3c01fed39bf9da8d76ee49d282966->leave($__internal_29c7c73fa51b92bdff50ab58cc360e51a2e3c01fed39bf9da8d76ee49d282966_prof);

        
        $__internal_7806f34eb799e754d4118bc814df25d48b38b70831037ea2c080102276ae70c7->leave($__internal_7806f34eb799e754d4118bc814df25d48b38b70831037ea2c080102276ae70c7_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e53607df57f52f1698fbe8c1fa7544dc1aa8211980332958017bae27f08fb513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e53607df57f52f1698fbe8c1fa7544dc1aa8211980332958017bae27f08fb513->enter($__internal_e53607df57f52f1698fbe8c1fa7544dc1aa8211980332958017bae27f08fb513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_09d32e9b96a69a714e62578b8ecb2bdccc465028c1f7ec14ccc29f9e9ed0265b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09d32e9b96a69a714e62578b8ecb2bdccc465028c1f7ec14ccc29f9e9ed0265b->enter($__internal_09d32e9b96a69a714e62578b8ecb2bdccc465028c1f7ec14ccc29f9e9ed0265b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 140, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 141, $this->getSourceContext()); })())) {
                // line 142
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 142, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 145, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new Twig_Error_Runtime('Variable "parent_label_class" does not exist.', 145, $this->getSourceContext()); })())))));
            }
            // line 147
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 147, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 147, $this->getSourceContext()); })())))) {
                // line 148
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 148, $this->getSourceContext()); })()))) {
                    // line 149
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 149, $this->getSourceContext()); })()), array("%name%" =>                     // line 150
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 150, $this->getSourceContext()); })()), "%id%" =>                     // line 151
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 151, $this->getSourceContext()); })())));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 154, $this->getSourceContext()); })()));
                }
            }
            // line 157
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 157, $this->getSourceContext()); })()));
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
            // line 158
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 158, $this->getSourceContext()); })());
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 158, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 158, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 158, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_09d32e9b96a69a714e62578b8ecb2bdccc465028c1f7ec14ccc29f9e9ed0265b->leave($__internal_09d32e9b96a69a714e62578b8ecb2bdccc465028c1f7ec14ccc29f9e9ed0265b_prof);

        
        $__internal_e53607df57f52f1698fbe8c1fa7544dc1aa8211980332958017bae27f08fb513->leave($__internal_e53607df57f52f1698fbe8c1fa7544dc1aa8211980332958017bae27f08fb513_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b534d9dae6849ce0584dcc2254d691d73e12392f6f9548a1268950750fdf1420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b534d9dae6849ce0584dcc2254d691d73e12392f6f9548a1268950750fdf1420->enter($__internal_b534d9dae6849ce0584dcc2254d691d73e12392f6f9548a1268950750fdf1420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_66783a840406b2442d36f9a1078a8db04fb0bc7fa90124d54bf4650c1e45dbc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66783a840406b2442d36f9a1078a8db04fb0bc7fa90124d54bf4650c1e45dbc8->enter($__internal_66783a840406b2442d36f9a1078a8db04fb0bc7fa90124d54bf4650c1e45dbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 166, $this->getSourceContext()); })()))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 169, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 170, $this->getSourceContext()); })()), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 171, $this->getSourceContext()); })()), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 172, $this->getSourceContext()); })()), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 173, $this->getSourceContext()); })()), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_66783a840406b2442d36f9a1078a8db04fb0bc7fa90124d54bf4650c1e45dbc8->leave($__internal_66783a840406b2442d36f9a1078a8db04fb0bc7fa90124d54bf4650c1e45dbc8_prof);

        
        $__internal_b534d9dae6849ce0584dcc2254d691d73e12392f6f9548a1268950750fdf1420->leave($__internal_b534d9dae6849ce0584dcc2254d691d73e12392f6f9548a1268950750fdf1420_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d1329c65ee6ef9ea45c664533f4248bc1a1261f68ef101fb625c6feb1a6f5c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1329c65ee6ef9ea45c664533f4248bc1a1261f68ef101fb625c6feb1a6f5c1e->enter($__internal_d1329c65ee6ef9ea45c664533f4248bc1a1261f68ef101fb625c6feb1a6f5c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6d708c23852abbac6f4cd18bb0be376510854610e416ecdb4dff2d9329ed0021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d708c23852abbac6f4cd18bb0be376510854610e416ecdb4dff2d9329ed0021->enter($__internal_6d708c23852abbac6f4cd18bb0be376510854610e416ecdb4dff2d9329ed0021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 179, $this->getSourceContext()); })())) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 180, $this->getSourceContext()); })()))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 182, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_6d708c23852abbac6f4cd18bb0be376510854610e416ecdb4dff2d9329ed0021->leave($__internal_6d708c23852abbac6f4cd18bb0be376510854610e416ecdb4dff2d9329ed0021_prof);

        
        $__internal_d1329c65ee6ef9ea45c664533f4248bc1a1261f68ef101fb625c6feb1a6f5c1e->leave($__internal_d1329c65ee6ef9ea45c664533f4248bc1a1261f68ef101fb625c6feb1a6f5c1e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
