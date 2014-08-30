<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_c81105579db5d2b58f7b2aa931bc74e461d8d4c03fbb395ab6fdfc9cdc969cc7 extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  75 => 28,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  32 => 6,  26 => 3,  19 => 1,  685 => 448,  681 => 447,  675 => 444,  669 => 441,  663 => 438,  658 => 436,  653 => 434,  648 => 432,  643 => 430,  638 => 428,  634 => 427,  629 => 425,  624 => 423,  618 => 420,  613 => 418,  608 => 415,  605 => 414,  599 => 403,  584 => 27,  579 => 25,  574 => 23,  569 => 21,  564 => 19,  559 => 17,  554 => 15,  549 => 13,  544 => 11,  538 => 9,  535 => 8,  529 => 5,  524 => 37,  522 => 8,  516 => 5,  513 => 4,  510 => 3,  505 => 451,  503 => 414,  491 => 404,  489 => 403,  454 => 375,  448 => 374,  437 => 368,  425 => 363,  419 => 362,  408 => 356,  397 => 352,  389 => 351,  382 => 349,  372 => 344,  361 => 340,  355 => 339,  344 => 333,  333 => 329,  326 => 327,  315 => 321,  304 => 312,  262 => 254,  124 => 119,  109 => 107,  94 => 95,  64 => 71,  30 => 5,  28 => 3,  24 => 2,  214 => 120,  196 => 104,  181 => 95,  174 => 91,  161 => 81,  157 => 80,  153 => 79,  147 => 78,  144 => 77,  140 => 76,  117 => 55,  114 => 53,  84 => 26,  79 => 29,  73 => 21,  69 => 20,  63 => 17,  58 => 14,  56 => 13,  53 => 12,  40 => 4,  37 => 3,  31 => 2,);
    }
}
