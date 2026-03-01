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

/* base/components/button/buttonjs.html.twig */
class __TwigTemplate_5250c9a67ae7e9d60148f226a8517023 extends Template
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
        yield "<button id=\"";
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
        yield "        type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetType", [], "method", false, false, false, 10), "html", null, true);
        yield "\"
        name=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 11), "html", null, true);
        yield "\"
        value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 12), "html", null, true);
        yield "\"
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 13)) {
            yield " disabled ";
        }
        // line 14
        yield "        ";
        // line 15
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 15))) {
            // line 16
            yield "            data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 16), "html", null, true);
            yield "\"
        ";
        } else {
            // line 18
            yield "            title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 18), "html", null, true);
            yield "\"
        ";
        }
        // line 20
        yield "        ";
        // line 21
        yield "        ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["sAriaLabel"] ?? null))) {
            // line 22
            yield "            aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sAriaLabel"] ?? null), "html", null, true);
            yield "\"
        ";
        }
        // line 24
        yield ">
    <span class=\"ibo-button--loading-icon fas fa-spinner fa-pulse\"></span>
    ";
        // line 26
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 26))) {
            // line 27
            yield "        <span class=\"ibo-button--icon ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 27), "html", null, true);
            yield "\"></span>
    ";
        }
        // line 29
        yield "    ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 29))) {
            // line 30
            yield "        <span class=\"ibo-button--label\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 30), "html", null, true);
            yield "</span>
    ";
        }
        // line 32
        yield "</button>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/button/buttonjs.html.twig";
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
        return array (  151 => 32,  145 => 30,  142 => 29,  136 => 27,  134 => 26,  130 => 24,  124 => 22,  121 => 21,  119 => 20,  113 => 18,  107 => 16,  104 => 15,  102 => 14,  98 => 13,  94 => 12,  90 => 11,  85 => 10,  82 => 9,  71 => 7,  66 => 6,  64 => 5,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/button/buttonjs.html.twig", "/var/www/html/templates/base/components/button/buttonjs.html.twig");
    }
}
