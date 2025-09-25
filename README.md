# Vue Echo Listen on Mount Demo

```
cp .env.example .env
composer install
npm install
composer run dev
php artisan reverb:start
open http://127.0.0.1:8000
php artisan tinker
```

### User is needed
Use the sign up form to register a new user.


### Scenario 1:
go to dashboard and reload the page.

In tinker:
```
App\Models\User::first()->notify(new App\Notifications\Whatever());
```
 Result: One console log output with `whatever ...`


### Scenario 2:
1. go to dashboard and reload the page.
2. go to user Setting via Inertia Link
3. go to dashboard via Inertia Link


In tinker:
```
App\Models\User::first()->notify(new App\Notifications\Whatever());
```
Result: Multiple console log outputs with `whatever ...`
