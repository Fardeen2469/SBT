<?php
require_once "header.php";
?>

<head>
    <style>
        body {
            margin: auto;
            background: #eaeaea;
            font-family: 'Open Sans', sans-serif;
        }

        .info p {
            text-align: center;
            color: #999;
            text-transform: none;
            font-weight: 600;
            font-size: 15px;
            margin-top: 2px
        }

        .info i {
            color: #F6AA93;
        }

        form h1 {
            font-size: 18px;
            background: #F6AA93 none repeat scroll 0% 0%;
            color: rgb(255, 255, 255);
            padding: 22px 25px;
            border-radius: 5px 5px 0px 0px;
            margin: auto;
            text-shadow: none;
            text-align: left
        }

        form {
            border-radius: 5px;
            max-width: 700px;
            width: 100%;
            margin: 5% auto;
            background-color: #FFFFFF;
            overflow: hidden;
        }

        p span {
            color: #F00;
        }

        p {
            margin: 0px;
            font-weight: 500;
            line-height: 2;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin: 50px 0px 0px 0px
        }

        input {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #eee;
            margin-bottom: 15px;
            width: 75%;
            height: 40px;
            float: left;
            padding: 0px 15px;
        }

        a {
            text-decoration: inherit
        }

        textarea {
            border-radius: 0px 5px 5px 0px;
            border: 1px solid #EEE;
            margin: 0;
            width: 75%;
            height: 130px;
            float: left;
            padding: 0px 15px;
        }

        .form-group {
            overflow: hidden;
            clear: both;
        }

        .icon-case {
            width: 35px;
            float: left;
            border-radius: 5px 0px 0px 5px;
            background: #eeeeee;
            height: 42px;
            position: relative;
            text-align: center;
            line-height: 40px;
        }

        i {
            color: #555;
        }

        .contentform {
            padding: 40px 30px;
        }

        .bouton-contact {
            background-color: #81BDA4;
            color: #FFF;
            text-align: center;
            width: 100%;
            border: 0;
            padding: 17px 25px;
            border-radius: 0px 0px 5px 5px;
            cursor: pointer;
            margin-top: 40px;
            font-size: 18px;
        }

        .leftcontact {
            width: 49.5%;
            float: left;
            border-right: 1px dotted #CCC;
            box-sizing: border-box;
            padding: 0px 15px 0px 0px;
        }

        .rightcontact {
            width: 49.5%;
            float: right;
            box-sizing: border-box;
            padding: 0px 0px 0px 15px;
        }

        .validation {
            display: none;
            margin: 0 0 10px;
            font-weight: 400;
            font-size: 13px;
            color: #DE5959;
        }

        #sendmessage {
            border: 1px solid #fff;
            display: none;
            text-align: center;
            margin: 10px 0;
            font-weight: 600;
            margin-bottom: 30px;
            background-color: #EBF6E0;
            color: #5F9025;
            border: 1px solid #B3DC82;
            padding: 13px 40px 13px 18px;
            border-radius: 3px;
            box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
        }

        #sendmessage.show,
        .show {
            display: block;
        }
    </style>
</head>

<body>

    <form action="smb.php" method="post">
        <h1>Social Media Details hear:</h1>

        <div class="contentform">
            <!-- <div id="sendmessage"> Your message has been sent successfully. Thank you. </div> -->

            <?php
                            $sql = "SELECT * FROM `social`";
                            $resultt = mysqli_query($link, $sql);
                            $numm = mysqli_num_rows($resultt);
                            if ($numm > 0) {
                                for ($i = 1; $i <= $numm; $i++) {
                                    $roww = mysqli_fetch_assoc($resultt);

                                    ?>

            <div class="leftcontact">
                <div class="form-group">
                    <p>Number <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-male"></i></span>
                    <input type="text" name="s_number" value="<?php echo $roww['s_number']; ?>" id="s_number"  />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Email <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="s_email" value="<?php echo $roww['s_email']; ?>" id="s_email"  />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Twiter <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="s_twiter" value="<?php echo $roww['s_twiter']; ?>" id="s_twiter"  />
                    <div class="validation"></div>
                </div>
            </div>
            <div class="rightcontact">
                <div class="form-group">
                    <p>FaceBook <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                    <input type="text" name="s_face" value="<?php echo $roww['s_fb']; ?>" id="s_face"  />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Linkdeen <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-building-o"></i></span>
                    <input type="text" name="s_li" value="<?php echo $roww['s_ld']; ?>" id="s_li"  />
                    <div class="validation"></div>
                </div>

                <div class="form-group">
                    <p>Instagram <span>*</span></p>
                    <span class="icon-case"><i class="fa fa-user"></i></span>
                    <input type="text" name="s_insta" value="<?php echo $roww['s_insta']; ?>" id="s_insta"  />
                    <div class="validation"></div>
                </div>
            </div>
        </div>
        </div>
        <button type="submit" class="bouton-contact">Done</button>
    <?php } } 
?>
    </form>


</body>

</html