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

/* templates/application/welcome-popup/layout.html.twig */
class __TwigTemplate_832507f83a2c1023160c6c170973f140 extends Template
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
        yield "<div id=\"ibo-welcome-popup--dialog\" class=\"ibo-welcome-popup--dialog ibo-is-hidden\"
    data-role=\"ibo-welcome-popup--dialog\"
    data-title=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFilter('dict_s')->getCallable()("UI:WelcomeMenu:Title"), "html", null, true);
        yield "\"
>
    ";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["aProvidersMessagesData"] ?? null)) > 1)) {
            // line 6
            yield "        <ul class=\"ibo-welcome-popup--messages-stack\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["aProvidersMessagesData"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["aProviderMessageData"]) {
                // line 8
                yield "                <li>
                    <a class=\"ibo-welcome-popup--stack-item ";
                // line 9
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 9) == 1)) {
                    yield "ibo-is-active";
                }
                yield "\"
                        data-role=\"ibo-welcome-popup--stack-item\"
                        data-uuid=\"";
                // line 11
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "uuid", [], "any", false, false, false, 11), "html", null, true);
                yield "\"
                        href=\"#\"
                    >
                        <div class=\"ibo-welcome-popup--stack-item-icon\">
                            <img src=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->env->getFunction('get_absolute_url_app_root')->getCallable()() . CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "provider_icon_rel_path", [], "any", false, false, false, 15)), "html", null, true);
                yield "\" />
                        </div>
                        <div class=\"ibo-welcome-popup--stack-item-title\" data-tooltip-content=\"";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "message", [], "any", false, false, false, 17), "GetTitle", [], "method", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "message", [], "any", false, false, false, 17), "GetTitle", [], "method", false, false, false, 17), "html", null, true);
                yield "</div>
                    </a>
                </li>
            ";
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
            unset($context['_seq'], $context['_key'], $context['aProviderMessageData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "        </ul>
    ";
        }
        // line 23
        yield "    <div class=\"ibo-welcome-popup--message-content-wrapper\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["aProvidersMessagesData"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aProviderMessageData"]) {
            // line 25
            yield "            ";
            yield from $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "message", [], "any", false, false, false, 25), "GetTWIGTemplateRelPath", [], "method", false, false, false, 25), "templates/application/welcome-popup/layout.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["oMessage" => CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "message", [], "any", false, false, false, 25), "sUUID" => CoreExtension::getAttribute($this->env, $this->source, $context["aProviderMessageData"], "uuid", [], "any", false, false, false, 25), "bIsActive" => (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25) == 1)]));
            // line 26
            yield "        ";
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
        unset($context['_seq'], $context['_key'], $context['aProviderMessageData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </div>
</div>


";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "templates/application/welcome-popup/layout.html.twig";
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
        return array (  156 => 27,  142 => 26,  139 => 25,  122 => 24,  119 => 23,  115 => 21,  95 => 17,  90 => 15,  83 => 11,  76 => 9,  73 => 8,  56 => 7,  53 => 6,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "templates/application/welcome-popup/layout.html.twig", "/var/www/html/templates/application/welcome-popup/layout.html.twig");
    }
}
