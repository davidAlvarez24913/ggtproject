<?php
    // https://www.youtube.com/watch?v=X9n79_qXN10&ab_channel=AlphaDeveloper

use App\Models\Encuesta;

function saludar($arr): array {
        $arr =array(1,2,3);
        return $arr;
    }
    function jerarquizarPonderizar($recuperado):array{
        //  funcion recibe un arreglo
        // para recuperar cadenas y tranformaslas en arreglo asociativos
        $max_id = max(array_values(json_decode(Encuesta::all(['id']),true)));
        // dump($max_id);
        // dump($recuperado['id']);
        // dd($recuperado);

        $id_registro_ficha = ($recuperado['id'] != null)? $recuperado["id"]: $max_id['id']+1;
        $recuperado4 = $recuperado['pregunta4'];
        $recuperado5 = $recuperado['pregunta5'];
        $recuperado6 = $recuperado['pregunta6'];
        $recuperado7 = $recuperado['pregunta7'];
        
        // ------------ sección 4
        // dd( var_dump($recuperado4));
        $pregunta4_4 = ['general', 'discapacidad_fisica', 'discapacidad_visual', 'discapacidad_auditiva', 'intelectual_psicosocial', 'no_accesible'];
        $val = 0 ;
        $aux4_4 = array();

        $arr_pregunta4 = json_decode($recuperado4, true);
        // dump($arr_pregunta4['estado_4-5']);

        $llaves = array_keys($arr_pregunta4);
        // dump($llaves);
        foreach($llaves as $l){
            if(in_array($l,$pregunta4_4)){
                array_push($aux4_4,$l);
            }
        }
        // dd($aux4_4);
        foreach($aux4_4 as $r){
            if($r == "general"){ $val+=2; }
            if($r == "discapacidad_fisica"){$val+=1;}
            if($r == "discapacidad_visual"){ $val+=1; }
            if($r == "discapacidad_auditiva"){ $val+=1; }
            if($r == "intelectual_psicosocial"){ $val+=1;}
            if($r == "no_accesible"){ $val =0; }
        }
        // dd('calficiacion: '.$val);
        // dump(in_array('estado_4-5',$llaves));
        $puntacion4_5 = in_array('estado_4-5',$llaves)? $arr_pregunta4['estado_4-5'] : 0;
        // dump('calfificacion 4.5: '.$puntacion4_5);
        $ponderacion4 = $val + $puntacion4_5;
        // dump('ponderacion 4: '.$ponderacion4);
        // ------------------------------------------------------------sección 5 ---------------------------------------------------------------------------------------
        $arr_pregunta5 = json_decode($recuperado5, true);
        $llaves_5 = array_keys($arr_pregunta5);
        $val5_1 =0;
        // dump($arr_pregunta5);
        $a5_1 = ['hotel', 'hostal', 'hosteria', 'hacienda_turistica', 'lodge', 'resort', 'refugio', 'campamento_turistico', 'casa_huespedes'];
        $a5_2 = ['hotel_b', 'hostal_b', 'hosteria_b', 'hacienda_turistica_b', 'lodge_b', 'resort_b','refugio_b', 'campamento_turistico_b', 'casa_huespedes_b'];
        $b5_1 = [ 'restaurantres', 'cafeterias', 'bares', 'fuentes_soda'];
        $b5_2 = ['restaurantres_b', 'cafeterias_b', 'bares_b', 'fuentes_soda_b'];
        $c5_1 = ['mayoristas', 'internacionales','operadores'];
        $c5_2 = ['mayoristas_b', 'internacionales_b', 'operadores_b'];
        $d5_1 = ['guia'];
        $d5_2 = ['guia_b'];
        // ciclo para recuperar las keys recuperados de la BD
        $pregunta5_1 = array();
        array_push($pregunta5_1, $a5_1, $a5_2, $b5_1, $b5_2, $c5_1, $c5_2, $d5_1, $d5_2);
        
        // dump($pregunta5_1[0]);
        // dd($pregunta5_1) ;

        foreach($pregunta5_1 as $p_arr){
            if( array_intersect($llaves_5, $p_arr) != null){
                $val5_1 += 1.5;
            }
        }

        // dump($val5_1);
        //  5.2 facilidades entorno atractivo
        $val5_2 =0;
        $p5_2_a = ['punto_informacion', 'l-tur', 'centro_interpretacion', 'facilitacion_turistica', 'recepcion', 'cantidad', 'corrdenadas', 'administrador'];
        $p5_2_b=  ['baterias_sanitarias', 'estacionamientos', 'cantidad', 'corrdenadas', 'administrador'] ;
        $p5_2_c=  ['guardiania', 'miradores', 'torres_aves', 'torres_salvavidas', 'cantidad', 'corrdenadas', 'administrador'] ;
        $p5_2_d = ['senderos', 'sombra', 'acampar', 'refugios', 'cantidad_d', 'corrdenadas_d', 'administrador_d'];
        $p5_2_e=  ['cantidad_e', 'corrdenadas_e', 'administrador_e'] ;
        $pregunta5_2 = array($p5_2_a , $p5_2_b, $p5_2_c, $p5_2_d, $p5_2_e);

        foreach($pregunta5_2 as $p_arr){
            if( array_intersect($llaves_5, $p_arr) != null){
                $val5_2 += 0.6;
            }
        }
        // dump($val5_2);
        //  5.3 Complementarios a la actividad turística (M)
        $val5_3 = 0 ;
        $p5_3_a = ['equipamiento_atrac', 'artesanias_atrac', 'casa_cambio_atrac', 'cajero_atrac', 'otro_atrac'];
        $p5_3_b = ['equipamiento_cui', 'artesanias_mas_cercano', 'casa_cambio_mas_cercano', 'cajero_mas_cercano', 'otro_mas_cercano'];
        $pregunta5_3 = array($p5_3_a, $p5_3_b);
        foreach($pregunta5_3 as $p_arr){
            if( array_intersect($llaves_5, $p_arr) != null){
                $val5_3 += 1.5;
            }
        }    
        // dump($val5_3);
        $ponderacion5 = $val5_2 + $val5_3 + $val5_1;
        // dump('ponderacion 5: '.$ponderacion5);
        // ------------------------------------------------------------sección 6 ---------------------------------------------------------------------------------------
        $arr_pregunta6 = json_decode($recuperado6, true);
        $llaves_6 = array_keys($arr_pregunta6);
        $p6_a = 'pregunta6_2_a';
        $p6_b = 'pregunta6_2_b';
        // $pregunta6 = array($p6_a, $p6_b);
        $val_6 = 0;
        in_array($p6_a,$llaves_6) ? $val_6 += $arr_pregunta6[$p6_a]: $val_6 +=0 ;

        in_array($p6_b,$llaves_6) ? $val_6 += $arr_pregunta6[$p6_b]: $val_6 +=0 ;
        
        // dump('pregunta 6:'.$val_6);
        $ponderacion6 = $val_6;
        // dump('ponderacion 6: '.$ponderacion6);
        //-----------------------------------sección 7 -------------------
        $p7_1_a = ['p7_1-a_agua', 'p7_1-a_energia', 'p7_1-a_especifique_agua', 'p7_1-a_especifique_energia', 'p7_1-a_saneamiento', 'p7_1-a_desechos', 'p7_1-a_especifique_saneamieno', 'p7_1-a_especifique_desechos', 'observaciones'];
        $p7_1_b =['p7_1-b_agua', 'p7_1-b_energia', 'p7_1-b_observacion1', 'p7_1-b_observacion2', 'p7_1-b_saneamiento', 'p7_1-b_desechos', 'p7_1-b_observacion3', 'p7_1-b_observacion4', 'observaciones'];
        
        $arr_pregunta7 = json_decode($recuperado7, true);
        $llaves_7 = array_keys($arr_pregunta7);

        $val7_1 = 0;

        $pregunta7_1 = array($p7_1_a,$p7_1_a);
        foreach($pregunta7_1 as $p_arr){
            if( array_intersect($llaves_7, $p_arr) != null){
                $val7_1 += 1.5;
            }
        }    
        // dump('pregunta 7 1:'.$val7_1);

        // ---------sección 7.2 senialectica en el atractivo
        $p7_2_a = ['au_madera_inp_0', 'au_madera_inp_1', 'au_madera_inp_2', 'au_madera_inp_3', 'au_madera_inp_4', 'au_madera_inp_5', 'au_madera_inp_6', 'au_madera_inp_7', 'au_aluminio_inp_0', 'au_aluminio_inp_1', 'au_aluminio_inp_2', 'au_aluminio_inp_3', 'au_aluminio_inp_4', 'au_aluminio_inp_5', 'au_aluminio_inp_6', 'au_aluminio_inp_7', 'au_otro_inp_0', 'au_otro_inp_1', 'au_otro_inp_2', 'au_otro_inp_3', 'au_otro_inp_4', 'au_otro_inp_5', 'au_otro_inp_6', 'au_otro_inp_7'];
        $p7_2_b = ['an_madera_inp_0', 'an_madera_inp_1', 'an_madera_inp_2', 'an_madera_inp_3', 'an_madera_inp_4', 'an_madera_inp_5', 'an_madera_inp_6', 'an_madera_inp_7', 'an_madera_inp_8', 'an_madera_inp_9', 'an_madera_inp_10', 'an_madera_inp_11', 'an_madera_inp_12', 'an_madera_inp_0', 'an_madera_inp_1', 'an_madera_inp_2', 'an_madera_inp_3', 'an_madera_inp_4', 'an_madera_inp_5', 'an_madera_inp_6', 'an_madera_inp_7', 'an_madera_inp_8', 'an_madera_inp_9', 'an_madera_inp_10', 'an_madera_inp_11', 'an_madera_inp_12', 'au_otro_inp_0', 'au_otro_inp_1', 'au_otro_inp_2', 'au_otro_inp_3', 'au_otro_inp_4', 'au_otro_inp_5', 'au_otro_inp_6', 'au_otro_inp_7', 'au_otro_inp_8', 'au_otro_inp_9', 'au_otro_inp_10', 'au_otro_inp_11', 'au_otro_inp_12'];
        $p7_2_c = ['info_botanica_madera', 'normativas_madera', 'info_botanica_al', 'normativas_al', 'info_botanica_e', 'normativas_e'];
        $p7_2_d = ['seguridad_madera', 'seguridad_al', 'seguridad_e'];

        $val7_2 = 0;
        $pregunta7_2 = array($p7_2_a , $p7_2_b , $p7_2_c ,$p7_2_d);

        foreach($pregunta7_2 as $p_arr){
            if( array_intersect($llaves_7, $p_arr) != null){
                $val7_2 += 0.6;
            }
        }    
        // dump('pregunta 7_2:'.$val7_2);

        // ---------7.3 Salud (más cercano) (M)
        $p7_3_a = ['hospital_atrac', 'nro_h_atrac', 'ctrsalud_atrac', 'nro_cs_atrac', 'dispensario_atrac', 'nro_dis_atrac', 'botiquin_atrac', 'nro_botiquin_atrac', 'otros_atrac', 'nro_otros_atrac'];
        $p7_3_b = ['hospital_cuidad', 'nro_hosp_cuidad', 'centrsalud_cuidad', 'nro_cs_cuidad', 'dispensario_cuidad', 'nro_dispensario_cuidad', 'botiquin_cuidad', 'nro_botiquin_cuidad', 'otros_cuidad', 'nro_otros_cuidad'];

        $val7_3 = 0;
        $pregunta7_3 = array($p7_3_a , $p7_3_b );

        foreach($pregunta7_3 as $p_arr){
            if( array_intersect($llaves_7, $p_arr) != null){
                $val7_3 += 1.5;
            }
        }    
        // dump('pregunta 7_3: '.$val7_3);

        $ponderacion7 = $val7_3 + $val7_2 + $val7_1;
        // dump('ponderacion 7: '.$ponderacion7);
        return array($id_registro_ficha, $ponderacion4 ,$ponderacion5 ,$ponderacion6 ,$ponderacion7);
    }