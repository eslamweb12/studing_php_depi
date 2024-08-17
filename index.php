<?php
// for delcare variable
$name="eslam elsayed";
echo $name;

/* ---------------------------*/


// for delclaring array 
$arr=[1,"elslm","elsayed"];
echo $arr[0];
echo "<br>";
print_r($arr);
echo "<br>";

array_push($arr,"abdlabakey");

for($i=0;$i<3;$i++){
    echo $arr[$i];
    echo "<br>";

}

/* ---------------------------*/

// if condition 
$x=10;
if($x<12){
    echo "yes you are right";
    echo "<br>";
}else{
    echo "yes you are wrong";
}

/* -------------ending of if--------------*/

// associative array and foreach
$arry=[
    "userName"=>"eslam elsayed",
    "email"=>"eslam@afdm.conn",
];

foreach($arry as $key=>$arr){
    echo $key."<br>";
}

foreach($arry as $ar){
    echo $ar."<br>";
}
/* --------------ending of foreach and array assoative-------------*/

// built in function in array


// 1 -array chunck to make the array like chunk
$arrayChunck=[
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
    "product1",
];

$result=array_chunk($arrayChunck,3);

foreach($result as $arr){
    foreach($arr as $a){
        print_r($a);
        echo "<br>";
    }
    echo "<br>";
}



// 2-array_column for getting column from the array that has an assoisative array 
$arrayColumn=[
    [
        "username"=>"eslamelsaye",
        "email"=>"eslam@fdfdffff.conn",
        "salary"=>10000,
    ],
    [
        "username"=>"gmaillfd",
        "email"=>"eslam@gffmail.conn",
        "salary"=>10000,
    ],
    [
        "username"=>"eslyfd",
        "email"=>"eslam@eeegmail.conn",
        "salary"=>10000,
    ],
];
$res=array_column($arrayColumn,"salary");
print_r($res);


// 3-array_combine for conbining two array in one array

$array_one=["one","two","three"];
$array_two=["eslam","elsaye","abdelbakey"];

$arrayCombine=array_combine($array_one,$array_two);
print_r($arrayCombine);
foreach($arrayCombine as $key =>$arrr){

    echo $arrr;
    echo "<br>";
    echo $key;
    echo "<br>";
}



// 4-array_diff for showing the diffrence between two array
$array_one=["one","two","three"];
$array_two=["two","three","abdelbakey"];

$reslutt=array_diff($array_one,$array_two);
print_r($reslutt);


// 5-array_diff_assosative for showing the between two assosiative array

//  implode for converting the array to string
$array_one=["one","two","three"];
$reuse=implode("-", $array_one);
print_r($reuse);


//6- array_value   for showing the values of the assoative array
$assov=[
    "username"=>"eslamelsaye",
    "email"=>"eslam@fdfdffff.conn",
    "salary"=>10000,
];

print_r(array_values($assov));
echo "<br>";


// 7-array_keys   for showing the keys of the assoative array
$assov=[
    "username"=>"eslamelsaye",
    "email"=>"eslam@fdfdffff.conn",
    "salary"=>10000,
];

print_r(array_keys($assov));
echo "<br>";    



// 8-array_key_first for showing the first element in the array
$assov=[
    "username"=>"eslamelsaye",
    "email"=>"eslam@fdfdffff.conn",
    "salary"=>10000,
];


print_r(array_key_first($assov));
echo "<br>";



//9- array_key_first for showing the last element in the array
$assov=[
    "username"=>"eslamelsaye",
    "email"=>"eslam@fdfdffff.conn",
    "salary"=>10000,
];


print_r(array_key_last($assov));


//10 array_merge for merging two array togetther


$array_one=["one","two","three"];
$array_two=["two","three","abdelbakey"];

print_r(array_merge($array_one,$array_two));


//11- count and sizeof for know the siz of the array
print_r(count($array_one));
echo "<br>";
print_r(sizeof($array_one));





/* ------------ending of array function buit in ---------------*/




//string buit in function 

//1-explode for converting string to array

$email="eslam@gmail@fdfffff";
print_r( explode("@",$email))   ;
echo "<br>";

// 2-strlen  for getting the length of string


$email="eslam@gmailfdfffff";
echo strlen($email);
echo "<br>";


// 3-strstr for getting from chartctar in string to the end of the charachter
$email="eslam@gmail@fdfffff";
echo strstr($email,"@"); //but if i add true at the end of this function it will return the character before the sign "@" so th echo strstr($email,"@",true);;
echo "<br>";


//4-substr for get some of string from the string
$email="eslam@gmail@fdfffff";
echo substr($email ,2,4);// it returns form 2 to  and the count will be 4
echo "<br>";


//5-str_contains  for check if the string contain this charchter or not 
$string='dffdfdfdsfdsfds';
$new= str_contains($string,'ff');


// str_replace for replacing some chareters by others
$string='dffdfdfdsfdsfds';
$new=str_replace('dff','eslam',$string);
echo $new;



//rand for getting a random number 
echo rand(0,999999);




/*-------------------ending of the section of the string---------------- */



/*starting of validtion in php  */


// diffrence between include and require that include if i have an error in the including it will run the other things in the page 
//but require if it has an error in the require it will show an error and will not run the other code 

/* 
1-include_once => it checks if the file include this page it will not reinclude it again
2-include =>you can include the file more than one time
  */


include_once "helpers/validation.php";

include "helpers/connectionDb.php";
include "models/userModel.php";
$result=getAllusers();


// prints and showing the result in a table









?>
<html>
    <head>
        <title>home</title>

    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>username</th>
                    <th>email</th>
                    <th>password</th>
                    <th>phone</th>
                </tr>
            </thead>
       
                <?php foreach($result as $res){?>
                <tr>
                    <td><?php echo $res['username'] ?></td>
                    <td><?php echo $res['email'] ?></td>
                    <td><?php echo $res['password'] ?></td>
                    <td><?php echo $res['phone'] ?></td>
                </tr>
                <?php }?>
                
            </tbody>
        </table>
        

    </body>
</html>




 <!-- starting of section html -->



<!-- <html>

<head>
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <style>
        form{
            max-width: 600px;
            margin: 25px auto;

        }
     </style>

</head>
<body>
    <?php  include_once "helpers/layout.php"?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
</body>

</html> -->







