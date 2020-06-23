<html>
    <head>
        <title>Addis Ababa University | Virtual Graduation</title>
        <link href="https://fonts.googleapis.com/css2?family=Italianno&display=swap" rel="stylesheet">  
        <link rel='shortcut icon' href='aaulogo.png' />      
    </head>
    <body style="background-color: #03000B;color:#D4C06A;">
        <script src="confetti.js-master/confetti.js"></script>
        <script>confetti.start(3000);</script>
        <div style="width: 100%;">
        <?php 
        $advisor = '';
        $name = '';
        $image = 'aauimg';
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
                break;
            }
        }
        if($i < $index){
            $index = $i;
        }
        ?>
            <div style="float: left;">
                <div style="width:720px;height:738px;margin:20px 150px 100px 150px; text-align: center;">
                    <div style="position: absolute;;background-color: transparent;background: white;height:738px;width:702px;margin:17.5px 0 0 17.5px;overflow: hidden;">
                        <img src="<?php echo $image ?>.jpg" alt="image" width="702px">
                    </div>
                    <div style="position: absolute;;background-color: transparent;border:4px solid #D4C06A;height:711px;width:729px;margin:27px 0;">
                        
                    </div>
                    
                    <div style="position: absolute;background: transparent;border:4px solid #D4C06A;height:765px;width:675px;margin: 0 27px;">

                    </div>
                    <h1 style="position:relative;top:770px;font-family: 'Italianno', cursive;font-size: 90px;"><?php echo $name  ?></h1>
                </div>
            </div>
            <div style="float: left;margin-top:50px;background-size: 100% 100%;">
                <img src="hiclipart.com1.png" style="position: absolute;left:1000px;;margin-top: 20px;" width="200px">
                
                <div style="width:600px;height:800px;padding:100px 0px 0px 0px;font-size: x-large;background:rgba(3,0,11,0.85)">
                    <div style="height:420px;width:600px;text-align: center;">
                       
                        <h2>&#x2666;</h2> 
                        <h1>Addis Ababa University</h1>
                        <img src="aaulogo.png" width="100px">
                       
                        <h2>&#x2666;</h2>
                        <h2>School of Commerce</h2>
                    </div>
                    <div style="height:300px;width:600px;text-align: center;font-size: 30px;">
                        
                        <b>B.Sc in Commerce </b>
                        <?php if($advisor){ ?>
                            <blockquote>Advisor: <?php echo $advisor ?></blockquote>
                        <?php }
                        ?>
                        
                        

                        <h1>2020</h1>
                    </div>
                    
                </div>
            </div>
            <?php echo $index; ?>
            <a style="position:absolute;bottom:20px;left:0px;width:100px;padding:15px; text-align:center;background-color:#03002C;text-decoration:none" href="vgrad.php?abc=<?php echo $index-1; ?>">Prev </a>
            <a style="position:absolute;bottom:20px;right:0px;width:100px;padding:15px; text-align:center;background-color:#03002C;text-decoration:none" href="vgrad.php?abc=<?php echo $index+1; ?>">Next </a>
        </div>

    </body>

</html>
