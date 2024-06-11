	let select_btn = document.getElementById('select_btn');

	document.addEventListener('DOMContentLoaded', function() {
	    const labels = document.querySelectorAll('.selectLabel');
	    labels.forEach(label => {
	        const input = label.querySelector('input[type="radio"]');
	        input.addEventListener('change', function() {
	            labels.forEach(l => l.classList.remove('selected'));
	            if (input.checked) {
	                label.classList.add('selected');
	                let labelForInput = label.querySelector('p');
	                select_btn.innerHTML = labelForInput.innerHTML + '<i class="fa-solid fa-chevron-down"></i>';
	            }
	        });
	    });
	});
	select_btn.addEventListener('click', function(){
		let options_content = document.getElementById('options_content');
		if(options_content.classList.contains('visible')){
			options_content.classList.remove('visible');
		} else{
			options_content.classList.add('visible');
		}
	});