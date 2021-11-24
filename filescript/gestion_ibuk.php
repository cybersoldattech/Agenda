<?php

if(session_id()== ""){session_start();}
if(!isset($_SESSION['ADINKRA']) || !isset($_SESSION['ADINKRA']['USER_ID'])){
	header('location: index.php');
}else{
	$_SESSION['ADINKRA']['MENU'] = "MENU_ACCEUIL";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>ADINKRA</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="./assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <link rel="stylesheet" href="./assets/vendor/cubeportfolio/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="./assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./assets/vendor/fancybox/dist/jquery.fancybox.css">
	<link rel="stylesheet" href="bootstrap-datepicker/1.3.0/css/datepicker.min.css" type="text/css"/>
	<link rel="stylesheet" href="bootstrap-datepicker/1.3.0/css/datepicker3.min.css" type="text/css"/>  
	<link rel="stylesheet" href="bootstrap-datepicker/1.3.0/css/datepicker3.min.css" type="text/css"/>	
    <!-- CSS Vodi Template -->
    <link rel="stylesheet" href="./assets/css/theme.css">
	<link rel="stylesheet" href="table_responsive/css/dataTables.bootstrap.min.css" type="text/css"/>
	<link rel="stylesheet" href="table_responsive/css/responsive.bootstrap.min.css" type="text/css"/>
	<link rel="stylesheet" href="humane/libnotify.css" type="text/css"/>
	<link rel="stylesheet" href="humane/jackedup.css" type="text/css"/>
	<!--------------------------------------->
	<link rel="stylesheet" href="datatables4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="bootstrap/4.5.3/css/responsive.bootstrap4.min.css">
		
	<!--------------------------------------->
	<style>
	.fa{color: white;}
	</style>
</head>
<body>
<?php
include("entete.php");
include("content/gestion_ibuk_content.php");
?>
<?php
include("footer.php")
?>
    <!-- ========== SECONDARY CONTENTS ========== -->
    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal" aria-label="Close">
                    <svg aria-hidden="true" class="mb-0" width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
                    </svg>
                </button>

                <!-- Body -->
                <div class="modal-body">
                    <form class="js-validate">
                        <!-- Login -->
                        <div id="login">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Sign In to Vodi</h3>
                                <p>Login to manage your account.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" required
                                    data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-3">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" required
                                    data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="d-flex justify-content-end mb-4">
                                <a class="js-animation-link small link-underline" href="javascript:;"
                                    data-hs-show-animation-options='{
                                        "targetSelector": "#forgotPassword",
                                        "groupName": "idForm"
                                    }'>Forgot Password?
                                </a>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign In</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fab fa-google mr-2"></i>
                                    Sign In with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Do not have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                                        "targetSelector": "#signup",
                                        "groupName": "idForm"
                                    }'>Sign Up
                                </a>
                            </div>
                        </div>

                        <!-- Signup -->
                        <div id="signup" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Create your account</h3>
                                <p>Fill out the form to get started.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" required
                                    data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" required
                                    data-msg="Your password is invalid. Please try again.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <!-- Input Group -->
                            <div class="js-form-message mb-4">
                                <label class="input-label">Confirm Password</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" required
                                    data-msg="Password does not match the confirm password.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Sign Up</button>
                            </div>

                            <div class="text-center mb-3">
                                <span class="divider divider-xs divider-text">OR</span>
                            </div>

                            <a class="btn btn-sm btn-ghost-secondary btn-block mb-2" href="#">
                                <span class="d-flex justify-content-center align-items-center">
                                    <i class="fab fa-google mr-2"></i>
                                    Sign Up with Google
                                </span>
                            </a>

                            <div class="text-center">
                                <span class="small text-muted">Already have an account?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                                        "targetSelector": "#login",
                                        "groupName": "idForm"
                                    }'>Sign In
                                </a>
                            </div>
                        </div>
                        <!-- End Signup -->

                        <!-- Forgot Password -->
                        <div id="forgotPassword" style="display: none; opacity: 0;">
                            <!-- Title -->
                            <div class="text-center mb-7">
                                <h3 class="mb-0">Recover password</h3>
                                <p>Instructions will be sent to you.</p>
                            </div>
                            <!-- End Title -->

                            <!-- Input Group -->
                            <div class="js-form-message">
                                <label class="sr-only" for="recoverEmail">Your email</label>
                                <div class="input-group input-group-sm mb-2">
                                    <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" required
                                    data-msg="Please enter a valid email address.">
                                </div>
                            </div>
                            <!-- End Input Group -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-sm btn-primary btn-block">Recover Password</button>
                            </div>

                            <div class="text-center mb-4">
                                <span class="small text-muted">Remember your password?</span>
                                <a class="js-animation-link small font-weight-bold" href="javascript:;"
                                    data-hs-show-animation-options='{
                                        "targetSelector": "#login",
                                        "groupName": "idForm"
                                    }'>Login
                                </a>
                            </div>
                        </div>
                        <!-- End Forgot Password -->
                    </form>
                </div>
                <!-- End Body -->
            </div>
        </div>
    </div>
    <!-- End Login Modal -->

