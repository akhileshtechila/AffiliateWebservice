<?php

/* AffiliateAffiliateManagementBundle:Deal:edit.html.twig */
class __TwigTemplate_96144ee6cb11813ca9056e64462a869f370c295536e8cc94676e1d80d6c14057 extends Twig_Template
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
        echo "Deal Information";
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

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<!-- Main content -->

                        <div class=\"col-md-6\">
                            <!-- general form elements disabled -->
                            <div class=\"box box-warning\">
                                <div class=\"box-header\">
                                    <h3 class=\"box-title\">Deal Information</h3>
                                </div><!-- /.box-header -->
                                <div class=\"box-body\">
                                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("enctype" => "multipart/form-data", "attr" => array("class" => "", "role" => "form")));
        echo "
                                        <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Deal Name</label>
                                             ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dName"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                        </div>
                                        
                                         <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Deal Duration</label>
                                           ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dealDuration"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                            
                                        </div>
                                         
                                          <!-- text input -->
                                        <div class=\"form-group\">
                                            <label>Description</label>
                                        
                                           ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "description"), 'widget', array("attr" => array("class" => "form-control")));
        echo " 
                                            
                                        </div>
                                          
                                           <!-- text input -->                                        
                                          ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token"), 'widget');
        echo "
                                           <div class=\"form-group\">
                                             <button type=\"submit\"  class=\"btn btn-success\"><i class=\"icon-ok icon-green\"></i> Create</button>
                                        </div>
                                          
                                    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo " 
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            
                            <ul class=\"record_actions\">
                                <li>
                                    <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("deal");
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
        return "AffiliateAffiliateManagementBundle:Deal:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 56,  115 => 50,  107 => 45,  99 => 40,  88 => 32,  79 => 26,  72 => 22,  61 => 13,  58 => 11,  51 => 8,  48 => 7,  40 => 4,  37 => 3,  31 => 2,);
    }
}
