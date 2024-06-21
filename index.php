

  <div class='container'>
    <link rel='stylesheet' href='public/css/style.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css'
      integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>

<h1>
    Blood donor
</h1>
    <p>
    Select your blood group to find out to whom you can donate blood.
    </p>
    <div class='cases'>
        <div class='case' id='case1' onclick='scene1()'>
          <p class='case-txt'> O-</p>
        </div>

        <div class='case' id='case2' onclick='scene2()'>
          <p class='case-txt' id='text'>O+</p>
        </div>

        <div class='case' id='case3' onclick='scene3()'>
            <p class='case-txt'> A-</p>
        </div>

        <div class='case'  id='case4'onclick='scene4()'>
            <p class='case-txt'> A+</p>
        </div>

        <div class='case'  id='case5' onclick='scene5()'>
            <p class='case-txt'> B-</p>
        </div>

        <div class='case'  id='case6' onclick='scene6()'>
            <p class='case-txt'> B+</p>
        </div>

        <div class='case' id='case7' onclick='scene7()'>
            <div class='case-txt'> AB-</div>
        </div>

        <div class='case'  id='case8' onclick='scene8()'>
            <div class='case-txt'> AB +</div>
        </div>
    </div>

    <div class='main'>
        <div class='main__top'>
            <div class='main__top__box' id='box'>
                <div class='size' id='size'>

                </div>
            </div>
        </div>

            <div class='main__content'>
                <div class='main__content__line'>
                    <div class='line left'>
                            <div class='peopleL' id='o-I'>
                                <p class='text' id='text'>O-</p> <i class='fas fa-user'></i>
                            </div>

                            <div class='grey' id='o-'>

                            </div>
                    </div>

                    <div class='line right'>
                        <div class='peopleR' id='o+I'>
                            <i class='fas fa-user'></i> <p class='text' id='text'>O+</p>
                        </div>

                        <div class='grey' id='o+'>

                        </div>
                    </div>
                </div>

                <div class='main__content__line'>
                    <div class='line left'>
                            <div class='people peopleL' id='a-I'>
                                <p class='text' id='text'>A-</p> <i class='fas fa-user'></i>
                            </div>

                            <div class='grey' id='a-'>

                            </div>
                    </div>

                    <div class='line right'>
                        <div class='people peopleR' id='a+I'>
                            <i class='fas fa-user'></i>  <p class='text' id='text'>A+</p>
                        </div>

                        <div class='grey' id='a+'>

                        </div>
                    </div>
                </div>

                <div class='main__content__line'>
                    <div class='line left'>
                            <div class='people peopleL' id='b-I'>
                                <p class='text' id='text'>B-</p> <i class='fas fa-user'></i>
                            </div>

                            <div class='grey' id='b-'>

                            </div>
                    </div>

                    <div class='line right'>
                        <div class='people peopleR' id='b+I'>
                            <i class='fas fa-user'></i>  <p class='text' id='text'>B+</p>
                        </div>

                        <div class='grey' id='b+'>

                        </div>
                    </div>
                </div>

                <div class='main__content__line'>
                    <div class='line left'>
                            <div class=' people peopleL LL' id='ab-I'>
                                <p class='text' id='text'>AB-</p> <i class='fas fa-user ' id='ff'></i>
                            </div>

                            <div class='grey' id='ab-'>

                            </div>
                    </div>

                    <div class='line right'>
                        <div class='people peopleR' id='ab+I'>
                            <i class='fas fa-user'></i> <p class='text' id='text'>AB+</p>
                        </div>

                        <div class='grey' id='ab+'>

                        </div>
                    </div>
                </div>

                <div class='main-line' id ='main_line'>

                </div>
            </div>
    </div>
</div>


<style>

@keyframes line {
  0% {
    transform: scaleY(0);
  }
  100% {
    transform: scaleY(1);
  }
}

@keyframes size {
  0% {
    height: 0%;
  }
  33% {
    height: 33%;
  }
  66% {
    height: 60%;
  }
  100% {
    height: 40%;
  }
}

@keyframes size2 {
  0% {
    height: 0%;
  }
  33% {
    height: 33%;
  }
  66% {
    height: 60%;
  }
  100% {
    height: 55%;
  }
}

