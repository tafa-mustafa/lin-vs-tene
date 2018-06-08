<?php

/* @biblio/admin/add.html.twig */
class __TwigTemplate_a84aeee13d9f07da095a56779e95f7b97a5e6dc7e923f38167b3fa9d18bb17aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@biblio/admin.html.twig", "@biblio/admin/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@biblio/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/admin/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/admin/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br/><br/><br/><br/><br/>
    
    <div class=\"container\" >
        <h1 style=\"border:2px solid green;text-align:center; width:100%;\">INSCRIPTION / RE-INSCRIPTION ETUDIANT</h1>
           
        <div class=\"container\">
            <ul class=\"nav nav-tabs\" style=\"border:2px solid #000;width:100%;margin:auto; color:green; \">
                <li class=\"active onglet\"><a data-toggle=\"tab\" id=\"m6\" href=\"#menu6\">Autres informations</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"ho\" href=\"#home\">Parents</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m1\" href=\"#menu1\">Tuteur / Personne à contacter</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m2\" href=\"#menu2\">Diplôme obtenu</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m3\" href=\"#menu3\">Filière / classes</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m4\" href=\"#menu4\">Infos professionnelles</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m5\" href=\"#menu5\">Infos inscription</a></li>
            </ul>
            <br>
            <div class=\"tab-content\">
                <div id=\"menu6\" class=\"tab-pane fade in active\">
        
                </div>
                <div id=\"home\" class=\"tab-pane fade \">
                    
                </div>
                <div id=\"menu1\" class=\"tab-pane fade\">
                   
                </div>
                <div id=\"menu2\" class=\"tab-pane fade\">
                    
                </div>
                <div id=\"menu3\" class=\"tab-pane fade\">
                        
                </div>
                <div id=\"menu4\" class=\"tab-pane fade\">
                
                </div>
                <div id=\"menu5\" class=\"tab-pane fade\">
                

                </div>
                      
                <div style=\"clear:both;\"></div>
            </div>

        </div>
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@biblio/admin/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@biblio/admin.html.twig' %}
{% block body %}
    <br/><br/><br/><br/><br/>
    
    <div class=\"container\" >
        <h1 style=\"border:2px solid green;text-align:center; width:100%;\">INSCRIPTION / RE-INSCRIPTION ETUDIANT</h1>
           
        <div class=\"container\">
            <ul class=\"nav nav-tabs\" style=\"border:2px solid #000;width:100%;margin:auto; color:green; \">
                <li class=\"active onglet\"><a data-toggle=\"tab\" id=\"m6\" href=\"#menu6\">Autres informations</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"ho\" href=\"#home\">Parents</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m1\" href=\"#menu1\">Tuteur / Personne à contacter</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m2\" href=\"#menu2\">Diplôme obtenu</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m3\" href=\"#menu3\">Filière / classes</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m4\" href=\"#menu4\">Infos professionnelles</a></li>
                <li class=\"onglet\"><a data-toggle=\"tab\" id=\"m5\" href=\"#menu5\">Infos inscription</a></li>
            </ul>
            <br>
            <div class=\"tab-content\">
                <div id=\"menu6\" class=\"tab-pane fade in active\">
        
                </div>
                <div id=\"home\" class=\"tab-pane fade \">
                    
                </div>
                <div id=\"menu1\" class=\"tab-pane fade\">
                   
                </div>
                <div id=\"menu2\" class=\"tab-pane fade\">
                    
                </div>
                <div id=\"menu3\" class=\"tab-pane fade\">
                        
                </div>
                <div id=\"menu4\" class=\"tab-pane fade\">
                
                </div>
                <div id=\"menu5\" class=\"tab-pane fade\">
                

                </div>
                      
                <div style=\"clear:both;\"></div>
            </div>

        </div>
    </div>    
{% endblock%}", "@biblio/admin/add.html.twig", "/var/www/html/bibliotheque/src/biblioBundle/Resources/views/admin/add.html.twig");
    }
}
