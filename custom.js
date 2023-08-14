function adduser() {
  var name = $("#nameid").val();
  var email = $("#emailid").val();
  var phone = $("#phoneid").val();
  var course = $("#courseid").val();

  $.ajax({
    url: "insert.php",
    type: "post",
    data: {
      namesend: name,
      emailsend: email,
      phonesend: phone,
      coursesend: course,
    },
    success: function (data, status) {
      $(".close").click();

      // function to display data;
      displayData();
    },
  });
}
$(document).ready(function () {
  displayData();
});

// Display Funtion
function displayData() {
  var displayData = "true";
  $.ajax({
    url: "display.php",
    type: "post",
    data: {
      displaySend: displayData,
    },
    success: function (data, status) {
      if ((status = 1)) {
        $("#displayDataTable").html(data);
      }
      if ((status = 0)) {
        
        console.log("ajax not called");
      }
    },
  });
}

// Delete Record
function DeleteUser(deleteid) {
    console.log(deleteid);
    $.ajax({
        url:'delete.php',
        type:'post',
        data:{
            deleteSend:deleteid
        },
        success:function (data, status){
            displayData();
        }
    })
}

// Update 

function GetDetails(updateid) {
    $('#modal-button').click();
    $.post('update.php',{updateid:updateid}, function (data,status) {
        var userid = JSON.parse(data);
        console.log(userid);
        $('name').val(userid.name);
        $('email').val(userid.email);
        $('course').val(userid.course); 
        $('phone').val(userid.phone);
    });
}