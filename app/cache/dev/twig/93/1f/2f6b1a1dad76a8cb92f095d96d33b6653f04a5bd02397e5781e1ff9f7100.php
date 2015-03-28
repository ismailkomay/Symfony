<?php

/* FdrAdminBundle:MissionAffretement:index.html.twig */
class __TwigTemplate_931f2f6b1a1dad76a8cb92f095d96d33b6653f04a5bd02397e5781e1ff9f7100 extends Twig_Template
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
        echo "MissionAffretement|Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"page-header\">
    <div class=\"row\">
    <h2> Liste des feuilles de lancement</h2>
    <div class=\"span4 offset8\">
        <form class=\"form-search form-inline\" action=\"\">
         <input type=\"text\" class=\"input-medium search-query\" placeholder=\"Par mot clè...?\"/>
         <button  type=\"submit\">
         <span>Rechercher</span>
         <img id=\"inputButton\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
        echo "\" />
          <b class=\"caret\"></b>
         </button>         
         </form>
        

    </div>
    </div>
  
  ";
        // line 22
        echo "  <div class=\"row\">
             <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"\"><a href=\"#\">Accueil</a></li>
            <li class=\"\"><a href=\"#\">Feuile De Route</a></li>
            <li class=\"\"><a href=\"#\">Feuille De Mission</a></li>
            <li class=\"\"><a href=\"#\">Profil</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Autre Gestion <b class=\"caret\"></b></a>
              <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Gestion depot</a></li>
                <li><a href=\"#\">Gestion Filiale</a></li>
                <li><a href=\"#\">Gestion Client</a></li>
                <li><a href=\"#\">Gestion ...</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Se déconnecter</a></li>
              </ul>
            </li>
            
          </ul>
        </div>
</div>
        
     
  </div>
    
  
   <div class=\"row\">
    <table>
        <thead>
            <tr>
                <th rowspan=\"2\">Id</th>
                <th rowspan=\"2\">Client</th>
                <th rowspan=\"2\">Secteur</th>
                <th rowspan=\"2\">Nom du responsable</th>
                <th rowspan=\"2\">Tel du responsable</th>
                <th rowspan=\"2\">Montant(Dhs)</th>
                <th  colspan=\"2\">Ramassage</th>
                <th  colspan=\"2\">Livraison</th>
                <th rowspan=\"2\">Remise</th>
                <th rowspan=\"2\">Montant réglé ?</th>
                
            </tr>
            <tr>
                <th>Date de Ramassage.</th>
                <th>Lieu de Ramassage</th>
                <th>Date de Livraison</th>
                <th>Lieu de Livraison</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 74
            echo "            <tr>
                <td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td id=\"idclient";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "client", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "client", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "secteur", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "secteur", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "nomresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "nomresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "telresponsable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "telresponsable", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "montantfacture", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "montantfacture", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>               
                <td>";
            // line 81
            if ($this->getAttribute($context["entity"], "dateramassage", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateramassage", array()), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "lieuramassage", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            if ($this->getAttribute($context["entity"], "datelivraison", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "datelivraison", array()), "Y/m/d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "lieulivraison", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "lieulivraison", array()), "-----")) : ("-----")), "html", null, true);
            echo "</td>    
                <td>";
            // line 85
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entity"], "remise", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entity"], "remise", array()), "Aucune")) : ("Aucune")), "html", null, true);
            echo "</td>
                
                <td>
                ";
            // line 88
            if ($this->getAttribute($context["entity"], "montantregle", array())) {
                // line 89
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 91
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 93
            echo "                </td>
                <td>
                     <div class=\"span2\">
                        <div class=\"row-fluid\">
                        <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" alt=\"Aperçu\" title=\"Aperçu\"/></a>
                        &nbsp;|&nbsp;<a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
            echo "\" alt=\"Modifier\" title=\"Modifier\" /></a>
                        &nbsp;|&nbsp;<a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_print", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/imprimer.png"), "html", null, true);
            echo "\" alt=\"Imprimer\" title=\"Imprimer\"/></a>
                        &nbsp;|&nbsp;<a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_print", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/cancel.png"), "html", null, true);
            echo "\" alt=\"Annuler\" title=\"Annuler la feuille\" /></a>
                        &nbsp;|&nbsp;<a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("missionaffretement_delete", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/supprimer.png"), "html", null, true);
            echo "\" alt=\"Supprimer\" title=\"Supprimer\"/></a>
                        </div>
                     </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "        </tbody>
    </table>
</div>
        <ul>
        <li>
            <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("missionaffretement_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:MissionAffretement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 112,  236 => 107,  222 => 101,  216 => 100,  210 => 99,  204 => 98,  198 => 97,  192 => 93,  188 => 91,  184 => 89,  182 => 88,  176 => 85,  172 => 84,  166 => 83,  162 => 82,  156 => 81,  152 => 80,  148 => 79,  144 => 78,  140 => 77,  134 => 76,  128 => 75,  125 => 74,  121 => 73,  68 => 22,  56 => 12,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
