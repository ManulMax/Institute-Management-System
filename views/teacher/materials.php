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
  <div class="leftNav">
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
	
	
  </div>
  <div class="headerClass">
	  <h2 style="text-indent:10px;margin-top:8px;margin-left:18%;position:absolute;"><i class="fas fa-upload"></i>Upload Materials</h2>
	  <div style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-sign-out-alt fa-2x"></i></div>
	  <div class="userDiv" style="margin-top:7px;float: right;margin-right: 40px;"><i class="fas fa-user fa-2x"></i>Hello Teacher ;-)</div>
  </div>
  
  
  
  
  <div class="middle" style="background-color:white;width:53%;padding-left: 40px;padding-right: 40px;">


			
        <?php

        $files = glob("http://localhost/IMS_Vidarsha/public/uploads/*");
       
         while($row = mysqli_fetch_assoc($this->materialList)){ 
          ?>  
             <h3><i class="fas fa-book-open"></i><?php echo $row['heading'] ?></h3>
             <p style="color: #2F4F4F;padding-left: 10px;"><?php echo $row['description'] ?></p>
             <p><i class="far fa-file-pdf"></i><a href="http://localhost/IMS_Vidarsha/public/uploads/<?php echo $row['name'] ?>" style="text-decoration: none;text-transform: uppercase;"><?php echo $row['name'] ?></a></p>
             <hr />
        <?php  } ?>
	
  </div>
  
  
  
  <div class="right" style="background-color:#2F4F4F;width:30%;">
  
 <!-- ------ form ------ --> 
 <h2 style="text-indent:10px;"><i class="fas fa-upload"></i>Upload New Material</h2>
	  <form method="post" enctype="multipart/form-data" action="<?php echo URL; ?>materials/create">
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
<script src="<?php echo URL; ?>public/libraries/file-upload-with-preview-master/dist/file-upload-with-preview.min.js"></script>
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