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

/* base/components/popover-menu/item/mode_js.html.twig */
class __TwigTemplate_9896a057b5ef10d7939065af3ab679f5 extends Template
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
            'iboPopoverMenuItem' => [$this, 'block_iboPopoverMenuItem'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base/components/popover-menu/item/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/components/popover-menu/item/layout.html.twig", "base/components/popover-menu/item/mode_js.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPopoverMenuItem(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "    <a id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetID", [], "method", false, false, false, 4), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 4), "html", null, true);
        yield "\" data-role=\"ibo-popover-menu--item\" data-resource-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUID", [], "method", false, false, false, 4), "html", null, true);
        yield "\" data-uid=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUID", [], "method", false, false, false, 4), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUrl", [], "method", false, false, false, 4), "html", null, true);
        yield "\" onclick=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 4));
        yield "\"
            ";
        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 5)) {
            // line 6
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 7
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
            // line 9
            yield "            ";
        }
        // line 10
        yield "            ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 10))) {
            // line 11
            yield "                data-tooltip-content=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTooltip", [], "method", false, false, false, 11), "html", null, true);
            yield "\"
            ";
        }
        // line 13
        yield "    >
        ";
        // line 14
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 14))) {
            // line 15
            yield "            <i class=\"ibo-popover-menu--item--icon fa-fw ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconClass", [], "method", false, false, false, 15), "html", null, true);
            yield "\"></i>
        ";
        }
        // line 17
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 17), "html", null, true);
        yield "
    </a>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/popover-menu/item/mode_js.html.twig";
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
        return array (  116 => 17,  110 => 15,  108 => 14,  105 => 13,  99 => 11,  96 => 10,  93 => 9,  82 => 7,  77 => 6,  75 => 5,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/popover-menu/item/mode_js.html.twig", "/var/www/html/templates/base/components/popover-menu/item/mode_js.html.twig");
    }
}
