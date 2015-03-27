<?php

/* ::base.html.twig */
class __TwigTemplate_bff296f6de31da6af02e1cb17b64fc11a4acefeb5aabf148513d974ef7f8a16d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"description\" content=\"ismailkomay\"/>
        <meta name=\"author\" content=\"ismailkomay\"/>
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <div class=\"container\">
         ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "         ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    
         ";
        // line 26
        $this->displayBlock('footer', $context, $blocks);
        // line 49
        echo "    </div>
    </body>
</html>";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d0cd489_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap-responsive_1.css");
            // line 12
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap-responsive.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap-theme_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap-theme.css_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap-theme.min_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap.css_7.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_bootstrap.min_8.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_8") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_css1_9.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_9") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_jquery-ui_10.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_10") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_jquery.datetimepicker_11.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_11") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_justified-nav_12.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "d0cd489_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489_12") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489_part_1_navbar_13.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "d0cd489"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d0cd489") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/d0cd489.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        // line 21
        echo "         ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b262d73_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_ajax1_1.js");
            // line 22
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_bootstrap_2.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_bootstrap.min_3.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_jquery-2.1.3.min_4.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_jquery-ui_5.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_jquery.datetimepicker_6.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_jquery1_7.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
            // asset "b262d73_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73_part_1_npm_8.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
        } else {
            // asset "b262d73"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_b262d73") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/b262d73.js");
            echo "         <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
         ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "         ";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "         <footer>
         <div class=\"row\">
              <div class=\"span2\">  
              <div class=\"pull-left\">    
            &copy; Copyright ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " / <a href=\"http://www.ctm-messagerie.ma/\" title=\"Komay\">CTM Messagerie</a>.        
              </div>
              </div>
              <div class=\"span1 offset9\">
              <a id=\"opener\" class=\"pull-right\">
              <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/help.png"), "html", null, true);
        echo "\" alt=\"User Manuel\" title=\"User Manuel-Cliquer \" />
              </a>
              <div id=\"usermanuel\" title=\"User Manuel\">Ici nous allons afficher un manuel d'utilisation
              <a href=\"mailto:ism.assal@gmail.com\">Pour plus d'info.</a>
              <br />
              A bientot.
              <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/ctm.png"), "html", null, true);
        echo "\" alt=\"CTM\" title=\"CTM ME\" />
              </div>
              </div>
         </div>

          </footer>
         ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 42,  258 => 36,  250 => 31,  244 => 27,  241 => 26,  237 => 24,  181 => 22,  176 => 21,  173 => 20,  168 => 19,  164 => 14,  78 => 12,  73 => 11,  70 => 10,  64 => 9,  58 => 49,  56 => 26,  53 => 25,  50 => 20,  48 => 19,  40 => 15,  38 => 10,  34 => 9,  24 => 1,);
    }
}
