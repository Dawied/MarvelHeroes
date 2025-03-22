# MarvelHeroes Laravel starter project

Dit is het starter project voor de SDCheatSheets tutorial [Koppeltabellen in Laravel](https://www.sdcheatsheets.nl/koppeltabellen-in-laravel)

In het starter project zit een volledige applicatie en testdata om Marvel Heroes en hun Abilities op te voeren, te wijzigen en te verwijderen.

In de tutorial wordt de applicatie uitgebreid met functionaliteit om Abilities te koppelen aan Heroes.

## Installatie

### 1. Open een terminal en Clone de starter in een directory naar keuze

``` 
git clone --branch starter https://github.com/Dawied/marvelheroes.git
```

### 2. Open de project folder in je IDE, open een terminal en installeer de dependencies

``` 
composer install 
```

``` 
npm install
```

### 3. Rename `example.env` naar `.env` en edit de file:

```
DB_USERNAME=jouw_username
DB_PASSWORD=jouw_password
```

### 4. Genereer een app key

``` 
php artisan key:generate 
```

### 5. Voer de migrations en de seed voor testdata uit:

``` 
php artisan migrate 
```

``` 
php artisan db:seed 
```

### 6. Start de applicatie

``` 
composer run dev 
```

####  Open de applicatie in je browser op http://localhost:8000, pak de [tutorial](https://www.sdcheatsheets.nl/koppeltabellen-in-laravel) erbij en volg de stappen.
