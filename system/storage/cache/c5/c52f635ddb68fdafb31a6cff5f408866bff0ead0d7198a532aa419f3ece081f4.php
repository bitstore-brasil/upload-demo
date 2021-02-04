<?php

/* default/template/partial/d_layout_open.twig */
class __TwigTemplate_a85e6f66f3e7f438ca05278cdbc7ba881aec57b255124df120f19e62f3bc5706 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- > d_layout_open -->
<div class=\"container\" >
    ";
        // line 3
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_notification"), "default/template/partial/d_layout_open.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"row\">
        ";
        // line 5
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
        ";
        // line 6
        if ((isset($context["column_left"]) ? $context["column_left"] : null)) {
            // line 7
            echo "                ";
            if ((isset($context["column_right"]) ? $context["column_right"] : null)) {
                // line 8
                echo "                    <main id=\"content\" data-route=\"";
                echo (isset($context["page_route"]) ? $context["page_route"] : null);
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " col-sm-6\">
                ";
            } else {
                // line 10
                echo "                    <main id=\"content\" data-route=\"";
                echo (isset($context["page_route"]) ? $context["page_route"] : null);
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " col-sm-9\">
                ";
            }
            // line 12
            echo "        ";
        } else {
            // line 13
            echo "            ";
            if ((isset($context["column_right"]) ? $context["column_right"] : null)) {
                // line 14
                echo "                <main id=\"content\" data-route=\"";
                echo (isset($context["page_route"]) ? $context["page_route"] : null);
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " col-sm-9\">
            ";
            } else {
                // line 16
                echo "                <main id=\"content\" data-route=\"";
                echo (isset($context["page_route"]) ? $context["page_route"] : null);
                echo "\" class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo " col-sm-12\">
            ";
            }
            // line 18
            echo "        ";
        }
        // line 19
        echo "        ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
<!-- /> d_layout_open -->
";
    }

    public function getTemplateName()
    {
        return "default/template/partial/d_layout_open.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  75 => 18,  67 => 16,  59 => 14,  56 => 13,  53 => 12,  45 => 10,  37 => 8,  34 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!-- > d_layout_open -->*/
/* <div class="container" >*/
/*     {% include template('partial/d_notification') %}*/
/*     <div class="row">*/
/*         {{column_left}}*/
/*         {% if column_left %}*/
/*                 {% if column_right %}*/
/*                     <main id="content" data-route="{{ page_route }}" class="{{class}} col-sm-6">*/
/*                 {% else %}*/
/*                     <main id="content" data-route="{{ page_route }}" class="{{class}} col-sm-9">*/
/*                 {% endif %}*/
/*         {% else %}*/
/*             {% if column_right %}*/
/*                 <main id="content" data-route="{{ page_route }}" class="{{class}} col-sm-9">*/
/*             {% else %}*/
/*                 <main id="content" data-route="{{ page_route }}" class="{{class}} col-sm-12">*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {{content_top}}*/
/* <!-- /> d_layout_open -->*/
/* */
