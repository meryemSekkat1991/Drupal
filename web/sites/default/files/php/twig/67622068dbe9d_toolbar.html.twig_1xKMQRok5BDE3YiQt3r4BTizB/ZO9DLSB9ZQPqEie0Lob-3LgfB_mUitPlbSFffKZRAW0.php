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

/* themes/contrib/stable/templates/navigation/toolbar.html.twig */
class __TwigTemplate_42efd1c9621b3f7de71df6c6df5746b9 extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 23
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["toolbar"], "method", false, false, true, 23), "html", null, true);
        yield ">
  <nav";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["toolbar_attributes"] ?? null), "addClass", ["toolbar-bar", "clearfix"], "method", false, false, true, 24), "html", null, true);
        yield ">
    <h2 class=\"visually-hidden\">";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["toolbar_heading"] ?? null), "html", null, true);
        yield "</h2>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["tab"]) {
            // line 27
            yield "      ";
            $context["tray"] = (($_v0 = ($context["trays"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[$context["key"]] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["trays"] ?? null), $context["key"], [], "array", false, false, true, 27));
            // line 28
            yield "      <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, true, 28), "addClass", ["toolbar-tab"], "method", false, false, true, 28), "html", null, true);
            yield ">
        ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "link", [], "any", false, false, true, 29), "html", null, true);
            yield "
        ";
            // line 30
            $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 31
                yield "          <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "attributes", [], "any", false, false, true, 31), "html", null, true);
                yield ">
            ";
                // line 32
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 32)) {
                    // line 33
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 33), "html", null, true);
                    yield "\">
                <h3 class=\"toolbar-tray-name visually-hidden\">";
                    // line 34
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "label", [], "any", false, false, true, 34), "html", null, true);
                    yield "</h3>
            ";
                } else {
                    // line 36
                    yield "              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            ";
                }
                // line 38
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["tray"] ?? null), "links", [], "any", false, false, true, 38), "html", null, true);
                yield "
            </nav>
          </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v1));
            // line 42
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "  </nav>
  ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["remainder"] ?? null), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "toolbar_attributes", "toolbar_heading", "tabs", "trays", "remainder"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/stable/templates/navigation/toolbar.html.twig";
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
        return array (  117 => 45,  114 => 44,  107 => 42,  105 => 30,  96 => 38,  92 => 36,  87 => 34,  82 => 33,  80 => 32,  75 => 31,  73 => 30,  69 => 29,  64 => 28,  61 => 27,  57 => 26,  53 => 25,  49 => 24,  44 => 23,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for the administrative toolbar.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - toolbar_attributes: HTML attributes to apply to the toolbar.
 * - toolbar_heading: The heading or label for the toolbar.
 * - tabs: List of tabs for the toolbar.
 *   - attributes: HTML attributes for the tab container.
 *   - link: Link or button for the menu tab.
 * - trays: Toolbar tray list, each associated with a tab. Each tray in trays
 *   contains:
 *   - attributes: HTML attributes to apply to the tray.
 *   - label: The tray's label.
 *   - links: The tray menu links.
 * - remainder: Any non-tray, non-tab elements left to be rendered.
 *
 * @see template_preprocess_toolbar()
 */
#}
<div{{ attributes.addClass('toolbar') }}>
  <nav{{ toolbar_attributes.addClass('toolbar-bar', 'clearfix') }}>
    <h2 class=\"visually-hidden\">{{ toolbar_heading }}</h2>
    {% for key, tab in tabs %}
      {% set tray = trays[key] %}
      <div{{ tab.attributes.addClass('toolbar-tab') }}>
        {{ tab.link }}
        {% apply spaceless %}
          <div{{ tray.attributes }}>
            {% if tray.label %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\" aria-label=\"{{ tray.label }}\">
                <h3 class=\"toolbar-tray-name visually-hidden\">{{ tray.label }}</h3>
            {% else %}
              <nav class=\"toolbar-lining clearfix\" role=\"navigation\">
            {% endif %}
            {{ tray.links }}
            </nav>
          </div>
        {% endapply %}
      </div>
    {% endfor %}
  </nav>
  {{ remainder }}
</div>
", "themes/contrib/stable/templates/navigation/toolbar.html.twig", "/var/www/html/web/themes/contrib/stable/templates/navigation/toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 26, "set" => 27, "apply" => 30, "if" => 32);
        static $filters = array("escape" => 23, "spaceless" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'apply', 'if'],
                ['escape', 'spaceless'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
