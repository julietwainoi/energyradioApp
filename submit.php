<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="submit, nrg">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>submit</title>

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/submit.css">
         
</head>

<body>
    <div class="topbar"> 
        <h1 class="text">To submit fill in the following details:</h1>
    </div>

      
            
      
          
<!--         
       <h2 style="text-align:center;">profile picture:</h2>
        <div  style="margin-left:550px;"id="profile-container">
          
          <image id="profileImage" src="./images/empty profile.png" alt="image1" class="img-fluid">
       </div>
       <input id="imageUpload" type="file" 
              name="profile_photo" placeholder="Photo" required="" capture> -->
              

        
          
<div class="container">
  
        <form  class="form-group" action="./controller/submit_data.php" method="POST">
          <input type="hidden" name="_token" value="assddfghhldfltglptttprfedwsws">
            <h2 class="text">Personal data:</h2>
            
            <div class="form-group ">
            <label for="fname" >Full Name:</label><br>
            <input type="text" id="fname" class="form-control" name="fname" placeholder="full Name" required="" ><br>
            </div>
          <div class="form-group ">
            <label for="email">Email:</label><br>
            <input type="text" id="email" class="form-control" name="email" placeholder="email" required=""><br>
        </div>
        <div class="form-group">
            <label for="phonenumber">phone number:</label><br>
            <input type="number" id="phonenumber" class="form-control" name="phonenumber" placeholder="phone number" required="">
        </div>
        <div class="form-group">

          <label for="link">Link to Your Instagram, Facebook or Twitter Video,Google drive link for documents (#NRGeticMVPs)</label>
            <input type="url" id="link" class="form-control" name="link" placeholder="Link ">
          <small>You have to tag<span class="text-primary">@choiceradioke</span> on social media platforms  </small>
        </div>
        <div class="form-group">
          <div class="form-check">
              <input class="form-check-input" type="checkbox" value="yes" name="terms" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              <a href="/terms">I agree to Terms and Conditions</a>
              </label>
          </div>
            </div>

            
            </div> 
            <h2>upload your work below:</h2>
            <!-- <div>
              <input type="file" id="real-file" hidden="hidden"required/>
              <button type="button" id="custom-button">CHOOSE A FILE</button>
              <span id="custom-text">No file chosen yet</span>
            </div> -->
            <div class="submit"> 
            <input type="submit" class="btn btn-link" name="submit" value="submit">
            </div>
</form>
            
          

            


      <!-- <script >
        $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
})
const realfile=document.getElementById("real-file")
const custombtn = document.getElementById("custom-button")
const customtext=document.getElementById("custom-text")

custombtn.addEventListener("click",function() {
  realfile.click();

});
realfile.addEventListener("change",function(){
  if(realfile.value){
    customtext.innerHTML= realfile.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
  }else{
    customtext.innerHTML="no file chosen yet";
  }
});



      </script>   -->

    
  
    
</body>
</html>