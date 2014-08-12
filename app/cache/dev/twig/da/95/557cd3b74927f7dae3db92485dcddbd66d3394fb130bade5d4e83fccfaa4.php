<?php

/* AffiliateAffiliateManagementBundle:Affiliateinfo:edit.html.twig */
class __TwigTemplate_da95557cd3b74927f7dae3db92485dcddbd66d3394fb130bade5d4e83fccfaa4 extends Twig_Template
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
        echo " Affiliate Information";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "    
    
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<!-- Main content -->

                        <div class=\"col-md-6\">
                            <!-- general form elements disabled -->
                            <div class=\"box box-warning\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Affiliate Info</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("enctype" => "multipart/form-data", "attr" => array("class" => "", "role" => "form")));
        echo "
                                        <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>First Name</label>
                                             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fname"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                         <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Last Name</label>
                                           ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lname"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            
                                        </div>
                                         
                                          <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>User Name</label>
                                        
                                           ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "username"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                            
                                        </div>
                                          
                                           <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Password</label>
                                             ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                       
                                           <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Confirm Password</label>
                                             ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                           <div class=\"form-group\">
                                            <label>Email</label>
                                            ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>State</label>
                                            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "state"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>Country</label>
                                            ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                         <div class=\"form-group\">
                                            <label>Zipcode</label>
                                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zipcode"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>Mobile</label>
                                            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                        <div class=\"form-group\">
                                            <label>User Type</label>
                                            ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "addedBy"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                           <!-- <input type=\"text\" class=\"form-control\" placeholder=\"Enter ...\"/>-->
                                        </div>
                                           
                                          ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
                                           <div class=\"form-group\">
                                             <button type=\"submit\"  class=\"btn btn-success\"><i class=\"icon-ok icon-green\"></i> Create</button>
                                        </div>
                                          
                                    ";
        // line 97
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo " 
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("adminpayreq");
        echo "\">
                                        Back to the list
                                    </a>
                                </li>
                            </ul>
                            
                        </div><!--/.col (right) -->

          

";
    }

    public function getTemplateName()
    {
        return "AffiliateAffiliateManagementBundle:Affiliateinfo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 103,  186 => 97,  178 => 92,  171 => 88,  162 => 82,  153 => 76,  144 => 70,  135 => 64,  126 => 58,  118 => 53,  109 => 47,  99 => 40,  88 => 32,  79 => 26,  72 => 22,  61 => 13,  58 => 11,  50 => 7,  47 => 6,  40 => 4,  37 => 3,  31 => 2,);
    }
}
