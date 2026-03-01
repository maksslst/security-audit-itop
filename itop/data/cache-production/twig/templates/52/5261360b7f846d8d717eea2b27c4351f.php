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

/* base/layouts/page-content/layout.html.twig */
class __TwigTemplate_50cddd2b188c7a071c0b25357dcc3934 extends Template
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
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageHeader' => [$this, 'block_iboPageHeader'],
            'iboPageMainContent' => [$this, 'block_iboPageMainContent'],
            'iboPageExtraHtml' => [$this, 'block_iboPageExtraHtml'],
            'iboPageFooter' => [$this, 'block_iboPageFooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"ibo-center-container\" class=\"ibo-center-container ";
        yield from $this->unwrap()->yieldBlock('iboPageCenterContainerExtraClasses', $context, $blocks);
        yield "\" data-role=\"ibo-center-container\">
\t";
        // line 2
        yield from $this->unwrap()->yieldBlock('iboPageCenterContainer', $context, $blocks);
        // line 24
        yield "</div>";
        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageCenterContainerExtraClasses(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageCenterContainer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 3
        yield "\t\t<main id=\"ibo-main-content\">
\t\t\t";
        // line 5
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('iboPageHeader', $context, $blocks);
        // line 8
        yield "
\t\t\t";
        // line 9
        yield from $this->unwrap()->yieldBlock('iboPageMainContent', $context, $blocks);
        // line 14
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('iboPageExtraHtml', $context, $blocks);
        // line 17
        yield "
\t\t\t";
        // line 19
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('iboPageFooter', $context, $blocks);
        // line 22
        yield "\t\t</main>
\t";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageHeader(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/backoffice/extension-blocks/header.html.twig");
        yield "
\t\t\t";
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageMainContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMainBlocks", [], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 11
            yield "\t\t\t\t\t";
            yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "\t\t\t";
        yield from [];
    }

    // line 14
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageExtraHtml(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        yield "\t\t\t\t";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetExtraHtmlContent", [], "method", false, false, false, 15);
        yield "
\t\t\t";
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_iboPageFooter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 20
        yield "\t\t\t\t";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "pages/backoffice/extension-blocks/footer.html.twig");
        yield "
\t\t\t";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/page-content/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  166 => 20,  159 => 19,  151 => 15,  144 => 14,  139 => 13,  130 => 11,  125 => 10,  118 => 9,  110 => 6,  103 => 5,  97 => 22,  94 => 19,  91 => 17,  88 => 14,  86 => 9,  83 => 8,  80 => 5,  77 => 3,  70 => 2,  60 => 1,  55 => 24,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/page-content/layout.html.twig", "/var/www/html/templates/base/layouts/page-content/layout.html.twig");
    }
}
