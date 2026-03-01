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

/* base/layouts/navigation-menu/menu-node.html.twig */
class __TwigTemplate_4dde6523ad239cebf6838a239f631e00 extends Template
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
        yield "<li class=\"ibo-navigation-menu--menu-node\" data-role=\"ibo-navigation-menu--menu-node\" data-menu-node-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sId", [], "any", false, false, false, 1), "html", null, true);
        yield "\">
\t";
        // line 2
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sUrl", [], "any", false, false, false, 2))) {
            // line 3
            yield "\t\t";
            $context["sTarget"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "bOpenInNewWindow", [], "any", false, false, false, 3) == true)) ? ("target=\"_blank\"") : (""));
            // line 4
            yield "\t\t<a class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sUrl", [], "any", false, false, false, 4), "html", null, true);
            yield "\" ";
            yield ($context["sTarget"] ?? null);
            yield ">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sLabel", [], "any", false, false, false, 5), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sTitle", [], "any", false, false, false, 5), "html", null, true);
            yield "</span>
\t\t\t";
            // line 6
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "bHasCount", [], "any", false, false, false, 6)) {
                // line 7
                yield "                ";
                // line 8
                yield "\t\t\t\t<span class=\"ibo-navigation-menu--menu-node-counter ibo-is-hidden\" data-menu-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sId", [], "any", false, false, false, 8), "html", null, true);
                yield "\"></span>
\t\t\t";
            }
            // line 10
            yield "\t\t</a>
\t";
        } else {
            // line 12
            yield "\t\t<span class=\"ibo-navigation-menu--menu-node-title\" data-role=\"ibo-navigation-menu--menu-node-title\">
\t\t\t<span class=\"ibo-navigation-menu--menu-node-label\" data-role=\"ibo-navigation-menu--menu-node-label\" title=\"";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sLabel", [], "any", false, false, false, 13), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "sTitle", [], "any", false, false, false, 13), "html", null, true);
            yield "</span>
\t\t</span>
\t";
        }
        // line 16
        yield "\t";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", true, true, false, 16) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", false, false, false, 16)) > 0))) {
            // line 17
            yield "\t\t<ul>
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["aMenuNode"] ?? null), "aSubMenuNodes", [], "any", false, false, false, 18));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aSubMenuNode"]) {
                // line 19
                yield "\t\t\t\t";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/navigation-menu/menu-node.html.twig", ["aMenuNode" => $context["aSubMenuNode"]]);
                yield "
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['aSubMenuNode'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "\t\t</ul>
\t";
        }
        // line 23
        yield "</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/navigation-menu/menu-node.html.twig";
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
        return array (  134 => 23,  130 => 21,  113 => 19,  96 => 18,  93 => 17,  90 => 16,  82 => 13,  79 => 12,  75 => 10,  69 => 8,  67 => 7,  65 => 6,  59 => 5,  52 => 4,  49 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/navigation-menu/menu-node.html.twig", "/var/www/html/templates/base/layouts/navigation-menu/menu-node.html.twig");
    }
}
