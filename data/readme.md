# Read me - Evaluation DWM8
*Germain PINGANAUD*

### Problèmes rencontrés
- Synchronisation local/vm -> Vagrantfile mal configuré, la ligne concernant la synchronisation n'était pas correctement décommenté sur la première VM, je l'ai halt, sudo nano, décommenté, up, et là j'ai paniqué pendant 1 heure, je regardais pas dans le bon dossier. Je l'ai supprimé et j'ai recommencé 4 fois.
- [ PDOException ] Driver not found, j'ai cherché sur internet pendant 1 heure. J'ai vérifié le .env, le config/database.php, j'ai vérifié sur workbench l'existence de la db, la bonne installation de php7.0-mysql, apparemment tout était bon, mais ca déconnais toujours. J'ai dpkg php7.0-mysql, j'ai redémarré apache2 et ça a réglé le problème.
  
