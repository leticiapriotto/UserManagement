//CPF  
function maskCpf(o, f) {
    setTimeout(function() {
        var format = mcpf(o.value);
        if (format != o.value) {
        o.value = format;
        }
    }, 1);
}

function mcpf(format) {
    var input = format.replace(/\D/g, "");
    input = input.replace(/\D/g,"")                   
    input = input.replace(/(\d{3})(\d)/,"$1.$2")     
    input = input.replace(/(\d{3})(\d)/,"$1.$2")                                  
    input = input.replace(/(\d{3})(\d{1,2})$/,"$1-$2") 
 
    return input;
}

//Phone
function maskPhone(o, f) {
    setTimeout(function() {
        var format1 = mphone(o.value);
        if (format1 != o.value) {
        o.value = format1;
        }
    }, 1);
}

function mphone(format1) {
    var input1 = format1.replace(/\D/g, "");
    input1 = input1.replace(/^0/, "");
    if (input1.length > 10) {
        input1 = input1.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");  
    } else if (input1.length > 5) {
        input1 = input1.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");                             
    } else if (input1.length > 2) {
        input1 = input1.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
    } else {
        input1 = input1.replace(/^(\d*)/, "($1");
    }
    return input1;
}