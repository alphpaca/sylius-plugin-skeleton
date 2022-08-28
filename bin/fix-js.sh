#!/bin/sh

CHECK_OS="`uname -s`"
if [[ "$CHECK_OS" = "Darwin" ]]; then
    sed -i '' 's/;;/;/g' node_modules/semantic-ui-css/semantic.min.css
    sed -i '' 's/;;/;/g' node_modules/semantic-ui-css/semantic.css
    sed -i '' 's/Chart.min/chart.min/g' vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/private/js/sylius-chart.js
else
    sed -i 's/;;/;/g' node_modules/semantic-ui-css/semantic.min.css
    sed -i 's/;;/;/g' node_modules/semantic-ui-css/semantic.css
    sed -i 's/Chart.min/chart.min/g' vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/private/js/sylius-chart.js
fi
