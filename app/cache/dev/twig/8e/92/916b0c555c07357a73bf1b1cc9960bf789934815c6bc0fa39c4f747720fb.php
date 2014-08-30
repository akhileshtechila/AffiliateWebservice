<?php

/* AffiliateAffiliateManagementBundle:Userinfo:index.html.twig */
class __TwigTemplate_8e92916b0c555c07357a73bf1b1cc9960bf789934815c6bc0fa39c4f747720fb extends Twig_Template
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
        echo "User's Information list";
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
       .dropdown-menu { min-width : 109px !important; }
    </style>
";
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        // line 15
        echo "    <!-- jQuery 2.0.2 -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->

    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 27
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
                <h3 class=\"box-title\">User's Information list</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body table-responsive\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Fname</th>
                            <th>Email</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Mobile</th>
                            <th>Usertype</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 80
            echo "                            <tr>
                                <td><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fName"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lName"), "html", null, true);
            echo "</td>                             
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email"), "html", null, true);
            echo "</td>
                                <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "state"), "html", null, true);
            echo "</td>
                                <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "country"), "html", null, true);
            echo "</td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "mobile"), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "userType"), "html", null, true);
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
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Edit User</a></li>
                                                                                       
                                            <li class=\"divider\"></li>                                                
                                            <li> 
                                               <a data-href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userinfo_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
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
        // line 111
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Fname</th>    
                            <th>Email</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Mobile</th>
                            <th>Usertype</th>
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
        // line 130
        echo $this->env->getExtension('routing')->getPath("userinfo_new");
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
                    <p>You are about to delete one User, this procedure is irreversible.</p>
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
        return "AffiliateAffiliateManagementBundle:Userinfo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 130,  214 => 111,  198 => 101,  191 => 97,  178 => 87,  174 => 86,  170 => 85,  166 => 84,  162 => 83,  156 => 82,  150 => 81,  147 => 80,  143 => 79,  117 => 55,  114 => 53,  85 => 27,  80 => 25,  74 => 22,  70 => 21,  64 => 18,  59 => 15,  57 => 14,  54 => 13,  40 => 4,  37 => 3,  31 => 2,);
    }
}
