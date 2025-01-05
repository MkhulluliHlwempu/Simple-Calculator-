<?php

$label1 = '';
$operator = '';
$label2 = '';

    if (isset($_POST['equalto'])) {
        $label1 = $_POST['label1'];
        $operator = $_POST['operator'];
        $label2 = $_POST['label2'];

        $result = '';
        if (is_numeric($label1) && is_numeric($label2)) 
        {
            switch ($operator) {
                case '+':
                    $result = $label1 + $label2;
                    break;
                case '-':
                    $result = $label1 - $label2;
                    break;
                case '*':
                    $result = $label1 * $label2;
                    break;
                case '/':
                    $result = ($label2 != 0) ? $label1 / $label2 : 'Error (division by zero)';
                    break;
                default:
                    $result = 'Invalid Operator';
            }
        } 
        else
        {
            $result = $label1;
        }
    }
    

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator App</title>
        <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css">
        <script src ="jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <div data-role="page">
        <div data-role="header">
            <h1>Online Calculator</h1>
        </div>
        <div data-role="content" style="border: 1px solid; background: rgb(41, 41, 39); border-radius: 25px; padding: 20px;">
            <form method="post" action="">
                <p id="result">
                    <span id="label1"><?= isset($label1) ? $label1 : '' ?></span>
                    <span id="operator"><?= isset($operator) ? $operator : '' ?></span>
                    <span id="label2"><?= isset($label2) ? $label2 : '' ?></span><br>
                    <span id= "answer"> <strong><?= isset($result) ? $result : '' ?></strong></span>
                </p>
                <table>
                    <tr>
                        <td><button type="button" class="button" value="7">7</button></td>
                        <td><button type="button" class="button" value="8">8</button></td>
                        <td><button type="button" class="button" value="9">9</button></td>
                        <td><button type="button" class="operator" value="/">/</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="button" value="4">4</button></td>
                        <td><button type="button" class="button" value="5">5</button></td>
                        <td><button type="button" class="button" value="6">6</button></td>
                        <td><button type="button" class="operator" value="*">*</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="button" value="1">1</button></td>
                        <td><button type="button" class="button" value="2">2</button></td>
                        <td><button type="button" class="button" value="3">3</button></td>
                        <td><button type="button" class="operator" value="-">-</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="button" value="0">0</button></td>
                        <td><button type="button" class="button" value=".">.</button></td>
                        <td><button type="submit" id="equalto" name="equalto">=</button></td>
                        <td><button type="button" id="clear">C</button></td>
                    </tr>
                </table>
                
                <input type="hidden" name="label1" id="hiddenLabel1" value="">
                <input type="hidden" name="operator" id="hiddenOperator" value="">
                <input type="hidden" name="label2" id="hiddenLabel2" value="">
            </form>
            <script>
                $(document).ready(function () 
                {

                    $('.button').on('click', function () 
                    {

                        let value = $(this).val();
                        if ($('#operator').text() === '') {
                            $('#label1').append(value);
                        } else {
                            $('#label2').append(value);
                        }
                    });

                    $('.operator').on('click', function () {
                        let value = $(this).val();
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
            </script>
        </div>
    </div>
    </body>
    </html>