<?php
include("sidebar.php");
?>
	
	
    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
            "offsetTop": 700,
            "position": {
                "init": {
                    "right": 15
                },
                "show": {
                    "bottom": 15
                },
                "hide": {
                    "bottom": -15
                }
            }
        }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="./assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="./assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>
    <script src="./assets/vendor/hs-counter/dist/hs-counter.min.js"></script>
    <script src="./assets/vendor/appear.js"></script>
    <script src="./assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="./assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <script src="./assets/vendor/aos/dist/aos.js"></script>
    <script src="./assets/vendor/slick-carousel/slick/slick.js"></script>
    <script src="./assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
	<script src="humane/humane.min.js" type="text/javascript"></script> 
    <!-- JS Vodi -->
    <script src="./assets/js/hs.core.js"></script>
    <script src="./assets/js/hs.validation.js"></script>
    <script src="./assets/js/hs.cubeportfolio.js"></script>
    <script src="./assets/js/hs.slick-carousel.js"></script>
    <script src="./assets/js/hs.fancybox.js"></script>

    <!-- ---------------------------------------------------MES AJOUTS -->
		<script src="datatables4/js/jquery.dataTables.min.js"></script>
		<script src="bootstrap/4.5.3/js/bootstrap.min.js"></script>
		<script src="datatables4/js/dataTables.bootstrap4.min.js"></script>
		<script src="datatables4/js/dataTables.responsive.min.js"></script> 
    <!-- JS-----------------------------------------------------------t. -->
    <script>
        $(document).on('ready', function () {
            // initialization of header
            var header = new HSHeader($('#header')).init();

            // initialization of mega menu
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();

            // initialization of fancybox
            $('.js-fancybox').each(function () {
              var fancybox = $.HSCore.components.HSFancyBox.init($(this));
            });

            // initialization of unfold
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();

            // initialization of slick carousel
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            // initialization of form validation
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });

            // initialization of show animations
            $('.js-animation-link').each(function () {
                var showAnimation = new HSShowAnimation($(this)).init();
            });

            // initialization of counter
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });

            // initialization of sticky block
            var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));

            // initialization of cubeportfolio
            $('.cbp').each(function () {
                var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
                    layoutMode: 'grid',
                    filters: '#filterControls',
                    displayTypeSpeed: 0
                });
            });

            $('.cbp').on('initComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('filterComplete.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();

                // initialization of aos
                AOS.init({
                    duration: 650,
                    once: true
                });
            });

            $('.cbp').on('pluginResize.cbp', function() {
                // update sticky block
                cbpStickyFilter.update();
            });

            // animated scroll to cbp container
            $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
                $('html, body').stop().animate({
                    scrollTop: $('#demoExamplesSection').offset().top
                }, 200);
            });

            // initialization of go to
            $('.js-go-to').each(function () {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>
        <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/polifills.js"><\/script>');
    </script>
	
</body>
</html>


<script>
var ibuk_livre_content = {};
var ibuk_livre_content_for_edit = {};
var OBJ_SELECTED ={};
var OBJ_HIDDEN = {ACT : "1"};	
document.getElementById("input_control").disabled = true;

/*------------------------------------- PREVIEW IMAGE -------------------------------------*/

function PreviewImage() {
	var oFReader = new FileReader();
	if(document.getElementById("photo").value==""){
		document.getElementById("image_ibuk_ressource").src = "images_livres/aucun.jpg";
		return;
	}
	oFReader.readAsDataURL(document.getElementById("photo").files[0]);

	oFReader.onload = function(oFREvent) {
	  document.getElementById("image_ibuk_ressource").src = oFREvent.target.result;	  
	}
}
/*------------------------------------- REINITIALISER FORMULAIRE -------------------------------------*/

function search_page_for_book(){
	
	 document.getElementById("input_control").disabled = false;
	var book_info = document.getElementById("intitule").value;
	console.log(book_info);
	if( book_info == ""){		
		var message = "s'il vous plaît Veuillez  Choisir une Langue et un Intitulé !!!";
		humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 2000 });
		humane.info(message);
		return;
	}	
	var type="get_book_information"; 
	//document.getElementById("myPleaseWait_launch_template_btn").click();
		$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: "type="+type+"&book_info="+book_info,
		success: function(data){
		console.log(data);
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		data_json = JSON.parse(data); 
			console.log(data);
			var message = "";			
			if(data_json["error"]["code"] == "0"){ 
				content = data_json["message"]["content"]; 
				ibuk_livre_content = JSON.parse(content); 	
			}else{
			}	
			show_book_information();			
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});
}

