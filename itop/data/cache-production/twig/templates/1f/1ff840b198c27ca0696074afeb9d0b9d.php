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

/* base/components/input/layout.html.twig */
class __TwigTemplate_939a8e2e2ca1a554afbb1540af2ab6b0 extends Template
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
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield from $this->unwrap()->yieldBlock('iboInputLabel', $context, $blocks);
        // line 3
        yield from $this->unwrap()->yieldBlock('iboInput', $context, $blocks);
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboInputLabel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboInput(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
    <input type=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetType", [], "method", false, false, false, 5), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
        yield "\" name=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 5), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 5), "html", null, true);
        yield "\"
           class=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 6)) {
            yield "ibo-is-hidden";
        }
        yield "\"
           data-role=\"ibo-input\"
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsChecked", [], "method", false, false, false, 8)) {
            yield " checked=\"checked\"";
        }
        // line 9
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 9)) {
            yield " disabled";
        }
        // line 10
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsReadonly", [], "method", false, false, false, 10)) {
            yield " readonly";
        }
        // line 11
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11)) {
            // line 12
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 13
                yield "                    data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sName"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sValue"], "html", null, true);
                yield "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['sName'], $context['sValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "            ";
        }
        // line 16
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 16)) {
            yield "  placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 16), "html", null, true);
            yield "\" ";
        }
        // line 17
        yield "    >
    ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 18)) {
            yield "<label for=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 18), "html", null, true);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 18);
            yield "</label>";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/input/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  138 => 18,  135 => 17,  128 => 16,  125 => 15,  114 => 13,  109 => 12,  106 => 11,  101 => 10,  96 => 9,  92 => 8,  81 => 6,  71 => 5,  68 => 4,  61 => 3,  51 => 1,  46 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/input/layout.html.twig", "/var/www/html/templates/base/components/input/layout.html.twig");
    }
}
