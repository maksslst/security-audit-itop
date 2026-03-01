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

/* base/components/button/buttonurl.html.twig */
class __TwigTemplate_a5079db73053c9b287ecd03d5f23f1ea extends Template
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
        $context["sAriaLabel"] = (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 1))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 1)) : ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 1))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 1)) : (""))));
        // line 2
        yield "<a id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        yield "\"
        class=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        yield " ibo-is-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetActionType", [], "method", false, false, false, 3), "html", null, true);
        yield " ibo-is-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColor", [], "method", false, false, false, 3), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 3)) {
            yield "ibo-is-hidden";
        }
        yield "\"
        data-role=\"ibo-button\"
        ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 5)) {
            // line 6
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 7
                yield "                data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sName"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sValue"], "html", null, true);
                yield "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sName'], $context['sValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "        ";
        }
        // line 10
        yield "        href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetURL", [], "method", false, false, false, 10), "html", null, true);
        yield "\"
        target=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTarget", [], "method", false, false, false, 11), "html", null, true);
        yield "\"
        ";
        // line 13
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 13))) {
            // line 14
            yield "            data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 14), "html", null, true);
            yield "\"
        ";
        } else {
            // line 16
            yield "            title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 16), "html", null, true);
            yield "\"
        ";
        }
        // line 18
        yield "        ";
        // line 19
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["sAriaLabel"] ?? null))) {
            // line 20
            yield "            aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sAriaLabel"] ?? null), "html", null, true);
            yield "\"
        ";
        }
        // line 22
        yield ">
    <span class=\"ibo-button--loading-icon fas fa-spinner fa-pulse\"></span>
    ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 24))) {
            // line 25
            yield "        <span class=\"ibo-button--icon ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 25), "html", null, true);
            yield "\"></span>
    ";
        }
        // line 27
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 27))) {
            // line 28
            yield "        <span class=\"ibo-button--label\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 28), "html", null, true);
            yield "</span>
    ";
        }
        // line 30
        yield "</a>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/button/buttonurl.html.twig";
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
        return array (  141 => 30,  135 => 28,  132 => 27,  126 => 25,  124 => 24,  120 => 22,  114 => 20,  111 => 19,  109 => 18,  103 => 16,  97 => 14,  94 => 13,  90 => 11,  85 => 10,  82 => 9,  71 => 7,  66 => 6,  64 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/button/buttonurl.html.twig", "/var/www/html/templates/base/components/button/buttonurl.html.twig");
    }
}