function show_book_information(){
	$("#table_ibuk_information").html("");
	var str_tableau = "";
	for (const key in ibuk_livre_content){			
		 var item = ibuk_livre_content[key];
		 var page = item["page"];
		 var img = item["img"];
		 str_tableau += "<tr>";
		 str_tableau += "<td><input type='hidden' value='"+img+"' name='crypt_content[]'/><img src='data:image/png;base64,"+img+"' width=45 height=45 /></td>";			 
		 str_tableau += "<td >"+page+"</td>";
		 str_tableau += "<td> <input type='file'  name='audio_file[]' accept='audio/*'  id='audio_file_"+key+"' myledata='"+key+"'/><span id='msg_audio_file_"+key+"'></span></td> ";
		 str_tableau += "<td> <textarea  placeholder ='Sous-titrage' name='sous_titrage[]'  myledata='"+key+"' cols='50' rows='5' id='sous_titrage_"+key+"' ></textarea><span id='msg_sous_titrage_"+key+"'></span> </td> ";
		 str_tableau += "</tr>";
	}	
	$("#table_ibuk_information").html(str_tableau);
}

//fonction de verification
	
function verification_onblur_js(elt){
	if($('#'+elt).val()==""){
		$("#msg_"+elt).fadeTo(200,0.1,function(){
			$(this).html(" Veuillez remplir ce champ").css('color', 'orange').fadeTo(900,1);
		});
	}else{
		$("#msg_"+elt).fadeTo(200,0.1,function(){
			$(this).html("");
		});		
	}
}

//modal gestion du fichier audio
function liste_des_intitule_js(){
	var search_intitule = document.getElementById("filtre_search_intitule").value;	
	var source = "";
	$.ajax({
		url: "ajax_php/table_liste_popup_intitule_ajax.php", 
		type: "POST",
		data: "source="+source+"&search_intitule="+search_intitule,
		success: function(data){
			//alert(data);
			// console.log(data);
			$("#liste_intitule").show();
			$("#liste_intitule").html(data);			
			
		},
		error: function(xhr, status, error) {
		
		}
	});
}

function choisir_intitule_js(index){
	var intitule_id = document.getElementById("modal_intitule_id1_"+index).value;	
	var intitule_name = document.getElementById("modal_intitule_name1_"+index).value;	
	document.getElementById("apercu_nom_livre").value = intitule_name;		
	document.getElementById("intitule").value = intitule_id+"|||"+intitule_name;	
	console.log(intitule_id+"|||"+intitule_name);
	$("#liste_intitule").html("");	
	$("#liste_articles_modal").modal("hide");	
}
function reinitialiser_formulaire(){	
	$(':input','#form_ibuk')  
	.not(':button, :submit, :reset, :hidden')
	.val('')
	.removeAttr('checked')
	.removeAttr('selected');
	OBJ_HIDDEN = {ACT : "1"};	
	document.getElementById("input_control").value = "ENREGISTRER";
	document.getElementById("form_ibuk").reset();
}

