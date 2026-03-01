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

/* base/components/datatable/layout.html.twig */
class __TwigTemplate_ba1a1e0c62bc16338b0ed3c827cfd426 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        yield "
";
        // line 3
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOptions", ["select_mode"], "method", false, false, false, 3))) {
            // line 4
            yield "    <input type=\"hidden\" name=\"selectionMode\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["selectionMode"], "method", false, false, false, 4), "html", null, true);
            yield "\">
    <input type=\"hidden\" name=\"selectionCount\" value=\"0\">
    <div data-target=\"ibo-datatable--selection\"></div>
    ";
            // line 7
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", ["extra_params"], "method", false, false, false, 7))) {
                // line 8
                yield "        <input type=\"hidden\" name=\"extra_params\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", ["extra_params"], "method", false, false, false, 8)), "html", null, true);
                yield "\">
    ";
            }
            // line 10
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", ["filter"], "method", false, false, false, 10))) {
                // line 11
                yield "        <input type=\"hidden\" name=\"filter\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAjaxData", ["filter"], "method", false, false, false, 11);
                yield "\">
    ";
            }
        }
        // line 14
        yield "
<table id=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 15), "html", null, true);
        yield "\" width=\"100%\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 15), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 15)) {
            yield "ibo-is-hidden";
        }
        yield "\" data-role=\"ibo-datatable\" data-status=\"loading\">
    <thead>
    ";
        // line 17
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", ["select_mode"], "method", false, false, false, 17))) {
            // line 18
            yield "        <th></th>
    ";
        }
        // line 20
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDisplayColumns", [], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["aColumn"]) {
            // line 21
            yield "        <th class=\"ibo-datatable-header\" ";
            if ( !Twig\Extension\CoreExtension::testEmpty((($_v0 = $context["aColumn"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0["description"] ?? null) : null))) {
                yield "title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v1 = $context["aColumn"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1["description"] ?? null) : null), "html", null, true);
                yield "\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($_v2 = $context["aColumn"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["attribute_label"] ?? null) : null), "html", null, true);
            yield " </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['aColumn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 23)) {
            // line 24
            yield "        <th class=\"ibo-datatable-header\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Column:RowActions:Description"), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Datatables:Column:RowActions:Label"), "html", null, true);
            yield " </th>
    ";
        }
        // line 26
        yield "    </thead>
</table>

";
        // line 29
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 29)) {
            // line 30
            yield "    ";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActionsTemplate", [], "method", false, false, false, 30));
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/layout.html.twig";
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
        return array (  141 => 30,  139 => 29,  134 => 26,  126 => 24,  123 => 23,  108 => 21,  103 => 20,  99 => 18,  97 => 17,  84 => 15,  81 => 14,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  56 => 4,  54 => 3,  51 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/layout.html.twig", "/var/www/html/templates/base/components/datatable/layout.html.twig");
    }
}
