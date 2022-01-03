window.onload = function() {

    $("#bienvenue").delay(1300).slideUp();

    // -------------------------------------------------------------------------

    $("#bouton").on('click', function() {
        $("#menu_deroulant").slideToggle("fast").toggleClass("cacher_menu_deroulant");
    })

    $("#boutonMenuGauche").on('click', function() {
        $("#iconeMenuGauche").toggleClass("blanc");
        $("#menuGauche").animate({ width: 'toggle' }, 200).toggleClass("cacherMenuGauche");
    })

    $("#bouton_utilisateur2").on('click', function() {
        $("#menu_utilisateur").slideToggle("fast").toggleClass("cacher_menu_utilisateur");
    })

    $("#bouton_langues").on('click', function() {
        $("#liste_langues").slideToggle("fast").toggleClass("cacher_liste_langues");
    })

    $("#bouton_utilisateur").on('click', function() {
        $("#liste_connexion").slideToggle("fast").toggleClass("cacher_liste_langues");
    })

    $("#bouton_à_propos").on('click', function() {
        $("#liste_à_propos").slideToggle("fast").toggleClass("cacher_liste_langues");
    })
    $("#bouton_utilisateur").on('click', function() {
        $("#liste_rechercher").slideToggle("fast").toggleClass("cacher_liste_rechercher");
    })

}