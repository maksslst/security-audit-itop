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

/* base/layouts/dashboard/row/layout.html.twig */
class __TwigTemplate_8d80242f1d1a87aea6e8eb742c492841 extends Template
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
        // line 4
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 5
            yield "    <div class=\"ibo-dashboard--grid-row\" data-role=\"ibo-dashboard--grid-row\" data-dashboard-grid-row-index=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowIndex", [], "method", false, false, false, 5), "html", null, true);
            yield "\">
        ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 7
                yield "            ";
                yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "    </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/dashboard/row/layout.html.twig";
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
        return array (  67 => 4,  62 => 9,  53 => 7,  49 => 6,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/dashboard/row/layout.html.twig", "/var/www/html/templates/base/layouts/dashboard/row/layout.html.twig");
    }
}
