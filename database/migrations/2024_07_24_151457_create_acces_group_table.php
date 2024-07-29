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
        Schema::create('acces_group', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('area');
            $table->timestamps();
        });

        Schema::create('clientes_group', function (Blueprint $table) {
            $table->id();
            $table->string('nameClient');
            $table->string('nameBusiness');
            $table->string('giro');
            $table->integer('empleados');
            $table->integer('sucursales');
            $table->string('emailClient')->unique();
            $table->integer('phone');
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('av_Service', function (Blueprint $table) {
            $table->id();
            $table->integer('numHost');
            $table->integer('numSeg');
            $table->boolean('hp_ids_ips');
            $table->timestamps();
        });

        Schema::create('pt_service', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('numHost');
            $table->integer('numSeg');
            $table->integer('publicaciones');
            $table->boolean('hp_ids_ips');
            $table->integer('arquitectura');
            $table->boolean('retest');
            $table->timestamps();
        });

        Schema::create('ingSoc_service', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('numObjt');
            $table->integer('despliegueCorreo');
            $table->string('clienteCorreo');
            $table->string('seguridad');
            $table->timestamps();
        });

        Schema::create('ancod_service', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('lineasCode');
            $table->string('infraestructura');
            $table->boolean('contenedores');
            $table->string('autenticacion');
            $table->integer('despliegue');
            $table->timestamps();
        });

        Schema::create('af_service', function (Blueprint $table) {
            $table->id();
            $table->integer('equipos');
            $table->date('incidente');
            $table->boolean('apagado');
            $table->boolean('manipulacion');
            $table->string('so');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acces_group');
        Schema::dropIfExists('clientes_group');
        Schema::dropIfExists('av_Service');
        Schema::dropIfExists('pt_service');
        Schema::dropIfExists('ingSoc_service');
        Schema::dropIfExists('ancod_service');
        Schema::dropIfExists('af_service');
        
    }
};
