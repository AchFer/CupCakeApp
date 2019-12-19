<?php

/* form_div_layout.html.twig */
class __TwigTemplate_981960add057f9780f026d72fdb6502354802a103547f5e725394501bb442752 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a1382112172be6160bd0d64349ec1eefea36537e935fa24fa532e0ceb291939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1382112172be6160bd0d64349ec1eefea36537e935fa24fa532e0ceb291939->enter($__internal_1a1382112172be6160bd0d64349ec1eefea36537e935fa24fa532e0ceb291939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_550ae5d3935fa0163772457301d3b18180afe898f0d79bcd4d9f617b9758139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550ae5d3935fa0163772457301d3b18180afe898f0d79bcd4d9f617b9758139f->enter($__internal_550ae5d3935fa0163772457301d3b18180afe898f0d79bcd4d9f617b9758139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 234
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 239
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 249
        $this->displayBlock('color_widget', $context, $blocks);
        // line 256
        $this->displayBlock('form_label', $context, $blocks);
        // line 278
        $this->displayBlock('button_label', $context, $blocks);
        // line 282
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 290
        $this->displayBlock('form_row', $context, $blocks);
        // line 298
        $this->displayBlock('button_row', $context, $blocks);
        // line 304
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 310
        $this->displayBlock('form', $context, $blocks);
        // line 316
        $this->displayBlock('form_start', $context, $blocks);
        // line 330
        $this->displayBlock('form_end', $context, $blocks);
        // line 337
        $this->displayBlock('form_errors', $context, $blocks);
        // line 347
        $this->displayBlock('form_rest', $context, $blocks);
        // line 368
        echo "
";
        // line 371
        $this->displayBlock('form_rows', $context, $blocks);
        // line 377
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 384
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_1a1382112172be6160bd0d64349ec1eefea36537e935fa24fa532e0ceb291939->leave($__internal_1a1382112172be6160bd0d64349ec1eefea36537e935fa24fa532e0ceb291939_prof);

        
        $__internal_550ae5d3935fa0163772457301d3b18180afe898f0d79bcd4d9f617b9758139f->leave($__internal_550ae5d3935fa0163772457301d3b18180afe898f0d79bcd4d9f617b9758139f_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_d95f9df3e90a1d13a804d26ca6ea5036eb2ec7569a56f0533d97ec3414bfbe24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95f9df3e90a1d13a804d26ca6ea5036eb2ec7569a56f0533d97ec3414bfbe24->enter($__internal_d95f9df3e90a1d13a804d26ca6ea5036eb2ec7569a56f0533d97ec3414bfbe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_0b7781cc9cd907a69c48e362a112f84b8e2e3f40f984f739ecaaceda5d6fe75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b7781cc9cd907a69c48e362a112f84b8e2e3f40f984f739ecaaceda5d6fe75d->enter($__internal_0b7781cc9cd907a69c48e362a112f84b8e2e3f40f984f739ecaaceda5d6fe75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_0b7781cc9cd907a69c48e362a112f84b8e2e3f40f984f739ecaaceda5d6fe75d->leave($__internal_0b7781cc9cd907a69c48e362a112f84b8e2e3f40f984f739ecaaceda5d6fe75d_prof);

        
        $__internal_d95f9df3e90a1d13a804d26ca6ea5036eb2ec7569a56f0533d97ec3414bfbe24->leave($__internal_d95f9df3e90a1d13a804d26ca6ea5036eb2ec7569a56f0533d97ec3414bfbe24_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4fc602201a183450f35b6d9b8b826fefa8b72244550c73a86690c51c74f89c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc602201a183450f35b6d9b8b826fefa8b72244550c73a86690c51c74f89c30->enter($__internal_4fc602201a183450f35b6d9b8b826fefa8b72244550c73a86690c51c74f89c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_a5ae6fad4e57a3dc354243f98d7d659a1fde1431d1fed0f6a5debdf0ccc09694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ae6fad4e57a3dc354243f98d7d659a1fde1431d1fed0f6a5debdf0ccc09694->enter($__internal_a5ae6fad4e57a3dc354243f98d7d659a1fde1431d1fed0f6a5debdf0ccc09694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_a5ae6fad4e57a3dc354243f98d7d659a1fde1431d1fed0f6a5debdf0ccc09694->leave($__internal_a5ae6fad4e57a3dc354243f98d7d659a1fde1431d1fed0f6a5debdf0ccc09694_prof);

        
        $__internal_4fc602201a183450f35b6d9b8b826fefa8b72244550c73a86690c51c74f89c30->leave($__internal_4fc602201a183450f35b6d9b8b826fefa8b72244550c73a86690c51c74f89c30_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b66121d3ff5eb07143d68e0ad26db3846828cd479b1a4be4508d6c45ebe25e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b66121d3ff5eb07143d68e0ad26db3846828cd479b1a4be4508d6c45ebe25e02->enter($__internal_b66121d3ff5eb07143d68e0ad26db3846828cd479b1a4be4508d6c45ebe25e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_4271a20182f0934496f4894552084696628d6014258e3371f3b0a3fba4578b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4271a20182f0934496f4894552084696628d6014258e3371f3b0a3fba4578b0c->enter($__internal_4271a20182f0934496f4894552084696628d6014258e3371f3b0a3fba4578b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_4271a20182f0934496f4894552084696628d6014258e3371f3b0a3fba4578b0c->leave($__internal_4271a20182f0934496f4894552084696628d6014258e3371f3b0a3fba4578b0c_prof);

        
        $__internal_b66121d3ff5eb07143d68e0ad26db3846828cd479b1a4be4508d6c45ebe25e02->leave($__internal_b66121d3ff5eb07143d68e0ad26db3846828cd479b1a4be4508d6c45ebe25e02_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_06a235bcb1f437e054c1868051b2738b370589c27bd7da62b4c87d1cfca62a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a235bcb1f437e054c1868051b2738b370589c27bd7da62b4c87d1cfca62a72->enter($__internal_06a235bcb1f437e054c1868051b2738b370589c27bd7da62b4c87d1cfca62a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_ea99898d77f83a9e8aae793a4ac7ed95d7e2aa7e0ff708f5d026e96c6dd9eb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea99898d77f83a9e8aae793a4ac7ed95d7e2aa7e0ff708f5d026e96c6dd9eb56->enter($__internal_ea99898d77f83a9e8aae793a4ac7ed95d7e2aa7e0ff708f5d026e96c6dd9eb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_ea99898d77f83a9e8aae793a4ac7ed95d7e2aa7e0ff708f5d026e96c6dd9eb56->leave($__internal_ea99898d77f83a9e8aae793a4ac7ed95d7e2aa7e0ff708f5d026e96c6dd9eb56_prof);

        
        $__internal_06a235bcb1f437e054c1868051b2738b370589c27bd7da62b4c87d1cfca62a72->leave($__internal_06a235bcb1f437e054c1868051b2738b370589c27bd7da62b4c87d1cfca62a72_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8afc56980a1955fce2f6d21789354310128d360b7268de944ef94c517fe931e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afc56980a1955fce2f6d21789354310128d360b7268de944ef94c517fe931e8->enter($__internal_8afc56980a1955fce2f6d21789354310128d360b7268de944ef94c517fe931e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_778c8fa6f1a2f1107e5cabe3d8be6b025beabb1b119b3b1c9e6223bce8cb5a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c8fa6f1a2f1107e5cabe3d8be6b025beabb1b119b3b1c9e6223bce8cb5a1d->enter($__internal_778c8fa6f1a2f1107e5cabe3d8be6b025beabb1b119b3b1c9e6223bce8cb5a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_778c8fa6f1a2f1107e5cabe3d8be6b025beabb1b119b3b1c9e6223bce8cb5a1d->leave($__internal_778c8fa6f1a2f1107e5cabe3d8be6b025beabb1b119b3b1c9e6223bce8cb5a1d_prof);

        
        $__internal_8afc56980a1955fce2f6d21789354310128d360b7268de944ef94c517fe931e8->leave($__internal_8afc56980a1955fce2f6d21789354310128d360b7268de944ef94c517fe931e8_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_8d6a0f900312612aa7758803a9506962326b6ed44475d407a69284de14b42d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6a0f900312612aa7758803a9506962326b6ed44475d407a69284de14b42d62->enter($__internal_8d6a0f900312612aa7758803a9506962326b6ed44475d407a69284de14b42d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_e8e8a35d95b1bcad44abe7fb76c913aef2434213226cf693fc023b28fa3236fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e8a35d95b1bcad44abe7fb76c913aef2434213226cf693fc023b28fa3236fd->enter($__internal_e8e8a35d95b1bcad44abe7fb76c913aef2434213226cf693fc023b28fa3236fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_e8e8a35d95b1bcad44abe7fb76c913aef2434213226cf693fc023b28fa3236fd->leave($__internal_e8e8a35d95b1bcad44abe7fb76c913aef2434213226cf693fc023b28fa3236fd_prof);

        
        $__internal_8d6a0f900312612aa7758803a9506962326b6ed44475d407a69284de14b42d62->leave($__internal_8d6a0f900312612aa7758803a9506962326b6ed44475d407a69284de14b42d62_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_0b7d1c087c4465052b8b6d1d63ec0784e0fc865d4ee7b2d24c1b8b00cf4f70c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7d1c087c4465052b8b6d1d63ec0784e0fc865d4ee7b2d24c1b8b00cf4f70c5->enter($__internal_0b7d1c087c4465052b8b6d1d63ec0784e0fc865d4ee7b2d24c1b8b00cf4f70c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_7316af77f2b70b3e40591493d87ea48aea1befe14b447327a81f098219ed8b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7316af77f2b70b3e40591493d87ea48aea1befe14b447327a81f098219ed8b36->enter($__internal_7316af77f2b70b3e40591493d87ea48aea1befe14b447327a81f098219ed8b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_7316af77f2b70b3e40591493d87ea48aea1befe14b447327a81f098219ed8b36->leave($__internal_7316af77f2b70b3e40591493d87ea48aea1befe14b447327a81f098219ed8b36_prof);

        
        $__internal_0b7d1c087c4465052b8b6d1d63ec0784e0fc865d4ee7b2d24c1b8b00cf4f70c5->leave($__internal_0b7d1c087c4465052b8b6d1d63ec0784e0fc865d4ee7b2d24c1b8b00cf4f70c5_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dc57c6735d2516329de830f2504eeff7e66582dac9c61ad7983c2e9f49b5665d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc57c6735d2516329de830f2504eeff7e66582dac9c61ad7983c2e9f49b5665d->enter($__internal_dc57c6735d2516329de830f2504eeff7e66582dac9c61ad7983c2e9f49b5665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_274a083df6a0c7e299d5c0a774cdb317a1d2c767238330cc5c5c85724250e609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274a083df6a0c7e299d5c0a774cdb317a1d2c767238330cc5c5c85724250e609->enter($__internal_274a083df6a0c7e299d5c0a774cdb317a1d2c767238330cc5c5c85724250e609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_274a083df6a0c7e299d5c0a774cdb317a1d2c767238330cc5c5c85724250e609->leave($__internal_274a083df6a0c7e299d5c0a774cdb317a1d2c767238330cc5c5c85724250e609_prof);

        
        $__internal_dc57c6735d2516329de830f2504eeff7e66582dac9c61ad7983c2e9f49b5665d->leave($__internal_dc57c6735d2516329de830f2504eeff7e66582dac9c61ad7983c2e9f49b5665d_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_18fd59bc842e3fd131f58439fa90121cea5d6ad4df1e456c28a7f07e4d2aa44d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fd59bc842e3fd131f58439fa90121cea5d6ad4df1e456c28a7f07e4d2aa44d->enter($__internal_18fd59bc842e3fd131f58439fa90121cea5d6ad4df1e456c28a7f07e4d2aa44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_26854bf60c989b77bc490ca14572868228261219a28a098cf8a8d99d91335723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26854bf60c989b77bc490ca14572868228261219a28a098cf8a8d99d91335723->enter($__internal_26854bf60c989b77bc490ca14572868228261219a28a098cf8a8d99d91335723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_9b6caaef048eb5faf966943fad92cf0ac4f7abb1abfc786017eec078245caff6 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_9b6caaef048eb5faf966943fad92cf0ac4f7abb1abfc786017eec078245caff6)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_9b6caaef048eb5faf966943fad92cf0ac4f7abb1abfc786017eec078245caff6);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_26854bf60c989b77bc490ca14572868228261219a28a098cf8a8d99d91335723->leave($__internal_26854bf60c989b77bc490ca14572868228261219a28a098cf8a8d99d91335723_prof);

        
        $__internal_18fd59bc842e3fd131f58439fa90121cea5d6ad4df1e456c28a7f07e4d2aa44d->leave($__internal_18fd59bc842e3fd131f58439fa90121cea5d6ad4df1e456c28a7f07e4d2aa44d_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e6af219b7947d99a5621cd66d6bc7b3fbdd719c7c7b2922fc0e0d312bf9b2076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6af219b7947d99a5621cd66d6bc7b3fbdd719c7c7b2922fc0e0d312bf9b2076->enter($__internal_e6af219b7947d99a5621cd66d6bc7b3fbdd719c7c7b2922fc0e0d312bf9b2076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_af94a372764d9a4a28ddf8812930e4d131542d83da1a02bb10b719a029157e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af94a372764d9a4a28ddf8812930e4d131542d83da1a02bb10b719a029157e8a->enter($__internal_af94a372764d9a4a28ddf8812930e4d131542d83da1a02bb10b719a029157e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_af94a372764d9a4a28ddf8812930e4d131542d83da1a02bb10b719a029157e8a->leave($__internal_af94a372764d9a4a28ddf8812930e4d131542d83da1a02bb10b719a029157e8a_prof);

        
        $__internal_e6af219b7947d99a5621cd66d6bc7b3fbdd719c7c7b2922fc0e0d312bf9b2076->leave($__internal_e6af219b7947d99a5621cd66d6bc7b3fbdd719c7c7b2922fc0e0d312bf9b2076_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1d2791a4830b698c112421ab9ca8235d765925ff1f8e19410190421ecfb58c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2791a4830b698c112421ab9ca8235d765925ff1f8e19410190421ecfb58c0c->enter($__internal_1d2791a4830b698c112421ab9ca8235d765925ff1f8e19410190421ecfb58c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_ebb10d58f9b341d05e686d15d3109e694270f9b60cae9729e4c94876a7236de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb10d58f9b341d05e686d15d3109e694270f9b60cae9729e4c94876a7236de8->enter($__internal_ebb10d58f9b341d05e686d15d3109e694270f9b60cae9729e4c94876a7236de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ebb10d58f9b341d05e686d15d3109e694270f9b60cae9729e4c94876a7236de8->leave($__internal_ebb10d58f9b341d05e686d15d3109e694270f9b60cae9729e4c94876a7236de8_prof);

        
        $__internal_1d2791a4830b698c112421ab9ca8235d765925ff1f8e19410190421ecfb58c0c->leave($__internal_1d2791a4830b698c112421ab9ca8235d765925ff1f8e19410190421ecfb58c0c_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_08b74c49d5a9b3faacfbb375e33402e5cbdd585976c49f30bbd69c1ce667484b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b74c49d5a9b3faacfbb375e33402e5cbdd585976c49f30bbd69c1ce667484b->enter($__internal_08b74c49d5a9b3faacfbb375e33402e5cbdd585976c49f30bbd69c1ce667484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d238f9f2c199f2aaad5ddcb59da3217d22471650c16abc97652e069a8bb37b00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d238f9f2c199f2aaad5ddcb59da3217d22471650c16abc97652e069a8bb37b00->enter($__internal_d238f9f2c199f2aaad5ddcb59da3217d22471650c16abc97652e069a8bb37b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_d238f9f2c199f2aaad5ddcb59da3217d22471650c16abc97652e069a8bb37b00->leave($__internal_d238f9f2c199f2aaad5ddcb59da3217d22471650c16abc97652e069a8bb37b00_prof);

        
        $__internal_08b74c49d5a9b3faacfbb375e33402e5cbdd585976c49f30bbd69c1ce667484b->leave($__internal_08b74c49d5a9b3faacfbb375e33402e5cbdd585976c49f30bbd69c1ce667484b_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_aaf0cdc2bcaaba7ad0dce971bc576011c556b1d329a612bfdc70c95c5ff07c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf0cdc2bcaaba7ad0dce971bc576011c556b1d329a612bfdc70c95c5ff07c03->enter($__internal_aaf0cdc2bcaaba7ad0dce971bc576011c556b1d329a612bfdc70c95c5ff07c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_3c80e9aeb3a9af86055a55d5348b0ff4924c3a90a83e690c1748de7db8754223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c80e9aeb3a9af86055a55d5348b0ff4924c3a90a83e690c1748de7db8754223->enter($__internal_3c80e9aeb3a9af86055a55d5348b0ff4924c3a90a83e690c1748de7db8754223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_3c80e9aeb3a9af86055a55d5348b0ff4924c3a90a83e690c1748de7db8754223->leave($__internal_3c80e9aeb3a9af86055a55d5348b0ff4924c3a90a83e690c1748de7db8754223_prof);

        
        $__internal_aaf0cdc2bcaaba7ad0dce971bc576011c556b1d329a612bfdc70c95c5ff07c03->leave($__internal_aaf0cdc2bcaaba7ad0dce971bc576011c556b1d329a612bfdc70c95c5ff07c03_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ff3f35cc9ddc8e52b2522c928236032e65bc00a296d963b003c95abd3c150d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff3f35cc9ddc8e52b2522c928236032e65bc00a296d963b003c95abd3c150d53->enter($__internal_ff3f35cc9ddc8e52b2522c928236032e65bc00a296d963b003c95abd3c150d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2cf7c4ceba14951b2cb3a70d27755e424ca36605a3453a3a8579c8204683e87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf7c4ceba14951b2cb3a70d27755e424ca36605a3453a3a8579c8204683e87c->enter($__internal_2cf7c4ceba14951b2cb3a70d27755e424ca36605a3453a3a8579c8204683e87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_2cf7c4ceba14951b2cb3a70d27755e424ca36605a3453a3a8579c8204683e87c->leave($__internal_2cf7c4ceba14951b2cb3a70d27755e424ca36605a3453a3a8579c8204683e87c_prof);

        
        $__internal_ff3f35cc9ddc8e52b2522c928236032e65bc00a296d963b003c95abd3c150d53->leave($__internal_ff3f35cc9ddc8e52b2522c928236032e65bc00a296d963b003c95abd3c150d53_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_ece3bb4442161f3f51b2ba5002904abb2208495d9b4148d5de1d685e4e22fd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece3bb4442161f3f51b2ba5002904abb2208495d9b4148d5de1d685e4e22fd7d->enter($__internal_ece3bb4442161f3f51b2ba5002904abb2208495d9b4148d5de1d685e4e22fd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_505bf4a7281c5cd798342e352cb7c3a3cc0e9dfb47856f3d41c77980c52b917e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505bf4a7281c5cd798342e352cb7c3a3cc0e9dfb47856f3d41c77980c52b917e->enter($__internal_505bf4a7281c5cd798342e352cb7c3a3cc0e9dfb47856f3d41c77980c52b917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_505bf4a7281c5cd798342e352cb7c3a3cc0e9dfb47856f3d41c77980c52b917e->leave($__internal_505bf4a7281c5cd798342e352cb7c3a3cc0e9dfb47856f3d41c77980c52b917e_prof);

        
        $__internal_ece3bb4442161f3f51b2ba5002904abb2208495d9b4148d5de1d685e4e22fd7d->leave($__internal_ece3bb4442161f3f51b2ba5002904abb2208495d9b4148d5de1d685e4e22fd7d_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_cc54520dae1725ed438fc5f818797b06398ff6157f200e76d2c9a7abff5aa656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc54520dae1725ed438fc5f818797b06398ff6157f200e76d2c9a7abff5aa656->enter($__internal_cc54520dae1725ed438fc5f818797b06398ff6157f200e76d2c9a7abff5aa656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_707e369ff3fc6ce776a4eb7973583b3fe534c34ddea9ee51f83a87614f33f995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707e369ff3fc6ce776a4eb7973583b3fe534c34ddea9ee51f83a87614f33f995->enter($__internal_707e369ff3fc6ce776a4eb7973583b3fe534c34ddea9ee51f83a87614f33f995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_707e369ff3fc6ce776a4eb7973583b3fe534c34ddea9ee51f83a87614f33f995->leave($__internal_707e369ff3fc6ce776a4eb7973583b3fe534c34ddea9ee51f83a87614f33f995_prof);

        
        $__internal_cc54520dae1725ed438fc5f818797b06398ff6157f200e76d2c9a7abff5aa656->leave($__internal_cc54520dae1725ed438fc5f818797b06398ff6157f200e76d2c9a7abff5aa656_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_7a4c37bf88ed4cad69dc708b16a7a022e930c586bbf724a8ca2a949dfff1f745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a4c37bf88ed4cad69dc708b16a7a022e930c586bbf724a8ca2a949dfff1f745->enter($__internal_7a4c37bf88ed4cad69dc708b16a7a022e930c586bbf724a8ca2a949dfff1f745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_4509bd47bfb26aae5a2deb0a092049a087d7804488425a2a3e540ddd0b00a2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4509bd47bfb26aae5a2deb0a092049a087d7804488425a2a3e540ddd0b00a2e3->enter($__internal_4509bd47bfb26aae5a2deb0a092049a087d7804488425a2a3e540ddd0b00a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4509bd47bfb26aae5a2deb0a092049a087d7804488425a2a3e540ddd0b00a2e3->leave($__internal_4509bd47bfb26aae5a2deb0a092049a087d7804488425a2a3e540ddd0b00a2e3_prof);

        
        $__internal_7a4c37bf88ed4cad69dc708b16a7a022e930c586bbf724a8ca2a949dfff1f745->leave($__internal_7a4c37bf88ed4cad69dc708b16a7a022e930c586bbf724a8ca2a949dfff1f745_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d4bbadaf3e6f29f36697e68657bb25ca3c7eb34d066c96e97b0d4208ef0180a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bbadaf3e6f29f36697e68657bb25ca3c7eb34d066c96e97b0d4208ef0180a0->enter($__internal_d4bbadaf3e6f29f36697e68657bb25ca3c7eb34d066c96e97b0d4208ef0180a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_07d814d5c11243efc25cc9f479ba6d93836a72fbd6fdbf60c7cef79cb8377453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d814d5c11243efc25cc9f479ba6d93836a72fbd6fdbf60c7cef79cb8377453->enter($__internal_07d814d5c11243efc25cc9f479ba6d93836a72fbd6fdbf60c7cef79cb8377453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_07d814d5c11243efc25cc9f479ba6d93836a72fbd6fdbf60c7cef79cb8377453->leave($__internal_07d814d5c11243efc25cc9f479ba6d93836a72fbd6fdbf60c7cef79cb8377453_prof);

        
        $__internal_d4bbadaf3e6f29f36697e68657bb25ca3c7eb34d066c96e97b0d4208ef0180a0->leave($__internal_d4bbadaf3e6f29f36697e68657bb25ca3c7eb34d066c96e97b0d4208ef0180a0_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_988d993e8afeeb208cbf5487d445df47500f0fce2ec62bfb68ef6ecc734bce1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_988d993e8afeeb208cbf5487d445df47500f0fce2ec62bfb68ef6ecc734bce1a->enter($__internal_988d993e8afeeb208cbf5487d445df47500f0fce2ec62bfb68ef6ecc734bce1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_0361dbd0da4c6ecdb526e9a26ae3d891a8ca1bb7f87226281f3e5122b43e034b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0361dbd0da4c6ecdb526e9a26ae3d891a8ca1bb7f87226281f3e5122b43e034b->enter($__internal_0361dbd0da4c6ecdb526e9a26ae3d891a8ca1bb7f87226281f3e5122b43e034b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0361dbd0da4c6ecdb526e9a26ae3d891a8ca1bb7f87226281f3e5122b43e034b->leave($__internal_0361dbd0da4c6ecdb526e9a26ae3d891a8ca1bb7f87226281f3e5122b43e034b_prof);

        
        $__internal_988d993e8afeeb208cbf5487d445df47500f0fce2ec62bfb68ef6ecc734bce1a->leave($__internal_988d993e8afeeb208cbf5487d445df47500f0fce2ec62bfb68ef6ecc734bce1a_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_fa1517bbfd7e7c152e053ac1d28aae7f58dbf31948c698108fcb1c9db114b7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1517bbfd7e7c152e053ac1d28aae7f58dbf31948c698108fcb1c9db114b7e5->enter($__internal_fa1517bbfd7e7c152e053ac1d28aae7f58dbf31948c698108fcb1c9db114b7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_6d7b68cc7ab4b5a42cdacb548102f557111836d5156ee16a9354e1a189e5f5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7b68cc7ab4b5a42cdacb548102f557111836d5156ee16a9354e1a189e5f5b5->enter($__internal_6d7b68cc7ab4b5a42cdacb548102f557111836d5156ee16a9354e1a189e5f5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6d7b68cc7ab4b5a42cdacb548102f557111836d5156ee16a9354e1a189e5f5b5->leave($__internal_6d7b68cc7ab4b5a42cdacb548102f557111836d5156ee16a9354e1a189e5f5b5_prof);

        
        $__internal_fa1517bbfd7e7c152e053ac1d28aae7f58dbf31948c698108fcb1c9db114b7e5->leave($__internal_fa1517bbfd7e7c152e053ac1d28aae7f58dbf31948c698108fcb1c9db114b7e5_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_55955b8364b7f085fa10217c7343ead5f5934669e717e8026beb30012aa1bc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55955b8364b7f085fa10217c7343ead5f5934669e717e8026beb30012aa1bc20->enter($__internal_55955b8364b7f085fa10217c7343ead5f5934669e717e8026beb30012aa1bc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0fe97c2551ea72bc2b636b9a174790996a24834112dd24c8dfd0143cc32a7c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe97c2551ea72bc2b636b9a174790996a24834112dd24c8dfd0143cc32a7c8b->enter($__internal_0fe97c2551ea72bc2b636b9a174790996a24834112dd24c8dfd0143cc32a7c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_0fe97c2551ea72bc2b636b9a174790996a24834112dd24c8dfd0143cc32a7c8b->leave($__internal_0fe97c2551ea72bc2b636b9a174790996a24834112dd24c8dfd0143cc32a7c8b_prof);

        
        $__internal_55955b8364b7f085fa10217c7343ead5f5934669e717e8026beb30012aa1bc20->leave($__internal_55955b8364b7f085fa10217c7343ead5f5934669e717e8026beb30012aa1bc20_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_2b4f82da4f3340e6718764a3f408f7bbba0298c4d7b4e832d8d6dba24d77a2cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4f82da4f3340e6718764a3f408f7bbba0298c4d7b4e832d8d6dba24d77a2cb->enter($__internal_2b4f82da4f3340e6718764a3f408f7bbba0298c4d7b4e832d8d6dba24d77a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_fbc644fee8429401ec15e64557c3d915d52c336c0fff4f3fcfaed5dbbbbc1c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc644fee8429401ec15e64557c3d915d52c336c0fff4f3fcfaed5dbbbbc1c01->enter($__internal_fbc644fee8429401ec15e64557c3d915d52c336c0fff4f3fcfaed5dbbbbc1c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fbc644fee8429401ec15e64557c3d915d52c336c0fff4f3fcfaed5dbbbbc1c01->leave($__internal_fbc644fee8429401ec15e64557c3d915d52c336c0fff4f3fcfaed5dbbbbc1c01_prof);

        
        $__internal_2b4f82da4f3340e6718764a3f408f7bbba0298c4d7b4e832d8d6dba24d77a2cb->leave($__internal_2b4f82da4f3340e6718764a3f408f7bbba0298c4d7b4e832d8d6dba24d77a2cb_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_9dca0fc75d5d464259bf04266d7a84cf6c87c8e957633c316fbf6eb26d8a8e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dca0fc75d5d464259bf04266d7a84cf6c87c8e957633c316fbf6eb26d8a8e7a->enter($__internal_9dca0fc75d5d464259bf04266d7a84cf6c87c8e957633c316fbf6eb26d8a8e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_a904e03f22ff8f0c0082970613c7dd8c30edb7e0c6f49258be4a58cba635fcd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a904e03f22ff8f0c0082970613c7dd8c30edb7e0c6f49258be4a58cba635fcd5->enter($__internal_a904e03f22ff8f0c0082970613c7dd8c30edb7e0c6f49258be4a58cba635fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a904e03f22ff8f0c0082970613c7dd8c30edb7e0c6f49258be4a58cba635fcd5->leave($__internal_a904e03f22ff8f0c0082970613c7dd8c30edb7e0c6f49258be4a58cba635fcd5_prof);

        
        $__internal_9dca0fc75d5d464259bf04266d7a84cf6c87c8e957633c316fbf6eb26d8a8e7a->leave($__internal_9dca0fc75d5d464259bf04266d7a84cf6c87c8e957633c316fbf6eb26d8a8e7a_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_b63dfe0718b86d6208f381dc34db76e9da7860efd37cdcc9563aab620b60cf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63dfe0718b86d6208f381dc34db76e9da7860efd37cdcc9563aab620b60cf54->enter($__internal_b63dfe0718b86d6208f381dc34db76e9da7860efd37cdcc9563aab620b60cf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_20fc99901d8260cb89eaf567ab947e977aebed8755372e0d183bd7365450bde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20fc99901d8260cb89eaf567ab947e977aebed8755372e0d183bd7365450bde7->enter($__internal_20fc99901d8260cb89eaf567ab947e977aebed8755372e0d183bd7365450bde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_20fc99901d8260cb89eaf567ab947e977aebed8755372e0d183bd7365450bde7->leave($__internal_20fc99901d8260cb89eaf567ab947e977aebed8755372e0d183bd7365450bde7_prof);

        
        $__internal_b63dfe0718b86d6208f381dc34db76e9da7860efd37cdcc9563aab620b60cf54->leave($__internal_b63dfe0718b86d6208f381dc34db76e9da7860efd37cdcc9563aab620b60cf54_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_46226f2218ed3132d8e665d524904d0e0d5f02b5af3a4c52d41564f830a9f098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46226f2218ed3132d8e665d524904d0e0d5f02b5af3a4c52d41564f830a9f098->enter($__internal_46226f2218ed3132d8e665d524904d0e0d5f02b5af3a4c52d41564f830a9f098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_d6b270371f7e62f23c483069202af361d6c8efa03c1f25934758f1c0543aea17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b270371f7e62f23c483069202af361d6c8efa03c1f25934758f1c0543aea17->enter($__internal_d6b270371f7e62f23c483069202af361d6c8efa03c1f25934758f1c0543aea17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d6b270371f7e62f23c483069202af361d6c8efa03c1f25934758f1c0543aea17->leave($__internal_d6b270371f7e62f23c483069202af361d6c8efa03c1f25934758f1c0543aea17_prof);

        
        $__internal_46226f2218ed3132d8e665d524904d0e0d5f02b5af3a4c52d41564f830a9f098->leave($__internal_46226f2218ed3132d8e665d524904d0e0d5f02b5af3a4c52d41564f830a9f098_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_75081f5793defba2e2210eee27d526d3ae01722926f4f2cc1f7d147640528ecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75081f5793defba2e2210eee27d526d3ae01722926f4f2cc1f7d147640528ecd->enter($__internal_75081f5793defba2e2210eee27d526d3ae01722926f4f2cc1f7d147640528ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_230eebcb537353cb3f61fdcd18504e5f23139cd9f2a3ede9bbc7527c7a80ed03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230eebcb537353cb3f61fdcd18504e5f23139cd9f2a3ede9bbc7527c7a80ed03->enter($__internal_230eebcb537353cb3f61fdcd18504e5f23139cd9f2a3ede9bbc7527c7a80ed03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } elseif ((            // line 225
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) {
                // line 226
                $context["translation_domain"] = false;
            } else {
                // line 228
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 228, $this->getSourceContext()); })()));
            }
        }
        // line 231
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 231, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_230eebcb537353cb3f61fdcd18504e5f23139cd9f2a3ede9bbc7527c7a80ed03->leave($__internal_230eebcb537353cb3f61fdcd18504e5f23139cd9f2a3ede9bbc7527c7a80ed03_prof);

        
        $__internal_75081f5793defba2e2210eee27d526d3ae01722926f4f2cc1f7d147640528ecd->leave($__internal_75081f5793defba2e2210eee27d526d3ae01722926f4f2cc1f7d147640528ecd_prof);

    }

    // line 234
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_b29d2f1eb6edb82bb1c99f2ae3dd3575d56b2a6dec223729991e9ed7683e6e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29d2f1eb6edb82bb1c99f2ae3dd3575d56b2a6dec223729991e9ed7683e6e7f->enter($__internal_b29d2f1eb6edb82bb1c99f2ae3dd3575d56b2a6dec223729991e9ed7683e6e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_1c83cf4a21fcc101d815a0d2294c32747de213179a106809c2da9a4f7d4b33c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c83cf4a21fcc101d815a0d2294c32747de213179a106809c2da9a4f7d4b33c6->enter($__internal_1c83cf4a21fcc101d815a0d2294c32747de213179a106809c2da9a4f7d4b33c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 235, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 236
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_1c83cf4a21fcc101d815a0d2294c32747de213179a106809c2da9a4f7d4b33c6->leave($__internal_1c83cf4a21fcc101d815a0d2294c32747de213179a106809c2da9a4f7d4b33c6_prof);

        
        $__internal_b29d2f1eb6edb82bb1c99f2ae3dd3575d56b2a6dec223729991e9ed7683e6e7f->leave($__internal_b29d2f1eb6edb82bb1c99f2ae3dd3575d56b2a6dec223729991e9ed7683e6e7f_prof);

    }

    // line 239
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_a8cdff4d4d401e2a4fc8e6bc560148bfd52af0837f6bdd58b456c81e469e4245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cdff4d4d401e2a4fc8e6bc560148bfd52af0837f6bdd58b456c81e469e4245->enter($__internal_a8cdff4d4d401e2a4fc8e6bc560148bfd52af0837f6bdd58b456c81e469e4245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_ceaed56d5a908e75055d1043250ed87307c79be7a0cc8b586bd878e092fffc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceaed56d5a908e75055d1043250ed87307c79be7a0cc8b586bd878e092fffc20->enter($__internal_ceaed56d5a908e75055d1043250ed87307c79be7a0cc8b586bd878e092fffc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 240, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 241
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_ceaed56d5a908e75055d1043250ed87307c79be7a0cc8b586bd878e092fffc20->leave($__internal_ceaed56d5a908e75055d1043250ed87307c79be7a0cc8b586bd878e092fffc20_prof);

        
        $__internal_a8cdff4d4d401e2a4fc8e6bc560148bfd52af0837f6bdd58b456c81e469e4245->leave($__internal_a8cdff4d4d401e2a4fc8e6bc560148bfd52af0837f6bdd58b456c81e469e4245_prof);

    }

    // line 244
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_daa123b7aa2b84211088cb7901762962350ba2e7acc4ec79247a9a66c0fed01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa123b7aa2b84211088cb7901762962350ba2e7acc4ec79247a9a66c0fed01a->enter($__internal_daa123b7aa2b84211088cb7901762962350ba2e7acc4ec79247a9a66c0fed01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_34463e6e2540872d4b88aa19936c6f8df40db6317a0c8605b6178255b364be51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34463e6e2540872d4b88aa19936c6f8df40db6317a0c8605b6178255b364be51->enter($__internal_34463e6e2540872d4b88aa19936c6f8df40db6317a0c8605b6178255b364be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 245, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 246
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_34463e6e2540872d4b88aa19936c6f8df40db6317a0c8605b6178255b364be51->leave($__internal_34463e6e2540872d4b88aa19936c6f8df40db6317a0c8605b6178255b364be51_prof);

        
        $__internal_daa123b7aa2b84211088cb7901762962350ba2e7acc4ec79247a9a66c0fed01a->leave($__internal_daa123b7aa2b84211088cb7901762962350ba2e7acc4ec79247a9a66c0fed01a_prof);

    }

    // line 249
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_7f8e18b5e066c0d5adc2500aa83c14ef0d0cb62c5fa0185d8af046c66e4d9cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8e18b5e066c0d5adc2500aa83c14ef0d0cb62c5fa0185d8af046c66e4d9cf8->enter($__internal_7f8e18b5e066c0d5adc2500aa83c14ef0d0cb62c5fa0185d8af046c66e4d9cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_d0d41b655291bedae10cc35e1bd574813fb12b40f6bee58703fd1768ce2c5a28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d41b655291bedae10cc35e1bd574813fb12b40f6bee58703fd1768ce2c5a28->enter($__internal_d0d41b655291bedae10cc35e1bd574813fb12b40f6bee58703fd1768ce2c5a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 250, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 251
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d0d41b655291bedae10cc35e1bd574813fb12b40f6bee58703fd1768ce2c5a28->leave($__internal_d0d41b655291bedae10cc35e1bd574813fb12b40f6bee58703fd1768ce2c5a28_prof);

        
        $__internal_7f8e18b5e066c0d5adc2500aa83c14ef0d0cb62c5fa0185d8af046c66e4d9cf8->leave($__internal_7f8e18b5e066c0d5adc2500aa83c14ef0d0cb62c5fa0185d8af046c66e4d9cf8_prof);

    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_63bc4d5c7cfbe9f5f31c104e26e71e38946e894eef0d238c32aeb8702ac35434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bc4d5c7cfbe9f5f31c104e26e71e38946e894eef0d238c32aeb8702ac35434->enter($__internal_63bc4d5c7cfbe9f5f31c104e26e71e38946e894eef0d238c32aeb8702ac35434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_cc98fe766e747db264e2e2e4851bd85f5ddc4476e0d38b65e2b46a19cb0a25ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc98fe766e747db264e2e2e4851bd85f5ddc4476e0d38b65e2b46a19cb0a25ff->enter($__internal_cc98fe766e747db264e2e2e4851bd85f5ddc4476e0d38b65e2b46a19cb0a25ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 257
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 257, $this->getSourceContext()); })()) === false)) {
            // line 258
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 258, $this->getSourceContext()); })())) {
                // line 259
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 259, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 259, $this->getSourceContext()); })())));
            }
            // line 261
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 261, $this->getSourceContext()); })())) {
                // line 262
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 262, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 264
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 264, $this->getSourceContext()); })()))) {
                // line 265
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 265, $this->getSourceContext()); })()))) {
                    // line 266
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 266, $this->getSourceContext()); })()), array("%name%" =>                     // line 267
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 267, $this->getSourceContext()); })()), "%id%" =>                     // line 268
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->getSourceContext()); })())));
                } else {
                    // line 271
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 271, $this->getSourceContext()); })()));
                }
            }
            // line 274
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })())) {
                $__internal_255f0c8bf0bfd819dfdc11f32c4a3fac0316eccd1611166161f08b35183db163 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
                if (!is_array($__internal_255f0c8bf0bfd819dfdc11f32c4a3fac0316eccd1611166161f08b35183db163)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_255f0c8bf0bfd819dfdc11f32c4a3fac0316eccd1611166161f08b35183db163);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_cc98fe766e747db264e2e2e4851bd85f5ddc4476e0d38b65e2b46a19cb0a25ff->leave($__internal_cc98fe766e747db264e2e2e4851bd85f5ddc4476e0d38b65e2b46a19cb0a25ff_prof);

        
        $__internal_63bc4d5c7cfbe9f5f31c104e26e71e38946e894eef0d238c32aeb8702ac35434->leave($__internal_63bc4d5c7cfbe9f5f31c104e26e71e38946e894eef0d238c32aeb8702ac35434_prof);

    }

    // line 278
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_e43ab372f0e4fbba4a1eb7cf42d3c1f07b0b45b0b1d9da64fb58a632b772d30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e43ab372f0e4fbba4a1eb7cf42d3c1f07b0b45b0b1d9da64fb58a632b772d30e->enter($__internal_e43ab372f0e4fbba4a1eb7cf42d3c1f07b0b45b0b1d9da64fb58a632b772d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_bab398019885f6a9d18fe3c42bcea304f3edbe1b18d89fbc1c6f41766f68d591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab398019885f6a9d18fe3c42bcea304f3edbe1b18d89fbc1c6f41766f68d591->enter($__internal_bab398019885f6a9d18fe3c42bcea304f3edbe1b18d89fbc1c6f41766f68d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_bab398019885f6a9d18fe3c42bcea304f3edbe1b18d89fbc1c6f41766f68d591->leave($__internal_bab398019885f6a9d18fe3c42bcea304f3edbe1b18d89fbc1c6f41766f68d591_prof);

        
        $__internal_e43ab372f0e4fbba4a1eb7cf42d3c1f07b0b45b0b1d9da64fb58a632b772d30e->leave($__internal_e43ab372f0e4fbba4a1eb7cf42d3c1f07b0b45b0b1d9da64fb58a632b772d30e_prof);

    }

    // line 282
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_37ed4cbad9ac7cce14a74d7d6a5bd6192ecaec71f853082c8e35e7f558ad268f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ed4cbad9ac7cce14a74d7d6a5bd6192ecaec71f853082c8e35e7f558ad268f->enter($__internal_37ed4cbad9ac7cce14a74d7d6a5bd6192ecaec71f853082c8e35e7f558ad268f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_648905bdc60d787cea30fb599cd578727385676577487657a7b7abd9507e7ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648905bdc60d787cea30fb599cd578727385676577487657a7b7abd9507e7ace->enter($__internal_648905bdc60d787cea30fb599cd578727385676577487657a7b7abd9507e7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 287
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_648905bdc60d787cea30fb599cd578727385676577487657a7b7abd9507e7ace->leave($__internal_648905bdc60d787cea30fb599cd578727385676577487657a7b7abd9507e7ace_prof);

        
        $__internal_37ed4cbad9ac7cce14a74d7d6a5bd6192ecaec71f853082c8e35e7f558ad268f->leave($__internal_37ed4cbad9ac7cce14a74d7d6a5bd6192ecaec71f853082c8e35e7f558ad268f_prof);

    }

    // line 290
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c5dd045cbb2a701ff01de17eea3b2741388c3c01bf92888cee5aac914662d9d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5dd045cbb2a701ff01de17eea3b2741388c3c01bf92888cee5aac914662d9d0->enter($__internal_c5dd045cbb2a701ff01de17eea3b2741388c3c01bf92888cee5aac914662d9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_83b07cd0daed37b3586e77030ed1ebb36cb43f0ebbd5ad843ce2fd976892df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83b07cd0daed37b3586e77030ed1ebb36cb43f0ebbd5ad843ce2fd976892df99->enter($__internal_83b07cd0daed37b3586e77030ed1ebb36cb43f0ebbd5ad843ce2fd976892df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 291
        echo "<div>";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'label');
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->getSourceContext()); })()), 'errors');
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 294, $this->getSourceContext()); })()), 'widget');
        // line 295
        echo "</div>";
        
        $__internal_83b07cd0daed37b3586e77030ed1ebb36cb43f0ebbd5ad843ce2fd976892df99->leave($__internal_83b07cd0daed37b3586e77030ed1ebb36cb43f0ebbd5ad843ce2fd976892df99_prof);

        
        $__internal_c5dd045cbb2a701ff01de17eea3b2741388c3c01bf92888cee5aac914662d9d0->leave($__internal_c5dd045cbb2a701ff01de17eea3b2741388c3c01bf92888cee5aac914662d9d0_prof);

    }

    // line 298
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_962cd7c955fa1136ed1ff802814dc1606c7b66ba3babce7f4446761ae765eaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962cd7c955fa1136ed1ff802814dc1606c7b66ba3babce7f4446761ae765eaba->enter($__internal_962cd7c955fa1136ed1ff802814dc1606c7b66ba3babce7f4446761ae765eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_07adb799b1bf2f93ade48e69a7de7d49cb545a4c50c6f137e9a0df707f18b16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07adb799b1bf2f93ade48e69a7de7d49cb545a4c50c6f137e9a0df707f18b16a->enter($__internal_07adb799b1bf2f93ade48e69a7de7d49cb545a4c50c6f137e9a0df707f18b16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 299
        echo "<div>";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), 'widget');
        // line 301
        echo "</div>";
        
        $__internal_07adb799b1bf2f93ade48e69a7de7d49cb545a4c50c6f137e9a0df707f18b16a->leave($__internal_07adb799b1bf2f93ade48e69a7de7d49cb545a4c50c6f137e9a0df707f18b16a_prof);

        
        $__internal_962cd7c955fa1136ed1ff802814dc1606c7b66ba3babce7f4446761ae765eaba->leave($__internal_962cd7c955fa1136ed1ff802814dc1606c7b66ba3babce7f4446761ae765eaba_prof);

    }

    // line 304
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_e97a4ce3e3e3747839ffc4211a568921b0b3766198c453586cb956afe9727b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97a4ce3e3e3747839ffc4211a568921b0b3766198c453586cb956afe9727b20->enter($__internal_e97a4ce3e3e3747839ffc4211a568921b0b3766198c453586cb956afe9727b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_fda472ff44b2e951ae8f98aab822efdc49d046181bf2a6f8d80053d7d26158ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda472ff44b2e951ae8f98aab822efdc49d046181bf2a6f8d80053d7d26158ce->enter($__internal_fda472ff44b2e951ae8f98aab822efdc49d046181bf2a6f8d80053d7d26158ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), 'widget');
        
        $__internal_fda472ff44b2e951ae8f98aab822efdc49d046181bf2a6f8d80053d7d26158ce->leave($__internal_fda472ff44b2e951ae8f98aab822efdc49d046181bf2a6f8d80053d7d26158ce_prof);

        
        $__internal_e97a4ce3e3e3747839ffc4211a568921b0b3766198c453586cb956afe9727b20->leave($__internal_e97a4ce3e3e3747839ffc4211a568921b0b3766198c453586cb956afe9727b20_prof);

    }

    // line 310
    public function block_form($context, array $blocks = array())
    {
        $__internal_9692da3d8620ef2e0821f2e101eed6abd5d30d76cf1f6d3ef6c7fc764abb1b85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9692da3d8620ef2e0821f2e101eed6abd5d30d76cf1f6d3ef6c7fc764abb1b85->enter($__internal_9692da3d8620ef2e0821f2e101eed6abd5d30d76cf1f6d3ef6c7fc764abb1b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_d6b044aabe5ebc83576a7d24bbf8cd92c82c531164bf37d34c0a794b5d785601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6b044aabe5ebc83576a7d24bbf8cd92c82c531164bf37d34c0a794b5d785601->enter($__internal_d6b044aabe5ebc83576a7d24bbf8cd92c82c531164bf37d34c0a794b5d785601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_start');
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'widget');
        // line 313
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_d6b044aabe5ebc83576a7d24bbf8cd92c82c531164bf37d34c0a794b5d785601->leave($__internal_d6b044aabe5ebc83576a7d24bbf8cd92c82c531164bf37d34c0a794b5d785601_prof);

        
        $__internal_9692da3d8620ef2e0821f2e101eed6abd5d30d76cf1f6d3ef6c7fc764abb1b85->leave($__internal_9692da3d8620ef2e0821f2e101eed6abd5d30d76cf1f6d3ef6c7fc764abb1b85_prof);

    }

    // line 316
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_5465d501c1be044c701e143d7d078d1f687b34d00ec6b732cea13ef064d12f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5465d501c1be044c701e143d7d078d1f687b34d00ec6b732cea13ef064d12f6c->enter($__internal_5465d501c1be044c701e143d7d078d1f687b34d00ec6b732cea13ef064d12f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_15d1a7e931dbb6eb6a63d382de4486a95201ec9bb4971a01b0150e3e800c5dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d1a7e931dbb6eb6a63d382de4486a95201ec9bb4971a01b0150e3e800c5dc3->enter($__internal_15d1a7e931dbb6eb6a63d382de4486a95201ec9bb4971a01b0150e3e800c5dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 317
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 318
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })()));
        // line 319
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 319, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 320
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 320, $this->getSourceContext()); })());
        } else {
            // line 322
            $context["form_method"] = "POST";
        }
        // line 324
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 324, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 324, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 324, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 325
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 325, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 325, $this->getSourceContext()); })()))) {
            // line 326
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 326, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_15d1a7e931dbb6eb6a63d382de4486a95201ec9bb4971a01b0150e3e800c5dc3->leave($__internal_15d1a7e931dbb6eb6a63d382de4486a95201ec9bb4971a01b0150e3e800c5dc3_prof);

        
        $__internal_5465d501c1be044c701e143d7d078d1f687b34d00ec6b732cea13ef064d12f6c->leave($__internal_5465d501c1be044c701e143d7d078d1f687b34d00ec6b732cea13ef064d12f6c_prof);

    }

    // line 330
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_43b317bcade73b496c6bf8f13ef4a2f91b27495c5a96fe7135b52fc63418c9f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b317bcade73b496c6bf8f13ef4a2f91b27495c5a96fe7135b52fc63418c9f9->enter($__internal_43b317bcade73b496c6bf8f13ef4a2f91b27495c5a96fe7135b52fc63418c9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_1e98860a1ce86c2fc297df9e158724bcf7f2d1fcbd8eb00aa488725b4953eb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e98860a1ce86c2fc297df9e158724bcf7f2d1fcbd8eb00aa488725b4953eb55->enter($__internal_1e98860a1ce86c2fc297df9e158724bcf7f2d1fcbd8eb00aa488725b4953eb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 331
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), 'rest');
        }
        // line 334
        echo "</form>";
        
        $__internal_1e98860a1ce86c2fc297df9e158724bcf7f2d1fcbd8eb00aa488725b4953eb55->leave($__internal_1e98860a1ce86c2fc297df9e158724bcf7f2d1fcbd8eb00aa488725b4953eb55_prof);

        
        $__internal_43b317bcade73b496c6bf8f13ef4a2f91b27495c5a96fe7135b52fc63418c9f9->leave($__internal_43b317bcade73b496c6bf8f13ef4a2f91b27495c5a96fe7135b52fc63418c9f9_prof);

    }

    // line 337
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_58d31602176b4da818c9f5a29ad55b6028dcda8c953869f3e5b3ddeff5e6d27f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58d31602176b4da818c9f5a29ad55b6028dcda8c953869f3e5b3ddeff5e6d27f->enter($__internal_58d31602176b4da818c9f5a29ad55b6028dcda8c953869f3e5b3ddeff5e6d27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_36a57571667d1078fa88c51bc00de244ec39cfb8d5e403a41577e081898a7615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a57571667d1078fa88c51bc00de244ec39cfb8d5e403a41577e081898a7615->enter($__internal_36a57571667d1078fa88c51bc00de244ec39cfb8d5e403a41577e081898a7615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 338
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })())) > 0)) {
            // line 339
            echo "<ul>";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 340, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 341
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "</ul>";
        }
        
        $__internal_36a57571667d1078fa88c51bc00de244ec39cfb8d5e403a41577e081898a7615->leave($__internal_36a57571667d1078fa88c51bc00de244ec39cfb8d5e403a41577e081898a7615_prof);

        
        $__internal_58d31602176b4da818c9f5a29ad55b6028dcda8c953869f3e5b3ddeff5e6d27f->leave($__internal_58d31602176b4da818c9f5a29ad55b6028dcda8c953869f3e5b3ddeff5e6d27f_prof);

    }

    // line 347
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_73a80557c2317ee3541b2fd4ce17d4a5ae9927854ff5da63d217d16ea09d08bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a80557c2317ee3541b2fd4ce17d4a5ae9927854ff5da63d217d16ea09d08bf->enter($__internal_73a80557c2317ee3541b2fd4ce17d4a5ae9927854ff5da63d217d16ea09d08bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_0e087b4e0124de462c03fd0c0b11f337475406e213052758ea2daa4acfcc10df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e087b4e0124de462c03fd0c0b11f337475406e213052758ea2daa4acfcc10df->enter($__internal_0e087b4e0124de462c03fd0c0b11f337475406e213052758ea2daa4acfcc10df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 349
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })())))) {
            // line 355
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 356
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })()));
            // line 357
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 357, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 358
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 358, $this->getSourceContext()); })());
            } else {
                // line 360
                $context["form_method"] = "POST";
            }
            // line 363
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 363, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 363, $this->getSourceContext()); })()))) {
                // line 364
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_0e087b4e0124de462c03fd0c0b11f337475406e213052758ea2daa4acfcc10df->leave($__internal_0e087b4e0124de462c03fd0c0b11f337475406e213052758ea2daa4acfcc10df_prof);

        
        $__internal_73a80557c2317ee3541b2fd4ce17d4a5ae9927854ff5da63d217d16ea09d08bf->leave($__internal_73a80557c2317ee3541b2fd4ce17d4a5ae9927854ff5da63d217d16ea09d08bf_prof);

    }

    // line 371
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_2aec90533bdd52b9fc7d05254631666e52e82dc2a3ccc72a558e78c15f961642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aec90533bdd52b9fc7d05254631666e52e82dc2a3ccc72a558e78c15f961642->enter($__internal_2aec90533bdd52b9fc7d05254631666e52e82dc2a3ccc72a558e78c15f961642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_dee05b67408e8c4c1504c8fa5aeaab5a96b69fe098e0da9cf5831758a2f7264f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee05b67408e8c4c1504c8fa5aeaab5a96b69fe098e0da9cf5831758a2f7264f->enter($__internal_dee05b67408e8c4c1504c8fa5aeaab5a96b69fe098e0da9cf5831758a2f7264f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 372, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_dee05b67408e8c4c1504c8fa5aeaab5a96b69fe098e0da9cf5831758a2f7264f->leave($__internal_dee05b67408e8c4c1504c8fa5aeaab5a96b69fe098e0da9cf5831758a2f7264f_prof);

        
        $__internal_2aec90533bdd52b9fc7d05254631666e52e82dc2a3ccc72a558e78c15f961642->leave($__internal_2aec90533bdd52b9fc7d05254631666e52e82dc2a3ccc72a558e78c15f961642_prof);

    }

    // line 377
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_c02ecfb56354257b6c58f19e30cd11787ce9a04022ca36aca3670221e63f3a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02ecfb56354257b6c58f19e30cd11787ce9a04022ca36aca3670221e63f3a70->enter($__internal_c02ecfb56354257b6c58f19e30cd11787ce9a04022ca36aca3670221e63f3a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_12ae9fc08ed54102db6c93266e247393b5d4de2d481ca8078cf9ea120b7c2b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ae9fc08ed54102db6c93266e247393b5d4de2d481ca8078cf9ea120b7c2b9d->enter($__internal_12ae9fc08ed54102db6c93266e247393b5d4de2d481ca8078cf9ea120b7c2b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 379
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 379, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 380, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 381
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_12ae9fc08ed54102db6c93266e247393b5d4de2d481ca8078cf9ea120b7c2b9d->leave($__internal_12ae9fc08ed54102db6c93266e247393b5d4de2d481ca8078cf9ea120b7c2b9d_prof);

        
        $__internal_c02ecfb56354257b6c58f19e30cd11787ce9a04022ca36aca3670221e63f3a70->leave($__internal_c02ecfb56354257b6c58f19e30cd11787ce9a04022ca36aca3670221e63f3a70_prof);

    }

    // line 384
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_76e7be5a2fe5b0d84e333d75db2845ee03e0604c86e84f7badcb3dee2abcde85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e7be5a2fe5b0d84e333d75db2845ee03e0604c86e84f7badcb3dee2abcde85->enter($__internal_76e7be5a2fe5b0d84e333d75db2845ee03e0604c86e84f7badcb3dee2abcde85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_3d083875d0dbb46cb7a1c133653733087f62dc61f3aea6b40967695f436a1593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d083875d0dbb46cb7a1c133653733087f62dc61f3aea6b40967695f436a1593->enter($__internal_3d083875d0dbb46cb7a1c133653733087f62dc61f3aea6b40967695f436a1593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 385
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 386
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_3d083875d0dbb46cb7a1c133653733087f62dc61f3aea6b40967695f436a1593->leave($__internal_3d083875d0dbb46cb7a1c133653733087f62dc61f3aea6b40967695f436a1593_prof);

        
        $__internal_76e7be5a2fe5b0d84e333d75db2845ee03e0604c86e84f7badcb3dee2abcde85->leave($__internal_76e7be5a2fe5b0d84e333d75db2845ee03e0604c86e84f7badcb3dee2abcde85_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_6588e594d0d07483e5433ae3e0f6e09a1b158ef1c94951771ede9133451d8549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6588e594d0d07483e5433ae3e0f6e09a1b158ef1c94951771ede9133451d8549->enter($__internal_6588e594d0d07483e5433ae3e0f6e09a1b158ef1c94951771ede9133451d8549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_1111c4cb454499861437468b719d87ca2bd026c5c1c501ab9ca95f0db926598d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1111c4cb454499861437468b719d87ca2bd026c5c1c501ab9ca95f0db926598d->enter($__internal_1111c4cb454499861437468b719d87ca2bd026c5c1c501ab9ca95f0db926598d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 390, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_1111c4cb454499861437468b719d87ca2bd026c5c1c501ab9ca95f0db926598d->leave($__internal_1111c4cb454499861437468b719d87ca2bd026c5c1c501ab9ca95f0db926598d_prof);

        
        $__internal_6588e594d0d07483e5433ae3e0f6e09a1b158ef1c94951771ede9133451d8549->leave($__internal_6588e594d0d07483e5433ae3e0f6e09a1b158ef1c94951771ede9133451d8549_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_e25e1fe2ca3b1c052316e410ad6134519be9a0a5b9cc27e8ff63d105ec093f64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25e1fe2ca3b1c052316e410ad6134519be9a0a5b9cc27e8ff63d105ec093f64->enter($__internal_e25e1fe2ca3b1c052316e410ad6134519be9a0a5b9cc27e8ff63d105ec093f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_f9640cce028102501f821bc0be40177775b4a5e70ef00822ce6deffb3bd151d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9640cce028102501f821bc0be40177775b4a5e70ef00822ce6deffb3bd151d4->enter($__internal_f9640cce028102501f821bc0be40177775b4a5e70ef00822ce6deffb3bd151d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 395, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f9640cce028102501f821bc0be40177775b4a5e70ef00822ce6deffb3bd151d4->leave($__internal_f9640cce028102501f821bc0be40177775b4a5e70ef00822ce6deffb3bd151d4_prof);

        
        $__internal_e25e1fe2ca3b1c052316e410ad6134519be9a0a5b9cc27e8ff63d105ec093f64->leave($__internal_e25e1fe2ca3b1c052316e410ad6134519be9a0a5b9cc27e8ff63d105ec093f64_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1658 => 402,  1656 => 401,  1651 => 400,  1649 => 399,  1644 => 398,  1642 => 397,  1640 => 396,  1636 => 395,  1627 => 394,  1617 => 391,  1608 => 390,  1599 => 389,  1589 => 386,  1583 => 385,  1574 => 384,  1564 => 381,  1560 => 380,  1556 => 379,  1550 => 378,  1541 => 377,  1527 => 373,  1523 => 372,  1514 => 371,  1500 => 364,  1498 => 363,  1495 => 360,  1492 => 358,  1490 => 357,  1488 => 356,  1486 => 355,  1484 => 354,  1477 => 350,  1475 => 349,  1471 => 348,  1462 => 347,  1451 => 343,  1443 => 341,  1439 => 340,  1437 => 339,  1435 => 338,  1426 => 337,  1416 => 334,  1413 => 332,  1411 => 331,  1402 => 330,  1389 => 326,  1387 => 325,  1360 => 324,  1357 => 322,  1354 => 320,  1352 => 319,  1350 => 318,  1348 => 317,  1339 => 316,  1329 => 313,  1327 => 312,  1325 => 311,  1316 => 310,  1306 => 305,  1297 => 304,  1287 => 301,  1285 => 300,  1283 => 299,  1274 => 298,  1264 => 295,  1262 => 294,  1260 => 293,  1258 => 292,  1256 => 291,  1247 => 290,  1237 => 287,  1228 => 282,  1211 => 278,  1184 => 274,  1180 => 271,  1177 => 268,  1176 => 267,  1175 => 266,  1173 => 265,  1171 => 264,  1168 => 262,  1166 => 261,  1163 => 259,  1161 => 258,  1159 => 257,  1150 => 256,  1140 => 251,  1138 => 250,  1129 => 249,  1119 => 246,  1117 => 245,  1108 => 244,  1098 => 241,  1096 => 240,  1087 => 239,  1077 => 236,  1075 => 235,  1066 => 234,  1050 => 231,  1046 => 228,  1043 => 226,  1041 => 225,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 394,  162 => 389,  160 => 384,  158 => 377,  156 => 371,  153 => 368,  151 => 347,  149 => 337,  147 => 330,  145 => 316,  143 => 310,  141 => 304,  139 => 298,  137 => 290,  135 => 282,  133 => 278,  131 => 256,  129 => 249,  127 => 244,  125 => 239,  123 => 234,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- elseif label is same as(false) -%}
            {% set translation_domain = false %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp\\www\\Pi\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
