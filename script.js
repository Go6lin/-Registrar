 $(document).ready(function () {
    $("#form").on("submit", function (e) {
        e.preventDefault();
        $.post('result.php', $('#form').serialize(), function(data, status){
            $("#message").html(data);
        });
        $("#message").html('Идет загрузка');
    });
});
 let age = document.querySelector('.age-input');
 let btn = document.querySelector('.submit-button');
 btn.setAttribute('disabled', true);
 age.oninput = function(){
     let ageCheck = document.querySelector('.age-input').value;
     if (!validateAge(ageCheck)){
         btn.setAttribute('disabled', true);
     }else{
         btn.removeAttribute('disabled');
     }
 }
 function validateAge(old){
     var regex = /(?<!\d)\d{2}(?!\d)/;
     return regex.test(old);
 }