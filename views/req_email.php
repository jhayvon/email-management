<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Request Form - DepED</title>
    <?php include "../html/favicon.php"; ?>
    <!-- bootstrap css cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/logo.css">
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php include "../html/nav.php"; ?>



    <div class="container border p-5">

        <div class="border rounded shadow p-5">

            <h1 class="text-center mt-5"><span class="text-primary">ACCOUNT</span> <span
                    class="text-danger">REQUEST</span></h1>
            <hr>
            <div>
                <center>
                    <p>All fields marked with <span class="text-danger">*</span> are required.</p>
                </center>
            </div>
            <br>
            <form method="post" id="myForm" class="p-5" enctype="multipart/form-data">

                <div id="alert" class="alert alert-success alert-dismissible mb-3 fade show d-none" role="alert">
                    <strong><span id="message"></span></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="row mb-3">
                    <!-- REQUEST TYPE -->
                    <div class="col-sm-12 col-md-4 col-lg-5 p-2">
                        <label for="requestType" class="form-label">Request Type <span
                                class="text-danger">*</span></label>
                        <select onclick="checkRequestType()" name="requestType" id="requestType" class="form-control"
                            required >
                            <option value="none" selected disabled hidden>Select Type</option>
                            <option value="Create">Create</option>
                            <option value="Suspend">Suspend</option>
                            <option value="Delete">Delete</option>
                            <option value="Reset Password">Reset password</option>
                            <option value="Transfer">Transfer</option>
                            <option value="change of status">Change of Status</option>
                        </select>
                        <div id="emailHelp" class="form-text">Please select your <b>REQUEST</b> type correctly.</div>
                    </div>


                </div>



                <div class="row">

                    <!-- SCHOOL ID -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <div class="mb-3">
                            <label for="schoolId" class="form-label">School ID <span
                                    class="text-danger">*</span></label>
                            <input id="schoolId" class="form-control" type="text"
                                onkeypress="return (event.charCode !=8 && event.charCode == 0 || (event.charCode  >= 48 && event.charCode <= 57))"
                                placeholder="School ID" name="schoolId" required>
                        </div>
                    </div>

                    <!-- SCHOOL Name -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="schoolName" class="form-label">School Name <span
                                class="text-danger">*</span></label>
                        <input id="schoolName" class="form-control" type="text" placeholder="School Name"
                            name="schoolName" required>
                    </div>

                    <!-- SCHOOL Head -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="schoolHead" class="form-label">School Head <span
                                class="text-danger">*</span></label>
                        <input id="schoolHead" class="form-control" type="text" placeholder="School Head"
                            name="schoolHead" required>
                    </div>
                </div>



                <div class="row">

                    <!-- DISTRICT -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <div class="mb-3">
                            <label for="district" class="form-label">District <span class="text-danger">*</span></label>
                            <select name="district" id="district" class="form-control" required>
                                <option value="none" selected disabled hidden>Select an Option</option>
                                <option value="Alaminos">Alaminos</option>
                                <option value="Bay">Bay</option>
                                <option value="Calauan">Calauan</option>
                                <option value="Cavinti">Cavinti</option>
                                <option value="Famy">Famy</option>
                                <option value="Kalayaan">Kalayaan</option>
                                <option value="Liliw">Liliw</option>
                                <option value="Los baNos">Los baNos</option>
                                <option value="Luisiana">Luisiana</option>
                                <option value="Lumban">Lumban</option>
                                <option value="Mabitac">Mabitac</option>
                                <option value="Magdalena">Magdalena</option>
                                <option value="Majayjay">Majayjay</option>
                                <option value="Nagcarlan">Nagcarlan</option>
                                <option value="Paete">Paete</option>
                                <option value="Pagsanjan">Pagsanjan</option>
                                <option value="Pakil">Pakil</option>
                                <option value="Pangil">Pangil</option>
                                <option value="Pila">Pila</option>
                                <option value="Rizal">Rizal</option>
                                <option value="San Pedre">San Pedre</option>
                                <option value="Santa Cruz">Santa Cruz</option>
                                <option value="Santa Maria">Santa Maria</option>
                                <option value="Siniloan">Siniloan</option>
                                <option value="Victoria">Victoria</option>
                            </select>
                        </div>
                    </div>

                    <!-- UNIT/SECTION -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="unit" class="form-label">Unit/Section <span class="text-danger">*</span></label>
                        <input id="unit" class="form-control" type="text" placeholder="Unit/Section" name="unit"
                            required>
                    </div>

                </div>

                <div class="row">
                    <!-- EMPLOYEE NUMBER -->
                    <div class="col-sm-12 col-md-6 col-lg-5 p-2">
                        <label for="employeeNumber" class="form-label">Employee Number <span
                                class="text-danger">*</span></label>
                        <input id="employeeNumber" class="form-control" type="text"
                            onkeypress="return (event.charCode !=8 && event.charCode == 0 || (event.charCode  >= 48 && event.charCode <= 57))"
                            placeholder="Employee Number" name="employeeNumber" required>
                    </div>
                </div>


                <div class="row">

                    <!-- FIRST NAME -->
                    <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                        <label for="firstname" class="form-label">Firstname <span class="text-danger">*</span></label>
                        <input id="firstname" class="form-control" type="text" placeholder="Firstname" name="firstname"
                            required>
                    </div>

                    <!-- MIDDLE NAME -->
                    <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                        <label for="middlename" class="form-label">Middlename <span class="text-danger">*</span></label>
                        <input id="middlename" class="form-control" type="text" placeholder="Middlename"
                            name="middlename" required>
                    </div>

                    <!-- LAST NAME -->
                    <div class="col-sm-12 col-md-4 col-lg-4 p-2">
                        <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>
                        <input id="lastname" class="form-control" type="text" placeholder="Lastname" name="lastname"
                            required>
                    </div>

                </div>



                <div class="row">

                    <!-- Personal Email -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="personalEmail" class="form-label">Personal Email <span
                                class="text-danger">*</span></label>
                        <input id="personalEmail" class="form-control" type="email" placeholder="Personal Email"
                            name="personalEmail" required>
                    </div>

                    <!-- DEPED Email -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="depedEmail" class="form-label">DepEd Email</label>
                        <input id="depedEmail" class="form-control" type="email" placeholder="sample@deped-edu.ph"
                            disabled name="depedEmail" required>
                        <span><small>(For Suspend, Transfer, Delete, Reset Password only)</small></span>
                    </div>

                    <!-- Phone Number -->
                    <div class="col-sm-12 col-md-6 col-lg-4 p-2">
                        <label for="phoneNumber" class="form-label">Phone Number <span
                                class="text-danger">*</span></label>
                        <input id="phoneNumber" class="form-control" type="text" placeholder="Phone Number"
                            name="phoneNumber"
                            onkeypress="return (event.charCode !=8 && event.charCode == 0 || (event.charCode  >= 48 && event.charCode <= 57))"
                            required>
                    </div>


                </div>


                <div class="row mb-5">

                    <!-- Division Transfer -->
                    <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                        <label for="diviTransfer" class="form-label">Division to Transfer </label>
                        <input id="diviTransfer" class="form-control" type="text" placeholder="Division to Transfer"
                            disabled name="diviTransfer" required>
                    </div>

                    <!-- Appontment/Advice -->
                    <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                        <label for="appointment" class="form-label">Appointment or advice <span
                                class="text-danger"></span></label>
                        <input type="file" class="form-control" disabled name="appointment" id="appointment"
                            aria-describedby="emailHelp" required>
                    </div>
                </div>


                <a href="../index.php" class="btn btn-danger p-3">CANCEL</a>
                <input class="btn btn-primary p-3" type="submit" name="submit" value="SUBMIT">
                <hr>
                <p><span class="text-danger">*</span>The page will Automaticaly refresh after submitting the request.</p>

            </form>


        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../zoom.min.js"></script>


    <script>

        $('#myForm').on('submit', function () {


            const formData = new FormData(this);
            formData.append("add", true);

            $.ajax({
                url: "../controller/create_request.php",
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                processData: false,
                contentType: false,

                success: function (response) {
                    const res = $.parseJSON(response);
                    if (res.status == 200) {
                        $("#alert").removeClass("d-none");
                        $("#message").text(res.message);
                        $("#myForm")[0].reset();
                        setTimeout(function () { location.reload() }, 1500);
                    }
                }
            });
        });

    </script>

    <script type="text/javascript">
        function checkRequestType() {

            if (document.getElementById("requestType").value == "Create") {

                document.getElementById("depedEmail").disabled = true;
                document.getElementById("depedEmail").required = false;

                document.getElementById("appointment").disabled = false;

                document.getElementById("diviTransfer").disabled = true;
                document.getElementById("diviTransfer").required = false;

                document.getElementById("appointment").required = true;
                console.log("true");

            } else if (document.getElementById("requestType").value == "Transfer") {

                document.getElementById("depedEmail").disabled = false;
                document.getElementById("depedEmail").required = true;

                document.getElementById("appointment").disabled = true;

                document.getElementById("diviTransfer").disabled = false;
                document.getElementById("diviTransfer").required = true;

                document.getElementById("appointment").required = false;

                console.log("true");

            } else {
                document.getElementById("depedEmail").disabled = false;

                document.getElementById("appointment").disabled = true;

                document.getElementById("diviTransfer").disabled = true;
                document.getElementById("diviTransfer").required = false;

                document.getElementById("appointment").required = false;

                document.getElementById("diviTransfer").disabled = true;

            }

        }
    </script>

</body>

</html>