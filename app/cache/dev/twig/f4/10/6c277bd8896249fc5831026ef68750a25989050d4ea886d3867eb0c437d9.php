<?php

/* AffiliateAffiliateManagementBundle:Userinfo:edit.html.twig */
class __TwigTemplate_f4106c277bd8896249fc5831026ef68750a25989050d4ea886d3867eb0c437d9 extends Twig_Template
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
        echo " Admin Payment Released ";
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

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "   ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo " 
   
    
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<!-- Main content -->

                        <div class=\"col-md-6\">
                            <!-- general form elements disabled -->
                            <div class=\"box box-warning\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">User Information</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("enctype" => "multipart/form-data", "attr" => array("class" => "", "role" => "form")));
        echo "
                                        <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>First Name</label>
                                             ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fName"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                         <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Last Name</label>
                                           ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "lName"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                            
                                        </div>
                                         
                                          <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Email</label>
                                        
                                           ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                            
                                        </div>
                                          
                                           <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>User Name</label>
                                             ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userName"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                       
                                      
                                        
                                        <div class=\"form-group\">
                                            <label>Password</label>
                                            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                         
                                         <div class=\"form-group\">
                                            <label>Confirm Password</label>
                                            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                                                                  
                                        <div class=\"form-group\">
                                            <label>State</label>
                                            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "state"), 'widget', array("attr" => array("class" => "form-control")));
        echo "                                         
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>Country</label>
                                            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "country"), 'widget', array("attr" => array("class" => "form-control")));
        echo "                                         
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>Zipcode</label>
                                            ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zipCode"), 'widget', array("attr" => array("class" => "form-control")));
        echo "                                         
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>Mobile No</label>
                                            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "mobile"), 'widget', array("attr" => array("class" => "form-control")));
        echo "                                         
                                        </div>
                                        
                                        <div class=\"form-group\">
                                            <label>User Type</label>
                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "userType"), 'widget', array("attr" => array("class" => "form-control")));
        echo "                                         
                                        </div>
                                        
                                        
                                          ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
                                           <div class=\"form-group\">
                                             <button type=\"submit\"  class=\"btn btn-success\"><i class=\"icon-ok icon-green\"></i> Create</button>
                                        </div>
                                          
                                    ";
        // line 95
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo " 
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("userinfo");
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
        return "AffiliateAffiliateManagementBundle:Userinfo:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 101,  184 => 95,  176 => 90,  169 => 86,  161 => 81,  153 => 76,  145 => 71,  137 => 66,  129 => 61,  121 => 56,  111 => 49,  101 => 42,  90 => 34,  81 => 28,  74 => 24,  63 => 15,  60 => 13,  51 => 8,  48 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
