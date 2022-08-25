<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Sylius Plugin Skeleton</h1>

<p align="center">Boilerplate for starting with Sylius plugin development.</p>

## Quickstart

1. Run
    ```bash
    $ composer create-project alphpaca/sylius-plugin-skeleton MyPlugin
    ```
2. From the root directory run the following commands
    ```bash
    $ yarn install && yarn encore dev
    $ bin/console assets:install public
    $ bin/console doctrine:database:create
    $ bin/console doctrine:schema:create
    $ bin/console sylius:fixtures:load
    ```
