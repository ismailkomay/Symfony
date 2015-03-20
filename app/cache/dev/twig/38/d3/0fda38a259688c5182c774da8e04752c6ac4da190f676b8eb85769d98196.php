<?php

/* FdrAdminBundle:FeuilleDeRoute:client.html.twig */
class __TwigTemplate_38d30fda38a259688c5182c774da8e04752c6ac4da190f676b8eb85769d98196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")));
        foreach ($context['_seq'] as $context["cle"] => $context["valeur"]) {
            // line 2
            echo "
";
            // line 3
            echo twig_escape_filter($this->env, $context["cle"], "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, $context["valeur"], "html", null, true);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cle'], $context['valeur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  26 => 3,  23 => 2,  19 => 1,);
    }
}
