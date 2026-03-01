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

/* base/components/spinner/layout.html.twig */
class __TwigTemplate_177ede9351e4d4dd9c0fa5a72cd18c34 extends Template
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
            yield "\" class=\"ibo-spinner ibo-is-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSize", [], "method", false, false, false, 4), "html", null, true);
            yield "
";
            // line 5
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 5)) {
                yield "ibo-is-hidden";
            }
            yield " 
";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 6), "html", null, true);
            yield " 
";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 7), "html", null, true);
            yield "\"
     data-role=\"ibo-spinner\">
        <i class=\"ibo-spinner--icon fas fa-sync-alt fa-spin\" aria-hidden=\"true\"></i>
        ";
            // line 10
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 10)) {
                // line 11
                yield "            <div class=\"ibo-spinner--description\"> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 11), "html", null, true);
                yield " </div>
        ";
            }
            // line 13
            yield "    </div>
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
        return "base/components/spinner/layout.html.twig";
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
        return array (  80 => 3,  75 => 13,  69 => 11,  67 => 10,  61 => 7,  57 => 6,  51 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/spinner/layout.html.twig", "/var/www/html/templates/base/components/spinner/layout.html.twig");
    }
}
