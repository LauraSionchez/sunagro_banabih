var LowerCaseLetters = /[a-z]/g; 
var UpperCaseLetters = /[A-Z]/g;
var Numbers = /[0-9]/g;

var Percentage = {};
$(document).ready(function () {
    $(".title-toast").on( "mouseenter mouseleave", function (e){
        if (e.type == "mouseenter") {
            if ($(this).data('title-toast')!=null){
                toastr.info($(this).data('title-toast'));
            }     
        } else {
            toastr.remove()
        }
    });    
    $('form.validate').each(function (cont, frm) {
        $(frm).validate({
            onkeyup: false,
            errorClass: 'invalid-feedback',
            //put error message behind each form element
            errorPlacement: function (error, element) {
                var elem = $(element); //console.log(elem.next().length);
                if (elem.next().length > 0) {
                    p = elem.parent();
                    p.append(error);
                } else {
                    error.insertAfter(element);
                }

            },
            //When there is an error normally you just add the class to the element.
            // But in the case of select2s you must add it to a UL to make it visible.
            // The select element, which would otherwise get the class, is hidden from
            // view.
            highlight: function (element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass('select2-offscreen')) {
                    $('#s2id_' + elem.attr('id') + ' ul').addClass(errorClass);
                } else {
                    elem.addClass('is-invalid');
                }
            },
            //When removing make the same adjustments as when adding
            unhighlight: function (element, errorClass, validClass) {
                var elem = $(element);
                if (elem.hasClass('select2-offscreen')) {
                    $('#s2id_' + elem.attr('id') + ' ul').removeClass(errorClass);
                } else {
                    elem.removeClass('is-invalid');
                }
            }
        });
        
    })






});





/*
 * 
 * @param {type} inputString
 * @param {type} fromString
 * @param {type} toString
 * @returns {unresolved}
 */
function replace_caracter2(inputString, fromString, toString) {
    return inputString.split(fromString).join(toString);
}

/*
 * 
 */
function saveFloat(nStr) {
    monto = parseFloat(replace_caracter2(replace_caracter2(nStr, '.', ''), ',', '.'), 10);
    monto = isNaN(monto) ? 0 : monto;
    return monto;
}

/*
 * 
 */
function showFloat(nStr, dec) {
    var ceros = "000000000000";
    nStr += '';
    dec = parseInt((arguments.length > 1) ? dec : 2);
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? ',' + x[1].substr(0, dec) : ',00';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }

    return x1 + x2 + ceros.substr(0, (dec - x2.length + 1));
}