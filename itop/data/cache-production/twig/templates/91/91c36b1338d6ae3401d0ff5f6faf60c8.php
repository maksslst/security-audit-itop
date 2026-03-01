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

/* base/layouts/tab-container/layout.html.twig */
class __TwigTemplate_e0385499e900a4a6224a97e6fee47cb3 extends Template
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
            'iboTabContainer' => [$this, 'block_iboTabContainer'],
            'iboTabContainerTabsList' => [$this, 'block_iboTabContainerTabsList'],
            'iboTabContainerTab' => [$this, 'block_iboTabContainerTab'],
            'iboTabContainerTabsContainers' => [$this, 'block_iboTabContainerTabsContainers'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ibo-is-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 3), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method", false, false, false, 3)) {
            yield " ibo-is-scrollable";
        }
        yield "\"
     data-role=\"ibo-tab-container\" data-status=\"loading\">
    ";
        // line 5
        yield from $this->unwrap()->yieldBlock('iboTabContainer', $context, $blocks);
        // line 99
        yield "</div>

";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboTabContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "        <ul class=\"ibo-tab-container--tabs-list\" data-role=\"ibo-tab-container--tabs-list\">
            ";
        // line 7
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 7)) {
            // line 8
            yield "                ";
            yield from $this->unwrap()->yieldBlock('iboTabContainerTabsList', $context, $blocks);
            // line 63
            yield "            ";
        }
        // line 64
        yield "        </ul>

        ";
        // line 66
        yield from $this->unwrap()->yieldBlock('iboTabContainerTabsContainers', $context, $blocks);
        // line 97
        yield "
    ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboTabContainerTabsList(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 10
            yield "                        ";
            yield from $this->unwrap()->yieldBlock('iboTabContainerTab', $context, $blocks);
            // line 38
            yield "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                    <li class=\"ibo-tab-container--extra-tabs-container ibo-tab-container--tab-header ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-container\">
                        <a href=\"#\" class=\"ibo-tab-container--extra-tabs-list-toggler\" data-role=\"ibo-tab-container--extra-tabs-list-toggler\"
                           aria-label=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:TabContainer:ExtraTabsListToggler:Label"), "html", null, true);
        yield "\"
                           data-tooltip-content=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:TabContainer:ExtraTabsListToggler:Label"), "html", null, true);
        yield "\"
                        >
                            <span class=\"fas fa-ellipsis-v\"></span>
                        </a>
                        <div class=\"ibo-tab-container--extra-tabs-list ibo-is-hidden\" data-role=\"ibo-tab-container--extra-tabs-list\">
                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
            // line 48
            yield "                                <a href=\"#tab_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 48), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            yield "\"
                                   class=\"ibo-tab-container--extra-tab-toggler\" data-role=\"ibo-tab-container--extra-tab-toggler\"
                                    ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "HasDescription", [], "method", false, false, false, 50) == true)) {
                // line 51
                yield "                                        ";
                // line 52
                yield "                                        data-tooltip-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("<div class=\"ibo-tab-container--extra-tab-toggler--tooltip-title\">");
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 52), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("</div><div class=\"ibo-tab-container--extra-tab-toggler--tooltip-description\">");
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetDescription", [], "method", false, false, false, 52), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("</div>");
                yield "\"
                                        data-tooltip-html-enabled=\"true\"
                                        ";
                // line 55
                yield "                                        data-tooltip-show-delay=\"300\"
                                    ";
            }
            // line 56
            yield ">
                                    <span>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 57), "html", null, true);
            yield "</span>
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oTab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                        </div>
                    </li>
                ";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboTabContainerTab(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 11) == Twig\Extension\CoreExtension::constant("TabManager::ENUM_TAB_TYPE_AJAX"))) {
            // line 12
            yield "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 13), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            yield "\"
                                    data-tab-type=\"";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 14), "html", null, true);
            yield "\"
                                    data-cache=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetCache", [], "method", false, false, false, 15), "html", null, true);
            yield "\"
                                    data-placeholder=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetPlaceholderAbsPath", [], "method", false, false, false, 16), "html", null, true);
            yield "\">
                                    <a data-target=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetUrl", [], "method", false, false, false, 17), "html", null, true);
            yield "\" class=\"ibo-tab-container--tab-toggler\"
                                       data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\" title=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 19), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 19), "html", null, true);
            yield "</span>
                                    </a>
                                </li>
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 22) == Twig\Extension\CoreExtension::constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
            // line 23
            yield "                                <li class=\"ibo-tab-container--tab-header\" data-role=\"ibo-tab-container--tab-header\"
                                    data-tab-id=\"tab_";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 24), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            yield "\"
                                    data-tab-type=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetType", [], "method", false, false, false, 25), "html", null, true);
            yield "\"
                                    ";
            // line 26
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "HasDescription", [], "method", false, false, false, 26) == true)) {
                // line 27
                yield "                                        data-tooltip-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetDescription", [], "method", false, false, false, 27), "html", null, true);
                yield "\"
                                        ";
                // line 29
                yield "                                        data-tooltip-show-delay=\"500\"
                                    ";
            }
            // line 30
            yield ">
                                    <a href=\"#tab_";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetId", [], "method", false, false, false, 31), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
            yield "\"
                                       class=\"ibo-tab-container--tab-toggler\" data-role=\"ibo-tab-container--tab-toggler\">
                                        <span class=\"ibo-tab-container--tab-toggler-label\" data-role=\"ibo-tab-container--tab-toggler-label\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oTab"] ?? null), "GetTitle", [], "method", false, false, false, 33), "html", null, true);
            yield "</span>
                                    </a>
                                </li>
                            ";
        }
        // line 37
        yield "                        ";
        yield from [];
    }

    // line 66
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboTabContainerTabsContainers(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 67
        yield "            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 67)) {
            // line 68
            yield "                <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 68), "html", null, true);
            yield "--tab-container-list\" class=\"ibo-tab-container--tab-container-list";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIsScrollable", [], "method", false, false, false, 68)) {
                yield " ibo-is-scrollable";
            }
            yield "\" data-role=\"ibo-tab-container--tab-container-list\">
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 70
                yield "                        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 70) == Twig\Extension\CoreExtension::constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 71
                    yield "                            <div id=\"tab_";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 71), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                    yield "\"
                                 class=\"ibo-tab-container--tab-container\">
                                <div class=\"ibo-tab-container--tab-container--label\"><span>";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 73), "html", null, true);
                    yield "</span></div>
                                ";
                    // line 74
                    yield $this->env->getFunction('render_block')->getCallable()($context["oTab"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
                            </div>
                        ";
                }
                // line 77
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oTab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            yield "                </div>
            ";
        } else {
            // line 80
            yield "                <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 80), "html", null, true);
            yield "--tab-container-list\" class=\"ibo-tab-container--tab-container-list\" data-role=\"ibo-tab-container--tab-container-list\">
                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["oTab"]) {
                // line 82
                yield "                    <div id=\"tab_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('sanitize')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetId", [], "method", false, false, false, 82), Twig\Extension\CoreExtension::constant("utils::ENUM_SANITIZATION_FILTER_ELEMENT_IDENTIFIER")), "html", null, true);
                yield "\"
                         class=\"ibo-tab-container--tab-container\">
                        <div class=\"ibo-title--text title\">
                            ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetTitle", [], "method", false, false, false, 85), "html", null, true);
                yield "
                        </div>
                        ";
                // line 87
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["oTab"], "GetType", [], "method", false, false, false, 87) == Twig\Extension\CoreExtension::constant("TabManager::ENUM_TAB_TYPE_HTML"))) {
                    // line 88
                    yield "                            ";
                    yield $this->env->getFunction('render_block')->getCallable()($context["oTab"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
                        ";
                } else {
                    // line 90
                    yield "                            <div class=\"printable-tab-content\"></div>
                        ";
                }
                // line 92
                yield "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oTab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                </div>
            ";
        }
        // line 96
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/tab-container/layout.html.twig";
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
        return array (  387 => 96,  383 => 94,  376 => 92,  372 => 90,  366 => 88,  364 => 87,  359 => 85,  352 => 82,  348 => 81,  343 => 80,  339 => 78,  333 => 77,  327 => 74,  323 => 73,  317 => 71,  314 => 70,  310 => 69,  301 => 68,  298 => 67,  291 => 66,  286 => 37,  279 => 33,  274 => 31,  271 => 30,  267 => 29,  262 => 27,  260 => 26,  256 => 25,  252 => 24,  249 => 23,  247 => 22,  239 => 19,  234 => 17,  230 => 16,  226 => 15,  222 => 14,  218 => 13,  215 => 12,  212 => 11,  205 => 10,  198 => 60,  189 => 57,  186 => 56,  182 => 55,  172 => 52,  170 => 51,  168 => 50,  162 => 48,  158 => 47,  150 => 42,  146 => 41,  142 => 39,  128 => 38,  125 => 10,  107 => 9,  100 => 8,  94 => 97,  92 => 66,  88 => 64,  85 => 63,  82 => 8,  80 => 7,  77 => 6,  70 => 5,  63 => 99,  61 => 5,  46 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/tab-container/layout.html.twig", "/var/www/html/templates/base/layouts/tab-container/layout.html.twig");
    }
}
