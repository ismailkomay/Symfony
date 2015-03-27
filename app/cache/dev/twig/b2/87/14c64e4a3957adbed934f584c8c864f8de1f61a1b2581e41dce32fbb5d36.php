<?php

/* FdrAdminBundle:FeuilleDeRoute:new.html.twig */
class __TwigTemplate_b28714c64e4a3957adbed934f584c8c864f8de1f61a1b2581e41dce32fbb5d36 extends Twig_Template
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
        echo "Feuille de route|New";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>FeuilleDeRoute creation</h1>
    
";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("onsubmit" => "return checkForm();checkMan();")));
        echo "
   <div class=\"form-group\">
            ";
        // line 9
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'label', array("label" => "Nombre de manutention"));
        echo "

            ";
        // line 12
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
              ";
        // line 16
        echo "              ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutention", array()), 'widget');
        echo "
            </div>
          </div> <div class=\"form-group\">
            ";
        // line 20
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf1", array()), 'label', array("label" => "Nombre de manutention pour le chauffeur 1"));
        echo "

            ";
        // line 23
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf1", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
              ";
        // line 27
        echo "              ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf1", array()), 'widget');
        echo "
            </div>
          </div>
    
          </div> <div class=\"form-group\">
            ";
        // line 33
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf2", array()), 'label', array("label" => "Nombre de manution pour le chauffeur 2"));
        echo "

            ";
        // line 36
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf2", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
              ";
        // line 40
        echo "              ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreManutentionChauf2", array()), 'widget');
        echo "
            </div>
          </div>
          <label name=\"diffMan\"> Erreur dans le nombre de manutention</label>
          
    ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
   
 ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("feuillederoute_clientramassage"));
        echo "
        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("feuillederoute");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
          <script type=\"text/javascript\"> 
  
 window.onload = function()
  {
      \$('#fdr_adminbundle_feuillederoute_clientRamassage').hide();
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "FdrAdminBundle:FeuilleDeRoute:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 50,  124 => 47,  119 => 45,  110 => 40,  103 => 36,  97 => 33,  88 => 27,  81 => 23,  75 => 20,  68 => 16,  61 => 12,  55 => 9,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
