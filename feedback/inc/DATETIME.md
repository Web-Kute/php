# Manipulation Date et Heure
date(format, timestamp)
## format est une chaîne qui détermine comment $timestamp doit être formaté
## timestamp (heure Unix) est optionnel. La valeur par défaut est la date et l'heure actuelles
###### L'heure Unix est une mesure du temps fondée sur le nombre de secondes écoulées depuis le 1er janvier 1970 00:00:00

### Définir un fuseau horaire par défaut.
`date_default_timezone_set('Europe/Paris');`

### Afficher l'année
`echo 'Année : ' . date('Y');`

### Afficher l'heure en timestamp
`echo 'Timestamp : ' . time();`

### Date
d - Représente le jour du mois (01 à 31)

m - Représente un mois (01 à 12)

Y - Représente une année (en quatre chiffres)

l (L minuscule) - Représente le jour de la semaine

### Heure
H - Format 24 heures d'une heure (00 à 23)

h - Format 12 heures d'une heure avec des zéros en tête (01 à 12)

i - Minutes avec zéros en tête (00 à 59)

s - Secondes avec zéros en tête (00 à 59)

a - minuscules Ante meridiem et Post meridiem (am ou pm)


### Exemples
`$date = date("F Y-m-d");`

`echo 'La date : ' . $date;`

`echo "Il est " . date("h:i:sa");`

### Afficher le jour, la date, le mois (littéralement), l'année, l'heure, AM ou PM 
`echo date("l jS \of F Y h:i:s A");`

### Afficher la date en français
`$fmt = datefmt_create(`

    'fr_FR',

    IntlDateFormatter::FULL,

    IntlDateFormatter::SHORT,

    'Europe/Paris',

`);`

`echo  datefmt_format($fmt, $date);`