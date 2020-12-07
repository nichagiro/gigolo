//////CONTACT FORM VALIDATION
var form = document.getElementById('form');
form.addEventListener('submit',function(e){
	
	e.preventDefault();

	let data = new FormData(form);


	fetch('php/contact.php',{
		method:'POST',
		body:data
	}).then(res => res.json())
		.then(data => {
			
			if(data == 'ok'){

				const info = document.getElementById('success');
				info.style.display = 'block';

				form.style.display = 'none';
				danger.style.display = 'none';


			}	else {

				const danger = document.getElementById('danger');
				danger.style.display = 'block';


			}
			

		})

})
