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
    var $recomendacion1="Las personas deben dormir entre 7 y 8 horas, esto con el fin de que el cuerpo descanse lo suficiente";
    var $recomendacion2="El pan y el café a esta hora de la mañana es poco recomendable debido a que las harinas engordan y no nutren";
    var $recomendacion2_1="El desayuno es el alimento mas importante del día, por lo tanto no se debe omitir, el cuerpo lleva mas de 8 horas sin recibir ningun alimento";
    var $recomendacion3="El café puede provocar úlceras, puede dañar el tracto gastro intestinal u otros tipos de irritación en el estomago o intestino, ademas de irritacion y ansiedad";
    var $recomendacion4="La bandeja paisa tiene demasiados carbohidratos y calorias, es mas recomendable sopa pastas, verduras, pollo y jugos naturales";
    var $recomendacion5="La gaseosa tiene un nivel de azucar demasiado alto, es mas recomendable jugos naturales";
    var $recomendacion6="El cuerpo utiliza los carbohidratos como fuente de energia, si el exceso de calorias es mayor, se almacena como grasa, es recomendable consumir fruta";
    var $recomendacion7="Por el trabajo diario de una persona, es recomendable realizar una rutina de ejercicios para que los musculos descanses del estres que genera el trabajo";
    var $recomendacion8="La comida chatarra en la noche no es recomendable porque nos encontramos proximos a dormir y da digestion no se produce como deberia";
    var $recomendacion8_1="Las ensaladas de frutas con helado no son recomendable por la combinación de frutas y los azucares y al estar proximos a dormir la digestion no se realiza de la manera que es";
    var $recomendacion8_3="Es recomendable comer pequeñas porciones de pescado o filete de pollo, acompañado de una ensalada de frutas";
    var $recomendacion9="Al comer en la noche es recomendable esperar hasta 2 horas para acostarse a dormir";


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function create()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start($id)
    {

        $juego= new Juego();
        $juego->user_id=$id;
        $juego->save();


        return view('user/juego/start');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start1(Request $request,$id)
    {

        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=1;

        if ($id === "2"){


            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start12');
        }

        if($id === "1"){


            $desi->numero=$id;
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


    public function start12($id)
    {
    $this->desicion1=$id;
    return view('user/juego/start12')->with('desicion1',$this->desicion1);
    }
     */


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
    public function start21(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=2;

        if($id === "3"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start21');
        }

        if($id === "4"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start22');
        }

        if($id === "5"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start23');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function start22($id)
    {
        $this->desicion2=$id;
        return view('user/juego/start22');
    }
     * */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function start23($id)
    {
        $this->desicion2=$id;
        return view('user/juego/start23');
    }
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function start3(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=3;

        if($id === "6"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start3');
        }

        if($id === "7"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start31');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response

    public function start31($id)
    {
        $this->desicion3=$id;
        return view('user/juego/start31');
    }
     */



    public function start4(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=4;

        if($id === "8"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start4');
        }

        if($id === "9"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start41');
        }

    }

    /**
    public function start41($id)
    {
        $this->desicion4=$id;
        return view('user/juego/start41');
    }
     */

    public function start5(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=5;

        if($id === "10"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start5');
        }

        if($id === "11"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start51');
        }

        if($id === "12"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start52');
        }

    }

    /**
    public function start51($id)
    {
        $this->desicion5=$id;
        return view('user/juego/start51');
    }

    public function start52($id)
    {
        $this->desicion5=$id;
        return view('user/juego/start52');
    }

     */

    public function start6(Request  $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=6;

        if($id === "13"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start6');
        }

        if($id === "14"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start61');
        }
    }

    /**
    public function start61($id)
    {
        $this->desicion6=$id;
        return view('user/juego/start61');
    }
    */


    public function start7(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=7;

        if($id === "15"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start7');
        }

        if($id === "16"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start71');
        }
    }

    /**
    public function start71($id)
    {
        $this->desicion7=$id;
        return view('user/juego/start71');
    }
     */

    public function start8(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=8;

        if($id === "17"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start8');
        }

        if($id === "18"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start81');
        }

        if($id === "19"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start82');
        }

        if($id === "20"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start83');
        }

    }

    /**
    public function start81($id)
    {
        $this->desicion8=$id;
        return view('user/juego/start81');
    }

    public function start82($id)
    {
        $this->desicion8=$id;
        return view('user/juego/start82');
    }

    public function start83($id)
    {
        $this->desicion8=$id;
        return view('user/juego/start83');
    }
    */

    public function start91(Request $request, $id)
    {
        $juegos=$request->user()->juegos();

        $desi= new Desicion();
        $desi->nivel=9;

        if($id === "21"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start91');
        }

        if($id === "22"){
            $desi->numero=$id;
            $desi->juego_id=$juegos->get()->last()->id;
            $desi->save();

            return view('user/juego/start92');
        }
    }

    /**
    public function start92($id)
    {
        $this->desicion9=$id;
        return view('user/juego/start92');
    }
     */

    public function resultadoFinal(Request $request)
    {
        $desiciones=Desicion::where('juego_id',$request->user()->juegos()->get()->last()->id)->get();

        $recomendaciones=array();

        foreach ($desiciones as $desicion){

            if($desicion->nivel==1 && $desicion->numero==1){
                $recomendaciones[] = $this->recomendacion1;
            }

            if($desicion->nivel==2 && $desicion->numero==3){
                $recomendaciones[] = $this->recomendacion2;
            }

            if ($desicion->nivel==2 && $desicion->numero==5){
                $recomendaciones[] = $this->recomendacion2_1;
            }

            if($desicion->nivel==3 && $desicion->numero==6){
                $recomendaciones[] = $this->recomendacion3;
            }

            if($desicion->nivel==4 && $desicion->numero==9){
                $recomendaciones[] = $this->recomendacion4;
            }

            if($desicion->nivel==5 && $desicion->numero==10){
                $recomendaciones[] = $this->recomendacion5;
            }

            if($desicion->nivel==6 && $desicion->numero==13){
                $recomendaciones[] = $this->recomendacion6;
            }

            if($desicion->nivel==7 && $desicion->numero==16){
                $recomendaciones[] = $this->recomendacion7;
            }

            if($desicion->nivel==8 && $desicion->numero==17){
                $recomendaciones[] = $this->recomendacion8;
            }elseif ($desicion->nivel==8 && $desicion->numero==18){
                $recomendaciones[] = $this->recomendacion8_1;
            }elseif ($desicion->nivel==8 && $desicion->numero==20){
                $recomendaciones[] = $this->recomendacion8_3;
            }

            if($desicion->nivel==9 && $desicion->numero==21){
                $recomendaciones[] = $this->recomendacion9;
            }
        }


        return view('user/juego/resultadoFinal')->with('recomendaciones',$recomendaciones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
