# 📊 Dashboard Énergie

## 🌟 Fonctionnalités Principales

🔹 **Visualisation des données régionales** :
- Consommation totale par type d'énergie.
- Indicateurs TCO / TCH pour une meilleure analyse.

🔹 **Visualisation des données départementales** :
- Consommation totale par département.
- Répartition détaillée par opérateurs.

🔹 **Formulaires indépendants** :
- Envoi des saisies utilisateur sans écraser les visualisations existantes.
- Implémentation de champs cachés (`hidden inputs`) et tests conditionnels en **PHP** pour une gestion fluide.

## 💻 Technologies Utilisées

- **PHP** : Architecture modulaire avec séparation des scripts.
- **Chart.js** : Visualisation des données grâce à cette bibliothèque complète et bien documentée.
- **SASS** : Gestion du style de manière optimisée et modulaire.
- **JavaScript** : Dynamisation des interactions et affichage des graphiques.

## 🚀 Défis et Solutions

🔸 **Problème des formulaires indépendants** :
- Objectif : Modifier les données d'un formulaire sans affecter les graphiques de l'autre section.
- Solution : Utilisation de `hidden inputs` et tests conditionnels en PHP pour préserver l'état de la visualisation.

🔸 **Modularisation du code** :
- Découpage en scripts spécialisés pour une meilleure maintenance et évolutivité.
- Gestion des données et affichage des graphiques de manière distincte.

