(function ($) {
    "use strict";
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var number = $('.validate-input input[name="phonenumber"]');
    var datepicker = $('.validate-input input[name="date"]');
    var email = $('.validate-input input[name="email"]');

    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }

        var phoneno = /^\+?([0-9]{2})\)?[-. ]?([0-9]{5})[-. ]?([0-9]{4})$/;
        if($(number).val().trim().match(phoneno) == null) {
            showValidate(number);
            check=false;
        }

        if($(datepicker).val().trim() == ''){
            showValidate(datepicker);
            check=false;
        }

        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }
/*==================================================================
    [ A library to generate PDFs in JavaScript ]*/
        $('#submit_btn').click(function() {
		
            var imgData = imgPath;
    
            var doc = new jsPDF()
    
            doc.setFontSize(22)
            doc.setTextColor(92, 76, 76)
            doc.addImage(imgData, 'JPEG', 0, 0, 210, 297)
    
            var name = $('#name').val();
            var phone = $('#phonenumber').val();
            var date = $('#date').val();
            var email = $('#email').val();
        
            doc.text(23, 81, name);
            doc.text(23, 122, phone);
            doc.text(23, 162, date);
            doc.text(23, 202, email);
            doc.save('form_output.pdf');
    
       });

        return check;
    });

    $('.validate-form .input1').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();
        $(thisAlert).removeClass('alert-validate');
    }

/*==================================================================
    [ Collapse Sidebar ]*/
    $('.menu').click(function() {
        $(this).toggleClass('menu-clicked');
        $('.sidebar').toggleClass('show-sidebar hide-sidebar');
    });

    const nav = document.querySelector('.nav');
    nav.addEventListener('click',(event) => {
        nav.classList.toggle('open');
    });

})(jQuery);