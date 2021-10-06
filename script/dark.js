function Dark(){
const bttn = document.querySelector('#check');

let ahref = document.querySelectorAll('a');


bttn.addEventListener('click',function(){
	
	// Реализовать проверку всех ссылок на наличие атрибута:
	//if(document.documentElement.hasAttribute('data-theme') && [...ahref.childNodes].hasAttribute('data-theme')){
	
	if(document.documentElement.hasAttribute('data-theme')){
		document.documentElement.removeAttribute('data-theme');
		ahref.forEach(a =>{
			a.removeAttribute('data-theme');
		}); 
		
	}else{
		document.documentElement.setAttribute('data-theme','dark');
		
		ahref.forEach(a =>{
			a.setAttribute('data-theme','dark');
		}); 
	}
})	
}

Dark();

