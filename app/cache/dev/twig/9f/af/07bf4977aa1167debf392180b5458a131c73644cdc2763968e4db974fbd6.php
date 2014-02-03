<?php

/* DshtutorialBundle:Daz:daz.html.twig */
class __TwigTemplate_9faf07bf4977aa1167debf392180b5458a131c73644cdc2763968e4db974fbd6 extends Twig_Template
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
        echo "Goodbye ";
        echo twig_escape_filter($this->env, (isset($context["dazvariable"]) ? $context["dazvariable"] : $this->getContext($context, "dazvariable")), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "DshtutorialBundle:Daz:daz.html.twig";
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
