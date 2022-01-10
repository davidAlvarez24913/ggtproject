
const data = document.querySelector('.data').value;
const obj_data = JSON.parse(data);

console.log(sessionStorage.setItem('data',data));

sessionStorage.setItem('data',data); 
