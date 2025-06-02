<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrainSystem</title>
@vite(['resources/css/app.css'])
@vite(['resources/css/register.css'])
</head>

<body>
<div id="container">
        <x-nav-bar/>
    <div id="boxContainer" class="h-10/12 w-full flex justify-center items-center">
        <div class="box w-8/12 h-9/12">
            <div id="TopTitle" class="text-4xl pt-10 flex justify-center items-center h-1/6">
                <h4>Register</h4>
            </div>

            <form action="" class="h-full">

                <div id="inputs" class=" h-3/6 pt-14 flex items-center justify-center flex-col">

                    <div id="mainInput" style="margin-top:-5em;" class="flex justify-around h-4/6 items-center flex-col w-full">
                        <div id="inputBox_1" class="input mb-4"> <!-- Añade mb-4 (margin-bottom) -->
                            <label style="font-size: 18px;">Email</label>
                            <input type="text">
                        </div>
                        
                        <div id="inputBox_2" class="input mb-4">
                            <label style="font-size: 18px;">Cedula</label>
                            <input type="text">
                        </div>
                        
                        <div id="inputBox_3" class="input mb-4">
                            <label style="font-size: 18px;">Password</label>
                            <input type="text">
                        </div>
                        
                        <div id="inputBox_4" class="input">
                            <label style="font-size: 18px;">Confirm Password</label>
                            <input type="text">
                        </div>
                    </div>

                </div>

                <div id="btnBottom" class="h-3/6 flex justify-center items-center w-full">
                    <button class="w-50 h-15 mb-10 bg-green-200 text-2xl font-bold">Confirm</button>
                </div>

            </form>

        </div>

    </div>
</div>

</body>
</html>
