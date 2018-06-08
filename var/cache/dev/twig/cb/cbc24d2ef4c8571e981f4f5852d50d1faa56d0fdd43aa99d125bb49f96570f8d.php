<?php

/* @biblio/Front/contacts.html.twig */
class __TwigTemplate_b0afb07f6079055475e38e0d40e03e89ab9c38022420755ceecf23cad6454305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@biblio/home.html.twig", "@biblio/Front/contacts.html.twig", 1);
        $this->blocks = array(
            'slider' => array($this, 'block_slider'),
            'global' => array($this, 'block_global'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@biblio/home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/Front/contacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@biblio/Front/contacts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_slider($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slider"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_global($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global"));

        // line 7
        echo "

<div class=\"global indent\">
    <!--content-->
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 contactBox\">
                <figure class=\"map\">
                    <iframe src=\"\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/I.jpg"), "html", null, true);
        echo "\" alt=\"\"></iframe>
                </figure>
            </article>
        </div>
    </div>
    <section class=\"formBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-4\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">entrer en contact</font></font></h3>
                    <div class=\"info\">
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 1:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">8901 Marmora Road, Glasgow, D04 89GR.</font></font></p>
                        <h4 class=\"tel\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphones:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 800 559 6580 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 959 603 6035 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 504 889 9898</font></font></p>
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 2:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">9867 Mill Road, Cambridge, MG09 99HT.</font></font></p>
                    </div>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-8\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact</font></font></h3>
                    <form id=\"contact-form\">
                        <div class=\"success-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact soumis.</font></font></div>
                        <div class=\"holder\">
                            <div class=\"form-div-1 clearfix\">
                                <label class=\"name\">
                                    <input type=\"text\" data-constraints=\"@Required @JustLetters\" id=\"regula-generated-55879\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un nom valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prénom:</font></font></span></label>
                            </div>
                            <div class=\"form-div-2 clearfix\">
                                <label class=\"email\">
                                    <input type=\"text\" data-constraints=\"@Required @Email\" id=\"regula-generated-925288\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ceci n'est pas un email valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Email:</font></font></span></label>
                            </div>
                            <div class=\"form-div-3 clearfix\">
                                <label class=\"phone notRequired\">
                                    <input type=\"text\" data-constraints=\"@JustNumbers\" id=\"regula-generated-726327\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un téléphone valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphone:</font></font></span></label>
                            </div>
                        </div>
                        <div class=\"form-div-4 clearfix\">
                            <label class=\"message\">
                                <textarea data-constraints=\"@Required @Length(min=20,max=999999)\" id=\"regula-generated-842245\"></textarea>
                                <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Le message est trop court.</font></font></span>
                                <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 740px; height: 201px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Message:</font></font></span></label>
                        </div>
                        <div class=\"btns\">
                            <a href=\"https://livedemo00.template-help.com/wt_48292/index-4.html#\" data-type=\"submit\" class=\"btn-default btn1\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">soumettre</font></font></a>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </section>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@biblio/Front/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  67 => 7,  58 => 6,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@biblio/home.html.twig' %}


{% block slider %}
{% endblock %}
{% block global %}


<div class=\"global indent\">
    <!--content-->
    <div class=\"container\">
        <div class=\"row\">
            <article class=\"col-lg-12 col-md-12 col-sm-12 contactBox\">
                <figure class=\"map\">
                    <iframe src=\"\"><img src=\"{{ asset ('img/I.jpg') }}\" alt=\"\"></iframe>
                </figure>
            </article>
        </div>
    </div>
    <section class=\"formBox\">
        <div class=\"container\">
            <div class=\"row\">
                <article class=\"col-lg-4 col-md-4 col-sm-4\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">entrer en contact</font></font></h3>
                    <div class=\"info\">
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 1:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">8901 Marmora Road, Glasgow, D04 89GR.</font></font></p>
                        <h4 class=\"tel\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphones:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 800 559 6580 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 959 603 6035 </font></font><br><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">+1 504 889 9898</font></font></p>
                        <h4><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Adresse 2:</font></font></h4>
                        <p><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">9867 Mill Road, Cambridge, MG09 99HT.</font></font></p>
                    </div>
                </article>
                <article class=\"col-lg-8 col-md-8 col-sm-8\">
                    <h3><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact</font></font></h3>
                    <form id=\"contact-form\">
                        <div class=\"success-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Formulaire de contact soumis.</font></font></div>
                        <div class=\"holder\">
                            <div class=\"form-div-1 clearfix\">
                                <label class=\"name\">
                                    <input type=\"text\" data-constraints=\"@Required @JustLetters\" id=\"regula-generated-55879\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un nom valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Prénom:</font></font></span></label>
                            </div>
                            <div class=\"form-div-2 clearfix\">
                                <label class=\"email\">
                                    <input type=\"text\" data-constraints=\"@Required @Email\" id=\"regula-generated-925288\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ceci n'est pas un email valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Email:</font></font></span></label>
                            </div>
                            <div class=\"form-div-3 clearfix\">
                                <label class=\"phone notRequired\">
                                    <input type=\"text\" data-constraints=\"@JustNumbers\" id=\"regula-generated-726327\">
                                    <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                    <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Ce n'est pas un téléphone valide.</font></font></span>
                                    <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 212px; height: 41px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Téléphone:</font></font></span></label>
                            </div>
                        </div>
                        <div class=\"form-div-4 clearfix\">
                            <label class=\"message\">
                                <textarea data-constraints=\"@Required @Length(min=20,max=999999)\" id=\"regula-generated-842245\"></textarea>
                                <span class=\"empty-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">*Ce champ est requis. </font></font></span>
                                <span class=\"error-message\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">* Le message est trop court.</font></font></span>
                                <span class=\"_placeholder\" style=\"left: 0px; top: 0px; width: 740px; height: 201px;\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">Message:</font></font></span></label>
                        </div>
                        <div class=\"btns\">
                            <a href=\"https://livedemo00.template-help.com/wt_48292/index-4.html#\" data-type=\"submit\" class=\"btn-default btn1\"><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">soumettre</font></font></a>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </section>
</div>
{% endblock %}", "@biblio/Front/contacts.html.twig", "/var/www/html/bibliotheque/src/biblioBundle/Resources/views/Front/contacts.html.twig");
    }
}
