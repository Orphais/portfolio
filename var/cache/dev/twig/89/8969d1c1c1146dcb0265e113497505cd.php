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

/* partials/_cards.html.twig */
class __TwigTemplate_7aeb2f91bf33e9a3a50e231a6b14a584 extends Template
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
            'style_cards' => [$this, 'block_style_cards'],
            'content_cards' => [$this, 'block_content_cards'],
            'carroussel' => [$this, 'block_carroussel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_cards.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('style_cards', $context, $blocks);
        // line 58
        yield "
";
        // line 59
        yield from $this->unwrap()->yieldBlock('content_cards', $context, $blocks);
        // line 128
        yield "
";
        // line 129
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_style_cards(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_cards"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style_cards"));

        // line 2
        yield "\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}

\t\t.share-icon {
\t\t\tcursor: pointer;
\t\t\tcolor: #007bff;
\t\t\tfont-size: 1.5rem;
\t\t\tmargin-left: 10px;
\t\t}

\t\t.copied-message {
\t\t\tcolor: green;
\t\t\tfont-size: 0.9rem;
\t\t\tdisplay: none;
\t\t}

\t\t.copied-message.active {
\t\t\tdisplay: inline-block;
\t\t}

\t\t.modal-dialog {
\t\t\tmax-width: 70%;
\t\t\twidth: auto;
\t\t\tmax-height: 105vh;
\t\t}

\t\t.modal-body {
\t\t\tmax-height: 85vh;
\t\t\toverflow-y: auto;
\t\t}

\t\t.comment {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: flex-start;
\t\t\tpadding-left: 20px;
\t\t\theight: 3em;
\t\t\twidth: 100%;
\t\t\tborder-radius: 50px;
\t\t\tbackground-color: white;
\t\t\tcolor: black;
\t\t\tfont-size: 1.2em;
\t\t\ttext-align: left;
\t\t\tcursor: pointer;
\t\t\tbox-sizing: border-box;
\t\t}
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 59
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_cards(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_cards"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_cards"));

        // line 60
        yield "\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["creations"]) || array_key_exists("creations", $context) ? $context["creations"] : (function () { throw new RuntimeError('Variable "creations" does not exist.', 61, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["creation"]) {
            // line 62
            yield "\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 hover-card\" style=\"border-radius: 30px;\">
\t\t\t\t\t<img src=\"/images/";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "image", [], "any", false, false, false, 64), 0, [], "array", false, false, false, 64), "html", null, true);
            yield "\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 64), "html", null, true);
            yield "\" data-bs-toggle=\"modal\" data-bs-target=\"#creationModal-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield "</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t<div class=\"like share\">
\t\t\t\t\t\t\t<a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71) && CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71)], "method", false, false, false, 71))) {
                // line 72
                yield "\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t";
            } else {
                // line 74
                yield "\t\t\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t";
            }
            // line 76
            yield "\t\t\t\t\t\t\t\t<span class=\"js-likes\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "likes", [], "any", false, false, false, 76)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation.comments", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"btn btn-link js-comment\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t<span class=\"js-comments\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "comments", [], "any", false, false, false, 80)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"share-icon\" data-share-url=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" title=\"Partager\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-share\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"copied-message\">Lien copié !</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal fade\" id=\"creationModal-";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\" data-bs-backdrop=\"static\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\">";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "name", [], "any", false, false, false, 95), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t";
            // line 99
            yield from $this->unwrap()->yieldBlock('carroussel', $context, $blocks);
            // line 102
            yield "
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t\t\t";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "description", [], "any", false, false, false, 105), "html", null, true);
            yield "</p>