function afficher_le_tableau_js(){
	$("#tab_ibuk_child").html("");	
	var source ="";
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/table_liste_ibuk_ajax.php",
		type: "POST",
		data: "source="+source,
		success: function(data){
			//document.getElementById("myPleaseWait_launch_template_btn").click();			
			$("#tab_ibuk_ressource").show();
			$("#tab_ibuk_ressource").html(data);				
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});
}
afficher_le_tableau_js();

// CONSTRUCTION DU TABLEAU POUR L'EDITION DE L'IBUK
function editer_(index){
	var data = $("#info_data_ibuk"+index).html();
    data_json = JSON.parse(data);
	external_id=data_json['EXTERNAL_ID'];
	langue_id=data_json['LANGUE_ID'];
	var type= "get_book_information_for_edit";
	$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: "type="+type+"&external_id="+external_id+"&langue_id="+langue_id,
		success: function(data){
		// console.log(data);
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		data_json = JSON.parse(data); 
			var message = "";			
			if(data_json["error"]["code"] == "0"){ 
				content = data_json["message"]["content"]; 
				ibuk_livre_content_for_edit = JSON.parse(content);
				console.log(ibuk_livre_content_for_edit);
			}else{
			}	
			show_edit_book_information();			
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});
}

// CONSTRUCTION DU TABLEAU POUR L'EDITION DE L'IBUK
function show_edit_book_information(){	
	document.getElementById("div_livre").style.display="none";
	document.getElementById("div_langue").style.display="none";
	document.getElementById("afficher_page").disabled=true;
	document.getElementById("input_control").disabled=false;
	OBJ_HIDDEN['ACT']="2";
	$("#table_ibuk_information").html("");
	var str_tableau = "";
	var i=0;
	for (const key in ibuk_livre_content_for_edit) {	
		i++;
		 var item = ibuk_livre_content_for_edit[key];
		 var external_id = item["external_id"];	
		 console.log(external_id);
		 var langue_name = item["langue_name"];		 
		 var langue_id = item["langue_id"];		 
		 var img = item["img"];		 
		 var subtitle = item["subtitle"];
		 str_tableau += "<tr>";
		 str_tableau += "<td><input type='hidden' value='"+img+"' name='crypt_content[]'/><img src='data:image/png;base64,"+img+"' width=45 height=45 /></td>";			 
		 str_tableau += "<td>"+i+"<input type='hidden' value='"+external_id+"' name='external_id'> ";
		 str_tableau += "<input type='hidden' value='"+langue_name+"' name='langue_name'>";
		 str_tableau += "<input type='hidden' value='"+langue_id+"' name='langue_id'></td>";
		 str_tableau += "<td> <input type='file'  name='audio_file[]' accept='audio/*'  id='audio_file_"+key+"' myledata='"+key+"'/><span id='msg_audio_file_"+key+"'></span></td> ";
		 str_tableau += "<td> <textarea  placeholder ='Sous-titrage' name='sous_titrage[]'  myledata='"+key+"' cols='50' rows='5' id='sous_titrage_"+key+"' >"+subtitle+"</textarea><span id='msg_sous_titrage_"+key+"'></span> </td> ";
		 str_tableau += "</tr>";
	}	
	$("#table_ibuk_information").html(str_tableau);
}



// FONCTION POUR AFFICHER LE TABLEAU DES IBUK RESSOURCE

function afficher_le_tableau_ibuk_ressource_js(index){
	var ibuk_id = index;
	var source ="";
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/table_liste_ressource_ibuk_ajax.php",
		type: "POST",
		data: "ibuk_id="+ibuk_id,
		success: function(data){
			//document.getElementById("myPleaseWait_launch_template_btn").click();			
			$("#tab_liste_ressource_child").show();
			$("#tab_liste_ressource_child").html(data);	
			$("#loader_div_ibuk_ressource").css("display", "none");	
			
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});
}


function check_fields_array_js(elt_array){

	isOk = true;
	// var elt_array, i;
	var i;
	// elt_array = ["profil_view_name","description"]; 

	for (i = 0; i < elt_array.length; i++) {
		
	  if($('#'+elt_array[i]).val()==""){
			isOk = false;
			$("#msg_"+elt_array[i]).fadeTo(200,0.1,function()
			{
				$(this).html("Ce champ est requis.").css('color', 'orange').fadeTo(900,1);
			});	
		}else {
			$("#msg_"+elt_array[i]).fadeTo(200,0.1,function(){
				$(this).html("");
			});
		}	

	}
	
	return isOk;
}


