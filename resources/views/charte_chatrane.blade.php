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
            <a class="text-black" href="/"><i class="fa fa-home"></i>{{ __("Accueil") }}</a> / {{ __("Charte Chadrane") }}
        </div>


        <div class="flex" id="cols">
            <article id="left_col" class="txt">
                <h2>REGLES ET ENGAGEMENTS </h2>
                <p><span style="font-weight: 400;"><strong> DEVENIR CHADRANITE/CHADRANE </strong> chidoukhim
                        est une association loi 1901 en création</span></p>
                <h2>1. Le statut de la Chadranite / Chadrane</h2>
                <p><span style="font-weight: 400;"> La Chadranite est une personne physique majeure, de confession
                        juive, marié(e), veuf(ve) ou divorcé(e).

                        Les chadranites s'inscrivent librement sur chidoukhim.
                        Les Chadranites accomplissent leurs missions en qualité de bénévole ou pas, elles peuvent
                        recevoir une rétribution donnée par les célibataires et collectée au préalable par
                        chidoukhim .

                        Il n’existe aucun lien de subordination entre chidoukhim et les Chadranites.
                        <strong>Celles-ci sont libres dans l’exercice de leurs missions et seront seules à en
                            répondre,

                        </strong> sous réserve du respect des principes directeurs, des règles et des valeurs
                        émises par chidoukhim .
                    </span></p>
                <h2>2. Activité minimale de La Chadranite!</h2>
                <p><span style="font-weight: 400;">La Chadranite s’engage à s’investir sérieusement dans sa
                        participation au programme chidoukhim.
                        <strong>La Chadranite est informée de ce que tout manquement aux présentes pourra
                            entraîner la suspension/restriction de sa participation auprès de chidoukhim et
                            la désactivation des codes d’accès à la Plate-forme sans délai.
                        </strong>
                        </span></p><p><span style="font-weight: 400;"> A)
                                Au moment de son inscription au programme chidoukhim, La Chadranite doit
                                joindre et uploader la liste de
                                l’ensemble de ces Profils célibataires, les profils recevront un email pour leur
                                permettre de compléter leur fiche
                                et d'uploader leur photo et papier d’identité.
                                La chadranite pour uploader l’ensemble de ses profils devra compléter un fichier
                                Excel, en quelques clics toutes
                                les fiches seront enregistrées sur la plate-forme.
                                Au cas où la Chadranite n’aura pas uploader la totalité de ses fiches, elle devra
                                enregistrer l'ensemble de ses
                                profils dans un délai maximum de 3 mois.
                            </span></p>
                        <p><span style="font-weight: 400;"> A titre indicatif, les Chadranites qui collaborent avec
                                chidoukhim suivent
                                en moyenne entre 50 et 200 Profils célibataires.
                                </span></p><p><span style="font-weight: 400;"> En cas d’inactivité totale ou n’ayant honoré
                                        ses engagements vis-à-vis de
                                        ses profils sur une durée ininterrompue de <strong>1 mois,</strong>
                                        chidoukhim pourra décider unilatéralement
                                        de désactiver les codes d’accès de la chadranite à la Plate-forme.
                                        L’ensemble des profils restant sans chadranite seront disponibles pour
                                        toutes les chadranites disponibles
                                        dans la région, le celibataire recevra un email par la chadranite pour
                                        l’informer du changement de chadranite.
                                        Libre à lui de discuter avec chacune des chadranites qui ont postulé.
                                    </span></p>
                                <p><span style="font-weight: 400;">La chadranite pourra pour des raisons
                                        personnelles se retirer
                                        de la plate-forme ou être indisponible durant une période (ex:
                                        Grossesse...).La chadranite pourra
                                        pour des raisons personnelles se retirer de la plate-forme ou être
                                        indisponible durant une période
                                        (ex: Grossesse...).</span></p>
                                <p><span style="font-weight: 400;">Rappel : Dans votre profil de chadranite, vous
                                        avez indiqué le nombre
                                        de <strong>profils maximum</strong> que vous souhaitiez vous occuper, cette
                                        limite une fois atteinte vous recevrez un
                                        mail qui vous informera que vous n'apparaissez pas sur la plate-forme pour
                                        les nouveaux profils, à tout
                                        moment vous pouvez changer dans votre espace le nombre de profils dont vous
                                        souhaitez vous occuper.</span></p>

                                <h2>3. Mise à disposition de la Plate-forme</h2>
                                <p><span style="font-weight: 400;">Afin de faciliter la proposition de rencontres
                                        ciblées entre Profils célibataires,
                                        chidoukhim donne accès aux Chadranites à une Plate-forme regroupant
                                        les profils femme et homme référencés
                                        par vous-même ou par <strong>d’autres Chadranites</strong>. </span></p>
                                <p><span style="font-weight: 400;">La plate-forme est visible sur internet à travers
                                        son site internet, auquel s'ajoute
                                        une application en ligne disponible sur IOS (Mac) et Androïd.</span></p>
                                <p><span style="font-weight: 400;">Le code d’accès et son login sont choisis par la
                                        chadranite lors de son inscription
                                        et après validation de son profil et de sa compétence par chidoukhim
                                        .
                                    </span></p>
                                <p><span style="font-weight: 400;">Les codes et login sont
                                        <strong>confidentiels</strong>. La Chadranite s’interdit formellement de les
                                        communiquer à quiconque et adoptera toutes les mesures nécessaires
                                        <strong>pour sécuriser l’accès à la Plate-forme,</strong> un système
                                        de géolocalisation permettra à la plate-forme de savoir à tout moment d’où
                                        l’on s'est connecté </span></p>
                                <p><span style="font-weight: 400;">La Chadranite s’engage à n’exploiter la
                                        Plate-forme que <strong>dans le cadre de ses missions</strong>
                                        en tant que Chadranite de chidoukhim , c'est-à-dire pour proposer
                                        des rencontres entre Profils célibataires.
                                    </span></p>
                                <p><span style="font-weight: 400;">L’accès à la Plate-forme pourra être
                                        <strong>retiré</strong> à la Chadranite, à n’importe quel moment sur
                                        décision
                                        de chidoukhim , notamment en cas de violation des présentes. </span>
                                </p>
                                <p><span style="font-weight: 400;">La Chadranite reconnaît qu’elle <strong>ne
                                            dispose d’aucun titre de propriété</strong> ou d’autre titre de droit
                                        quel
                                        qu’il soit sur la Plate-forme de chidoukhim, ni sur les Profils
                                        célibataires inscrits. Ces derniers peuvent choisir ou modifier
                                        la Chadranite qui s’occupe de leur profil. Afin d’éviter tout débordement et
                                        dans le respect du travail effectué jusque-là par la chadranite,
                                        elle sera avertie de la demande de changement et pourra accepter le
                                        changement ou s'y opposer, ou demander que le profil soit exclu de la
                                        plate-forme. </span></p>
                                <h2>LES MISSIONS DE LA CHADRANITE </h2>
                                <h3>1. L’accompagnement du Profils célibataires</h3>
                                <p><span style="font-weight: 400;">Chaque Profil célibataire est mis en relation
                                        avec une Chadranite qui est destiné à l’accompagner tout au long
                                        de sa participation au programme chidoukhim.
                                        La Chadranite et le Profil célibataire sont mis en relation soit en raison
                                        de leurs relations préexistantes à l’inscription, soit sur proposition
                                        de chidoukhim.
                                    </span></p>
                                <p><span style="font-weight: 400;">La chadranite n'a pas de restriction au niveau de
                                        la localisation, elle pourra donc s’occuper de profils qui sont
                                        distants de sa ville ou même d’un autre pays.
                                        La Chadranite veillera à instaurer une relation de confiance avec ses
                                        profils célibataires.
                                    </span></p>
                                <p><span style="font-weight: 400;">Un premier entretien avec le Profil célibataire
                                        doit être réalisé de visu ou, lorsque cela est justifié, à distance
                                        (par visioconférence notamment).
                                    </span></p>
                                <p><span style="font-weight: 400;">En prévision de ce premier entretien, La
                                        Chadranite devra : </span></p>
                                <ul>
                                    <li>- S’assurer de l’inscription du Profil célibataire au programme
                                        chidoukhim (le lien pour compléter l’inscription sera envoyé
                                        automatiquement
                                        au profil pour qu’il finalise son inscription) ;</li>
                                    <li>- S’assurer que la fiche d’inscription du Profil célibataire est dûment
                                        remplie dans son intégralité et que la “pièce d'identité” ainsi que la
                                        “pièce
                                        d'identité + photo” du profil soit apuader, faute de quoi sous 5 jours le
                                        profil ne sera plus visible sur la plate-forme.</li>
                                    <li>- Rappel la Chadranite ne peut voir les “Téléphone et Email” que uniquement
                                        de ses profils</li>
                                    <li>********** arrêt du 25 5 2021 avec Annie pour contrôle</li>
                                </ul>
                                <p><span style="font-weight: 400;"></span>Au cours du premier entretien, La
                                    Chadranite devra :
                            </p>
                        <ul>
                            <li>- S’assurer de l’identité du Profils célibataires (notamment par la fourniture
                                d’une pièce d’identité) et vérifier l'authenticité des documents.</li>
                            <li>- Faire un bref rappel des règles du programme chidoukhim,
                                (confidentialité, engagement de la prise de contact quand les coordonnées sont
                                délivrées, etc.)</li>
                            <li>- Echanger avec le Profils célibataires pour apprendre à mieux le connaître et
                                cibler ses critères de rencontres.
                                A l’issue du premier entretien, La Chadranite devra :</li>
                            <ul>
                                <li>- valider la fiche Profils célibataires</li>
                                <li>- retranscrire dans l’onglet « notes » ses impressions dans ses notes
                                    personnelles.</li>
                            </ul>
                            <li>propositions proposées (système de question à choix multiple);
                                Sont joints en ANNEXES du présent accord des outils et conseils sur les missions
                                des Chadranites.
                                La Chadranite doit se montrer à l’écoute du Profils célibataires, et ne doit
                                jamais porter de jugement sur le Profils célibataires ou prendre l’initiative de lui
                                faire des remarques qui pourraient être blessantes (respecter les choix et
                                décisions du Profils célibataires, l’aspect physique, le niveau de pratique
                                religieuse, etc.).
                                La Chadranite ne doit jamais influencer le Profils célibataires sur l’issue d’une
                                rencontre. Aucune proposition de rencontre ne peut être imposée par La Chadranite
                                au Profils célibataires.
                                En cas de difficultés rencontrées dans l’accompagnement d’un Profils célibataires,
                                il sera possible de rediriger le Profils célibataires vers un autre Chadranite
                                (difficultés relationnelles ou si le Profils célibataires et/ou La Chadranite ne se
                                sent pas à l'aise dans ce binôme).
                                Nous rappelons que la chadranite sera noté par les celibataire et recevra de de 1 à
                                5 étoile(s)
                            </li>
                        </ul>
                        <h2>2. Le suivi du Profils célibataires</h2>
                        <p><span style="font-weight: 400;">La Chadranite doit assurer le suivi de ses Profils
                                célibataires en renseignant à chaque fois la Plate-forme: </span></p>
                        <ul>
                            <li>- Dans l’onglet « Propositions » toutes les propositions qui ont été envisagées
                                ou soumises à un autre Chadranite</li>
                            <li>- Dans l’onglet « Historique des rencontres » toutes les rencontres ont été
                                acceptées par le Profils célibataires et ont eu lieu.</li>
                            <li>Après chacun des chidouh du profil elle devra faire un léger commentaire sur cette
                                mise en chidouh.</li>
                        </ul>
                        <p><span style="font-weight: 400;">Il devra dès qu’il a connaissance d’un changement de
                                situation personnelle, mettre à jour le statut de son Profils célibataires.</span>
                        </p>
                        <p><span style="font-weight: 400;">En outre, les Profils célibataires seront invités dans
                                leur espace à faire un compte-rendu de leurs rendez-vous et à soumettre des
                                observations sur le déroulé de la rencontre et sur le Profils célibataires
                                rencontré (système de question à choix multiple) qui seront automatiquement
                                reportées sur la fiche du Profils célibataires rencontrés.</span></p>
                        <p><span style="font-weight: 400;">Ces informations sont confidentielles et ne seront en
                                aucun cas visibles par l’autre Profils célibataires concerné</span></p>
                        <h2>3. La proposition de rencontre</h2>
                        <p><span style="font-weight: 400;">La mission principale de La Chadranite consiste à
                                proposer au Profils célibataires suivi une ou des rencontres avec d’autres profils
                                célibataires inscrits, de la manière la plus ciblée possible et eu égard aux
                                critères définis par le Profils célibataires et de sa personnalité.</span></p>
                        <p><span style="font-weight: 400;"><strong>La Chadranite est libre dans le choix des
                                    propositions</strong> de rencontre qu’il soumet à son Profils célibataires.
                                Toutefois, il respectera les règles de la Loi juive (voir ANNEXES), elle peux
                                accepter le chidour pour son profil ou pas..</span></p>
                        <p><span style="font-weight: 400;">Les propositions de rencontres sont soumises au profils
                                célibataires après échange entre les deux Chadranites concernés afin de s’assurer
                                de la compatibilité des deux profils célibataires.
                                Chacune des chadranites fait un résumé dans la fiche de son profil qui apparaît sous
                                la fiche du profil, l’ensemble des résumer relatif à chacun des chidouh y apparaît.
                                Elle peut accepter ou refuser le profil.
                            </span></p>
                        <p><span style="font-weight: 400;">En cas d’accord du profils célibataires à la rencontre,
                                La Chadranite accepte la mise en relation du profils célibataires qui ne comprend
                                que les informations relatives à son profil.
                                Quand les deux chadranites ont accepté la mise en chidouh le profil choisie reçoit
                                une notification de la fiche profil (sans email et téléphone), elle à la possibilité
                                d'accepter la mise en relation, si le profil accept une messagerie privé et créer
                                afin que les profil puisse discuter, libre à chacun d’échanger son email, téléphone
                                pour dialoguer hors plate-forme.
                            </span></p>
                        <p><span style="font-weight: 400;">La Chadranite met à jour le statut du Profils
                                célibataires sur la Plate-forme afin d’informer les autres Chadranites de la
                                situation du Profils célibataires.</span></p>
                        <p><span style="font-weight: 400;">Chacun des profil peut interrompre le chiddoukh à tout
                                moment par le bouton mettre fin au chidouh avec confirmation.</span></p>
                        <h2>4. L’organisation d’une rencontre</h2>
                        <p><span style="font-weight: 400;">La rencontre s’organise par les Profils célibataires
                                eux-mêmes, selon leurs convenances.</span></p>
                        <p><span style="font-weight: 400;">Pour chidoukhim, il serait bon de recommander aux
                                profils célibataires de ne pas trop échanger à distance, afin de maintenir le
                                charme de la rencontre et éviter des jugements trop hâtifs.</span></p>
                        <h2>LES OBLIGATIONS DE LA CHADRANITE </h2>
                        <h3>1. Obligation de confidentialité</h3>
                        <p><span style="font-weight: 400;">La Chadranite est amenée à prendre connaissance
                                d’informations relevant de la vie privée des Profils célibataires. <strong>Toutes
                                    les informations communiquées par les Profils célibataires sont
                                    confidentielles</strong>.</span></p>
                        <p><span style="font-weight: 400;">La protection stricte de ces informations confidentielles
                                est indispensable au succès et à la bonne réalisation et à l’esprit du programme
                                chidoukhim.La protection stricte de ces informations confidentielles est
                                indispensable au succès et à la bonne réalisation et à l’esprit du programme
                                chidoukhim.</span></p>
                        <p><span style="font-weight: 400;">En conséquence, La Chadranite s’engage à :</span></p>
                        <ul>
                            <il>- <strong>Garder le secret le plus absolu sur toutes les informations
                                    confidentielles</strong> communiquées par le Profils célibataires et/ou
                                d’autres Chadranites du réseau chidoukhim.</il>
                            <il>- Ne pas les divulguer à des tiers ou exploiter ces informations à toutes autres
                                fins que celles de ses missions.</il>
                            <il>- cesser immédiatement, sur simple demande du Profils célibataires ou de
                                chidoukhim, d’utiliser les informations confidentielles qui lui ont été
                                transmises.</il>
                            <il>Cette obligation de respect de la confidentialité perdure tant que l’information
                                n’a pas été levée de sa confidentialité.
                                Toutefois, ne sera pas considérée comme confidentielle l’information connue du
                                public.
                            </il>
                        </ul>
                        <h2>2. Partage de la contribution financière des Profils célibataires</h2>
                        <p><span style="font-weight: 400;">Selon les règles de fonctionnement du programme
                                chidoukhim, chaque Profils célibataires est invité à faire un cadeau de 260
                                euros au bénéfice de leur Chadranite et de la plate-forme en cas de fiancail et/ou
                                mariage entre eux par l’entremise de chidoukhim .</span></p>
                        <p><span style="font-weight: 400;">Ce don peut être reversé partiellement à la chadranite
                                ou en totalité à chidoukhim si la chadranite à décider d'être bénévole du
                                début à la fin.</span></p>
                        <p><span style="font-weight: 400;">Le chidouh homme et femme verse à part égale la somme
                                prévu directement à la plate-forme, auccun versement en direct à la chadranite ne
                                sera à éffectuer directement à la chadranite, toute chadranite ne respectant pas
                                cette régler sera suspendu jusqu’a explications.</span></p>
                        <p><span style="font-weight: 400;">chidoukhim ne peut en aucun cas être tenu comme
                                responsable du non-paiement de ce don.</span></p>

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