\t\t\t\t\t\t\t<h3>Outils utilisés :</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "Tool", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                // line 110
                yield "\t\t\t\t\t\t\t\t\t<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 110), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tool'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<h3>Catégories :</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["creation"], "category", [], "any", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 117
                yield "\t\t\t\t\t\t\t\t\t<li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 117), "html", null, true);
                yield "</li>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
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
        unset($context['_seq'], $context['_key'], $context['creation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carroussel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carroussel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carroussel"));

        // line 100
        yield "\t\t\t\t\t\t\t\t";
        yield from         $this->loadTemplate("partials/_carroussel.html.twig", "partials/_cards.html.twig", 100)->unwrap()->yield($context);
        // line 101
        yield "\t\t\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 130
        yield "\t<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js\"></script>

\t<script>
\t\tfunction onClickBtnLike(event) {
\t\t\tevent.preventDefault();
\t\t\tconst url = this.href;
\t\t\tconst spanCount = this.querySelector('span.js-likes');
\t\t\tconst icone = this.querySelector('i');

\t\t\taxios.get(url).then(function (response) {
\t\t\t\tspanCount.textContent = response.data.likes;

\t\t\t\tif (icone.classList.contains('fas')) {
\t\t\t\t\ticone.classList.replace('fas', 'far');
\t\t\t\t} else {
\t\t\t\t\ticone.classList.replace('far', 'fas');
\t\t\t\t}
\t\t\t}).catch(function (error) {
\t\t\t\tif (error.response.status === 403) {
\t\t\t\t\twindow.alert('Vous ne pouvez pas liker une création si vous n\\'êtes pas connecté !');
\t\t\t\t} else {
\t\t\t\t\twindow.alert(\"Une erreur s'est produite\");
\t\t\t\t}
\t\t\t});
\t\t}

\t\tdocument.querySelectorAll('a.js-like').forEach(function (link) {
\t\t\tlink.addEventListener('click', onClickBtnLike);
\t\t});

\t\tfunction onClickBtnComment(event) {
\t\t\tevent.preventDefault();
\t\t\tconst isUserConnected = ";
        // line 164
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "user", [], "any", false, false, false, 164))) ? ("true") : ("false"));
        yield ";
\t\t\t
\t\t\tif (!isUserConnected) {
\t\t\t\twindow.alert('Vous ne pouvez pas commenter une création si vous n\\'êtes pas connecté !');
\t\t\t\treturn;
\t\t\t}
\t\t\t
\t\t\twindow.location.href = this.href;
\t\t}

\t\tdocument.querySelectorAll('a.js-comment').forEach(function (link) {
\t\t\tlink.addEventListener('click', onClickBtnComment);
\t\t});

\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst shareIcons = document.querySelectorAll('.share-icon');
\t\t\tshareIcons.forEach(icon => {
\t\t\t\ticon.addEventListener('click', function (event) {
\t\t\t\t\tevent.stopPropagation();

\t\t\t\t\tconst relativeUrl = this.getAttribute('data-share-url');
\t\t\t\t\tconst fullUrl = `\${window.location.origin}\${relativeUrl}`;

\t\t\t\t\tnavigator.clipboard.writeText(fullUrl).then(() => {
\t\t\t\t\t\tconst message = this.nextElementSibling;
\t\t\t\t\t\tmessage.classList.add('active');
\t\t\t\t\t\tsetTimeout(() => message.classList.remove('active'), 2000);
\t\t\t\t\t}).catch(err => console.error('Erreur lors de la copie du lien :', err));
\t\t\t\t});
\t\t\t});
\t\t});
\t</script>
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
        return "partials/_cards.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  415 => 164,  379 => 130,  366 => 129,  355 => 101,  352 => 100,  339 => 99,  327 => 126,  307 => 119,  298 => 117,  294 => 116,  288 => 112,  279 => 110,  275 => 109,  268 => 105,  263 => 102,  261 => 99,  254 => 95,  247 => 91,  235 => 82,  230 => 80,  225 => 78,  219 => 76,  215 => 74,  211 => 72,  209 => 71,  205 => 70,  198 => 66,  189 => 64,  185 => 62,  168 => 61,  165 => 60,  152 => 59,  86 => 2,  73 => 1,  62 => 129,  59 => 128,  57 => 59,  54 => 58,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block style_cards %}
\t<style>
\t\t.hover-card {
\t\t\ttransition: background-color 0.3s ease, transform 0.2s ease;
\t\t}

\t\t.hover-card:hover {
\t\t\tbackground-color: #f8f9fa;
\t\t\ttransform: scale(1.02);
\t\t\tcursor: pointer;
\t\t}

\t\t.share-icon {
\t\t\tcursor: pointer;
\t\t\tcolor: #007bff;
\t\t\tfont-size: 1.5rem;
\t\t\tmargin-left: 10px;
\t\t}

\t\t.copied-message {
\t\t\tcolor: green;
\t\t\tfont-size: 0.9rem;
\t\t\tdisplay: none;
\t\t}

\t\t.copied-message.active {
\t\t\tdisplay: inline-block;
\t\t}

\t\t.modal-dialog {
\t\t\tmax-width: 70%;
\t\t\twidth: auto;
\t\t\tmax-height: 105vh;
\t\t}

\t\t.modal-body {
\t\t\tmax-height: 85vh;
\t\t\toverflow-y: auto;
\t\t}

\t\t.comment {
\t\t\tdisplay: flex;
\t\t\talign-items: center;
\t\t\tjustify-content: flex-start;
\t\t\tpadding-left: 20px;
\t\t\theight: 3em;
\t\t\twidth: 100%;
\t\t\tborder-radius: 50px;
\t\t\tbackground-color: white;
\t\t\tcolor: black;
\t\t\tfont-size: 1.2em;
\t\t\ttext-align: left;
\t\t\tcursor: pointer;
\t\t\tbox-sizing: border-box;
\t\t}
\t</style>
{% endblock %}

