<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* pages/backoffice/ajaxpage/layout.html.twig */
class __TwigTemplate_8ee047d55285f7a4dab7d42eca3d5383 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPageJsInlineEarly' => [$this, 'block_iboPageJsInlineEarly'],
            'iboPageJsInlineLive' => [$this, 'block_iboPageJsInlineLive'],
            'iboPageJsFiles' => [$this, 'block_iboPageJsFiles'],
            'iboPageJsInlineOnDomReady' => [$this, 'block_iboPageJsInlineOnDomReady'],
            'iboPageCssFiles' => [$this, 'block_iboPageCssFiles'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "    ";
            $context["sId"] = $this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oLayout"] ?? null), "GetId", [], "method", false, false, false, 4), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
            // line 5
            yield "    ";
            $context["bHasOnInitOrOnDomReadyScripts"] = ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 5)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 5)));
            // line 6
            yield "    ";
            if (($context["bEscapeContent"] ?? null)) {
                // line 7
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]));
                yield "
    ";
            } else {
                // line 9
                yield "        ";
                yield $this->env->getFunction('render_block')->getCallable()(($context["oLayout"] ?? null), ["aPage" => ($context["aPage"] ?? null)]);
                yield "
    ";
            }
            // line 11
            yield "
    ";
            // line 12
            yield from $this->unwrap()->yieldBlock('iboPageJsInlineEarly', $context, $blocks);
            // line 20
            yield "
    ";
            // line 21
            yield from $this->unwrap()->yieldBlock('iboPageJsInlineLive', $context, $blocks);
            // line 29
            yield "
    ";
            // line 30
            if (($context["bHasOnInitOrOnDomReadyScripts"] ?? null)) {
                // line 31
                yield "        <script type=\"text/javascript\">
            let fOnJsFilesLoaded";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
                yield " = function (fResolve) {
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnInit", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
                    // line 34
                    yield "                ";
                    yield $context["sJsInline"];
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sJsInline'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "    
                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineOnDomReady", [], "any", false, false, false, 37));
                foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
                    // line 38
                    yield "                ";
                    yield $context["sJsInline"];
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sJsInline'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "                fResolve();
            }
        </script>
    ";
            }
            // line 44
            yield "    
    ";
            // line 45
            $context["sPromiseId"] = CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "sPromiseId", [], "any", false, false, false, 45);
            // line 46
            yield "\t";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 46))) {
                // line 47
                yield "        ";
                yield from $this->unwrap()->yieldBlock('iboPageJsFiles', $context, $blocks);
                // line 164
                yield "    ";
            } else {
                // line 165
                yield "        ";
                if (($context["bHasOnInitOrOnDomReadyScripts"] ?? null)) {
                    // line 166
                    yield "            ";
                    yield from $this->unwrap()->yieldBlock('iboPageJsInlineOnDomReady', $context, $blocks);
                    // line 173
                    yield "        ";
                }
                // line 174
                yield "    ";
            }
            // line 175
            yield "
    ";
            // line 176
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["aDeferredBlocks"] ?? null))) {
                // line 177
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["aDeferredBlocks"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["oBlock"]) {
                    // line 178
                    yield "            ";
                    yield $this->env->getFunction('render_block')->getCallable()($context["oBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['oBlock'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                yield "    ";
            }
            // line 181
            yield "
    ";
            // line 182
            if (($context["sDeferredContent"] ?? null)) {
                // line 183
                yield "        <script type=\"text/javascript\">
            \$('body').append('";
                // line 184
                yield ($context["sDeferredContent"] ?? null);
                yield "');
        </script>
    ";
            }
            // line 187
            yield "
    ";
            // line 188
            yield from $this->unwrap()->yieldBlock('iboPageCssFiles', $context, $blocks);
            // line 211
            yield "
    ";
            // line 212
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "sCapturedOutput", [], "any", false, false, false, 212);
            yield "

";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageJsInlineEarly(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineEarly", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 14
            yield "            ";
            // line 15
            yield "            <script type=\"text/javascript\">
            ";
            // line 16
            yield $context["sJsInline"];
            yield "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sJsInline'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    ";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageJsInlineLive(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsInlineLive", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsInline"]) {
            // line 23
            yield "            ";
            // line 24
            yield "            <script type=\"text/javascript\">
                ";
            // line 25
            yield $context["sJsInline"];
            yield "
            </script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sJsInline'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "    ";
        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageJsFiles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        yield "            <script type=\"text/javascript\">
                ";
        // line 49
        if ((($context["bHasOnInitOrOnDomReadyScripts"] ?? null) == false)) {
            // line 50
            yield "                // Define a dummy empty callback if there's no script to execute
                let fOnJsFilesLoaded";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
            yield " = function (fResolve) {
                    fResolve();
                }
                ";
        }
        // line 55
        yield "                
                window['";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sPromiseId"] ?? null), "html", null, true);
        yield "'] = new Promise(function (fAllJsFilesResolve, fAllJsFilesReject) {
                    /**
                     * @type {Array} aJsFilesToLoad Files required by the current AjaxPage
                     *
                     * For each file:
                     * - \"id\": Used as an identifier to check if file is already being handled
                     * - \"url\" is the URL that will be used for loading. It should include any relevant query args, including the cache buster
                     *
                     * ```
                     * [
                     *  {\"id\": \"https://itop/js/foo.js\", \"url\": \"https://itop/js/foo.js?cache_buster=123},
                     *  {\"id\": \"https://itop/js/bar.js\", \"url\": \"https://itop/js/bar.js?a=b&cache_buster=123\"},
                     *  ...
                     * ]
                     * ```
                     */
                    
                    // If these constants aren't defined by the main page, define them (global) ourselves
                    if (typeof aLoadedJsFilesRegister === \"undefined\") {
                        Object.defineProperty(window, \"aLoadedJsFilesRegister\", {
                            value: new Map(),
                            writable: false,
                            configurable: false,
                            enumerable: true
                        });
                    }      
                    
                    if (typeof aLoadedJsFilesResolveCallbacks === \"undefined\") {
                        Object.defineProperty(window, \"aLoadedJsFilesResolveCallbacks\", {
                            value: new Map(),
                            writable: false,
                            configurable: false,
                            enumerable: true
                        });
                    }
                    
                    let aJsFilesToLoad = [];
                    /**
                     * @type {Array} aJsFilesToLoadByOtherRequests Files required by the current AjaxPage but that are already being handled by another request (done or ongoing)
                     */
                    let aJsFilesToLoadByOtherRequests = [];

                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aJsFiles", [], "any", false, false, false, 98));
        foreach ($context['_seq'] as $context["_key"] => $context["sJsFile"]) {
            // line 99
            yield "                        aJsFilesToLoad.push({
                            \"id\": \"";
            // line 100
            yield $context["sJsFile"];
            yield "\",
                            \"url\": \"";
            // line 101
            yield $this->env->getFilter('add_itop_version')->getCallable()($context["sJsFile"]);
            yield "\"
                        });

                        // If file is already present in the register (see it declaration in WebPage TWIG template), let its original requester load it
                        if (aLoadedJsFilesRegister.has(\"";
            // line 105
            yield $context["sJsFile"];
            yield "\") === true) {
                            aJsFilesToLoadByOtherRequests.push(\"";
            // line 106
            yield $context["sJsFile"];
            yield "\");
                        }
                        // Otherwise add it to register and initialize corresponding promise
                        else {
                            aLoadedJsFilesRegister.set(\"";
            // line 110
            yield $context["sJsFile"];
            yield "\", new Promise(function(fJsFileResolve) {
                                aLoadedJsFilesResolveCallbacks.set(\"";
            // line 111
            yield $context["sJsFile"];
            yield "\", fJsFileResolve);
                            }));
                        }
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sJsFile'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "
                    let iCurrentIdx = 0;
                    let iFilesToLoadCount = aJsFilesToLoad.length;
                    if (iFilesToLoadCount > 0)
                    {
                        let fLoadScript";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield " = function () {
                            let sCurrentFileId = aJsFilesToLoad[iCurrentIdx][\"id\"];
                            let sCurrentFileUrl = aJsFilesToLoad[iCurrentIdx][\"url\"];

                            /** @type {Promise} oPromise Promise to use once file is loaded */
                            let oPromise = null;
                            // If file is handled by another request, retrieve the existing promise
                            if (\$.inArray(sCurrentFileId, aJsFilesToLoadByOtherRequests) !== -1) {
                                oPromise = aLoadedJsFilesRegister.get(sCurrentFileId)
                            }
                            // Otherwise create its own promise to load it
                            else {
                                oPromise = \$.when(
                                        \$.ajax({
                                            url: sCurrentFileUrl,
                                            dataType: 'script',
                                            cache: true
                                        }),
                                        aLoadedJsFilesResolveCallbacks.get(sCurrentFileId)()
                                );
                            }

                            // Only once file is loaded (by the request or another), proceed to next step
                            oPromise.then(function () {
                                iCurrentIdx++;
                                if (iCurrentIdx !== iFilesToLoadCount)
                                {
                                    fLoadScript";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield "();
                                }
                                else
                                {
                                    fOnJsFilesLoaded";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield "(fAllJsFilesResolve);
                                }
                            });
                        };
                        fLoadScript";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield "();
                    }
                    else
                    {
                        fOnJsFilesLoaded";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield "(fAllJsFilesResolve);
                    }
                });
            </script>
        ";
        yield from [];
    }

    // line 166
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageJsInlineOnDomReady(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 167
        yield "                <script type=\"text/javascript\">
                    window['";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sPromiseId"] ?? null), "html", null, true);
        yield "'] = new Promise(function (fNoJsFileResolve, fNoJsFileReject) {
                        fOnJsFilesLoaded";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sId"] ?? null), "html", null, true);
        yield "(fNoJsFileResolve);
                    });
                </script>
            ";
        yield from [];
    }

    // line 188
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageCssFiles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 189
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aCssFiles", [], "any", false, false, false, 189))) {
            // line 190
            yield "            <script type=\"text/javascript\">
                // If this constant isn't defined by the main page, define it (global) ourselves
                if (typeof aLoadedCssFilesRegister === \"undefined\") {
                    Object.defineProperty(window, \"aLoadedCssFilesRegister\", {
                        value: new Map(),
                        writable: false,
                        configurable: false,
                        enumerable: true
                    });
                }

                ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "aCssFiles", [], "any", false, false, false, 201));
            foreach ($context['_seq'] as $context["_key"] => $context["aCssFileData"]) {
                // line 202
                yield "                    // Only if file is NOT already present in the register (see it declaration in WebPage TWIG template), add it to the page and register
                    if (aLoadedCssFilesRegister.has(\"";
                // line 203
                yield (($_v1 = $context["aCssFileData"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["link"] ?? null) : null);
                yield "\") === false) {
                        \$('<link href=\"";
                // line 204
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["aCssFileData"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["link"] ?? null) : null), "html", null, true);
                yield "\" rel=\"stylesheet\">').appendTo('head');
                        aLoadedCssFilesRegister.set(\"";
                // line 205
                yield (($_v3 = $context["aCssFileData"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3["link"] ?? null) : null);
                yield "\", true);
                    }
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aCssFileData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            yield "            </script>
        ";
        }
        // line 210
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "pages/backoffice/ajaxpage/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  526 => 210,  522 => 208,  513 => 205,  509 => 204,  505 => 203,  502 => 202,  498 => 201,  485 => 190,  482 => 189,  475 => 188,  466 => 169,  462 => 168,  459 => 167,  452 => 166,  442 => 159,  435 => 155,  428 => 151,  421 => 147,  391 => 120,  384 => 115,  374 => 111,  370 => 110,  363 => 106,  359 => 105,  352 => 101,  348 => 100,  345 => 99,  341 => 98,  296 => 56,  293 => 55,  286 => 51,  283 => 50,  281 => 49,  278 => 48,  271 => 47,  266 => 28,  257 => 25,  254 => 24,  252 => 23,  247 => 22,  240 => 21,  235 => 19,  226 => 16,  223 => 15,  221 => 14,  216 => 13,  209 => 12,  204 => 3,  197 => 212,  194 => 211,  192 => 188,  189 => 187,  183 => 184,  180 => 183,  178 => 182,  175 => 181,  172 => 180,  163 => 178,  158 => 177,  156 => 176,  153 => 175,  150 => 174,  147 => 173,  144 => 166,  141 => 165,  138 => 164,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  121 => 40,  112 => 38,  108 => 37,  105 => 36,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  83 => 30,  80 => 29,  78 => 21,  75 => 20,  73 => 12,  70 => 11,  64 => 9,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/backoffice/ajaxpage/layout.html.twig", "/var/www/html/templates/pages/backoffice/ajaxpage/layout.html.twig");
    }
}
