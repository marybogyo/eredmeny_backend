<?php

use App\Models\Teszt;
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
        Schema::create('teszts', function (Blueprint $table) {
            $table->id();
            $table->string('kerdes');
            $table->string('v1');
            $table->string('v2');
            $table->string('v3');
            $table->string('v4');
            $table->string('helyes')->default('v1');
            $table->foreignId('kategoriaId')->references('id')->on('kategorias');
            $table->timestamps();
        });
        Teszt::create([
            'kerdes'=> 'Melyik sportágban használják a kézilabdát?',
            'v1'=>'kézilabda',
            'v2'=>'foci',
            'v3'=>'pingpong',
            'v4'=>'strandlabda',
            'kategoriaId'=> 2,
        ]);
        Teszt::create([
            'kerdes'=> 'Mivel kell programot írni??',
            'v1'=>'java',
            'v2'=>'toll',
            'v3'=>'ceruza',
            'v4'=>'filctoll',
            'kategoriaId'=> 3,
        ]);
        Teszt::create([
            'kerdes'=> 'Melyik természetvédelmi terület?',
            'v1'=>'nemzetközi természetvédelmi központ',
            'v2'=>'állatkert',
            'v3'=>'obi',
            'v4'=>'auchan',
            'kategoriaId'=> 1,
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teszts');
    }

    
};
