<?=$this->extend('layout/main')?>

<?=$this->section('content')?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Kdam+Thmor+Pro&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>css/addDataForm.css">
<title>Add New User</title>

<div class="container mt-5">
    <div class="card">
            <div id="header">
                <h5 class="card-title text-center header">Add User</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your first name"/>
                </div>
                <div class="mb-3">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter your middle name"/>
                </div>
                <div class="mb-3">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name"/>
                </div>
                <div class="mb-3">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter your age"/>
                </div>
                <div class="mb-3">
                    <label for="age">Gender</label>
                    <select class="form-select">
                        <option value="" selected>Select your gender</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"/>
                </div>
                <div class="mb-3">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password"/>
                </div>
                <div class="mb-3">
                    <label for="password">Confirm Password:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Confirm your password"/>
                </div>
                <div class="col-12 col-sm-3 float-end">
                    <button id="btn" type="submit" class="btn btn-success w-100">Save</button>
                </div>
            </div>
    </div>
</div>
<div class="form">
    
</div>
<?=$this->endSection('section')?>