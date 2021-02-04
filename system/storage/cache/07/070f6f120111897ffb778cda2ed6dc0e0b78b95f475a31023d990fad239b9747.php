<?php

/* default/template/extension/d_blog_module/category.twig */
class __TwigTemplate_c309748b5d76209d96d8088415e1a6003bbc2f013cce64556486d8d959608b50 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<style>
";
        // line 3
        echo (isset($context["custom_style"]) ? $context["custom_style"] : null);
        echo "
</style>
";
        // line 5
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_breadcrumb"), "default/template/extension/d_blog_module/category.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_layout_open"), "default/template/extension/d_blog_module/category.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"bm\">
            <div class=\"bm-category-info clearfix\">
                ";
        // line 9
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            echo "<div class=\"btn-group btn-group-xs pull-right\" ><a class=\"btn btn-default \" href=\"";
            echo (isset($context["edit"]) ? $context["edit"] : null);
            echo "\" target=\"_blank\"><i class=\"fa fa-pencil\"></i> ";
            echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
            echo "</a></div>";
        }
        // line 10
        echo "                <h1 class=\"h1 title\">";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
                ";
        // line 11
        if (((isset($context["thumb"]) ? $context["thumb"] : null) && $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "category", array()), "image_display", array()))) {
            // line 12
            echo "                <div class=\"image\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-responsive\" /></div>
                ";
        }
        // line 14
        echo "                ";
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 15
            echo "                <div class=\"description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
                ";
        }
        // line 17
        echo "            </div>

            ";
        // line 19
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 20
            echo "            <div class=\"bm-categories\">
                <div class=\"h3\">";
            // line 21
            echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
            echo "</div>

                <div class=\"row auto-clear\">
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "                    <div class=\"col-sm-";
                echo $this->getAttribute($context["category"], "col", array());
                echo " col-xs-4\">
                        <a class=\"item-cateogry\" href=\"";
                // line 26
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">
                            ";
                // line 27
                if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "category", array()), "sub_category_image", array())) {
                    // line 28
                    echo "                                <div class=\"image\"><img src=\"";
                    echo $this->getAttribute($context["category"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["category"], "title", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["category"], "title", array());
                    echo "\" /></div>
                            ";
                }
                // line 30
                echo "                            <div class=\"title\">";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</div>
                        </a>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </div>

            </div>
            ";
        }
        // line 38
        echo "            ";
        if ((isset($context["posts"]) ? $context["posts"] : null)) {
            // line 39
            echo "                ";
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction((isset($context["layout_template"]) ? $context["layout_template"] : null)), "default/template/extension/d_blog_module/category.twig", 39)->display(array_merge($context, (isset($context["posts"]) ? $context["posts"] : null)));
            // line 40
            echo "            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (( !(isset($context["posts"]) ? $context["posts"] : null) && ((isset($context["post_display_on_main"]) ? $context["post_display_on_main"] : null) == false))) {
            // line 43
            echo "                <p class=\"bm-empty\">";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
                <div class=\"buttons\">
                    <div class=\"pull-right\">
                            ";
            // line 46
            $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/button"), "default/template/extension/d_blog_module/category.twig", 46)->display(array_merge($context, array("button" => array("link" =>             // line 47
(isset($context["continue"]) ? $context["continue"] : null), "style" => "primary", "text_button" =>             // line 49
(isset($context["button_continue"]) ? $context["button_continue"] : null)))));
            // line 51
            echo "                    </div>
                </div>
            ";
        }
        // line 54
        echo "        </div>
    ";
        // line 55
        $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("/partial/d_layout_close"), "default/template/extension/d_blog_module/category.twig", 55)->display($context);
        // line 56
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/d_blog_module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 56,  162 => 55,  159 => 54,  154 => 51,  152 => 49,  151 => 47,  150 => 46,  143 => 43,  141 => 42,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  123 => 34,  112 => 30,  102 => 28,  100 => 27,  96 => 26,  91 => 25,  87 => 24,  81 => 21,  78 => 20,  76 => 19,  72 => 17,  66 => 15,  63 => 14,  53 => 12,  51 => 11,  46 => 10,  38 => 9,  34 => 7,  31 => 6,  29 => 5,  24 => 3,  19 => 1,);
    }
}
/* {{header}}*/
/* <style>*/
/* {{custom_style}}*/
/* </style>*/
/* {% include template('partial/d_breadcrumb') %}*/
/*     {% include template('partial/d_layout_open') %}*/
/*         <div class="bm">*/
/*             <div class="bm-category-info clearfix">*/
/*                 {% if edit %}<div class="btn-group btn-group-xs pull-right" ><a class="btn btn-default " href="{{edit}}" target="_blank"><i class="fa fa-pencil"></i> {{text_edit}}</a></div>{% endif %}*/
/*                 <h1 class="h1 title">{{heading_title}}</h1>*/
/*                 {% if (thumb and setting.category.image_display) %}*/
/*                 <div class="image"><img src="{{thumb}}" alt="{{heading_title}}" title="{{heading_title}}" class="img-responsive" /></div>*/
/*                 {% endif %}*/
/*                 {% if description %}*/
/*                 <div class="description">{{description}}</div>*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% if categories %}*/
/*             <div class="bm-categories">*/
/*                 <div class="h3">{{text_categories}}</div>*/
/* */
/*                 <div class="row auto-clear">*/
/*                     {% for category in categories %}*/
/*                     <div class="col-sm-{{category.col}} col-xs-4">*/
/*                         <a class="item-cateogry" href="{{category.href}}">*/
/*                             {% if setting.category.sub_category_image %}*/
/*                                 <div class="image"><img src="{{category.thumb}}" alt="{{category.title}}" title="{{category.title}}" /></div>*/
/*                             {% endif %}*/
/*                             <div class="title">{{category.title}}</div>*/
/*                         </a>*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             {% endif %}*/
/*             {% if posts %}*/
/*                 {% include template(layout_template) with posts %}*/
/*             {% endif %}*/
/* */
/*             {% if not posts and post_display_on_main == false %}*/
/*                 <p class="bm-empty">{{text_empty}}</p>*/
/*                 <div class="buttons">*/
/*                     <div class="pull-right">*/
/*                             {% include template('partial/button') with {button:{*/
/*                                 link:continue, */
/*                                 style:'primary',*/
/*                                 text_button: button_continue*/
/*                         }} %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% include template('/partial/d_layout_close') %}*/
/* {{footer}}*/
/* */
