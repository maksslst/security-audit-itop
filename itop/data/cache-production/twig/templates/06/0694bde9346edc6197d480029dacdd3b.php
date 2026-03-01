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

/* base/layouts/object/object-details/layout.html.twig */
class __TwigTemplate_fcefde56d0a693a16ad466b9c593bc36 extends Template
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

        $this->blocks = [
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base/components/panel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/components/panel/layout.html.twig", "base/layouts/object/object-details/layout.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelMetaData(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    data-object-class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassName", [], "method", false, false, false, 6), "html", null, true);
        yield "\"
    data-object-id=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 7), "html", null, true);
        yield "\"
    data-object-mode=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 8), "html", null, true);
        yield "\"
    ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasStatus", [], "method", false, false, false, 9)) {
            yield "data-object-state=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusCode", [], "method", false, false, false, 9), "html", null, true);
            yield "\"";
        }
        // line 10
        yield "    data-role=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlockCode", [], "method", false, false, false, 10), "html", null, true);
        yield "\"
";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method", false, false, false, 14))) {
            // line 15
            yield "        <span class=\"ibo-object-details--status\" data-role=\"ibo-object-details--status\" data-status-code=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusCode", [], "method", false, false, false, 15), "html", null, true);
            yield "\">
            <span class=\"ibo-object-details--status-dot\" data-role=\"ibo-object-details--status-dot\" style=\"background-color: ";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusColor", [], "method", false, false, false, 16), "html", null, true);
            yield ";\"></span>
            <span class=\"ibo-object-details--status-label\" data-role=\"ibo-object-details--status-label\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method", false, false, false, 17), "html", null, true);
            yield "</span>
        </span>
    ";
        }
        // line 20
        yield "    <span class=\"ibo-object-details--object-class\" data-role=\"ibo-object-details--object-class\">
        ";
        // line 21
        if ($this->env->getFunction('is_backoffice_menu_enabled')->getCallable()("DataModelMenu")) {
            // line 22
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('get_absolute_url_app_root')->getCallable()(), "html", null, true);
            yield "pages/schema.php?operation=details_class&class=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassName", [], "method", false, false, false, 22), "html", null, true);
            yield "\" target=\"_blank\" data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:ObjectDetails:DatamodelSchemaLink:Tooltip"), "html", null, true);
            yield "\" data-tooltip-html-enabled=\"true\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 22), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 24
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 24), "html", null, true);
            yield "
        ";
        }
        // line 26
        yield "    </span>
    ";
        // line 27
        yield from $this->yieldParentBlock("iboPanelSubTitle", $context, $blocks);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/object/object-details/layout.html.twig";
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
        return array (  137 => 27,  134 => 26,  128 => 24,  116 => 22,  114 => 21,  111 => 20,  105 => 17,  101 => 16,  96 => 15,  93 => 14,  86 => 13,  78 => 10,  72 => 9,  68 => 8,  64 => 7,  59 => 6,  52 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/object/object-details/layout.html.twig", "/var/www/html/templates/base/layouts/object/object-details/layout.html.twig");
    }
}
