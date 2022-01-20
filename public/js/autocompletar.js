 
 var pregunta1_1= ['nombre','categoria', 'tipo', 'subtipo'];
 var pregunta1_2= ['provincia', 'canton', 'parroquia','barrio', 'c_principal', 'numero', 'transversal', 'latitud', 'longitud'];
 var pregunta1_3 = [ 'administrador', 'nombre_admin', 'nombre_institucion', 'cargo', 'email', 'celular', 'observaciones' ];
 const sec1 = [ ... pregunta1_1, ... pregunta1_2, ...pregunta1_3];

//  ----------------Sección 3 ------------------
 var seccion3_1 = ['clima', 'temperatura', 'precipitacion'];
 var seccion3_2 = ['cultura', 'naturaleza', 'aventura'];
 var seccion3_3 = ['pristino', 'primitivo', 'rustico', 'rural', 'urbano'];
 var seccion3_4 = ['tipo_ingreso' ,'ingreso', 'salida', 'todos_los_dias', 'fin_de_semana', 'dias_habiles'];
 var seccion3_5 = ['minomo', 'maximo'];
 var seccion3_6 = ['efectivo', 'dinero_electronico', 'tarjeta_debito', 'tarjeta_credito', 'transferencia_bancaria', 'cheque', 'deposito_bancario', 'meses', 'observaciones'];

//  ----------------Sección 4 ------------------
var pregunta4_1 =['poblado_cercano','distancia_km','tiempo_en_auto'];

var pregunta4_2 =['terrestre', 'coordenada_inicio', 'coordenada_fin', 'distancia', 'tipo_material', 'acuatico', 'puerto_muelle_partida', 
'puerto_muelle_llegada', 'observaciones_acuatico', 'aereo', 'nacional', 'Internacional', 'observaciones_aereo',
'tipo_via', 'select_estado_4_2', 'subtipo_acuatico', 'estado_puerto_partida', 'estado_puerto_llegada'];

var pregunta4_3 = ['bus', 'buseta', 'tranporte_4x4', 'taxi', 'mototaxi', 'teleferico', 'barco', 'lancha','bote', 'canoa', 'avion', 'avioneta', 'helicoptero', 'otro'];
var pregunta4_3_1 = ['name_coop','estacion','diaria', 'semanal', 'mensual', 'eventual', 'detalle'];
var pregunta4_4 = ['general', 'discapacidad_fisica', 'discapacidad_visual', 'discapacidad_auditiva', 'intelectual_psicosocial', 'no_accesible'];
var pregunta4_5 = ['estado_4-5', 'estado_4-5', 'estado_4-5'];

//  ----------------Sección 5 ------------------
var seccion5_1_1 = ['atractivo', 'hotel', 'hostal', 'hosteria', 'hacienda_turistica', 'lodge', 'resort', 'refugio', 'campamento_turistico', 'casa_huespedes', 
                'establecimientos_registrados', 'numero_habitaciones', 'numero_plazas', 'alimentos_bebidas', 'restaurantres', 'cafeterias', 'bares', 'fuentes_soda',
                 'observaciones_alim_bebi', 'establecimientos_registrados', 'numero_habitaciones', 'numero_plazas', 'agencias', 'mayoristas', 'internacionales', 'operadores', 'agencias_establecimientos_registrados'];

var seccion5_1_2 = ['5_1_b', 'hotel', 'hostal', 'hosteria', 'hacienda_turistica', 'lodge', 'resort', 'refugio', 'campamento_turistico', 'casa_huespedes', 'establecimientos_registrados', 'numero_habitaciones', 'numero_plazas',
     'alimentos_bebidas', 'restaurantres', 'cafeterias', 'bares', 'fuentes_soda', 'observaciones_alim_bebi', 'establecimientos_registrados', 'numero_habitaciones', 'numero_plazas', 'agencias', 'mayoristas', 'internacionales', 'operadores', 'agencias_establecimientos_registrados']

var seccion5_2_1 = ['punto_informacion', 'l-tur', 'centro_interpretacion', 'facilitacion_turistica', 'recepcion', 'cantidad', 'corrdenadas', 'administrador','5-2_select_estado'];

var seccion5_2_2 = ['baterias_sanitarias', 'estacionamientos', 'cantidad', 'corrdenadas', 'administrador', '5-2_select_estado'];

var seccion5_2_3 = ['guardiania', 'miradores', 'torres_aves', 'torres_salvavidas', 'cantidad', 'corrdenadas', 'administrador', '5-2_select_estado'];

var seccion5_2_4 = ['cantidad', 'corrdenadas', 'administrador', '5-2_select_estado'];
 
var seccion5_3_1 = ['equipamiento', 'artesanias', 'casa_cambio', 'cajero', 'otro'];

var seccion5_3_2 = ['equipamiento', 'artesanias', 'casa_cambio', 'cajero', 'otro'];

//  ----------------Sección 5 ------------------

var seccion6_1_1 = ['literales_seccion6', 'literales_seccion6', 'literales_seccion6', 'observaciones'];
var seccion6_1_2 = ['foresstal', 'negligencia', 'uso_exposicion', 'residuos', 'industrial_comercial', 'otro', 'erocion', 'humead', 'desastres_naturales', 'flora_fauna', 'clima', 'especifique', 'agricolas_ganaderas', 'industriales', 'conflicto', 'cantaminacion', 'politico_social', 'observaciones', 'mineria', 'huaqueria', 'falta_mantenimiento', 'expansion', 'vandalismo']

var seccion6_2_1 = ['literales_seccion6', 'literales_seccion6', 'literales_seccion6', 'observaciones'];
var seccion6_2_2 = ['forestales', 'abandono', 'uso_exposicion', 'residuos', 'entorno_indus_comercial', 'entorno_observaciones', 'erocion', 'humead', 'desastres_naturales', 'flora_fauna', 'clima', 'entorno_especifique', 'entorno_agricolas', 'entorno_industril', 'entorno_conflicto', 'entorno_contminacion', 'entorno_politico_social', 'entorno_observacione', 'entorno_mineria', 'entorno_huaqueria', 'entorno_falta_mantenimiento', 'entorno_expansion', 'entorno_vandalismo'];

var seccion6_3 = ['declarante', 'denomincacion', 'fecha_declaracion', 'alcance', 'declaratoria_observacion'];
//  ----------------Sección 6 ------------------

//  ----------------Sección 6 ------------------

//  ----------------Sección 6 ------------------

var x = JSON.parse(sessionStorage.getItem('data1__'));
// de aqui quiero los valores
for ( var key in x){

}

const sec1 = [ ... pregunta1_1, ... pregunta1_2, ...pregunta1_3];
// esta linea es para llevar dinamicamente
//   [... document.getElementsByName(nombre_elemento)][0].value =  ;

for (var s of sec1){
     console.log([... document.getElementsByName(s)][0]);
     // console.log(s);
}

for (var clave in x){
     if (x.hasOwnProperty(clave)) {
       console.log("La clave es " + clave+ " y el valor es " + x[clave]);
     }
   }

//    Object.keys(x).length
var nombres_jsDatos = [sec1 , x];

y.map((n,r)=> [... document.getElementsByName(n)][0].value = r );


// buscar los elementos por query selector si su nombre es el mismo del arreglo
// guardar el valor
function llenar(nombre, valor){ 
     let x =[ ...document.getElementsByName(nombre)][0]; 
     x.value = valor; 
     console.log(x); 
     return x;
}