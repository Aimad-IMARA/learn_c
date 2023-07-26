<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homd - Learn C</title>
    <style>
        * {
            margin: 2px;
            padding: 2px;
        }
    </style>
</head>

<body>
    <div style="width:60%;margin:auto">
        <h2>Register</h2>
        <form action="/register" method="POST" style="border: 2px solid black; width:50% ; margin : auto">
            @csrf
            <table>
                <tr>
                    <td><label for="">NAME : </label></td>
                    <td><input name="name" type="text" placeholder="Name"> </td>
                </tr>
                <tr>
                    <td> <label for="">EMAIL :</label></td>
                    <td> <input name="email" type="text" placeholder="Email"> </td>
                </tr>
                <tr>
                    <td><label for="">PASSWORD :</label></td>
                    <td> <input name="password" type="password" placeholder="Password"> </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Register NOW!</button>
                    </td>
                </tr>
            </table>

        </form>
    </div>

</body>

</html>
