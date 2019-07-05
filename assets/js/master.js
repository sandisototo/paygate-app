$(document).ready(function () {

    /*
    todo: include all your jquery needs here
    */
    /* Start All Your jquery*/
    /*==================================================================*/
    $('#btnDone').on('click', (e) => {
        let url = $('#actionInput').attr('url');
        let action = $('#actionInput').attr('action');

        $.ajax
        ({ 
            url,
            data: { action },
            type: 'post',
            success: function(result)
            {
                alert(result);
            }
        });
    });

    /*==================================================================*/
    /*End of jquery*/

    /*==================================================================*/
    /* Example Answer (Do not remove)*/
    // alert($('#exampleData').val());
});

/*
 If you are not familiar with jquery, use pure javascript
 todo: include all your javascript needs here
 */
/* Start All Your javascript*/
/*==================================================================*/


/*==================================================================*/
/*End of javascript*/

