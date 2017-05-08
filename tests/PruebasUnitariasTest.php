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
    /**
     * Funcion para el text del poryecto con respecto a los usuarios
     */
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
        $game = User::where('email', "jhon@hotmail.com")->first();
        $game->delete();
    }

    /**
     * Funcion para el test con respecto al juego
     */
    public function testModeloJuego() {
        $juego = new Juego();
        $juego->save();
        $this->seeInDatabase('juegos', ['id' => $juego->id]);
        $game = Juego::find($juego->id)->first();
        $game->delete();
    }

    /**
     * Funcion para el test con respecto a los alimentos
     */
    public function testModeloAlimento() {
        $alimento = new Alimentos();
        $alimento->nombre="pera";
        $alimento->numero_calorias="1350";
        $alimento->descripcion="alta en fibra";
        $alimento->save();
        $this->seeInDatabase('alimentos', ['id' => $alimento->id]);
        $game = Alimentos::where('nombre', "pera")->first();
        $game->delete();
    }

    /**
     * Funcion para el test con respecto a las desiciones
     */
    public function testModeloDesiciones() {
        $desicion = new Desicion();
        $desicion->nivel="1";
        $desicion->numero="3";
        $desicion->nombre="bueno";
        $desicion->save();
        $this->seeInDatabase('desicions', ['id' => $desicion->id]);
        $game = Desicion::where('nombre', "bueno")->first();
        $game->delete();
    }

    /**
     * Funcion para el test con respecto a los tips
     */
    public function testModeloTips() {
        $tips = new Tip();
        $tips->nivel="1";
        $tips->numero="3";
        $tips->recomendacion="no dormir tanto";
        $tips->save();
        $this->seeInDatabase('tips', ['id' => $tips->id]);
        $game = Tip::where('recomendacion', "no dormir tanto")->first();
        $game->delete();
    }
}