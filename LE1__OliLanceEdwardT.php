<!DOCTYPE html>
<html>
    <head>
        <style>
            :root {
  --pink-light: #ff7eb4;
  --pink: #ff2581;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  height: 100vh;
  display: grid;
  justify-content: center;
  align-items: center;
  background: black;
  color: white;
  overflow: hidden;
  font-family: 'Ubuntu', sans-serif;
  margin-top: -8%;
}

input {
    margin-bottom: 20px;
}

.contents .parent {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: -20%;
}

.contents .box {
    flex: 0 1 150px;
    margin: 50px;
}

.icon {
  fill: transparent;
  stroke: var(--pink);
  stroke-width: 20;
  cursor: pointer;
  position: relative;

  svg {
    overflow: visible;
    width: 10rem;
  }

  path {
    stroke-dashoffset: 0;
    stroke-dasharray: 1550;
    transform-origin: center;
  }

  .heart-background {
    position: absolute;
    left: 0;
    right: 0;
    z-index: -1;
    stroke: none;
  }

  .heart-main path {
    animation: stroke-animation 2s ease-in-out forwards;
  }

  .heart-main ~ .heart-background path {
    animation: fade-animation 2s ease-in-out forwards;
  }

}

@keyframes stroke-animation {
  0% {
    stroke-dashoffset: 0;
  }
  30% {
    stroke-dashoffset: 1550;
  }
  60% {
    stroke-dashoffset: 3100;
    fill: transparent;
    transform: scale(1);
  }
  80% {
    fill: var(--pink);
    transform: scale(1.1);
  }
  90% {
    transform: scale(1);
  }
  100% {
    stroke-dashoffset: 3100;
    fill: var(--pink);
  }
}

@keyframes fade-animation {
  70% {
    fill: transparent;
    transform: scale(1);
  }
  80% {
    fill: var(--pink-light);
    transform: scale(1.1);
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    transform: scale(2.5);
    opacity: 0;
  }
}

  /* TEXT BOXES */
  input,
span,
label,
textarea {
  font-family: 'Ubuntu', sans-serif;
  display: block;
  margin: 10px;
  padding: 5px;
  border: none;
  font-size: 22px;
}

#nme, #nme2{
    color: white;
}

textarea:focus,
input:focus {
  outline: 0;
}
/* Question */

input.question,
textarea.question {
  font-size: 48px;
  font-weight: 300;
  border-radius: 2px;
  margin: 0;
  border: none;
  width: 80%;
  background: rgba(0, 0, 0, 0);
  transition: padding-top 0.2s ease, margin-top 0.2s ease;
  overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
}
/* Underline and Placeholder */

input.question + label,
textarea.question + label {
  display: block;
  position: relative;
  white-space: nowrap;
  padding: 0;
  margin: 0;
  width: 10%;
  border-top: 1px solid red;
  -webkit-transition: width 0.4s ease;
  transition: width 0.4s ease;
  height: 0px;
}

input.question:focus + label,
textarea.question:focus + label {
  width: 80%;
}

input.question:focus,
input.question:valid {
  padding-top: 35px;
}

textarea.question:valid,
textarea.question:focus {
  margin-top: 35px;
}

input.question:focus + label > span,
input.question:valid + label > span {
  top: -100px;
  font-size: 22px;
  color: #333;
}

textarea.question:focus + label > span,
textarea.question:valid + label > span {
  top: -150px;
  font-size: 22px;
  color: #333;
}

input.question:valid + label,
textarea.question:valid + label {
  border-color: green;
}

input.question:invalid,
textarea.question:invalid {
  box-shadow: none;
}

input.question + label > span,
textarea.question + label > span {
  font-weight: 300;
  margin: 0;
  position: absolute;
  color: #8F8F8F;
  font-size: 48px;
  top: -66px;
  left: 0px;
  z-index: -1;
  -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
  transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
}

