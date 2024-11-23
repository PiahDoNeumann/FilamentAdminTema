Comandos executados:
composer require filament/filament -W
php artisan filament:install --panels
php artisan make:filament-user
php artisan make:filament-page Settings
php artisan make:filament-theme admin

 First, add a new item to the `input` array of `vite.config.js`: `resources/css/filament/admin/theme.css`
  ⇂ Next, register the theme in the admin panel provider using `->viteTheme('resources/css/filament/admin/theme.css')`
  ⇂ Finally, run `npm run build` to compile the theme
