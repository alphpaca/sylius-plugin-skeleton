<p align="center">
    <a href="https://alphpaca.io" target="_blank">
        <img src="https://github.com/alphpaca/.github/blob/main/banners/sylius-plugin-skeleton.png?raw=true" />
    </a>
</p>

<h1 align="center">Sylius Plugin Skeleton</h1>


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
