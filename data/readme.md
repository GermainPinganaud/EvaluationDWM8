# Read me - Evaluation DWM8
*Germain PINGANAUD*

Sommaire
- Problèmes rencontrés
  - Synchronisation local/vm
  - [ PDOException ] Driver not found
  - Chargement du CSS
- Mes points positifs
  - Utilisation de GIT, Laravel, Workbench
  - MVC
  - CRUD
- Mes points négatifs
  - Ma gestion du stress
  - Tables relationnelles
  -

---

### Problèmes rencontrés
##### 1. Synchronisation local/vm
 Vagrantfile mal configuré, la ligne concernant la synchronisation n'était pas correctement décommenté sur la première VM, je l'ai halt, sudo nano, décommenté, up, et là j'ai paniqué pendant 1 heure, je regardais pas dans le bon dossier. Je l'ai supprimé et j'ai recommencé quatre fois.
##### 2. [ PDOException ] Driver not found
J'ai cherché sur internet pendant une heure. J'ai vérifié le .env, le config/database.php, j'ai vérifié sur workbench l'existence de la db, la bonne installation de `php7.0-mysql`, apparemment tout était bon, mais ca déconnais toujours. J'ai dpkg php7.0-mysql, j'ai redémarré apache2 et ça a réglé le problème.
##### 3. Chargement du CSS
Le CSS n'était pas rechargé au return view avec la balise html5, j'ai du utiliser la balise laravel collective.

---

### Mes points positifs
##### 1. Utilisation de GIT, Laravel, Workbench
J'ai rencontré de nombreux obstacles et j'ai paniqué plusieurs fois mais j'ai réussi a installer les composants nécessaires.
##### 2. MVC
J'ai utilisé php artisan et Laravel autant que possible.
##### 3. CRUD
J'ai créé un CRUD en copiant le moins possible et en utilisant la doc de https://laravelcollective.com/docs/5.0/html

---

### Mes points négatifs
##### 1. Ma gestion du stress
J'ai perdu des heures sur la vagrant parce que j'ai perdu mes moyens.
##### 2. Tables relationnelles
Je n'ai pas réussi a utiliser les tables relationnelles malgré les heures passées sur la doc.
