<?php

use App\Models\User;
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
        Schema::create('notificacions', function (Blueprint $table) {
            // Definición de la tabla notificacions
            $table->comment('Almacena información sobre notificaciones'); // Comentario sobre la tabla notificacions
            $table->id()->comment('Identificador único de la notificación'); // Comentario sobre el campo id
            $table->string('mensaje')->comment('Mensaje de la notificación'); // Comentario sobre el campo mensaje
            $table->foreignIdFor(User::class)->comment('ID del usuario que recibe la notificacion'); // Comentario sobre el campo colmenas_id (clave foránea)
            $table->boolean('leido')->default(false)->comment('Indica si el usuario ya leyo la notificación');
            $table->timestamps(); // Comentario sobre los campos de registro de fecha de creación y actualización
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacions');
    }
};
