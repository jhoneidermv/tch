<?php

namespace App\Http\Controllers;

use App\Juego;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Desicion;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;


class JuegoController extends Controller
{
    var $recomendacion1="Las personas deben dormir entre 7 y 8 horas, esto con el fin de que el cuerpo descanse 
    lo suficiente";
    var $recomendacion2="El pan y el café a esta hora de la mañana es poco recomendable debido a que las harinas 
    engordan y no nutren";
    var $recomendacion2_1="El desayuno es el alimento mas importante del día, por lo tanto no se debe omitir, el cuerpo 
    lleva mas de 8 horas sin recibir ningun alimento";
    var $recomendacion3="El café puede provocar úlceras, puede dañar el tracto gastro intestinal u otros tipos de 
    irritación en el estomago o intestino, ademas de irritacion y ansiedad";
    var $recomendacion4="La bandeja paisa tiene demasiados carbohidratos y calorias, es mas recomendable sopa pastas, 
    verduras, pollo y jugos naturales";
    var $recomendacion5="La gaseosa tiene un nivel de azucar demasiado alto, es mas recomendable jugos naturales";
    var $recomendacion6="El cuerpo utiliza los carbohidratos como fuente de energia, si el exceso de calorias es mayor,
     se almacena como grasa, es recomendable consumir fruta";
    var $recomendacion7="Por el trabajo diario de una persona, es recomendable realizar una rutina de ejercicios para 
    que los musculos descanses del estres que genera el trabajo";
    var $recomendacion8="La comida chatarra en la noche no es recomendable porque nos encontramos proximos a dormir y da 
    digestion no se produce como deberia";
    var $recomendacion8_1="Las ensaladas de frutas con helado no son recomendable por la combinación de frutas y los 
    azucares y al estar proximos a dormir la digestion no se realiza de la manera que es";
    var $recomendacion8_3="Es recomendable comer pequeñas porciones de pescado o filete de pollo, acompañado de una 
    ensalada de frutas";
    var $recomendacion9="Al comer en la noche es recomendable esperar hasta 2 horas para acostarse a dormir";

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start($ide)
    {
        $juego= new Juego();
        $juego->user_id=$ide;
        $juego->save();
        return view('user/juego/start');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start1(Request $request,$ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=1;

        if($ide === "2") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start12');
        }

        if($ide === "1") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start11');
        }
        return view('user/juego/start');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start2(Request $request)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=2;
        $desi->numero=0;
        $desi->juego_id=$juegos->get()->last()->id;
        $desi->save();
        return view('user/juego/start2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start21(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=2;

        if($ide === "3") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start21');
        }

        if($ide === "4") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start22');
        }

        if($ide === "5") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start23');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start3(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=3;

        if($ide === "6") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start3');
        }

        if($ide === "7") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start31');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start4(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=4;

        if($ide === "8") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start4');
        }

        if($ide === "9") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start41');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start5(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=5;

        if($ide === "10") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start5');
        }

        if($ide === "11") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start51');
        }

        if($ide === "12") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start52');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start6(Request  $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=6;

        if($ide === "13") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start6');
        }

        if($ide === "14") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start61');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start7(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=7;

        if($ide === "15") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start7');
        }

        if($ide === "16") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start71');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start8(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=8;

        if($ide === "17") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start8');
        }

        if($ide === "18") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start81');
        }

        if($ide === "19") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start82');
        }

        if($ide === "20") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start83');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start91(Request $request, $ide)
    {
        $juegos=$request->user()->juegos();
        $desi= new Desicion();
        $desi->nivel=9;

        if($ide === "21") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start91');
        }

        if($ide === "22") {
            $desi->numero=$ide;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();
            return view('user/juego/start92');
        }
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function resultadoFinal(Request $request)
    {
        $desiciones=Desicion::where('juego_id',$request->user()->juegos()->get()->last()->id)->get();
        $recomendaciones=array();

        foreach ($desiciones as $desicion){
            if($desicion->nivel==1 && $desicion->numero==1) {
                $recomendaciones[] = $this->recomendacion1;
            }
            if($desicion->nivel==2 && $desicion->numero==3) {
                $recomendaciones[] = $this->recomendacion2;
            }

            if ($desicion->nivel==2 && $desicion->numero==5) {
                $recomendaciones[] = $this->recomendacion2_1;
            }

            if($desicion->nivel==3 && $desicion->numero==6) {
                $recomendaciones[] = $this->recomendacion3;
            }

            if($desicion->nivel==4 && $desicion->numero==9) {
                $recomendaciones[] = $this->recomendacion4;
            }

            if($desicion->nivel==5 && $desicion->numero==10) {
                $recomendaciones[] = $this->recomendacion5;
            }

            if($desicion->nivel==6 && $desicion->numero==13) {
                $recomendaciones[] = $this->recomendacion6;
            }

            if($desicion->nivel==7 && $desicion->numero==16) {
                $recomendaciones[] = $this->recomendacion7;
            }

            if($desicion->nivel==8 && $desicion->numero==17) {
                $recomendaciones[] = $this->recomendacion8;
            }elseif ($desicion->nivel==8 && $desicion->numero==18) {
                $recomendaciones[] = $this->recomendacion8_1;
            }elseif ($desicion->nivel==8 && $desicion->numero==20) {
                $recomendaciones[] = $this->recomendacion8_3;
            }

            if($desicion->nivel==9 && $desicion->numero==21) {
                $recomendaciones[] = $this->recomendacion9;
            }
        }
        return view('user/juego/resultadoFinal')->with('recomendaciones', $recomendaciones);
    }
}
