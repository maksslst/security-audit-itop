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

/* pages/backoffice/extension-blocks/footer.html.twig */
class __TwigTemplate_1d573fd35975f68a1b5eff94ee46214d extends Template
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
            yield "
\t<div id=\"ibo-page-Footer\" data-role=\"ibo-page-Footer\">
\t\t";
            // line 6
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sFooter", [], "any", false, false, false, 6))) {
                // line 7
                yield "\t\t\t";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sFooter", [], "any", false, false, false, 7);
                yield "
\t\t";
            }
            // line 9
            yield "\t\t";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oFooter", [], "any", false, false, false, 9), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t</div>

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
        return "pages/backoffice/extension-blocks/footer.html.twig";
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
        return array (  65 => 3,  56 => 9,  50 => 7,  48 => 6,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/backoffice/extension-blocks/footer.html.twig", "/var/www/html/templates/pages/backoffice/extension-blocks/footer.html.twig");
    }
}
