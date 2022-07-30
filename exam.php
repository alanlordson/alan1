<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Audiowide&family=Fira+Sans:wght@800&family=Lato:wght@700&family=Nunito+Sans:wght@800&family=Rubik+Moonrocks&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .fontinstyle {
            font-family: 'Audiowide', cursive;

        }
    </style>
    <script src="exam.js">

    </script>


    <title>QUIZ COMPETITION</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>

<body onload="Cap()">
    <header class="sticky-top">


    <nav class="navbar navbar-expand-md navbar-dark" style="box-shadow: 0px 2px 6px rgb(167, 169, 182); background-color: rgb(100, 100, 190);">
            <div class="container">
                <a class="navbar-brand text-uppercase d-inline-flex lh-1 shadow-lg ps-4 pe-5" style="border-top-right-radius: 90rem; border-bottom-left-radius: 90rem; border-bottom-right-radius: 50rem; background-color: rgb(79, 63, 184);" href="#"><img src="imgs/quizimg.png" alt="quizimg"
                        width="40" height="40">
                    <p class="fontinstyle fs-6 py-1 mb-0">Pilankalai<br><small class="ms-4 fs-6 fontinstyle">
                            Forane</small></p>
                </a>
                <button class="navbar-toggler p-2"  style="border-top-left-radius: 40px;  border-bottom-left-radius: 40px; border-bottom-right-radius: 40px; background-color: rgb(79, 63, 184);" id="btnhide" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end w-75 h-75 rounded-bottom" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header pt-5">
                        <h5 class="offcanvas-title badge fs-6" style="box-shadow: 0px 6px 20px rgb(44, 44, 117); background-color: rgb(79, 63, 184);" id="offcanvasNavbarLabel">Menu</h5>
                        <button  style="box-shadow: 0px 6px 20px rgb(44, 44, 117);  background-color: rgb(79, 63, 184);" type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>

                    </div>
                    <div class="offcanvas-body text-center">
                        <ul class="navbar-nav justify-content-end flex-grow-1 align-items-center">
                            <li class="nav-item">
                                <a class="nav-link text-black" aria-current="page" href="https://alan1.vercel.app/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-black" href="https://alan1.vercel.app/instructions.html">Instructions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark fw-bold bg-info px-2 rounded-pill py-0 active"
                                    href="https://alantest.epizy.com/exam.php">Exam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="https://alan1.vercel.app/contactus.html">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-black" href="https://alan1.vercel.app/about.html">About</a>
                            </li>
                        </ul>
                        <div class="offcanvas-header mt-5">
                            <img src="imgs/quizimg.png" alt=""
                                class="offcanvas-title text-primary img-fluid rounded mx-auto d-block" width="150"
                                height="150" id="offcanvasNavbarLabel">
                        </div>
                    </div>
                </div>
        </nav>
    </header>

    <form action="https://alantest.epizy.com/insertfile.php" method="post">

        <div class="container pt-5" id="hidden">


            <div class="row">
                <div class="offset-sm-3 col-sm-6 py-3">
                    <div class="input-group">
                        <span class="input-group-text">Name</span>
                        <input type="text" id="fname" name="username" onkeyup="keyup()" aria-label="First name" class="form-control">
                    </div>
                </div>

                <div class="offset-sm-3 col-sm-6 py-3">

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Church</label>
                        <select name="church" class="form-select py-1" id="select" onkeyup="keyup()" id="inputGroupSelect01">
                            <option value="Choose">Choose...</option>
                            <option value="St.Micholes Church,Kattathurai">St.Micholes Church,Kattathurai</option>
                            <option value="St. George Church, Anayadi">St. George Church, Anayadi</option>
                            <option value="St. Alphonsa Church, Nagercoil">St. Alphonsa Church, Nagercoil</option>
                            <option value="St. Little Flower Church, Pilankalai">St. Little Flower Church, Pilankalai
                            </option>
                            <option value="Christ the King, Paraicode">Christ the King, Paraicode</option>
                            <option value="St. Xaviers Church, Kaisalavilai">St. Xaviers Church, Kaisalavilai</option>
                        </select>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="offset-sm-3 col-sm-6 py-3">
                    <div class="input-group">
                        <span class="input-group-text" onclick="Cap()"> Enter Captcha <small
                                class="text-primary ms-2 fs-3" role="button" tabindex="0">&#x21bb;</small></span>
                        <input type="text" value="" aria-label="First name" class="form-control" readonly disabled
                            id="capt">
                        <input type="text" aria-label="Last name" class="form-control" onkeyup="keyup()" id="captcha">

                    </div>
                    <div class="text-warning text-center" id="textshow"></div>

                </div>
                <div class="d-grid gap-2 col-6 mx-auto py-3">
                    <button class="btn btn-primary" onclick="visibilitycont()" id="btnon" type="button" disabled>Submit
                        &amp;
                        Start</button>














                </div>




            </div>



        </div>




        <!-- exam questions -->





        <div class="container my-5 fixed-top pt-5" id="show" style="visibility: hidden;">

            <div class="row">
                <div class="col-4 d-flex justify-content-center" style="max-height: 75vh;overflow-y:auto;">



                    <fieldset>

                        <legend class="text-center text-info sticky-top bg-white"
                            style="outline-style: solid;outline-color:white;outline-width: 20px;"> Scroll &#8593;
                        </legend>

                        <div class="d-flex">
                            <div class="nav flex-column nav-pills mt-4" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="b1" data-bs-toggle="pill"
                                    data-bs-target="#question1" type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Question.1</button>
                                <button class="nav-link" id="b2" data-bs-toggle="pill" data-bs-target="#question2"
                                    type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Question.2</button>
                                <button class="nav-link" id="b3" data-bs-toggle="pill" data-bs-target="#question3"
                                    type="button" role="tab" aria-controls="v-pills-disabled"
                                    aria-selected="false">Question.3</button>
                                <button class="nav-link" id="b4" data-bs-toggle="pill" data-bs-target="#question4"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.4</button>
                                <button class="nav-link" id="b5" data-bs-toggle="pill" data-bs-target="#question5"
                                    type="button" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Question.5</button>
                                <button class="nav-link" id="b6" data-bs-toggle="pill" data-bs-target="#question6"
                                    type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Question.6</button>
                                <button class="nav-link" id="b7" data-bs-toggle="pill" data-bs-target="#question7"
                                    type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Question.7</button>
                                <button class="nav-link" id="b8" data-bs-toggle="pill" data-bs-target="#question8"
                                    type="button" role="tab" aria-controls="v-pills-disabled"
                                    aria-selected="false">Question.8</button>
                                <button class="nav-link" id="b9" data-bs-toggle="pill" data-bs-target="#question9"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.9</button>
                                <button class="nav-link" id="b10" data-bs-toggle="pill" data-bs-target="#question10"
                                    type="button" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Question.10</button>
                                <button class="nav-link" id="b11" data-bs-toggle="pill" data-bs-target="#question11"
                                    type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Question.11</button>
                                <button class="nav-link" id="b12" data-bs-toggle="pill" data-bs-target="#question12"
                                    type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Question.12</button>
                                <button class="nav-link" id="b13" data-bs-toggle="pill" data-bs-target="#question13"
                                    type="button" role="tab" aria-controls="v-pills-disabled"
                                    aria-selected="false">Question.13</button>
                                <button class="nav-link" id="b14" data-bs-toggle="pill" data-bs-target="#question14"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.14</button>
                                <button class="nav-link" id="b15" data-bs-toggle="pill" data-bs-target="#question15"
                                    type="button" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Question.15</button>
                                <button class="nav-link" id="b16" data-bs-toggle="pill" data-bs-target="#question16"
                                    type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Question.16</button>
                                <button class="nav-link" id="b17" data-bs-toggle="pill" data-bs-target="#question17"
                                    type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Question.17</button>
                                <button class="nav-link" id="b18" data-bs-toggle="pill" data-bs-target="#question18"
                                    type="button" role="tab" aria-controls="v-pills-disabled"
                                    aria-selected="false">Question.18</button>
                                <button class="nav-link" id="b19" data-bs-toggle="pill" data-bs-target="#question19"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.19</button>
                                <button class="nav-link" id="b20" data-bs-toggle="pill" data-bs-target="#question20"
                                    type="button" role="tab" aria-controls="v-pills-settings"
                                    aria-selected="false">Question.20</button>
                                <button class="nav-link" id="b21" data-bs-toggle="pill" data-bs-target="#question21"
                                    type="button" role="tab" aria-controls="v-pills-home"
                                    aria-selected="true">Question.21</button>
                                <button class="nav-link" id="b22" data-bs-toggle="pill" data-bs-target="#question22"
                                    type="button" role="tab" aria-controls="v-pills-profile"
                                    aria-selected="false">Question.22</button>
                                <button class="nav-link" id="b23" data-bs-toggle="pill" data-bs-target="#question23"
                                    type="button" role="tab" aria-controls="v-pills-disabled"
                                    aria-selected="false">Question.23</button>
                                <button class="nav-link" id="b24" data-bs-toggle="pill" data-bs-target="#question24"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.24</button>
                                <button class="nav-link" id="b25" data-bs-toggle="pill" data-bs-target="#question25"
                                    type="button" role="tab" aria-controls="v-pills-messages"
                                    aria-selected="false">Question.25</button>
                            </div>
                        </div>

                    </fieldset>
                </div>


                <div class="col-8" style="max-height: 75vh; overflow-y:auto">
                    <fieldset>
                        <legend class="text-info">Question : <span class="float-end" id="timer"> </span></legend>
                        <div class="tab-content border border-4 rounded px-3 py-2" id="v-pills-tabContent">




                            <!-- question1 -->



                            <div class="tab-pane fade show active" id="question1" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0"><b> கதக் எனும் நடனம் எங்கு முதன்மையான
                                    நடனமாக
                                    கருதப்படுகிறது? </b>
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        வட இந்தியா
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        கேரளா
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        ஒடிஸ்ஸா
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q1" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        கர்நாடகா
                                    </label>
                                </div>


                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b2').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question 2 -->



                            <div class="tab-pane fade" id="question2" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Expedita odit, natus
                                necessitatibus quo cupiditate placeat quisquam ullam eos repellendus corrupti eius ad
                                ducimus
                                laborum fugit tenetur aspernatur vero deserunt veritatis.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q2" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b1').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b3').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>





                            <!-- question3 -->


                            <div class="tab-pane fade" id="question3" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Modi nostrum iure
                                optio
                                temporibus quo in libero eum quam maiores. Saepe, autem ipsa? Quis, facere blanditiis!
                                Quod
                                neque
                                modi commodi molestias.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q3" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b2').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b4').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>




                            <!-- question4 -->


                            <div class="tab-pane fade" id="question4" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Recusandae
                                accusantium ut
                                adipisci voluptates itaque? Vitae porro sunt, nam voluptates optio nisi obcaecati!
                                Temporibus
                                cumque
                                eaque iure, non dignissimos hic excepturi?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q4" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b3').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b5').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>


                            <!-- question5 -->



                            <div class="tab-pane fade" id="question5" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Nemo esse neque
                                aspernatur
                                ut
                                minima animi doloremque. Inventore veniam fuga labore beatae at optio, et quisquam esse,
                                earum
                                culpa
                                accusantium assumenda!
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q5" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b4').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b6').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>


                            <!-- question6 -->



                            <div class="tab-pane fade" id="question6" role="tabpanel" aria-labelledby="v-pills-home-tab"
                                tabindex="0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, mollitia.
                                Nemo,
                                consectetur quasi eius ut aut voluptatem totam atque laboriosam harum earum quibusdam
                                rem
                                natus
                                quo
                                maiores veniam consequatur dignissimos?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q6" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q6" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b5').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b7').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>


                            <!-- question7 -->



                            <div class="tab-pane fade" id="question7" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Expedita odit, natus
                                necessitatibus quo cupiditate placeat quisquam ullam eos repellendus corrupti eius ad
                                ducimus
                                laborum fugit tenetur aspernatur vero deserunt veritatis.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q7" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q7" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b6').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b8').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question8 -->


                            <div class="tab-pane fade" id="question8" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Modi nostrum iure
                                optio
                                temporibus quo in libero eum quam maiores. Saepe, autem ipsa? Quis, facere blanditiis!
                                Quod
                                neque
                                modi commodi molestias.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q8" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q8" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b7').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b9').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question9 -->

                            <div class="tab-pane fade" id="question9" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Recusandae
                                accusantium ut
                                adipisci voluptates itaque? Vitae porro sunt, nam voluptates optio nisi obcaecati!
                                Temporibus
                                cumque
                                eaque iure, non dignissimos hic excepturi?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q9" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q9" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b8').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b10').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question10 -->

                            <div class="tab-pane fade" id="question10" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Nemo esse neque aspernatur
                                ut
                                minima animi doloremque. Inventore veniam fuga labore beatae at optio, et quisquam esse,
                                earum
                                culpa
                                accusantium assumenda!
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q10" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q10" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b9').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b11').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>


                            <!-- question11 -->



                            <div class="tab-pane fade" id="question11" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Optio, mollitia.
                                Nemo,
                                consectetur quasi eius ut aut voluptatem totam atque laboriosam harum earum quibusdam
                                rem
                                natus
                                quo
                                maiores veniam consequatur dignissimos?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q11" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q11" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q11" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q11" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b10').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b12').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question12 -->


                            <div class="tab-pane fade" id="question12" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Expedita odit, natus
                                necessitatibus quo cupiditate placeat quisquam ullam eos repellendus corrupti eius ad
                                ducimus
                                laborum fugit tenetur aspernatur vero deserunt veritatis.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q12" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q12" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q12" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q12" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b11').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b13').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question13 -->



                            <div class="tab-pane fade" id="question13" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Modi nostrum iure optio
                                temporibus quo in libero eum quam maiores. Saepe, autem ipsa? Quis, facere blanditiis!
                                Quod
                                neque
                                modi commodi molestias.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q13" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q13" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q13" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q13" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b12').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b14').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question14 -->


                            <div class="tab-pane fade" id="question14" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur,
                                adipisicing elit. Recusandae accusantium ut
                                adipisci voluptates itaque? Vitae porro sunt, nam voluptates optio nisi obcaecati!
                                Temporibus
                                cumque
                                eaque iure, non dignissimos hic excepturi?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q14" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q14" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q14" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q14" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b13').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b15').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>




                            <!-- question15 -->


                            <div class="tab-pane fade" id="question15" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Nemo esse neque aspernatur
                                ut
                                minima animi doloremque. Inventore veniam fuga labore beatae at optio, et quisquam esse,
                                earum
                                culpa
                                accusantium assumenda!
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q15" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q15" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q15" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q15" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b14').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b16').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>




                            <!-- question16 -->



                            <div class="tab-pane fade" id="question16" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Optio, mollitia.
                                Nemo,
                                consectetur quasi eius ut aut voluptatem totam atque laboriosam harum earum quibusdam
                                rem
                                natus
                                quo
                                maiores veniam consequatur dignissimos?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q16" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q16" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q16" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q16" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b15').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b17').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>


                            <!-- question17 -->


                            <div class="tab-pane fade" id="question17" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Expedita odit, natus
                                necessitatibus quo cupiditate placeat quisquam ullam eos repellendus corrupti eius ad
                                ducimus
                                laborum fugit tenetur aspernatur vero deserunt veritatis.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q17" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q17" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q17" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q17" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b16').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b18').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question18 -->


                            <div class="tab-pane fade" id="question18" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Modi nostrum iure optio
                                temporibus quo in libero eum quam maiores. Saepe, autem ipsa? Quis, facere blanditiis!
                                Quod
                                neque
                                modi commodi molestias.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q18" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q18" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q18" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q18" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b17').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b19').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question19 -->




                            <div class="tab-pane fade" id="question19" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur,
                                adipisicing elit. Recusandae accusantium ut
                                adipisci voluptates itaque? Vitae porro sunt, nam voluptates optio nisi obcaecati!
                                Temporibus
                                cumque
                                eaque iure, non dignissimos hic excepturi?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q19" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q19" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b18').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b20').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>



                            <!-- question20 -->



                            <div class="tab-pane fade" id="question20" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Nemo esse neque aspernatur
                                ut
                                minima animi doloremque. Inventore veniam fuga labore beatae at optio, et quisquam esse,
                                earum
                                culpa
                                accusantium assumenda!
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q20" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q20" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b19').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b21').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>




                            <!-- question21 -->


                            <div class="tab-pane fade" id="question21" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Optio, mollitia.
                                Nemo,
                                consectetur quasi eius ut aut voluptatem totam atque laboriosam harum earum quibusdam
                                rem
                                natus
                                quo
                                maiores veniam consequatur dignissimos?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q21" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q21" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b20').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b22').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>





                            <!-- question22 -->



                            <div class="tab-pane fade" id="question22" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur adipisicing elit. Expedita odit, natus
                                necessitatibus quo cupiditate placeat quisquam ullam eos repellendus corrupti eius ad
                                ducimus
                                laborum fugit tenetur aspernatur vero deserunt veritatis.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q22" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q22" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q22" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q22" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b21').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b23').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>





                            <!-- question23 -->




                            <div class="tab-pane fade" id="question23" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">Lorem ipsum, dolor sit amet
                                consectetur
                                adipisicing elit. Modi nostrum iure optio
                                temporibus quo in libero eum quam maiores. Saepe, autem ipsa? Quis, facere blanditiis!
                                Quod
                                neque
                                modi commodi molestias.
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q23" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q23" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q23" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q23" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b22').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b24').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>





                            <!-- question24 -->


                            <div class="tab-pane fade" id="question24" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur,
                                adipisicing elit. Recusandae accusantium ut
                                adipisci voluptates itaque? Vitae porro sunt, nam voluptates optio nisi obcaecati!
                                Temporibus
                                cumque
                                eaque iure, non dignissimos hic excepturi?
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q24" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q24" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q24" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q24" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b23').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <a class="btn btn-primary" href="#" onclick="document.getElementById('b25').click()"
                                        role="button">Next &raquo;</a>
                                </div>
                            </div>




                            <!-- question25 -->



                            <div class="tab-pane fade" id="question25" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">Lorem ipsum dolor sit amet
                                consectetur
                                adipisicing elit. Nemo esse neque aspernatur
                                ut
                                minima animi doloremque. Inventore veniam fuga labore beatae at optio, et quisquam esse,
                                earum
                                culpa
                                accusantium assumenda!
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="radio" name="q25" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q25" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q25" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        option 3
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="q25" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        option 4
                                    </label>
                                </div>

                                <div class="float-start mt-4"><a class="btn btn-primary" href="#"
                                        onclick="document.getElementById('b24').click()" role="button">&laquo;
                                        Previous</a>
                                </div>
                                <div class="float-end mt-4">

                                    <input class="btn btn-success" id="submit" type="submit" value="Submit"/>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </div>

            </div>
        </div>


    </form>





    <!-- exam question end -->
























    <footer class="mt-3">
        <div class="bg-info fixed-bottom">
            <div class="container d-flex justify-content-center">
                <div class="row">

                    <div class="col fw-light"> <small>&copy; copyright 2022</small>

                    </div>
                </div>

            </div>
        </div>
    </footer>







    <script>

        function keyup() {
            let a = document.getElementById("fname").value;
            let b = document.getElementById("select").value;
            let c = document.getElementById("captcha").value;



            let d = document.getElementById("btnon");
            if (b != "Choose" && a.length > 2 && c.length > 3) {

                d.disabled = false;
            } else { d.disabled = true; }
        }

        function Cap() {

            let char = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V'
                , 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i',
                'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$', '%', '^', '&', '*', '+'];

            let a = char[Math.floor(Math.random() * 71)];
            let b = char[Math.floor(Math.random() * 71)];
            let c = char[Math.floor(Math.random() * 71)];
            let d = char[Math.floor(Math.random() * 71)];

            let e = a + b + c + d;

            document.getElementById("capt").value = e;
        }




        function visibilitycont() {

            let a = document.getElementById("capt").value;
            let b = document.getElementById("captcha").value;

            if (a != b) {

                document.getElementById("hidden").style.visibility = "visible";
                alert("please enter valid captcha");
                document.getElementById("captcha").style.borderColor = "red";
                document.getElementById("textshow").innerHTML = "pleaase enter valid Captcha";




                return false;

            }


            else {

                document.getElementById("hidden").style.visibility = "hidden";
                document.getElementById("show").style.visibility = "visible";
                document.getElementById("btnhide").disabled = true;
                myFunction();


                return true;
            }


        }


        function myFunction() {

            const startingminute = 30;
            let time = startingminute * 60;

            // const countdown = document.getElementById("timer");

            setInterval(updatecoundown, 1000);

            function updatecoundown() {

                const minutes = Math.floor(time / 60);
                let seconds = time % 60;

                seconds = seconds < 10 ? '0' + seconds : seconds;

                t = `${minutes}: ${seconds}`;
                // countdown.innerHTML = `${minutes}: ${seconds}`;
                document.getElementById("timer").innerHTML = t;

                if (t == "0: 00") {
                    document.getElementById("submit").click()

                }





                time--;
            }
        }

    </script>




</body>

</html>
