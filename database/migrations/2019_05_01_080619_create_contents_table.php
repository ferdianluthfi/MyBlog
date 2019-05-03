<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("title");
            $table->text("content");
            $table->timestamps();
        });
        \DB::table('contents')->insert(
            ['title' => 'ABOUT ME','content' => "My name is Luthfi Ferdian, everyone is now calling me UPI. I'am a student of Universitas Indonesia faculty of Computer Science. this website is dedicated for KOTA's internship assignment. Just scroll if you wanna know more!"]
        );
        \DB::table('contents')->insert(
            ['title' => 'Proyek Pengembangan Sistem Informasi','content' => "Proyek Pengembangan Sistem Informasi (PROPENSI) is one of the subjects that must be taken by Information System students of the University of Indonesia. From this experience I got a lesson in building an information system from 0 to be used optimally by the users in a real world company."]
        );
        \DB::table('contents')->insert(
            ['title' => 'Enterprise Application Programming and Architecture','content' => "I learn a lot about fullstack development in this project. My project is to code a fictitious Information System, specifically an Hospital System. Find more at tugasakhirapap49.herokuapp.com"]
        );
        \DB::table('contents')->insert(
            ['title' => 'Redesigning Website','content' => "I once have to redesigning a website. I have to analize this website so that it can has a better UI/UX. In my case, the website is PKPU.org"]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
