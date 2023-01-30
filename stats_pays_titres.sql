# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Serveur: localhost
# G�n�r� le : Vendredi 22 Avril 2005 � 16:11
# Version du serveur: 3.23.37
# Version de PHP: 4.1.2
#
# Base de donn�es: `netchallenge`
#

# --------------------------------------------------------

#
# Structure de la table `langues`
#

CREATE TABLE `stats_pays_titres` (
  `code` varchar(8) NOT NULL default '',
  `titre` varchar(30) NOT NULL default '',
  PRIMARY KEY  (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8;

#
# Contenu de la table `langues`
#

INSERT INTO `stats_pays_titres` VALUES ('de', 'Allemand (standard)');
INSERT INTO `stats_pays_titres` VALUES ('en-us', 'Anglais (USA)');
INSERT INTO `stats_pays_titres` VALUES ('en-gb', 'Anglais (Grande Bretagne)');
INSERT INTO `stats_pays_titres` VALUES ('fr-be', 'Fran�ais (Belgique)');
INSERT INTO `stats_pays_titres` VALUES ('it', 'Italien (standard)');
INSERT INTO `stats_pays_titres` VALUES ('es', 'Espagnol (traditionnel)');
INSERT INTO `stats_pays_titres` VALUES ('fr-ca', 'Fran�ais (Canada)');
INSERT INTO `stats_pays_titres` VALUES ('fr-lu', 'Fran�ais (Luxembourg)');
INSERT INTO `stats_pays_titres` VALUES ('fr-mc', 'Fran�ais (Monaco)');
INSERT INTO `stats_pays_titres` VALUES ('fr-ch', 'Fran�ais (Suisse)');
INSERT INTO `stats_pays_titres` VALUES ('ja', 'Japonnais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('es-mx', 'Espagnol (Mexique)');
INSERT INTO `stats_pays_titres` VALUES ('ru', 'Russe');
INSERT INTO `stats_pays_titres` VALUES ('en', 'Anglais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('nl-be', 'Flamand (Belgique)');
INSERT INTO `stats_pays_titres` VALUES ('cs', 'Tch�coslovaque (standard)');
INSERT INTO `stats_pays_titres` VALUES ('de-ch', 'Allemand (Suisse)');
INSERT INTO `stats_pays_titres` VALUES ('es-ar', 'Espagnol (Argentine)');
INSERT INTO `stats_pays_titres` VALUES ('en-ca', 'Anglais (Canada)');
INSERT INTO `stats_pays_titres` VALUES ('nl', 'Flamand (standard)');
INSERT INTO `stats_pays_titres` VALUES ('el', 'Grecque (standard)');
INSERT INTO `stats_pays_titres` VALUES ('no', 'Norv�gien (standard)');
INSERT INTO `stats_pays_titres` VALUES ('sv', 'Su�dois (standard)');
INSERT INTO `stats_pays_titres` VALUES ('en-ie', 'Anglais (Ireland)');
INSERT INTO `stats_pays_titres` VALUES ('fr-fr', 'Fran�ais (France)');
INSERT INTO `stats_pays_titres` VALUES ('pt', 'Portuguais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('pt-br', 'Portuguais (Br�sil)');
INSERT INTO `stats_pays_titres` VALUES ('ko', 'Cor�en (standard)');
INSERT INTO `stats_pays_titres` VALUES ('zh-cn', 'Chinois (Provinces)');
INSERT INTO `stats_pays_titres` VALUES ('pl', 'Polonais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('fr', 'Fran�ais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('th', 'Tha�');
INSERT INTO `stats_pays_titres` VALUES ('sq', 'Albanais');
INSERT INTO `stats_pays_titres` VALUES ('uk', 'Ukrainien');
INSERT INTO `stats_pays_titres` VALUES ('de-lu', 'Allemand (Luxembourg)');
INSERT INTO `stats_pays_titres` VALUES ('fr-netch', 'Fran�ais (Netchallenge)');
INSERT INTO `stats_pays_titres` VALUES ('he', 'H�breu');
INSERT INTO `stats_pays_titres` VALUES ('en;q=1.0', 'Anglais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('ar-sa', 'Arabe (Arabie Saoudite)');
INSERT INTO `stats_pays_titres` VALUES ('tr', 'Turc');
INSERT INTO `stats_pays_titres` VALUES ('ar-dz', 'Arabe (Alg�rie)');
INSERT INTO `stats_pays_titres` VALUES ('en-jm', 'Anglais (Jama�que)');
INSERT INTO `stats_pays_titres` VALUES ('fr;q=1.0', 'Fran�ais (standard)');
INSERT INTO `stats_pays_titres` VALUES ('de-at', 'Allemand (Autriche)');
INSERT INTO `stats_pays_titres` VALUES ('ar-eg', 'Arabe (Egypte)');
INSERT INTO `stats_pays_titres` VALUES ('hu', 'Hongrois');
INSERT INTO `stats_pays_titres` VALUES ('yi', 'Yiddish');
INSERT INTO `stats_pays_titres` VALUES ('ro', 'Roumain');
INSERT INTO `stats_pays_titres` VALUES ('fa', 'Farsi');
INSERT INTO `stats_pays_titres` VALUES ('da', 'Danois');
INSERT INTO `stats_pays_titres` VALUES ('ar-ma', 'Arabe (Maroc)');
INSERT INTO `stats_pays_titres` VALUES ('fi', 'Finnois');
INSERT INTO `stats_pays_titres` VALUES ('es-co', 'Espagnol (Colombie)');
INSERT INTO `stats_pays_titres` VALUES ('en-au', 'Anglais (Australie)');
INSERT INTO `stats_pays_titres` VALUES ('zh-tw', 'Chinois (Ta�wan)');
INSERT INTO `stats_pays_titres` VALUES ('es-ec', 'Espagnol (Equateur)');
INSERT INTO `stats_pays_titres` VALUES ('lt', 'Italien (standard)');
INSERT INTO `stats_pays_titres` VALUES ('da-dk', 'Danois (Danemark)');
INSERT INTO `stats_pays_titres` VALUES ('id', 'Indon�sien');
INSERT INTO `stats_pays_titres` VALUES ('de-de', 'Allemand (Allemagne)');
INSERT INTO `stats_pays_titres` VALUES ('et', 'Estonien');
INSERT INTO `stats_pays_titres` VALUES ('es-cl', 'Espagnol (Chili)');
INSERT INTO `stats_pays_titres` VALUES ('es-gt', 'Espagnol (Guatemala)');
INSERT INTO `stats_pays_titres` VALUES ('es-ve', 'Espagnol (Venezuela)');
INSERT INTO `stats_pays_titres` VALUES ('en-nz', 'Anglais (Nouvelle Z�lande)');
INSERT INTO `stats_pays_titres` VALUES ('nl-nl', 'Flamand (Pays-Bas)');
INSERT INTO `stats_pays_titres` VALUES ('zu', 'Zoulou');
INSERT INTO `stats_pays_titres` VALUES ('es-pe', 'Espagnol (P�rou)');
INSERT INTO `stats_pays_titres` VALUES ('sl', 'Slov�ne');
INSERT INTO `stats_pays_titres` VALUES ('hu-hu', 'Hongrois (Hongrie)');
INSERT INTO `stats_pays_titres` VALUES ('it-it', 'Italien (Italie)');
INSERT INTO `stats_pays_titres` VALUES ('es-ni', 'Espagnol (Nicaragua)');
INSERT INTO `stats_pays_titres` VALUES ('en-ki', 'Anglais (Kiribati)');
INSERT INTO `stats_pays_titres` VALUES ('en-tt', 'Anglais (Trinidad et Tobago)');
INSERT INTO `stats_pays_titres` VALUES ('ja-jp', 'Japonnais (Japon)');
