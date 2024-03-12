<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Wizard</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);
        @import url(https://fonts.googleapis.com/icon?family=Material+Icons);

        html * {
            font-family: "Roboto", sans-serif;
        }

        body {
            justify-content: center;
            text-align: center;
            background-color: gainsboro;
        }

        div.progress-bar {
            transition: width 0.3s ease;
        }

        div.progress-icon {
            transition: all 0.25s ease;
            user-select: none;
        }

        @keyframes bounce {
            0% {
                transform: scale(1);
            }

            45% {
                transform: scale(0.8);
            }

            55% {
                transform: scale(0.8);
            }

            100% {
                transform: scale(1);
            }
        }

        div.progress-icon.active {
            transition: all 0.25s ease;
            background-color: var(--info) !important;
            color: white !important;
        }

        div.progress-icon:hover {
            transition: all 0.25s ease;
            background-color: var(--warning) !important;
            color: white !important;
        }

        .multi-step-form {
            border-radius: 15px;
            margin: auto;
            margin-top: 100px;
            max-width: 600px;
        }

        .form-container {
            border-radius: 15px;
            margin: auto;
            background-color: #fafafa;
            padding: 30px 50px;
        }

        .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 2px solid #cdcdcd;
            border-radius: 0px;
        }

        .form-control:focus {
            background-color: transparent !important;
            box-shadow: none !important;
        }

        .floating-label-container {
            margin-top: 20px;
        }

        .floating-label {
            pointer-events: none;
            position: absolute;
            transform: translateX(-50%);
            margin-top: 8px;
            z-index: 1;
            color: gray;
            transition: all 0.15s ease-out;
        }

        .floating-label.active {
            margin-top: 0px;
            font-size: smaller;
            transform: translate(-50%, -60%);
        }

        input {
            text-align: center;
        }

        .multi-step-form .progress {
            overflow: visible;
        }

        .multi-step-form .progress.seen {
            transition: all 0ms ease 300ms;
            background-color: #8fb4dd;
        }

        .multi-step-form .progress .progress-bar {
            overflow: visible;
        }

        .multi-step-form .form-container {
            transform: scale(1);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <!-- This script got from frontendfreecode.com -->
    <div class="multi-step-form">
        <div class="progress-container row mb-5 d-none d-sm-flex px-5">
            <div class="progress col p-0" style="height: 5px;">
                <div class="progress-bar" data-index=1 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div style="width: 50px; height: 50px; border-radius: 50%; background-color: white; color: black; padding-top: 13px; position: absolute; margin-left: -25px;" data-index=1 class="progress-icon shadow-sm active">
                        <i class="material-icons"> people </i>
                    </div>
                </div>
            </div>
            <div class="progress col p-0" style="height: 5px;">
                <div class="progress-bar" data-index=2 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div style="width: 50px; height: 50px; border-radius: 50%; background-color: white; color: black; padding-top: 13px; position: absolute; margin-left: -25px;" data-index=2 class="progress-icon shadow-sm">
                        <i class="material-icons"> business </i>
                    </div>
                </div>
            </div>
            <div class="progress col p-0" style="height: 5px;">
                <div class="progress-bar" data-index=3 role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                    <div style="width: 50px; height: 50px; border-radius: 50%; background-color: white; color: black; padding-top: 13px; position: absolute; margin-left: -25px;" data-index=3 class="progress-icon shadow-sm">
                        <i class="material-icons"> call </i>
                    </div>

                    <div style="width: 50px; height: 50px; border-radius: 50%; background-color: white; color: black; padding-top: 13px; position: absolute; margin-left: 150px;" data-index=4 class="progress-icon shadow-sm">
                        <i class="material-icons"> check </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-container shadow">
            <h4><b>Add User</b></h4>
            <div>
                <form class="needs-validation" novalidate>
                    <fieldset data-index=1 class="ms-step-1 active seen">

                        <div class="form-group floating-label-container">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" required>
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" required>
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                            </div>
                        </div>

                        <button type="submit" class="next btn btn-outline-dark mt-2" style="border-radius: 25px;">
                            Next
                        </button>
                    </fieldset>
                    <fieldset data-index=2 class="ms-step-2">
                        <div class="form-group floating-label-container">
                            <label for="inputAddress11" class="floating-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress11" required>
                        </div>
                        <div class="form-group floating-label-container">
                            <label for="inputAddress12" class="floating-label">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress12">
                        </div>
                        <div class="form-row">
                            <div class="form-group floating-label-container col-md-6">
                                <label for="inputCity1" class="floating-label">City</label>
                                <input type="text" class="form-control" id="inputCity1">
                            </div>
                            <div class="form-group floating-label-container col-md-4">
                                <label for="inputState1" class="floating-label">State</label>
                                <select id="inputState1" class="form-control">
                                    <option selected></option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group floating-label-container col-md-2">
                                <label for="inputZip1" class="floating-label">Zip</label>
                                <input type="text" class="form-control" id="inputZip1">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                    Check me out
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="next btn btn-outline-dark mt-2" style="border-radius: 25px;">
                            Next </button>
                    </fieldset>
                    <fieldset data-index=3 class="ms-step-3">
                        <div class="form-group floating-label-container">
                            <label for="inputAddress31" class="floating-label">Phone 1</label>
                            <input type="text" class="form-control" id="inputAddress31">
                        </div>
                        <div class="form-group floating-label-container">
                            <label for="inputAddress32" class="floating-label">Phone 2</label>
                            <input type="text" class="form-control" id="inputAddress32">
                        </div>
                        <button type="submit" class="next btn btn-outline-dark mt-2" style="border-radius: 25px;" onclick="return false;"> Next </button>
                    </fieldset>
                    <fieldset data-index=4 class="ms-step-4">
                        <p>
                            Are all your changes correct? Please confirm that these changes are correct then proceed to
                            submit the form.
                        </p>
                        <button type="submit" class="btn btn-outline-danger mt-2" style="border-radius: 25px;" onclick="return false;"> Confirm </button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div><a style="font-size: 8pt; text-decoration: none" target="_blank" href="http://frontendfreecode.com">Free
        Frontend</a>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src='https://frontendfreecode.com/codes/files/d3-color.v1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.20.0/dist/jquery.validate.min.js"></script>
<script>
    $('form').find('input, textarea, select').each(function() {
        let $this = $(this);
        let label = $this.prev('label');

        if ($this.val() === '') {
            label.removeClass('active');
        } else {
            label.addClass('active')
        }
    });
    $('form').find('input, textarea, select').on('blur focus', function(e) {
        let $this = $(this);
        let label = $this.prev('label');

        if (e.type === 'blur') {
            if ($this.val() === '') {
                label.removeClass('active');
            }
        } else if (e.type === 'focus') {
            label.addClass('active');
        }
    });

    function valid(button) {

        let fieldset = button.closest('fieldset');
        let valid1 = button.closest('fieldset')
            .find('input')
            .toArray();
        console.log(valid1);
        let valid = button.closest('fieldset')
            .find('input')
            .toArray()
            .every(input => input.checkValidity());

        if (!valid) {
            fieldset.removeClass('valid');
        } else {
            fieldset.addClass('valid');
        }
        fieldset.addClass('was-validated');
        return valid;
    }
    $('form.needs-validation').each((idx, form) => {
        $(form).find('button').each((idx, button) => {
            $(button).click(function() {
                // if (!valid($(button))) {
                //   event.preventDefault();
                //   event.stopPropagation();
                // }
            });
        });
    });
    // $('.multi-step-form > .form-container fieldset:not(:first-child)').addClass('d-none');
    $('.multi-step-form > .form-container fieldset:not(:first-child)').css({
        'display': 'none'
    });
    // Reset all bars to ensure that all the progress is removed
    $('.multi-step-form > .progress-container > .progress > .progress-bar').each(function(elem) {
        $(this).css({
            'width': '0%'
        });
    });
    $('.multi-step-form > .progress-container .progress-icon').click(function(event) {
        // if (!valid($(thisFs)`fieldset.active`)) {
        //   return false;
        // }
        let lastSeen = +$(this).closest('.multi-step-form').find(`fieldset.seen`).last().data('index');
        console.log($(this).closest('.multi-step-form').find(`fieldset.seen`));
        if (+$(this).data('index') <= lastSeen) {
            moveTo($(this).closest('.multi-step-form'), +$(this).data('index'));
        }
        return false;
    });
    $('.multi-step-form > .form-container fieldset > button.next').click(function(event) {
        let thisFs = $(this).closest('fieldset');
        let index = +thisFs.data('index');
        let msContainer = thisFs.closest('.multi-step-form');
        if (!valid($(thisFs))) {
            return false;
        } else {
            msContainer.find(`fieldset[data-index=${index + 1}]`)
                .addClass('seen');
            msContainer.find(`div.progress-container > div.progress > div.progress-bar[data-index=${index}]`)
                .parent()
                .addClass('seen');
        }
        moveTo(msContainer, index + 1);
        // msContainer.find(`fieldset[data-index=${index + 1}]`)
        //   .addClass('seen');
        return false;
    });
    let animating = 0;

    function moveTo(msContainer, index) {
        if (animating > 0) {
            return;
        }
        let steps = msContainer.find('div.progress-container').find(`div.progress-bar`).length + 1;
        if (index > steps) {
            return;
        }
        let currFs = msContainer.find(`fieldset.active`);
        let currIndex = currFs.data('index');
        if (currIndex == index) {
            return;
        }
        let next = msContainer.find(`fieldset[data-index=${index}]`);
        let formContainer = msContainer.find('.form-container');
        let stagger = 300;
        animating++;
        formContainer.animate({
            opacity: 0.0,
        }, {
            step: function(now, fx) {
                let scaleAmount = 1 - ((1 - now) * ((1 - 0.9) / (1 - 0.0)));
                $(this).css('transform', 'scale(' + scaleAmount + ')');
            },
            duration: 350,
            easing: 'easeInBack',
            complete: function() {
                currFs.removeClass('active');
                currFs.css({
                    'display': 'none'
                });
                next.addClass('active');
                next.css({
                    'display': 'block'
                });
                formContainer.animate({
                    opacity: 1,
                }, {
                    step: function(now, fx) {
                        let scaleAmount = 1 - ((1 - now) * ((0.9 - 1) / (0 - 1)));
                        $(this).css('transform', 'scale(' + scaleAmount + ')');
                    },
                    duration: 350,
                    easing: 'easeOutBack',
                    complete: function() {
                        animating--;
                    }
                })
            }
        });
        if (currIndex > index) {
            for (let i = currIndex; i >= index; i--) {
                let thisProgress = msContainer.find('div.progress-container').find(`div.progress-bar[data-index=${i}]`);
                if (i === index) {
                    animating++;
                    setTimeout(function() {
                        thisProgress.css({
                            'width': '0%'
                        });
                        thisProgress.find('.progress-icon').removeClass('active');
                        if (i === steps - 1) {
                            thisProgress.find('.progress-icon').first().addClass('active');
                        } else {
                            thisProgress.find('.progress-icon').addClass('active');
                        }
                        animating--;
                    }, (currIndex - i - 1) * stagger);
                } else {
                    animating++;
                    setTimeout(function() {
                        thisProgress.css({
                            'width': '0%'
                        });
                        thisProgress.find('.progress-icon').removeClass('active');
                        animating--;
                    }, (currIndex - i - 1) * stagger);
                }
            }
        } else {
            for (let i = currIndex; i <= index; i++) {
                let thisProgress = msContainer.find('div.progress-container').find(`div.progress-bar[data-index=${i}]`);
                if (i < index) {
                    animating++;
                    setTimeout(function() {
                        thisProgress.css({
                            'width': '100%'
                        });
                        thisProgress.find('.progress-icon').removeClass('active');
                        animating--;
                    }, (i - currIndex) * stagger);
                } else if (i === index) {
                    animating++;
                    setTimeout(function() {
                        thisProgress.css({
                            'width': '0%'
                        });
                        thisProgress.find('.progress-icon').removeClass('active');
                        if (i === steps - 1) {
                            thisProgress.find('.progress-icon').first().addClass('active');
                        } else {
                            thisProgress.find('.progress-icon').addClass('active');
                        }
                        animating--;
                    }, (i - currIndex - 1) * stagger);
                }
            }
        }
        if (index === steps) {
            animating++;
            setTimeout(function() {
                let thisProgress = msContainer.find('div.progress-container').find(
                    `div.progress-bar[data-index=${index - 1}]`);
                thisProgress.find('.progress-icon').last().addClass('active');
                animating--;
            }, (steps - currIndex - 1) * stagger);
        }
    }
</script>

</html>