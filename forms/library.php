<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CVSU Feedback Form - Library</title>
  <link rel="stylesheet" href="/css/libraryFeedbackForm.css">
	<link rel="stylesheet" href="/css/style.css">
  <script src="/forms/interactiveForm.js" defer></script>
  <link rel="shortcut icon" href="/assets/cvsu-logo.png" type="image/x-icon">
</head>
<body>
  <div class="modal" id="myModal">
    <div class="modal-content">
      <div class="green-rectangle"></div>
      <p>Are you sure you want to <br> submit this form?</p>
      <div class="modal-btns">
        <button class="modal-button" id="yes-button" onclick="yesBtnClick()">Yes</button>
        <button class="modal-button" id="no-button" onclick="noBtnClick()">No</button>
      </div>
    </div>
  </div>  

  <div class="body-container" id="body-container">
    <div class="left-div" style="background-image: url(assets/cvsu-lib.png);">
      <img src="assets/cvsu-logo.png" alt="" class="cvsu-logo">
      <div class="green-overlay"></div>
      <p class="cvsu-tagline">
        TRUTH, <br> EXCELLENCE, <br> AND SERVICE.
      </p>
    </div>
    <div class="right-div">    
      <img src="assets/cvsu-logo02.png" alt="" class="cvsu-logo02">
      <div class="form-area">
        LIBRARY  |  AREA OF CONCERN:
      </div>
      
      <form id="questionnaire-form" action="feedback.php" method="post" class="agile_form">
        <div class="page1" id="page-1">
          <h1>Quality of accommodation</h1>
          <div class="choices-container">
		  <ul class="agile_info_select">
				 <li><input type="radio" name="f1" value="5" id="5" required="required" checked> 
				 	  <label for=5>Highly Satisfied</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="f1" value="4" id="4"> 
					  <label for=4>Satisfied</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="f1" value="3" id="3">
					 <label for=3>Moderately Satisfied</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="f1" value="2" id="2"> 
					  <label for=2>Slightly Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
				 <li><input type="radio" name="f1" value="1" id="1"> 
					  <label for=1>Not Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
            <div class="page-nav">
			<button type="button" onclick="none" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 1 of 6
              </div>
              <button type="button" onclick="showNextPage()" class="forward" style="background-image: url(assets/Forward.svg);" ></button>
            </div>
          </div>
        </div>

        <div class="page2" id="page-2">
          <h1>Quality of assistance provided</h1>
          <div class="choices-container">
		  <ul class="agile_info_select">
				 <li><input type="radio" name="" value="5" id="5" checked> 
				 	  <label for=5>Highly Satisfied</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="" value="4" id="4"> 
					  <label for=4>Satisfied</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="" value="3" id="3">
					 <label for=3>Moderately Satisfied</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="" value="2" id="2"> 
					  <label for=2>Slightly Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
				 <li><input type="radio" name="" value="1" id="1"> 
					  <label for=1>Not Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
            <div class="page-nav">
              <button type="button" onclick="showPreviousPage()" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 2 of 6
              </div>
              <button type="button" onclick="showNextPage()" class="forward" style="background-image: url(assets/Forward.svg);"></button>
            </div>
          </div>
        </div>

        <div class="page3" id="page-3">
          <h1>Courtesy of staff</h1>
          <div class="choices-container">
		  <ul class="agile_info_select">
				 <li><input type="radio" name="" value="5" id="5" checked> 
				 	  <label for=5>Highly Satisfied</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="" value="4" id="4"> 
					  <label for=4>Satisfied</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="" value="3" id="3">
					 <label for=3>Moderately Satisfied</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="" value="2" id="2"> 
					  <label for=2>Slightly Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
				 <li><input type="radio" name="" value="1" id="1"> 
					  <label for=1>Not Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
            <div class="page-nav">
              <button type="button" onclick="showPreviousPage()" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 3 of 6
              </div>
              <button type="button" onclick="showNextPage()" class="forward" style="background-image: url(assets/Forward.svg);"></button>
            </div>
          </div>
        </div>

        <div class="page4" id="page-4">
          <h1>Responsiveness</h1>
          <div class="choices-container">
		  <ul class="agile_info_select">
				 <li><input type="radio" name="" value="5" id="5" checked> 
				 	  <label for=5>Highly Satisfied</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="" value="4" id="4"> 
					  <label for=4>Satisfied</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="" value="3" id="3">
					 <label for=3>Moderately Satisfied</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="" value="2" id="2"> 
					  <label for=2>Slightly Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
				 <li><input type="radio" name="" value="1" id="1"> 
					  <label for=1>Not Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
            <div class="page-nav">
              <button type="button" onclick="showPreviousPage()" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 4 of 6
              </div>
              <button type="button" onclick="showNextPage()" class="forward" style="background-image: url(assets/Forward.svg);"></button>
            </div>
          </div>
        </div>

        <div class="page5" id="page-5">
          <h1>Preparedness</h1>
          <div class="choices-container">
		  <ul class="agile_info_select">
				 <li><input type="radio" name="" value="5" id="5" checked> 
				 	  <label for=5>Highly Satisfied</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="" value="4" id="4"> 
					  <label for=4>Satisfied</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="" value="3" id="3">
					 <label for=3>Moderately Satisfied</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="" value="2" id="2"> 
					  <label for=2>Slightly Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
				 <li><input type="radio" name="" value="1" id="1" required> 
					  <label for=1>Not Satisfied</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>
            <div class="page-nav">
			<button type="button" onclick="showPreviousPage()" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 5 of 6
              </div>
              <button type="button" onclick="showNextPage()" class="forward" style="background-image: url(assets/Forward.svg);"></button>
            </div>
          </div>
        </div>

		<div class="page6" id="page-6">
          <h1>Additional Info</h1>
			<ul class="" style="padding: 5em; justify-content: center; padding-top:0; margin-top:2em; margin-bottom: -4.5em;">
				 <li style="display: flex;"><textarea placeholder="Your comments or suggestions will greatly help us improve our service." class="w3l_summary" name="comments"></textarea>
				 </li>
				 <li style="display: flex; position:block; width:98%;">
            <input type="text" placeholder="Full Name (optional)" name="name"  />
				    <input type="email" placeholder="CvSU Email Address" name="email" id="email-input" required/>
				    <input type="text" maxlength="9" minlength="9" placeholder="Student Number" name="num" id="number-input" class="input-for-stunum" required=""/>
				 </li>
				 <li><center><input type="button" value="Submit" onclick="submitBtnClick()" class="agileinfo" /></center>
				 </li>
			 </ul>
          <div class="choices-container">
            <div class="page-nav">
              <button type="button" onclick="showPreviousPage()" class="backward" style="background-image: url(assets/Back.svg);"></button>
              <div class="pageNum">
                Page 6 of 6
              </div>
              <button type="button" onclick="none" class="forward" id="submit-button" style="background-image: url(assets/Forward.svg);"></button>
            </div>
          </div>
        </div>

      </form>

      <div class="socialIcons">
        <img src="assets/Facebook.svg" alt="">
        <img src="assets/Youtube.svg" alt="">
        <img src="assets/Google.svg" alt="">
      </div>
    </div>
  </div>


</body>
</html>