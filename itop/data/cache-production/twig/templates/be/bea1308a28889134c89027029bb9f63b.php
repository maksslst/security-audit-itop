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

/* base/components/global-search/layout.html.twig */
class __TwigTemplate_53c9d1dbcb537c4b991f26c997eb8b43 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\"
\t ";
        // line 3
        yield "\t ";
        // line 4
        yield "     class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasQuery", [], "method", false, false, false, 4)) {
            yield "ibo-is-opened";
        }
        yield "\"
     data-role=\"ibo-global-search\">
\t<form action=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetEndpoint", [], "method", false, false, false, 6), "html", null, true);
        yield "\" method=\"get\" class=\"ibo-global-search--head\" data-role=\"ibo-global-search--head\">
\t\t<a href=\"#\" class=\"ibo-global-search--icon\" data-role=\"ibo-global-search--icon\"
           aria-label=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Tooltip"), "html", null, true);
        yield "\"
           data-tooltip-content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Tooltip"), "html", null, true);
        yield "\"
           data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-search\"></span>
\t\t</a>
\t\t<input type=\"text\" name=\"text\" class=\"ibo-global-search--input\" data-role=\"ibo-global-search--input\" placeholder=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Input:Placeholder"), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetQuery", [], "method", false, false, false, 15), "html", null, true);
        yield "\" autocomplete=\"off\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"full_text\">
\t</form>
\t<div class=\"ibo-global-search--drawer\" data-role=\"ibo-global-search--drawer\">
\t\t<div class=\"ibo-global-search--compartment\">
\t\t\t<div class=\"ibo-global-search--compartment-title\" data-role=\"ibo-global-search--compartment-title\">
\t\t\t\t<span>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:Recents:Title"), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-global-search--compartment-content\" data-role=\"ibo-global-search--compartment-content\">
\t\t\t\t";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowHistory", [], "any", false, false, false, 24) == false)) {
            // line 25
            yield "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:HistoryDisabled"), "html", null, true);
            yield "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 28
($context["oUIBlock"] ?? null), "GetLastQueries", [], "method", false, false, false, 28)) > 0)) {
            // line 29
            yield "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastQueries", [], "method", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["aQuery"]) {
                // line 30
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "target_url", [], "any", false, false, false, 30), "html", null, true);
                yield "\" class=\"ibo-global-search--compartment-element\" data-role=\"ibo-global-search--compartment-element\" data-query-raw=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "query", [], "any", false, false, false, 30), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "query", [], "any", false, false, false, 30), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
                // line 31
                if (CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "icon_url", [], "any", true, true, false, 31)) {
                    // line 32
                    yield "                                ";
                    // line 33
                    yield "\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "icon_url", [], "any", false, false, false, 33), "html", null, true);
                    yield "\" alt=\"\" class=\"ibo-global-search--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 35
                yield "\t\t\t\t\t\t\t";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["aQuery"], "label_html", [], "any", false, false, false, 35);
                yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aQuery'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "\t\t\t\t";
        } else {
            // line 39
            yield "\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t\t ";
            // line 41
            yield Twig\Extension\CoreExtension::source($this->env, "illustrations/undraw_search.svg");
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ibo-global-search--compartment--placeholder-hint\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:GlobalSearch:LastQueries:NoQuery:Placeholder"), "html", null, true);
            yield "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 46
        yield "\t\t\t</div>
\t\t</div>
\t</div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/global-search/layout.html.twig";
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
        return array (  160 => 46,  154 => 43,  149 => 41,  145 => 39,  142 => 38,  132 => 35,  126 => 33,  124 => 32,  122 => 31,  113 => 30,  108 => 29,  106 => 28,  101 => 26,  98 => 25,  96 => 24,  90 => 21,  79 => 15,  70 => 9,  66 => 8,  61 => 6,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/global-search/layout.html.twig", "/var/www/html/templates/base/components/global-search/layout.html.twig");
    }
}
