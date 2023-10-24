<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('image')->default('about.jpg');
            $table->text('content')->default('<p>Lorem ipsum dolor sit amet consectetur. Ut diam ut scelerisque orci imperdiet potenti. Nunc fringilla velit aliquam libero. Metus felis eu a rhoncus sodales viverra nullam. Morbi mauris orci sed pellentesque nec enim sed ac laoreet. Tellus velit amet at posuere porttitor sapien est. Et hendrerit purus curabitur purus lorem.</p>

            <p>Vitae amet eu eu praesent nam tellus. Bibendum erat volutpat quis mauris integer ante dui. Sed et pulvinar felis eu. Varius ac mauris in neque et. Cursus sagittis sed hendrerit eu venenatis. Sit diam tempus sit id neque laoreet leo orci amet. Egestas non sociis vulputate tristique amet aliquam pellentesque. Tortor tincidunt vulputate cras auctor. Maecenas condimentum lorem orci donec. At enim varius augue accumsan amet amet quam. Et erat interdum dignissim donec. Tortor lacinia felis quis nulla eget.</p>');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
