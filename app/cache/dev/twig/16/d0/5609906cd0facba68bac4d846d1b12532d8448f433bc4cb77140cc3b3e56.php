<?php

/* FdrAdminBundle:Role:index.html.twig */
class __TwigTemplate_16d05609906cd0facba68bac4d846d1b12532d8448f433bc4cb77140cc3b3e56 extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Role list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nomrole</th>
                <th>Description</th>
                <th>Crudfdr</th>
                <th>Crudfdrpanne</th>
                <th>Crudfdragence</th>
                <th>Crudclientcompefdl</th>
                <th>Crudclientnoncomptefdl</th>
                <th>Affectationvehiculeaffr</th>
                <th>Cloturerfdr</th>
                <th>Cloturerfdraffr</th>
                <th>Confrecdocctm</th>
                <th>Confrecdocclient</th>
                <th>Editcompteur</th>
                <th>Pourcentageassurance</th>
                <th>Crudclient</th>
                <th>Crudvehicule</th>
                <th>Crudchauffeur</th>
                <th>Crudutilisateur</th>
                <th>Cruddepot</th>
                <th>Crudfiliale</th>
                <th>Crudmanutentionnaire</th>
                <th>Crudindisponibilite</th>
                <th>Cruditineraire</th>
                <th>Crudprestation</th>
                <th>Crudtypeprestation</th>
                <th>Crudsecteur</th>
                <th>Crudtypeconsommation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 42
            echo "            <tr>
                <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomRole", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDFDR", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDFDRPanne", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDFDRAgence", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDClientCompeFDL", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDClientNonCompteFDL", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "affectationVehiculeAffr", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cloturerFDR", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cloturerFDRAffr", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "confRecDocCtm", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "confRecDocClient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "editCompteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "pourcentageAssurance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDClient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDVehicule", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDChauffeur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDDepot", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDFiliale", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDManutentionnaire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDIndisponibilite", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDItineraire", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDPrestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDTypePrestation", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDSecteur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cRUDTypeConsommation", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("role_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Role:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 88,  220 => 83,  208 => 77,  202 => 74,  195 => 70,  191 => 69,  187 => 68,  183 => 67,  179 => 66,  175 => 65,  171 => 64,  167 => 63,  163 => 62,  159 => 61,  155 => 60,  151 => 59,  147 => 58,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  115 => 50,  111 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  91 => 44,  85 => 43,  82 => 42,  78 => 41,  39 => 4,  36 => 3,  11 => 1,);
    }
}
