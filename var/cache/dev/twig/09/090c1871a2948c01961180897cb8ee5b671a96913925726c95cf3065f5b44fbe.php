<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_61ae5e96fb7fbcce4a104332fdfb7a4fdd055786548728955d4961870a61a24c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42159682c63bbd9469c73b900f071ecef98e54da38991be731010b14b979b973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42159682c63bbd9469c73b900f071ecef98e54da38991be731010b14b979b973->enter($__internal_42159682c63bbd9469c73b900f071ecef98e54da38991be731010b14b979b973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_431a031d6206d56a9514e9a9c52bf23e886b975bece79aa6169c6d0be9bc0804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431a031d6206d56a9514e9a9c52bf23e886b975bece79aa6169c6d0be9bc0804->enter($__internal_431a031d6206d56a9514e9a9c52bf23e886b975bece79aa6169c6d0be9bc0804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_42159682c63bbd9469c73b900f071ecef98e54da38991be731010b14b979b973->leave($__internal_42159682c63bbd9469c73b900f071ecef98e54da38991be731010b14b979b973_prof);

        
        $__internal_431a031d6206d56a9514e9a9c52bf23e886b975bece79aa6169c6d0be9bc0804->leave($__internal_431a031d6206d56a9514e9a9c52bf23e886b975bece79aa6169c6d0be9bc0804_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_696479b205551b70c6e7256518fb99a762aaaeac4f3d11d0a6350332a7a4176f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696479b205551b70c6e7256518fb99a762aaaeac4f3d11d0a6350332a7a4176f->enter($__internal_696479b205551b70c6e7256518fb99a762aaaeac4f3d11d0a6350332a7a4176f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b21c56871994348db016312b861311bffa78c1e39a92330e91736d80aad4187a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21c56871994348db016312b861311bffa78c1e39a92330e91736d80aad4187a->enter($__internal_b21c56871994348db016312b861311bffa78c1e39a92330e91736d80aad4187a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 6, $this->getSourceContext()); })()) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 9, $this->getSourceContext()); })()))) {
                // line 10
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 10, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 12, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_b21c56871994348db016312b861311bffa78c1e39a92330e91736d80aad4187a->leave($__internal_b21c56871994348db016312b861311bffa78c1e39a92330e91736d80aad4187a_prof);

        
        $__internal_696479b205551b70c6e7256518fb99a762aaaeac4f3d11d0a6350332a7a4176f->leave($__internal_696479b205551b70c6e7256518fb99a762aaaeac4f3d11d0a6350332a7a4176f_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_5e8cf40f71f398e5a6ea5bd0f5aa3ccd3a286e286199c7b8e17ede346b83ca62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8cf40f71f398e5a6ea5bd0f5aa3ccd3a286e286199c7b8e17ede346b83ca62->enter($__internal_5e8cf40f71f398e5a6ea5bd0f5aa3ccd3a286e286199c7b8e17ede346b83ca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_0037e69e639c3d8c3d5a3650c7aabc92b2c0edc573e36faa05f885e1c821d83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0037e69e639c3d8c3d5a3650c7aabc92b2c0edc573e36faa05f885e1c821d83c->enter($__internal_0037e69e639c3d8c3d5a3650c7aabc92b2c0edc573e36faa05f885e1c821d83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_0037e69e639c3d8c3d5a3650c7aabc92b2c0edc573e36faa05f885e1c821d83c->leave($__internal_0037e69e639c3d8c3d5a3650c7aabc92b2c0edc573e36faa05f885e1c821d83c_prof);

        
        $__internal_5e8cf40f71f398e5a6ea5bd0f5aa3ccd3a286e286199c7b8e17ede346b83ca62->leave($__internal_5e8cf40f71f398e5a6ea5bd0f5aa3ccd3a286e286199c7b8e17ede346b83ca62_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ff84362e0c8a2253caaa45eb11d894ea963118ac7b23e05a936fb136b46a96e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff84362e0c8a2253caaa45eb11d894ea963118ac7b23e05a936fb136b46a96e7->enter($__internal_ff84362e0c8a2253caaa45eb11d894ea963118ac7b23e05a936fb136b46a96e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a7fa496169d62d40ab200deec93a9db561f1af1070967649751d79b9b743f4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fa496169d62d40ab200deec93a9db561f1af1070967649751d79b9b743f4a1->enter($__internal_a7fa496169d62d40ab200deec93a9db561f1af1070967649751d79b9b743f4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && (isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 24, $this->getSourceContext()); })()))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 27, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 27, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 27, $this->getSourceContext()); })()))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_a7fa496169d62d40ab200deec93a9db561f1af1070967649751d79b9b743f4a1->leave($__internal_a7fa496169d62d40ab200deec93a9db561f1af1070967649751d79b9b743f4a1_prof);

        
        $__internal_ff84362e0c8a2253caaa45eb11d894ea963118ac7b23e05a936fb136b46a96e7->leave($__internal_ff84362e0c8a2253caaa45eb11d894ea963118ac7b23e05a936fb136b46a96e7_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_01ff87a842746d2982dbaa10ee51cd4347de084b89d76e2aa3f5f924457cd87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ff87a842746d2982dbaa10ee51cd4347de084b89d76e2aa3f5f924457cd87b->enter($__internal_01ff87a842746d2982dbaa10ee51cd4347de084b89d76e2aa3f5f924457cd87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_00b8ce2207ec335c32b6c59876797b541ed4e6b3865f4d133fb53d9a186267a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b8ce2207ec335c32b6c59876797b541ed4e6b3865f4d133fb53d9a186267a7->enter($__internal_00b8ce2207ec335c32b6c59876797b541ed4e6b3865f4d133fb53d9a186267a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 39, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 39, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 39, $this->getSourceContext()); })()))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->getSourceContext()); })()), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_00b8ce2207ec335c32b6c59876797b541ed4e6b3865f4d133fb53d9a186267a7->leave($__internal_00b8ce2207ec335c32b6c59876797b541ed4e6b3865f4d133fb53d9a186267a7_prof);

        
        $__internal_01ff87a842746d2982dbaa10ee51cd4347de084b89d76e2aa3f5f924457cd87b->leave($__internal_01ff87a842746d2982dbaa10ee51cd4347de084b89d76e2aa3f5f924457cd87b_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_3cea3b1d6bd522a279e962183cdb464939d462bdd0b010dd45edc16b7a3518c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cea3b1d6bd522a279e962183cdb464939d462bdd0b010dd45edc16b7a3518c3->enter($__internal_3cea3b1d6bd522a279e962183cdb464939d462bdd0b010dd45edc16b7a3518c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_678156de28885e69048bd4131ce62314ca14fcb372ecc06ed97e112749e43486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678156de28885e69048bd4131ce62314ca14fcb372ecc06ed97e112749e43486->enter($__internal_678156de28885e69048bd4131ce62314ca14fcb372ecc06ed97e112749e43486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->getSourceContext()); })()), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_678156de28885e69048bd4131ce62314ca14fcb372ecc06ed97e112749e43486->leave($__internal_678156de28885e69048bd4131ce62314ca14fcb372ecc06ed97e112749e43486_prof);

        
        $__internal_3cea3b1d6bd522a279e962183cdb464939d462bdd0b010dd45edc16b7a3518c3->leave($__internal_3cea3b1d6bd522a279e962183cdb464939d462bdd0b010dd45edc16b7a3518c3_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_bd0dfbf4d0ea2556b9f192abd1d3c8dc524b0bb819ab61fc06f81f47f2cf4c48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0dfbf4d0ea2556b9f192abd1d3c8dc524b0bb819ab61fc06f81f47f2cf4c48->enter($__internal_bd0dfbf4d0ea2556b9f192abd1d3c8dc524b0bb819ab61fc06f81f47f2cf4c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_883556c9d78b729a6471360c594cf4ce65f70b7e7e27f4d9e4cc7e10a88622c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883556c9d78b729a6471360c594cf4ce65f70b7e7e27f4d9e4cc7e10a88622c6->enter($__internal_883556c9d78b729a6471360c594cf4ce65f70b7e7e27f4d9e4cc7e10a88622c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_883556c9d78b729a6471360c594cf4ce65f70b7e7e27f4d9e4cc7e10a88622c6->leave($__internal_883556c9d78b729a6471360c594cf4ce65f70b7e7e27f4d9e4cc7e10a88622c6_prof);

        
        $__internal_bd0dfbf4d0ea2556b9f192abd1d3c8dc524b0bb819ab61fc06f81f47f2cf4c48->leave($__internal_bd0dfbf4d0ea2556b9f192abd1d3c8dc524b0bb819ab61fc06f81f47f2cf4c48_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_af7f2fa7f1622ecbd20bd66beb5972b1e1a46d2eb7aca9c303527ea31e85948b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7f2fa7f1622ecbd20bd66beb5972b1e1a46d2eb7aca9c303527ea31e85948b->enter($__internal_af7f2fa7f1622ecbd20bd66beb5972b1e1a46d2eb7aca9c303527ea31e85948b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_381dec3db5eddde00c3692f4531113236eae257a748a9d94adea2fc4e2d2f972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381dec3db5eddde00c3692f4531113236eae257a748a9d94adea2fc4e2d2f972->enter($__internal_381dec3db5eddde00c3692f4531113236eae257a748a9d94adea2fc4e2d2f972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_381dec3db5eddde00c3692f4531113236eae257a748a9d94adea2fc4e2d2f972->leave($__internal_381dec3db5eddde00c3692f4531113236eae257a748a9d94adea2fc4e2d2f972_prof);

        
        $__internal_af7f2fa7f1622ecbd20bd66beb5972b1e1a46d2eb7aca9c303527ea31e85948b->leave($__internal_af7f2fa7f1622ecbd20bd66beb5972b1e1a46d2eb7aca9c303527ea31e85948b_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d83f9773cec92b731525410f319909c1ffad90e8367140e66cfc96a18fded98e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83f9773cec92b731525410f319909c1ffad90e8367140e66cfc96a18fded98e->enter($__internal_d83f9773cec92b731525410f319909c1ffad90e8367140e66cfc96a18fded98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_851aef40b9442331db4e4612af5d0e4585772804292452ac3d7d5f0b9cbec6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851aef40b9442331db4e4612af5d0e4585772804292452ac3d7d5f0b9cbec6fd->enter($__internal_851aef40b9442331db4e4612af5d0e4585772804292452ac3d7d5f0b9cbec6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->getSourceContext()); })()), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->getSourceContext()); })()), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_851aef40b9442331db4e4612af5d0e4585772804292452ac3d7d5f0b9cbec6fd->leave($__internal_851aef40b9442331db4e4612af5d0e4585772804292452ac3d7d5f0b9cbec6fd_prof);

        
        $__internal_d83f9773cec92b731525410f319909c1ffad90e8367140e66cfc96a18fded98e->leave($__internal_d83f9773cec92b731525410f319909c1ffad90e8367140e66cfc96a18fded98e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
