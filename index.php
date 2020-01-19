<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Object Oriented PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
</head>
<body>
    
    <!--start coding-->
    <div class="container-fluid">
        <div class="alert alert-primary">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="form-group">
                    <label for="input1">First number</label>
                    <input type="number" name="num1" placeholder="Enter first number" id="input1" class="form-control" required="">
                    <label for="input2">second number</label>
                    <input type="number" name="num2" placeholder="Enter first number" id="input2" class="form-control" required="">
                </div>
                <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
            </form>
        </div>

        <!--result-->
        <div class="alert alert-success">
            <?php
            
            class Summation{

                public function add($n1, $n2){
                    $sum = $n1 + $n2;
                    echo "The summation is = " . $sum . "<br>";
                }

                public function sub($n1, $n2){
                    $sum = $n1 - $n2;
                    echo "The minus is = " . $sum . "<br>";
                }

            }

            if(isset($_POST["calculate"])){

                $fnum = inputTest($_POST["num1"]);
                $snum = inputTest($_POST["num2"]);

                if(empty($fnum) or empty($snum)){
                    echo "<span class='text-danger'>Field must not be empty.</span>";
                }else{
                    $testOb = new Summation;
                    $testOb->add($fnum, $snum);
                    $testOb->sub($fnum, $snum);
                }
                
            }

            function inputTest($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            ?>
        </div>
    </div>
    
    <!--bootstrap js-->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>