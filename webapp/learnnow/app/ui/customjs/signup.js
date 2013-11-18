 
 var gCompany;
 
 $( document ).ready(function() {
                 
				 gCompany = new Company();

                $('#simple-colorpicker-1').ace_colorpicker().on('change', function(e,info){
				 
				  $("#custom-navbar").css("background-color",$(this).val());
				});;

                $('#fuelux-wizard').ace_wizard().on('change', function(e, info){
				
				
				
				if(info.step == "1" && info.direction == "next"){
				
				  var companyInfo = getCompanyInfo();
				  gCompany.companyInfo = companyInfo;
				  $("#navbarTitle").text(" L & D - " + companyInfo.name);
				  //validateCompanyInfo();
				
				}
				else if(info.step == "2" && info.direction == "next"){
				    
					var groups = $("input:checkbox[name=groups]:checked").map(function()
					{
						return $(this).val();
					}).get();
					gCompany.companyGroups.groups = groups;
					
					
					
				}
				else if(info.step == "3" && info.direction == "next"){
				 
				   
				    gCompany.companyStyle.navBarColor = $('#simple-colorpicker-1').val();
					
				}
				
				return true;
               
                }).on('finished', function(){
                
				   var interests = $("input:checkbox[name=interests]:checked").map(function()
					{
						return $(this).val();
					}).get();
					
					gCompany.companyInterests.interestedCategories = interests;
				    
					
					$("#newAccountForm").submit();
				   
                }).on('stepclick', function(){
                   //return false;
		
                });
				
								
			    var ace_file_input = $("#avatar").ace_file_input({
					style : 'well',
					btn_choose : 'Select or drop files here',
					btn_change: null,
					droppable: true,
					thumbnail: 'large',

					before_remove: function() {
					
					return true;
						if(upload_in_progress)
							return false;//if we are in the middle of uploading a file, don't allow resetting file input
						return true;
					},

					before_change: function(files, dropped) {
						var file = files[0];
						if(typeof file == "string") {//files is just a file name here (in browsers that don't support FileReader API)
							if(! (/\.(jpe?g|png|gif)$/i).test(file) ) {
								alert('Please select an image file!');
								return false;
							}
						}
						else {
							var type = $.trim(file.type);
							if( ( type.length > 0 && ! (/^image\/(jpe?g|png|gif)$/i).test(type) )
									|| ( type.length == 0 && ! (/\.(jpe?g|png|gif)$/i).test(file.name) )//for android's default browser!
								) {
									alert('Please select an image file!');
									return false;
								}

							if( file.size > 110000 ) {//~100Kb
								alert('File size should not exceed 100Kb!');
								return false;
							}
						}
			
						return true;
					}
				});
				
				//ace_file_input.enable_reset(true);
				
				
				var $form = $('#newAccountForm');
				var file_input = $("#avatar");
				var upload_in_progress = false;
				
				$form.on('submit', function() {
					var submit_url = $form.attr('action');
				
					if(!file_input.data('ace_input_files')) {
					 
				
					return false; 
					
					}//no files selected
					
					var deferred ;
					if( "FormData" in window ) {
						//for modern browsers that support FormData and uploading files via ajax
						var fd = new FormData($form.get(0));
					
						//if file has been drag&dropped , append it to FormData
						if(file_input.data('ace_input_method') == 'drop') {
							var files = file_input.data('ace_input_files');
							if(files && files.length > 0) {
								fd.append(file_input.attr('name'), files[0]);
								//to upload multiple files, the 'name' attribute should be something like this: myfile[]
							}
						}

						upload_in_progress = true;
						deferred = $.ajax({
							url: submit_url,
							type: $form.attr('method'),
							processData: false,
							contentType: false,
							dataType: 'json',
							data: fd,
							xhr: function() {
								var req = $.ajaxSettings.xhr();
								if (req && req.upload) {
									req.upload.addEventListener('progress', function(e) {
										if(e.lengthComputable) {	
											var done = e.loaded || e.position, total = e.total || e.totalSize;
											var percent = parseInt((done/total)*100) + '%';
											//percentage of uploaded file
										}
									}, false);
								}
								return req;
							},
							beforeSend : function() {
							},
							success : function() {
								
							}
						})

					}
					else {
						//for older browsers that don't support FormData and uploading files via ajax
						//we use an iframe to upload the form(file) without leaving the page
						upload_in_progress = true;
						deferred = new $.Deferred
						
						var iframe_id = 'temporary-iframe-'+(new Date()).getTime()+'-'+(parseInt(Math.random()*1000));
						$form.after('<iframe id="'+iframe_id+'" name="'+iframe_id+'" frameborder="0" width="0" height="0" src="about:blank" style="position:absolute;z-index:-1;"></iframe>');
						$form.append('<input type="hidden" name="temporary-iframe-id" value="'+iframe_id+'" />');
						$form.next().data('deferrer' , deferred);//save the deferred object to the iframe
						$form.attr({'method' : 'POST', 'enctype' : 'multipart/form-data',
									'target':iframe_id, 'action':submit_url});

						$form.get(0).submit();
						
						//if we don't receive the response after 60 seconds, declare it as failed!
						setTimeout(function(){
							var iframe = document.getElementById(iframe_id);
							if(iframe != null) {
								iframe.src = "about:blank";
								$(iframe).remove();
								
								deferred.reject({'status':'fail','message':'Timeout!'});
							}
						} , 60000);
					}
					
					
					////////////////////////////
					deferred.done(function(result){
						upload_in_progress = false;
						
						if(result.status == 'OK') {
							
						}
						else {
							
						}
					}).fail(function(res){
						upload_in_progress = false;
						
						
						console.log(res.responseText);
					});
                    
					/*Get an image id, from the logo upload*/
					createAccount();
					deferred.promise();
					return false;
				});
				
				$form.on('reset', function() {
					file_input.ace_file_input('reset_input');
				});


				if(location.protocol == 'file:') alert("For uploading to server, you should access this page using a webserver.");
        });    


		
function CompanyInfo(){
 
	this.name= "";
	this.url="";
	this.contactEmail="";
	this.password=""; 
 
}		

function CompanyStyle(){

  this.navBarColor = "";
  this.imgId = "";
  
}

function CompanyGroups(){
 
 this.groups = "";

}

function CompanyInterests(){

    this.interestedCategories = "";
  
}
		
		
function Company(){

	this.companyInfo = new CompanyInfo();
	this.companyStyle = new CompanyStyle();
	this.companyGroups = new CompanyGroups();
	this.companyInterests = new CompanyInterests();

}
		
function getCompanyInfo(){

    var compInfo = new CompanyInfo();
	
	compInfo.name = $("#company-name").val();
	compInfo.url= $("#company-url").val();
	compInfo.contactEmail= $("#company-email").val();
	compInfo.password= $("#password-1").val(); 
	
	if($("#password-1").val() != $("#password-2").val()){
	 alert("Passwords do not match");
	}
	
    
	return compInfo;
}

function createAccount(){

  //alert("here");
  var json = JSON.stringify(gCompany);

		  $.ajax({
		  type: "POST",
		  url: "/learnnow/app/ui/forms/createNewAccount.php",
		  data: { compInfo: json },
		  success: successFn,
		  dataType: "json"
		});


}

function successFn(data){
 

 // alert("here - 1");
  if(data.code == "200"){
    window.location="/learnnow/app/ui/dashboard.php";
  }
  
}
