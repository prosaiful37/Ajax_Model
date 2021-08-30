(function($){
	$(document).ready(function(){

		//single data show modal
		$('a#singleshow').click(function(){
			$('#single_modal_student').modal('show');
		});

		//modal show
		$('modal#addEmployeeModal').show();

		//alert function
		function msgAlert(msg, type = 'success'){
			return "<p class=\"alert alert-'+ type +'\">"+ msg +" ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>"
		}


		//add new student
		$('form#add_student_form').submit(function(e){
			e.preventDefault();
			
			//get some input filed value
			let name = $('input[name="name"]').val();
			let email = $('input[name="email"]').val();
			let address = $('input[name="address"]').val();
			let cell = $('input[name="cell"]').val();

			if (name == '' || email == '' || address == '' || cell == '') {
				$('.mess').html(msgAlert('All filelds are required'));
			}else{

				$.ajax({
					url : 'inc/ajax/student_add.php',
					method : 'POST',
					data : new FormData(this),
					contentType : false,
					processData : false,
					success : function(data){

						$('form#add_student_form')[0].reset();
						$('.mess').html(data);

						
					}

				});
			}




		});










	});
})(jQuery)