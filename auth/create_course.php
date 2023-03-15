<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="../css/home.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
</head>

<body style="background-color:#f542a7">
    <div >
        <div class="container mt-5">
            <div class="bg-info text-center p-3">
                <h3> Create Courses</h3>
            </div>
            <form method="POST" enctype="multipart/form-data" action="" class="bg-info-subtle">
                <div class="mb-3 p-2">
                    <label for="studentName" class="form-label">Course Code</label>
                    <input type="text" class="form-control" id="studentName" name="courseCode">
                </div>
                <div class="mb-3 p-2">
                    <label for="studentName" class="form-label">Course Name</label>
                    <input type="text" class="form-control" id="studentName" name="courseName">
                </div>
                <div class="mb-3 p-2">
                    <label for="studentName" class="form-label">Course Credit</label>
                    <input type="number" class="form-control" id="studentName" name="courseCredit">
                </div>
                <div class="mb-3 p-2">
                    <label for="studentName" class="form-label">Course Type</label>
                    <input type="text" class="form-control" id="studentName" name="courseType">
                </div>
                <div class="mb-3 p-2">
                    <label for="department" class="form-label">Department</label>
                    <select class="form-select" aria-label="Default select example" id="department" name="department">
                        <option selected>Select Department</option>
                        <option value="1">CSE</option>
                        <option value="2">MATHEMATICS</option>
                        <option value="3">EEE</option>
                    </select>
                </div>
                <div class="align-middle p-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>