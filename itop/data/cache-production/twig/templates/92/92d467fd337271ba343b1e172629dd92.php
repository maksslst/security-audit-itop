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

/* base/layouts/navigation-menu/layout.html.twig */
class __TwigTemplate_73cc703159ad6c95282e6b65702a54dd extends Template
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
        yield "<nav id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsExpanded", [], "method", false, false, false, 1) == true)) {
            yield "ibo-is-expanded";
        }
        yield "\" data-role=\"ibo-navigation-menu\">
\t<div class=\"ibo-navigation-menu--body\">
\t\t<div class=\"ibo-navigation-menu--top-part\">
\t\t\t<a class=\"ibo-navigation-menu--square-company-logo\" data-role=\"ibo-navigation-menu--square-company-logo\" title=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppRevisionNumber", [], "method", false, false, false, 4), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppIconLink", [], "method", false, false, false, 4), "html", null, true);
        yield "\">
\t\t\t\t<img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAppSquareIconUrl", [], "method", false, false, false, 5), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:CompanyLogo:AltText"), "html", null, true);
        yield "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--full-company-logo\" data-role=\"ibo-navigation-menu--full-company-logo\" title=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppRevisionNumber", [], "any", false, false, false, 7), "html", null, true);
        yield "\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppIconLink", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
\t\t\t\t<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "AppFullIconUrl", [], "any", false, false, false, 8), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:CompanyLogo:AltText"), "html", null, true);
        yield "\">
\t\t\t</a>
\t\t\t<a class=\"ibo-navigation-menu--toggler\" data-role=\"ibo-navigation-menu--toggler\"
               aria-label=\"";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 11)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method", false, false, false, 11)), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:Toggler:Tooltip"), "html", null, true);
        }
        yield "\"
               data-tooltip-content=\"";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 12)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:Toggler:TooltipWithSiloLabel", CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloLabel", [], "method", false, false, false, 12)), "html", null, true);
        } else {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:Toggler:Tooltip"), "html", null, true);
        }
        yield "\"
\t\t\t   data-tooltip-placement=\"right\"
\t\t\t   data-tooltip-distance-offset=\"20\"
\t\t\t   href=\"#\">
\t\t\t\t<span class=\"ibo-navigation-menu--toggler-icon\">
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t\t<span class=\"ibo-navigation-menu--toggler-bar\"></span>
\t\t\t\t</span>
\t\t\t\t";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasSiloSelected", [], "method", false, false, false, 21)) {
            // line 22
            yield "\t\t\t\t\t<span class=\"ibo-navigation-menu--silo-visual-hint\"></span>
\t\t\t\t";
        }
        // line 24
        yield "\t\t\t</a>
\t\t\t<div class=\"ibo-navigation-menu--silo-selection\">
\t\t\t\t";
        // line 26
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSiloSelection", [], "method", false, false, false, 26), "html", [], "any", false, false, false, 26);
        yield "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ibo-navigation-menu--middle-part\">
\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method", false, false, false, 30));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 31
            yield "\t\t\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/navigation-menu/menu-group.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
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
        unset($context['_seq'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "\t\t</div>
\t\t<div class=\"ibo-navigation-menu--bottom-part\">
\t\t\t";
        // line 35
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method", false, false, false, 35) == true)) {
            // line 36
            yield "\t\t\t\t<div class=\"ibo-navigation-menu--notifications\">
\t\t\t\t\t<a class=\"ibo-navigation-menu--notifications-toggler ibo-is-empty\" data-role=\"ibo-navigation-menu--notifications-toggler\" data-tooltip-content=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Newsroom:NoNewMessage"), "html", null, true);
            yield "\" data-tooltip-placement=\"right\" data-tooltip-distance-offset=\"25\">
\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></div>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"ibo-navigation-menu--notifications-menu\">
\t\t\t\t\t\t";
            // line 42
            yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetNewsroomMenu", [], "method", false, false, false, 42), ["aPage" => ($context["aPage"] ?? null)]);
            yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 46
        yield "            <div class=\"ibo-navigation-menu--user-info\">
                <div class=\"ibo-navigation-menu--user-picture\">
                    <a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:UserMenu:Toggler:Label"), "html", null, true);
        yield "\">
                        <img class=\"ibo-navigation-menu--user-picture--image\"
                             data-role=\"ibo-navigation-menu--user-picture--image\"
                             src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 51), "sPictureUrl", [], "any", false, false, false, 51), "html", null, true);
        yield "\"
\t\t\t\t\t\t\t alt=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_format')->getCallable()("UI:Layout:NavigationMenu:UserInfo:Picture:AltText", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 52), "sFirstname", [], "any", false, false, false, 52)), "html", null, true);
        yield "\"
\t\t\t\t\t\t\t data-tooltip-content=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 53), "sLogonMessage", [], "any", false, false, false, 53), "html", null, true);
        yield "\"
\t\t\t\t\t\t\t data-tooltip-placement=\"right\"
\t\t\t\t\t\t\t data-tooltip-distance-offset=\"20\"
\t\t\t\t\t\t>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message\">
\t\t\t\t\t<a data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\" aria-label=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:UserMenu:Toggler:Label"), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-welcome-message--text\">
\t\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-welcome-message--toggler\" data-role=\"ibo-navigation-menu--user-menu--toggler\" href=\"#\">
\t\t\t\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 63), "sWelcomeMessage", [], "any", false, false, false, 63), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-welcome-message--toggler\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-caret-down\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 71
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsNewsroomEnabled", [], "method", false, false, false, 71) == true)) {
            // line 72
            yield "\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications\">
