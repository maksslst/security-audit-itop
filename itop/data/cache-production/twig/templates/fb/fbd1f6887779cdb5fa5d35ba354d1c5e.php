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

/* base/layouts/top-bar/layout.html.twig */
class __TwigTemplate_5d7ee8405a53509dd86e589f3f38b0ca extends Template
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
        yield "<nav id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield "\" data-role=\"ibo-top-bar\">
\t<div class=\"ibo-top-bar--quick-actions\" data-role=\"ibo-top-bar--quick-actions\">
\t\t";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasQuickCreate", [], "method", false, false, false, 3)) {
            // line 4
            yield "\t\t\t";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetQuickCreate", [], "method", false, false, false, 4), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t";
        }
        // line 6
        yield "\t\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasGlobalSearch", [], "method", false, false, false, 6)) {
            // line 7
            yield "\t\t\t";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGlobalSearch", [], "method", false, false, false, 7), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t";
        }
        // line 9
        yield "\t</div>
\t";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasBreadcrumbs", [], "method", false, false, false, 10)) {
            // line 11
            yield "\t\t";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBreadcrumbs", [], "method", false, false, false, 11), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t";
        }
        // line 13
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasToolBar", [], "method", false, false, false, 13)) {
            // line 14
            yield "\t\t<div class=\"ibo-top-bar--toolbar\">
\t\t\t";
            // line 15
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetToolBar", [], "method", false, false, false, 15), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t</div>
\t";
        }
        // line 18
        yield "</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/top-bar/layout.html.twig";
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
        return array (  92 => 18,  86 => 15,  83 => 14,  80 => 13,  74 => 11,  72 => 10,  69 => 9,  63 => 7,  60 => 6,  54 => 4,  52 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/top-bar/layout.html.twig", "/var/www/html/templates/base/layouts/top-bar/layout.html.twig");
    }
}
