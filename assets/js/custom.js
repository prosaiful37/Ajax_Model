(function($){
	$(document).ready(function(){


		//single data show
		$(document).on('click','a#singleshow', function(){
			$('#single_modal_student').modal('show');


			let student_view = $('a#singleshow').attr('single_student');

			$.ajax({
				url : 'inc/ajax/single_show.php',
				method : 'POST',
				data : { id : student_view },				
				success : function(data){
					
					let single_data = JSON.parse(data);

					$('img#single_student_img').attr('src', 'media/students/' + single_data.photo);
					$('h3#single_name').text(single_data.name);
					$('td#single_name').text(single_data.name);
					$('td#single_email').text(single_data.email);
					$('td#single_address').text(single_data.address);
					$('td#single_phone').text(single_data.cell);

					




				}
			});




			return false
		});

		//single data show
		// $(document).on('click','a#delete_student', function(){
		// 	$('table#stunet_del').modal('show');

		// 	return false
		// });



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
						// showAllStudentData();

						
					}

				});
			}




		});

		//show all data connection
		function showAllStudentData(){
			$.ajax({
			url : "inc/ajax/show_all.php",
			success : function(data) {
				$('tbody#show_all_student').html(data);

			 }

		   });


	}
	showAllStudentData();


	// //delete student
	// $(document).on('click','a#delete_student',function(){

	// 	let btn = $('input#').val();
	// 	let delete_id = $(this).attr('delete_st');

	// 		$.ajax({
	// 			url : 'inc/ajax/delete_student.php',
	// 			method : 'POST',
	// 			data : { id : delete_id },
	// 			success : function(data){

	// 				$('.mess-all').html("<p class='alert alert-success'> Student Data Delete Successful! <button class='close' data-dismiss='alert'>&times;</button></p>");
	// 			}
	// 		});
		
	// 	return false;
	// });
	
		










	});
})(jQuery)