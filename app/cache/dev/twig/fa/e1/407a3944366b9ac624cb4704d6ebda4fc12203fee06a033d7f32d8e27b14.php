<?php

/* ::baseadmindemo.html.twig */
class __TwigTemplate_fae1407a3944366b9ac624cb4704d6ebda4fc12203fee06a033d7f32d8e27b14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
      ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 39
        echo "    <body class=\"skin-blue\">
        <!-- header logo: style can be found in header.less -->
        <header class=\"header\">
            <a href=\"#\" class=\"logo\">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Affiliate
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </a>
                <div class=\"navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class=\"dropdown messages-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-envelope\"></i>
                                <span class=\"label label-success\">4</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- start message -->
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar2.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <div class=\"pull-left\">
                                                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class=\"dropdown notifications-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-warning\"></i>
                                <span class=\"label label-warning\">10</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-people info\"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-warning danger\"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"fa fa-users warning\"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-cart success\"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <i class=\"ion ion-ios7-person danger\"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"footer\"><a href=\"#\">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class=\"dropdown tasks-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-tasks\"></i>
                                <span class=\"label label-danger\">9</span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li class=\"header\">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class=\"menu\">
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Design some buttons
                                                    <small class=\"pull-right\">20%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Create a nice theme
                                                    <small class=\"pull-right\">40%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Some task I need to do
                                                    <small class=\"pull-right\">60%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href=\"#\">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class=\"pull-right\">80%</small>
                                                </h3>
                                                <div class=\"progress xs\">
                                                    <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                        <span class=\"sr-only\">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class=\"footer\">
                                    <a href=\"#\">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class=\"dropdown user user-menu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"glyphicon glyphicon-user\"></i>
                                <span>Jane Doe <i class=\"caret\"></i></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <!-- User image -->
                                <li class=\"user-header bg-light-blue\">
                                    <img src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar3.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class=\"user-body\">
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Followers</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Sales</a>
                                    </div>
                                    <div class=\"col-xs-4 text-center\">
                                        <a href=\"#\">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class=\"user-footer\">
                                    <div class=\"pull-left\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                    </div>
                                    <div class=\"pull-right\">
                                        <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class=\"wrapper row-offcanvas row-offcanvas-left\">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class=\"left-side sidebar-offcanvas\">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class=\"sidebar\">
                    <!-- Sidebar user panel -->
                    ";
        // line 312
        echo "                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class=\"sidebar-menu\">
                        <li>
                            <a href=\"#\">
                                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class=\"treeview\" ";
        // line 321
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "admin"))) {
            echo " class='active'";
        }
        echo ">
                            <a href=\"#\">
                                <i class=\"fa fa-bar-chart-o\"></i>
                                <span>Admin</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\" ";
        // line 327
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "admin"))) {
            echo " style='display:block'";
        }
        echo ">
                                
                                <li ";
        // line 329
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "adminpayreq")) {
            echo " class='active'";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("adminpayreq");
        echo "\" ><i class=\"fa fa-angle-double-right\"></i> Admin Payment Request</a></li>
                                
                            </ul>
                        </li>
                        <li class=\"treeview\" ";
        // line 333
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "userinfo"))) {
            echo " class='active'";
        }
        echo ">
                            <a href=\"#\">
                                <i class=\"fa fa-laptop\"></i>
                                <span>User</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\" ";
        // line 339
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "userinfo"))) {
            echo " style='display:block'";
        }
        echo ">
                                <li><a href=\"";
        // line 340
        echo $this->env->getExtension('routing')->getPath("userinfo");
        echo "\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "userinfo")) {
            echo " class='active'";
        }
        echo "><i class=\"fa fa-angle-double-right\"></i> User Info</a></li>
                               
                            </ul>
                        </li>
                        <li class=\"treeview\" ";
        // line 344
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "affiliate"))) {
            echo " class='active' ";
        }
        echo ">
                            <a href=\"#\">
                                <i class=\"fa fa-edit\"></i> <span>Affiliate</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\" ";
        // line 349
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "affiliate"))) {
            echo " style='display:block'";
        }
        echo " >
                                
                                <li ";
        // line 351
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "affiliatepayreq")) {
            echo " class='active'";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("affiliatepayreq");
        echo "\" ><i class=\"fa fa-angle-double-right\"></i> Affiliate Pay Request</a></li>
                                <li ";
        // line 352
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "affiliatedeal")) {
            echo " class='active'";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("affiliatedeal");
        echo "\" ><i class=\"fa fa-angle-double-right\"></i> Affiliate Deal</a></li>
                            </ul>
                        </li>
                        
                           <li class=\"treeview\" ";
        // line 356
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "deal")) {
            echo " class='active'";
        }
        echo ">
                            <a href=\"#\">
                                <i class=\"fa fa-calendar\"></i>
                                <span>Deal</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\" ";
        // line 362
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "deal"))) {
            echo " style='display:block'";
        }
        echo ">
                                <li><a href=\"";
        // line 363
        echo $this->env->getExtension('routing')->getPath("deal");
        echo "\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "deal")) {
            echo " class='active'";
        }
        echo "><i class=\"fa fa-angle-double-right\"></i> Deal</a></li>
                               
                            </ul>
                        </li>
                        
                         <li class=\"treeview\" ";
        // line 368
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "members")) {
            echo " class='active'";
        }
        echo ">
                            <a href=\"#\">
                                <i class=\"fa fa-calendar\"></i>
                                <span>Members</span>
                                <i class=\"fa fa-angle-left pull-right\"></i>
                            </a>
                            <ul class=\"treeview-menu\" ";
        // line 374
        if ((0 === strpos($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method"), "members"))) {
            echo " style='display:block'";
        }
        echo ">
                                <li><a href=\"";
        // line 375
        echo $this->env->getExtension('routing')->getPath("membersinfo");
        echo "\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method") == "membersinfo")) {
            echo " class='active'";
        }
        echo "><i class=\"fa fa-angle-double-right\"></i>Members List</a></li>
                               
                            </ul>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class=\"right-side\">
                <!-- Content Header (Page header) -->
                <section class=\"content-header\">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class=\"breadcrumb\">
                        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                        <li class=\"active\">Dashboard</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class=\"content\">
                    <div class=\"row\">
                          <!-- put your content here -->
                                    ";
        // line 403
        $this->displayBlock('body', $context, $blocks);
        // line 404
        echo "                           <!-- End your content here -->
                    </div>

                </section><!-- /.content -->
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

  ";
        // line 414
        $this->displayBlock('javascripts', $context, $blocks);
        // line 451
        echo "    </body>