@keyframes move {
  0% {
    width: 0%;
    margin-left: 0;
  }
  100% {
    width: 100%;
    margin-left: 0;
  }
}

@keyframes moveL {
  0% {
    width: 0%;
    margin: 0;
  }
  100% {
    width: 100%;
    margin: 0;
  }
}

@keyframes moveLL {
  0% {
    width: 0%;
    margin: 0 0 auto auto;
  }
  100% {
    width: 100%;
    margin: 0 0 auto auto;
  }
}

html, body {
  box-sizing: border-box;
}

h1 {
  color: #B51E23;
  text-decoration: underline;
}

.size1, .size2 {
  width: 100%;
  background-color: #B51E23;
  bottom: 0;
  position: absolute;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  animation-duration: 2s;
  animation-timing-function: ease-in-out;
}

.size1 {
  animation-name: size;
  height: 40%;
}

.size2 {
  animation-name: size2;
  height: 55%;
}

.main_line1, .main_line2 {
  transform: scaleY(1);
  height: 100%;
  bottom: 0;
  position: absolute;
  left: 49%;
  width: 13px;
  background-color: #B51E23;
  border: 1px solid;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  transform-origin: top;
}

.main_line1 {
  border: none;
  animation-name: line;
}

.main_line2 {
  border-color: #666666;
  animation-name: line;
}

.container {
  display: block;
  margin: 10px auto;
  width: 330px;
}

.cases {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 280px;
  flex-wrap: wrap;
  margin: 20px auto;
  height: auto;
}

.case {
  border: 1px solid #B51E23;
  border-radius: 10px;
  display: table;
  background-color: #F7F7F7;
  width: 50px;
  height: 50px;
  margin: 5px;
  cursor: pointer;
}

.case:hover {
  border: 2px #B6DCF0 solid;
  font-weight: bold;
}

.case-txt {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
}

.light {
  border: 3px solid #B51E23;
  display: table;
  background-color: #F7F7F7;
  border-radius: 10px;
  width: 50px;
  height: 50px;
  margin: 5px;
  cursor: pointer;
  font-weight: bold;
}

.main {
  display: block;
  width: 270px;
  margin: 20px auto;
}

.main__top {
  padding-left: 10px;
}

.main__top__box {
  margin: auto;
  height: 90px;
  width: 69px;
  border: 10px solid #B6DCF0;
  border-radius: 15px 15px 25px 25px;
  background-color: #666666;
  position: relative;
}

.main__top__box .size {
  width: 100%;
  background-color: #B51E23;
  bottom: 0;
  position: absolute;
  border-radius: 15px;
}

.main__content {
  display: block;
  position: relative;
  height: 200px;
}

.main__content__line {
  display: flex;
  flex-direction: row;
  width: 100%;
  margin-bottom: 2px;
  justify-content: space-between;
}

.line {
  width: 50%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  height: 15px;
  margin: 20px auto;
  position: relative;
}

.peopleL, .LL, .boldL {
  margin-left: -80px;
  display: table;
  margin-top: -10px;
  width: 70px;
}

.boldL {
  position: absolute;
  padding-right: 0;
}

.boldL i, .boldL .text, .peopleL .text, .peopleL i, .peopleR .text, .peopleR i, .boldR .text, .boldR i {
  display: table-cell;
}

.boldR {
  margin-right: -90px;
  display: table;
  margin-top: -10px;
  width: 70px;
}

.grey, .grey1, .greyLL {
  height: 10px;
  width: 100%;
  transition-timing-function: ease-in-out;
  animation-duration: 1500ms;
}

.grey {
  background-color: #666666;
  animation-name: moveL;
}

.grey1, .greyLL {
  background-color: #B51E23;
}

.grey1 {
  animation-name: move;
}

.greyLL {
  animation-name: moveLL;
}

.right {
  flex-direction: row-reverse;
}

.main-line {
  height: 100%;
  top: 0;
  position: absolute;
  border: none;
  left: 49%;
  width: 13px;
  background-color: #666666;
  border: 1px #666666 solid;
}

@media (max-width: 400px) {
  .container {
    width: 280px;
  }
  .main {
    width: 180px;
  }
  .main__content__line .line .peopleL i {
    margin-left: -50px;
  }
}

</style>


<script src='public/js/script.js'></script>


