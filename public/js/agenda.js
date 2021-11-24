$(document).ready(function() {
    $('.date').datepicker({ autoclose: true, }).on('changeDate', function(e) {});
    $('#displayevent').DataTable();
});

document.getElementById("save_form").addEventListener('click',function(){
    if($('#eventName').val()!= "" && $('#description').val()!= "")
    {
        enregistrer_js();
    }else{
        displayAlert("Please complete all required fields",1);
    }

});

//Foncion pour l'affichage du tableau

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
//Foncion pour la suppresion de l'evenement
function deleteEvent(i){
    alert('suppression Ok');
    return;
    let data = $("#info_event"+i).html();
    let event_json = JSON.parse(data);
    let id = event_json['ID'];
    let form = document.forms.namedItem("event_delete");
    let oData = new FormData(form);
    $.ajax({
        url: "/event/delete",
        type: "POST",
        data: oData,
        success: function(data){
            console.log(data);
            return;
            data_json = JSON.parse(data);
            var message = "";
            if(data_json["error"]["code"] == "0"){
                message = data_json["message"]["description"];
                displayAlert(message,0);
                displayTable();
                $("#myModal").modal('hide');
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
    let event_json = JSON.parse(data);
    document.getElementById("eventId").value = event_json['ID'];
    document.getElementById("eventName").value = event_json['NAME'];
    document.getElementById("startDate").value = event_json['START_DATE'];
    document.getElementById("endDate").value = event_json['END_DATE'];
    document.getElementById("description").value = event_json['DESCRIPTION'];
    document.getElementById("save_form").value = "Update";
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
