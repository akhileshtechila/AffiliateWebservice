<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_8f28c2a097106e2e9a282e91dbc6d7f27f5c71f7b8ac905453935736fc887654 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            },
            {'maxTries': 5}
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  19 => 1,  685 => 448,  681 => 447,  675 => 444,  669 => 441,  663 => 438,  658 => 436,  653 => 434,  648 => 432,  643 => 430,  638 => 428,  634 => 427,  629 => 425,  624 => 423,  618 => 420,  613 => 418,  608 => 415,  605 => 414,  599 => 403,  584 => 27,  579 => 25,  574 => 23,  569 => 21,  564 => 19,  559 => 17,  554 => 15,  549 => 13,  544 => 11,  538 => 9,  535 => 8,  529 => 5,  524 => 37,  522 => 8,  516 => 5,  513 => 4,  510 => 3,  505 => 451,  503 => 414,  491 => 404,  489 => 403,  454 => 375,  448 => 374,  437 => 368,  425 => 363,  419 => 362,  408 => 356,  397 => 352,  389 => 351,  382 => 349,  372 => 344,  361 => 340,  355 => 339,  344 => 333,  333 => 329,  326 => 327,  315 => 321,  304 => 312,  262 => 254,  124 => 119,  109 => 107,  94 => 95,  64 => 71,  30 => 5,  28 => 3,  24 => 2,  214 => 120,  196 => 104,  181 => 95,  174 => 91,  161 => 81,  157 => 80,  153 => 79,  147 => 78,  144 => 77,  140 => 76,  117 => 55,  114 => 53,  84 => 26,  79 => 29,  73 => 21,  69 => 20,  63 => 17,  58 => 14,  56 => 13,  53 => 12,  40 => 4,  37 => 3,  31 => 2,);
    }
}
