<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_9bbdac61afb64535aaa9da0b90ee17e4f9e4642bca686ff3135cecb8e6e21ebb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e995e1daf7026571e4173128964f308678f25149b7b88d3f1702d604600fa103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e995e1daf7026571e4173128964f308678f25149b7b88d3f1702d604600fa103->enter($__internal_e995e1daf7026571e4173128964f308678f25149b7b88d3f1702d604600fa103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_c7207c71b31de04a6bbb81a45a20ee8864b87c1fa76b8b8a677330c8ed2dec40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7207c71b31de04a6bbb81a45a20ee8864b87c1fa76b8b8a677330c8ed2dec40->enter($__internal_c7207c71b31de04a6bbb81a45a20ee8864b87c1fa76b8b8a677330c8ed2dec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_e995e1daf7026571e4173128964f308678f25149b7b88d3f1702d604600fa103->leave($__internal_e995e1daf7026571e4173128964f308678f25149b7b88d3f1702d604600fa103_prof);

        
        $__internal_c7207c71b31de04a6bbb81a45a20ee8864b87c1fa76b8b8a677330c8ed2dec40->leave($__internal_c7207c71b31de04a6bbb81a45a20ee8864b87c1fa76b8b8a677330c8ed2dec40_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_ab7d41263e0085440a05cdccc9649bcbd41ac22abed09cafc1c0e8ca30568b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7d41263e0085440a05cdccc9649bcbd41ac22abed09cafc1c0e8ca30568b71->enter($__internal_ab7d41263e0085440a05cdccc9649bcbd41ac22abed09cafc1c0e8ca30568b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_c8df9ab8b1b59f41e2f137e2242ee57f8fc996d887f3f64e11362ac26e6f0b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8df9ab8b1b59f41e2f137e2242ee57f8fc996d887f3f64e11362ac26e6f0b04->enter($__internal_c8df9ab8b1b59f41e2f137e2242ee57f8fc996d887f3f64e11362ac26e6f0b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_c8df9ab8b1b59f41e2f137e2242ee57f8fc996d887f3f64e11362ac26e6f0b04->leave($__internal_c8df9ab8b1b59f41e2f137e2242ee57f8fc996d887f3f64e11362ac26e6f0b04_prof);

        
        $__internal_ab7d41263e0085440a05cdccc9649bcbd41ac22abed09cafc1c0e8ca30568b71->leave($__internal_ab7d41263e0085440a05cdccc9649bcbd41ac22abed09cafc1c0e8ca30568b71_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a92c56adf14aab79e06474b7be774def9e11b5a59fbdef2c90e64552cc5139f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92c56adf14aab79e06474b7be774def9e11b5a59fbdef2c90e64552cc5139f8->enter($__internal_a92c56adf14aab79e06474b7be774def9e11b5a59fbdef2c90e64552cc5139f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_724333c852e6e68b94f0d7eab9961d8ef6cf9b3b7eaf2cf3c99ddcf1b80f221a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724333c852e6e68b94f0d7eab9961d8ef6cf9b3b7eaf2cf3c99ddcf1b80f221a->enter($__internal_724333c852e6e68b94f0d7eab9961d8ef6cf9b3b7eaf2cf3c99ddcf1b80f221a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 11, $this->getSourceContext()); })()) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 14, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_724333c852e6e68b94f0d7eab9961d8ef6cf9b3b7eaf2cf3c99ddcf1b80f221a->leave($__internal_724333c852e6e68b94f0d7eab9961d8ef6cf9b3b7eaf2cf3c99ddcf1b80f221a_prof);

        
        $__internal_a92c56adf14aab79e06474b7be774def9e11b5a59fbdef2c90e64552cc5139f8->leave($__internal_a92c56adf14aab79e06474b7be774def9e11b5a59fbdef2c90e64552cc5139f8_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5d5ff0fb9f0473ded28d629c9f669521161b95d74c2a6cf01e18ad10834f86a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5ff0fb9f0473ded28d629c9f669521161b95d74c2a6cf01e18ad10834f86a2->enter($__internal_5d5ff0fb9f0473ded28d629c9f669521161b95d74c2a6cf01e18ad10834f86a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6d6818764350126e69a8c4cb16988f89c350056620fbba3b9f66dc51d9c18891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6818764350126e69a8c4cb16988f89c350056620fbba3b9f66dc51d9c18891->enter($__internal_6d6818764350126e69a8c4cb16988f89c350056620fbba3b9f66dc51d9c18891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_6d6818764350126e69a8c4cb16988f89c350056620fbba3b9f66dc51d9c18891->leave($__internal_6d6818764350126e69a8c4cb16988f89c350056620fbba3b9f66dc51d9c18891_prof);

        
        $__internal_5d5ff0fb9f0473ded28d629c9f669521161b95d74c2a6cf01e18ad10834f86a2->leave($__internal_5d5ff0fb9f0473ded28d629c9f669521161b95d74c2a6cf01e18ad10834f86a2_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5b812687ee9710ca3b7d929bbf487afa2a62930796f91de4bc9a575947248444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b812687ee9710ca3b7d929bbf487afa2a62930796f91de4bc9a575947248444->enter($__internal_5b812687ee9710ca3b7d929bbf487afa2a62930796f91de4bc9a575947248444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_42129ff7f8488146bd6ff4fbdb9430b303984ef779e206f3e584f772f0ad8584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42129ff7f8488146bd6ff4fbdb9430b303984ef779e206f3e584f772f0ad8584->enter($__internal_42129ff7f8488146bd6ff4fbdb9430b303984ef779e206f3e584f772f0ad8584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 26, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 26, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 26, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_42129ff7f8488146bd6ff4fbdb9430b303984ef779e206f3e584f772f0ad8584->leave($__internal_42129ff7f8488146bd6ff4fbdb9430b303984ef779e206f3e584f772f0ad8584_prof);

        
        $__internal_5b812687ee9710ca3b7d929bbf487afa2a62930796f91de4bc9a575947248444->leave($__internal_5b812687ee9710ca3b7d929bbf487afa2a62930796f91de4bc9a575947248444_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_77ee0bdfb2fe42bcf64b833973d1476809ad5777e457c9baea00b4c4b90b34d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ee0bdfb2fe42bcf64b833973d1476809ad5777e457c9baea00b4c4b90b34d7->enter($__internal_77ee0bdfb2fe42bcf64b833973d1476809ad5777e457c9baea00b4c4b90b34d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_7ba37533512a5730c55a11556f659905761c8342654b56a347449d310ee9afa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba37533512a5730c55a11556f659905761c8342654b56a347449d310ee9afa2->enter($__internal_7ba37533512a5730c55a11556f659905761c8342654b56a347449d310ee9afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->getSourceContext()); })()), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_7ba37533512a5730c55a11556f659905761c8342654b56a347449d310ee9afa2->leave($__internal_7ba37533512a5730c55a11556f659905761c8342654b56a347449d310ee9afa2_prof);

        
        $__internal_77ee0bdfb2fe42bcf64b833973d1476809ad5777e457c9baea00b4c4b90b34d7->leave($__internal_77ee0bdfb2fe42bcf64b833973d1476809ad5777e457c9baea00b4c4b90b34d7_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0afe7f22302701b9ee3989be88902665e769509cc67cab3ad629f461e525fad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afe7f22302701b9ee3989be88902665e769509cc67cab3ad629f461e525fad2->enter($__internal_0afe7f22302701b9ee3989be88902665e769509cc67cab3ad629f461e525fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_35f9096d732234dc14441e786e5ac85305e3b26179d38efbc4f570f2218769de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f9096d732234dc14441e786e5ac85305e3b26179d38efbc4f570f2218769de->enter($__internal_35f9096d732234dc14441e786e5ac85305e3b26179d38efbc4f570f2218769de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->getSourceContext()); })()), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_35f9096d732234dc14441e786e5ac85305e3b26179d38efbc4f570f2218769de->leave($__internal_35f9096d732234dc14441e786e5ac85305e3b26179d38efbc4f570f2218769de_prof);

        
        $__internal_0afe7f22302701b9ee3989be88902665e769509cc67cab3ad629f461e525fad2->leave($__internal_0afe7f22302701b9ee3989be88902665e769509cc67cab3ad629f461e525fad2_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_dfd1e2769056959dc5dac431f375576be33de9b3c501d44501ef0c4899cf9e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd1e2769056959dc5dac431f375576be33de9b3c501d44501ef0c4899cf9e0c->enter($__internal_dfd1e2769056959dc5dac431f375576be33de9b3c501d44501ef0c4899cf9e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_490878a317705bfd2b0b44d2d9b8a029580c57c2089da8b699b08b635adbf79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_490878a317705bfd2b0b44d2d9b8a029580c57c2089da8b699b08b635adbf79a->enter($__internal_490878a317705bfd2b0b44d2d9b8a029580c57c2089da8b699b08b635adbf79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_490878a317705bfd2b0b44d2d9b8a029580c57c2089da8b699b08b635adbf79a->leave($__internal_490878a317705bfd2b0b44d2d9b8a029580c57c2089da8b699b08b635adbf79a_prof);

        
        $__internal_dfd1e2769056959dc5dac431f375576be33de9b3c501d44501ef0c4899cf9e0c->leave($__internal_dfd1e2769056959dc5dac431f375576be33de9b3c501d44501ef0c4899cf9e0c_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4c9aced749e83c1399c3e3cb0639776c141904d8975d4c9bc341b33493fce806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9aced749e83c1399c3e3cb0639776c141904d8975d4c9bc341b33493fce806->enter($__internal_4c9aced749e83c1399c3e3cb0639776c141904d8975d4c9bc341b33493fce806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b88eb0e21466599dbd9ef7c1f80aff7b64e4720c72eb4cdde6e8e96371a0cef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88eb0e21466599dbd9ef7c1f80aff7b64e4720c72eb4cdde6e8e96371a0cef9->enter($__internal_b88eb0e21466599dbd9ef7c1f80aff7b64e4720c72eb4cdde6e8e96371a0cef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->getSourceContext()); })()), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_b88eb0e21466599dbd9ef7c1f80aff7b64e4720c72eb4cdde6e8e96371a0cef9->leave($__internal_b88eb0e21466599dbd9ef7c1f80aff7b64e4720c72eb4cdde6e8e96371a0cef9_prof);

        
        $__internal_4c9aced749e83c1399c3e3cb0639776c141904d8975d4c9bc341b33493fce806->leave($__internal_4c9aced749e83c1399c3e3cb0639776c141904d8975d4c9bc341b33493fce806_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
