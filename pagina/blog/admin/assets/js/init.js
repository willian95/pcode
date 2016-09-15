$(document).ready(function(){
  $('#btnc').click(function(){
    var name = $('#name').val();
    if ($.trim(name) != '') 
    {
      $.ajax({
        url: "core/functions/addcat.php",
        method:"POST",
        data:{name:name},
        dataType: "text",
        success:function(data)
        {
          $('#name').val("");
          swal(
          'Excelente.',
          'Categoria Creada',
          'success'
              )
        }
      })
    }
  })
  setInterval(function(){
    $('#categorylist').load("core/functions/categorylist.php").fadeIn("slow");
  }, 1000);
})

//TABLE DE CATEGORY
$(document).on('click', '.btn_delete', function(e){
  var del_id=$(this).attr('id');
    e.preventDefault();
    $.ajax({
      type:'POST',
      url: "core/functions/delcat.php",
      data:'delete_id='+del_id,
      success:function(data){
        swal(
          'Excelente.',
          'Categoria Eliminada',
          'success'
            )
      }
    })

})
//POST

$(document).ready(
    function()
    {
      $('#redactor_content').redactor();
    }
  );