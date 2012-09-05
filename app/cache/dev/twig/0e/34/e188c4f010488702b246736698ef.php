<?php

/* SiteSiteBundle:Default:index.html.twig */
class __TwigTemplate_0e34e188c4f010488702b246736698ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 30
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 33
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 34
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "            </div>
        </section>

        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Squeleton";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteSiteBundle_homepage"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteSiteBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteSiteBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 33
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Squeleton</a>";
    }

    // line 34
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a Squeleton</a>";
    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        // line 40
        echo "                <article>
\t\t\t        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
\t\t\t        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
\t\t\t        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
\t\t\t        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
\t\t\t        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
\t\t\t        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
\t\t\t        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
\t\t\t        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
\t\t\t        posuere cubilia Curae.</p>
\t\t\t    </article>
                ";
    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        // line 55
        echo "                \t<article>
\t\t\t        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
\t\t\t        amet vehicula leo.</p>
\t\t\t    </article>
                ";
    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        // line 64
        echo "                    Squeleton created by <a href=\"http://monnierdorian.free.fr\">Monnier Dorian</a>
                ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SiteSiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 69,  184 => 64,  181 => 63,  173 => 55,  170 => 54,  155 => 40,  152 => 39,  146 => 34,  140 => 33,  132 => 26,  128 => 25,  124 => 24,  120 => 22,  117 => 21,  111 => 13,  107 => 11,  104 => 10,  98 => 6,  93 => 70,  91 => 69,  84 => 63,  79 => 60,  71 => 39,  63 => 34,  59 => 33,  54 => 30,  52 => 21,  40 => 10,  26 => 1,  41 => 9,  35 => 6,  30 => 5,  86 => 66,  81 => 25,  77 => 54,  73 => 52,  69 => 22,  64 => 20,  58 => 19,  53 => 16,  47 => 13,  44 => 10,  42 => 15,  36 => 7,  33 => 6,  27 => 4,);
    }
}