var snd;
// FONCTION POUR FAIRE PLAY  SUR L'AUDIO
function modal_play_audio(index,action){
	var data = $("#info_data_ibuk_child"+index).html();
    data_json = JSON.parse(data); 
	 snd = new Audio("data:audio/mp3;base64,"+data_json['AUDIO']);
	if( action == '0' ){		
		snd.play();
	}else{
		snd.pause();
		snd.currentTime = 0;
	}
}
var snd;
// FONCTION POUR FAIRE PLAY  SUR LA RESSOURCE DE L'AUDIO
function modal_play_audio_ressource(index,action){
	var data = $("#info_data_specfic_ressource"+index).html();
    data_json = JSON.parse(data); 
	 snd = new Audio("data:audio/mp3;base64,"+data_json['AUDIO']);
	if( action == '0' ){		
		snd.play();
	}else{
		snd.pause();
		snd.currentTime = 0;
	}
}


// FONCTION POUR FAIRE STOP SUR L'AUDIO
function modal_stop_audio(index,action){
	 snd.pause();
}



var ibuk_parent_id;
//MODAL POUR LA GESTION DES RESSOURCES
function modal_gestion_ressource(index){
	var data = $("#info_data_ibuk"+index).html();
	var data_json = JSON.parse(data); 
	var IBUK_ID=data_json['IBUK_ID'];
	ibuk_parent_id = data_json['IBUK_ID'];
	var EXTERNAL_ID=data_json['EXTERNAL_ID'];
	var LANGUE_ID=data_json['LANGUE_ID'];
	var source = ""; 
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/table_liste_ibuk_child_ajax.php",
		type: "POST",
		data: "EXTERNAL_ID="+EXTERNAL_ID+"&LANGUE_ID="+LANGUE_ID,
		success: function(data){
			//document.getElementById("myPleaseWait_launch_template_btn").click();			
			$("#tab_ibuk_child").show();
			$("#tab_ibuk_child").html(data);	
			$("#loader_div_input_child").css("display", "none");
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});	
	$("#modal_ibuk_child_content").modal("show");
} 
 
 //MODAL POUR LA VERIFICATION DES CHAMPS
function verification_champs_ibuk_js(){
	var msg1;	        
	var elt_array = [];
	msg1 = "Voulez-vous enregistrer cette action ?"; 	
	if(OBJ_HIDDEN.ACT =="1"){		
		elt_array = ["apercu_nom_livre","langue"];
	}
	obj_audio = document.getElementsByName("audio_file[]");	
	for(var j=0; j<obj_audio.length ; j++){
			elt_array.push(obj_audio[j].id);
	}	
	obj_sous_titrage = document.getElementsByName("sous_titrage[]");	
	for(var k=0; k<obj_sous_titrage.length ; k++){
			elt_array.push(obj_sous_titrage[k].id);
	}
	if(!check_fields_array_js(elt_array)){
		var message = "Veuillez s'il vous plaît remplir tous les champs obligatoires !!!";
		humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 2000 });
		humane.info(message);
		return;
	}
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "enregistrer_js();" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();
}


//=============================================  ENREGISTREMENENT ==================================
function enregistrer_js(){
	
	var form = document.forms.namedItem("form_ibuk_all_information");		
	var oData = new FormData(form);		
	
	if(OBJ_HIDDEN['ACT']=="1"){
		var type="insertion_ibuk";
		var intitule = document.getElementById('intitule').value;
		var langue = document.getElementById('langue').value;		
		oData.append("intitule", intitule);
		oData.append("langue", langue);
	}else if(OBJ_HIDDEN['ACT']=="2"){
		var type="modification_ibuk";
	}
	
	oData.append("type", type);
			//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: oData,
		processData: false,  // dire à jQuery de ne pas traiter les données  
		contentType: false,
		success: function(data){
			 //document.getElementById("myPleaseWait_launch_template_btn").click();
			console.log(data);
			data_json = JSON.parse(data); 			
			var message = "";						 			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);
				afficher_le_tableau_js();
				reinitialiser_formulaire();		
				$("#table_ibuk_information").html("");				
			}else{
				message = data_json["error"]["description"];  
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}
		},
		error: function(xhr, status, error) {
			 //document.getElementById("myPleaseWait_launch_template_btn").click();
			notification_error_ajax_js(xhr, status, error);
		}
	});
}

