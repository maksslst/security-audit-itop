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

/* pages/backoffice/extension-blocks/banner.html.twig */
class __TwigTemplate_de7ea35ecb9eb54d33283da26bb76bf8 extends Template
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
            yield "\t<div id=\"ibo-page-banner\" data-role=\"ibo-page-banner\">
\t\t";
            // line 5
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sBanner", [], "any", false, false, false, 5))) {
                // line 6
                yield "\t\t\t";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sBanner", [], "any", false, false, false, 6);
                yield "
\t\t";
            }
            // line 8
            yield "\t\t";
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oBanner", [], "any", false, false, false, 8), ["aPage" => ($context["aPage"] ?? null)]);
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
        return "pages/backoffice/extension-blocks/banner.html.twig";
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
        return array (  63 => 3,  55 => 8,  49 => 6,  47 => 5,  44 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "pages/backoffice/extension-blocks/banner.html.twig", "/var/www/html/templates/pages/backoffice/extension-blocks/banner.html.twig");
    }
}
