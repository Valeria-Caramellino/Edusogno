Il mio progetto è un'applicazione web sviluppata utilizzando il framework Laravel e il linguaggio di programmazione PHP. L'applicazione è stata creata per gestire eventi e utenti con due ruoli principali: amministratori (admin) e utenti (user).

Ruoli degli Utenti:

L'applicazione ha due tipi di utenti principali: amministratori (admin) e utenti (user).

Gli amministratori hanno accesso completo alla gestione degli eventi, consentendo loro di crearli, modificarli e visualizzarli in dettaglio.

Gli utenti possono visualizzare eventi pubblicati dagli amministratori e partecipare a eventi specifici.

Gestione degli Eventi:

Gli amministratori hanno un'area di amministrazione dedicata dove hanno il controllo completo sulla gestione degli eventi, possono creare nuovi eventi, apportare modifiche a quelli esistenti , visualizzare dettagli completi sugli eventi e i loro partecipanti e la possibilità di eliminare un evento.


Partecipazione agli Eventi:

Gli utenti hanno la possibilità di partecipare a eventi specifici. Questo coinvolge un meccanismo di registrazione che consente agli utenti di indicare il loro interesse per un evento particolare.
La partecipazione degli utenti agli eventi è registrata tramite una tabella pivot che collega gli utenti agli eventi a cui partecipano.

Visualizzazione delle Password:

Nell'applicazione ho implementato la funzionalità di visualizzazione delle password nella pagina di registrazione e login. Gli utenti possono fare clic su un'icona a forma di occhio per visualizzare la password in chiaro, se necessario, e un altro clic nasconde nuovamente la password.

Reimpostazione delle Password:

Gli utenti hanno la possibilità di reimpostare la propria password. Quando effettuano questa operazione, la nuova password viene sovrascritta nel database.

L'intera applicazione che ho creato è responsiva.


