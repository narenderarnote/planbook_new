<div class="modal-dialog">
   <!-- Modal content-->
   <div class="modal-content">
      <form method="post" action="#" class="editlessonform editscore-form">
         <div class="modal-header">
            <div class="normalLesson pull-left">
               <p>Score Weighting</p>
            </div>
            <div class="actionright pull-right">
               <button class="actiondropbutton renew-button">Save</button>
               <a class="closebutton" data-dismiss="modal"><i class="fa fa-close d-popoup-close" aria-hidden="true"></i></a> 
            </div>
         </div>
         <div class="modal-body editscore-body">
            <p>Percents for Assignments and Assessments must total to 100 percent. To add sample score weights, <a href="#">click here</a></p>
            <p>Score Weighting for <span style="color:#0057C1; font-weight:bold;" id="scoreWeightLabel">Mathematics</span></p>
            <div class="added-daysection added-assessmentbox">
               <p>Assignments <a href="javascript:;" class="main-buton assignmentAdd"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
           </div>
            <div class="addedassignment assignment-table">
               <table>
                  <thead>
                     <tr class="tHeader">
                        <th style="width:350px;">Assignment Type</th>
                        <th>Percent</th>
                        <th style="background-color:#dbdfe8; border:none;"></th>
                     </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
               </table>
            </div>
            <div class="added-daysection added-assessmentbox">
               <p>Assessments <a href="javascript:;" class="assessmentAdd main-buton"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
            </div>
            <div class="assignment-table addedassessment">
               <table>
                  <thead>
                     <tr class="tHeader">
                        <th style="width:350px;">Assessment Type</th>
                        <th>Percent</th>
                        <th style="background-color:#dbdfe8; border:none;"></th>
                     </tr>
				  
                  </thead>
                  <tbody>
                     
                  </tbody>
               </table>
            </div>
            <div class="added-daysection added-assessmentbox">
               <p>Standards<a href="javascript:;" class="main-buton standardAdd"><i class="fa fa-plus" aria-hidden="true"></i></a></p>
            </div>
            <div class="assignment-table addedStandards">
               <table>
                  <thead>
                     <tr class="tHeader">
                        <th style="width:75px;">ID</th>
                        <th style="width:348px;">Name</th>
                        <th style="background-color:#dbdfe8; border:none;"></th>
                     </tr>
                  </thead>
                  <tbody>
                     
                  </tbody>
               </table>
            </div>
         </div>
      </form>
   </div>
</div>

<script>
   $(document).on('click','.assignmentAdd',function(){
      var html = '';
      html += '<tr>';
      html += '<td><input id="nameAssignmentWeight0" size="45" value="" type="text"></td>';
      html += '<td><input id="percentAssignmentWeight0" size="6" value="" type="text" class="perchantage-input"></td>';
      html += '<td><i class="fa fa-close closeicon-assessment" aria-hidden="true"></i></td>';
      html += '</tr>';
      $('.addedassignment tbody').append(html);
   });

   $(document).on('click','.assessmentAdd',function(){
      var html = '';
      html += '<tr>';
      html += '<td><input id="nameAssignmentWeight0" size="45" value="" type="text"></td>';
      html += '<td><input id="percentAssignmentWeight0" size="6" value="" type="text" class="perchantage-input"></td>';
      html += '<td><i class="fa fa-close closeicon-assessment" aria-hidden="true"></i></td>';
      html += '</tr>';
      $('.addedassessment tbody').append(html);
   });

   $(document).on('click','.standardAdd',function(){
      var html = '';
      html += '<tr>';
      html += '<td><input size="6" name="sTitle[]"value="" type="text"></td>';
      html += '<td><input size="45" name="sId[]" value="" type="text" class="perchantage-input"></td>';
      html += '<td><i class="fa fa-close closeicon-assessment" aria-hidden="true"></i></td>';
      html += '</tr>';
      $('.addedStandards tbody').append(html);
   });

   $(document).on('click','.closeicon-assessment',function(){
      $(this).closest("tr").fadeOut(300);

   })
</script>

