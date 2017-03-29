<!-- header Start-->
<div class="header">
  <div class="container header-container">
    <div class="row">
      <div class="col-sm-4 pt-1" >
        <table>
          <tr>
            <td><img class="img-responsive" src="images/12-dollar-badge.png" alt=""></td>
            <td><div class="logo-signup" style=""> <a id="newUser" href="#" class="button  signup">Sign up</a> <br/>
                and receive a one month<br/>
                free trial. </div></td>
          </tr>
        </table>
      </div>
      <div class="col-sm-4 text-center head-center"><img class="img-responsive" src="images/planbook.png" alt=""></div>
      <div class="col-sm-4">
        <form>
          <div class="header-form text-right">
            <p> <span class="text-bold">Login</span> <span id="viewPlans" class="form-top navButton">Student View</span> <span  id="forgotPW" class="form-top navButton">Forgot Password</span> </p>
            <p>
              <input type="text" id="loginEmail" class="hf-input"  placeholder="Email Address">
            </p>
            <p>
              <input type="password" id="loginPW" class="hf-input"  placeholder="Password">
            </p>
            <table>
              <tr>
                <td><div class="loginerr-box">
                    <p id="loginErrorMsg" class="error"></p>
                  </div></td>
                <td><div class="head-f-s">
                    <input type="submit" name="applyLogin" id="applyLogin" class="button" value="Login" >
                    <p id="loadingMsg" class="text-bold mt-1" >Loading...</p>
                  </div></td>
              </tr>
            </table>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- header End--> 
<!--Navigation Start-->
<nav class="navbar m-0 br-0  bg-theme ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"> <a class=" navButton"  href="#planbook" >Planbook <span class="sr-only">(current)</span></a> </li>
        <li> <a class=" navButton" href="#gradebook">Gradebook</a> </li>
        <li> <a class=" navButton" href="#admin" >Administrators</a> </li>
        <li> <a class=" navButton" href="#student" >Students</a> </li>
        <li> <a class=" navButton" href="#reviews" >Reviews</a> </li>
        <li> <a class=" navButton" href="#mobile" >Mobile Apps</a> </li>
        <li> <a class=" navButton" href="#pricing" >Pricing</a> </li>
        <li> <a class=" navButton" href="#tutorials" >Tutorials</a> </li>
      </ul>
     </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Navigation End--> 