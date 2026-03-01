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

/* base/layouts/page-content/with-side-content.html.twig */
class __TwigTemplate_71617384ce794866e95cd38e1389b1ed extends Template
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
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageSideContent' => [$this, 'block_iboPageSideContent'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base/layouts/page-content/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/page-content/layout.html.twig", "base/layouts/page-content/with-side-content.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageCenterContainerExtraClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "\t";
        yield from $this->yieldParentBlock("iboPageCenterContainerExtraClasses", $context, $blocks);
        yield "
\t";
        // line 5
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 5)) {
            yield " ibo-center-container--with-side-content";
        }
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageCenterContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield "\t";
        yield from $this->yieldParentBlock("iboPageCenterContainer", $context, $blocks);
        yield "
\t<aside id=\"ibo-side-content\" data-role=\"ibo-side-content\">
\t\t";
        // line 11
        yield from $this->unwrap()->yieldBlock('iboPageSideContent', $context, $blocks);
        // line 16
        yield "\t</aside>
";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageSideContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSideBlocks", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 13
            yield "\t\t\t\t";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/page-content/with-side-content.html.twig";
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
        return array (  114 => 15,  105 => 13,  100 => 12,  93 => 11,  87 => 16,  85 => 11,  79 => 9,  72 => 8,  65 => 5,  60 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/page-content/with-side-content.html.twig", "/var/www/html/templates/base/layouts/page-content/with-side-content.html.twig");
    }
}
