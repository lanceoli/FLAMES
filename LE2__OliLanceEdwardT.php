<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="webstyle.css">
    </head>
<body>

<h1 align="center" class="fire"> REDEEM YOUR FLAMES </h1>

<form action="" method="POST" id="mainForm" class="contents">

<div class = "parent">

    <div id="p1" class="box">
        <!-- Person 1 -->
        <input type="text" name="name1" class="question" id="nme" required autocomplete="off" />
        <label for="nme"><span>First Name</span></label>
        <br>
        <input type="text" name="surname1" class="question" id="nme" required autocomplete="off" />
        <label for="nme"><span>Surname</span></label>
        <br>
        &nbsp; Birthday <br>
        <input type="date" name="bday1" required autocomplete="off"><br>
    </div>

    <div class="icon box">
        <svg class="heart-main" viewBox="0 0 512 512" width="100" title="heart">
        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
        </svg>
        <svg class="heart-background" viewBox="0 0 512 512" width="100" title="heart">
        <path d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" />
        </svg>
    </div>

    <div id="p2" class="box">
        <!-- Person 2 -->
        <input type="text" name="name2" class="question" id="nme2" required autocomplete="off" />
        <label for="nme2"><span>First Name</span></label>
        <br>
        <input type="text" name="surname2" class="question" id="nme2" required autocomplete="off" />
        <label for="nme2"><span>Surname</span></label>
        <br>
        &nbsp; Birthday <br>
        <input type="date" name="bday2" required autocomplete="off"><br>
    </div>

</div>
<div id="submitbtn">
    <input id="submittedbtn" type="submit" class="button-53" name="submit" value="show me">
</div>

</form>

<div id='output'> noice </div>

<!-- ----------------------- END OF HTML ----------------------- -->
<?php

class Person {
    public $first_name;
    public $last_name;
    public $birthday;
    // public $Zodiac;
  
