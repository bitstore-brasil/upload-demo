<?php

/* default/template/extension/d_blog_module/post_thumb.twig */
class __TwigTemplate_af5c5ca0ebcb0f9c115ebb5ad7053d006b3a4da6dcb11521bb0856719771f44a extends Twig_Template
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
        echo "<article class=\"post-layout post-grid\">
    <div class=\"post-thumb\">
        <div class=\"image\">
            <a href=\"";
        // line 4
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
        echo "\">
                ";
        // line 5
        if ((isset($context["access_limit"]) ? $context["access_limit"] : null)) {
            // line 6
            echo "                <div style=\"position: absolute; width:100%; height:100%; background-image: url(http://ocinstallerlocal/302/d_blog_module/image/catalog/d_blog_module/lock.svg);  background-color: rgb(0, 0, 0, 0.45); background-repeat: no-repeat; background-position: center;\"></div>
                ";
        }
        // line 8
        echo "                <img src=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "thumb", array());
        echo "\" alt=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image_alt", array());
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "image_title", array());
        echo "\" class=\"img-responsive\"/>
            </a>
        </div>
    
        <div class=\"post-thumb-heading\">            
            ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "category_label_display", array())) {
            // line 14
            echo "                <ul class=\"category list-unstyled\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                    <li><a class=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "category_label", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "title", array());
                echo "</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                </ul>
            ";
        }
        // line 20
        echo "            <h3 class=\"title\"><a href=\"";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
        echo "\">";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
        echo "</a></h3>
            <span class=\"title-divider\"></span>
        </div>
        <div class=\"post-thumb-body\">
            ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "description_display", array())) {
            // line 25
            echo "                <div class=\"short-description\">";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "short_description", array());
            echo "</div>
            ";
        }
        // line 27
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) || $this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "date_display", array()))) {
            // line 28
            echo "            <div class=\"row\">
                <div class=\"";
            // line 29
            if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array()))) {
                echo "col-md-6";
            } else {
                echo "col-md-12";
            }
            echo "\">
                    ";
            // line 30
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "author_display", array())) {
                // line 31
                echo "                    <span class=\"author\"><i class=\"fa fa-user\"></i> ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array());
                echo "</span>
                    ";
            }
            // line 33
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "date_display", array())) {
                // line 34
                echo "                    <span class=\"date-published\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date_published", array());
                echo "</span>
                    ";
            }
            // line 36
            echo "                </div>
                ";
            // line 37
            if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "rating_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array()))) {
                // line 38
                echo "                <div class=\"col-md-6\">
                    <div class=\"pull-right\">
                        ";
                // line 40
                $this->loadTemplate($this->env->getExtension('opencart')->templateFunction("partial/d_rating"), "default/template/extension/d_blog_module/post_thumb.twig", 40)->display(array_merge($context, array("rating" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "rating", array()), "static_rating" => true)));
                // line 41
                echo "                    </div>
                </div>
                ";
            }
            // line 44
            echo "            </div>
            ";
        }
        // line 46
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "tag_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()))) {
            // line 47
            echo "                <div class=\"tag\">
                    <span class=\"tag-title\">";
            // line 48
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</span>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 50
                echo "                        <a href=\"";
                echo $this->getAttribute($context["tag"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["tag"], "text", array());
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "                </div>
            ";
        }
        // line 54
        echo "        </div>
        <div class=\"post-thumb-footer clearfix\">
            ";
        // line 56
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "review_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "review", array()))) {
            echo "<a class=\"review\" href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
            echo "\"><i class=\"fa fa-comment\"></i> ";
            echo (isset($context["text_review"]) ? $context["text_review"] : null);
            echo " (";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "review", array());
            echo ")</a>";
        }
        // line 57
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "views_display", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views", array()))) {
            echo "<span class=\"view\"><i class=\"fa fa-eye\"></i> ";
            echo (isset($context["text_views"]) ? $context["text_views"] : null);
            echo " ";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "views", array());
            echo "</span>";
        }
        // line 58
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "post_thumb", array()), "read_more_display", array())) {
            echo "<a href=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "href", array());
            echo "\" class=\"read-more pull-right\">";
            echo (isset($context["text_read_more"]) ? $context["text_read_more"] : null);
            echo "</a>";
        }
        // line 59
        echo "        </div>
    
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/d_blog_module/post_thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 59,  194 => 58,  185 => 57,  175 => 56,  171 => 54,  167 => 52,  156 => 50,  152 => 49,  148 => 48,  145 => 47,  142 => 46,  138 => 44,  133 => 41,  131 => 40,  127 => 38,  125 => 37,  122 => 36,  116 => 34,  113 => 33,  107 => 31,  105 => 30,  97 => 29,  94 => 28,  91 => 27,  85 => 25,  83 => 24,  73 => 20,  69 => 18,  56 => 16,  52 => 15,  49 => 14,  47 => 13,  34 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <article class="post-layout post-grid">*/
/*     <div class="post-thumb">*/
/*         <div class="image">*/
/*             <a href="{{post.href}}">*/
/*                 {% if access_limit %}*/
/*                 <div style="position: absolute; width:100%; height:100%; background-image: url(http://ocinstallerlocal/302/d_blog_module/image/catalog/d_blog_module/lock.svg);  background-color: rgb(0, 0, 0, 0.45); background-repeat: no-repeat; background-position: center;"></div>*/
/*                 {% endif %}*/
/*                 <img src="{{post.thumb}}" alt="{{post.image_alt}}" title="{{post.image_title}}" class="img-responsive"/>*/
/*             </a>*/
/*         </div>*/
/*     */
/*         <div class="post-thumb-heading">            */
/*             {% if setting.post_thumb.category_label_display %}*/
/*                 <ul class="category list-unstyled">*/
/*                     {% for category in post.categories %}*/
/*                     <li><a class="{{setting.post_thumb.category_label}}" href="{{category.href}}">{{category.title}}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*             <h3 class="title"><a href="{{post.href}}">{{post.title}}</a></h3>*/
/*             <span class="title-divider"></span>*/
/*         </div>*/
/*         <div class="post-thumb-body">*/
/*             {% if setting.post_thumb.description_display %}*/
/*                 <div class="short-description">{{post.short_description}}</div>*/
/*             {% endif %}*/
/*             {% if (setting.post_thumb.rating_display or setting.post_thumb.date_display) %}*/
/*             <div class="row">*/
/*                 <div class="{% if (setting.post_thumb.rating_display and post.rating) %}col-md-6{% else %}col-md-12{% endif %}">*/
/*                     {% if setting.post_thumb.author_display %}*/
/*                     <span class="author"><i class="fa fa-user"></i> {{post.author}}</span>*/
/*                     {% endif %}*/
/*                     {% if setting.post_thumb.date_display %}*/
/*                     <span class="date-published"><i class="fa fa-clock-o"></i> {{post.date_published}}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 {% if (setting.post_thumb.rating_display and post.rating) %}*/
/*                 <div class="col-md-6">*/
/*                     <div class="pull-right">*/
/*                         {% include template('partial/d_rating') with ({rating:post.rating,static_rating:true})%}*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if (setting.post_thumb.tag_display and post.tags) %}*/
/*                 <div class="tag">*/
/*                     <span class="tag-title">{{text_tags}}</span>*/
/*                     {% for tag in post.tags %}*/
/*                         <a href="{{tag.href}}">{{tag.text}}</a>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div class="post-thumb-footer clearfix">*/
/*             {% if (setting.post_thumb.review_display and post.review) %}<a class="review" href="{{post.href}}"><i class="fa fa-comment"></i> {{text_review}} ({{post.review}})</a>{% endif %}*/
/*             {% if (setting.post_thumb.views_display and post.views) %}<span class="view"><i class="fa fa-eye"></i> {{text_views}} {{post.views}}</span>{% endif %}*/
/*             {% if setting.post_thumb.read_more_display %}<a href="{{post.href}}" class="read-more pull-right">{{text_read_more}}</a>{% endif %}*/
/*         </div>*/
/*     */
/*     </div>*/
/* </article>*/
