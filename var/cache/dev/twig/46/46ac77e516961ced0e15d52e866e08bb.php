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

/* @WebProfiler/Collector/http_client.html.twig */
class __TwigTemplate_b5a5664aaf4652777d4d3c0afc637379 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/http_client.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/http_client.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "requestCount", [], "any", false, false, false, 4)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
                yield "
            ";
                // line 7
                $context["status_color"] = "";
                // line 8
                yield "            <span class=\"sf-toolbar-value\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "requestCount", [], "any", false, false, false, 8), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 10
            yield "
        ";
            // line 11
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 12
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>";
                // line 14
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 14, $this->source); })()), "requestCount", [], "any", false, false, false, 14), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status ";
                // line 18
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "errorCount", [], "any", false, false, false, 18) > 0)) ? ("sf-toolbar-status-red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "errorCount", [], "any", false, false, false, 18), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 21
            yield "
        ";
            // line 22
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 22, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 22, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 27
        yield "<span class=\"label ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "requestCount", [], "any", false, false, false, 27) == 0)) ? ("disabled") : (""));
        yield "\">
    <span class=\"icon\">";
        // line 28
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/http-client.svg");
        yield "</span>
    <strong>HTTP Client</strong>
    ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "requestCount", [], "any", false, false, false, 30)) {
            // line 31
            yield "        <span class=\"count\">
            ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "requestCount", [], "any", false, false, false, 32), "html", null, true);
            yield "
        </span>
    ";
        }
        // line 35
        yield "</span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        yield "    <h2>HTTP Client</h2>
    ";
        // line 40
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 40, $this->source); })()), "requestCount", [], "any", false, false, false, 40) == 0)) {
            // line 41
            yield "        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    ";
        } else {
            // line 45
            yield "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 47, $this->source); })()), "requestCount", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "errorCount", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "clients", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["name"] => $context["client"]) {
                // line 58
                yield "                <div class=\"tab ";
                yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 58)) == 0)) ? ("disabled") : (""));
                yield "\">
                    <h3 class=\"tab-title\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield " <span class=\"badge\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 59)), "html", null, true);
                yield "</span></h3>
                    <div class=\"tab-content\">
                        ";
                // line 61
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 61)) == 0)) {
                    // line 62
                    yield "                            <div class=\"empty\">
                                <p>No requests were made with the \"";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\" service.</p>
                            </div>
                        ";
                } else {
                    // line 66
                    yield "                            <h4>Requests</h4>
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "traces", [], "any", false, false, false, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 68
                        yield "                                ";
                        $context["profiler_token"] = "";
                        // line 69
                        yield "                                ";
                        $context["profiler_link"] = "";
                        // line 70
                        yield "                                ";
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, true, false, 70), "response_headers", [], "any", true, true, false, 70)) {
                            // line 71
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 71), "response_headers", [], "any", false, false, false, 71));
                            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                                // line 72
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token: .*\$/i", $context["header"])) {
                                    // line 73
                                    yield "                                            ";
                                    $context["profiler_token"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 73), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token: "));
                                    // line 74
                                    yield "                                        ";
                                }
                                // line 75
                                yield "                                        ";
                                if (CoreExtension::matches("/^x-debug-token-link: .*\$/i", $context["header"])) {
                                    // line 76
                                    yield "                                            ";
                                    $context["profiler_link"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["header"], "getValue", [], "any", false, false, false, 76), Twig\Extension\CoreExtension::length($this->env->getCharset(), "x-debug-token-link: "));
                                    // line 77
                                    yield "                                        ";
                                }
                                // line 78
                                yield "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['header'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            yield "                                ";
                        }
                        // line 80
                        yield "                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "method", [], "any", false, false, false, 84), "html", null, true);
                        yield "</span>
                                        </th>
                                        <th class=\"full-width\">
                                            ";
                        // line 87
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "url", [], "any", false, false, false, 87), "html", null, true);
                        yield "
                                            ";
                        // line 88
                        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 88))) {
                            // line 89
                            yield "                                                ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "options", [], "any", false, false, false, 89), 1);
                            yield "
                                            ";
                        }
                        // line 91
                        yield "                                        </th>
                                        ";
                        // line 92
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 92, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 92, $this->source); })()))) {
                            // line 93
                            yield "                                            <th>
                                                Profile
                                            </th>
                                        ";
                        }
                        // line 97
                        yield "                                        ";
                        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 97))) {
                            // line 98
                            yield "                                            <th>
                                                <button class=\"btn btn-sm hidden label\" title=\"Copy as curl\" data-clipboard-text=\"";
                            // line 99
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 99), "html", null, true);
                            yield "\">curl</button>
                                            </th>
                                        ";
                        }
                        // line 102
                        yield "                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            ";
                        // line 107
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 107) >= 500)) {
                            // line 108
                            yield "                                                ";
                            $context["responseStatus"] = "error";
                            // line 109
                            yield "                                            ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 109) >= 400)) {
                            // line 110
                            yield "                                                ";
                            $context["responseStatus"] = "warning";
                            // line 111
                            yield "                                            ";
                        } else {
                            // line 112
                            yield "                                                ";
                            $context["responseStatus"] = "success";
                            // line 113
                            yield "                                            ";
                        }
                        // line 114
                        yield "                                            <span class=\"label status-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["responseStatus"]) || array_key_exists("responseStatus", $context) ? $context["responseStatus"] : (function () { throw new RuntimeError('Variable "responseStatus" does not exist.', 114, $this->source); })()), "html", null, true);
                        yield "\">
                                                ";
                        // line 115
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "http_code", [], "any", false, false, false, 115), "html", null, true);
                        yield "
                                            </span>
                                        </th>
                                        <td";
                        // line 118
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "curlCommand", [], "any", false, false, false, 118)) {
                            yield " colspan=\"2\"";
                        }
                        yield ">
                                            ";
                        // line 119
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["trace"], "info", [], "any", false, false, false, 119), 1);
                        yield "
                                        </td>
                                        ";
                        // line 121
                        if (((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 121, $this->source); })()) && (isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 121, $this->source); })()))) {
                            // line 122
                            yield "                                            <td>
                                                <span><a href=\"";
                            // line 123
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profiler_link"]) || array_key_exists("profiler_link", $context) ? $context["profiler_link"] : (function () { throw new RuntimeError('Variable "profiler_link" does not exist.', 123, $this->source); })()), "html", null, true);
                            yield "\" target=\"_blank\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profiler_token"]) || array_key_exists("profiler_token", $context) ? $context["profiler_token"] : (function () { throw new RuntimeError('Variable "profiler_token" does not exist.', 123, $this->source); })()), "html", null, true);
                            yield "</a></span>
                                            </td>
                                        ";
                        }
                        // line 126
                        yield "                                    </tr>
                                    </tbody>
                                </table>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['trace'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    yield "                        ";
                }
                // line 131
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['client'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            yield "        ";
        }
        // line 135
        yield "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/http_client.html.twig";
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
        return array (  437 => 135,  434 => 134,  426 => 131,  423 => 130,  414 => 126,  406 => 123,  403 => 122,  401 => 121,  396 => 119,  390 => 118,  384 => 115,  379 => 114,  376 => 113,  373 => 112,  370 => 111,  367 => 110,  364 => 109,  361 => 108,  359 => 107,  352 => 102,  346 => 99,  343 => 98,  340 => 97,  334 => 93,  332 => 92,  329 => 91,  323 => 89,  321 => 88,  317 => 87,  311 => 84,  305 => 80,  302 => 79,  296 => 78,  293 => 77,  290 => 76,  287 => 75,  284 => 74,  281 => 73,  278 => 72,  273 => 71,  270 => 70,  267 => 69,  264 => 68,  260 => 67,  257 => 66,  251 => 63,  248 => 62,  246 => 61,  239 => 59,  234 => 58,  230 => 57,  221 => 51,  214 => 47,  210 => 45,  204 => 41,  202 => 40,  199 => 39,  186 => 38,  174 => 35,  168 => 32,  165 => 31,  163 => 30,  158 => 28,  153 => 27,  140 => 26,  126 => 22,  123 => 21,  114 => 18,  107 => 14,  103 => 12,  101 => 11,  98 => 10,  91 => 8,  89 => 7,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.requestCount %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/http-client.svg') }}
            {% set status_color = '' %}
            <span class=\"sf-toolbar-value\">{{ collector.requestCount }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total requests</b>
                <span>{{ collector.requestCount }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP errors</b>
                <span class=\"sf-toolbar-status {{ collector.errorCount > 0 ? 'sf-toolbar-status-red' }}\">{{ collector.errorCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label {{ collector.requestCount == 0 ? 'disabled' }}\">
    <span class=\"icon\">{{ source('@WebProfiler/Icon/http-client.svg') }}</span>
    <strong>HTTP Client</strong>
    {% if collector.requestCount %}
        <span class=\"count\">
            {{ collector.requestCount }}
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>HTTP Client</h2>
    {% if collector.requestCount == 0 %}
        <div class=\"empty\">
            <p>No HTTP requests were made.</p>
        </div>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestCount }}</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.errorCount }}</span>
                <span class=\"label\">HTTP errors</span>
            </div>
        </div>
        <h2>Clients</h2>
        <div class=\"sf-tabs\">
            {% for name, client in collector.clients %}
                <div class=\"tab {{ client.traces|length == 0 ? 'disabled' }}\">
                    <h3 class=\"tab-title\">{{ name }} <span class=\"badge\">{{ client.traces|length }}</span></h3>
                    <div class=\"tab-content\">
                        {% if client.traces|length == 0 %}
                            <div class=\"empty\">
                                <p>No requests were made with the \"{{ name }}\" service.</p>
                            </div>
                        {% else %}
                            <h4>Requests</h4>
                            {% for trace in client.traces %}
                                {% set profiler_token = '' %}
                                {% set profiler_link = '' %}
                                {% if trace.info.response_headers is defined %}
                                    {% for header in trace.info.response_headers %}
                                        {% if header matches '/^x-debug-token: .*\$/i' %}
                                            {% set profiler_token = (header.getValue | slice('x-debug-token: ' | length)) %}
                                        {% endif %}
                                        {% if header matches '/^x-debug-token-link: .*\$/i' %}
                                            {% set profiler_link = (header.getValue | slice('x-debug-token-link: ' | length)) %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                                <table>
                                    <thead>
                                    <tr>
                                        <th>
                                            <span class=\"label\">{{ trace.method }}</span>
                                        </th>
                                        <th class=\"full-width\">
                                            {{ trace.url }}
                                            {% if trace.options is not empty %}
                                                {{ profiler_dump(trace.options, maxDepth=1) }}
                                            {% endif %}
                                        </th>
                                        {% if profiler_token and profiler_link %}
                                            <th>
                                                Profile
                                            </th>
                                        {% endif %}
                                        {% if trace.curlCommand is not null %}
                                            <th>
                                                <button class=\"btn btn-sm hidden label\" title=\"Copy as curl\" data-clipboard-text=\"{{ trace.curlCommand }}\">curl</button>
                                            </th>
                                        {% endif %}
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>
                                            {% if trace.http_code >= 500 %}
                                                {% set responseStatus = 'error' %}
                                            {% elseif trace.http_code >= 400 %}
                                                {% set responseStatus = 'warning' %}
                                            {% else %}
                                                {% set responseStatus = 'success' %}
                                            {% endif %}
                                            <span class=\"label status-{{ responseStatus }}\">
                                                {{ trace.http_code }}
                                            </span>
                                        </th>
                                        <td{% if trace.curlCommand %} colspan=\"2\"{% endif %}>
                                            {{ profiler_dump(trace.info, maxDepth=1) }}
                                        </td>
                                        {% if profiler_token and profiler_link %}
                                            <td>
                                                <span><a href=\"{{ profiler_link }}\" target=\"_blank\">{{ profiler_token }}</a></span>
                                            </td>
                                        {% endif %}
                                    </tr>
                                    </tbody>
                                </table>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        {% endif %}
    </div>
{% endblock %}
", "@WebProfiler/Collector/http_client.html.twig", "C:\\xampp\\htdocs\\portfolio\\master\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\http_client.html.twig");
    }
}