//MODAL POUR LA FONCTION  DE DESACTIVATION
function modal_activation_desactivation(p,index){	
	
	msg1 = "Voulez-vous enregistrer cette action ?";  	
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "activation_desactivation("+p+","+index+");" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();
	
}

 //FONCTION ACTIVATION ET DESACTIVATION DU LIVRE
function activation_desactivation(p,index){	
	var data = $("#info_data_ibuk"+index).html();
	var data_json = JSON.parse(data); 
	var IBUK_ID=data_json['IBUK_ID'];	
	var statuts = p;
	var type ="activation_desactivation";
	$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: "type="+type+"&statuts="+statuts+"&IBUK_ID="+IBUK_ID,
		success: function(data){
			console.log(data);
			data_json = JSON.parse(data); 			
			var message = "";			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);
				afficher_le_tableau_js();				
			}else{
				message = data_json["error"]["description"];  
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}		
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});
}

//DEBUT MODAL SUPPRESSION
function modal_suppression_ibuk(i){		
	var msg1 = "Voulez-vous enregistrer cette action ?";  	
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	$("#confirmation_generique_template_btn_valider").css( "display", "");
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "suppression("+i+");" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();			
}

//MODAL POUR LA SUPPRESSION DE L'IBUK

function suppression(index){
	var data = $("#info_data_ibuk"+index).html();
	var data_json = JSON.parse(data); 
	var IBUK_ID = data_json['IBUK_ID'];		
	var EXTERNAL_ID = data_json['EXTERNAL_ID'];		
	var type ="supprimer";
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: "type="+type+"&IBUK_ID="+IBUK_ID+"&EXTERNAL_ID="+EXTERNAL_ID,
		success: function(data){
			console.log(data);
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		data_json = JSON.parse(data); 			
			var message = "";			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);
				afficher_le_tableau_js();
			}else{
				message = data_json["error"]["description"];  
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}		
		},
		error: function(xhr, status, error) {
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		notification_error_ajax_js(xhr, status, error);
		}
	});

}

//FIN MODAL SUPPRESSION
 
function modal_suppression_audio(i){
	var msg1 = "Voulez-vous enregistrer cette action ?";  
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	$("#confirmation_generique_template_btn_valider").css( "display", "");
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "supprimer_audio("+i+");" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();
}

//MODAL SUPPRESSION IBUK AUDIO

function supprimer_audio(index){
	
	var data = $("#info_data_ibuk_child"+index).html();
	var data_json = JSON.parse(data); 
	var IBUK_ID = data_json['IBUK_ID'];		
	var type ="supprimer_ibuk_child";
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/gestion_ibuk_action_ajax.php",
		type: "POST",
		data: "type="+type+"&IBUK_ID="+IBUK_ID,
		success: function(data){
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		data_json = JSON.parse(data);
			var message = "";			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);				
				modal_gestion_ressource(ibuk_parent_id);// On affiche le tableau entier
			}else{
				message = data_json["error"]["description"];
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}
		},
		error: function(xhr, status, error) {
			//document.getElementById("myPleaseWait_launch_template_btn").click();
			notification_error_ajax_js(xhr, status, error);
		}
	});

}


//MODAL POUR FAIRE L'APPERCU
function modal_apercu(index){
	$("#div_modal_child_apercu").html("");		
	var data = $("#info_data_ibuk_child"+index).html();	
    data_json = JSON.parse(data);
	var image = data_json['CRYPT_CONTENT'];  
	var soustitre =data_json['SUBTITLE'];  		
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="2.9em"> '+soustitre+' </font></center></div>';
	var title  = '<center><font size="2.9em"> APERÇU  </font></center>';
	// $("#c").attr("src","data:image/png;base64,"+image+"");	
	// $("#c").attr("src","http://dummyimage.com/250x155/");
	$("#div_modal_child_apercu").append(message);		
	$("#title_modal_demande").html(title);	
	$("#modal_apercu").modal("show");
}
 //MODAL POUR FAIRE LA VERIFICATION DES RESSOURCES
