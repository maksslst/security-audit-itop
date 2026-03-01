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

/* base/components/form/layout.html.twig */
class __TwigTemplate_e78c8e96d5df72e7b9d6cdd28bf906f5 extends Template
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
            'iboContentBlockContainer' => [$this, 'block_iboContentBlockContainer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<form method=\"post\" enctype=\"multipart/form-data\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\"
      class=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            yield "ibo-is-hidden";
        }
        yield "\"
      data-role=\"ibo-form\"
        ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnSubmitJsCode", [], "method", false, false, false, 4)) {
            // line 5
            yield "            onSubmit=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnSubmitJsCode", [], "method", false, false, false, 5), "html", null, true);
            yield "\"
        ";
        }
        // line 7
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAction", [], "method", false, false, false, 7)) {
            // line 8
            yield "            action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAction", [], "method", false, false, false, 8), "html", null, true);
            yield "\"
        ";
        }
        // line 10
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 10)) {
            // line 11
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 12
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
            // line 14
            yield "        ";
        }
        // line 15
        yield ">
    ";
        // line 16
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 17
            yield "        ";
            yield from $this->unwrap()->yieldBlock('iboContentBlockContainer', $context, $blocks);
            // line 22
            yield "    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        // line 23
        yield "</form>";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboContentBlockContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 19
            yield "                ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/form/layout.html.twig";
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
        return array (  138 => 21,  129 => 19,  124 => 18,  117 => 17,  112 => 23,  110 => 16,  106 => 22,  103 => 17,  101 => 16,  98 => 15,  95 => 14,  84 => 12,  79 => 11,  76 => 10,  70 => 8,  67 => 7,  61 => 5,  59 => 4,  48 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/form/layout.html.twig", "/var/www/html/templates/base/components/form/layout.html.twig");
    }
}
