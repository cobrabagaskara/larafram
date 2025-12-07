namespace Modules\Billing\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        Filament::serving(function () {
            // Register Filament resources automatically
            Filament::registerResources([
                \Modules\Billing\Filament\Resources\DummyResource::class,
            ]);
        });
    }
}
