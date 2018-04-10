<!DOCTYPE html>
<html>
<head>
	<title>Image Process</title>
	<script type="text/javascript" src="./javascript/jquery-3.2.1.min.js"></script>
</head>
<body>
	<form action="./model/processimg.php" method="post" id="uploadimage" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="submit" value="Submit">
	</form>
	<script type="text/javascript">
		
		// $(document).ready(function (e) {
		//     $('#uploadimage').on('submit',(function(e) {
		//         e.preventDefault();
		//         var formData = new FormData(this);
		//         console.log("abc");
		//         $.ajax({
		//         	url: 'model/processimg.php',
		//             type:'POST',
		//             url: $(this).attr('action'),
		//             data:formData,
		//             cache:false,
		//             contentType: false,
		//             processData: false,
		//             success:function(data){
		//                 console.log("success");
		//                 console.log(data);
		//             },
		//             error: function(data){
		//                 console.log("error");
		//                 console.log(data);
		//             }
		//         });
		//     }));

			//menu click
	
//});
	</script>
</body>
</html>