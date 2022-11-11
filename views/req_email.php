<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <h1 class="text-center mt-5"><span class="text-primary">ACCOUNT</span> <span class="text-danger">REQUEST</span></h1>
    <main>
        <div class="container">
            <form method="post" id="myForm" class="p-5">
                <div id="alert" class="alert alert-success alert-dismissible mb-3 fade show d-none" role="alert">
                    <strong><span id="message"></span></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="requestType" class="form-label">Request Type <span class="text-danger">*</span></label>
                        <select name="requestType" id="requestType" class="form-control">
                            <option value="create">Create</option>
                            <option value="suspend">suspend</option>
                            <option value="delete">delete</option>
                            <option value="reset password">reset password</option>
                            <option value="transfer">transfer</option>
                            <option value="change of status">change of status</option>

                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="schoolId" class="form-label">School Id <span class="text-danger">*</span></label>
                            <input id="schoolId" class="form-control" type="text" placeholder="School Id" name="schoolId" required >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="schoolName" class="form-label">School Name <span class="text-danger">*</span></label>
                            <input id="schoolName" class="form-control" type="text" placeholder="School Name" name="schoolName" required >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="district" class="form-label">District <span class="text-danger">*</span></label>
                            <input id="district" class="form-control" type="text" placeholder="District" name="district" required >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="schoolHead" class="form-label">School Head <span class="text-danger">*</span></label>
                        <input id="schoolHead" class="form-control" type="text" placeholder="District" name="schoolHead" required >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="unit" class="form-label">Unit/Section <span class="text-danger">*</span></label>
                        <input id="unit" class="form-control" type="text" placeholder="Unit/Section" name="unit" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="employeeNumber" class="form-label">Employee Number <span class="text-danger">*</span></label>
                        <input id="employeeNumber" class="form-control" type="text" placeholder="District" name="employeeNumber" required >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">Firstname <span class="text-danger">*</span></label>
                            <input id="firstname" class="form-control" type="text" placeholder="Firstname" name="firstname" required >
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="middlename" class="form-label">Middlename <span class="text-danger">*</span></label>
                        <input id="middlename" class="form-control" type="text" placeholder="Middlename" name="middlename" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                            <label for="lastname" class="form-label">Lastname <span class="text-danger">*</span></label>
                            <input id="lastname" class="form-control" type="text" placeholder="Lastname" name="lastname" required >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="personalEmail" class="form-label" >Personal Email <span class="text-danger">*</span></label>
                        <input id="personalEmail" class="form-control" type="text" placeholder="Personal Email" name="personalEmail" required >
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="depedEmail" class="form-label" >Deped Email</label>
                        <input id="depedEmail" class="form-control" type="text" placeholder="Email" name="depedEmail" >
                        <span><small>(For Suspend, Transfer, Delete, Reset Password only)</small></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="divisionTransfer" class="form-label" >Division to Transfer </label>
                        <input id="divisionTransfer" class="form-control" type="text" placeholder="Division to Transfer" name="divisionTransfer" >
                        <span><small>(For Transfer request only)</small></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="phoneNumber" class="form-label" >Phone Number <span class="text-danger">*</span></label>
                        <input id="phoneNumber" class="form-control" type="text" placeholder="Phone Number" name="phoneNumber" required >
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <label for="appointment" class="form-label">Appointment or advice <span class="text-danger">*</span></label>
                        <input id="appointment" class="form-control" type="file" name="appointment" required >
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-between">
                        <a href="../index.php" class="btn btn-primary">back</a>
                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        
        $('#myForm').on('submit', function (e) {
            e.preventDefault();

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
                    if(res.status == 200){
                        $("#alert").removeClass("d-none");
                        $("#message").text(res.message);
                        $("#myForm")[0].reset();
                    }
                }
            });
            
        });

    </script>
</body>

</html>