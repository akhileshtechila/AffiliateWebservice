<?php

/* AffiliateAffiliateManagementBundle:AffiliatePayReq:edit.html.twig */
class __TwigTemplate_41aebfc4b3a447b03a7b6bd5551367ab0acbf1ba52b06251a2c174682e56c3a6 extends Twig_Template
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
        echo " Affiliate Payment Request ";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css\">
";
    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        // line 10
        echo "    <!-- jQuery 2.0.2 -->
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
    <!-- Bootstrap -->


    <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>

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
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/select/select2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>


    <script type=\"text/javascript\">
        \$(function() {
            //\$( \"#datepicker1\" ).datepicker();
            \$(\"#affiliatepayreq_requestedDate\").datepicker(\$.datepicker.regional[\"en\"]).datepicker(\"option\", {
                changeMonth: true,
                changeYear: true,
                dateFormat: \"dd/mm/yy\",
                todayHighlight: true,
                //yearRange: \"1972:2020\"
            });

        });

    </script>


    <script>
        \$(document).ready(function() {
            \$(\"#affiliatepayreq_Affiliateinfo\").select2({
                placeholder: \"Select a Option\",
                allowClear: true
            });

            \$(\"#affiliatepayreq_Userinfo\").select2({
                placeholder: \"Select a Option\",
                allowClear: true
            });
        });
    </script>

";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 64
        echo "<!-- Main content -->

    <div class=\"col-md-6\">
        <!-- general form elements disabled -->
        <div class=\"box box-warning\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">Affiliate Payment Request</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                ";
        // line 73
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("enctype" => "multipart/form-data", "attr" => array("class" => "", "role" => "form")));
        echo "
                <!-- text input -->
                <div class=\"form-group\">
                    <label>User name</label>
                    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Userinfo"), 'widget', array("attr" => array("class" => "")));
        echo " 
                </div>

                <!-- text input -->
                <div class=\"form-group\">
                    <label>Affiliate Name</label>
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "Affiliateinfo"), 'widget', array("attr" => array("class" => "")));
        echo " 

                </div>

                <!-- text input -->
                <div class=\"form-group\">
                    <label>Requested Amount</label>                                        
                    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "requestedAmt"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 

                </div>

                <!-- text input -->
                <div class=\"form-group\">
                    <label>Request date</label>
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "requestedDate"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                </div>


                <div class=\"form-group\">
                    <label>Description</label>
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                </div>

                <div class=\"form-group\">
                    <label>Req Status</label>
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "reqStatus"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                </div>

                ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
                <div class=\"form-group\">
                    <button type=\"submit\"  class=\"btn btn-success\"><i class=\"icon-ok icon-green\"></i> Create</button>
                </div>

                ";
        // line 116
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo " 
            </div><!-- /.box-body -->

            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("affiliatepayreq");
        echo "\">
                        Back to the list
                    </a>
                </li>
            </ul>

        </div><!-- /.box -->



    </div><!--/.col (right) -->



";
    }

    public function getTemplateName()
    {
        return "AffiliateAffiliateManagementBundle:AffiliatePayReq:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 121,  210 => 116,  202 => 111,  196 => 108,  188 => 103,  179 => 97,  169 => 90,  159 => 83,  150 => 77,  143 => 73,  132 => 64,  129 => 62,  91 => 27,  87 => 26,  82 => 24,  76 => 21,  72 => 20,  66 => 17,  57 => 10,  55 => 9,  52 => 8,  45 => 5,  40 => 4,  37 => 3,  31 => 2,);
    }
}
