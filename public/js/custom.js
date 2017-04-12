// JavaScript Document
// multiple modal hide one after another

		$(function() {
				return $(".modal").on("show.bs.modal", function() {
						var curModal;
						curModal = this;
						$(".modal").each(function() {
								if (this !== curModal) {
										$(this).modal("hide");
								}
						});
				});
		});
					
					
					
					
//add class in dashboard minus button

		$(document).ready(function(){
					$('.collepse-minus').on('click', function(e){
							$('.collepse-minus').toggleClass('collepse-minus-open');
					});
		});
		
		
		
//comment show		show-comment
		
		$(".show-comment").click(function(){
						$("#listCommentBox").show();
		});




// return to plans

		$(".return-toplan").click(function(){
						$("#listCommentBox").hide();
		});
		
		
		
		
//		popup-custom   show

	$(".popup-custom-show").click(function(){
						$(".popup-custom").show();
		});
		
		
		
		
//		popup-custom  hide

	$(".popup-custom-hide").click(function(){
						$(".popup-custom").hide();
		});