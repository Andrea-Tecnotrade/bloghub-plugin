<?php declare(strict_types=1);

namespace RatMD\BlogHub\Updates;

use Schema;
use Illuminate\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * UpdateBackendUsers Migration
 */
class MigrateVisitorsTable extends Migration
{

    /**
     * @inheritDoc
     */
    public function up()
    {
        Schema::table('ratmd_bloghub_visitors', function (Blueprint $table) {
            $table->text('likes')->nullable();
            $table->text('dislikes')->nullable();
        });
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        Schema::dropColumns('ratmd_bloghub_visitors', ['likes', 'dislikes']);
    }

}
