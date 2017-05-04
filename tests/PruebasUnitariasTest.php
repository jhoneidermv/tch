<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;
use App\Juego;
use App\Alimentos;
use App\Desicion;
use App\Tip;
/**
 * Created by PhpStorm.
 * User: Eider
 * Date: 15/04/2017
 * Time: 11:12 PM
 */
class PruebasUnitariasTest extends TestCase

{

    public function testModeloUser(){

        $user= new User();
        $user->name="Jhon Eider Marín";
        $user->email="jhon@hotmail.com";
        $user->password=bcrypt(12345);
        $user->edad=13;
        $user->altura=13.2;
        $user->peso=86.5;
        $user->save();

        $this->seeInDatabase('users', ['id' => $user->id]);

        $e = User::where('email', "jhon@hotmail.com")->first();
        $e->delete();
    }


    public function testModeloJuego()
    {

        $juego = new Juego();

        $juego->save();

        $this->seeInDatabase('juegos', ['id' => $juego->id]);

        $e = Juego::find($juego->id)->first();
        $e->delete();



    }
    public function testModeloAlimento()
    {

        $alimento = new Alimentos();
        $alimento->nombre="pera";
        $alimento->numero_calorias="1350";
        $alimento->descripcion="alta en fibra";
        $alimento->save();

        $this->seeInDatabase('alimentos', ['id' => $alimento->id]);

        $e = Alimentos::where('nombre', "pera")->first();
        $e->delete();



    }

    public function testModeloDesiciones()
    {

        $desicion = new Desicion();
        $desicion->nivel="1";
        $desicion->numero="3";
        $desicion->nombre="bueno";
        $desicion->save();

        $this->seeInDatabase('desicions', ['id' => $desicion->id]);

        $e = Desicion::where('nombre', "bueno")->first();
        $e->delete();



    }
    public function testModeloTips()
    {

        $tips = new Tip();
        $tips->nivel="1";
        $tips->numero="3";
        $tips->recomendacion="no dormir tanto";
        $tips->save();

        $this->seeInDatabase('tips', ['id' => $tips->id]);

        $e = Tip::where('recomendacion', "no dormir tanto")->first();
        $e->delete();



    }





}