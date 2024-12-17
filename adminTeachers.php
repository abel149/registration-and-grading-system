<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="adminTeacher.css">
    <link rel="icon" href="image/stmary.png" >
   
   <title>Sanit Mary's University</title>
</head>
<body>
          
    </head>
    <body>
        <!-- Header Section -->
        <div class="header">
            <h1>Admin Teachers Dashboard</h1>
        </div>
        <div class="container">
        <div class="row">
                <!-- Teacher Signup Form -->
                <div class="col-log-6">
                    <div class="form-container">
                        <h3>Sign Up Teacher</h3>
                        <form id="teacherForm">
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" required>
                            </div>
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" required>
                            </div>
                            <div class="mb-3">
                                <label for="course" class="form-label">Course</label>
                                <select class="form-select" id="course" required>
                                    <option value="Automata and complexity theory">Automata and Complexity Theory</option>
                                    <option value="Rapid application C#">Rapid Application C#</option>
                                    <option value="Internet programming 1 & 2">Internet Programming 1 & 2</option>
                                    <option value="Operating System">Operating System</option>
                                    <option value="Data Communication">Data Communication</option>
                                    <option value="Digital">Digital</option>
                                    <option value="Computer Architecture">Computer Architecture</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                            
                        </form>
                    </div>
                </div>

                <div class="col-log-6">
                       <!-- Teachers Table -->
            <div class="table-container">
                <h3 class="mt-4">Registered Teachers</h3>
                <table class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="teacherTableBody">
                        <!-- Dynamic teacher data will appear here -->                      
                    </tbody>        
                </table>
                <button type="submit" class="btn btn-primary">Delete</button>
            </div> 

                </div>

           
        </div>
    </div>
</body>
</html>

