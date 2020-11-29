<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* monfront/index.html.twig */
class __TwigTemplate_98425634971546b8e86bf6a1f76eb44ea50239b3d262600e4ca56d5b3a7694d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "monfront/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "monfront/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "monfront/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bonjour!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Bonjour ✅</h1>
\t<h1>La saisie des dates lors de la modification et la création est au format 'Y-m-d' </h1>
\t<span id=\"message_popup\"></span>
\t<div id=\"zone_centrale\">
\t</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "<script>
\t\t\$.ajax({
\t\t\turl : './api/evenement',
\t\t\ttype : 'GET', 
\t\t\tdataType : 'json',
\t\t\tsuccess : function(response, statut){

\t\t\t\tvar html='<table id=\"even\"><tr><th>date_debut</th><th>date_fin</th><th>nombre_inscrits</th><th>id</th><th colspan=\"2\">#</th></tr>';

\t\t\t\tfor(var i=0;i<response.length;i++){
\t\t\t\t\thtml=html+'<tr>';
\t\t\t\t\t\thtml=html+'<td><input class=\"date_debut\" value=\"'+response[i].dateDebut+'\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"date_fin\" value=\"'+response[i].dateFin+'\"></input>';
\t\t\t\t\t\thtml=html+'</td><td><input class=\"nombre_inscrits\" value=\"'+response[i].nombre_inscrits+'\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"id\" value=\"'+response[i].id+'\" disabled></input></td>';
\t\t\t\t\t\thtml=html+'<td><span colspan=\"2\" class=\"modifier\">[modifier]</span><span class=\"supprimer\">[supprimer]</span><span class=\"inscrire\">[inscrire]</span></td>';
\t\t\t\t\t\thtml=html+'</tr>';
\t\t\t\t\t\t
\t\t\t\t\thtml=html+'<tr id=\"id_'+response[i].id+'\" style=\"display: none;\">';
\t\t\t\t\t\thtml=html+'<td><input class=\"nom\" placeholder=\"nom\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"prenom\" placeholder=\"prenom\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"email\" placeholder=\"email\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"num_tel\" placeholder=\"num_tel\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"id_evenement\" value=\"'+response[i].id+'\" disabled></input></td>';
\t\t\t\t\t\thtml=html+'<td><span class=\"soumettre\">[soumettre]</span><span class=\"quitter\">[quitter]</span></td>';
\t\t\t\t\thtml=html+'</tr>';
\t\t\t\t}
\t\t\t\thtml=html+'<tr>'
\t\t\t\t\thtml=html+'<td><input class=\"date_debut\" ></input></td>';
\t\t\t\t\thtml=html+'<td><input class=\"date_fin \" ></input>';
\t\t\t\t\thtml=html+'</td><td><input class=\"nombre_inscrits\" ></input></td>';
\t\t\t\t\thtml=html+'<td colspan=\"3\"><span class=\"creer\" id=\"creer\">[creer]</span></td>';
\t\t\t\thtml=html+'</tr>';

\t\t\t\thtml=html+'</table>';
\t\t\t\t\$(\"#zone_centrale\").html(html);

\t\t\t\t\$(\"#creer\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'POST', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$(\".modifier\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);
\t\t\t\t\tvar id= parseInt(ligne.find(\".id\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits,id:id};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'PUT', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t\tconsole.log(\"take your shot\");
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$(\".supprimer\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);
\t\t\t\t\tvar id= parseInt(ligne.find(\".id\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits,id:id};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'DELETE', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});


\t\t\t\t\$(\".inscrire\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar id= ligne.find(\".id\")[0].value;
\t\t\t\t\t\$(\"#id_\"+id).show();
\t\t\t\t});

\t\t\t\t\$(\".quitter\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar id= ligne.find(\".id_evenement\")[0].value;
\t\t\t\t\t\$(\"#id_\"+id).hide();
\t\t\t\t});


\t\t\t\t\$(\".soumettre\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar nom=ligne.find(\".nom\")[0].value;
\t\t\t\t\tvar prenom=ligne.find(\".prenom\")[0].value;
\t\t\t\t\tvar email=ligne.find(\".email\")[0].value;
\t\t\t\t\tvar num_tel=ligne.find(\".num_tel\")[0].value;
\t\t\t\t\tvar id_evenement= parseInt(ligne.find(\".id_evenement\")[0].value);

\t\t\t\t\tvar inscri = {nom:nom,prenom:prenom,email:email,num_tel:num_tel,id_evenement:id_evenement};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/inscription',
\t\t\t\t\t\ttype : 'POST', 
\t\t\t\t\t\tdata : JSON.stringify(inscri),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat.responseText+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t},
\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\$(\"#zone_message\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t}
\t\t});

\t\t
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "monfront/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 21,  112 => 20,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Bonjour ✅</h1>
\t<h1>La saisie des dates lors de la modification et la création est au format 'Y-m-d' </h1>
\t<span id=\"message_popup\"></span>
\t<div id=\"zone_centrale\">
\t</div>
</div>

{% endblock %}
{% block javascripts %}
<script>
\t\t\$.ajax({
\t\t\turl : './api/evenement',
\t\t\ttype : 'GET', 
\t\t\tdataType : 'json',
\t\t\tsuccess : function(response, statut){

\t\t\t\tvar html='<table id=\"even\"><tr><th>date_debut</th><th>date_fin</th><th>nombre_inscrits</th><th>id</th><th colspan=\"2\">#</th></tr>';

\t\t\t\tfor(var i=0;i<response.length;i++){
\t\t\t\t\thtml=html+'<tr>';
\t\t\t\t\t\thtml=html+'<td><input class=\"date_debut\" value=\"'+response[i].dateDebut+'\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"date_fin\" value=\"'+response[i].dateFin+'\"></input>';
\t\t\t\t\t\thtml=html+'</td><td><input class=\"nombre_inscrits\" value=\"'+response[i].nombre_inscrits+'\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"id\" value=\"'+response[i].id+'\" disabled></input></td>';
\t\t\t\t\t\thtml=html+'<td><span colspan=\"2\" class=\"modifier\">[modifier]</span><span class=\"supprimer\">[supprimer]</span><span class=\"inscrire\">[inscrire]</span></td>';
\t\t\t\t\t\thtml=html+'</tr>';
\t\t\t\t\t\t
\t\t\t\t\thtml=html+'<tr id=\"id_'+response[i].id+'\" style=\"display: none;\">';
\t\t\t\t\t\thtml=html+'<td><input class=\"nom\" placeholder=\"nom\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"prenom\" placeholder=\"prenom\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"email\" placeholder=\"email\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"num_tel\" placeholder=\"num_tel\"></input></td>';
\t\t\t\t\t\thtml=html+'<td><input class=\"id_evenement\" value=\"'+response[i].id+'\" disabled></input></td>';
\t\t\t\t\t\thtml=html+'<td><span class=\"soumettre\">[soumettre]</span><span class=\"quitter\">[quitter]</span></td>';
\t\t\t\t\thtml=html+'</tr>';
\t\t\t\t}
\t\t\t\thtml=html+'<tr>'
\t\t\t\t\thtml=html+'<td><input class=\"date_debut\" ></input></td>';
\t\t\t\t\thtml=html+'<td><input class=\"date_fin \" ></input>';
\t\t\t\t\thtml=html+'</td><td><input class=\"nombre_inscrits\" ></input></td>';
\t\t\t\t\thtml=html+'<td colspan=\"3\"><span class=\"creer\" id=\"creer\">[creer]</span></td>';
\t\t\t\thtml=html+'</tr>';

\t\t\t\thtml=html+'</table>';
\t\t\t\t\$(\"#zone_centrale\").html(html);

\t\t\t\t\$(\"#creer\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'POST', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$(\".modifier\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);
\t\t\t\t\tvar id= parseInt(ligne.find(\".id\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits,id:id};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'PUT', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t\tconsole.log(\"take your shot\");
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$(\".supprimer\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar date_debut=ligne.find(\".date_debut\")[0].value;
\t\t\t\t\tvar date_fin=ligne.find(\".date_fin\")[0].value;
\t\t\t\t\tvar nombre_inscrits= parseInt(ligne.find(\".nombre_inscrits\")[0].value);
\t\t\t\t\tvar id= parseInt(ligne.find(\".id\")[0].value);

\t\t\t\t\tvar even = {date_debut:date_debut,date_fin:date_fin,nombre_inscrits:nombre_inscrits,id:id};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/evenement',
\t\t\t\t\t\ttype : 'DELETE', 
\t\t\t\t\t\tdata : JSON.stringify(even),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});


\t\t\t\t\$(\".inscrire\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar id= ligne.find(\".id\")[0].value;
\t\t\t\t\t\$(\"#id_\"+id).show();
\t\t\t\t});

\t\t\t\t\$(\".quitter\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar id= ligne.find(\".id_evenement\")[0].value;
\t\t\t\t\t\$(\"#id_\"+id).hide();
\t\t\t\t});


\t\t\t\t\$(\".soumettre\").click(function(){
\t\t\t\t\tvar ligne=\$(this).parent().parent();
\t\t\t\t\tvar nom=ligne.find(\".nom\")[0].value;
\t\t\t\t\tvar prenom=ligne.find(\".prenom\")[0].value;
\t\t\t\t\tvar email=ligne.find(\".email\")[0].value;
\t\t\t\t\tvar num_tel=ligne.find(\".num_tel\")[0].value;
\t\t\t\t\tvar id_evenement= parseInt(ligne.find(\".id_evenement\")[0].value);

\t\t\t\t\tvar inscri = {nom:nom,prenom:prenom,email:email,num_tel:num_tel,id_evenement:id_evenement};

\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl : './api/inscription',
\t\t\t\t\t\ttype : 'POST', 
\t\t\t\t\t\tdata : JSON.stringify(inscri),
\t\t\t\t\t\tdataType : 'json',
\t\t\t\t\t\tsuccess : function(response, statut){
\t\t\t\t\t\t\tdocument.location.reload();
\t\t\t\t\t\t},
\t\t\t\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\t\t\t\$(\"#message_popup\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat.responseText+'</div>');
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t},
\t\t\terror : function(resultat, statut, erreur){
\t\t\t\t\$(\"#zone_message\").html('<div class=\"alert alert-primary\" role=\"alert\">'+resultat+'</div>');
\t\t\t}
\t\t});

\t\t
</script>
{% endblock %}
", "monfront/index.html.twig", "C:\\Users\\oath\\reservation\\templates\\monfront\\index.html.twig");
    }
}
