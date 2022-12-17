<!DOCTYPE html>
<html>
<head>
<title>CvSU Student Feedback - Library</title>

<meta charset="UTF-8">
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/libraryFeedbackForm.css">
<link rel="stylesheet" href="css/style.css">
<script src="index.js"></script>
<link rel="shortcut icon" href="assets/cvsu-logo.png" type="image/x-icon">
</head>

<body style="overflow-y: scroll;">

  <div class="modal" id="myModal" hidden>

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
        LIBRARY  &nbsp;|&nbsp;  AREA OF CONCERN:
      </div>
      
      <form id="questionnaire-form" action="feedback.php" method="post" class="agile_form">

        <div class="page1" id="page-1">
          <h1>Quality of accommodation</h1>
          <div class="choices-container">
            <ul style="margin-left: 8%;">
              <li><input type="radio" name="f1" value="Highly Satisfied" id="15" checked> 
                <label for=15>Highly Satisfied</label>
                  <div class="check w3"></div>
              </li>
              <li><input type="radio" name="f1" value="Satisfied" id="14"> 
                <label for=14>Satisfied</label>
                  <div class="check w3ls"></div>
              </li>
              <li><input type="radio" name="f1" value="Moderately Satisfied" id="13">
                <label for=13>Moderately Satisfied</label>
                  <div class="check wthree"></div>
              </li>
              <li><input type="radio" name="f1" value="Slightly Satisfied" id="12"> 
                <label for=12>Slightly Satisfied</label>
                  <div class="check w3_agileits"></div>
              </li>
              <li><input type="radio" name="f1" value="Not Satisfied" id="11"> 
                <label for=11>Not Satisfied</label>
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
            <ul style="margin-left: 8%;">
              <li><input type="radio" name="f2" value="Highly Satisfied" id="25" required="required" checked> 
                <label for=25>Highly Satisfied</label>
                  <div class="check w3"></div>
              </li>
              <li><input type="radio" name="f2" value="Satisfied" id="24"> 
                <label for=24>Satisfied</label>
                  <div class="check w3ls"></div>
              </li>
              <li><input type="radio" name="f2" value="Moderately Satisfied" id="23">
                <label for=23>Moderately Satisfied</label>
                  <div class="check wthree"></div>
              </li>
              <li><input type="radio" name="f2" value="Slightly Satisfied" id="22"> 
                <label for=22>Slightly Satisfied</label>
                  <div class="check w3_agileits"></div>
              </li>
              <li><input type="radio" name="f2" value="Not Satisfied" id="21"> 
                <label for=21>Not Satisfied</label>
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
            <ul style="margin-left: 8%;">
              <li><input type="radio" name="f3" value="Highly Satisfied" id="35" required="required" checked> 
                <label for=35>Highly Satisfied</label>
                  <div class="check w3"></div>
              </li>
              <li><input type="radio" name="f3" value="Satisfied" id="34"> 
                <label for=34>Satisfied</label>
                  <div class="check w3ls"></div>
              </li>
              <li><input type="radio" name="f3" value="Moderately Satisfied" id="33">
                <label for=33>Moderately Satisfied</label>
                  <div class="check wthree"></div>
              </li>
              <li><input type="radio" name="f3" value="Slightly Satisfied" id="32"> 
                <label for=32>Slightly Satisfied</label>
                  <div class="check w3_agileits"></div>
              </li>
              <li><input type="radio" name="f3" value="Not Satisfied" id="31"> 
                <label for=31>Not Satisfied</label>
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
            <ul style="margin-left: 8%;">
              <li><input type="radio" name="f4" value="Highly Satisfied" id="45" required="required" checked> 
                <label for=45>Highly Satisfied</label>
                  <div class="check w3"></div>
              </li>
              <li><input type="radio" name="f4" value="Satisfied" id="44"> 
                <label for=44>Satisfied</label>
                  <div class="check w3ls"></div>
              </li>
              <li><input type="radio" name="f4" value="Moderately Satisfied" id="43">
                <label for=43>Moderately Satisfied</label>
                  <div class="check wthree"></div>
              </li>
              <li><input type="radio" name="f4" value="Slightly Satisfied" id="42"> 
                <label for=42>Slightly Satisfied</label>
                  <div class="check w3_agileits"></div>
              </li>
              <li><input type="radio" name="f4" value="Not Satisfied" id="41"> 
                <label for=41>Not Satisfied</label>
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
            <ul style="margin-left: 8%;">
              <li><input type="radio" name="f5" value="Highly Satisfied" id="55" required="required" checked> 
                <label for=55>Highly Satisfied</label>
                  <div class="check w3"></div>
              </li>
              <li><input type="radio" name="f5" value="Satisfied" id="54"> 
                <label for=54>Satisfied</label>
                  <div class="check w3ls"></div>
              </li>
              <li><input type="radio" name="f5" value="Moderately Satisfied" id="53">
                <label for=53>Moderately Satisfied</label>
                  <div class="check wthree"></div>
              </li>
              <li><input type="radio" name="f5" value="Slightly Satisfied" id="52"> 
                <label for=52>Slightly Satisfied</label>
                  <div class="check w3_agileits"></div>
              </li>
              <li><input type="radio" name="f5" value="Not Satisfied" id="51" required> 
                <label for=51>Not Satisfied</label>
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
            <ul class="additional_info_area">
              <li class="comments_area">
                <textarea placeholder="Your comments or suggestions will greatly help us improve our service." name="comments"></textarea>
              </li>
              <li class="other_inputs_area">
                <center>
                  <div style="display: inline-block; align-items: left;">
                      <p style="text-align: left;"> Full Name <br>
                        <input type="text" placeholder="John G. Sy (Optional)" name="name" />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> CvSU Email <br>
                          <input type="email" placeholder="cvsu@cvsu.edu.ph" name="email" required />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Student Number <br>
                          <input type="text" maxlength="9" minlength="9" placeholder="202123456" name="stu_num" class="input-for-stunum" required />
                      </p> 
                  </div>
                </center>
              </li>
              <!-- &nbsp;&nbsp;&nbsp; -->
              <li class="other_inputs_area">
                <center>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Purpose of Visit <br>
                          <input type="text" placeholder="Ex. Assistance" name="purpose_of_visit" />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Date of Visit <br>
                          <input type="date" name="date_of_visit" required />
                      </p>
                  </div>
                  <div style="display: inline-block;">
                      <p style="text-align: left;"> Attending Staff <br>
                          <input type="text" placeholder="Ms. Anna S. Lee" name="attending_staff" />
                      </p>
                  </div>
                </center>
              </li>
              <li style="padding-top: 1.8vh;">
                <center>
                  <input type="submit" value="Submit"/>
                </center>
              </li>
            </ul>
            <div class="choices-container">
              <div class="page-nav" style="margin-top: 1vh;">
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
        <a href="https://www.facebook.com/CaviteStateU"><img src="assets/Facebook.svg" alt=""></a>
        <a href="https://www.youtube.com/channel/UC6p5srphejusQzaulrxmtow"><img src="assets/Youtube.svg" alt=""></a>
        <a href="https://plus.google.com/+CaviteStateUniversityMainCampus"><img src="assets/Google.svg" alt=""></a>
      </div>

    </div>
    
  </div>

</body>
</html>