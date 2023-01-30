@extends('layouts.auth')


@section('styles')
    <style>
        h2{
            font-family: "Montserrat", sans-serif;
            color: var(--primary);
            font-size: 30px;
            margin-top: 2rem;
        }

        p{
            font-size: 15px;
        }
    </style>
@endsection


@section('content')



<div class="container pt-5">

    <div id="content" class="inner flex">

        <div class="text-left">
            <a class="text-black" href="/"><i class="fa fa-home"></i>{{ __("Accueil") }}</a> / {{ __("Conditions générales d'utilisation et de vente") }}
        </div>

        <div class="flex" id="cols">
            <article id="left_col" class="txt">
                <h2>CONDITIONS GENERALES D'UTILISATION ET DE VENTE </h2>
                <p><span style="font-weight: 400;"><strong> CONDITIONS GENERALES D'UTILISATION ET DE VENTE </strong> chidoukhim
                        est une association loi 1901 en création</span></p>
                <h2>1. Conditions générales d'utilisation</h2>
                <p><span style="font-weight: 400;"> Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004
                    pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du
                    site : www.chidoukhim.com les informations suivantes :
                    </span></p>

                <h2>2. Conditions générales d'utilisation</h2>
                <p><span style="font-weight: 400;">Est désigné ci-après : Utilisateur, tout internaute se connectant et utilisant le site susnommé
                     : www.chidoukhim.com. Le site www.chidoukhim.com regroupe un ensemble de services, dans l'état, mis à la
                     disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant
                     envers les autres utilisateurs qu'envers le webmaster du site www.chidoukhim.com. L'équipe s'efforce de fournir sur
                     le site www.chidoukhim.com des informations les plus précises possibles (sous réserve de modifications apportées depuis
                     leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site,
                     qu'elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur
                     reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.
                 </span></p><h2>3. Accessibilité :</h2>
                        <p><span style="font-weight: 400;"> Le site www.chidoukhim.com est par principe accessible aux utilisateurs 24/24h, 7/7j,
                             sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d'impossibilité
                             d'accès au service, www.chidoukhim.com s'engage à faire son maximum afin de rétablir l'accès au service et
                             s'efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l'intervention. N'étant soumis
                             qu'à une obligation de moyens, www.chidoukhim.com ne saurait être tenu pour responsable de tout dommage, quelle
                             qu'en soit la nature, résultant d'une indisponibilité du service. Les équipements (ordinateur, logiciels, moyens de
                             télécommunications, etc.) permettant l'accès aux services sont à la charge exclusive du membre, de même que les frais
                             de télécommunications induits par leur utilisation. Le membre garantit que les données qu'il communique sont exactes et
                             conformes à la réalité. Il s'engage à informer shadchanite&amp;shadchan.com sans délai en cas de modification des données
                             qu'il a communiquées lors de son inscription et le cas échéant à procéder lui-même aux dites modifications.
                            </span></p>
                            <h2>4. Acceptation des termes et conditions :</h2>
                        <p><span style="font-weight: 400;"> L'utilisation du site www.chidoukhim.com implique l'acceptation pleine et entière
                            des conditions générales d'utilisation décrites ci-dessus. Celles-ci sont consultables par l'intermédiaire d'un lien hypertexte
                            placé sur toutes les pages du site www.chidoukhim.com . Il est ici rappelé que les développeurs du site www.chidoukhim.com
                            gardent trace de l'adresse mail, et de l'adresse IP de tout utilisateur. En conséquence, il doit être conscient qu'en cas d'injonction de
                            l'autorité judiciaire il peut être retrouvé et poursuivi. Par ailleurs, chaque inscrit doit certifier sur l'honneur qu'il est de confession
                            juive (un certificat de judéité pourrait lui être demandé à tout moment si besoin est) et dans le cas où; l'inscrit est divorcé, il doit
                            pouvoir fournir un justificatif de divorce religieux (Guet). Pour rappel : l'utilisation du site est strictement interdite aux personnes mariées.</span></p>

                            <h2>5. Modification des conditions :</h2>
                                <p><span style="font-weight: 400;">L'équipe de shadchanite&amp;shadchan se réserve le droit, à tout moment, de modifier, compléter, enlever ou ajouter,
                                    ce sans préavis, tout ou partie des présentes conditions d'utilisation du site www.chidoukhim.com, aussi les utilisateurs du site www.chidoukhim.com
                                    sont invités à les consulter de manière régulière, car elles s'imposent à eux sans aucune réserve. L'utilisateur est réputé les accepter sans réserve et s'y référer
                                    régulièrement pour prendre connaissance des modifications. Le site www.chidoukhim.com se réserve aussi le droit de céder, transférer, ce sans préavis, les droits
                                    et/ou obligations des présentes CGU et mentions légales. En continuant à utiliser les Services du site www.chidoukhim.com , l'utilisateur reconnaît accepter les
                                    modifications des conditions générales d'utilisation qui seraient intervenues.</span></p>


                        <h2>5. Modalités de paiements :</h2>
                        <p><span style="font-weight: 400;">Tout règlement effectué pour l’inscription ne peut donner lieu à aucun remboursement sous quelque forme que ce soit, ceci même si la candidature n'est pas validée par le conseiller.


                            Il est possible à tout moment d'interrompre l’inscription. Il suffit simplement au membre d'envoyer un email à ADRESSE MAIL, de contacter l'équipe par téléphone.
                            </span></p>

                            <h2>6. Limitation de responsabilité :</h2>
                                <p><span style="font-weight: 400;">Le site www.chidoukhim.com ne saurait être tenu responsable des erreurs typographiques ou inexactitudes apparaissant
                                    sur le service, ou de quelques dommages subis résultant de son utilisation. L'utilisateur reste responsable de son équipement et de son utilisation, de même
                                    il supporte seul les coûts directs ou indirects suite à sa connexion à Internet. Le site www.chidoukhim.com est programmé avec les technologies internet
                                    les plus courantes. Pour accéder à l'ensemble du site www.chidoukhim.com, l'utilisateur s'engage à utiliser un matériel récent, ne contenant pas de virus
                                    et avec les mises à jour faites de son navigateur. L'utilisateur dégage la responsabilité de www.chidoukhim.com pour tout préjudice qu'il pourrait subir
                                    ou faire subir, directement ou indirectement, du fait de l'utilisation des services proposés. Seule la responsabilité de l'utilisateur est engagée par l'utilisation
                                    du service proposé et celui-ci dégage expressément le site www.chidoukhim.com de toute responsabilité vis à vis de tiers. Tout contenu (texte, photos, dessins, etc..)
                                    émis par l'intermédiaire de l'espace membre ou tout autre espace interactif mis à la la disposition des utilisateurs et non conforme aux dispositions légales et réglementaires
                                    en vigueur et applicable en France, notamment atteintes aux droits de la personnalité de tiers ( diffamation, injures, atteinte à la vie privée, etc..), acte de concurrence déloyale,
                                    atteinte à l'ordre public et aux bonnes moeurs ( incitation à la haine raciale, négationnisme, révisionnisme, pornographique, etc..) sera, sans mise en demeure préalable, supprimé sur
                                     le champ. Dans une telle situation, le site www.chidoukhim.com se réserve la possibilité de mettre en cause la responsabilité civile et/ou pénale de l'utilisateur incriminé.
                        </span></p>
                        <h2>7. Propriété intellectuelle :</h2>
                        <p><span style="font-weight: 400;">shadchanite&amp;shadchan est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d'usage sur tous les éléments accessibles sur
                            le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels. etc.. Toute reproduction totale ou partielle du site www.chidoukhim.com, représentation,
                            modification, publication, adaptation totale ou partielle de l'un ou plusieurs de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, à défaut elle sera considérée comme
                            constitutive d'une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
                        </span></p>


                        <h2>8. Liens hypertextes et cookies : </h2>
                        <p><span style="font-weight: 400;">Le site www.chidoukhim.com peut être amené à contenir un certain nombre de liens hypertextes vers d'autres sites (partenaires, informations, etc..) mis en
                            place avec l'autorisation de l'équipe. Cependant, l'équipe n'a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quant
                            aux risques éventuels de contenus illicites. L'utilisateur est informé que lors de ses visites sur le site www.chidoukhim.com, un ou des cookies sont susceptibles de s'installer automatiquement
                            sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives
                            à la navigation de celui-ci sur le site. Le paramétrage du logiciel de navigation permet d'informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l'adresse suivante :
                            www.cnil.fr. L'utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l'installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l'impossibilité
                            d'accéder à certains services. Pour tout bloquage des cookies, tapez dans votre moteur de recherche : bloquage des cookies sous IE ou firefox et suivez les instructions en fonction de votre version.</span></p>

                            <h2>9. Protection des biens et des personnes et gestion des données personnelles : </h2>
                        <p><span style="font-weight: 400;">En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et
                            la Directive Européenne du 24 octobre 1995. Sur le site www.chidoukhim.com, l'équipe ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à
                            l'utilisateur que pour le besoin de certains services proposés par le site www.chidoukhim.com. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède
                            par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site www.chidoukhim.com l'obligation ou non de fournir ces informations. Conformément aux dispositions des articles 38 et suivants
                            de la loi 78-17 du 6 janvier 1978 relative à l'informatique, aux fichiers et aux libertés, tout utilisateur dispose d'un droit d'accès, de rectification, de suppression et d'opposition aux données personnelles
                            le concernant. Pour l'exercer, adressez votre demande à www.chidoukhim.com par email : contact@chidoukhim.com ou par écrit dûment signée, accompagnée d'une copie du titre d'identité avec signature
                            du titulaire de la pièce, en précisant l'adresse à laquelle la réponse doit être envoyée. Aucune information personnelle de l'utilisateur du site www.chidoukhim.com n'est publiée à l'insu de l'utilisateur,
                            échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site www.chidoukhim.com et de ses droits autorise l'équipe à transmettre les dites informations à
                            l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site www.chidoukhim.com. Le site www.chidoukhim.com
                            est déclaré à la CNIL sous le numéro www.chidoukhim.com. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la
                            protection juridique des bases de données.
</span></p>
                        <h2>10. Loi applicable et juridiction compétente : </h2>
                        <p><span style="font-weight: 400;">Les présentes Conditions Générales d'Utilisation et la relation de l'utilisateur avec le site www.chidoukhim.com en vertu de ces Conditions Générales d'Utilisation sont régies par le droit Français. L'utilisateur ainsi que www.chidoukhim.com acceptent de se soumettre à la compétence des tribunaux Rabbiniques Français ou des tribunaux civils Français en cas de litige résultant de ces conditions générales d'utilisation.
                            www.chidoukhim.com/ </span></p>

                        <!--<div class="clear"></div>
                <div class="rel_posts rp ct-3"> <span class="rp_head">Voir aussi</span>
                    <div class="clear"></div>
                    <div class="rel_item linked">
                        <div class="img"> <span
                                data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/iStock-454339781.jpg"
                                data-ratio="0.76" class="resimg teaser_img"
                                data-alt="Rencontres en toute confiance"></span><noscript><img
                                    src="https://www.disonsdemain.fr/p/imgs/287/287/70/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/iStock-454339781.jpg"
                                    alt="Rencontres en toute confiance" /></noscript> </div>
                        <div class="rp_teaser txt"> <a class="rp_hl"
                                href="https://www.disonsdemain.fr/p/conseils/rencontres-en-toute-confiance/">Rencontres
                                en toute confiance</a> </div>
                    </div>
                    <div class="rel_item linked">
                        <div class="img"> <span
                                data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/iStock-848588322.jpg"
                                data-ratio="0.76" class="resimg teaser_img"
                                data-alt="Amour et technologie"></span><noscript><img
                                    src="https://www.disonsdemain.fr/p/imgs/287/287/70/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/iStock-848588322.jpg"
                                    alt="Amour et technologie" /></noscript> </div>
                        <div class="rp_teaser txt"> <a class="rp_hl"
                                href="https://www.disonsdemain.fr/p/conseils/amour-et-technologie/">Amour et
                                technologie</a> </div>
                    </div>
                    <div class="rel_item linked">
                        <div class="img"> <span
                                data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/les-atouts-seduction-des-plus-de-50-ans.jpg"
                                data-ratio="0.76" class="resimg teaser_img"
                                data-alt="Comment séduire à plus de 50 ans ?"></span><noscript><img
                                    src="https://www.disonsdemain.fr/p/imgs/287/287/70/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTgvMTIv/les-atouts-seduction-des-plus-de-50-ans.jpg"
                                    alt="Comment séduire à plus de 50 ans ?" /></noscript> </div>
                        <div class="rp_teaser txt"> <a class="rp_hl"
                                href="https://www.disonsdemain.fr/p/conseils/comment-seduire-plus-50-ans/">Comment
                                séduire à plus de 50 ans ?</a> </div>
                    </div>
                </div>-->

                        <!--</article>
            <aside id="right_col">
                <section id="lara_sidebar_widget-5" class="widget widget_lara_sidebar_widget">
                    <div class="cta_lara"> <span data-mh="300"
                            data-src="L3dwLWNvbnRlbnQvdGhlbWVzL2V1cm9wZS0yMDIwL2Fzc2V0cy9pbWcv/cta_lara_sen.jpg"
                            data-ratio="0.6" class="resimg mr_img " data-alt=""></span>
                        <div class="lara">
                            <div class="img"> <img class="lazy"
                                    data-original="https://www.disonsdemain.fr/p/wp-content/themes/europe-2020/assets/img/lara_sen.png"
                                    alt="Lara" /> </div>
                            <div class="bubble">Bonjour, je suis la coach DisonsDemain. <strong>Que recherchez-vous
                                    ?</strong></div>
                        </div> <span class="go btn_round mtcmk" data-meetic-reg>Je recherche</span>
                    </div>
                </section>
                <section id="cats_sidebar-3" class="widget widget_cats_sidebar">
                    <div class="img"></div>
                </section>
                <section id="happyends_cta-3" class="widget widget_happyends_cta">
                    <div class="cta_happy_ends"> <span data-mh="290"
                            data-src="d3AtY29udGVudC90aGVtZXMvZXVyb3BlLTIwMjAvYXNzZXRzL2ltZy8=/successstories_senior.jpg"
                            data-ratio="0.7" class="resimg" data-alt="HappyEnds"></span><noscript><img
                                src="https://www.disonsdemain.fr/p/img/460/324/80/1/c/d3AtY29udGVudC90aGVtZXMvZXVyb3BlLTIwMjAvYXNzZXRzL2ltZy8=/successstories_senior.jpg"
                                alt="HappyEnds" /></noscript>
                        <div class="top"> <a href="https://www.disonsdemain.fr/p/temoignages/testi-couples/">&gt;
                                Voir tous les témoignages</a> </div>
                        <div class="btm">
                            <div class="icon_wrap"> Et si vous partagiez votre histoire ? </div> <a target="_blank"
                                rel="nofollow" href="http://mfb.li/9b2?d:media=Bl" class="go btn_round small">Je
                                raconte</a>
                        </div>
                        <div class="grad"></div>
                    </div>
                </section>
                <section id="posts_sidebar-3" class="widget widget_posts_sidebar"> <span class="hl">Articles
                        populaires</span>
                    <dl>
                        <dt class="accordion-title open">Application de rencontre 50+</dt>
                        <dd class="accordion-content initial-open"
                            data-img="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDYv/app-rencontre50ans-disonsdemain.png ">
                            <a
                                href="https://www.disonsdemain.fr/p/conseils/fonctionnalites-disonsdemain/application-de-rencontre-50-ans/"><noscript>
                                    <img src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDYv/app-rencontre50ans-disonsdemain.png"
                                        alt="Application de rencontre 50+" /></noscript>
                                <div class="img"><span
                                        data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDYv/app-rencontre50ans-disonsdemain.png"
                                        data-ratio="0.8" class="resimg mr_img initial-open"
                                        data-alt="Les rencontres amoureuses après 50 ans"></span><noscript><img
                                            src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDYv/app-rencontre50ans-disonsdemain.png"
                                            alt="Les rencontres amoureuses après 50 ans" /></noscript></div> <span
                                    class="more m1">Application de rencontre 50+</span>
                            </a> </dd>
                        <dt class="accordion-title ">Comment le confinement a changé les rencontres après 50 ans
                        </dt>
                        <dd class="accordion-content "
                            data-img="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/comment-le-confinement-a-change-les-rencontres-apres--ans.jpg ">
                            <a
                                href="https://www.disonsdemain.fr/p/conseils/comment-le-confinement-a-change-les-rencontres-apres-50-ans/"><noscript>
                                    <img src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/comment-le-confinement-a-change-les-rencontres-apres--ans.jpg"
                                        alt="Comment le confinement a changé les rencontres après 50 ans" /></noscript>
                                <div class="img"><span
                                        data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/comment-le-confinement-a-change-les-rencontres-apres--ans.jpg"
                                        data-ratio="0.8" class="resimg mr_img "
                                        data-alt="Les rencontres amoureuses après 50 ans"></span><noscript><img
                                            src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/comment-le-confinement-a-change-les-rencontres-apres--ans.jpg"
                                            alt="Les rencontres amoureuses après 50 ans" /></noscript></div> <span
                                    class="more m1">Comment le confinement a changé les rencontres après 50
                                    ans</span>
                            </a> </dd>
                        <dt class="accordion-title ">Partagez une conversation en vidéo</dt>
                        <dd class="accordion-content "
                            data-img="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/001-1.jpg "> <a
                                href="https://www.disonsdemain.fr/p/conseils/fonctionnalites-disonsdemain/partagez-une-conversation-en-video/"><noscript>
                                    <img src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/001-1.jpg"
                                        alt="Partagez une conversation en vidéo" /></noscript>
                                <div class="img"><span
                                        data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/001-1.jpg"
                                        data-ratio="0.8" class="resimg mr_img "
                                        data-alt="Les rencontres amoureuses après 50 ans"></span><noscript><img
                                            src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMjAvMDUv/001-1.jpg"
                                            alt="Les rencontres amoureuses après 50 ans" /></noscript></div> <span
                                    class="more m1">Partagez une conversation en vidéo</span>
                            </a> </dd>
                        <dt class="accordion-title ">Paris</dt>
                        <dd class="accordion-content "
                            data-img="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDYv/paris.jpg "> <a
                                href="https://www.disonsdemain.fr/p/france/ile-de-france/paris/"><noscript> <img
                                        src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDYv/paris.jpg"
                                        alt="Paris" /></noscript>
                                <div class="img"><span
                                        data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDYv/paris.jpg"
                                        data-ratio="0.8" class="resimg mr_img "
                                        data-alt="Les rencontres amoureuses après 50 ans"></span><noscript><img
                                            src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDYv/paris.jpg"
                                            alt="Les rencontres amoureuses après 50 ans" /></noscript></div> <span
                                    class="more m1">Paris</span>
                            </a> </dd>
                        <dt class="accordion-title ">Nice</dt>
                        <dd class="accordion-content "
                            data-img="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDUv/nice.jpg "> <a
                                href="https://www.disonsdemain.fr/p/france/paca/nice/"><noscript> <img
                                        src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDUv/nice.jpg"
                                        alt="Nice" /></noscript>
                                <div class="img"><span
                                        data-src="L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDUv/nice.jpg"
                                        data-ratio="0.8" class="resimg mr_img "
                                        data-alt="Les rencontres amoureuses après 50 ans"></span><noscript><img
                                            src="https://www.disonsdemain.fr/p/imgs/418/200/85/1/c/L3dwLWNvbnRlbnQvdXBsb2Fkcy9zaXRlcy82LzIwMTkvMDUv/nice.jpg"
                                            alt="Les rencontres amoureuses après 50 ans" /></noscript></div> <span
                                    class="more m1">Nice</span>
                            </a> </dd>
                    </dl>
                </section>
            </aside>
        </div>
    </div>-->
                        <!--<footer id="footer">
        <div class="inner plr">
            <div id="container_footer" class="inner_inner">
                <div id="f_left">
                    <ul id="menu-footer" class="menu">
                        <li id="menu-item-3188"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-3188"><a
                                href="https://www.disonsdemain.fr/p/actualites/">Toute notre actualité</a></li>
                        <li id="menu-item-28"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2MvdGVybXM=">Conditions générales</span>
                        </li>
                        <li id="menu-item-29"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2MvY29va2ll">Charte d’utilisation des
                                cookies</span></li>
                        <li id="menu-item-1132"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1132"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2MvcHJpdmFjeQ==">Politique de
                                confidentialité</span></li>
                        <li id="menu-item-1133"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1133"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2MvY2hhcnRlcg==">Charte de
                                confiance</span></li>
                        <li id="menu-item-1134"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1134"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2MvY2dl">Conditions Générales
                                Sorties</span></li>
                        <li id="menu-item-1135"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1135"><span
                                class="legalLink" data-href="L3BhZ2VzL21pc2Mvc2VydmljZXM=">Découvrez les services
                                DisonsDemain</span></li>
                    </ul>
                </div>-->
                        <div id="f_right"> © 2021 . chidoukhim Tous droits réservés. <a href="https://chidoukhim.com/fr" target="_blank">Le site ici &gt;
                                chidoukhim</a> </div>
                        <div class="clear"></div>
                        <div id="footer_text">Chaque membre est suivi par une Shadhanite et par les
                            administrateurs<br>
                        </div>
        </article></div>
    </div>

</div>
@endsection


