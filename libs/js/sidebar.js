$(document).ready(function(){
    $('#sidebarCollapse').on('click',function(){
        $('#sidebar').toggleClass('active');
        $('#sidebarCollapse').toggleClass('active');
        // $('#sidebarCollapse2').toggleClass('active');	
    });
}); 

// $(document).ready(function(){
//     $('#sidebarCollapse2').on('click',function(){
//         $('#sidebar').toggleClass('active');
//     });
// });  
