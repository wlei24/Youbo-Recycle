# Youbo-Recycle

    .
    ├── app
    │   ├── Console
    │   │   └── Kernel.php
    │   ├── Exceptions
    │   │   └── Handler.php
    │   ├── Http
    │   │   ├── Controllers
    │   │   │   ├── Auth
    │   │   │   │   ├── ForgotPasswordController.php
    │   │   │   │   ├── LoginController.php
    │   │   │   │   ├── RegisterController.php
    │   │   │   │   └── ResetPasswordController.php
    │   │   │   ├── Controller.php
    │   │   │   └── HomeController.php
    │   │   ├── Kernel.php
    │   │   └── Middleware
    │   │       ├── EncryptCookies.php
    │   │       ├── RedirectIfAuthenticated.php
    │   │       ├── TrimStrings.php
    │   │       ├── TrustProxies.php
    │   │       └── VerifyCsrfToken.php
    │   ├── Providers
    │   │   ├── AppServiceProvider.php
    │   │   ├── AuthServiceProvider.php
    │   │   ├── BroadcastServiceProvider.php
    │   │   ├── EventServiceProvider.php
    │   │   └── RouteServiceProvider.php
    │   └── User.php
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   └── cache
    │       ├── packages.php
    │       └── services.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── broadcasting.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   ├── session.php
    │   └── view.php
    ├── database
    │   ├── factories
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 2014_10_12_000000_create_users_table.php
    │   │   └── 2014_10_12_100000_create_password_resets_table.php
    │   └── seeds
    │       └── DatabaseSeeder.php
    ├── package.json
    ├── package-lock.json
    ├── phpunit.xml
    ├── public
    │   ├── css
    │   │   └── app.css
    │   ├── favicon.ico
    │   ├── fonts
    │   ├── index.php
    │   ├── js
    │   │   └── app.js
    │   ├── mix-manifest.json
    │   ├── robots.txt
    │   └── web.config
    ├── readme.md
    ├── resources
    │   ├── assets
    │   │   ├── js
    │   │   │   ├── app.js
    │   │   │   ├── bootstrap.js
    │   │   │   └── components
    │   │   │       └── ExampleComponent.vue
    │   │   └── sass
    │   │       ├── app.scss
    │   │       └── _variables.scss
    │   ├── lang
    │   │   └── en
    │   │       ├── auth.php
    │   │       ├── pagination.php
    │   │       ├── passwords.php
    │   │       └── validation.php
    │   └── views
    │       ├── home.blade.php
    │       └── layouts
    │           ├── app.blade.php
    │           ├── _footer.blade.php
    │           └── _header.blade.php
    ├── routes
    │   ├── api.php
    │   ├── channels.php
    │   ├── console.php
    │   └── web.php
    ├── server.php
    ├── storage
    │   ├── app
    │   │   └── public
    │   ├── framework
    │   │   ├── cache
    │   │   ├── sessions
    │   │   ├── testing
    │   │   └── views
    │   └── logs
    ├── tests
    │   ├── CreatesApplication.php
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    ├── webpack.mix.js
    └── yarn-error.log

