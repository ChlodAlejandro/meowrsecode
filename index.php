<!DOCTYPE html>
<html>
	<head>
		<title>MEOWRSECODE | -- . --- .-- .-. ... . -.-. --- -.. . | meow meow / woof / meow meow meow / woof meow meow / woof meow woof / woof woof woof / woof / meow woof meow woof / meow meow meow / meow woof woof / woof
        </title>
        <meta charset="utf-8"/>
        <meta type="text/html">
		<style>
		@import url('https://fonts.googleapis.com/css?family=Product+Sans');
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
        @import url('https://fonts.googleapis.com/css?family=Open Sans');
        @import url('https://fonts.googleapis.com/css?family=Roboto');
        * {
            font-family: 'Product Sans', 'Montserrat', 'Open Sans', 'Roboto', 'Helvetica', 'Calibri', sans-serif;
        }
		body {
			text-align: center;
			align-content: center;
            background-color: #303030;
            color: white;
		}
		td {
			text-align: center;
			align-content: center;
			align-self: center;
			text-align: center;
		}
        textarea {
            resize: none;
        }
		</style>
        <script>
            String.prototype.replaceAll = function(search, replacement) {
                var target = this;
                return target.replace(new RegExp(search, 'g'), replacement);
            };

            function translate() {
                document.getElementById("morse").value = document.getElementById("rawtext").value.toUpperCase()
                    .replaceAll("\\.", "(dot)")
                    .replaceAll("-", "(dash)")
                    .replaceAll("\u0020", "/")
                    .replaceAll("A", ".- ")
                    .replaceAll("B", "-... ")
                    .replaceAll("C", "-.-. ")
                    .replaceAll("D", "-.. ")
                    .replaceAll("E", ". ")
                    .replaceAll("F", "..-. ")
                    .replaceAll("G", "--. ")
                    .replaceAll("H", ".... ")
                    .replaceAll("I", ".. ")
                    .replaceAll("J", ".--- ")
                    .replaceAll("K", "-.- ")
                    .replaceAll("L", ".-.. ")
                    .replaceAll("M", "-- ")
                    .replaceAll("N", "-. ")
                    .replaceAll("O", "--- ")
                    .replaceAll("P", ".--. ")
                    .replaceAll("Q", "--.- ")
                    .replaceAll("R", ".-. ")
                    .replaceAll("S", "... ")
                    .replaceAll("T", "- ")
                    .replaceAll("U", "..- ")
                    .replaceAll("V", "...- ")
                    .replaceAll("W", ".-- ")
                    .replaceAll("X", "-..- ")
                    .replaceAll("Y", "-.-- ")
                    .replaceAll("Z", "--.. ")
                    .replaceAll("1", ".---- ")
                    .replaceAll("2", "..--- ")
                    .replaceAll("3", "...-- ")
                    .replaceAll("4", "....- ")
                    .replaceAll("5", "..... ")
                    .replaceAll("6", "-.... ")
                    .replaceAll("7", "--... ")
                    .replaceAll("8", "---.. ")
                    .replaceAll("9", "----. ")
                    .replaceAll("0", "----- ");
                document.getElementById("meowrse").value = document.getElementById("morse").value
                    .replaceAll("\u0020", "\n")
                    .replaceAll("\\.", "woof ")
                    .replaceAll("-", "meow ")
                    .replaceAll("/", "\n\n");
//                switch(type) {
//                    case 0: {
//
//                        break;
//                    }
//                    case 1: {
//                        break;
//                    }
//                    case 2: {
//                        break;
//                    }
//                }
            }

            function translatem() {
                document.getElementById("rawtext").value = document.getElementById("morse").value.toUpperCase()
                    .replaceAll(" / ", " ")
                    .replaceAll(".- ", "A")
                    .replaceAll("-... ", "B")
                    .replaceAll("-.-. ", "C")
                    .replaceAll("-.. ", "D")
                    .replaceAll(". ", "E")
                    .replaceAll("..-. ", "F")
                    .replaceAll("--. ", "G")
                    .replaceAll(".... ", "H")
                    .replaceAll(".. ", "I")
                    .replaceAll(".--- ", "J")
                    .replaceAll("-.- ", "K")
                    .replaceAll(".-.. ", "L")
                    .replaceAll("-- ", "M")
                    .replaceAll("-. ", "N")
                    .replaceAll("--- ", "O")
                    .replaceAll(".--. ", "P")
                    .replaceAll("--.- ", "Q")
                    .replaceAll(".-. ", "R")
                    .replaceAll("... ", "S")
                    .replaceAll("- ", "T")
                    .replaceAll("..- ", "U")
                    .replaceAll("...- ", "V")
                    .replaceAll(".-- ", "W")
                    .replaceAll("-..- ", "X")
                    .replaceAll("-.-- ", "Y")
                    .replaceAll("--.. ", "Z")
                    .replaceAll(".---- ", "1")
                    .replaceAll("..--- ", "2")
                    .replaceAll("...-- ", "3")
                    .replaceAll("....- ", "4")
                    .replaceAll("..... ", "5")
                    .replaceAll("-.... ", "6")
                    .replaceAll("--... ", "7")
                    .replaceAll("---.. ", "8")
                    .replaceAll("----. ", "9")
                    .replaceAll("----- ", "0");
                document.getElementById("meowrse").value = document.getElementById("morse").value
                    .replaceAll("\u0020", "\n")
                    .replaceAll("\\.", "woof ")
                    .replaceAll("-", "meow ")
                    .replaceAll("/", "\n\n");
            }
        </script>
	</head>

	<body>
		<div class="center">
            <h1>MEOWRSECODE</h1>
            <table>
                <tr>
                    <td>
                        <p>Type the text here:</p>
                        <textarea type="text" id="rawtext" cols="39" rows="40" onkeydown="translate()" onkeyup="translate()" onkeypress="translate()"></textarea>
                    </td>
                    <td>
                        <p>Morse code:</p>
                        <textarea type="text" id="morse" cols="39" rows="40" onkeydown="translatem()" onkeyup="translatem()" onkeypress="translatem()"></textarea>
                    </td>
                    <td>
                        <p>MEOWRSECODE:</p>
                        <textarea type="text" id="meowrse" cols="39" rows="40" onkeydown="translate()" onkeyup="translate()" onkeypress="translate()"></textarea>
                    </td>
                </tr>
            </table>
		</div>
	</body>
</html>
