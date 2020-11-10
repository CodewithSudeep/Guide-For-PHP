<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    box-sizing: border-box;
}

.form-wrap{
    background-color: grey;
    border-radius: 20px;
    width:300px;
    margin: auto;
    height: 400px;
}
h1{
    text-align: center;
    
}
.form-group{
    padding: 10px;
}
.form-group input{
height: 30px;
width: 90%;
}
.button{
    margin-left: 50px;
    height: 40px;
    width: 100px;

}
    </style>
</head>
<body>
    <div class="form-wrap">
        <form>
            <h1>Patient form</h1>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text">
            </div>
            <div class="form-group">
                <label for="name">Age</label>
                <input type="number">
            </div>
            <div class="form-group">
                <label for="name">Height</label>
                <input type="float">
            </div>
            <div class="form-group">
                <label for="name">Disabled</label>
                <select name="" id="">
                    <option value="">true</option>
                    <option value="">False</option>

                </select>
            </div>
            <input type="submit" value = "submit" class ="button">
        </form>
    </div>
</body>
</html>