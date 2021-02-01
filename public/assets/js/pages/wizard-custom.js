'use strict';
$(document).ready(function() {
    // todo
    $("#smartwizard").on("stepContent", function(e, anchorObject, stepNumber, stepDirection) {
        alert(111)
        if($('button.sw-btn-next').hasClass('disabled')){
            $('.sw-btn-group-extra').show(); // show the button extra only in the last page
        }else{
            $('.sw-btn-group-extra').hide();
        }

    });

    setTimeout(function() {
        // [ Smart Wizard ] start
        $('#smartwizard').smartWizard({
            theme: 'default',
            transitionEffect: 'fade',
            darkMode: true,
            autoAdjustHeight: false,
            useURLhash: false,
            showStepURLhash: false,
            lang: { // Language variables for button
                next: '下一步',
                previous: '上一步'
            },
            set: function() {
                alert(111)
            }
        });
    }, 700);

    $('#smartwizard .sw-toolbar').appendTo($('#smartwizard .sw-container'));


});


