$(document).ready(function () {

   var num = 0;


        $(".mintu").click(function (){
            num++;
        $("#result").after('<button class ="btn-success m-3">'+num+'</button>');
        });





});
