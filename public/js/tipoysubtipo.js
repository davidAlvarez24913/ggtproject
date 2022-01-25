const category = document.querySelector('#categoria');
const selectTipo = document.querySelector('#tipo');
const selectSubtipo = document.querySelector('#subtipo');

category.addEventListener('change',(event)=>{
    var opciones =`<option default >Selecione Tipo</option>`;

    if(event.target.value == 'atracciones_naturales'){
        opciones += `
        <option value='montanas' > Montañas</option>
        <option value='desiertos' >Desiertos</option>
        <option value='rios' >Ríos</option>
        <option value='bosques' >Bosques</option>
        <option value='subterraneas' >Aguas Subterraneas</option>
        <option value='espeleologicos' >Fenómenos Espeleológicos</option>
        <option value='geologicos' >Fenómenos Geológicos</option>
        <option value='costas_litorales' >Costas o Litorales</option>
        <option value='ambientes_marinos' >Ambientes Marinos</option>
        <option value='tierras_insulares' >Tierras Insulares</option>`;
    }else{
        opciones += `
        <option value='arquitectura' >Arquitectura</option>
        <option value='acervo' >Acervo cultural y Popular</option>
        <option value='cientificas' >Realizaciones Técnicas y Científicas</option>
        <option value='acontecimientos' >Acontecimientos Programados</option>`;
    }
    selectTipo.innerHTML = opciones;

});

selectTipo.addEventListener('change',(e)=>{
    var opcionesSubtipo =`<option default >Selecione Subtipo</option>`;

    if(e.target.value == 'montanas'){
        opcionesSubtipo += `
        <option value='alta_m' >Alta Montaña</option>
        <option value='media_m' >Media Montaña</option>
        <option value='baj_m' >Baja Montaña</option>
        `;

    }
     if(e.target.value == 'desiertos'){ 
        opcionesSubtipo += `<option value='costero' > Costero</option>
        <option value='interior_desierto' > Del Interior</option>`;
    }
     if(e.target.value == 'rios'){ 
        opcionesSubtipo += `<option value=''></option>
        <option value='rio'>Río</option>
        <option value='riachuelo'>Riachuelo</option>
        <option value='rapido'>Rápido</option>
        <option value='cascada'>Cascada</option>      
        <option value='ribera'>Ribera</option>      
        <option value='delta'>Delta</option>`;
    }
     if(e.target.value == 'bosques'){ 
        opcionesSubtipo += `<option value='paramo'>En Páramo</option>
        <option value='ceja_selva'>Ceja de Selva</option>
        <option value='nublado'>Nublado</option>
        <option value='montano_bajo'>Montano Bajo</option>
        <option value='humedo_tropical'>Húmedo Tropical</option>
        <option value='manglar'>Manglar</option>
        <option value='seco'>Seco</option>
        <option value='petrificado'>Petrificado</option>
        <option value='inundable'>Inundable/Inundado</option>`;
    }
     if(e.target.value == 'subterraneas'){ 
        opcionesSubtipo += `<option value='mineral' >Manantial de Agua Mineral </option>
        <option value='termal' >Manantial de Agua Termal</option>`;
    }
     if(e.target.value == 'espeleologicos'){ 
        opcionesSubtipo += `<option value='cueva' >Cueva o Caverna </option>
        <option value='rio_sub' > Río Subterráneo</option>`;
    }
     if(e.target.value == 'geologicos'){ 
        opcionesSubtipo += `<option value='f_lava' >Flujo de Lava </option>
        <option value='tubo_lava' >Tubo de Lava </option>
        <option value='pliegue' >Escarpa de Falla(pliegue) </option>
        <option value='canion' >Cañón </option>
        <option value='quebrada' >Quebrada</option>
        <option value='quiebre' >Grieta </option>`;
    }
     if(e.target.value == 'costas_litorales'){ 
        opcionesSubtipo += `<option value='playa' >playa </option>
        <option value='acantilado' > acantilado</option>
        <option value='golfo' >golfo </option>
        <option value='bahia' >bahia </option>
        <option value='ensenada' >ensenada</option>
        <option value='canal' >canal </option>
        <option value='estuario' >estuario</option>
        <option value='estero' >estero</option>`;
    }
    else if(e.target.value == 'ambientes_marinos'){ 
        opcionesSubtipo += `<option value='coral' >Arrecife de coral </option>
        <option value='cueva' >Cueva</option>
        <option value='crater' >Cráter </option>
        <option value='acantilado' >Acantilado</option>`;
    }
     if(e.target.value == 'tierras_insulares'){ 
        opcionesSubtipo += `<option value='continental' >Isla continental </option>
        <option value='oceanica' >Isla oceánica </option>
        <option value='islote' >islote </option>
        <option value='roca' >roca </option>`;
    }
     if(e.target.value == 'arquitectura'){ 
        opcionesSubtipo += `<option value='historica' >Histórica/vernácula</option>
        <option value='cultural' >Infraestructura cultural </option>
        <option value='recreativa' >Infraestructura recreativa </option>
        <option value='sociales' >Otras Infraestructuras Sociales </option>
        <option value='area_h' >Area_h </option>
        <option value='area_ar' >Area ar </option>
        <option value='monumentos' >Monumentos </option>
        <option value='espacio_publico' > Espacio publico</option>`;
        
    }
     if(e.target.value == 'acervo'){ 
        opcionesSubtipo += `<option value='etnografia' >Estenografiá</option>
        <option value='religiosas' > religiosas</option>
        <option value='artes' >artes </option>
        <option value='medicina' >medicina </option>
        <option value='mercados' >mercados </option>
        <option value='musica' > música</option>
        <option value='gastronomia' >gastronomía </option>`;
    }
     if(e.target.value == 'cientificas'){ 
        opcionesSubtipo += `<option value='obras' > obras</option>
        <option value='astronomicos' > astronómicos</option>
        <option value='flora' >flora </option>
        <option value='rescate' >Rescate </option>
        <option value='agropecuarios' >agropecuarios </option>
        <option value='insdustriales' >industriales </option>`;
        
    }   
    if(e.target.value == 'acontecimientos') { 
        opcionesSubtipo += `<option value='artisticos' >artísticos </option>
        <option value='congresos' > congresos</option>
        <option value='deportivos' > deportivos</option>
        <option value='eventos_gras' >eventos gastronómico</option>`;
    }
    selectSubtipo.innerHTML = opcionesSubtipo;
    console.log('subtipo event')

} );