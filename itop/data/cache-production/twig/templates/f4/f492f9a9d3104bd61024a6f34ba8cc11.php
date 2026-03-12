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

/* base/layouts/activity-panel/entry-group.html.twig */
class __TwigTemplate_149567fb1e529f5c24266bd0e9a64d21 extends Template
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
        $context["oFirstEntry"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["aEntryGroup"] ?? null), "entries", [], "any", false, false, false, 1));
        // line 4
        yield "<div class=\"ibo-activity-panel--entry-group ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oFirstEntry"] ?? null), "IsFromCurrentUser", [], "method", false, false, false, 4)) {
            yield "ibo-is-current-user";
        }
        yield " ibo-is-hidden\"
     data-role=\"ibo-activity-panel--entry-group\"
     data-entry-group-author-login=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oFirstEntry"] ?? null), "GetAuthorLogin", [], "method", false, false, false, 6), "html", null, true);
        yield "\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aEntryGroup"] ?? null), "entries", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["oEntry"]) {
            // line 8
            yield "\t\t";
            yield $this->env->getFunction('render_block')->getCallable()($context["oEntry"]);
            yield "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['oEntry'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/activity-panel/entry-group.html.twig";
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
        return array (  69 => 10,  60 => 8,  56 => 7,  52 => 6,  44 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/activity-panel/entry-group.html.twig", "/var/www/html/templates/base/layouts/activity-panel/entry-group.html.twig");
    }
}
