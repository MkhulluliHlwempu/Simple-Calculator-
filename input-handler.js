$(document).ready(function () {
                    

    $('#negativePositive').on('click', function () {
        let label2 = $('#label2').text();
        let label1 = $('#label1').text();

        if ($('#operator').text() == '') {

            if (label1.startsWith('-')) {
                let text1 = $('#label1').text();
                let text2 = text1.replace("-", '');

                $('#label1').text(text2)
            }
            else {
                $('#label1').prepend('-')
            }
        }
        else {
            if (label2.startsWith('-')) {
                let text3 = $('#label2').text();
                let text4 = text3.replace("-", '');
                {

                    $('#label2').text(text4)
                }
            }
            else {
                $('#label2').prepend('-')
            }


        }




    });



    $('#backspace').on('click', function () {
        let label2Value = $('#label2').text();
        let label2Value2 = label2Value.slice(0, -1);
        $('#label2').text(label2Value2);
        $('#equalto').click();

        if ($('#label2').text() == '') {
            var operatorValue = $('#operator').text();
            let operatorValue2 = operatorValue.slice(0, -1);
            $('#operator').text(operatorValue2);
            $('#equalto').click();


            if ($('#operator').text() == '') {
                let label1Value = $('#label1').text();
                let label1Value2 = label1Value.slice(0, -1);
                $('#label1').text(label1Value2);
                $('#equalto').click();

            }
        }
    });

    $('.button').on('click', function () {
        let button = $('#label1').val();


        let value = $(this).val();


        if ($('#operator').text() === '') {
            $('#label1').append(value);

        }
        else {
            $('#label2').append(value);
        }


    });

    $('.operator').on('click', function () {
        let value = $(this).val();
        let result = $('#result').text();

        if ($('#label1').text() !== '') {
            $('#operator').text(value);

        }
    });

    $('#clear').on('click', function () {
        $('#label1').text('');
        $('#operator').text('');
        $('#label2').text('');
        $('#answer').text('0');
    });

    $('form').on('submit', function () {
        $('#hiddenLabel1').val($('#label1').text());
        $('#hiddenOperator').val($('#operator').text());
        $('#hiddenLabel2').val($('#label2').text());
    });
});