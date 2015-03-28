<?php

/* FdrAdminBundle:BonCarburantHuile:index.html.twig */
class __TwigTemplate_ad1424cc4ec7f153918bf1335bb5c385af88a702f07180cf853f9236e494cc00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "BonCarburantHuile|Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\"><h2> Liste des bons de carburant</h2></div>
  <div class=\"row\">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Feuille De Route</th>
                <th>Lieu</th>
                <th>Date</th>
                <th>Quantite(Litres)</th>
                <th>Montant(Dhs)</th>
                <th>Compteur(Km)</th>
                <th>Type de Consommation</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncarburanthuile_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "feuilleDeRoute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "feuilleDeRoute", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieu", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieu", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            if ($this->getAttribute($context["entity"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "date", array()), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "quantite", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "quantite", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "montant", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "montant", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "compteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "typeConsommation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "typeConsommation", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td> 
                
                <td>
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncarburanthuile_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;
                        
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("boncarburanthuile_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;

                        <div class=\"col-md-2\">
                        
                        ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["entity"], "id", array()), array(), "array"), 'widget');
            echo "
                        </div>
                        &nbsp;&nbsp;
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>
</div>

              <div id=\"supprimerBonConfrmm\" title=\"User Manuel\">
              </div>
              
        <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("boncarburanthuile_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:BonCarburantHuile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 68,  154 => 59,  142 => 53,  131 => 45,  126 => 43,  116 => 36,  111 => 34,  104 => 30,  100 => 29,  95 => 27,  91 => 26,  85 => 25,  81 => 24,  77 => 23,  71 => 22,  68 => 21,  64 => 20,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
