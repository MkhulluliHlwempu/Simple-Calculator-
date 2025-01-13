function triggerButtonClick(value) {
    $(`button[value='${value}']`).click();
}

$(window).keydown(function (event) {
    switch (event.which) {
        case 48: // k '0'
        case 96: // n '0'
            triggerButtonClick('0');
            break;
        case 49: // k '1'
        case 97: // n '1'
            triggerButtonClick('1');
            break;
        case 50: // k '2'
        case 98: // n '2'
            triggerButtonClick('2');
            break;
        case 51: // k '3'
        case 99: // n '3'
            triggerButtonClick('3');
            break;
        case 52: // k '4'
        case 100: // n '4'
            triggerButtonClick('4');
            break;
        case 53: // k '5'
        case 101: // n '5'
            triggerButtonClick('5');
            break;
        case 54: // k '6'
        case 102: // n '6'
            triggerButtonClick('6');
            break;
        case 55: // k '7'
        case 103: // n '7'
            triggerButtonClick('7');
            break;
        case 56: // k '8'
        case 104: // n '8'
            triggerButtonClick('8');
            break;
        case 57: // k '9'
        case 105: // n '9'
            triggerButtonClick('9');
            break;
        case 107: // n '+'
        case 187: // k '+'
            triggerButtonClick('+');
            break;
        case 109: // n '-'
        case 189: // k '-'
            triggerButtonClick('-');
            break;
        case 106: // n '*'=
            triggerButtonClick('*');
            break;
        case 111: // n '/'
        case 191: // k '/'
            triggerButtonClick('/');
            break;
        case 67: // k 'C' (Clear)
            $('#clear').click();
            break;
        case 27: // k 'Esc' (Clear)
            $('#clear').click();
            break;
        case 53: // k '%'
            $('.operator').click();
            break;
        case 13: // k Enter 
        case 187: // n '='
            $('#equalto').click();
            break;
        case 8: // k backspace
            $('#backspace').click();
            break;
     
    }
});