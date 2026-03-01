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

/* base/components/quick-create/layout.html.twig */
class __TwigTemplate_ed22d7ccbf40139280e08650bf7d5261 extends Template
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
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield "\" data-role=\"ibo-quick-create\">
\t<form action=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetEndpoint", [], "method", false, false, false, 2), "html", null, true);
        yield "\" method=\"get\" class=\"ibo-quick-create--head\" data-role=\"ibo-quick-create--head\">
\t\t<input type=\"hidden\" name=\"operation\" value=\"new\">
\t\t<a href=\"#\" class=\"ibo-quick-create--icon\" data-role=\"ibo-quick-create--icon\"
           aria-label=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Tooltip"), "html", null, true);
        yield "\"
           data-tooltip-content=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Tooltip"), "html", null, true);
        yield "\"
\t\t   data-tooltip-placement=\"bottom-start\"
           data-tooltip-distance-offset=\"25\"
        >
\t\t\t<span class=\"fas fa-plus\"></span>
\t\t</a>
\t\t<select name=\"class\" class=\"ibo-quick-create--input\" data-role=\"ibo-quick-create--input\">
\t\t\t<option value=\"\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Input:Placeholder"), "html", null, true);
        yield "</option>
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAvailableClasses", [], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["sClassCode"] => $context["sClassLabel"]) {
            // line 15
            yield "\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sClassCode"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sClassLabel"], "html", null, true);
            yield "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sClassCode'], $context['sClassLabel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "\t\t</select>
\t</form>
\t<div class=\"ibo-quick-create--drawer\" data-role=\"ibo-quick-create--drawer\">
\t\t<div class=\"ibo-quick-create--compartment\">
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-results\">
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-title\" data-role=\"ibo-quick-create--compartment-title\">
\t\t\t\t<span>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:Recents:Title"), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t<div class=\"ibo-quick-create--compartment-content\" data-role=\"ibo-quick-create--compartment-content\">
\t\t\t\t";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowHistory", [], "any", false, false, false, 27) == false)) {
            // line 28
            yield "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:HistoryDisabled"), "html", null, true);
            yield "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["oUIBlock"] ?? null), "GetLastClasses", [], "method", false, false, false, 31)) > 0)) {
            // line 32
            yield "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastClasses", [], "method", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["aClass"]) {
                // line 33
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aClass"], "target_url", [], "any", false, false, false, 33), "html", null, true);
                yield "\" class=\"ibo-quick-create--compartment-element\" data-role=\"ibo-quick-create--compartment-element\" data-class-code=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aQuery"] ?? null), "class", [], "any", false, false, false, 33), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["aClass"], "icon_url", [], "any", true, true, false, 34)) {
                    // line 35
                    yield "                                ";
                    // line 36
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aClass"], "icon_url", [], "any", false, false, false, 36), "html", null, true);
                    yield "\" alt=\"\" class=\"ibo-quick-create--compartment-element-image\">
\t\t\t\t\t\t\t";
                }
                // line 38
                yield "\t\t\t\t\t\t\t";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["aClass"], "label_html", [], "any", false, false, false, 38);
                yield "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aClass'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "\t\t\t\t";
        } else {
            // line 42
            yield "\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder\">
\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-image ibo-svg-illustration--container\">
\t\t\t\t\t\t";
            // line 44
            yield Twig\Extension\CoreExtension::source($this->env, "illustrations/undraw_content.svg");
            yield "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"ibo-quick-create--compartment--placeholder-hint\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Component:QuickCreate:LastClasses:NoClass:Placeholder"), "html", null, true);
            yield "</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 50
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
        return "base/components/quick-create/layout.html.twig";
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
        return array (  168 => 50,  162 => 47,  156 => 44,  152 => 42,  149 => 41,  139 => 38,  133 => 36,  131 => 35,  129 => 34,  122 => 33,  117 => 32,  115 => 31,  110 => 29,  107 => 28,  105 => 27,  99 => 24,  90 => 17,  79 => 15,  75 => 14,  71 => 13,  61 => 6,  57 => 5,  51 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/quick-create/layout.html.twig", "/var/www/html/templates/base/components/quick-create/layout.html.twig");
    }
}
