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

/* base/components/button/layout.js.twig */
class __TwigTemplate_941bcc1aa8f98a7ac7fcf011140b2220 extends Template
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
        if (((!Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 1))) || (!Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 1))))) {
            // line 2
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 2))) {
                // line 3
                yield "\$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
                yield "').on('click', function () {
    ";
                // line 4
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOnClickJsCode", [], "method", false, false, false, 4);
                yield "
});
";
            }
            // line 7
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 7))) {
                // line 8
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetJsCode", [], "method", false, false, false, 8);
                yield "
";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/button/layout.js.twig";
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
        return array (  59 => 8,  57 => 7,  51 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/button/layout.js.twig", "/var/www/html/templates/base/components/button/layout.js.twig");
    }
}
