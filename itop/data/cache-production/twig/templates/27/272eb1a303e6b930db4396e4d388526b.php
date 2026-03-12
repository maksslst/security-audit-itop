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

/* base/components/datatable/static/formtablerow/layout.html.twig */
class __TwigTemplate_c74fff474b6c98f76586e18aed4d393a extends Template
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
        yield "
<tr id=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRef", [], "method", false, false, false, 4), "html", null, true);
        yield "_row_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowId", [], "method", false, false, false, 4), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
            // line 5
            yield "        ";
            if (($context["cellName"] === "@class")) {
                yield " class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cellValue"], "html", null, true);
                yield "\"";
            }
            // line 6
            yield "        ";
            if (($context["cellName"] === "@meta")) {
                yield " ";
                yield $context["cellValue"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['cellName'], $context['cellValue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield ">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["colName"] => $context["column"]) {
            // line 9
            yield "        <td>
            ";
            // line 10
            $context["cellValueHtml"] = "";
            // line 11
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                // line 12
                yield "                ";
                if (($context["cellName"] == $context["colName"])) {
                    // line 13
                    yield "                    ";
                    $context["cellValueHtml"] = $context["cellValue"];
                    // line 14
                    yield "                ";
                }
                // line 15
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['cellName'], $context['cellValue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            yield "            ";
            if (Twig\Extension\CoreExtension::testEmpty(($context["cellValueHtml"] ?? null))) {
                // line 17
                yield "                ";
                $context["cellValueHtml"] = "&nbsp;";
                // line 18
                yield "            ";
            }
            // line 19
            yield "            ";
            yield ($context["cellValueHtml"] ?? null);
            yield "
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['colName'], $context['column'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "</tr>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/components/datatable/static/formtablerow/layout.html.twig";
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
        return array (  121 => 22,  111 => 19,  108 => 18,  105 => 17,  102 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  82 => 11,  80 => 10,  77 => 9,  73 => 8,  70 => 7,  60 => 6,  53 => 5,  45 => 4,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/components/datatable/static/formtablerow/layout.html.twig", "/var/www/html/templates/base/components/datatable/static/formtablerow/layout.html.twig");
    }
}
