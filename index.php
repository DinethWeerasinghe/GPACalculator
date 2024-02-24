

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GPA Calculator</title>
  <link rel="icon" type="image/x-icon" href="title.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script>

    function sendmsg(){
        document.getElementById("printmsg").innerHTML = "Currently not available...";

    }

    function findgradepoint(grade){
        var gradepoint = 0.00;
        if(grade=="1" || grade=="2"){
            gradepoint = 4.00;
        }
        else if(grade=="3"){
            gradepoint = 3.70;
        }
        else if(grade=="4"){
            gradepoint = 3.30;
        }
        else if(grade=="5"){
            gradepoint = 3.00;
        }
        else if(grade=="6"){
            gradepoint = 2.70;
        }
        else if(grade=="7"){
            gradepoint = 2.30;
        }
        else if(grade=="8"){
            gradepoint = 2.00;
        }
        else if(grade=="9"){
            gradepoint = 1.70;
        }
        else if(grade=="10"){
            gradepoint = 1.30;
        }
        else if(grade=="11"){
            gradepoint = 1.00;
        }
        else if(grade=="12"){
            gradepoint = 0.00;
        }
        else{
            gradepoint = 0.00;
        }

        return gradepoint;
    }    

    function calgpa(){

        var totcredithours = 0;
        var totofgp = 0.00;
        var credithours;

        //year 1
        //semester 1
        if(formforgpa.cbyear1semester1subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject1"].value));
        }

        if(formforgpa.cbyear1semester1subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject2"].value));
        }

        if(formforgpa.cbyear1semester1subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject3"].value));
        }

        if(formforgpa.cbyear1semester1subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject4"].value));
        }

        if(formforgpa.cbyear1semester1subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject5"].value));
        }

        if(formforgpa.cbyear1semester1subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester1subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester1subject6"].value));
        }

        //year 1
        //semester 2
        if(formforgpa.cbyear1semester2subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject1"].value));
        }

        if(formforgpa.cbyear1semester2subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject2"].value));
        }

        if(formforgpa.cbyear1semester2subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject3"].value));
        }

        if(formforgpa.cbyear1semester2subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject4"].value));
        }

        if(formforgpa.cbyear1semester2subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject5"].value));
        }

        if(formforgpa.cbyear1semester2subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear1semester2subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year1semester2subject6"].value));
        }

        //year 2
        //semester 1
        if(formforgpa.cbyear2semester1subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject1"].value));
        }

        if(formforgpa.cbyear2semester1subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject2"].value));
        }

        if(formforgpa.cbyear2semester1subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject3"].value));
        }

        if(formforgpa.cbyear2semester1subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject4"].value));
        }

        if(formforgpa.cbyear2semester1subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject5"].value));
        }

        if(formforgpa.cbyear2semester1subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester1subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester1subject6"].value));
        }

        //year 2
        //semester 2
        if(formforgpa.cbyear2semester2subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject1"].value));
        }

        if(formforgpa.cbyear2semester2subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject2"].value));
        }

        if(formforgpa.cbyear2semester2subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject3"].value));
        }

        if(formforgpa.cbyear2semester2subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject4"].value));
        }

        if(formforgpa.cbyear2semester2subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject5"].value));
        }

        if(formforgpa.cbyear2semester2subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear2semester2subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year2semester2subject6"].value));
        }

        //year 3
        //semester 1
        if(formforgpa.cbyear3semester1subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject1"].value));
        }

        if(formforgpa.cbyear3semester1subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject2"].value));
        }

        if(formforgpa.cbyear3semester1subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject3"].value));
        }

        if(formforgpa.cbyear3semester1subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject4"].value));
        }

        if(formforgpa.cbyear3semester1subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject5"].value));
        }

        if(formforgpa.cbyear3semester1subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester1subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester1subject6"].value));
        }

        //year 3
        //semester 2
        if(formforgpa.cbyear3semester2subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject1"].value));
        }

        if(formforgpa.cbyear3semester2subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject2"].value));
        }

        if(formforgpa.cbyear3semester2subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject3"].value));
        }

        if(formforgpa.cbyear3semester2subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject4"].value));
        }

        if(formforgpa.cbyear3semester2subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject5"].value));
        }

        if(formforgpa.cbyear3semester2subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear3semester2subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year3semester2subject6"].value));
        }

        //year 4
        //semester 1
        if(formforgpa.cbyear4semester1subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject1"].value));
        }

        if(formforgpa.cbyear4semester1subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject2"].value));
        }

        if(formforgpa.cbyear4semester1subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject3"].value));
        }

        if(formforgpa.cbyear4semester1subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject4"].value));
        }

        if(formforgpa.cbyear4semester1subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject5"].value));
        }

        if(formforgpa.cbyear4semester1subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester1subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester1subject6"].value));
        }

        //year 4
        //semester 2
        if(formforgpa.cbyear4semester2subject1.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject1"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject1"].value));
        }

        if(formforgpa.cbyear4semester2subject2.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject2"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject2"].value));
        }

        if(formforgpa.cbyear4semester2subject3.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject3"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject3"].value));
        }

        if(formforgpa.cbyear4semester2subject4.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject4"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject4"].value));
        }

        if(formforgpa.cbyear4semester2subject5.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject5"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject5"].value));
        }

        if(formforgpa.cbyear4semester2subject6.checked == 1){
            credithours = parseInt(document.forms["formforgpa"]["credityear4semester2subject6"].value);
            totcredithours = totcredithours + credithours;
            totofgp = totofgp + (credithours * findgradepoint(document.forms["formforgpa"]["year4semester2subject6"].value));
        }

        

        var gpa = totofgp/totcredithours;

        document.getElementById("print").innerHTML = gpa.toFixed(2);

    }

  </script>

  <style>
    h3,h4{
        background-color: rgb(228, 228, 228);
        padding: 5px;
    }

  </style>