function modal_add_ressource(index){
	var data = $("#info_data_ibuk_child"+index).html();	
    data_json = JSON.parse(data);
	 OBJ_SELECTED.IBUK_ID =data_json['IBUK_ID']; 
	 OBJ_SELECTED.IMAGE_CRYPT_CONTENT =data_json['IMAGE_CRYPT_CONTENT']; 
	  afficher_le_tableau_ibuk_ressource_js(OBJ_SELECTED.IBUK_ID);
	 $("#modal_gestion_ressource").modal("show");
	 
}

 //MODAL POUR FAIRE LA VERIFICATION DES RESSOURCES
function verification_add_ibuk_ressource_js(){
	var msg1;	        
	var elt_array = [];
	msg1 = "Voulez-vous enregistrer cette action ?"; 
	  
	elt_array = ["text_ibuk_ressource","ibuk_audio_file","langue_ibuk_ressource"];
	if(!check_fields_array_js(elt_array)){
		var message = "Veuillez s'il vous plaît remplir tous les champs obligatoires !!!";
		humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 2000 });
		humane.info(message);
		return;
	}
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "traitement_ajout_ressource();" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();
}
//FONCTION DE TRAITEMENT POUR L'AJOUT DES RESSOURCES
function traitement_ajout_ressource(){
	var ibuk_child_info = JSON.stringify(OBJ_SELECTED);
	var form = document.forms.namedItem("form_ajout_ressource");		
	var type = "insertion_ibuk_ressource";		
	var oData = new FormData(form);	
	oData.append("type", type);
	oData.append("ibuk_child_info", ibuk_child_info);
			//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/gestion_ibuk_ressource_action_ajax.php",
		type: "POST",
		data: oData,
		processData: false,  // dire à jQuery de ne pas traiter les données  
		contentType: false,
		success: function(data){
			 //document.getElementById("myPleaseWait_launch_template_btn").click();
			console.log(data);
			data_json = JSON.parse(data); 			
			var message = "";						 			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);
				afficher_le_tableau_ibuk_ressource_js(OBJ_SELECTED.IBUK_ID)
			}else{
				message = data_json["error"]["description"];  
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}
		},
		error: function(xhr, status, error) {
			 //document.getElementById("myPleaseWait_launch_template_btn").click();
			notification_error_ajax_js(xhr, status, error);
		}
	});
}

 //MODAL POUR FAIRE LA SUPPRESSION DES RESSOURCES
function modal_suppression_audio_ressource(i){
	var msg1 = "Voulez-vous enregistrer cette action ?";  
	var message  = '<div class="col-md-12 col-sm-12 col-xs-12"><center><font size="5.9em"> '+msg1+' </font></center></div>';	
	$("#confirmation_generique_template_body").html(message);	
	$("#confirmation_generique_template_btn_valider").css( "display", "");
	document.getElementById("confirmation_generique_template_btn_valider").setAttribute( "onClick", "supprimer_audio_ressource("+i+");" );
	document.getElementById("confirmation_generique_template_btn_fermer").setAttribute( "onClick", "" );	
	document.getElementById("confirmation_generique_template_btn").click();
}

//MODAL SUPPRESSION IBUK AUDIO

function supprimer_audio_ressource(index){
	
	var data = $("#info_data_specfic_ressource"+index).html();
	var data_json = JSON.parse(data); 
	var IBUK_RESSOURCE_ID = data_json['IBUK_RESSOURCE_ID'];		
	var type ="supprimer_ibuk_ressource";
	//document.getElementById("myPleaseWait_launch_template_btn").click();
	$.ajax({
		url: "ajax_php/gestion_ibuk_ressource_action_ajax.php",
		type: "POST",
		data: "type="+type+"&IBUK_RESSOURCE_ID="+IBUK_RESSOURCE_ID,
		success: function(data){
		//document.getElementById("myPleaseWait_launch_template_btn").click();
		data_json = JSON.parse(data);
			var message = "";			
			if(data_json["error"]["code"] == "0"){
				message = data_json["message"]["description"]; 
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
				humane.info(message);				
				afficher_le_tableau_ibuk_ressource_js(OBJ_SELECTED.IBUK_ID);
			}else{
				message = data_json["error"]["description"];
				humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
				humane.info(message);
			}
		},
		error: function(xhr, status, error) {
			//document.getElementById("myPleaseWait_launch_template_btn").click();
			notification_error_ajax_js(xhr, status, error);
		}
	});

}

</script>
