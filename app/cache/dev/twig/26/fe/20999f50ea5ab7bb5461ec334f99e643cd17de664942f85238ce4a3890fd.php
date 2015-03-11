<?php

/* FdrAdminBundle:FeuilleDeRoute:show.html.twig */
class __TwigTemplate_26fe20999f50ea5ab7bb5461ec334f99e643cd17de664942f85238ce4a3890fd extends Twig_Template
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
        echo "Feuille de route";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>FeuilleDeRoute</h1>

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
                <th>Dategeneree</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateGeneree", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datedebutmission</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebutMission", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datefinmission</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFinMission", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremanutention</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremanutentionchauf1</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutentionChauf1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremanutentionchauf2</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutentionChauf2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nommanexterne1</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nommanexterne2</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compteurreel</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurReel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compteurfinal</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurFinal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Etat</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etat", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcdiffkm</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcDiffKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calckmparcourus</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcKmParcourus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbrepas</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbRepas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbpetitdej</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbPetitDej", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbdecoucher</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbDecoucher", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcquantite</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcQuantite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcmontantcarburant</th>
                <td>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantCarburant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcmontantpeage</th>
                <td>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantPeage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbjours</th>
                <td>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbJours", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Primeremorque</th>
                <td>";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "primeRemorque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentsaisie</th>
                <td>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentSaisie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Operationnel</th>
                <td>";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "operationnel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surveillant</th>
                <td>";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "surveillant", array()), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("feuillederoute");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 127,  248 => 123,  240 => 118,  229 => 110,  222 => 106,  215 => 102,  208 => 98,  201 => 94,  194 => 90,  187 => 86,  180 => 82,  173 => 78,  166 => 74,  159 => 70,  152 => 66,  145 => 62,  138 => 58,  131 => 54,  124 => 50,  117 => 46,  110 => 42,  103 => 38,  96 => 34,  89 => 30,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