</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">GPA Calculator</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="nav-item">
                    <a class="nav-link" href="review.php">Review</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <form name="formforgpa">
            <div class="row">
                <div class="col-md-6">
                    <h3>Year 1</h3>
                    <div class="col-md-6">
                        <h4>Semester I</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester1subject1">
                            <select class="form-select" name="year1semester1subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester1subject2">
                            <select class="form-select" name="year1semester1subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester1subject3">
                            <select class="form-select" name="year1semester1subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester1subject4">
                            <select class="form-select" name="year1semester1subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester1subject5">
                            <select class="form-select" name="year1semester1subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester1subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear1semester1subject6">
                            <select class="form-select" name="year1semester1subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="col-md-6">
                    <h3>Year 1</h3>
                    <div class="col-md-6">
                        <h4>Semester II</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester2subject1">
                            <select class="form-select" name="year1semester2subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester2subject2">
                            <select class="form-select" name="year1semester2subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester2subject3">
                            <select class="form-select" name="year1semester2subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester2subject4">
                            <select class="form-select" name="year1semester2subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear1semester2subject5">
                            <select class="form-select" name="year1semester2subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear1semester2subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear1semester2subject6">
                            <select class="form-select" name="year1semester2subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>Year 2</h3>
                    <div class="col-md-6">
                        <h4>Semester I</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester1subject1">
                            <select class="form-select" name="year2semester1subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester1subject2">
                            <select class="form-select" name="year2semester1subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester1subject3">
                            <select class="form-select" name="year2semester1subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester1subject4">
                            <select class="form-select" name="year2semester1subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester1subject5">
                            <select class="form-select" name="year2semester1subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester1subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear2semester1subject6">
                            <select class="form-select" name="year2semester1subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="col-md-6">
                    <h3>Year 2</h3>
                    <div class="col-md-6">
                        <h4>Semester II</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester2subject1">
                            <select class="form-select" name="year2semester2subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester2subject2">
                            <select class="form-select" name="year2semester2subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester2subject3">
                            <select class="form-select" name="year2semester2subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester2subject4">
                            <select class="form-select" name="year2semester2subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear2semester2subject5">
                            <select class="form-select" name="year2semester2subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear2semester2subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear2semester2subject6">
                            <select class="form-select" name="year2semester2subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>Year 3</h3>
                    <div class="col-md-6">
                        <h4>Semester I</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester1subject1">
                            <select class="form-select" name="year3semester1subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester1subject2">
                            <select class="form-select" name="year3semester1subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester1subject3">
                            <select class="form-select" name="year3semester1subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester1subject4">
                            <select class="form-select" name="year3semester1subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester1subject5">
                            <select class="form-select" name="year3semester1subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester1subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear3semester1subject6">
                            <select class="form-select" name="year3semester1subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="col-md-6">
                    <h3>Year 3</h3>
                    <div class="col-md-6">
                        <h4>Semester II</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester2subject1">
                            <select class="form-select" name="year3semester2subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester2subject2">
                            <select class="form-select" name="year3semester2subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester2subject3">
                            <select class="form-select" name="year3semester2subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester2subject4">
                            <select class="form-select" name="year3semester2subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear3semester2subject5">
                            <select class="form-select" name="year3semester2subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear3semester2subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear3semester2subject6">
                            <select class="form-select" name="year3semester2subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3>Year 4</h3>
                    <div class="col-md-6">
                        <h4>Semester I</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester1subject1">
                            <select class="form-select" name="year4semester1subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester1subject2">
                            <select class="form-select" name="year4semester1subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester1subject3">
                            <select class="form-select" name="year4semester1subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester1subject4">
                            <select class="form-select" name="year4semester1subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester1subject5">
                            <select class="form-select" name="year4semester1subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester1subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear4semester1subject6">
                            <select class="form-select" name="year4semester1subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>


                </div>

                <div class="col-md-6">
                    <h3>Year 4</h3>
                    <div class="col-md-6">
                        <h4>Semester II</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject1" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 1</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester2subject1">
                            <select class="form-select" name="year4semester2subject1">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject2" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 2</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester2subject2">
                            <select class="form-select" name="year4semester2subject2">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject3" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 3</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester2subject3">
                            <select class="form-select" name="year4semester2subject3">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject4" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 4</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester2subject4">
                            <select class="form-select" name="year4semester2subject4">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject5" checked>
                            </div>
                            <span class="input-group-text" id="subject">Sub 5</span>
                            <input type="number" class="form-control" value="3" min="0" max="6" name="credityear4semester2subject5">
                            <select class="form-select" name="year4semester2subject5">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="cbyear4semester2subject6">
                            </div>
                            <span class="input-group-text" id="subject">Sub 6</span>
                            <input type="number" class="form-control" value="2" min="0" max="6" name="credityear4semester2subject6">
                            <select class="form-select" name="year4semester2subject6">
                            <option selected>Grade</option>
                            <option value="1">A+</option>
                            <option value="2">A</option>
                            <option value="3">A-</option>
                            <option value="4">B+</option>
                            <option value="5">B</option>
                            <option value="6">B-</option>
                            <option value="7">C+</option>
                            <option value="8">C</option>
                            <option value="9">C-</option>
                            <option value="10">D+</option>
                            <option value="11">D</option>
                            <option value="12">E</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#printModal" onclick="calgpa()">Calculate</button>
                <input class="btn btn-warning" type="reset" value="Clear">
            </div>

        </form>
    </div>

  
    <!-- Modal -->
    <div class="modal fade" id="printModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Your GPA</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" style="font-size: 30px; font-weight: bold;" id="print">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="mt-5">

        <footer class="bg-dark text-center text-white">
        
            <div class="p-4 pb-0">
                <section class="">
                    <form action="save.php" name="reviewform" accept-charset="UTF-8" enctype="multipart/form-data" method="post">
                        <div class="row d-flex justify-content-center">
                            <div class="col-auto">
                                <p class="pt-2">
                                    <strong>Submit your ideas...</strong>
                                </p>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="form-outline form-white mb-4">
                                    <textarea class="form-control" id="msg" name="msg" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-light mb-4">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Design By:
            <a class="text-white" href="http://dineth.lovestoblog.com/">Dineth Weerasinghe</a>
            </div>
            
        </footer> 
    </div>

    <div class="modal fade" id="sendideaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thank You!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center" style="font-size: 20px;" id="printmsg">
                    
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    

</body>
</html>
