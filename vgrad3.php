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
    #advisor{
        position:absolute;right:0px;bottom:85px;
    }
    #box1{
        height:711px;width:729px;margin:27px 0;
    }
    #box2{
        height:765px;width:675px;margin: 0 27px;overflow-x:scroll;overflow-y:none;
    }
    #box2 li{
        padding-top:10px;
        padding-bottom:10px;
        font-size:20px;
        
    }
    #descr{
        width:100%;text-align:center
    }
    #box-content{
        height:738px;width:702px;margin:17.5px 0 0 17.5px;overflow: hidden;
    }
    #rightdiv_content{
        padding:0px 0px 0px 0px;font-size: x-large;background:rgba(3,0,11,0.85)
    }
    #university_descr{
        height:250px;text-align: center;
    }
    #hat_clip{
        position: absolute;margin-top: 20px;left:40px;
    }
    #image{
        width:702px;
    }
    @media only screen and (min-width:1296px){
        #descr{
            width:fit-content;float:left;margin-left:100px;margin-top:0px;
        }
        #list{
            margin-top:50px;
        }
        h1{
            font-size:40px;
            padding-top:10px;
        }
    }
  
    @media only screen and (max-width: 907px) {
        #hat_clip{
            position:relative;left:0px
        }
	}
	</style>
    <body style="background-color: #03000B;color:#D4C06A;">
        <script src="confetti.js-master/confetti.js"></script>
        <script src="jquery-3.5.1.min.js"></script>
        <!-- <script>
        var isPaused=false;
        confetti.start(3000);
        setInterval(() => {
            if(!isPaused){
                document.getElementById('nextbtn').click() 
            }
            
        }, 3000);
        </script> -->
       
        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aaubackground';
        $title = 'aa';
        $handle = fopen("test.csv", "r");
        ?>   
        <a id="nextbtn" href="vgrad3.php?abc=<?php echo $index+1; ?>"></a>
        <center><h1>Addis Ababa University</h1><h2>Virtual Graduation</h2><h2>List of Graduates 2019/20</h2></center>
        <div id="descr">
                
                <div id="rightdiv_content">
                    <div id="university_descr">
                       
                        <!-- <h2 style="padding:0px;margin:0px">&#x2666;</h2>  -->
                        <img src="aaulogo.png" width="150px">
                       
                        <!-- <h2 style="padding:0px;margin:0px">&#x2666;</h2> -->
                        <h2>School of Commerce</h2>
                    </div>
                    <div style="max-height:370px;text-align: center;font-size: 30px;">
                        <b>College of Business & Economics</b><br>
                        <b>B.Sc in Commerce </b><br><br>
                        <b>2020</b>
                       
                    </div>
                    
                </div>
                
            </div>
            <script>
            window.setTimeout(function(){
               
                hello()
            })
            var state = false;
            function hello(){
                    $('#listcontent').animate({
                        scrollTop: document.getElementById('listcontent').scrollHeight
                    }, 120000);
                    state = true;
                }
            
                window.setInterval(() => {
                    location.reload();
                }, 100000);
            
            </script>
            <div id="list" style="width:100%;text-align:center">
            <center>
                    <ul id="listcontent"  style="max-height:400px;width:50%;list-style-type:none;background: transparent;margin-left:0px;padding-left:0px;overflow-x:auto;border:4px solid #D4C06A;font-size:20px">
                       
                        <li style="position:fixed;background:black;width:48%;border:0 solid #D4C06A;border-bottom-width:4px"><b>List of Graduates 2019/20</b></li>
                        <br><br>
                        <?php for ($i = 0; $row = fgetcsv($handle ); ++$i) {
                           
                                $name = $row[0];
                                
                                ?>
                                
                        <li><?php echo $name; ?></li> 
                   <?php } 
                         ?> <br><br><br><br><br><br>
                        
                        </ul>
                    </ul>
            </center>
               
            </div>
          
        </div>

    </body>

</html>
