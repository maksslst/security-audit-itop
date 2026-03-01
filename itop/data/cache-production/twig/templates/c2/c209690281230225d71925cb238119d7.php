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

/* base/layouts/dashboard/column/layout.html.twig */
class __TwigTemplate_2c5f21a31ec5623eb14027f812d58da8 extends Template
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
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEditMode", [], "method", false, false, false, 5)) {
                // line 6
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLastRow", [], "method", false, false, false, 6)) {
                    // line 7
                    yield "            ";
                    $context["sCellClass"] = "layout_cell edit_mode layout_extension";
                    // line 8
                    yield "        ";
                } else {
                    // line 9
                    yield "            ";
                    $context["sCellClass"] = "layout_cell edit_mode";
                    // line 10
                    yield "        ";
                }
                // line 11
                yield "    ";
            } else {
                // line 12
                yield "        ";
                $context["sCellClass"] = "dashboard";
                // line 13
                yield "    ";
            }
            // line 14
            yield "    <div class=\"ibo-dashboard--grid-column ibo-dashboard--grid-cell ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["sCellClass"] ?? null), "html", null, true);
            yield "\"
         data-role=\"ibo-dashboard--grid-cell\"
         data-dashboard-grid-column-index=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumnIndex", [], "method", false, false, false, 16), "html", null, true);
            yield "\"
         data-dashboard-grid-cell-index=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCellIndex", [], "method", false, false, false, 17), "html", null, true);
            yield "\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
                // line 19
                yield "            ";
                yield $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['oSubBlock'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
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
        return "base/layouts/dashboard/column/layout.html.twig";
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
        return array (  103 => 4,  98 => 21,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  71 => 14,  68 => 13,  65 => 12,  62 => 11,  59 => 10,  56 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  42 => 4,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/dashboard/column/layout.html.twig", "/var/www/html/templates/base/layouts/dashboard/column/layout.html.twig");
    }
}
