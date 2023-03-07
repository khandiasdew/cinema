@include('layouts.tiket')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Movie Ticket</title>
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body class="back">
    <a href="javascript:if(window.print)window.print()" class="white">check</a>
    <!-- partial:index.partial.html -->
    <!--
Inspired by: https://dribbble.com/shots/1166639-Movie-Ticket/attachments/152161
-->
<div class="ticket">
    <div class="holes-top"></div>
        <div class="title">
            <p class="cinema">CLOVER CINEMA PRESENTS</p>
            <p class="movie-title">{{ $booking->film->judul_film }}</p>
        </div>
        <div class="poster">
         <img src="{{ asset('public/Image/'.$booking->film->gambar) }}" alt="" />
            </div>
        <div class="info">
            <table>
                <tr>
                    <th>ROOM</th>
                    <th>MOON</th>
                    <th>SEAT</th>
                </tr>
                <tr>
                    <td class="bigger">1</td>
                    <td class="bigger">{{ $moon }}</td>
                    <td class="red">{{ $booking->no_kursi }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>PRICE</th>
                    <th>DATE</th>
                    <th>TIME</th>
                </tr>
                <tr>
                    <td>50K</td>
                    <td>{{ $date  }}</td>
                    <td>{{ $booking->jam_tayang }}</td>
                </tr>
            </table>
        </div>
        <div class="holes-lower"></div>
        <div class="serial">
            <table class="barcode">
                <tr></tr>
            </table>
            <table class="numbers">
                <tr>
                    <td>9</td>
                    <td>1</td>
                    <td>7</td>
                    <td>3</td>
                    <td>7</td>
                    <td>5</td>
                    <td>4</td>
                    <td>4</td>
                    <td>4</td>
                    <td>5</td>
                    <td>4</td>
                    <td>1</td>
                    <td>4</td>
                    <td>7</td>
                    <td>8</td>
                    <td>7</td>
                    <td>3</td>
                    <td>4</td>
                    <td>1</td>
                    <td>4</td>
                    <td>5</td>
                    <td>2</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src="./script.js"></script>
    <script>
        var code =
            '11010010000100111011001011101111011010001110101110011001101110010010111101110111001011001001000011011000111010110001001110111101101001011010111000101101'

        table = $('.barcode tr');
        for (var i = 0; i < code.length; i++) {
            if (code[i] == 1) {
                table.append('<td bgcolor="black">')
            } else {
                table.append('<td bgcolor="white">')
                }
        }
    </script>
</body>

</html>
