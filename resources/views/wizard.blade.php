<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Wizard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
        body {
            background: #eee
        }

        #regForm {
            background-color: #ffffff;
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        h1 {
            text-align: center
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa
        }

        input.invalid {
            background-color: #ffdddd
        }

        .tab {
            display: none
        }

        button {
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        button:hover {
            opacity: 0.8
        }

        #prevBtn {
            background-color: #bbbbbb
        }

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            background-color: #4CAF50
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px
        }

        .thanks-message {
            display: none
        }
    </style>

</head>

<body>
    <!-- This script got from frontendfreecode.com -->
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <form id="regForm">
                    <h1 id="register">Register</h1>
                    {{-- <div class="all-steps" id="all-steps">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div> --}}
                    <div class="tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Text Dua</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" class="pertanyaan" id="pertanyaan-1" name="Pertanyaan1"
                                    value="nilai2">
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col pt-0">Istirahat</label>
                                        <div class="col" style="display:flex;justify-content: flex-end;">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio0 checkmark" id="range-jwb11"
                                                    type="radio" name="4" value="1">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio0 checkmark" id="range-jwb12"
                                                    type="radio" name="4" value="2">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio0 checkmark" id="range-jwb13"
                                                    type="radio" name="4" value="3">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio0 checkmark" id="range-jwb14"
                                                    type="radio" name="4" value="4">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col pt-0">Istirahat Dua</label>
                                        <div class="col" style="display:flex;justify-content: flex-end;">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio1 checkmark" type="radio"
                                                    name="5" id="range-jwb21" value="1">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio1 checkmark" type="radio"
                                                    name="5" id="range-jwb22" value="2">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio1 checkmark" type="radio"
                                                    name="5" id="range-jwb23" value="3">
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input range-radio1 checkmark" type="radio"
                                                    name="5" id="range-jwb24" value="4">
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Text Satu</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" class="pertanyaan" id="pertanyaan-2" name="Pertanyaan2"
                                    value="nilai2 nilai">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input radio" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input radio" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Default checked radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Text Dua</h3>
                            </div>
                            <div class="card-body">
                                <input type="hidden" class="pertanyaan" id="pertanyaan-3" name="Pertanyaan3"
                                    value="nilai2 nilai asd">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input radio" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Default checked
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input radio" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Default checked
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input radio" type="checkbox" name="flexRadioDefault"
                                            id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Default checked
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="card">
                            <div class="card-header">
                                <h3>Pertanyaan Tiga</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Tulis Nama</label>
                                    <input type="text" name="nm" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="thanks-message text-center" id="text-message"> <img
                            src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                        <h3>Thanks for your information!</h3> <span>Your information has been saved! we will contact you
                            shortly!</span>
                    </div>
                    <div style="overflow:auto;" class="mt-3" id="nextprevious">
                        <div style="float:right;">
                            <button type="button" class="btn btn-warning" id="prevBtn"
                                onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" class="btn btn-primary"
                                onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
</script>
<script src='https://frontendfreecode.com/codes/files/d3-color.v1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
<script>
    var currentTab = 0;
    document.addEventListener("DOMContentLoaded", function(event) {


        showTab(currentTab);

    });

    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // fixStepIndicator(n)
    }

    function nextPrev(n) {
        var x = document.getElementsByClassName("tab");
        if (n == 1 && !validateForm()) return false;
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        if (currentTab >= x.length) {
            // document.getElementById("regForm").submit();
            // return false;
            //alert("sdf");
            document.getElementById("nextprevious").style.display = "none";
            // document.getElementById("all-steps").style.display = "none";
            document.getElementById("register").style.display = "none";
            document.getElementById("text-message").style.display = "block";




        }
        showTab(currentTab);
    }

    function validateForm() {

        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
      var range =  x[currentTab].querySelectorAll("input.range-radio");
      var archive = [];
      $.each(range, function( index, raChek ) {

        console.log(raChek.getAttribute('name'));

        if (raChek.checked) {



            archive.push([raChek.getAttribute('id'), raChek.value]);
            // localStorage.setItem('range'+currentTab, JSON.stringify(archive));

        }
        
       
      });

      console.log(range);
      console.log('form#formData'+currentTab);

      var formData = new FormData($('form#formData'+currentTab)[0]);
      console.log(formData);

      y = x[currentTab].querySelectorAll("input.pertanyaan");

      console.log(y[0].getAttribute('id'));

    //   localStorage.setItem('pertanyaan'+currentTab, JSON.stringify([y[0].getAttribute('id'), y[0].value]));

        valid = false;

        y = x[currentTab].getElementsByTagName("input");
        for (i = 0; i < y.length; i++) {

            console.log(y[i]);

            if (y[i].checked) {
                valid = true;
                localStorage.setItem('pertanyaan'+currentTab, JSON.stringify([y[0].getAttribute('id'), y[0].value]));
            } else {
                y[i].className += " is-invalid";
            }
   
        }

        console.log(valid);
        
        if (valid) {
             $(".radio").removeClass("is-invalid");
            // document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid;
    }

    function fixStepIndicator(n) {
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        x[n].className += " active";
    }
    allStorage()
    function allStorage() {

        // console.log(currentTab);

        var tabSurvei = document.getElementsByClassName("tab");
for (let index = 0; index < tabSurvei.length; index++) {
           const dPertanyaan = JSON.parse(localStorage.getItem('pertanyaan'+index));
           if (dPertanyaan!==null) {
           console.log(dPertanyaan);
           $('#'+dPertanyaan[0]).val(dPertanyaan[1]);
           }
           const dRange = JSON.parse(localStorage.getItem('range'+index));
           if (dRange!==null) {
            dRange.forEach((idx, nv) => { 
            $('#'+idx).attr("checked",true);
        });
        }
      
}
           

        // const userData = JSON.parse(localStorage.getItem('range'));
        // console.log(userData);
        // userData.forEach((idx, nv) => { 
        //     $('#'+idx).attr("checked",true);
        // });

    //     keys = Object.keys(localStorage),
    //     i = 0, key;

    // for (; key = keys[i]; i++) {

    //     console.log();
    //     $('#'+key).attr("checked",true);
    //     // $('#'+key).val(localStorage.getItem(key));
        
    // }



}


</script>

</html>