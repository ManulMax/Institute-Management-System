<?php
/*	require_once('../../db/dbconfig.php');
	

	
	
	if(isset($_POST['submit'])){
		$heading=$_POST['heading'];
		$name=$_POST['name'];
		$description=$_POST['description'];
		$filename=$_FILES['file']['name'];
		$temp=$_FILES['file']['tmp_name'];
		
		move_uploaded_file($temp, "uploads/".$filename);
		
		$sql="insert into study_materials(heading,name,description,img) values('$heading','$name','$description','$filename')";
		
		//mysqli_query($connection, $sql);
		$result = mysqli_query($connection,$sql);
		
		if($result){
			
			echo "<script> alert('File has been uploaded to folder') </script>";
			
		}else{
			echo "<script> alert('Could not upload file to folder') </script>";
		}
	}

	*/
?>


<html lang="en">
<head>
<title>Study Materials</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://kit.fontawesome.com/b481b35adc.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/teacherNavStylesheet">
<link rel="stylesheet" href="http://localhost/IMS_Vidarsha/public/css/materialsStylesheet">

<link rel="stylesheet" href="<?php echo URL; ?>public/libraries/file-upload-with-preview-master/dist/file-upload-with-preview.min.css">

</head>


<body>

<div class="row">
  <div class="leftNav" style="width:17%;">
  <img src="<?php echo URL; ?>public/img/logo.png" width = "50%" height = "100px" style= "margin-left: 25%">
	<ul>
	  <li><a href="<?php echo URL; ?>teacherHome"><i class="fas fa-home"></i>Dashboard</a></li>
	  <li><a href="<?php echo URL; ?>materials"><i class="fas fa-upload"></i>Upload Materials</a></li>
	  <li><a href="<?php echo URL; ?>createQuiz"><i class="fas fa-question"></i>Quizzes</a></li>
	  <li><a href="<?php echo URL; ?>addNewClass"><i class="fas fa-users"></i>New Class</a></li>
	  <li><a href="<?php echo URL; ?>reschedule"><i class="far fa-calendar-alt"></i>Re-schedule</a></li>
	  <li><a href="<?php echo URL; ?>paperMarkerRegistration"><i class="fas fa-user-edit"></i>Papermarker Registration</a></li>
	  <li><a href="<?php echo URL; ?>salaryDetails"><i class="fas fa-money-bill-wave"></i>Salary Details</a></li>
	</ul>
	<div class="chip"><img src="<?php echo URL; ?>public/icons/Logout.png" alt="Person" width="96" height="96">Log out</div>
	<div class="chip" style: "float:left;"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Profile</div>
  </div>
  <div class="header">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-upload"></i>Study Materials</h2>
	  <div class="chip"><img src="<?php echo URL; ?>public/icons/School Director_30px.png" alt="Person" width="96" height="96">Teacher Name</div>
  </div>
  
  
  
  
  <div class="middle" style="background-color:white;width:53%;">
	<?php
	
		$files = glob("uploads/*.*");

		for ($i=0; $i<count($files); $i++) {
			$filename = $files[$i];
			$file_parts = pathinfo($filename);

			switch($file_parts['extension']){
				case "jpg":
				case "jpeg":
				case "png":
					print $filename ."<br />";
					echo '<img height="100" width="100" src="'.$filename .'" alt="Random image" />'."<br /><br />";
					break;

				case "pdf":
				//$im = new imagick('file.pdf[0]');
				//$im->setImageFormat('jpg');
				//header('Content-Type: image/jpeg');
				//echo '<img height="100" width="100" src="'.$im .'" alt="Random image" />'."<br /><br />";
				echo '<a href="'.$filename.'"><img src="Images/pdf-icon.png" width="100" height="100"></a>'."<br /><br />";
				break;

				case "": // Handle file extension for files ending in '.'
				case NULL: // Handle no file extension
				break;
			}
			
			
			
			//$image = $files[$i];
			//print $image ."<br />";
			//echo '<img height="100" width="100" src="'.$image .'" alt="Random image" />'."<br /><br />";
		}
	
		$sql1 = "Select * from study_materials";
		$result1 = mysqli_query($connection,$sql1);
			
		if(mysqli_num_rows($result1) > 0){
			while($row = mysqli_fetch_assoc($result1)){
				//echo '<h3>'.$row["heading"].'</h3><br /> ';
			}
		} else {
			echo '<h3>No study materials</h3>';
		}
	
	?>
  </div>
  
  
  
  <div class="right" style="background-color:#2F4F4F;width:30%;">
  
 <!-- ------ form ------ --> 
 <h2 style="text-indent:10px;"><i class="fas fa-upload"></i>Upload New Material</h2>
	  <form method="post" enctype="multipart/form-data">
		<div class="row">
		  <div class="col-25">
			<label for="fname">Heading</label>
		  </div>
		  <div class="col-75">
			<input type="text" name="heading">
		  </div>
		</div>
		<div class="row">
		  <div class="col-25">
			<label for="fname">File Name</label>
		  </div>
		  <div class="col-75">
			<input type="text" name="name">
		  </div>
		</div>
		<div class="row">
		<div class="col-25">
			<label for="subject">Description</label>
		  </div>
		  <div class="col-75">
			<textarea placeholder="Write something.." style="height:150px" name="description"></textarea>
		  </div>
		</div>
		<!--	<label>Select to Upload</label>
			<label class="uploadLabel">
				<input type="file" name="file">Choose File
			</label>
			<br />  -->
			
			<div class="custom-file-container" data-upload-id="myUploader" style="padding-left:10px;padding-right:10px;margin:auto;justify-content:center;">


			  <label>Upload File </label>	  

			  <label class="custom-file-container__custom-file" >
				  <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
				  <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="*" name="file">
				  <span class="custom-file-container__custom-file__custom-file-control"></span>
			  </label>
			  <a  id="removeLink" href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">Remove</a>

			  <div class="previewContainer">
				<div class="custom-file-container__image-preview"></div>
			  </div>
			  
			  <input type="submit" class="upload-info-button" name="submit" value="Upload File">

			</div>
			
				
		</form>

		
	</div>
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
<script src="../../public/libraries/file-upload-with-preview-master/dist/file-upload-with-preview.min.js"></script>
<script language="JavaScript">
	var myUpload = new FileUploadWithPreview('myUploader');
	
	var myUploadInfoButton = document.querySelector('.upload-info-button');
myUploadInfoButton.addEventListener('click', function(){
  console.log('Upload:', myUpload, myUpload.cachedFile);
})

var myUpload = new FileUploadWithPreview('myUploader',{
    showDeleteButtonOnImages: true,
    text: { 
      chooseFile: 'Choose file...',
      browse: 'Browse',
      selectedCount: 'files selected'
    },
    maxFileCount: 0,
    images: {
      baseImage: '',
      backgroundImage: '',
      successFileAltImage: '',
      successPdfImage: '',
      //successVideoImage
    },
    presetFiles: [] //  an array of preset images
})


</script>

</html>