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

/* base/layouts/tab-container/tab/layout.html.twig */
class __TwigTemplate_d101314d1ead8561a77e2e9f2d396c27 extends Template
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
        // line 3
        yield "<div id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        yield "\" class=\"ibo-tab\" data-role=\"ibo-tab\">
    ";
        // line 4
        yield from $this->unwrap()->yieldBlock('iboContentBlockContainer', $context, $blocks);
        // line 9
        yield "</div>";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboContentBlockContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 6
            yield "            ";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/tab-container/tab/layout.html.twig";
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
        return array (  76 => 8,  67 => 6,  62 => 5,  55 => 4,  50 => 9,  48 => 4,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/tab-container/tab/layout.html.twig", "/var/www/html/templates/base/layouts/tab-container/tab/layout.html.twig");
    }
}
