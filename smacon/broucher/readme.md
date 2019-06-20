Lavalite package that provides broucher management facility for the cms.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `smacon/broucher`.

    "smacon/broucher": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

    Smacon\Broucher\Providers\BroucherServiceProvider::class,

And also add it to alias

    'Broucher'  => Smacon\Broucher\Facades\Broucher::class,

## Publishing files and migraiting database.

**Migration and seeds**

    php artisan migrate
    php artisan db:seed --class=Smacon\\BroucherTableSeeder

**Publishing configuration**

    php artisan vendor:publish --provider="Smacon\Broucher\Providers\BroucherServiceProvider" --tag="config"

**Publishing language**

    php artisan vendor:publish --provider="Smacon\Broucher\Providers\BroucherServiceProvider" --tag="lang"

**Publishing views**

    php artisan vendor:publish --provider="Smacon\Broucher\Providers\BroucherServiceProvider" --tag="view"


## Usage


