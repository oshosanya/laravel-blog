<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-4 sidebar1">
                <div class="logo">
                    <img src="http://lorempixel.com/output/people-q-g-64-64-1.jpg" class="img-responsive center-block" alt="Logo">
                </div>
                <br>
                <div class="left-navigation">
                    <ul class="list">
                        <h5><strong>WHEREABOUTS</strong></h5>
                        <li>Home</li>
                        <li>Office</li>
                        <li>School</li>
                        <li>Gym</li>
                        <li>Art Class</li>
                        <li>Hike Club</li>
                    </ul>

                    <br>

                    <ul class="list">
                        <h5><strong>HOBBIES</strong></h5>
                        <li>Hiking</li>
                        <li>Rafting</li>
                        <li>Badminton</li>
                        <li>Tennis</li>
                        <li>Sketching</li>
                        <li>Horse Riding</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-8 main-content">
            <!--Main content code to be written here --> 
            {{-- <h1>FEEDBACK APPRECIATED! :)</h1>
            <h3>P.S.: For side navbar with dropdown menu, you may refer this snippet: http://bootsnipp.com/user/snippets/kWPoW</h3> --}}
        </div>
    </div>
<style type="text/css">
    .sidebar1 {
    background: #F17153;
    /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#F17153, #F58D63, #f1ab53);
    /* For Firefox 3.6 to 15 */
    background: linear-gradient(#F17153, #F58D63, #f1ab53);
    /* Standard syntax */
    padding: 0px;
    min-height: 100%;
    }
    .logo {
        max-height: 130px;
    }
    .logo>img {
        margin-top: 30px;
        padding: 3px;
        border: 3px solid white;
        border-radius: 100%;
    }
    .list {
        color: #fff;
        list-style: none;
        padding-left: 0px;
    }
    .list::first-line {
        color: rgba(255, 255, 255, 0.5);
    }
    .list> li, h5 {
        padding: 5px 0px 5px 40px;
    }
    .list>li:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-left: 5px solid white;
        color: white;
        font-weight: bolder;
        padding-left: 35px;
    }.main-content{
    text-align:center;
    }
</style>
</body>
</div>