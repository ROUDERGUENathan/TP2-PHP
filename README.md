# TP2 — Développement Web PHP

Projet réalisé dans le cadre du **BTS CIEL** — Développement Web / PHP.

Ce TP a pour objectif de mettre en pratique les notions de **PHP**, de **formulaires**, de **récupération et validation des données**, ainsi que de **lecture et écriture dans des fichiers**.

---

## Contenu du projet

Le projet est composé de deux exercices.

### Exercice 1 — ACHAT

Création d'un formulaire permettant de commander des cours.

Fonctionnalités :

* Sélection d'un professeur parmi une liste prédéfinie.
* Sélection d'un cours disponible.
* Saisie du nombre de cours à commander.
* Vérification des champs du formulaire.
* Affichage des champs incomplets en cas d'erreur.
* Affichage d'un récapitulatif de la commande sur une seconde page.

Exemple :

> Vous avez commandé **10 cours de Hardware** auprès de **Made. DONNE**.

La liste des cours disponibles est paramétrée dans `cours.php`.

---

### Exercice 2 — DONS

Création d'un formulaire pour un site de dons caritatifs.

Le formulaire permet de renseigner :

* Nom
* Âge
* Adresse e-mail
* Montant du don en €

Les informations saisies sont enregistrées dans le fichier :

```text
resultats.txt
```

Sous le format :

```text
Nom | Age | Mail | Don
```

Le projet permet également :

* d'afficher les informations saisies ;
* d'afficher les différents dons enregistrés ;
* de calculer la **somme globale des dons** ;
* de calculer la **moyenne d'âge** des participants ;
* d'accéder aux résultats depuis la page d'accueil ;
* de générer une représentation graphique avec **JPGraph**.

---

## Structure du projet

```text
TP2-PHP/
│
├── Exercice1/
│   ├── index.php
│   ├── page2.php
│   ├── cours.php
│   ├── logo.png
│   └── style.css
├── Exercice2/
│   ├── index.php
│   ├── enregistrer.php
│   ├── resultats.php
│   ├── resultats.txt
|   ├── logophp.png
│   └── style.css
```

> La structure peut légèrement varier selon l'organisation finale du projet.

---

## Technologies utilisées

* **HTML**
* **CSS**
* **PHP**
* **WampServer**
* **Fichiers texte**

---

## Installation avec WampServer

### 1. Installer WampServer

Le projet a été développé et testé avec **WampServer**, qui permet notamment d'utiliser Apache et PHP en local.

### 2. Placer le projet dans `www`

Copier le dossier du projet dans le répertoire `www` de WampServer.

Par défaut :

```text
C:\wamp64\www\
```

Par exemple :

```text
C:\wamp64\www\TP2-PHP
```

### 3. Lancer WampServer

Démarrer **WampServer** et vérifier que le serveur Apache est correctement lancé.

### 4. Ouvrir le projet

Dans un navigateur, accéder à :

```text
http://localhost/TP2-PHP/
```

---

## Fonctionnement

### Exercice 1 — Achat

L'utilisateur :

1. sélectionne un professeur ;
2. sélectionne un cours ;
3. indique le nombre de cours à commander ;
4. valide le formulaire ;
5. obtient le récapitulatif de sa commande.

Les champs obligatoires sont vérifiés avant l'affichage du récapitulatif.

### Exercice 2 — Dons

L'utilisateur :

1. renseigne son nom ;
2. renseigne son âge ;
3. renseigne son adresse e-mail ;
4. indique le montant de son don ;
5. valide le formulaire.

Les informations sont enregistrées dans `resultats.txt`.

Une page de résultats permet ensuite d'afficher les dons ainsi que :

* le montant total récolté ;
* la moyenne d'âge des participants ;

---

## Objectifs pédagogiques

Ce TP permet de travailler :

* la création de formulaires HTML ;
* la récupération de données avec PHP ;
* les conditions ;
* les tableaux ;
* la validation des formulaires ;
* la transmission de données entre plusieurs pages ;
* la lecture et l'écriture dans un fichier ;
* les calculs avec PHP ;
* l'utilisation d'une bibliothèque externe ;
* la génération de graphiques avec PHP.

---

## Auteur

**Nathan Roudergue**

Projet réalisé dans le cadre du **BTS CIEL**.

---

## Statut

**TP terminé**
