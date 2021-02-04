<?php

/* catalog/category_list.twig */
class __TwigTemplate_5f16cd938009e68196084b0f9e45c08bcf150fcb5ebc92951ddc0aad0cf86357 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-category').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i>
        </button>
        
        <!-- Início Modal -->    
        <!-- Button trigger modal -->
        <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#exampleModal\">
            <i class=\"fa fa-youtube-play\"></i> 
        </button>
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Criando um Departamento</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                  <span aria-hidden=\"true\">&times;</span>
                </button>
              </div>
              <div class=\"modal-body\">
                <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/o2wDJYBvrJk\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen>
                </iframe>
              </div>
              <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fechar</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim Modal -->
      
        <a href=\"";
        // line 35
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i>
        </a>
        <a href=\"";
        // line 37
        echo (isset($context["repair"]) ? $context["repair"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_rebuild"]) ? $context["button_rebuild"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i>
        </a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 39
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i>
        </button>
        
        

        
        
      </div>
      <h1>";
        // line 47
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 50
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 56
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 57
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 61
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 62
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 66
        echo "    <div class=\"row\">
      <div id=\"filter-category\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 70
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 74
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 75
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 78
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 81
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 82
            echo "                <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        } else {
            // line 84
            echo "                <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                ";
        }
        // line 86
        echo "                ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 87
            echo "                <option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        } else {
            // line 89
            echo "                <option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                ";
        }
        // line 91
        echo "              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 94
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 102
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 105
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">
                        ";
        // line 112
        if (((isset($context["sort"]) ? $context["sort"] : null) == "name")) {
            // line 113
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        } else {
            // line 115
            echo "                        <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                        ";
        }
        // line 117
        echo "                      </td>
                      <td class=\"text-right\">
                        ";
        // line 119
        if (((isset($context["sort"]) ? $context["sort"] : null) == "sort_order")) {
            // line 120
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        } else {
            // line 122
            echo "                        <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                        ";
        }
        // line 124
        echo "                      </td>
                      <td class=\"text-right\">";
        // line 125
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 129
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 130
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 131
                echo "                    <tr>
                      <td class=\"text-center\">";
                // line 132
                if (twig_in_filter($this->getAttribute($context["category"], "category_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 133
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" checked=\"checked\" />
                        ";
                } else {
                    // line 135
                    echo "                        <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["category"], "category_id", array());
                    echo "\" />
                        ";
                }
                // line 137
                echo "                      </td>
                      <td class=\"text-left\">";
                // line 138
                echo $this->getAttribute($context["category"], "name", array());
                echo "</td>
                      <td class=\"text-right\">";
                // line 139
                echo $this->getAttribute($context["category"], "sort_order", array());
                echo "</td>
                      <td class=\"text-right\"><a href=\"";
                // line 140
                echo $this->getAttribute($context["category"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                    ";
        } else {
            // line 144
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"4\">";
            // line 145
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                    </tr>
                    ";
        }
        // line 148
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 153
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 154
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/category&user_token=";
        // line 163
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});
//--></script>
</div>
";
        // line 181
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 181,  361 => 163,  349 => 154,  345 => 153,  338 => 148,  332 => 145,  329 => 144,  326 => 143,  315 => 140,  311 => 139,  307 => 138,  304 => 137,  298 => 135,  292 => 133,  290 => 132,  287 => 131,  282 => 130,  280 => 129,  273 => 125,  270 => 124,  262 => 122,  252 => 120,  250 => 119,  246 => 117,  238 => 115,  228 => 113,  226 => 112,  216 => 105,  210 => 102,  199 => 94,  194 => 91,  188 => 89,  182 => 87,  179 => 86,  173 => 84,  167 => 82,  165 => 81,  159 => 78,  151 => 75,  147 => 74,  140 => 70,  134 => 66,  126 => 62,  123 => 61,  115 => 57,  113 => 56,  107 => 52,  96 => 50,  92 => 49,  87 => 47,  74 => 39,  67 => 37,  60 => 35,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-category').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i>*/
/*         </button>*/
/*         */
/*         <!-- Início Modal -->    */
/*         <!-- Button trigger modal -->*/
/*         <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">*/
/*             <i class="fa fa-youtube-play"></i> */
/*         </button>*/
/*         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">*/
/*           <div class="modal-dialog" role="document">*/
/*             <div class="modal-content">*/
/*               <div class="modal-header">*/
/*                 <h5 class="modal-title" id="exampleModalLabel">Criando um Departamento</h5>*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                   <span aria-hidden="true">&times;</span>*/
/*                 </button>*/
/*               </div>*/
/*               <div class="modal-body">*/
/*                 <iframe width="560" height="315" src="https://www.youtube.com/embed/o2wDJYBvrJk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>*/
/*                 </iframe>*/
/*               </div>*/
/*               <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <!-- Fim Modal -->*/
/*       */
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i>*/
/*         </a>*/
/*         <a href="{{ repair }}" data-toggle="tooltip" title="{{ button_rebuild }}" class="btn btn-default"><i class="fa fa-refresh"></i>*/
/*         </a>*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-category').submit() : false;"><i class="fa fa-trash-o"></i>*/
/*         </button>*/
/*         */
/*         */
/* */
/*         */
/*         */
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-category" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*               <input type="text" name="filter_name" value="{{ filter_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 {% if filter_status == '1' %}*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 {% endif %}*/
/*                 {% if filter_status == '0' %}*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 {% else %}*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 {% endif %}*/
/*               </select>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-category">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">*/
/*                         {% if sort == 'name' %}*/
/*                         <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">*/
/*                         {% if sort == 'sort_order' %}*/
/*                         <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                         {% else %}*/
/*                         <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% if categories %}*/
/*                     {% for category in categories %}*/
/*                     <tr>*/
/*                       <td class="text-center">{% if category.category_id in selected %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ category.category_id }}" checked="checked" />*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="selected[]" value="{{ category.category_id }}" />*/
/*                         {% endif %}*/
/*                       </td>*/
/*                       <td class="text-left">{{ category.name }}</td>*/
/*                       <td class="text-right">{{ category.sort_order }}</td>*/
/*                       <td class="text-right"><a href="{{ category.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                     </tr>*/
/*                     {% endfor %}*/
/*                     {% else %}*/
/*                     <tr>*/
/*                       <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                     </tr>*/
/*                     {% endif %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=catalog/category&user_token={{ user_token }}';*/
/* */
/* 	var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/* 	if (filter_name) {*/
/* 		url += '&filter_name=' + encodeURIComponent(filter_name);*/
/* 	}*/
/* */
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* */
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script>*/
/* </div>*/
/* {{ footer }}*/
