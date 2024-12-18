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

/* themes/contrib/stable/templates/content/comment.html.twig */
class __TwigTemplate_04310ebced3ecd9e4879adabc0f5e07c extends Template
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
        // line 69
        yield "
<article";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["js-comment"], "method", false, false, true, 70), "html", null, true);
        yield ">
  ";
        // line 76
        yield "  <mark class=\"hidden\" data-comment-timestamp=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["new_indicator_timestamp"] ?? null), "html", null, true);
        yield "\"></mark>

  ";
        // line 78
        if (($context["submitted"] ?? null)) {
            // line 79
            yield "    <footer>
      ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["user_picture"] ?? null), "html", null, true);
            yield "
      <p>";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["submitted"] ?? null), "html", null, true);
            yield "</p>

      ";
            // line 88
            yield "      ";
            if (($context["parent"] ?? null)) {
                // line 89
                yield "        <p class=\"visually-hidden\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["parent"] ?? null), "html", null, true);
                yield "</p>
      ";
            }
            // line 91
            yield "
      ";
            // line 92
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["permalink"] ?? null), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 95
        yield "
  <div";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true);
        yield ">
    ";
        // line 97
        if (($context["title"] ?? null)) {
            // line 98
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
            yield "
      <h3";
            // line 99
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
            yield ">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h3>
      ";
            // line 100
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
            yield "
    ";
        }
        // line 102
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</article>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "new_indicator_timestamp", "submitted", "user_picture", "parent", "permalink", "content_attributes", "title", "title_prefix", "title_attributes", "title_suffix", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/stable/templates/content/comment.html.twig";
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
        return array (  114 => 102,  109 => 100,  103 => 99,  98 => 98,  96 => 97,  92 => 96,  89 => 95,  83 => 92,  80 => 91,  74 => 89,  71 => 88,  66 => 81,  62 => 80,  59 => 79,  57 => 78,  51 => 76,  47 => 70,  44 => 69,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override for comments.
 *
 * Available variables:
 * - author: (optional) Comment author. Can be a link or plain text.
 * - content: The content-related items for the comment display. Use
 *   {{ content }} to print them all, or print a subset such as
 *   {{ content.field_example }}. Use the following code to temporarily suppress
 *   the printing of a given child element:
 *   @code
 *   {{ content|without('field_example') }}
 *   @endcode
 * - created: (optional) Formatted date and time for when the comment was
 *   created. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.created' variable.
 * - changed: (optional) Formatted date and time for when the comment was last
 *   changed. Preprocess functions can reformat it by calling
 *   DateFormatter::format() with the desired parameters on the
 *   'comment.changed' variable.
 * - permalink: Comment permalink.
 * - submitted: (optional) Submission information created from author and
 *   created during template_preprocess_comment().
 * - user_picture: (optional) The comment author's profile picture.
 * - status: Comment status. Possible values are:
 *   unpublished, published, or preview.
 * - title: (optional) Comment title, linked to the comment.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class may contain one or more of the following classes:
 *   - comment: The current template type; for instance, 'theming hook'.
 *   - by-anonymous: Comment by an unregistered user.
 *   - by-{entity-type}-author: Comment by the author of the parent entity,
 *     eg. by-node-author.
 *   - preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - unpublished: An unpublished comment visible only to administrators.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - content_attributes: List of classes for the styling of the comment content.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - threaded: A flag indicating whether the comments are threaded or not.
 *
 * These variables are provided to give context about the parent comment (if
 * any, optional):
 * - parent_comment: Full parent comment entity (if any).
 * - parent_author: Equivalent to author for the parent comment.
 * - parent_created: Equivalent to created for the parent comment.
 * - parent_changed: Equivalent to changed for the parent comment.
 * - parent_title: Equivalent to title for the parent comment.
 * - parent_permalink: Equivalent to permalink for the parent comment.
 * - parent: A text string of parent comment submission information created from
 *   'parent_author' and 'parent_created' during template_preprocess_comment().
 *   This information is presented to help screen readers follow lengthy
 *   discussion threads. You can hide this from sighted users using the class
 *   visually-hidden.
 *
 * These two variables are provided for context:
 * - comment: Full comment object.
 * - commented_entity: Entity the comments are attached to.
 *
 * @see template_preprocess_comment()
 */
#}

<article{{ attributes.addClass('js-comment') }}>
  {#
    Hide the \"new\" indicator by default, let a piece of JavaScript ask the
    server which comments are new for the user. Rendering the final \"new\"
    indicator here would break the render cache.
  #}
  <mark class=\"hidden\" data-comment-timestamp=\"{{ new_indicator_timestamp }}\"></mark>

  {% if submitted %}
    <footer>
      {{ user_picture }}
      <p>{{ submitted }}</p>

      {#
        Indicate the semantic relationship between parent and child comments for
        accessibility. The list is difficult to navigate in a screen reader
        without this information.
      #}
      {% if parent %}
        <p class=\"visually-hidden\">{{ parent }}</p>
      {% endif %}

      {{ permalink }}
    </footer>
  {% endif %}

  <div{{ content_attributes }}>
    {% if title %}
      {{ title_prefix }}
      <h3{{ title_attributes }}>{{ title }}</h3>
      {{ title_suffix }}
    {% endif %}
    {{ content }}
  </div>
</article>
", "themes/contrib/stable/templates/content/comment.html.twig", "/var/www/html/web/themes/contrib/stable/templates/content/comment.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 78);
        static $filters = array("escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
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
