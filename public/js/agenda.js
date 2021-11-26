$(document).ready(function() {
    $('.date').datepicker({ autoclose: true,format: 'yyyy-mm-dd'}).on('changeDate', function(e) {});
    $('#displayevent').DataTable();
});
buttonparticipants.style.display="none";
let startDate  = document.getElementById("startDate").value;
let endDate = document.getElementById("endDate").value;
let event_json = {} ;
let date1 = new Date(startDate);
let date2 = new Date(endDate);
let buttonparticipants  = document.getElementById("add_participants");

buttonparticipants.addEventListener('click',function(){
    if($('#participants').val()!= "")
    {
        addParticipant();
    }else{
        displayAlert("Please fill in a participant",1);
    }
});

function addParticipant(){
    participants = document.getElementById("participants").value;
    console.log(participants);
    $.ajax({
        url: "/event/addparticipants",
        type: "GET",
        data: "participants="+participants+"&id="+event_json['ID'],
        success: function(data){
            data_json = JSON.parse(data);
            let message = "";
            if(data_json["error"]["code"] == "0"){
                message = data_json["message"]["description"];
                displayAlert(message,0);
                displayTable();
                $("#participants").val("");
            }else{
                message = data_json["error"]["description"];
                displayAlert(message,1);
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr);
        }
    });
}


    document.getElementById("save_form").addEventListener('click',function(){
    let sdT = date1.getTime();
    let edT = date2.getTime();
    if(sdT > edT){
        displayAlert("The start date must be less than the end date",1);
    }
    if($('#eventName').val()!= "" && $('#description').val()!= "")
    {
        enregistrer_js();
    }else{
        displayAlert("Please complete all required fields",1);
    }

});

//Fonction pour l'affichage du tableau
function displayTable(){
    var source = "";
    $.ajax({
        url: "/event/display",
        type: "GET",
        data: "source="+source,
        success: function(data){
            $("#eventTable").show();
            $("#eventTable").html(data);
        },
        error: function(xhr, status, error) {
        }
    });
}
displayTable();
//Fonction pour l'enregistrement et la modification
function enregistrer_js(){
    console.log("Save data");
    let form = document.forms.namedItem("event_form");
    let oData = new FormData(form);
    $.ajax({
        url: "/event/create",
        type: "POST",
        data: oData,
        processData: false,
        contentType: false,
        success: function(data){
            let data_json = JSON.parse(data);
            let message = "";
            if(data_json["error"]["code"] == "0"){
                message = data_json["message"]["description"];
                displayAlert(message,0);
                displayTable();
                $("#myModal").modal('hide');
                document.getElementById("eventId").value = "";
                document.getElementById("event_form").reset();
            }else{
                message = data_json["error"]["description"];
                displayAlert(message,1);
            }
        },
        error: function(xhr, status, error) {
            console.log("Error");
        }
    });
}

//Foncion pour l'affichage de la description
function showDescription(i)
{
    let data = $("#info_event"+i).html();
    let event_json = JSON.parse(data);
    let name = event_json['NAME'];
    let description =event_json['DESCRIPTION'];
    let message  = '<div class="col-md-12 col-sm-12 col-xs-12"> '+description+'</div>';
    $(".modal-event-body").html(message);
    $(".modal-event-title").text(name);
    $("#modalEventDescription").modal("show");
}
function confifmationDeleteEvent (i)
{
    let data = $("#info_event"+i).html();
     event_json = JSON.parse(data);
    $("#ConfirmModal").modal("show");
}
//Foncion pour la suppresion de l'evenement
function deleteEvent(){
     id = event_json['ID'];
    $.ajax({
        url: "/event/delete",
        type: "GET",
        data: "id="+id,
        success: function(data){
            data_json = JSON.parse(data);
            var message = "";
            if(data_json["error"]["code"] == "0"){
                message = data_json["message"]["description"];
                displayAlert(message,0);
                displayTable();
                $("#ConfirmModal").modal('hide');
                event_json = {} ;
                document.getElementById("event_form").reset();
            }else{
                message = data_json["error"]["description"];
                displayAlert(message,1);
            }
        },
        error: function(xhr, status, error) {
            console.log(xhr);
        }
    });
}

//Fonction pour charger la modal
function modifyEvent(i){
    let data = $("#info_event"+i).html();
     event_json = JSON.parse(data);
    document.getElementById("eventId").value = event_json['ID'];
    document.getElementById("eventName").value = event_json['NAME'];
    document.getElementById("startDate").value = event_json['START_DATE'];
    document.getElementById("endDate").value = event_json['END_DATE'];
    document.getElementById("description").value = event_json['DESCRIPTION'];
    document.getElementById("participants").value = event_json['PARTICIPANTS'];
    document.getElementById("save_form").value = "Update";
   buttonparticipants.style.display="block";
    $('#myModal').modal('show');

}

function displayAlert(message,typeMessage)
{
    if(typeMessage === 0){
        humane.info = humane.spawn({ addnCls: 'humane-jackedup-success', timeout: 2000 });
        humane.info(message);
    }else{
        humane.info = humane.spawn({ addnCls: 'humane-jackedup-error', timeout: 4000 });
        humane.info(message);
    }
}
