<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- <link rel="stylesheet" href="jquery-ui.css" />
    <link rel="stylesheet" href="jquery-ui.theme.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="./multi-form.css" /> -->
    <link rel="stylesheet" href="{{ url('assets/website/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('assets/website/assets/css/jquery-ui.theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/website/assets/css/multi-form.css') }}">
  </head>

  <body>
    <h1 style="margin-top: 50px; color: #000">Registration Form</h1>

    <div class="container">
      <form id="myForm" action="#" method="POST">
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
          <h3>Student Information:</h3>
          <div class="row">
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" class="main_lable" for=""
                  >Name <span>*</span></label
                >
                <input placeholder="Enter Student Name..." name="fullname" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Email <span>*</span></label>
                <input placeholder="Enter Student Email..." name="email" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""> Phone <span>*</span></label>
                <input placeholder="Enter Student Phone..." name="phone" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">D.O.B <span>*</span></label>
                <input
                  placeholder="Enter Date of Birth..."
                  id="datepicker"
                  name="datebirth"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Age <span>*</span></label>
                <input
                  placeholder="Enter Student Age..."
                  name="studentage"
                  id="studentage"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Gender<span>*</span></label>
                <select name="selgender" id="selgender" class="form-control">
                  <option value="">Select Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Nonbinary and/or Intersex">
                    Nonbinary and/or Intersex
                  </option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Blood Group <span>*</span></label
                >
                <select name="bloodgroup" id="bloodgroup" class="required">
                  <option value="">Blood Group</option>
                  <option value="A+">A+</option>
                  <option value="B+">B+</option>
                  <option value="AB+">AB+</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Religion <span>*</span></label>
                <input placeholder="Enter Religion..." name="religion" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Nationality <span>*</span></label
                >
                <input placeholder="Enter Nationality..." name="nationality" />
              </div>
            </div>
            <!-- <div class="col-lg-3">
						<div class="input-box">
							<label class="main_lable" for="">Identity <span>*</span></label>
							<select name="identity" id="identity">
								<option value="">ID</option>
								<option value="Identity1">Identity1</option>
								<option value="Identity2">Identity2</option>
								<option value="Identity3">Identity3</option>
							</select>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="input-box">
							<label class="main_lable" for="">Id No <span>*</span></label>
							<input placeholder="Enter Id No..." name="idnumber" />
						</div>
					</div>
					<div class="col-lg-3">
						<div class="input-box upload-img">
							<label class="main_lable" for="">ID ( jpg , png , gif ) <span>*</span></label>
							<div class="choose_box d-flex align-items-center ">
								<input type="file" id="myFile" name="filename" onchange="getFileName()" style="display: none;">
								<button type="button" class="btn btn-default " onclick="document.getElementById('myFile').click();">Upload ID</button>
								<span id="showID"></span>
							</div>
						</div>
					</div> -->
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">District <span>*</span></label>
                <input placeholder="Enter District..." name="district" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">State <span>*</span></label>
                <!-- <input placeholder="Enter State..." name="state" /> -->
                <select name="state" id="state" class="form-control">
                  <option value="">Select state</option>
                  <option value="state1">state1</option>
                  <option value="state2">state2</option>
                  <option value="state3">state3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Country <span>*</span></label>
                <!-- <input placeholder="Enter Country..." name="country" /> -->
                <select name="country" id="country" class="form-control">
                  <option value="">Select Country</option>
                  <option value="Country1">Country1</option>
                  <option value="Country2">Country2</option>
                  <option value="Country3">Country3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Pin <span>*</span></label>
                <input placeholder="Pin no..." name="pin" />
              </div>
            </div>
            <div class="col-lg-4">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Current Address <span>*</span></label
                >
                <textarea
                  placeholder="Current Address..."
                  name="curraddress"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Parmanent Address <span>*</span></label
                >
                <textarea
                  placeholder="Parmanent Address..."
                  name="paraddress"
                  rows="3"
                ></textarea>
              </div>
            </div>
          </div>
          <h3 class="mt-3">Social ID Proof:</h3>
          <!-- <div class="row">
					<div class="col-lg-4">
						<div class="input-box">
							<label class="main_lable" for="">Identity <span>*</span></label>
							<select name="identity" id="identity">
								<option value="">ID</option>
								<option value="Identity1">Identity1</option>
								<option value="Identity2">Identity2</option>
								<option value="Identity3">Identity3</option>
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-box">
							<label class="main_lable" for="">Id No <span>*</span></label>
							<input placeholder="Enter Id No..." name="idnumber" />
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-box upload-img">
							<label class="main_lable" for="">ID ( jpg , png , gif ) <span>*</span></label>
							<div class="choose_box d-flex align-items-center ">
								<input type="file" id="myFile" name="filename" onchange="getFileName()" style="display: none;">
								<button type="button" class="btn btn-default " onclick="document.getElementById('myFile').click();">Upload ID</button>
								<span id="showID"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="input-box">
							<label class="main_lable" for="">Identity <span>*</span></label>
							<select name="identity" id="identity">
								<option value="">ID</option>
								<option value="Identity1">Identity1</option>
								<option value="Identity2">Identity2</option>
								<option value="Identity3">Identity3</option>
							</select>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-box">
							<label class="main_lable" for="">Id No <span>*</span></label>
							<input placeholder="Enter Id No..." name="idnumber" />
						</div>
					</div>
					<div class="col-lg-4">
						<div class="input-box upload-img">
							<label class="main_lable" for="">ID ( jpg , png , gif ) <span>*</span></label>
							<div class="choose_box d-flex align-items-center ">
								<input type="file" id="myFile" name="filename" onchange="getFileName()" style="display: none;">
								<button type="button" class="btn btn-default " onclick="document.getElementById('myFile').click();">Upload ID</button>
								<span id="showID"></span>
							</div>
						</div>
					</div>
				</div> -->
          <div class="row">
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Social Identity <span>*</span></label>
                <select name="identity" id="identity">
                  <option value="">ID</option>
                  <option value="Identity1">Identity1</option>
                  <option value="Identity2">Identity2</option>
                  <option value="Identity3">Identity3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Id No <span>*</span></label>
                <input placeholder="Enter Id No..." name="idnumber" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box upload-img">
                <label class="main_lable" for=""
                  >ID ( jpg , png , gif ) <span>*</span></label
                >
                <div class="choose_box d-flex align-items-center">
                  <input
                    type="file"
                    id="myFile"
                    name="filename"
                    style="display: none"
                  />
                  <button
                    type="button"
                    class="btn btn-default"
                    onclick="openUpload('myFile','showID')";
                  >
                    Upload ID
                  </button>
                  <span id="showID"></span>
                </div>
              </div>
            </div>
          </div>
          <h3 class="mt-3">Gardian Information:</h3>
          <div class="row">
            <!-- <div class="col-lg-3">
						<div class="input-box">
							<label class="main_lable" for="">Father Name <span>*</span></label>
							<input placeholder="Enter Father Name..." name="fathername" />
						</div>
					</div>
					<div class="col-lg-3">
						<div class="input-box">
							<label class="main_lable" for="">Mother Name <span>*</span></label>
							<input placeholder="Enter Mother Name..." name="mothername" />
						</div>
					</div> -->
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Guardian Name <span>*</span></label
                >
                <input placeholder="Guardian Name..." name="guardname" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Guardian Occupation <span>*</span></label
                >
                <input placeholder="Guardian Occupation..." name="guardoccup" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Guardian Relation <span>*</span></label
                >
                <input placeholder="Guardian Relation..." name="guardrel" />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Guardian Phone <span>*</span></label
                >
                <input placeholder="Guardian Phone..." name="guardphone" />
              </div>
            </div>
          </div>
        </div>
        <div class="tab">
          <h3>Academic Information:</h3>
          <div class="row">
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >10th <span>*</span></label
                >
                <input
                  placeholder="Marks of 10th..."
                  name="marksTENth"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Passing bord <span>*</span></label
                >
                <input
                  placeholder="Passing bord..."
                  name="Tenthbord"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Passing Year <span>*</span></label
                >
                <input placeholder="Passing Year..." name="passYear10th" />
              </div>
            </div>

            <div class="col-lg-3">
				<div class="input-box upload-img">
				  <label class="main_lable" for=""
					>ID ( jpg , png , gif ) <span>*</span></label
				  >
				  <div class="choose_box d-flex align-items-center">
					<input
					  type="file"
					  id="tenthFile"
					  name="tenthFile"
					  style="display: none"
					/>
					<button
					  type="button"
					  class="btn btn-default"
					  onclick="openUpload('tenthFile','showTenthRes')"
					>
					  Upload Result
					</button>
					<span id="showTenthRes"></span>
				  </div>
				</div>
			  </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >12th <span>*</span></label
                >
                <input
                  placeholder="Marks of 12th..."
                  name="marks12th"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Passing bord <span>*</span></label
                >
                <input
                  placeholder="Passing bord..."
                  name="Twelvethbord"
                />
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Passing Year <span>*</span></label
                >
                <input placeholder="Passing Year..." name="passYear12th" />
              </div>
            </div>

            <div class="col-lg-3">
				<div class="input-box upload-img">
				  <label class="main_lable" for=""
					>ID ( jpg , png , gif ) <span>*</span></label
				  >
				  <div class="choose_box d-flex align-items-center">
					<input
					  type="file"
					  id="tweveFile"
					  name="tweveFile"
					  style="display: none"
					/>
					<button
					  type="button"
					  class="btn btn-default"
					  onclick="openUpload('tweveFile','showTwelvethRes')"
					>
					  Upload Result
					</button>
					<span id="showTwelvethRes"></span>
				  </div>
				</div>
			  </div>
          </div>
        </div>
        <div class="tab">
          <h3>Admission Information:</h3>
          <div class="row">
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Courses <span>*</span></label>
                <select name="courses" id="courses">
                  <option value="">Courses</option>
                  <option value="Courses1">Courses1</option>
                  <option value="Courses2">Courses2</option>
                  <option value="Courses3">Courses3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Department <span>*</span></label
                >
                <select name="department" id="department">
                  <option value="">Department</option>
                  <option value="Department1">Department1</option>
                  <option value="Department2">Department2</option>
                  <option value="Department3">Department3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Class <span>*</span></label>
                <select name="class" id="class">
                  <option value="">Class</option>
                  <option value="Class1">Class1</option>
                  <option value="Class2">Class2</option>
                  <option value="Class3">Class3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Semester <span>*</span></label>
                <select name="semester" id="semester">
                  <option value="">Semester</option>
                  <option value="Semester1">Semester1</option>
                  <option value="Semester2">Semester2</option>
                  <option value="Semester3">Semester3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for="">Subject <span>*</span></label>
                <select name="subject" id="subject">
                  <option value="">Subject</option>
                  <option value="Subject1">Subject1</option>
                  <option value="Subject2">Subject2</option>
                  <option value="Subject3">Subject3</option>
                </select>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="input-box">
                <label class="main_lable" for=""
                  >Combination Subject <span>*</span></label
                >
                <select name="combsub" id="combsub">
                  <option value="">Combination</option>
                  <option value="Combination1">Combination1</option>
                  <option value="Combination2">Combination2</option>
                  <option value="Combination3">Combination3</option>
                </select>
              </div>
            </div>
          </div>
          <!-- <input placeholder="dd" name="date">
			<input placeholder="mm" name="month">
			<input placeholder="yyyy" name="year"> -->
        </div>
        <!-- <div class="tab">Login Info:
			<input placeholder="Username..." name="username">
			<input placeholder="Password..." name="password" type="password">
		</div> -->
        <div style="overflow: auto">
          <div style="float: right; margin-top: 5px">
            <button type="button" class="previous">Previous</button>
            <button type="button" class="next">Next</button>
            <button type="button" class="submit">Submit</button>
          </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align: center; margin-top: 40px">
          <span class="step">1</span>
          <span class="step">2</span>
          <span class="step">3</span>
        </div>
      </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <!-- <script type="text/javascript" src="./multi-form.js"></script> -->
    <script src="{{ url('assets/website/assets/js/multi-form.js' ) }}"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $.validator.addMethod(
          "date",
          function (value, element, param) {
            return value != 0 && value <= 31 && value == parseInt(value, 10);
          },
          "Please enter a valid date!"
        );
        $.validator.addMethod(
          "month",
          function (value, element, param) {
            return value != 0 && value <= 12 && value == parseInt(value, 10);
          },
          "Please enter a valid month!"
        );
        $.validator.addMethod(
          "year",
          function (value, element, param) {
            return value != 0 && value >= 1900 && value == parseInt(value, 10);
          },
          "Please enter a valid year not less than 1900!"
        );
        $.validator.addMethod(
          "username",
          function (value, element, param) {
            var nameRegex = /^[a-zA-Z0-9]+$/;
            return value.match(nameRegex);
          },
          "Only a-z, A-Z, 0-9 characters are allowed"
        );

		var val = '';
        // var val = {
        //   // Specify validation rules
        //   rules: {
        //     fullname: "required",
        //     email: {
        //       required: true,
        //       email: true,
        //     },
        //     phone: {
        //       required: true,
        //       digits: true,
        //       minlength: 10,
        //       maxlength: 10,
        //     },
        //     date: {
        //       date: true,
        //       required: true,
        //       minlength: 2,
        //       maxlength: 2,
        //       digits: true,
        //     },
        //     month: {
        //       month: true,
        //       required: true,
        //       minlength: 2,
        //       maxlength: 2,
        //       digits: true,
        //     },
        //     year: {
        //       year: true,
        //       required: true,
        //       minlength: 4,
        //       maxlength: 4,
        //       digits: true,
        //     },
        //     username: {
        //       username: true,
        //       required: true,
        //       minlength: 4,
        //       maxlength: 16,
        //     },
        //     password: {
        //       required: true,
        //       minlength: 8,
        //       maxlength: 16,
        //     },
        //     studentage: {
        //       required: true,
        //       digits: true,
        //       minlength: 2,
        //       maxlength: 2,
        //     },
        //     pin: {
        //       required: true,
        //       digits: true,
        //       minlength: 6,
        //       maxlength: 16,
        //     },
        //     guardphone: {
        //       required: true,
        //       digits: true,
        //       minlength: 10,
        //       maxlength: 10,
        //     },
        //     fathername: "required",
        //     mothername: "required",
        //     datebirth: "required",
        //     country: "required",
        //     bloodgroup: "required",
        //     guardname: "required",
        //     guardoccup: "required",
        //     guardrel: "required",
        //     curraddress: "required",
        //     paraddress: "required",
        //     regnoumber: "required",
        //     studentid: "required",
        //     graduateyear: "required",
        //     gdobtain: "required",
        //     courses: "required",
        //     department: "required",
        //     class: "required",
        //     semester: "required",
        //     subject: "required",
        //     combsub: "required",
        //     identity: "required",
        //     idnumber: "required",
        //     filename: "required",
        //     district: "required",
        //     country: "required",
        //     state: "required",
        //     nationality: "required",
        //     religion: "required",
        //     selgender: "required",
        //     marksTENth: "required",
        //     Tenthbord: "required",
        //     passYear10th: "required",
        //     tenthFile: "required",
        //     marks12th: "required",
        //     Twelvethbord: "required",
        //     passYear12th: "required",
        //     tweveFile: "required",
        //   },
        //   // Specify validation error message
        //   messages: {
        //     email: {
        //       required: "Email is required",
        //       email: "Please enter a valid e-mail",
        //     },
        //     phone: {
        //       required: "Phone number is requied",
        //       digits: "Only numbers are allowed in this field",
        //       minlength: "Please enter 10 digit mobile number",
        //       maxlength: "Please enter 10 digit mobile number",
        //     },
        //     date: {
        //       required: "Date is required",
        //       minlength: "Date should be a 2 digit number, e.i., 01 or 20",
        //       maxlength: "Date should be a 2 digit number, e.i., 01 or 20",
        //       digits: "Date should be a number",
        //     },
        //     month: {
        //       required: "Month is required",
        //       minlength: "Month should be a 2 digit number, e.i., 01 or 12",
        //       maxlength: "Month should be a 2 digit number, e.i., 01 or 12",
        //       digits: "Only numbers are allowed in this field",
        //     },
        //     year: {
        //       required: "Year is required",
        //       minlength: "Year should be a 4 digit number, e.i., 2018 or 1990",
        //       maxlength: "Year should be a 4 digit number, e.i., 2018 or 1990",
        //       digits: "Only numbers are allowed in this field",
        //     },
        //     username: {
        //       required: "Username is required",
        //       minlength: "Username should be minimum 4 characters",
        //       maxlength: "Username should be maximum 16 characters",
        //     },
        //     password: {
        //       required: "Password is required",
        //       minlength: "Password should be minimum 8 characters",
        //       maxlength: "Password should be maximum 16 characters",
        //     },
        //     studentage: {
        //       required: "Age is required",
        //       digits: "Only numbers are allowed ",
        //       minlength: "Minimum 2 characters",
        //       maxlength: "Maximum 2 characters",
        //     },
        //     pin: {
        //       required: "Pin is required",
        //       digits: "Only numbers are allowed ",
        //       minlength: "Minimum 6 characters",
        //       maxlength: "Maximum 16 characters",
        //     },
        //     guardphone: {
        //       required: "Phone No. is required",
        //       digits: "Only numbers are allowed ",
        //       minlength: "Please enter 10 digit number",
        //       maxlength: "Please enter 10 digit number",
        //     },

        //     fullname: "Full name is required",
        //     fathername: "Father name is required",
        //     mothername: "Mother name is required",
        //     datebirth: "Date of birth is required",
        //     datebirth: "Age is required",
        //     selgender: "Gender is required",
        //     bloodgroup: "Blood group is required",
        //     guardname: "Guardian name is required",
        //     guardoccup: "Guardian occupation is required",
        //     guardrel: "Guardian relation is required",
        //     guardrel: "Guardian Ph no is required",
        //     curraddress: "Current address is required",
        //     paraddress: "Parmanent address is required",
        //     regnoumber: "Registration No is required",
        //     studentid: "Student id is required",
        //     graduateyear: "Year of graduation is required",
        //     gdobtain: "Grade is required",
        //     courses: "Field is required",
        //     department: "Field is required",
        //     class: "Field is required",
        //     semester: "Field is required",
        //     subject: "Field is required",
        //     combsub: "Field is required",
        //     identity: "ID is required",
        //     idnumber: "ID No. is required",
        //     filename: "File is required",
        //     district: "District is required",
        //     country: "Country is required",
        //     state: "State is required",
        //     nationality: "Nationality is required",
        //     religion: "Religion is required",
        //     marksTENth: "Marks is required",
        //     Tenthbord: "Bord is required",
        //     passYear10th: "Passing Year is required",
        //     tenthFile: "File is required",
        //     marks12th: "Marks is required",
        //     Twelvethbord: "Bord is required",
        //     passYear12th: "Passing Year is required",
        //     tweveFile: "File is required",
        //   },
        // };
        $("#myForm")
          .multiStepForm({
            // defaultStep:0,
            beforeSubmit: function (form, submit) {
              console.log("called before submiting the form");
              console.log(form);
              console.log(submit);
            },
            validations: val,
          })
          .navigateTo(0);
      });
    </script>
  </body>
</html>
