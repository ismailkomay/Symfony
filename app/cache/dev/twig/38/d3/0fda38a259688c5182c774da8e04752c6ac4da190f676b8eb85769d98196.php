<?php

/* FdrAdminBundle:FeuilleDeRoute:client.html.twig */
class __TwigTemplate_38d30fda38a259688c5182c774da8e04752c6ac4da190f676b8eb85769d98196 extends Twig_Template
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
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<select id=\"fdr_adminbundle_feuillederoute_clientRamassage\" name=\"secteur\" size=7  placeholder=\"Choisir les clients..\" multiple>
          ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 6
            echo "
          <option value=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["client"], "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo " 
          </select>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  55 => 7,  52 => 6,  48 => 5,  45 => 4,  42 => 3,  37 => 2,  11 => 1,);
    }
}