    function __construct($first_name, $last_name, $birthday) { // , $zodiac_sign, $symbol, $start_date, $end_date
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->birthday = $birthday;
      $this->Zodiac = new class ($birthday){

        public $date;
        public $zodiac_sign;
        public $symbol;
        public $start_date;
        public $end_date;

        function __construct($date){
            //   process to retrieve Zodiac.txt contents
            $line = array();
            $data = file("Zodiac.txt");
            foreach($data as $line_text) {
                array_push($line, $line_text);
            }

            for($i=0; $i <= count($line)-1; $i++) {
                // retrieve each data of row
                $result = explode(';', $line[$i]);
                // start date
                // $start_timestamp = strtotime($result[2]); 
                $start_timestamp = strtotime(date('d M ', strtotime($result[2])) . date( 'Y' )); 
                // $start_date=date('d',$start_timestamp);
                // $start_month=date('m',$start_timestamp);

                // end date
                // $end_timestamp = strtotime($result[3]); 
                $end_timestamp = strtotime(date('d M ', strtotime($result[3])) . date( 'Y' ));
                // $end_date=date('d',$end_timestamp);
                // $end_month=date('m',$end_timestamp);

                // input birthday
                // $date = $this->birthday;
                // $bday_timestamp = strtotime($date); 
                $bday_timestamp = strtotime(date('d M ', strtotime($date)) . date( 'Y' ));
                // $bday_date=date('d',$bday_timestamp);
                // $bday_month=date('m',$bday_timestamp);

                // condition for checking if input birthday is within range of zodiac dates
                if ($bday_timestamp >= $start_timestamp && $bday_timestamp <= $end_timestamp) {
                    $this->zodiac_sign = $result[0];
                    $this->symbol = $result[1];
                }
            } // for-loop data retrieval and processing

        } // zodiac constructor

        function ComputeZodiacCompatibility($zodiac1, $zodiac2){

            $zodiacSigns = [
                "Aries", "Leo", "Sagittarius", "Taurus", "Virgo", "Capricorn", 
                "Gemini", "Libra", "Aquarius", "Cancer", "Scorpio", "Pisces"
            ];
        
            // compatibility matrix
            $compatibilityMatrix = [
                // Aries, Leo, Sagittarius, Taurus, Virgo, Capricorn, Gemini, Libra, Aquarius, Cancer, Scorpio, Pisces
                ["❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "👍 Favorable Match"], // Aries
                ["❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "👍 Favorable Match", "👍 Favorable Match", "👍 Favorable Match"], // Leo
                ["❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "👍 Favorable Match", "👍 Favorable Match", "👍 Favorable Match"], // Sagittarius
                ["❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"], // Taurus
                ["❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "👍 Favorable Match", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"], // Virgo
                ["❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"], // Capricorn
                ["❤️ Great Match", "❤️ Great Match", "👍 Favorable Match", "❌ Not Favorable", "👍 Favorable Match", "👍 Favorable Match", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable"], // Gemini
                ["👍 Favorable Match", "❤️ Great Match", "❤️ Great Match", "👍 Favorable Match", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "👍 Favorable Match"], // Libra
                ["❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "👍 Favorable Match", "👍 Favorable Match"], // Aquarius
                ["❌ Not Favorable", "👍 Favorable Match", "👍 Favorable Match", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"], // Cancer
                ["👍 Favorable Match", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match", "❌ Not Favorable", "❌ Not Favorable", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"], // Scorpio
                ["👍 Favorable Match", "👍 Favorable Match", "👍 Favorable Match", "❤️ Great Match", "👍 Favorable Match", "❤️ Great Match", "❌ Not Favorable", "👍 Favorable Match", "❌ Not Favorable", "❤️ Great Match", "❤️ Great Match", "❤️ Great Match"]  // Pisces
            ];
        
            $index1 = array_search($zodiac1, $zodiacSigns);
            $index2 = array_search($zodiac2, $zodiacSigns);
        
            if ($index1 === false || $index2 === false) {
                return "Invalid zodiac sign(s). Please provide valid zodiac signs.";
            }
        
            return $compatibilityMatrix[$index1][$index2];
            
        }

      }; // zodiac class
    
    }
    function GetFullName() {
      return $this->first_name . " " . $this->last_name;
    }
  }

if (isset($_POST["submit"])){

    // create persons objects
    $person1 = new Person($_POST["name1"], $_POST["surname1"], $_POST["bday1"]);
    $person2 = new Person($_POST["name2"], $_POST["surname2"], $_POST["bday2"]);

    $name1 = strtolower(preg_replace('/\s+/', '', $person1->GetFullName()));
    $name2 = strtolower(preg_replace('/\s+/', '', $person2->GetFullName()));

    $name1_count = 0;
    $name2_count = 0;

    for($i=0; $i < strlen($name1); $i++){

        for($j=0; $j < strlen($name2); $j++){
            if ($name1[$i] == $name2[$j]){
                $name1_count++;
                break;
            }
        }
        
    }

    for($i=0; $i < strlen($name2); $i++){

        for($j=0; $j < strlen($name1); $j++){
            if ($name2[$i] == $name1[$j]){
                $name2_count++;
                break;
            }
        }
        
    }

    // FLAMES Formula
    $flames = ($name1_count + $name2_count) % 6;
    $result = NULL;

    switch($flames){
        case 1:
            $result = "FRIENDS";
            break;
        case 2:
            $result = "LOVERS";
            break;
        case 3:
            $result = "ANGER";
            break;
        case 4:
            $result = "MARRIED";
            break;
        case 5:
            $result = "ENGAGED";
            break;
        case 0:
            $result = "SOULMATES";
            break;
    }

    // Zodiac Sign
    if (isset($_POST['bday1']) && isset($_POST['bday2'])) {
        $timestamp1 = strtotime($_POST['bday1']); 
        $date1=date('d',$timestamp1);
        $month1=date('m',$timestamp1);

        $timestamp2 = strtotime($_POST['bday2']); 
        $date2=date('d',$timestamp2);
        $month2=date('m',$timestamp2);
    }

    $zodiac1 = NULL;
    $zodiac2 = NULL;

    switch($month1){
        case 01:
            if($date1 <= 19){
                $zodiac1 = "♑︎ Capricorn ♑︎";
            } else {
                $zodiac1 = "♒︎ Aquarius ♒︎";
            }
            break;

        case 02:
            if($date1 <= 18){
                $zodiac1 = "♒︎ Aquarius ♒︎";
            } else {
                $zodiac1 = "♓︎ Pisces ♓︎";
            }
            break;
        case 03:
            if($date1 <= 20){
                $zodiac1 = "♓︎ Pisces ♓︎";
            } else {
                $zodiac1 = "♈︎ Aries ♈︎";
            }
            break;
        case 04:
            if($date1 <= 19){
                $zodiac1 = "♈︎ Aries ♈︎";
            } else {
                $zodiac1 = "♉︎ Taurus ♉︎";
            }
            break;
        case 05:
            if($date1 <= 20){
                $zodiac1 = "♉︎ Taurus ♉︎";
            } else {
                $zodiac1 = "♊︎ Gemini ♊︎";
            }
            break;
        case 06:
            if($date1 <= 21){
                $zodiac1 = "♊︎ Gemini ♊︎";
            } else {
                $zodiac1 = "♋︎ Cancer ♋︎";
            }
            break;
        case 07:
            if($date1 <= 22){
                $zodiac1 = "♋︎ Cancer ♋︎";
            } else {
                $zodiac1 = "♌︎ Leo ♌︎";
            }
            break;
        case 8:
            if($date1 <= 22){
                $zodiac1 = "♌︎ Leo ♌︎";
            } else {
                $zodiac1 = "♍︎ Virgo ♍︎";
            }
            break;
        case 9:
            if($date1 <= 22){
                $zodiac1 = "♍︎ Virgo ♍︎";
            } else {
                $zodiac1 = "♎︎︎ Libra ♎︎︎";
            }
            break;
        case 10:
            if($date1 <= 23){
                $zodiac1 = "♎︎︎ Libra ♎︎︎";
            } else {
                $zodiac1 = "♏︎ Scorpio ♏︎";
            }
            break;
        case 11:
            if($date1 <= 21){
                $zodiac1 = "♏︎ Scorpio ♏︎";
            } else {
                $zodiac1 = "♐︎ Sagittarius ♐︎";
            }
            break;
        case 12:
            if($date1 <= 21){
                $zodiac1 = "♐︎ Sagittarius ♐︎";
            } else {
                $zodiac1 = "♑︎ Capricorn ♑︎";
            }
            break;
    }

    switch($month2){
        case 01:
            if($date2 <= 19){
                $zodiac2 = "♑︎ Capricorn ♑︎";
            } else {
                $zodiac2 = "♒︎ Aquarius ♒︎";
            }
            break;

        case 02:
            if($date2 <= 18){
                $zodiac2 = "♒︎ Aquarius ♒︎";
            } else {
                $zodiac2 = "♓︎ Pisces ♓︎";
            }
            break;
        case 03:
            if($date2 <= 20){
                $zodiac2 = "♓︎ Pisces ♓︎";
            } else {
                $zodiac2 = "♈︎ Aries ♈︎";
            }
            break;
        case 04:
            if($date2 <= 19){
                $zodiac2 = "♈︎ Aries ♈︎";
            } else {
                $zodiac2 = "♉︎ Taurus ♉︎";
            }
            break;
        case 05:
            if($date2 <= 20){
                $zodiac2 = "♉︎ Taurus ♉︎";
            } else {
                $zodiac2 = "♊︎ Gemini ♊︎";
            }
            break;
        case 06:
            if($date2 <= 21){
                $zodiac2 = "♊︎ Gemini ♊︎";
            } else {
                $zodiac2 = "♋︎ Cancer ♋︎";
            }
            break;
        case 07:
            if($date2 <= 22){
                $zodiac2 = "♋︎ Cancer ♋︎";
            } else {
                $zodiac2 = "♌︎ Leo ♌︎";
            }
            break;
        case 8:
            if($date2 <= 22){
                $zodiac2 = "♌︎ Leo ♌︎";
            } else {
                $zodiac2 = "♍︎ Virgo ♍︎";
            }
            break;
        case 9:
            if($date2 <= 22){
                $zodiac2 = "♍︎ Virgo ♍︎";
            } else {
                $zodiac2 = "♎︎︎ Libra ♎︎︎";
            }
            break;
        case 10:
            if($date2 <= 23){
                $zodiac2 = "♎︎︎ Libra ♎︎︎";
            } else {
                $zodiac2 = "♏︎ Scorpio ♏︎";
            }
            break;
        case 11:
            if($date2 <= 21){
                $zodiac2 = "♏︎ Scorpio ♏︎";
            } else {
                $zodiac2 = "♐︎ Sagittarius ♐︎";
            }
            break;
        case 12:
            if($date2 <= 21){
                $zodiac2 = "♐︎ Sagittarius ♐︎";
            } else {
                $zodiac2 = "♑︎ Capricorn ♑︎";
            }
            break;
    }
}

?>

<script>
    const inputs = document.querySelectorAll('input');

    inputs.forEach(el => {
    el.addEventListener('blur', e => {
        if(e.target.value) {
        e.target.classList.add('dirty');
        } else {
        e.target.classList.remove('dirty');
        }
    })
    })
    
    window.onload = function showResult(){
        alert("<?php Print($_POST["name1"] . "'s Zodiac Sign: ". $zodiac1); ?>
            \n<?php Print($_POST["name2"] . "'s Zodiac Sign: ". $zodiac2); ?>
            \n\nZodiac Compatibility:\n<?php Print($person1->Zodiac->ComputeZodiacCompatibility($person1->Zodiac->zodiac_sign, $person2->Zodiac->zodiac_sign)); ?>
            \n\nFLAMES Result:\n<?php Print($result); ?>
            ");
    }

</script>

</body>
</html>