<html>
    <head>
        <title>Addis Ababa University | Virtual Graduation</title>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  
        <link rel='shortcut icon' href='aaulogo.png' />      
        <meta name="viewport" content="width=device-width">
    </head>

    <style>
        #leftdiv{
         width:720px;height:738px;
    }
	#rightdiv{
            margin-top:50px;background-size: 100% 100%;
        }
    
    
    #rightdiv_content{
        padding:20px 0px 0px 0px;font-size: x-large;background:rgba(3,0,11,0.85)
    }
    #university_descr{
        text-align: center;
    }
    #hat_clip{
        position: absolute;margin-top: 20px;left:40px;
    }
    #box img{
        
    }
    #box div{
        height:5%;
    }
    #box{
    }
    @media only screen and (max-width: 907px) {
        #hat_clip{
            position:relative;left:0px
        }
        #box div{
            height:0%;
        }
        figure{
            margin:0px;
        }
        figcaption{
            font-size:14px;
        }
	}
	</style>
    <body style="background-color: #03000B;color:#D4C06A;margin:0px;">
        <script src="confetti.js-master/confetti.js"></script>
        <script>
        var isPaused=false;
        confetti.start(3000);
        </script>

        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aaubackground';
        $title = 'aa';
        $handle = fopen("test.csv", "r");
        ?>   
        <div style="text-align:center;max-height:100%;min-width:400px">
                <img src="hiclipart.com1.png" style="position:absolute;left:20px;top:10px" id="hat_clip" width="12%">
                <img style="position:fixed;right:20px;top:20px" src="aaulogo.png" width="10%">
                <div id="rightdiv_content">
                    <div id="university_descr">
                       
                       
                       
                        <h2 style="font-size:100%">Addis Ababa University</h2>
                        2019/20
                        <b>Masters Graduates</b><br>
                      ~<br>
                      <b>College of .....</b><br>
                      <b>Department of .....</b>
                    </div>
                    <div id="box" style="padding:0px;min-width:400px;max-width:1000px;margin:0 auto;bottom:0px;text-align: center;font-size: 30px;">
                            <div></div>
                            <?php for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                           
                           $name = $row[0];

                           ?>
                           
                           <figure style="position:relative;width:fit-content;display:inline-block;">
                                <img  src="<?php echo $name; ?>.jpg" height="20%">
                                <figcaption><?php echo $name; ?> </figcaption>
                            </figure>
                        <?php }
                                ?>
                            
                          
                            
                            
                    </div>
                    
                </div>
                
            </div>
            <div style="width:100%;text-align:center">
               
            </div>
          
        </div>

    </body>

</html>
