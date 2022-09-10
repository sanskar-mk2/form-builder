# Form Builder

## Figma Links

-   https://www.figma.com/proto/8m5RkczADK4YsCB60neElL/Data-Collection-System?page-id=0%3A1&node-id=1%3A2&viewport=-335%2C302%2C0.51&scaling=contain&starting-point-node-id=1%3A2

-   https://www.figma.com/proto/VwciEjkPKM2OKlECcgNKnI/sacoda-serv?page-id=0%3A1&node-id=1%3A2&viewport=206%2C101%2C0.08&scaling=scale-down&starting-point-node-id=1%3A2

## Steps to run

1. copy `.env.example` to `.env` and fill it out
2. run `php artisan migrate:fresh --seed`
3. run `php artisan shield:install --fresh`
4. run `php artisan db:seed --class=RoleSeeder`
5. run `php artisan db:seed --class=ShieldSeeder`
