
if(document.querySelector('.data') !== null){
    const data = document.querySelector('.data').value;

    const obj_data = JSON.parse(data);

    console.log(sessionStorage.setItem('data',data));

    sessionStorage.setItem('data',data); 
}else{
    console.log('Algo salio mal ejemplo data, puedes seguir trabajando');
}

