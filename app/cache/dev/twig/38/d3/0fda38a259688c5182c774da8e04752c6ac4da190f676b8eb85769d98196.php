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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
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
        return array (  19 => 1,);
    }
}
