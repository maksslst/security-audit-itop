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

/* base/components/dashlet/dashlet-header-static.html.twig */
class __TwigTemplate_fc470a6b1b262844274f2c51fa791e7f extends Template
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
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
            yield "\" class=\"ibo-dashlet-header-static ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
                yield "ibo-is-hidden";
            }
            yield "\" data-role=\"ibo-dashlet-header-static\">
        <div class=\"ibo-dashlet-header-static--body\">
            ";
            // line 6
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 6))) {
                // line 7
                yield "                <div class=\"ibo-dashlet-header-static--icon-container\">
                    ";
                // line 9
                yield "                    <img class=\"ibo-dashlet-header-static--icon\" src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetIconUrl", [], "method", false, false, false, 9);
                yield "\" alt=\"\">
                </div>
            ";
            }
            // line 12
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 12))) {
                // line 13
                yield "                <div class=\"ibo-dashlet-header-static--title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 13), "html", null, true);
                yield "</div>
            ";
            }
            // line 15
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
        return "base/components/dashlet/dashlet-header-static.html.twig";
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
        return array (  81 => 3,  75 => 15,  69 => 13,  66 => 12,  59 => 9,  56 => 7,  54 => 6,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/dashlet/dashlet-header-static.html.twig", "/var/www/html/templates/base/components/dashlet/dashlet-header-static.html.twig");
    }
}
