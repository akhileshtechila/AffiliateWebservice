<?php

/* AffiliateAffiliateManagementBundle:Deal:index.html.twig */
class __TwigTemplate_3de31c2ca9a85362cbbe939208559fc4d294199f65e48240cc51a0c82801b606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::baseadmindemo.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::baseadmindemo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Deal";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .modal-content {width: 84% !important;}
        .modal-header {padding: 6px;}
        .modal-body {padding: 2px;}
        .modal-footer {padding: 4px 6px 7px;margin-top: -6px;}
    </style>
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        // line 14
        echo "    <!-- jQuery 2.0.2 -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->

    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- page script -->
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#example1\").dataTable();
            \$('#example2').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": false
            });
        });
    </script>
    
     <script>
        \$('#confirm-delete').on('show.bs.modal', function(e) {
            \$(this).find('.danger').attr('href', \$(e.relatedTarget).data('href'));
            
           // \$('.debug-url').html('Delete URL: <strong>' + \$(this).find('.danger').attr('href') + '</strong>');
        })
    </script>


";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "<!-- Main content -->

    <div class=\"col-xs-12\">


        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Deal List</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body table-responsive\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Dname</th>
                            <th>Description</th>
                            <th>Dealduration</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 77
            echo "                            <tr>
                                <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dName"), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dealDuration"), "html", null, true);
            echo "</td>
                                <td>

                                    <div class=\"btn-group\">
                                        <button type=\"button\" class=\"btn btn-primary\">Action</button>
                                        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                            <span class=\"caret\"></span>
                                            <span class=\"sr-only\"></span>
                                        </button>
                                        <ul class=\"dropdown-menu\" role=\"menu\">
                                            <li><a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Edit Deal</a></li>
                                                                                       
                                            <li class=\"divider\"></li>                                                
                                            <li> 
                                               <a data-href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("deal_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\" href=\"#\">
                                                   Delete Record</a>
                                            </li>
                                        </ul>
                                    </div>

                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Dname</th>
                            <th>Description</th>
                            <th>Dealduration</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
    <ul>
        <li>
            <a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("deal_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
       <!-- Delete toggle Pop Up -->   
        <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
            
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Confirm Delete</h4>
                </div>
            
                <div class=\"modal-body\">
                    <p>You are about to delete one Deal, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>                   
                </div>
                
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
                    <a href=\"#\" class=\"btn btn-danger danger\">Delete</a>
                </div>
            </div>
        </div>
    </div>      
        <!-- Delete toggle Pop Up End -->        
";
    }

    public function getTemplateName()
    {
        return "AffiliateAffiliateManagementBundle:Deal:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 120,  196 => 104,  181 => 95,  174 => 91,  161 => 81,  157 => 80,  153 => 79,  147 => 78,  144 => 77,  140 => 76,  117 => 55,  114 => 53,  84 => 26,  79 => 24,  73 => 21,  69 => 20,  63 => 17,  58 => 14,  56 => 13,  53 => 12,  40 => 4,  37 => 3,  31 => 2,);
    }
}