\t\t\t\t\t\t<a class=\"ibo-navigation-menu--user-notifications--text ibo-navigation-menu--user-notifications--toggler\" data-role=\"ibo-navigation-menu--notifications-toggler\" href=\"#\">
                            <span class=\"ibo-navigation-menu--user-notifications--toggler--message\" data-role=\"ibo-navigation-menu--user-notifications--toggler--message\">
                                ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Newsroom:NoNewMessage"), "html", null, true);
            yield "
                            </span>
\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--user-notifications--toggler--icon\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"ibo-navigation-menu--notifications-toggler--new-messages\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"ibo-navigation-menu--user-notifications-menu\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 85
        yield "\t\t\t\t<div class=\"ibo-navigation-menu--user-organization\">
\t\t\t\t\t<div class=\"ibo-navigation-menu--user-organization--text\">
\t\t\t\t\t\t";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserData", [], "method", false, false, false, 87), "sOrganization", [], "any", false, false, false, 87), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-navigation-menu--user-menu-container\" data-role=\"ibo-navigation-menu--user-menu-container\">
                    ";
        // line 91
        yield $this->env->getFunction('render_block')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetUserMenu", [], "method", false, false, false, 91), ["aPage" => ($context["aPage"] ?? null)]);
        yield "
                </div>
            </div>
        </div>
    </div>
    <div class=\"ibo-navigation-menu--drawer\" data-role=\"ibo-navigation-menu--drawer\">
        <div class=\"ibo-navigation-menu--menu-filter\" data-role=\"ibo-nav-menu--menu-filter\">
            ";
        // line 99
        yield "            <input class=\"ibo-navigation-menu--menu-filter-input\" data-role=\"ibo-navigation-menu--menu-filter-input\" type=\"text\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Placeholder"), "html", null, true);
        yield "\" data-tooltip-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Tooltip"), "html", null, true);
        yield "\"
                   data-tooltip-trigger=\"mouseenter\">
            <a class=\"ibo-navigation-menu--menu-filter-clear\" data-role=\"ibo-navigation-menu--menu-filter-clear\" href=\"#\"><span class=\"fas fa-times\"></span></a>
            <span class=\"ibo-navigation-menu--menu-filter-hotkey\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuFilterHotkeyLabel", [], "method", false, false, false, 102), "html", null, true);
        yield "</span>
            ";
        // line 103
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasMenuFilterHint", [], "method", false, false, false, 103)) {
            // line 104
            yield "                <div class=\"ibo-navigation-menu--menu-filter-hint\" data-role=\"ibo-navigation-menu--menu-filter-hint\">
                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Input:Hint"), "html", null, true);
            yield "
                    <a class=\"ibo-navigation-menu--menu-filter-hint-close\" data-role=\"ibo-navigation-menu--menu-filter-hint-close\" aria-label=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Button:Close"), "html", null, true);
            yield "\" href=\"#\"><span class=\"fas fa-times\"></span></a>
                </div>
            ";
        }
        // line 109
        yield "        </div>
        <div class=\"ibo-navigation-menu--menu--placeholder\" data-role=\"ibo-navigation-menu--menu--placeholder\">
            <div class=\"ibo-navigation-menu--menu--placeholder-image ibo-svg-illustration--container\">
                ";
        // line 112
        yield Twig\Extension\CoreExtension::source($this->env, "illustrations/undraw_empty.svg");
        yield "
\t\t\t</div>
\t\t\t<div class=\"ibo-navigation-menu--menu--placeholder-hint\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:Layout:NavigationMenu:MenuFilter:Placeholder:Hint"), "html", null, true);
        yield "</div>
\t\t</div>

\t\t<div class=\"ibo-navigation-menu--menu-groups\">
\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetMenuGroups", [], "method", false, false, false, 118));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aMenuGroup"]) {
            // line 119
            yield "\t\t\t\t";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "base/layouts/navigation-menu/menu-nodes.html.twig", ["aMenuGroup" => $context["aMenuGroup"]]);
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
        unset($context['_seq'], $context['_key'], $context['aMenuGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "\t\t</div>
\t</div>
</nav>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base/layouts/navigation-menu/layout.html.twig";
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
        return array (  348 => 121,  331 => 119,  314 => 118,  307 => 114,  302 => 112,  297 => 109,  291 => 106,  287 => 105,  284 => 104,  282 => 103,  278 => 102,  269 => 99,  259 => 91,  252 => 87,  248 => 85,  235 => 75,  230 => 72,  228 => 71,  217 => 63,  211 => 60,  201 => 53,  197 => 52,  193 => 51,  187 => 48,  183 => 46,  176 => 42,  168 => 37,  165 => 36,  163 => 35,  159 => 33,  142 => 31,  125 => 30,  118 => 26,  114 => 24,  110 => 22,  108 => 21,  92 => 12,  84 => 11,  76 => 8,  70 => 7,  63 => 5,  57 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "base/layouts/navigation-menu/layout.html.twig", "/var/www/html/templates/base/layouts/navigation-menu/layout.html.twig");
    }
}
