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
        echo "Feuille de route|Show";
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
                <th>Véhicule</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vehicule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Secteurs</th>
                <td>
                    <ul>
                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "secteurs", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                        <li> ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <th>Filiale</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "filiale", array()), "html", null, true);
        echo "</td>
            </tr>
             <tr>
                <th>Chauffeurs</th>
                 <td>
                       ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chauffeur1", array()), "html", null, true);
        echo "
                 </td>
                <td>
                        ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "chauffeur2", array()), "html", null, true);
        echo "
                </td>
            </tr>
             <tr>
                <th>Manutentionnaires</th>
                <td>
                    <ul>
                    ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "manutentionnaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "                        <li> ";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <th>Nombremanutention</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutention", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremanutentionchauf1</th>
                <td>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutentionChauf1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombremanutentionchauf2</th>
                <td>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombreManutentionChauf2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nommanexterne1</th>
                <td>";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nommanexterne2</th>
                <td>";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomManExterne2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compteurreel</th>
                <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurReel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Compteurfinal</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "compteurFinal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcdiffkm</th>
                <td>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcDiffKm", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calckmparcourus</th>
                <td>";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcKmParcourus", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbrepas</th>
                <td>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbRepas", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbpetitdej</th>
                <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbPetitDej", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbdecoucher</th>
                <td>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbDecoucher", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcquantite</th>
                <td>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcQuantite", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcmontantcarburant</th>
                <td>";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantCarburant", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcmontantpeage</th>
                <td>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcMontantPeage", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Calcnbjours</th>
                <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calcNbJours", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Primeremorque</th>
                <td>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "primeRemorque", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Remarques</th>
                <td>";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "remarques", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type de prestation</th>
                <td>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "typeprestation", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Agentsaisie</th>
                <td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agentSaisie", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Operationnel</th>
                <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "operationnel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Surveillant</th>
                <td>";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "surveillant", array()), "html", null, true);
        echo "</td>
            </tr>
           
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("feuillederoute");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("feuillederoute_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 164
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
        return array (  328 => 164,  321 => 160,  313 => 155,  302 => 147,  295 => 143,  288 => 139,  281 => 135,  274 => 131,  267 => 127,  260 => 123,  253 => 119,  246 => 115,  239 => 111,  232 => 107,  225 => 103,  218 => 99,  211 => 95,  204 => 91,  197 => 87,  190 => 83,  183 => 79,  176 => 75,  169 => 71,  162 => 67,  155 => 63,  148 => 58,  139 => 56,  135 => 55,  125 => 48,  119 => 45,  111 => 40,  104 => 35,  95 => 33,  91 => 32,  82 => 26,  75 => 22,  68 => 18,  61 => 14,  54 => 10,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
