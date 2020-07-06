<html>
    <head>
        <title>Addis Ababa University | Virtual Graduation</title>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  
        <link rel='shortcut icon' href='aaulogo.png' />      
        <meta name="viewport" content="width=device-width">
    </head>

    <style>
        #leftdiv{
        margin:50px 150px 100px 150px; width:720px;height:738px;
    }
	#rightdiv{
            float: left;margin-top:50px;background-size: 100% 100%;background-image:url('graduation_img.png');
        }
    #advisor{
        position:absolute;right:0px;bottom:85px;
    }
    #box1{
        height:711px;width:729px;margin:27px 0;
    }
    #box2{
        height:765px;width:675px;margin: 0 27px;
    }
    #box-content{
        height:738px;width:702px;margin:17.5px 0 0 17.5px;overflow: hidden;
    }
    #rightdiv_content{
        width:600px;padding:0px 0px 0px 0px;font-size: x-large;background:rgba(0,93,170,0.85);
    }
    #university_descr{
        height:400px;width:600px;text-align: center;
    }
    #hat_clip{
        position: absolute;left:1000px;margin-top: 20px;
    }
    #image{
        width:702px;
    }
    @media only screen and (max-width: 1286px)  {
        #leftdiv{
            position:relative;margin:10px 20px 100px 50px;width:750px;height: 500px;
        }
        #hat_clip{
            left:100px;
        }
        #rightdiv{
            margin-left: 100px;
            margin-top: 170px;
        }
        #research_title{
             margin-top:-40px;
         }
         #nextbtn{
             display:none;
         }
        #prevbtn{
            display:none;
        }
        #advisor{
            position:relative;bottom:auto;
        }
    }
    @media only screen and (min-width: 1286px) and (max-width: 1660px)  {
        #leftdiv{
            margin:50px 20px 100px 80px;width:750px;height: 500px;
        }
        #hat_clip{
            left:850px;
        }
        #research_title{
             margin-top:5px;
         }
         #image{
             width:750px;
         }
         #rightdiv{
            float: left;margin-top:50px;background-size: 100% 100%;
        }
    }
     @media only screen and (min-width: 1286px) and (max-width: 1500px) {
         body{
             margin-top:0px;
             padding-top: 0px;;
         }
        #leftdiv{
            width:570px; margin:50px 20px 50px 50px;
        }
        #rightdiv{
            margin-top:0px;
        }
        #rightdiv_content{
            padding-top: 0px;
            font-size: medium;
        }
        #university_descr{
            height:320px;
        }
        #hat_clip{
            position: absolute;left:700px;margin-top: 20px;width: 140px;
        }
        #image{
            width:491.40px;
        }
        #box1{
            height:497px;width:510.30px;margin:20.7px 0;
        }
        #box2{
            height:535.50px;width:472.5px;margin: 0 20.7px;
        }
        #box-content{
            height:516.60px;width:491.40px;margin:15.75px 0 0 15.75px;overflow: hidden;
        }
	}
  

    /*
    @media only screen and (max-width: 1550px) {
        #leftdiv{
            margin:20px 50px 100px 50px;
        }
	}
    @media only screen and (max-width: 1437px) {
        #leftdiv{
            margin:0px 20px 100px 50px;
        }
        
	} */
	</style>
    <body style="background:#005daa;color:#fff">
        <script src="confetti.js-master/confetti.js"></script>
        <script>
        var isPaused=false;
        confetti.start(3000);
        setInterval(() => {
            if(!isPaused){
                document.getElementById('nextbtn').click() 
            }
            
        }, 3000);
        </script>

        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aaubackground';
        $title = '';
        $handle = fopen("test.csv", "r");
        if(isset($_GET['abc'])){
            $index = $_GET['abc'];
            if($index < 0){
                $index = -1;
            }
        } else {
            $index = -1;
        }
        for ($i = 0; $row = fgetcsv($handle ); ++$i) {
            if($i == $index ){
                $name = $row[0];
                $image = $name;
                $advisor = $row[1];
                $title = $row[2];
                break;
            }
        }
        if($i < $index){
            $index = -1;
        }
        ?>
            <div style="float: left;">
                <div id="leftdiv" style="text-align: center;">
                    
                    <div id="box-content" style="position: absolute;;background-color: transparent;background: white;">
                        <img src="<?php echo $image ?>.jpg" alt="image" id="image">
                    </div>
                    <div id="box1" style="position: absolute;;background-color: transparent;border:4px solid #fff">
                        
                    </div>
                    
                    <div id="box2" style="position: absolute;background: transparent;border:4px solid #fff">

                    </div>
                   
                    
                </div>
            </div>
            <div id="rightdiv" >
                <img src="hiclipart.com.png" id="hat_clip" width="200px">
                
                <div id="rightdiv_content">
                    <div id="university_descr">
                       
                        <h2 style="padding:0px;margin:0px">&#x2666;</h2> 
                        <img src="aaulogo.png" width="200px">
                       
                        <h2 style="padding:0px;margin:0px">&#x2666;</h2>
                        <h2>School of Commerce</h2>
                    </div>
                    <div style="max-height:370px;width:600px;text-align: center;font-size: 30px;">
                        <b>College of Business & Economics</b><br>
                        ~ <br>
                        <b>B.Sc in Commerce </b><br><br>
                        <b>2020</b>
                        
                        <!-- <figure style="margin-right:20px" id="advisor">
                            <img src="aauimg.jpg" height="150px">    
                            
                        </figure> -->
                        <!-- <span id="advisor" style="padding-right:10px"> -->
                       
                        <!-- </span> -->
                    </div>
                    
                </div>
                <div style="background:rgba(0,93,170,0.85);height:300px"><h1 id="grad_name" style="margin:0px;padding:0px;width:fit-content ;left:0px;position:relative;font-family: 'Italianno', cursive;font-size: 60px;"><?php echo $name  ?></h1>
                        <h2 id="research_title"  style="padding:0px;position:relative;left:0px;margin:0px;width:fit-content ;"><?php echo $title ?> </h2>
                        <?php if($advisor){ ?>
                                <h3 style="margin-top:0px">Advisor: <?php echo $advisor ?></h3>
                        <?php } ?>
                </div>
            </div>
            <button onClick="isPaused=!isPaused" style="position:fixed;right:50px"> Pause / Resume</button>
            <a id="prevbtn" style="position:absolute;bottom:20px;left:0px;width:100px;padding:15px; text-align:center;background-color:#03002C;opacity:0.5;text-decoration:none" href="vgrad2.php?abc=<?php echo $index-1; ?>">Prev </a>
            <a id="nextbtn" style="position:absolute;bottom:20px;right:0px;width:100px;padding:15px; text-align:center;background-color:#03002C;opacity:0.5;text-decoration:none" href="vgrad2.php?abc=<?php echo $index+1; ?>">Next </a>
        </div>

    </body>

</html>