@-webkit-keyframes appear {
  100% {
    opacity: 1;
  }
}

@keyframes appear {
  100% {
    opacity: 1;
  }
}

/* ------------------- SUBMIT BUTTON ------------------------ */

.button-53 {
  background-color: #FFC0CB;
  border: 0 solid #E5E7EB;
  box-sizing: border-box;
  color: #000000;
  display: flex;
  font-size: 1rem;
  font-weight: 700;
  justify-content: center;
  line-height: 1.75rem;
  padding: .75rem 1.65rem;
  text-align: center;
  text-decoration: none #000000 solid;
  text-decoration-thickness: auto;
  width: 100%;
  max-width: 460px;
  position: relative;
  cursor: pointer;
  transform: rotate(-2deg);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-53:focus {
  outline: 0;
}

.button-53:after {
  content: '';
  position: absolute;
  border: 1px solid #000000;
  bottom: 4px;
  left: 4px;
  width: calc(100% - 1px);
  height: calc(100% - 1px);
}

.button-53:hover:after {
  bottom: 2px;
  left: 2px;
}

@media (min-width: 768px) {
  .button-53 {
    padding: .75rem 3rem;
    font-size: 1.25rem;
  }
}

#submitbtn {
    position: absolute;
    left: 50%;
}

/* ----------------------- FIRE EFFECT TEXT ----------- */
.fire {
 color: #f5f5f5; /* Light text color */
 text-align:center; /* Center alignment of text */
 font-family: 'Courier New', Courier, monospace; /* Monospace font for sharp edges */
 font-size: 80px; /* Text size */
 /* Multi-layered text-shadow for fire effect */
 text-shadow:
 0px -1px 3px #fff, /* Innermost layer - intense heat (white) */
 0px -2px 6px #f8bcd0, /* Second layer - core of flame (yellow) */
 0px -6px 12px #f178a1, /* Middle layer - body of flame (orange) */
 0px -10px 20px #e81e63; /* Outermost layer - edges of flame (red) */
}

/* Define the animation named "flicker" */
@keyframes flicker {
    /* Initial state of animation */
    0%, 
    /* Final state of animation */
    100% { 
        text-shadow: 
            0 -1px 3px #fff, /* Innermost layer - intense heat (white) */
            0 -2px 6px #f8bcd0, /* Second layer - core of flame (yellow) */
            0 -6px 12px #f178a1, /* Middle layer - body of flame (orange) */
            0 -10px 20px #e81e63; /* Outermost layer - edges of flame (red) */
    }
    /* Middle state of animation */
    50% { 
        text-shadow: 
            0 -2px 6px #fff, /* Innermost layer - intense heat (white) */
            0 -4px 12px #f8bcd0, /* Second layer - core of flame (yellow) */
            0 -8px 16px #f178a1, /* Middle layer - body of flame (orange) */
            0 -12px 24px #e81e63; /* Outermost layer - edges of flame (red) */
    }
}

.fire {
    /* Apply the "flicker" animation to the .fire class */
    animation: flicker 2s infinite;
}

#output {
    visibility: hidden;
    position: absolute;
}

/* ----------------------- END OF CSS ----------------------- */
        </style>
    </head>
<body>

<h1 align="center" class="fire"> REDEEM YOUR FLAMES </h1>

<form action="" method="POST" id="mainForm" class="contents">

<div class = "parent">

    <div id="p1" class="box">
        <!-- Person 1 -->
        <input type="text" name="name1" class="question" id="nme" required autocomplete="off" />
        <label for="nme"><span>Name</span></label>
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
        <label for="nme2"><span>Name</span></label>
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
if (isset($_POST["submit"])){

    $name1 = strtolower(preg_replace('/\s+/', '', $_POST["name1"]));
    $name2 = strtolower(preg_replace('/\s+/', '', $_POST["name2"]));

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
            \n\nFLAMES Result:\n<?php Print($result); ?>
            ");
    }

</script>

</body>
</html>