</html>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "        <meta charset=\"UTF-8\">
       <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 37
        echo " 
    ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Admin Home Page";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- font Awesome -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Ionicons -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Morris chart -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- jvectormap -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Date Picker -->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Daterange picker -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- DATA TABLES -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Theme style -->
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/AdminLTE.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
       
       

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 403
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 414
    public function block_javascripts($context, array $blocks = array())
    {
        // line 415
        echo "        <!-- jQuery 2.0.2 -->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Morris.js charts -->
        <script src=\"//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
        <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/jqueryKnob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE App -->
        <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/AdminLTE/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/plugins/select/select2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        
";
    }

    public function getTemplateName()
    {
        return "::baseadmindemo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 448,  681 => 447,  675 => 444,  669 => 441,  663 => 438,  658 => 436,  653 => 434,  648 => 432,  643 => 430,  638 => 428,  634 => 427,  629 => 425,  624 => 423,  618 => 420,  613 => 418,  608 => 415,  605 => 414,  599 => 403,  584 => 27,  579 => 25,  574 => 23,  569 => 21,  564 => 19,  559 => 17,  554 => 15,  549 => 13,  544 => 11,  538 => 9,  535 => 8,  529 => 5,  524 => 37,  522 => 8,  516 => 5,  513 => 4,  510 => 3,  505 => 451,  503 => 414,  491 => 404,  489 => 403,  454 => 375,  448 => 374,  437 => 368,  425 => 363,  419 => 362,  408 => 356,  397 => 352,  389 => 351,  382 => 349,  372 => 344,  361 => 340,  355 => 339,  344 => 333,  333 => 329,  326 => 327,  315 => 321,  304 => 312,  262 => 254,  124 => 119,  109 => 107,  94 => 95,  64 => 71,  30 => 39,  28 => 3,  24 => 1,  214 => 120,  196 => 104,  181 => 95,  174 => 91,  161 => 81,  157 => 80,  153 => 79,  147 => 78,  144 => 77,  140 => 76,  117 => 55,  114 => 53,  84 => 26,  79 => 83,  73 => 21,  69 => 20,  63 => 17,  58 => 14,  56 => 13,  53 => 12,  40 => 4,  37 => 3,  31 => 2,);
    }
}
