<?php
include('../variable_session.php');
include('../connexiondb.php'); 
if($SESSION_TYPE_COMPTE != "MYLE" && $SESSION_TYPE_COMPTE != "PARENT"){
	exit;
}
?>

<?php
$CONDITION = "";
if($SESSION_TYPE_COMPTE != "MYLE"){
$CONDITION .= "   AND  CREATOR_ID ='".$SESSION_USER_ID."'";
}
?>
	<table id="table_user" data-order='[[ 12, "desc" ]]' class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
			  <th scope="col"></th>			  
			  <th scope="col">TYPE DE COMPTE</th>	
			  <th scope="col">NOM(S)</th>		  
			  <th scope="col">PRENOM(S)</th>
			  <th scope="col">EMAIL</th>
			  <th scope="col">LIEU DE NAISSANCE</th>
			  <th scope="col">DATE DE NAISSANCE</th>
			  <th scope="col">NOMBRE D'ENFANT</th>
			  <th scope="col">NOM DU PARENT</th>
			  <th scope="col">SEXE</th>
			  <th scope="col">STATUT</th>
			  <th scope="col">CREE PAR </th>
			  <th scope="col">DATE CREATION</th>
			  <th scope="col">DATE EXPIRATION PASSWORD</th>  
			  <th scope="col">ACTION</th>
			  
			</tr>
		</thead>	
		<tbody>
	
			<?php
				 $sql ="SELECT
						users.USER_ID,
						users.USER_NAME,
						users.PARENT_USER_ID,
						users.PARENT_USER_NAME,
						COALESCE(user_bis.NBR_CHILD,0) AS NBR_CHILD,
						users.TYPE_COMPTE,
						users.LOGIN_EMAIL,
						users.`PASSWORD`,
						users.ACTIVE,
						users.RESET_PASSWORD,
						users.FIRST_NAME,
						users.LAST_NAME,
						users.LIEU_NAISSANCE,
						DATE(users.DATE_NAISSANCE) AS DATE_NAISSANCE,
						users.TYPE_SEXE_ID,
						users.TYPE_SEXE_NAME,
						DATE(users.PASSWORD_EXPIRED_DATE) AS PASSWORD_EXPIRED_DATE,
						users.PHOTO,
						users.DOSSIER_PHOTO ,
						users.CREATION_DATE,
						users.LAST_UPDATE_DATE,
						users.CREATOR_ID,
						users.CREATOR_NAME
					FROM
						`users`
					LEFT OUTER JOIN (SELECT PARENT_USER_ID , COUNT(USER_ID) AS NBR_CHILD FROM users WHERE DELETED ='0' GROUP BY PARENT_USER_ID) AS user_bis
					ON users.USER_ID = user_bis.PARENT_USER_ID
					WHERE
						DELETED = '0'  ".$CONDITION." ORDER BY CREATION_DATE DESC";
				$query = mysqli_query($link,$sql);				
				
				$nblignes=mysqli_num_rows($query);				
				if($nblignes>0){				
					$i=0;
					while($data = mysqli_fetch_array($query)){
					 $i++;	
					 $PARENT_USER_NAME = "AUCUN";
					 if($data['PARENT_USER_NAME'] != ""){
						$PARENT_USER_NAME = $data['PARENT_USER_NAME'];
					 }
					 $STATUT = "";
					 if(trim($data["ACTIVE"]) == "1"){
						 $STATUT = "Activé";
					 }else{
						$STATUT = "Désactivé"; 
					 }					 
					 
					 $CHEMIN ="images_users/".$data["DOSSIER_PHOTO"]."/".$data["PHOTO"];
					 $NOM_PRENOM= $data["FIRST_NAME"]." ".$data["LAST_NAME"];
					 $item=array();
					 $item['USER_ID']=$data['USER_ID'];
					 $item['PARENT_USER_ID']=$data['PARENT_USER_ID'];
					 $item['PARENT_USER_NAME']=$data['PARENT_USER_NAME'];
					 $item['FIRST_NAME']=$data['FIRST_NAME'];
					 $item['LAST_NAME']=$data['LAST_NAME'];
					 $item['LOGIN_EMAIL']=$data['LOGIN_EMAIL'];
					 $item['TYPE_SEXE_ID']=$data['TYPE_SEXE_ID'];
					 $item['TYPE_SEXE_NAME']=$data['TYPE_SEXE_NAME'];
					 $item['LIEU_NAISSANCE']=$data['LIEU_NAISSANCE'];
					 $item['DATE_NAISSANCE']=$data['DATE_NAISSANCE'];
					 $item['PASSWORD_EXPIRED_DATE']=$data['PASSWORD_EXPIRED_DATE'];
					 $item['PHOTO']=$data['PHOTO'];
					 $item['DOSSIER_PHOTO']=$data['DOSSIER_PHOTO'];
					 $item['TYPE_COMPTE']=$data['TYPE_COMPTE'];
					 $item['APERCU']= $NOM_PRENOM;
					 $info_data = json_encode($item, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE | JSON_FORCE_OBJECT);	
					
					echo "						
						<tr>
							<td><img src='".$CHEMIN."' width='45' height='45'/></td>
							<td>".$data["TYPE_COMPTE"]."</td>
							<td>".$data["FIRST_NAME"]."</td>
						  <td>".$data["LAST_NAME"]."</td>
						  <td>".$data["LOGIN_EMAIL"]."</td>
						  <td>".$data["LIEU_NAISSANCE"]."</td>
						  <td>".$data["DATE_NAISSANCE"]."</td>
						  <td>".$data["NBR_CHILD"]."</td>
						  <td>".$PARENT_USER_NAME."</td>
						  <td>".$data["TYPE_SEXE_NAME"]."</td>
						  <td>".$STATUT."</td>
						  <td>".$data["CREATOR_NAME"]."</td>
						  <td>".$data["CREATION_DATE"]."</td>
						  <td>".$data["PASSWORD_EXPIRED_DATE"]."</td>
						  <td>
							  <textarea style='display:none;' id='info_data_user".$i."' name=info_data_user".$i."'>".$info_data."</textarea>
							  ";
							
								  echo "
							  <button align='left' style='background-color:#f79e36;' onclick='editer_(".$i.");' class='btn btn-default plus' type='button'><font style='color:white;'>EDITER</font></button>						
							  ";
							  if($data['USER_ID'] != $SESSION_USER_ID){
								  echo "<button align='left' style='background-color:#434854;' onclick='modal_suppression(".$i.");' class='btn btn-default plus' type='button'><font style='color:white;'>SUPPRIMER</font></button>
								  ";
							  }
							  
							   if(trim($data["ACTIVE"]) == "1"){
								  echo "<button align='left' style='background-color:#e62c22;' onclick='modal_activation_desactivation(0,".$i.");' class='btn btn-default plus' type='button'><font style='color:white;'>DESACTIVER</font></button>";
							  }else{
								 
								 echo "<button align='left' style='background-color:#02992a;' onclick='modal_activation_desactivation(1,".$i.");' class='btn btn-default plus' type='button'><font style='color:white;'>ACTIVER</font></button>"; 
							
								}
								echo "			
									<button align='left' style='background-color:#30d3d9;' onclick='modal_description(".$i.");' class='btn btn-primary plus' type='button'><font style='color:white;'>VOIR L'IMAGE</font></button>
									";
								
						echo "
							</td>							
						</tr>";
					}				
				}				
			?>		
		</tbody>
	</table>
<script  language="Javascript">
	setTimeout(function(){ $('#table_user').DataTable(); }, 300);

</script>
