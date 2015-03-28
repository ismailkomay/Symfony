<?php

/* FdrAdminBundle:Client:index.html.twig */
class __TwigTemplate_fd51572e39f3cc84c3d1216f9a6e89a0b01a0e6bb854d025751b05c118449a1f extends Twig_Template
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
        echo "Client|Accueil";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Client list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Adresse</th>
                <th>Cin</th>
                <th>Email</th>
                <th>Fax</th>
                <th>Nomentreprise</th>
                <th>Encompte</th>
                <th>Clientaffret</th>
                <th>Clientramass</th>
                <th>Numcompte</th>
                <th>Secteur(s)</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 27
            echo "            <tr>
                <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "fax", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomentreprise", array()), "html", null, true);
            echo "</td>
                <td>
\t\t\t\t";
            // line 38
            if ($this->getAttribute($context["entity"], "encompte", array())) {
                // line 39
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 41
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 43
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 45
            if ($this->getAttribute($context["entity"], "clientaffret", array())) {
                // line 46
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 48
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 50
            echo "\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t";
            // line 52
            if ($this->getAttribute($context["entity"], "clientramass", array())) {
                // line 53
                echo "                <input type=\"checkbox\" disabled readonly checked />
                ";
            } else {
                // line 55
                echo "                <input type=\"checkbox\" disabled readonly />
                ";
            }
            // line 57
            echo "\t\t\t\t</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numcompte", array()), "html", null, true);
            echo "</td>
                <td>
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonAfficher\" title=\"Afficher\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/apercu.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;
                        
                        <div class=\"col-md-2\">
                         <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("client_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                         <button title=\"Afficher\" type=\"submit\">
                         <img id=\"inputButtonModifier\" title=\"Modifier\" src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fdradmin/images/modifier.png"), "html", null, true);
            echo "\" />
                         </button>
                         </a> 
                        </div>
                        &nbsp;&nbsp;

                        <div class=\"col-md-2\">
                        
                        ";
            // line 80
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
        // line 86
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("client_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:Client:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 91,  206 => 86,  194 => 80,  183 => 72,  178 => 70,  168 => 63,  163 => 61,  157 => 58,  154 => 57,  150 => 55,  146 => 53,  144 => 52,  140 => 50,  136 => 48,  132 => 46,  130 => 45,  126 => 43,  122 => 41,  118 => 39,  116 => 38,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  77 => 28,  74 => 27,  70 => 26,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
