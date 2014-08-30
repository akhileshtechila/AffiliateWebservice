<?php

/* AffiliateAffiliateManagementBundle:AffiliatePayReq:index.html.twig */
class __TwigTemplate_0deed3b5d954e971cf38a45052a177eec97c18a955bc15f125d73e1e3dd9261f extends Twig_Template
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
        echo "Admin Payment Requested";
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
                <h3 class=\"box-title\">Admin Payment Requested</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body table-responsive\">
                <table id=\"example1\" class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Requestedamt</th>
                            <th>Requesteddate</th>
                            <th>Description</th>
                            <th>Reqstatus</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 78
            echo "                            <tr>
                                <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affiliatepayreq_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</a></td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "requestedAmt"), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "requestedDate")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "requestedDate"), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reqDescription"), "html", null, true);
            echo "</td>
                                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "reqStatus"), "html", null, true);
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
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affiliatepayreq_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Edit Affiliate</a></li>
                                                                                       
                                            <li class=\"divider\"></li>                                                
                                            <li> 
                                               <a data-href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("affiliatepayreq_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#confirm-delete\" href=\"#\">
                                                   Delete Record
                                               </a>
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
        // line 107
        echo "                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Requestedamt</th>
                            <th>Requesteddate</th>
                            <th>Description</th>
                            <th>Reqstatus</th>
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
        // line 124
        echo $this->env->getExtension('routing')->getPath("affiliatepayreq_new");
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
        return "AffiliateAffiliateManagementBundle:AffiliatePayReq:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 124,  204 => 107,  188 => 97,  181 => 93,  168 => 83,  164 => 82,  158 => 81,  154 => 80,  148 => 79,  145 => 78,  141 => 77,  117 => 55,  114 => 53,  85 => 27,  80 => 25,  74 => 22,  70 => 21,  64 => 18,  59 => 15,  57 => 14,  54 => 13,  40 => 4,  37 => 3,  31 => 2,);
    }
}
