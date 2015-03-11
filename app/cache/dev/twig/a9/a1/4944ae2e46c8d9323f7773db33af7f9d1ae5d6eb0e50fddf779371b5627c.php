<?php

/* FdrAdminBundle:Role:show.html.twig */
class __TwigTemplate_a9a14944ae2e46c8d9323f7773db33af7f9d1ae5d6eb0e50fddf779371b5627c extends Twig_Template
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
        echo "Role";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Role</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomrole</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomRole", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudfdr</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDFDR", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudfdrpanne</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDFDRPanne", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudfdragence</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDFDRAgence", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudclientcompefdl</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDClientCompeFDL", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudclientnoncomptefdl</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDClientNonCompteFDL", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Affectationvehiculeaffr</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affectationVehiculeAffr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cloturerfdr</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cloturerFDR", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cloturerfdraffr</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cloturerFDRAffr", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confrecdocctm</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "confRecDocCtm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Confrecdocclient</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "confRecDocClient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Editcompteur</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "editCompteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pourcentageassurance</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "pourcentageAssurance", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudclient</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDClient", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudvehicule</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDVehicule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudchauffeur</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDChauffeur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudutilisateur</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDUtilisateur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruddepot</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDDepot", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudfiliale</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDFiliale", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudmanutentionnaire</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDManutentionnaire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudindisponibilite</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDIndisponibilite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cruditineraire</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDItineraire", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudprestation</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDPrestation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudtypeprestation</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDTypePrestation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudsecteur</th>
                <td>";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDSecteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Crudtypeconsommation</th>
                <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cRUDTypeConsommation", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("role");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("role_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 134
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Role:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 134,  261 => 130,  253 => 125,  243 => 118,  236 => 114,  229 => 110,  222 => 106,  215 => 102,  208 => 98,  201 => 94,  194 => 90,  187 => 86,  180 => 82,  173 => 78,  166 => 74,  159 => 70,  152 => 66,  145 => 62,  138 => 58,  131 => 54,  124 => 50,  117 => 46,  110 => 42,  103 => 38,  96 => 34,  89 => 30,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
