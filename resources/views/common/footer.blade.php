<!--footer content-->
<div class="footer full-section p-5">
  <div class="container">
    <div class="row" >
      <ul class="footer-img text-center p-0 full-section">
        <li><img  src="images/planbookwhite.png" alt=""></li>
        <li><a href="http://www.facebook.com/planbookcom" target="_blank" title="Follow us on Facebook"  class="ml-4"><img src="images/facebook.png"></a></li>
        <li><a href="http://www.twitter.com/planbookcom" target="_blank" title="Follow us on Twitter" class="ml-4"><img src="images/twitter.png"></a></li>
      </ul>
    </div>
  </div>
  <ul class="p-3 m-0 full-section text-center footer-supline">
    <li><a id="termLink" href="help/terms.html" target="_blank" class="navButton">Terms of Service</a></li>
    <li><a id="privacyLink" href="help/privacy.html" target="_blank" class="navButton">Privacy Policy</a></li>
    <li>support@planbook.com</li>
    <li>(888) 205-5528 </li>
  </ul>
</div>
<!--footer end--> 
<!-- popup-studentlogin-->
<div id="studentLoginBox" class="editBox">
  <p class="popup-heading">Student View</p>
  <div class="editBoxRow alertContainer text-center">
    <div class="alertImage"> <img src="images/icon-alert.png" /> </div>
    <div class="alertMessage" id="studentErrorMsg"> </div>
  </div>
  <div class="pl-4 pt-4 pr-4">
    <form>
      <input id="shareEmail" name="shareEmail" type="email" placeholder="Email Address or Student ID" class="popup-input mb-4" />
      <input id="shareKey" name="shareKey" type="password" placeholder="Student Key" class="popup-input mb-4"  />
      <div class=" mb-4">
        <input type="submit" name="applyStudent" id="applyStudent" class="button popup-btn" value="Sign In" />
        <input type="button" id="cancelStudent" class="greybutton popup-btn" Value="Cancel"  />
      </div>
    </form>
  </div>
</div>
<!-- popup-studentlogin-->
<div id="overview" class="modalDialog" style="display:none;">
  <div> <a id="closeVideoBox" href="javascript:void(0);" title="Close" class="close">X</a>
    <video id="planbookVideo" width="699px" height="393px" controls>
      <source src="help/planbook.mp4" type="video/mp4">
      Your browser does not support the video tag. </video>
  </div>
</div>

<!-- popup-re-->
<div id="retrievePW" class="editBox">
  <p class="popup-heading">Retrieve Password</p>
  <div class="pl-4 pt-4 pr-4">
    <form>
      <input id="retrieveEmail" name="retrieveEmail" type="email" placeholder="Email Address" class="popup-input" />
      <div class="mt-4">
        <input type="submit" name="mailPW" id="mailPW" class="button" value="Retrieve Password"  />
        <span id="emailSending" class="full-section">Sending password...</span>
        <input type="button" id="cancelRetrieve" class="greybutton  popup-btn" Value="Cancel" />
        <p id="retrievePWErrorMsg" class="error mt-1">&nbsp;</p>
      </div>
    </form>
  </div>
</div>
<div id="load">
  <div class="p-3"> <span>Loading</span> <img src="images/ajax-loader.gif"> </div>
</div>

@include('common.script')
@stack('js')

