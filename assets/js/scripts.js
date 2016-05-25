 var $edit=false, $check=true; 
 var $newFragm="<input type='text' class='vmi' id='newCat' placeholder='Новый пункт'>";

$('.admin_edit').on('click', '.lg', function(){             // делегирование -> манипуляции с кнопкой добавления категории
          if (!$edit && $check){
              $('.menu-edit ul').append("<li class='vert_menu_item vmi'>"+$newFragm+"</li>");
              $(this).removeClass('plus_btn').addClass('ok_btn');
              $edit=true;
          }else{
              $newCat=$('#newCat').val();
              $pattern=/^[А-Яа-яЁё\s]{3,15}$/; 
           var $patres =$pattern.test($newCat);
              console.log($patres+' '+$edit);
              if ($patres) {
                  $check=true; 
              }else{
                  $('.vert_menu_item:last-child').addClass('redshdw');
                  $check=false;
              }
              var posting=$.post('segments/load');
          }
     })
     
function LoadSegment($fragment,$class) {
  
     $.ajax({                                    //функия запроса необходимого блока из базы 
                type: "POST",
                url: "segments/load",
                //отправляем на сервер название блока и куда его грузить. Сайт или админка 
                data: 'data='+$fragment+'&edit='+$class,    
                success: function (data) {
                    if (data){  
                $("."+$class).html(data);      
            }
                }
            })
         
     $('.vert_menu').mouseover(function(){
         $('.vert_menu').css('border','3px solid red');
     })
     
   
     
} 
