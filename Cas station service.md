# Question 1.1: Le client se sert de l'essence de la façon suivante : il prend un pistolet accroché à une
pompe et appuie sur la gâchette pour prendre de l'essence. Qui est l'acteur du système ? Est-ce le client,
le pistolet ou la gâchette ?

**C'est le client. On ne tient pas compte des outils ou moyens utilisés: c'est inutile et hors sujet à ce stade.**



# Question 1.2: Mr Dupond, dont le métier est pompiste, peut se servir de l'essence pour sa voiture. Pour
modéliser cette activité de Mr Dupond, doit-on définir un nouvel acteur ? Comment modélise-t-on ça ?

**Non, ce qui est important c'est son rôle. Les diagrammes d'utilisation s'occupent des rôles, d'où le terme acteur.**

## Question 1.3: Lorsque Mr Dupond vient avec son camion citerne pour remplir les réservoirs des pompes, est-il
considéré comme un nouvel acteur ? Comment modélise-t-on cela ?

**Oui c'est un nouvel acteur car le fait de remplir les citernes est une action et un rôle différent de celui d'être client**
On peut le faire intervenir comme acteur secondaire


## Question 1.4 : Certains pompistes sont aussi qualifiés pour opérer des opérations de maintenance en plus
des opérations habituelles des pompistes telles que le remplissage des réservoirs. Ils sont donc réparateurs
en plus d'être pompistes. Comment modéliser cela ?

Le fait que le réparateur soit un pompiste qui a une qualification supplémentaire nous fait penser à la **généralisation / spécialisation** entre acteur, seul manière autorisée de relier des acteurs entre eux dans un diagramme de cas d'utilisation