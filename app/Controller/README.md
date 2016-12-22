### DASHBOARD EVENTS
- Créer un DashboardEventsController
- Créer un view template dans le dossier Dashboard dashboard-events

#####Lister les events
- Créer une route vers /dashboard/events qui appelle le controlleur et la vue créés ci-dessus en GET
- Stocker les events avec la function findAll() dans une variable et la passer à la vue
- Dans la vue, faire une boucle pour récupérer tous les events dans une liste avec pour chacun un lien editer et supprimer

#####Editer un event
- Créer une route vers /dashboard/events/[:id] en GET|POST
- Créer un template dashboard-editEvent
- Dans le controlleur, créer une méthode editEvent($id)
- Créer une condition if(!empty($_POST))
- Récupérer dans celle-ci les infos de l'event avec la function find(id), 
- Les stocker dans une variable
- Les envoyer à la vue comme précédemment
- Terminer par un else (si la vue est appelée en GET)
- Y afficher la vue avec show()

#####Supprimer un event
- Créer une route vers /dashboard/events/delete/[:id] en GET
- Créer dans le controller une méthode deleteEvent($id)
- Verifier que l'event existe avec la function find($id)
- Si OK, avec la méthode delete($id) on supprime l'event
- Rediriger vers la liste d'event