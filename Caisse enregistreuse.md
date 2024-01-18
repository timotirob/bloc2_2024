# Quels sont les cas en inclusion ?

**(Paiement) inclut (signalement fin vente)
En effet, le caissier indique à la caisse enregistreuse que la saisie des différents articles est terminée.
Il n'y a pas de notion de séquence ni de nombre.

**(Paiement) inclut (transmission info quantités)
Il est obligatoire de transmettre des informations sur les quantités vendues pour une bonne gestion de stocks.
Ici l'inclusion indique la dépendance mais pas nécessairement le séquencement.



# Quels sont les cas en extension?

**(Coupon de réduction) est en extension de (signalement fin vente)**
On ne peut pas le mettre ailleurs au vu de l'énoncé qui précise que les coupons sont présentés
avant le Paiement


# Quels sont les cas en généralisation / spécialisation?

**les modes de paiement (carte de credit) , (chèque) et (espèces) sont des cas particuliers, des spécialisations du (paiement) **



# questions sur le processus et le contenu de la modélisation
** pourquoi le client n'est il pas représenté ? **
Parce que le système c'est la caisse enregistreuse et que le client n'interagit pas avec la caisse

** pourquoi fait on intervenir un responsable stocks / logistique ? **
Au point 11, dans les spécifications, on demande à ce que "la caisse transmet les informations relatives aux articles vendus au système de gestion des
stocks" donc il y a besoin de modéliser cela d'où l'introduction d'un acteur qui prend en charge ces données

** pourquoi ne modélise t'on pas toutes les étapes mentionnées ? **
ici on a donné un embryon pour éviter aux étudiants de se perdre à modéliser tous les détails qui n'ont pas à
figurer dans un diagramme de cas d'utilisation qui modélise une partie du COMPORTEMENT du système en répondant
à la question à QUOI il sert.
Les répétitions et séquence et détails sont l'objet d'autres diagrammes UML.