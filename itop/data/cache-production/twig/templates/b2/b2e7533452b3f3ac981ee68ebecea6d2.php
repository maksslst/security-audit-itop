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

/* base/components/popover-menu/layout.html.twig */
class __TwigTemplate_52485da03f226a4c6e5d8dab817c08cc extends Template
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
        yield "<div ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", true, true, false, 1)) {
            yield "id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
            yield "\"";
        }
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield "\" data-role=\"ibo-popover-menu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSections", [], "method", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["aSection"]) {
            // line 3
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["aSection"], "aItems", [], "any", false, false, false, 3)) > 0)) {
                // line 4
                yield "            <div class=\"ibo-popover-menu--section\" data-role=\"ibo-popover-menu--section\">
                ";
                // line 5
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["aSection"], "aItems", [], "any", false, false, false, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["oUIBlockItem"]) {
                    // line 6
                    yield "                    ";
                    yield $this->env->getFunction('render_block')->getCallable()($context["oUIBlockItem"], ["aPage" => ($context["aPage"] ?? null)]);
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['oUIBlockItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                yield "            </div>
        ";
            }
            // line 10
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['aSection'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/popover-menu/layout.html.twig";
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
        return array (  88 => 11,  82 => 10,  78 => 8,  69 => 6,  65 => 5,  62 => 4,  59 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/popover-menu/layout.html.twig", "/var/www/html/templates/base/components/popover-menu/layout.html.twig");
    }
}
