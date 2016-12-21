<?php

/* MyAppCarnetBundle:Contact:editer.html.twig */
class __TwigTemplate_9ced5c8fbdfe9a4a8c76e79c03e108fe6323a9108d2bce02c0233bb34972fe3d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <body>
<h1>Ajouter un contact</h1>

";
        // line 6
        if ((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) {
            // line 7
            echo "<p>";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo "</p>
";
        }
        // line 9
        echo "
<form action=\"\" method=\"post\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" />
</form>
<p><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("myapp_contact_lister");
        echo "\">Retour à la liste des contacts</a></p>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "MyAppCarnetBundle:Contact:editer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 14,  41 => 11,  37 => 10,  34 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }
}
