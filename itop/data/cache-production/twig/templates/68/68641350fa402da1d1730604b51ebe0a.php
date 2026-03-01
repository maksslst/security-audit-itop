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

/* base/components/dashlet/dashlet-badge.html.twig */
class __TwigTemplate_65cf986c3e7043dfc7ed9e6492112de5 extends Template
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
        // line 3
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 4
            yield "    <div class=\"ibo-dashlet-badge--body";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
                yield " ibo-is-hidden";
            }
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
            yield "\"
         data-role=\"ibo-dashlet-badge--body\"
            ";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasClassDescription", [], "method", false, false, false, 6)) {
                // line 7
                yield "                ";
                // line 8
                yield "                data-tooltip-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("<div class=\"ibo-dashlet-badge--body--tooltip-title\">");
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 8), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("</div><div class=\"ibo-dashlet-badge--body--tooltip-description\">");
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassDescription", [], "method", false, false, false, 8), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape("</div>");
                yield "\"
                data-tooltip-html-enabled=\"true\"
            ";
            } else {
                // line 11
                yield "                ";
                // line 12
                yield "                data-tooltip-content=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 12), "html", null, true);
                yield "\"
            ";
            }
            // line 14
            yield "         ";
            // line 15
            yield "         data-tooltip-show-delay=\"300\">
        <div class=\"ibo-dashlet-badge--icon-container\">
            ";
            // line 18
            yield "            <img class=\"ibo-dashlet-badge--icon\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassIconUrl", [], "method", false, false, false, 18), "html", null, true);
            yield "\" alt=\"\">
        </div>
        <div class=\"ibo-dashlet-badge--actions\">
            <a class=\"ibo-dashlet-badge--action-list\" href=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetHyperlink", [], "method", false, false, false, 21), "html", null, true);
            yield "\" data-role=\"ibo-dashlet-badge--action-list\">
                <span class=\"ibo-dashlet-badge--action-list-count\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCount", [], "method", false, false, false, 22), "html", null, true);
            yield "</span>
                <span class=\"ibo-dashlet-badge--action-list-label\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 23), "html", null, true);
            yield "</span>
            </a>
            ";
            // line 25
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method", false, false, false, 25))) {
                // line 26
                yield "                <a class=\"ibo-dashlet-badge--action-create\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionUrl", [], "method", false, false, false, 26), "html", null, true);
                yield "\">
                    <span class=\"ibo-dashlet-badge--action-create-icon fas fa-plus\"></span>
                    <span class=\"ibo-dashlet-badge--action-create-label\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCreateActionLabel", [], "method", false, false, false, 28), "html", null, true);
                yield "</span>
                </a>
            ";
            }
            // line 31
            yield "        </div>
    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/dashlet/dashlet-badge.html.twig";
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
        return array (  123 => 3,  117 => 31,  111 => 28,  105 => 26,  103 => 25,  98 => 23,  94 => 22,  90 => 21,  83 => 18,  79 => 15,  77 => 14,  71 => 12,  69 => 11,  58 => 8,  56 => 7,  54 => 6,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/dashlet/dashlet-badge.html.twig", "/var/www/html/templates/base/components/dashlet/dashlet-badge.html.twig");
    }
}
