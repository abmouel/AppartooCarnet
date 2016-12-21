<?php

/* MyAppCarnetBundle:Contact:lister.html.twig */
class __TwigTemplate_f5b3b388f5a07a7841b0986ab8781e6c93499da8baf85bce5a30393896e380a6 extends Twig_Template
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
        echo "<html>
    <body>    
<h1>Liste des contacts</h1>

<table>
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contact"]) ? $context["contact"] : $this->getContext($context, "contact")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 7
            echo "\t<tr>
\t\t<td>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "nom"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "prenom"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "telephone"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "email"), "html", null, true);
            echo "</td>
        <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "siteweb"), "html", null, true);
            echo "</td>
\t\t<td><a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_modifier", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Modifier</a></td>
\t\t<td><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contact_supprimer", array("id" => $this->getAttribute((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "id"))), "html", null, true);
            echo "\">Supprimer</a></td>
\t</tr>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "\t<tr><td>Aucun contact n'a été trouvé.</td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</table>

<p><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("myapp_contact_ajouter");
        echo "\">Ajouter un nouveau contact!</a><p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MyAppCarnetBundle:Contact:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  73 => 19,  66 => 17,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  34 => 8,  31 => 7,  26 => 6,  19 => 1,);
    }
}
