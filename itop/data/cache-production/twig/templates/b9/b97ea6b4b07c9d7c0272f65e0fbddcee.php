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

/* base/components/alert/layout.html.twig */
class __TwigTemplate_f1c3c35af6033d9f86800aec385362e7 extends Template
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
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\"
\t class=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        yield " ibo-is-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColor", [], "method", false, false, false, 2), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method", false, false, false, 2)) {
            yield " ibo-is-opened";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            yield " ibo-is-hidden";
        }
        yield "\"
     data-role=\"ibo-alert\">
\t";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsCollapsible", [], "method", false, false, false, 4)) {
            // line 5
            yield "\t\t<div class=\"ibo-alert--action-button ibo-alert--maximize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t</div>
\t\t<div class=\"ibo-alert--action-button ibo-alert--minimize-button\" data-role=\"ibo-alert--collapse-toggler\">
\t\t\t<i class=\"fas fa-caret-up\"></i>
\t\t</div>
\t";
        }
        // line 12
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsClosable", [], "method", false, false, false, 12)) {
            // line 13
            yield "\t\t<div class=\"ibo-alert--action-button ibo-alert--close-button\" data-role=\"ibo-alert--close-button\">
\t\t\t<i class=\"fas fa-times\"></i>
\t\t</div>
\t";
        }
        // line 17
        yield "\t";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 17))) {
            // line 18
            yield "\t\t<div class=\"ibo-alert--title\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsCollapsible", [], "method", false, false, false, 18)) {
                yield "data-role=\"ibo-alert--collapse-toggler\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 18), "html", null, true);
            yield "</div>
\t";
        }
        // line 20
        yield "\t";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 20))) {
            // line 21
            yield "\t\t<div class=\"ibo-alert--body\">
\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 22));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 23
                yield "\t\t\t\t";
                yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            yield "\t\t</div>
\t";
        }
        // line 27
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/alert/layout.html.twig";
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
        return array (  118 => 27,  114 => 25,  105 => 23,  101 => 22,  98 => 21,  95 => 20,  85 => 18,  82 => 17,  76 => 13,  73 => 12,  64 => 5,  62 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/alert/layout.html.twig", "/var/www/html/templates/base/components/alert/layout.html.twig");
    }
}