{% block content_cards %}
\t<div class=\"row row-cols-1 row-cols-md-3 g-4 mx-4\" data-masonry='{\"percentPosition\": true }'>
\t\t{% for creation in creations %}
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card h-100 hover-card\" style=\"border-radius: 30px;\">
\t\t\t\t\t<img src=\"/images/{{ creation.image[0] }}\" class=\"card-img-top\" style=\"border-radius: 30px 30px 0 0;\" alt=\"{{ creation.name }}\" data-bs-toggle=\"modal\" data-bs-target=\"#creationModal-{{ creation.id }}\">
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h5 class=\"card-title\">{{ creation.name }}</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-end\">
\t\t\t\t\t\t<div class=\"like share\">
\t\t\t\t\t\t\t<a href=\"{{ path('creation.like', { 'id': creation.id }) }}\" class=\"btn btn-link js-like\">
\t\t\t\t\t\t\t\t{% if app.user and creation.isLikedByUser(app.user) %}
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<i class=\"far fa-thumbs-up\"></i>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<span class=\"js-likes\">{{ creation.likes | length }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('creation.comments', {'id': creation.id}) }}\" class=\"btn btn-link js-comment\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-comments\"></i>
\t\t\t\t\t\t\t\t<span class=\"js-comments\">{{ creation.comments | length }}</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"share-icon\" data-share-url=\"{{ path('creation_show', {'id': creation.id}) }}\" title=\"Partager\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-share\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<span class=\"copied-message\">Lien copié !</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"modal fade\" id=\"creationModal-{{ creation.id }}\" tabindex=\"-1\" aria-hidden=\"true\" data-bs-backdrop=\"static\">
\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t<h5 class=\"modal-title\">{{ creation.name }}</h5>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t{% block carroussel %}
\t\t\t\t\t\t\t\t{% include \"partials/_carroussel.html.twig\" %}
\t\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<strong>Description :</strong>
\t\t\t\t\t\t\t\t{{ creation.description }}</p>

\t\t\t\t\t\t\t<h3>Outils utilisés :</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for tool in creation.Tool %}
\t\t\t\t\t\t\t\t\t<li>{{ tool.name }}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t<h3>Catégories :</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t{% for category in creation.category %}
\t\t\t\t\t\t\t\t\t<li>{{ category.name }}</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t{% endfor %}
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js\" integrity=\"sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D\" crossorigin=\"anonymous\" async></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js\"></script>

\t<script>
\t\tfunction onClickBtnLike(event) {
\t\t\tevent.preventDefault();
\t\t\tconst url = this.href;
\t\t\tconst spanCount = this.querySelector('span.js-likes');
\t\t\tconst icone = this.querySelector('i');

\t\t\taxios.get(url).then(function (response) {
\t\t\t\tspanCount.textContent = response.data.likes;

\t\t\t\tif (icone.classList.contains('fas')) {
\t\t\t\t\ticone.classList.replace('fas', 'far');
\t\t\t\t} else {
\t\t\t\t\ticone.classList.replace('far', 'fas');
\t\t\t\t}
\t\t\t}).catch(function (error) {
\t\t\t\tif (error.response.status === 403) {
\t\t\t\t\twindow.alert('Vous ne pouvez pas liker une création si vous n\\'êtes pas connecté !');
\t\t\t\t} else {
\t\t\t\t\twindow.alert(\"Une erreur s'est produite\");
\t\t\t\t}
\t\t\t});
\t\t}

\t\tdocument.querySelectorAll('a.js-like').forEach(function (link) {
\t\t\tlink.addEventListener('click', onClickBtnLike);
\t\t});

\t\tfunction onClickBtnComment(event) {
\t\t\tevent.preventDefault();
\t\t\tconst isUserConnected = {{ app.user is not null ? 'true' : 'false' }};
\t\t\t
\t\t\tif (!isUserConnected) {
\t\t\t\twindow.alert('Vous ne pouvez pas commenter une création si vous n\\'êtes pas connecté !');
\t\t\t\treturn;
\t\t\t}
\t\t\t
\t\t\twindow.location.href = this.href;
\t\t}

\t\tdocument.querySelectorAll('a.js-comment').forEach(function (link) {
\t\t\tlink.addEventListener('click', onClickBtnComment);
\t\t});

\t\tdocument.addEventListener('DOMContentLoaded', function () {
\t\t\tconst shareIcons = document.querySelectorAll('.share-icon');
\t\t\tshareIcons.forEach(icon => {
\t\t\t\ticon.addEventListener('click', function (event) {
\t\t\t\t\tevent.stopPropagation();

\t\t\t\t\tconst relativeUrl = this.getAttribute('data-share-url');
\t\t\t\t\tconst fullUrl = `\${window.location.origin}\${relativeUrl}`;

\t\t\t\t\tnavigator.clipboard.writeText(fullUrl).then(() => {
\t\t\t\t\t\tconst message = this.nextElementSibling;
\t\t\t\t\t\tmessage.classList.add('active');
\t\t\t\t\t\tsetTimeout(() => message.classList.remove('active'), 2000);
\t\t\t\t\t}).catch(err => console.error('Erreur lors de la copie du lien :', err));
\t\t\t\t});
\t\t\t});
\t\t});
\t</script>
{% endblock %}
", "partials/_cards.html.twig", "C:\\xampp\\htdocs\\portfolio\\commentaires\\templates\\partials\\_cards.html.twig");
    }
}
