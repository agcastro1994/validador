<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no minimum-scale=1.0, maximum-scale=1.0">
    <title>Validador de Tarjetas</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main-tarjetas.css"/>
    <style>
      @import url("https://fonts.googleapis.com/css?family=Ubuntu");
input, select {
  color: rgba(255, 255, 255, 0.5);
}
input option, select option {
  color: gray;
}

::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

::-moz-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

:-ms-input-placeholder {
  color: rgba(255, 255, 255, 0.5);
}

:-moz-placeholder {
  color: rgba(255, 255, 255, 0.5);
}



#area {
  background: url("/uploads/padded.png");
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  flex-direction: column;
}
#area * {
  font-family: "Ubuntu", sans-serif;
}
#area .master-card {
  padding: 10px;
  border-radius: 10px;
  height: 250px;
  max-height: 2500px;
  width: 400px;
  position: relative;
}
#area .master-card .card {
  padding: 10px;
  border-radius: 10px;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #449db7;
  height: 250px;
  max-height: 250px;
  overflow: hidden;
  width: 400px;
  z-index: 2;
}
#area .master-card .card .title {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  padding-bottom: 5px;
  font-weight: bold;
  color: rgba(255, 255, 255, 0.7);
  font-size: 35px;
  text-align: center;
}
#area .master-card .card .input-number .title-number {
  font-size: 16px;
  color: rgba(255, 255, 255, 0.4);
  padding-top: 5px;
  display: inline-block;
}
#area .master-card .card .input-number .inputs-number {
  display: flex;
}
#area .master-card .card .input-number .inputs-number input {
  background: rgba(255, 255, 255, 0.4);
  color: rgba(255, 255, 255, 0.8);
  border: none;
  height: 20px;
  width: 350px;
  border-radius: 2px;
  padding: 8px 6px;
  text-align: center;
  margin: 13px;
  font-size: 25px;
  letter-spacing: 5px;
}
#area .master-card .card .selects-date {
  height: 40px;
  margin-top: 5px;
  display: flex;
  align-items: center;
  justify-content: initial;
}
#area .master-card .card .selects-date span {
  color: rgba(255, 255, 255, 0.2);
}
#area .master-card .card .selects-date .day-select span, #area .master-card .card .selects-date .year-select span {
  display: block;
  font-size: 12px;
  color: rgba(255, 255, 255, 0.4);
}
#area .master-card .card .selects-date select {
  background: rgba(255, 255, 255, 0.2);
  color: rgba(255, 255, 255, 0.5);
  border: none;
  width: 60px;
  height: 30px;
  border-radius: 2px;
  text-align: center;
  margin: 10px;
}
#area .master-card .card .mark-gold {
  position: absolute;
  bottom: 10px;
  right: 10px;
  border: solid 1px rgba(255, 255, 255, 0.2);
  padding: 5px;
  border-radius: 10px;
  width: 60px;
  height: 70px;
}
#area .master-card .card .mark-gold .round .circles .circle-1 {
  width: 60px;
  height: 35px;
  border-radius: 6px;
  background: #ccc;
  position: relative;
}
#area .master-card .card .mark-gold .round .circles .circle-1:after {
  content: "";
  width: 35px;
  top: 2px;
  left: 2px;
  border-radius: 3px;
  height: 5px;
  background: rgba(255, 255, 255, 0.2);
  position: absolute;
}
#area .master-card .card .mark-gold .round .circles .circle-1:before {
  content: "";
  width: 35px;
  height: 5px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 3px;
  position: absolute;
  bottom: 2px;
  left: 2px;
}
#area .master-card .card .mark-gold .round .circles .circle-2 {
  margin-top: 2px;
  width: 60px;
  height: 35px;
  position: relative;
}
#area .master-card .card .mark-gold .round .circles .circle-2:after {
  content: "";
  width: 35px;
  height: 35px;
  border-radius: 15px;
  background: #f57576;
  position: absolute;
  left: 0;
}
#area .master-card .card .mark-gold .round .circles .circle-2:before {
  content: "";
  width: 35px;
  height: 35px;
  border-radius: 15px;
  background: #ff9d66;
  position: absolute;
  right: 0;
}
#area .master-card .card .name {
  color: rgba(255, 255, 255, 0.5);
  font-size: 20px;
  padding: 25px;
}
h2{
    color: #fff;
}
#area h1 {
  border-radius: 3px;
  border: none;
  font-size: 16px;
  margin-top: 15px;
  padding: 12px 16px;
  background: #f57576;
  color: white;
  font-weight: bold;
  position: relative;
  transition: 0.5s;
}
#area h1:hover {
  top: -1px;
  cursor: pointer;
}


/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Raleway', Arial, Helvetica, sans-serif;
    font-size: 26px;
    background: url("padded/padded/padded.png");
}

.contenedor{
    width: 80%;
    margin: 50px auto;
}

.tarjeta{
    width: 50%;
    margin: auto;
    background: url("tarjeta.png") no-repeat;
    background-size: contain;
    height: 480px;
    border-radius: 5%;

}

.input{
    width: 82%;
    padding: 4px 0;
    font-size: 40px;
    text-align: center;
    flex-shrink: 3;

} */

    </style>
</head>
<div id="area">
        <div class="master-card">
          <div class="card">
            <div class="title">CREDIT CARD</div>
            <div class="input-number"><span class="title-number">CARD NUMBER</span>
              <div class="inputs-number">
                <input type="text" required maxlength="16" onkeypress='return justNumbers(event);' name="number-card" placeholder="0000000000000000"/>
              </div>
              <div class="selects-date selecters">
                <div class="day-select"><span>DAY</span>
                    <select id="dates">
                        <option value="">0</option>
                    </select>
                </div>
                <div class="year-select"><span>YEAR</span>
                    <select id="dates">
                        <option value="">0</option>
                    </select>        
                </div>
              </div>
            </div>
            <div class="mark-gold">
              <div class="round">
                <div class="circles">
                  <div class="circle-1"> </div>
                  <div class="circle-2"> </div>
                </div>
              </div>
            </div>
            <div class="name"><span>LOREM IPSUM DOLOR</span></div>
          </div>
        </div>
        <h1 id="validar">VALIDAR</h1>
        <h2 id="asd"></h2>
      </div>
<!-- <body>
    <div class="contenedor">
        <div class="tarjeta">
            <input type="text" name="" value="" class="input" required maxlength="16" onkeypress='return justNumbers(event);'>
        </div>
        <button class="btn"><h1>Validar</h1></button>
        <h2 id="asd"></h2>
    </div>
            
</body> -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.creditCardValidator.js"></script>
    <script type="text/javascript">
        $("h1").on("click",function(){
            asd = $("input").validateCreditCard()
            document.getElementById("asd").innerHTML = asd.valid ? asd.card_type.name : "Invalid";
        })
    </script>

            
    <script type="text/javascript">
        function justNumbers(e)
            {
                var keynum = window.event ? window.event.keyCode : e.which;
                if ((keynum == 8) || (keynum == 46))
                return true;         
                return /\d/.test(String.fromCharCode(keynum));
            }
    </script>
</html>