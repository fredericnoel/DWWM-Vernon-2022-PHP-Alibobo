# Mot  de passe oublié

## création d'un lien permettant à l'utilisateur de récupérer son mot de passe en cas d'oubli

- Requête permettant de créer un nouveau champ "compte_actif" pour connaître le statut de l'utilisateur :

ALTER TABLE `utilisateurs` ADD `compte_actif` VARCHAR(50) NOT NULL AFTER `email`;


- Requête permettant de créer un nouveau champ "token" pour stocker le jeton :

ALTER TABLE `utilisateurs` ADD `token` VARCHAR(255) NOT NULL AFTER `avatar`;


- Requête permettant de créer un nouveau champ "created_token_at" pour connaître la date de création du jeton :

ALTER TABLE `utilisateurs` ADD `created_token_at` TIMESTAMP NOT NULL AFTER `token`;


- Requête permettant de créer un nouveau champ "compte_confirme" pour stocker les comptes confirmés :

ALTER TABLE `utilisateurs` ADD `compte_confirme` VARCHAR(255) NOT NULL AFTER `created_token_at`;


- Requête permettant de créer un nouveau champ "last_connection_at" pour connaître le nom de la dernière connection :

ALTER TABLE `utilisateurs` ADD `last_connection_at` VARCHAR(255) NOT NULL AFTER `compte_confirme`;
(Requête utilisée afin de contourner une erreur SQL, );












