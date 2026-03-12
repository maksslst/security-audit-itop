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

/* base/components/collapsible-section/layout.html.twig */
class __TwigTemplate_1fcf2af7c2ebf8f0b86f1e77d7087d2e extends Template
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
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\"
\t class=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method", false, false, false, 2)) {
            yield " ibo-is-opened";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            yield " ibo-is-hidden";
        }
        yield "\"
     data-role=\"ibo-collapsible-section\">
\t<div class=\"ibo-collapsible-section--header\" data-role=\"ibo-collapsible-section--collapse-toggler\">
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--maximize-button\"><i class=\"fas fa-caret-down\"></i></div>
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--minimize-button\"><i class=\"fas fa-caret-up\"></i></div>
\t\t<div class=\"ibo-collapsible-section--title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 7), "html", null, true);
        yield "</div>
\t</div>
\t<div class=\"ibo-collapsible-section--body\" data-role=\"ibo-collapsible-section--body\">
\t\t";
        // line 10
        yield from $this->unwrap()->yieldBlock('iboPanelBody', $context, $blocks);
        // line 15
        yield "\t</div>
</div>";
        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPanelBody(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 12
            yield "\t\t\t\t";
            yield $this->env->getFunction('render_block')->getCallable()($context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oMainBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/collapsible-section/layout.html.twig";
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
        return array (  100 => 14,  91 => 12,  86 => 11,  79 => 10,  73 => 15,  71 => 10,  65 => 7,  48 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/collapsible-section/layout.html.twig", "/var/www/html/templates/base/components/collapsible-section/layout.html.twig");
    }
}
